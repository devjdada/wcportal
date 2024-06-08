<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery = Banner::where('published', true)->get();
        return view('banner', ['banner' => $gallery]);
    }

    public function manage()
    {
        $banners = Banner::all();
        return view('ad.banner_manage', ['banners' => $banners]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ad.banner_upload');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $banner = new Banner();
        $banner->uploader_by = Auth::user()->id;
        $image = $request->file('file');
        $upload_image = new ImageUploader();

        $banner->image = $upload_image->uploadImage($image, 'banners');
        $banner->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit(Banner $banner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banner $banner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $banners = Banner::find($request->id);
        unlink('images/banners/' . $banners->image);
        unlink('images/banners/thumbnail/' . $banners->image);
        $banners->delete();
        return back()
            ->with('success', 'Image Upload successful');
    }

    public function publish(Request $request)
    {
        $banner = Banner::find($request->id);
        if ($request->status == true) {
            $banner->published = false;
            $msg = 'Blog has been unpublished';
        } else {
            $banner->published = true;
            $msg = 'Blog has been published';
        }

        $banner->save();
        return back()
            ->with('success', $msg);
    }
}
