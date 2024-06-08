<?php

namespace App\Http\Controllers;

use App\Models\Podcast;
use App\Models\User;
use DOMDocument;
use Illuminate\Http\Request;

class PodcastController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $podcast = Podcast::where('published', true)->get();
        return view('podcast', ['podcasts'=>$podcast]);
    }


    public function manage()
    {
        $podcast = Podcast::all();
        return view('ad.podcast_manage', ['podcasts'=>$podcast]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pastor = User::where('status', 'pastor')->get();
        return view('ad.podcast_post', ['pastors' => $pastor]);
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
            'mp3' => ['required'],
            'author' => ['required'],
            'category' => ['required'],
            'description' => ['required'],
            'published_date' => ['required'],
            'image' => ['required'],
        ]);

        $image_uploader = new ImageUploader;


        $image = $request->file('image');
        
        $request->image = $image_uploader->uploadImage($image, 'podcast');

        $podcast = new Podcast();
        $podcast->image = $request->image;
        $podcast->mp3 = $request->mp3;
        $podcast->title = $request->title;
        $podcast->author = $request->author;
        $podcast->description = $request->description;
        $podcast->category = $request->category;
        $podcast->posted_by = $request->posted_by;
        $podcast->views = 0; // $request->edit_by;
        $podcast->tags =  'msg'; //$request->tags;
        $podcast->published_date = $request->published_date;
        $podcast->save();
        // Gallery::create($request->all());

        return back()
            ->with('success', 'Image Upload successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Podcast  $podcast
     * @return \Illuminate\Http\Response
     */
    public function show(Podcast $podcast)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Podcast  $podcast
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $podcast)
    {
        //
        $pastor = User::where('status', 'pastor')->get();
        $pod = Podcast::find($podcast->id);
        return view('ad.podcast_edit', ['podcast' => $pod, 'pastors'=>$pastor]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Podcast  $podcast
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'title' => ['required',  'max:255'],
            'mp3' => ['required'],
            'author' => ['required'],
            'category' => ['required'],
            'description' => ['required'],
            'published_date' => ['required'],
        ]);

        $image_uploader = new ImageUploader;
        
        $podcast =  Podcast::find($request->id);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $request->image = $image_uploader->uploadImage($image, 'podcast');
        }else{
            $request->image = $podcast->image;
        }

        $podcast->mp3 = $request->mp3;
        $podcast->title = $request->title;
        $podcast->author = $request->author;
        $podcast->description = $request->description;
        $podcast->category = $request->category;
        $podcast->views = 0; // $request->edit_by;
        $podcast->tags =  'msg'; //$request->tags;
        $podcast->published_date = $request->published_date;
        $podcast->save();
        // Gallery::create($request->all());

        return back()
            ->with('success', 'Image Upload successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Podcast  $podcast
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $blog)
    {
        $blog = Podcast::find($blog->id);
        unlink('images/blog/' . $blog->image);
        unlink('images/blog/thumbnail/' . $blog->image);
        $blog->delete();
        return back()
            ->with('success', 'Image Upload successful');
    }

    public function publish(Request $request)
    {
        $podcast = Podcast::find($request->id);
        if ($request->status == true) {
            $podcast->published = false;
            $msg = 'Blog has been unpublished';
        } else {
            $podcast->published = true;
            $msg = 'Blog has been published';
        }

        $podcast->save();
        return back()
            ->with('success', $msg);
    }

    
}
