<?php

namespace App\Http\Controllers;

use App\Http\Resources\UnitMemberCollection;
use App\Models\UnitMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UnitMemberController
{
    public function index()
    {
        return UnitMemberCollection::collection(UnitMember::where('station_id', Auth::user()->station_id)->get()->SortByDesc('id'));
    }


    public function store(Request $request)
    {
        $unit = UnitMember::create($request->all());
        return response()->json($unit, 201);
    }


    public function show(string $id)
    {
        return new UnitMemberCollection(UnitMember::where('id', $id)->first());
    }


    public function update(Request $request, string $id)
    {
        $unit = UnitMember::where('id', $id)->first();
        $unit->update($request->all());
        return response()->json($unit, 200);
    }


    public function destroy(string $id)
    {
        UnitMember::where('id', $id)->delete();
        return response()->json(null, 204);
    }
}
