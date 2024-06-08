<?php

namespace App\Http\Controllers;

use Image;
use Imagick;

class ImageUploader extends Controller
{
    //

    public function uploadImage($image, $folder)
    {
        // $image = $request->file('image');
        $image_name = time() . '.' . $image->extension();

        $destinationPath = public_path('/images/' . $folder . '/thumbnail');
        $img = Image::make($image->path());
        $img->crop(
            200,
            200,
            50,
            50,
            function ($constraint) {
                $constraint->aspectRatio();
            }
        )->save($destinationPath . '/' . $image_name);

        $destinationPath = public_path('/images/' . $folder);
        $image->move($destinationPath, $image_name);
        return  $image_name;
    }

    // public function pdfThumbnail($file){
    //     $imagick = new Imagick();
    //     $thumbnail =  now() . '.jpg';
    //     $imagick->readImage('/pdfs/'. $file[0]);
    //     $imagick->writeImage('/pdfs/images/'. $thumbnail);
    //     return $thumbnail;
    // }

}