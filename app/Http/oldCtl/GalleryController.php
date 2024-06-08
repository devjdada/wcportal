<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Resources\Gallery as GalleryResources;
use Illuminate\Support\Facades\Auth;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery = Gallery::paginate(30);
        return GalleryResources::collection($gallery);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_wen()
    {
        $gallery = Gallery::where('published', true)->get();
        return view('gallery', ['gallerys' => $gallery]);
    }

    public function manage()
    {
        $gallery = Gallery::all();
        return view('ad.gallery_manage', ['gallerys' => $gallery]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ad.gallery_upload');
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($gallery = Gallery::create($request->all())) {
            $res['status'] = true;
            $res['message'] = $gallery;
            return  new GalleryResources($res, 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $gallery = Gallery::findOrfail($id);
        return  new GalleryResources($gallery);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
        $gallery = Gallery::find($id);
        $gallery->update($request->all());

        return response()->json($gallery);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Gallery::findOrfail($id);
        if ($gallery->delete()) {
            return new GalleryResources($gallery);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy_web(Request $request)
    {
        $gallery = Gallery::find($request->id);
        unlink('images/gallery/' . $gallery->image);
        unlink('images/gallery/thumbnail/' . $gallery->image);
        $gallery->delete();
        return back()
            ->with('success', 'Image Upload successful');
    }

    public function publish(Request $request)
    {
        $gallery = Gallery::find($request->id);
        if ($request->status == true) {
            $gallery->published = false;
            $msg = 'Blog has been unpublished';
        } else {
            $gallery->published = true;
            $msg = 'Blog has been published';
        }

        $gallery->save();
        return back()
            ->with('success', $msg);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_web(Request $request)
    {
        $gallery = new Gallery();
        $gallery->uploader_by = Auth::user()->id;
        $image = $request->file('file');
        $upload_image = new ImageUploader();

        $gallery->image = $upload_image->uploadImage($image, 'gallery');
        $gallery->save();
    }
}