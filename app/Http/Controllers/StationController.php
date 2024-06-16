<?php

namespace App\Http\Controllers;

use App\Http\Resources\StationCollection;
use App\Models\Station;

class StationController
{
    public function index()
    {
        return StationCollection::collection(Station::paginate(3)->SortByDesc('id'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function basic()
    {
        return StationCollection::collection(Station::select('id', 'location', 'phone', 'email')->get());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return  new StationCollection(Station::findOrfail($id));
    }
}
