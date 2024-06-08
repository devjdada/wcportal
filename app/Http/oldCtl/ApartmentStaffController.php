<?php

namespace App\Http\Controllers;

use App\Models\ApartmentStaff;
use Illuminate\Http\Request;
use Image;

class ApartmentStaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (isset($request->apartmentStaff)) {
            $view = ApartmentStaff::findOrFail($request->apartmentStaff);
        } else {
            $view = ApartmentStaff::firstOrFail();
        }
        $apartmentStaffs = ApartmentStaff::all();
        return view("apartmentStaff")->with("apartmentStaffs", $apartmentStaffs)->with("view", $view);
    }

    /**
     * Display a listing of the resource.
     *ss
     * @return \Illuminate\Http\Response
     */
    public function manage()
    {
        $apartmentStaffs = ApartmentStaff::all();
        return view("ad.apartmentStaff_manage")->with("apartmentStaffs", $apartmentStaffs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ad.apartmentStaff_post');
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
            'apartmentStaff' => ['required'],
            'author' => ['required'],
            'published_date' => ['required'],
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:8192',
        ]);


        $image_uploader = new ImageUploader;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $request->image = $image_uploader->uploadImage($image, 'apartmentStaff');
        }

        $blog = new ApartmentStaff();
        $blog->image = $request->image;
        $blog->apartmentStaff = $request->apartmentStaff;
        $blog->title = $request->title;
        $blog->author = $request->author;
        $blog->posted_by = $request->posted_by;
        $blog->category = 'apartmentStaff'; //$request->category;
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
     * @param  \App\Models\ApartmentStaff  $apartmentStaff
     * @return \Illuminate\Http\Response
     */
    public function show(ApartmentStaff $apartmentStaff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ApartmentStaff  $apartmentStaff
     * @return \Illuminate\Http\Response
     */
    public function edit(ApartmentStaff $apartmentStaff)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ApartmentStaff  $apartmentStaff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ApartmentStaff $apartmentStaff)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ApartmentStaff  $apartmentStaff
     * @return \Illuminate\Http\Response
     */
    public function destroy(ApartmentStaff $apartmentStaff)
    {
        //
    }
}