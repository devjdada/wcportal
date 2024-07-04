<?php

namespace App\Http\Controllers;

use App\Http\Resources\FirstTimerCollection;
use App\Models\FirstTimer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FirstTimerController
{
    public function index()
    {
        $gallery = FirstTimer::where('station', Auth::user()->station_id)
            // ->where('status', 'active')
            ->get();
        return FirstTimerCollection::collection($gallery);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($gallery = FirstTimer::create($request->all())) {
            return  new FirstTimerCollection($gallery);
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(FirstTimer $id)
    {
        $gallery = FirstTimer::findOrfail($id);
        return  new FirstTimerCollection($gallery);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FirstTimer $id)
    {
        $gallery = FirstTimer::where('id', $id)->first();
        $gallery->update($request->all());
        return response()->json($gallery, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FirstTimer $id)
    {
        FirstTimer::where('id', $id)->delete();
        return response()->json(null, 204);
    }
}
