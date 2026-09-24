<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\BlogImages;
use App\Models\Blogs;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index(Request $request){


        $keyword = !empty($request->keyword) ? $request->keyword : null;
        $status = isset($request->status) ? $request->status : 'all';

        $blogs = Blogs::select(
            'blogs.*',
            'blog_images.image AS primary_image',
        )
            ->leftJoin('blog_images', 'blogs.id', 'blog_images.blog_id')
            ->when(!empty($keyword), function ($query) use ($keyword) {
                return $query->where('blogs.title', 'like', "%$keyword%")
                    ->orWhere('blogs.content', 'like', "%$keyword%");
            })
            ->orderBy('blogs.id', 'DESC')
            ->groupBy('blogs.id')
            ->paginate(20)
            ->withQueryString();


        return view('backend.blogs.index', [
            'blogs' => $blogs,
            'keyword' => $keyword,
        ]);

    }

    public function create(Request $request){

        $tempId = $this->getTempBlogId($request);
        $images = BlogImages::where('blog_id', $tempId)->get();

        return view('backend.blogs.create',[
            'temp_id' => $tempId,
            'images' => $images,
        ]);
    }

    public function edit(Request $request, $id){
        $this->clearTempBlogId($request);

        $blog = Blogs::findOrFail($id);
        $tempId = $blog->id;
        $images = BlogImages::where('blog_id', $tempId)->get();

        return view('backend.blogs.create',[
            'temp_id' => $tempId,
            'blog' => $blog,
            'images' => $images,
        ]);
    }

    public function store(Request $request){

        $request->validate([
            'slug' => 'required',
            'title' => 'required',
        ]);

        if(!empty($request->id)){
            $save = Blogs::find($request->id);

            $msg = 'Blog has been Updated Successfully!';
        }
        else{

            $save = new Blogs();
            $save->status = 1;

            $msg = 'Blogs has been Created Successfully!';
        }

        $save->slug = !empty($request->slug) ? $request->slug : null;
        $save->title = !empty($request->title) ? $request->title : null;
        $save->content = !empty($request->contents) ? $request->contents : null;
        $save->save();

        if (!empty(session('temp_blog_id'))){
            $sessionId = session('temp_blog_id');
            $this->clearTempBlogId($request);
            $images = BlogImages::where('blog_id', $sessionId)->get();

            $primaryImageId = 0;
            foreach ($images as $img){

                if (!empty($img->is_primary)){
                    $primaryImageId = $img->id;
                }

                $image = BlogImages::find($img->id);
                $image->blog_id = $save->id;
                $image->save();
            }

            //Set Primary Image if not has been set
            if (empty($primaryImageId)){
                $image = BlogImages::where('blog_id', $sessionId)->first();
                $image = BlogImages::find($img->id);
                $image->is_primary = 1;
                $image->save();
            }
        }

        session()->flash('success', $msg);
        return redirect( route('backend.blogs.index') );

    }

    public function delete(Request $request){

        $blog = Blogs::find($request->id);
        $blog->delete();

        return response()->json([
            'status' => 'success',
            'id' =>  $request->id,
        ]);
    }

    public function getTempBlogId(Request $request){
        $rand = rand(10000000,99999999) . time();
        $tempId = !empty(session('temp_blog_id')) ? session('temp_blog_id') : null;
        if (empty($tempId)){
            $request->session()->put('temp_blog_id', $rand);
            $request->session()->save();

            $tempId = $rand;
        }

        return $tempId;
    }

    public function clearTempBlogId(Request $request){

        $tempId = !empty(session('temp_blog_id')) ? session('temp_blog_id') : null;
        if (!empty($tempId)){
            $request->session()->forget('temp_blog_id');
            $request->session()->save();
        }

        return true;
    }

    public function imageUpload(Request $request){

        $status = 'error';
        $file_name = '';

        if($request->ajax()){

            $img = $this->commonImageUpload($request, 'blogs');
            $file_name = $img['file_name'];
            $status = $img['status'];
            $isPrimary = 0;

            $imgId = 0;
            if (!empty($file_name)){
                $img = new BlogImages();
                $img->blog_id = $request->id;
                $img->image = $file_name;
                $img->is_primary = 0;
                $img->status = 1;
                $img->save();

                $imgId = $img->id;
                $isPrimary = $img->is_primary;
            }

            return response()->json([
                'status' =>  $status,
                'filename' =>  $file_name,
                'id' =>  $imgId,
                'is_primary' =>  $isPrimary,
            ]);

        }
    }

    public function slugGenerator(Request $request){

        $status = 'success';
        $isExist = 0;
        $id = $request->id;
        $slug = $this->generateSeoURL($request->title);

        $getCount = Blogs::where('slug', $slug)->count();
        if ($getCount > 0){
            $item = Blogs::where('id', $id)->first();
            if (!empty($item)){
                if ($item->slug != $slug){
                    $isExist = 1;
                }
            }else{
                $isExist = 1;
            }
        }

        return response()->json([
            'status' =>  $status,
            'is_exist' =>  $isExist,
            'slug' =>  $slug,
        ]);
    }

    public function deleteImage(Request $request){

        $img = BlogImages::find($request->id);
        $img->delete();

        return response()->json([
            'status' => 'success',
            'id' =>  $request->id,
        ]);
    }

    public function setPrimaryImage(Request $request){

        $img = BlogImages::find($request->id);

        $images = BlogImages::where('blog_id', $img->blog_id)->get();
        if (!empty($images)){
            foreach ($images as $image){
                $i = BlogImages::find($image->id);
                $i->is_primary = 0;
                $i->save();
            }
        }

        $img->is_primary = 1;
        $img->save();

        $images = [];
        $getImages = BlogImages::where('blog_id', $img->blog_id)->get();
        foreach ($getImages as $image){

            $isPrimary = !empty($image->is_primary) ? 1 : 0;

            $images[] = [
                'filename' =>  $image->image,
                'id' =>  $image->id,
                'is_primary' =>  $isPrimary,
            ];
        }

        return response()->json([
            'status' => 'success',
            'id' =>  $request->id,
            'images' =>  $images,
        ]);
    }

    public function status(Request $request){
        $req = $request->all();
        $id = !empty($req['id']) ? $req['id'] : 0;

        $text = '';
        $class = '';

        if (!empty($id)){
            $get = Blogs::find($id);

            if ($get->status == 1){
                $get->status = 0;
            }else {
                $get->status = 1;
            }
            $get->save();
            $status = 'success';
            $get = Blogs::find($id);
            $getStatus = commonStatus($get->status);
            $text = $getStatus['text'];
            $class = $getStatus['class'];

        }else{
            $status = 'error';
        }


        $out = [
            'status' => $status,
            'text' => $text,
            'class' => $class,
        ];
        return response()->json($out);

    }
}
