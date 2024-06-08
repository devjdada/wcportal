<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use App\Http\Resources\Image as ImageResources;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $image = Image::paginate(30);
        return ImageResources::collection($image);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if (!$request->hasFile('images')) {
            return response()->json(['upload_file_not_found'], 400);
        }

        $allowedfileExtension = ['jpeg', 'jpg', 'png'];
        $files = $request->file('images');
        $errors = [];

        foreach ($files as $file) {

            $extension = $file->getClientOriginalExtension();
            $name = $file->getClientOriginalName();
            $fileNameToStore = $name . '_' . time() . '.' . $extension;


            $check = in_array($extension, $allowedfileExtension);


            if ($check) {
                foreach ($request->images as $mediaFiles) {

                    $path = $file->storeAs('public/files', $fileNameToStore);
                    $name = $mediaFiles->getClientOriginalName();

                    $save = new Image();
                    $save->gallery_id = $request->gallery_id;
                    $save->user_id = $request->user_id;
                    $save->title = $name;
                    $save->image = url($path);
                    $save->icon =  asset($path);
                    $save->thumbnail = $path;
                    $save->save();
                }
            } else {
                return response()->json(['invalid_file_format'], 422);
            }

            return response()->json(['file_uploaded'], 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $image = Image::findOrfail($id);
        return  new ImageResources($image);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
        $image = Image::find($id);
        $image->update($request->all());

        return response()->json($image);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = Image::findOrfail($id);
        if ($image->delete()) {
            return new ImageResources($image);
        }
    }
}