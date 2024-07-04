<?php

namespace App\Http\Controllers;

use App\Http\Resources\BlogCollection;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController
{
    public function index()
    {
        $gallery = Blog::where('station_id', Auth::user()->station_id)
            ->where('status', 'active')
            ->get();
        return BlogCollection::collection($gallery);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($gallery = Blog::create($request->all())) {
            return  new BlogCollection($gallery);
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(Blog $id)
    {
        $gallery = Blog::findOrfail($id);
        return  new BlogCollection($gallery);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $id)
    {
        $gallery = Blog::where('id', $id)->first();
        $gallery->update($request->all());
        return response()->json($gallery, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $id)
    {
        Blog::where('id', $id)->delete();
        return response()->json(null, 204);
    }
}
