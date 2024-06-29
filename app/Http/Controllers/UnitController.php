<?php

namespace App\Http\Controllers;

use App\Http\Resources\UnitCollection;
use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UnitController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return UnitCollection::collection(Unit::where('station_id', Auth::user()->station_id)->paginate(33)->SortByDesc('id'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'station_id' => 'required',
        ]);
        $unit = Unit::create($request->all());
        return response()->json($unit, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new UnitCollection(Unit::where('id', $id)->first());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $unit = Unit::where('id', $id)->first();
        $unit->update($request->all());
        return response()->json($unit, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Unit::where('id', $id)->delete();
        return response()->json(null, 204);
    }
}
