<?php

namespace App\Http\Controllers;

use App\Http\Resources\NewConvertCollection;
use App\Models\NewConvert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewConvertController
{
    public function index()
    {
        $newConvert = NewConvert::where('station', Auth::user()->station_id)
            ->where('status', 'active')
            ->get();
        return NewConvertCollection::collection($newConvert);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($newConvert = NewConvert::create($request->all())) {
            return  new NewConvertCollection($newConvert);
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(NewConvert $id)
    {
        $newConvert = NewConvert::findOrfail($id);
        return  new NewConvertCollection($newConvert);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, NewConvert $id)
    {
        $newConvert = NewConvert::where('id', $id)->first();
        $newConvert->update($request->all());
        return response()->json($newConvert, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NewConvert $id)
    {
        NewConvert::where('id', $id)->delete();
        return response()->json(null, 204);
    }
}
