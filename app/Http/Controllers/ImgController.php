<?php

namespace App\Http\Controllers;

use App\Http\Resources\ImgCollection;
use App\Models\Img;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ImgController
{
    public function index()
    {
        $gallery = Img::get();
        return ImgCollection::collection($gallery);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($gallery = Img::create($request->all())) {
            return  new ImgCollection($gallery);
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(Img $id)
    {
        $gallery = Img::findOrfail($id);
        return  new ImgCollection($gallery);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Img $id)
    {
        $gallery = Img::where('id', $id)->first();
        $gallery->update($request->all());
        return response()->json($gallery, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Img $id)
    {
        Img::where('id', $id)->delete();
        return response()->json(null, 204);
    }
}
