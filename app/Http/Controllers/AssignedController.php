<?php

namespace App\Http\Controllers;

use App\Http\Resources\AssignedCollection;
use App\Http\Resources\AssignedToCollection;
use App\Models\Assigned;
use Illuminate\Http\Request;

class AssignedController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Assigned = Assigned::get()->SortByDesc('id');
        return AssignedCollection::collection($Assigned);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($Assigned = Assigned::create($request->all())) {
            // $this->sendTextContent($this->phoneCode($request->phone));
            return  new AssignedCollection($Assigned);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Assigned = Assigned::findOrfail($id);
        return  new AssignedCollection($Assigned);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Assigned = Assigned::find($id);
        $Assigned->update($request->all());
        return new AssignedCollection($Assigned);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Assigned = Assigned::findOrfail($id);
        if ($Assigned->delete()) {
            return new AssignedCollection($Assigned);
        }
    }

    public function my_assigned($id)
    {
        $Assigned = Assigned::where('assigned_to', $id)
            ->orderBy('id', 'desc')->get();
        return AssignedToCollection::collection($Assigned);
    }

    public function station_contact($station_id)
    {
        $Assigned = Assigned::where('station_id', $station_id);
        $Assigned = $Assigned->orderBy('id', 'desc')->get();
        return AssignedCollection::collection($Assigned);
    }

    public function basic($station_id)
    {
        $Assigned = Assigned::select('id', 'phone', 'location', 'Assigned_winner')->where('station_id', $station_id);
        $Assigned = $Assigned->orderBy('id', 'desc')->get();
        return AssignedCollection::collection($Assigned);
    }
}
