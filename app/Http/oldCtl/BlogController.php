<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Resources\Blog as BlogResources;


class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = Blog::paginate(30);
        return BlogResources::collection($blog);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($blog = Blog::create($request->all())) {
            $res['status'] = true;
            $res['message'] = $blog;
            return response($res, 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $blog = Blog::findOrfail($id);
        return  new BlogResources($blog);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
        $blog = Blog::find($id);
        $blog->update($request->all());

        return response()->json($blog);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::findOrfail($id);
        if ($blog->delete()) {
            return new BlogResources($blog);
        }
    }



    public function index_web()
    {
        $blog = Blog::where('published', true)->where('category', 'blog')->get();
        return view('blog.blogs', ['blogs' => $blog]);
    }

    public function publication()
    {
        $blog = Blog::where('published', true)->where('category', 'blog')->get();
        return view('blog.publication', ['blogs' => $blog]);
    }

    public function publications()
    {
        $blog = Blog::where('published', true)->where('category', 'blog')->get();
        return view('blog.publications', ['blogs' => $blog]);
    }


    public function publication_current(Request $request)
    {
        $blog = Blog::wherePublished(true)->whereCategory($request->category)->first();
        return view('blog.publication_current', ['blog' => $blog]);
    }

    public function published()
    {
        $blog = Blog::all();
        return view('blog.blogs', ['blogs' => $blog]);
    }



    public function blog_manage()
    {
        $blog = Blog::all();
        return view('ad.blog_manage', ['blogs' => $blog]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pastor = User::where('status', 'pastor')->get();
        return view('ad.blog_post', ['pastors' => $pastor]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_web(Request $request)
    {

        $validatedData = $request->validate([
            'title' => ['required',  'max:255'],
            'blog' => ['required'],
            'author' => ['required'],
            'category' => ['required'],
            'description' => ['required'],
            'published_date' => ['required'],
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:8192',
        ]);

        $image_uploader = new ImageUploader;


        $image = $request->file('image');
        
        $request->image = $image_uploader->uploadImage($image, 'blog');

        $blog = new Blog();
        $blog->image = $request->image;
        $blog->blog = $request->blog;
        $blog->title = $request->title;
        $blog->author = $request->author;
        $blog->description = $request->description;
        $blog->category = $request->category;
        $blog->posted_by = $request->posted_by;
        $blog->views = 0; // $request->edit_by;
        $blog->tags =  $request->tags;//$request->tags;
        $blog->published_date = $request->published_date;
        $blog->save();
        // Gallery::create($request->all());

        return back()
            ->with('success', 'Image Upload successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show_web(Request $blog)
    {
        $blog = Blog::find($blog->id);
        $views = $blog->views + 1;
        $blog->views = $views;
        $blog->save();
        return view('blog.blog', ['blog' => $blog]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $blog)
    {
        $pastor = User::get();
        // $pastor = User::where('status', 'pastor')->get();
        $blog = Blog::find($blog->id);
        return view('ad.blog_edit', ['blog' => $blog, 'pastors'=>$pastor]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog  
     * @return \Illuminate\Http\Response
     */
    public function update_web(Request $request)
    {
        $validatedData = $request->validate([
            'title' => ['required',  'max:255'],
            'blog' => ['required'],
            'author' => ['required'],
            'category' => ['required'],
            'description' => ['required'],
            'published_date' => ['required'],
        ]);

        $image_uploader = new ImageUploader;

        $blog = Blog::find($request->id);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $request->image = $image_uploader->uploadImage($image, 'blog');
        }else{
            $request->image = $blog->image;
        }
        
        $blog->image = $request->image;
        $blog->blog = $request->blog;
        $blog->title = $request->title;
        $blog->author = $request->author;
        $blog->description = $request->description;
        $blog->category = $request->category;
        $blog->posted_by = $request->posted_by;
        $blog->published_date = $request->published_date;
        $blog->save();
        // Gallery::create($request->all());

        return back()
            ->with('success', 'Image Upload successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy_web(Request $blog)
    {
        $blog = Blog::find($blog->id);
        unlink('images/blog/' . $blog->image);
        unlink('images/blog/thumbnail/' . $blog->image);
        $blog->delete();
        return back()
            ->with('success', 'Image Upload successful');
    }

    public function publish(Request $request)
    {
        $blog = Blog::find($request->id);
        if ($request->status == true) {
            $blog->published = false;
            $msg = 'Blog has been unpublished';
        } else {
            $blog->published = true;
            $msg = 'Blog has been published';
        }

        $blog->save();
        return back()
            ->with('success', $msg);
    }
    
}