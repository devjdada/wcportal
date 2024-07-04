<?php

namespace App\Http\Controllers;

use App\Http\Resources\TestimonyCollection;
use App\Models\Testimony;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestimonyController
{
    public function index()
    {
        $gallery = Testimony::where('station_id', Auth::user()->station_id)
            ->where('status', 'active')
            ->get();
        return TestimonyCollection::collection($gallery);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($gallery = Testimony::create($request->all())) {
            return  new TestimonyCollection($gallery);
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(Testimony $id)
    {
        $gallery = Testimony::findOrfail($id);
        return  new TestimonyCollection($gallery);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimony $id)
    {
        $gallery = Testimony::where('id', $id)->first();
        $gallery->update($request->all());
        return response()->json($gallery, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimony $id)
    {
        Testimony::where('id', $id)->delete();
        return response()->json(null, 204);
    }
}
