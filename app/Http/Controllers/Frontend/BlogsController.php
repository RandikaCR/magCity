<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\BlogImages;
use App\Models\Blogs;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index(Request $request){

        $keyword = !empty($request->keyword) ? $request->keyword : null;

        $blogs = Blogs::select(
            'blogs.*',
            'blog_images.image AS primary_image',
        )
            ->leftJoin('blog_images', 'blogs.id', 'blog_images.blog_id')
            ->when(!empty($keyword), function ($query) use ($keyword) {
                return $query->where('blogs.title', 'like', "%$keyword%")
                    ->orWhere('blogs.content', 'like', "%$keyword%");
            })
            ->where('blogs.status', 1)
            ->orderBy('blogs.id', 'DESC')
            ->groupBy('blogs.id')
            ->paginate(12)
            ->withQueryString();

        return view('frontend.blogs.index', ['blogs' => $blogs]);
    }

    public function view(Request $request, $slug){

        $blog = Blogs::where('blogs.slug',  $slug)->where('status', 1)->first();

        if (empty($blog)) {
            return redirect()->route('frontend.blogs.index');
        }

        $images = BlogImages::where('blog_id', $blog->id)->orderBy('is_primary', 'DESC')->get();


        $recentBlogs = Blogs::select(
            'blogs.*',
            'blog_images.image AS primary_image',
        )
            ->leftJoin('blog_images', 'blogs.id', 'blog_images.blog_id')
            ->where('blogs.id', '!=', $blog->id)
            ->where('blogs.status', 1)
            ->orderBy('blogs.id', 'DESC')
            ->groupBy('blogs.id')
            ->take(6)
            ->get();

        return view('frontend.blogs.view', [
            'blog' => $blog,
            'images' => $images,
            'recent_blogs' => $recentBlogs,
        ]);
    }

}
