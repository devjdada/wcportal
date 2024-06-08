<?php

namespace App\Http\Controllers;

use App\Models\ApartmentComplain;
use Illuminate\Http\Request;
use Image;

class ApartmentComplainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (isset($request->apartmentComplain)) {
            $view = ApartmentComplain::findOrFail($request->apartmentComplain);
        } else {
            $view = ApartmentComplain::firstOrFail();
        }
        $apartmentComplains = ApartmentComplain::all();
        return view("apartmentComplain")->with("apartmentComplains", $apartmentComplains)->with("view", $view);
    }

    /**
     * Display a listing of the resource.
     *ss
     * @return \Illuminate\Http\Response
     */
    public function manage()
    {
        $apartmentComplains = ApartmentComplain::all();
        return view("ad.apartmentComplain_manage")->with("apartmentComplains", $apartmentComplains);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ad.apartmentComplain_post');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'title' => ['required',  'max:255'],
            'apartmentComplain' => ['required'],
            'author' => ['required'],
            'published_date' => ['required'],
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:8192',
        ]);


        $image_uploader = new ImageUploader;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $request->image = $image_uploader->uploadImage($image, 'apartmentComplain');
        }

        $blog = new ApartmentComplain();
        $blog->image = $request->image;
        $blog->apartmentComplain = $request->apartmentComplain;
        $blog->title = $request->title;
        $blog->author = $request->author;
        $blog->posted_by = $request->posted_by;
        $blog->category = 'apartmentComplain'; //$request->category;
        $blog->tags =  'msg'; //$request->tags;
        $blog->published_date = $request->published_date;
        $blog->save();
        // Gallery::create($request->all());

        return back()
            ->with('success', 'Image Upload successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ApartmentComplain  $apartmentComplain
     * @return \Illuminate\Http\Response
     */
    public function show(ApartmentComplain $apartmentComplain)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ApartmentComplain  $apartmentComplain
     * @return \Illuminate\Http\Response
     */
    public function edit(ApartmentComplain $apartmentComplain)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ApartmentComplain  $apartmentComplain
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ApartmentComplain $apartmentComplain)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ApartmentComplain  $apartmentComplain
     * @return \Illuminate\Http\Response
     */
    public function destroy(ApartmentComplain $apartmentComplain)
    {
        //
    }
}