<?php

namespace App\Http\Controllers;

abstract class Controller
{

    public function generateSeoURL($string, $withoutTimestamp = 0, $wordLimit = 0){
        $separator = '-';

        if($wordLimit != 0){
            $wordArr = explode(' ', $string);
            $string = implode(' ', array_slice($wordArr, 0, $wordLimit));
        }

        $quoteSeparator = preg_quote($separator, '#');

        $trans = array(
            '&.+?;'                 => '',
            '[^\w\d _-]'            => '',
            '\s+'                   => $separator,
            '('.$quoteSeparator.')+'=> $separator
        );

        $string = strip_tags($string);
        foreach ($trans as $key => $val){
            $string = preg_replace('#'.$key.'#iu', $val, $string);
        }

        $string = strtolower($string);

        if (!empty($withoutTimestamp)){
            $slug = trim(trim($string, $separator));
        }else{
            $slug = trim(trim($string, $separator)) . '-' . time();
        }

        return $slug;
    }

    public function commonImageUpload($req, $folder = ''){

        $status = 'error';
        $file_name = '';

        $folder = !empty($folder) ? $folder . '/' : '';

        $image_data = $req->image;
        $image_array_1 = explode(";", $image_data);
        $image_array_2 = explode(",", $image_array_1[1]);
        $data = base64_decode($image_array_2[1]);
        $image_name = time() . '_temp.png';
        $upload_path = public_path('assets/common/images/' . $folder . $image_name);
        file_put_contents($upload_path, $data);

        if ( file_exists($upload_path)) {

            $file_name = time() . '.jpg';
            $file_name_with_path = public_path('assets/common/images/' . $folder . $file_name);
            $image = imagecreatefrompng($upload_path);
            imagejpeg($image, $file_name_with_path, 90);
            imagedestroy($image);

            unlink($upload_path);
            $status = 'Image Uploaded!';
        }

        $out = [
            'status' => $status,
            'file_name' => $file_name,
        ];
        return $out;
    }
}
