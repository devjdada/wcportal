<?php

namespace App\Http\Controllers;

use App\Http\Resources\AssignedToCollection;
use App\Http\Resources\SoulCollection;
use App\Http\Resources\SoulWCollection;
use App\Http\Resources\SoulReportByCollection;
use App\Models\Assigned;
use App\Models\Soul;
use App\Models\SoulReport;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SoulController
{
    use Traits\TextMessageTraits;
    use Traits\ShareCodeTraits;
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
            $cs = User::where('caller_squad', true)
                ->where('id', '!=', Auth::user()->id)
                ->inRandomOrder()
                ->limit(4)
                ->get();
            foreach ($cs as $caller) {
                $assign = new Assigned();
                $assign->contact_id = $soul->id;
                $assign->assigned_to = $caller->id;
                $assign->station_id = auth()->user()->station_id;
                $assign->type = 'soul';
                if (!Assigned::where('contact_id', $soul->id)->where('assigned_to', $caller->id)->exists()) {
                    if ($soul->soul_winner != $caller->id) {
                        $assign->save();
                    }
                }
            }
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
        $assigned = AssignedToCollection::collection(Assigned::where('contact_id', $id)->get());
        $report = SoulReportByCollection::collection(SoulReport::where('soul_id', $id)->get());
        return  [
            'soul' => new SoulWCollection($soul),
            'assigned' => $assigned,
            'report' => $report
        ];
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
        $soul = Soul::where('soul_winner', $id)->orderBy('id', 'desc')->get();
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
