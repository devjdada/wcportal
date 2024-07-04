<?php

namespace App\Http\Controllers;

use App\Http\Resources\GalleryCollection;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GalleryController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gallery = Gallery::where('station_id', Auth::user()->station_id)
            ->where('status', 'active')
            ->get();
        return GalleryCollection::collection($gallery);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($gallery = Gallery::create($request->all())) {
            return  new GalleryCollection($gallery);
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(Gallery $id)
    {
        $gallery = Gallery::findOrfail($id);
        return  new GalleryCollection($gallery);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gallery $id)
    {
        $gallery = Gallery::where('id', $id)->first();
        $gallery->update($request->all());
        return response()->json($gallery, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $id)
    {
        Gallery::where('id', $id)->delete();
        return response()->json(null, 204);
    }
}
