<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Image;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (isset($request->about)) {
            $view = About::findOrFail($request->about);
        } else {
            $view = About::firstOrFail();
        }
        $abouts = About::all();
        return view("about")->with("abouts", $abouts)->with("view", $view);
    }

    /**
     * Display a listing of the resource.
     *ss
     * @return \Illuminate\Http\Response
     */
    public function manage()
    {
        $abouts = About::all();
        return view("ad.about_manage")->with("abouts", $abouts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ad.about_post');
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
            'about' => ['required'],
            'author' => ['required'],
            'published_date' => ['required'],
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:8192',
        ]);


        $image_uploader = new ImageUploader;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $request->image = $image_uploader->uploadImage($image, 'about');
        }

        $blog = new About();
        $blog->image = $request->image;
        $blog->about = $request->about;
        $blog->title = $request->title;
        $blog->author = $request->author;
        $blog->posted_by = $request->posted_by;
        $blog->category = 'about'; //$request->category;
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
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        //
    }
}