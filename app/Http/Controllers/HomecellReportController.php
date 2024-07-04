<?php

namespace App\Http\Controllers;

use App\Http\Resources\HomecellReportCollection;
use App\Models\HomecellReport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomecellReportController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $report = HomecellReport::where('station_id', Auth::user()->station_id)->get();
        return HomecellReportCollection::collection($report);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (date("w") == 6) {
            $request['week'] = date('Y-m-d',  strtotime("today"));
        } else {
            $request['week'] = date('Y-m-d',  strtotime("last saturday"));
        }
        if ($report = HomecellReport::create($request->all())) {
            $res['status'] = true;
            $res['message'] = $report;
            return response($res, 200);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $report = HomecellReport::findOrfail($id);
        return  new HomecellReportCollection($report);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $report = HomecellReport::find($id);
        $report->update($request->all());

        return response()->json($report);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $report = HomecellReport::findOrfail($id);
        if ($report->delete()) {
            return new HomecellReportCollection($report);
        }
    }
}
