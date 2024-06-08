<?php

namespace App\Http\Controllers;

use App\Http\Resources\SoulCollection;
use App\Models\Soul;
use Illuminate\Http\Request;

class SoulController
{
    use Traits\TextMessageTraits;
    use Traits\ShareCodeTraits;
    /**
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $soul = Soul::get()->SortByDesc('id');
        return SoulCollection::collection($soul);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($soul = Soul::create($request->all())) {
            $this->sendTextContent($this->phoneCode($request->phone));
            return  new SoulCollection($soul);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $soul = Soul::findOrfail($id);
        return  new SoulCollection($soul);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $soul = Soul::find($id);
        $soul->update($request->all());
        return new SoulCollection($soul);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $soul = Soul::findOrfail($id);
        if ($soul->delete()) {
            return new SoulCollection($soul);
        }
    }

    public function my_contact($id)
    {
        $soul = Soul::where('soul_winner', $id);
        $soul = $soul->orderBy('id', 'desc')->get();
        return SoulCollection::collection($soul);
    }

    public function station_contact($station_id)
    {
        $soul = Soul::where('station_id', $station_id);
        $soul = $soul->orderBy('id', 'desc')->get();
        return SoulCollection::collection($soul);
    }

    public function basic($station_id)
    {
        $soul = Soul::select('id', 'phone', 'location', 'soul_winner')->where('station_id', $station_id);
        $soul = $soul->orderBy('id', 'desc')->get();
        return SoulCollection::collection($soul);
    }
}
