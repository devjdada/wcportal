<?php

namespace App\Http\Controllers;

use App\Http\Resources\MyContactReportCollection;
use App\Http\Resources\SoulReportCollection;
use App\Models\SoulReport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SoulReportController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $report = SoulReport::where('station_id', Auth::user()->station_id)->get();
        return SoulReportCollection::collection($report);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($report = SoulReport::create($request->all())) {
            $res['status'] = true;
            $res['message'] = $report;
            return response($res, 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SoulReport  $report
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $report = SoulReport::findOrfail($id);
        return  new SoulReportCollection($report);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SoulReport  $report
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $report = SoulReport::find($id);
        $report->update($request->all());

        return response()->json($report);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SoulReport  $report
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $report = SoulReport::findOrfail($id);
        if ($report->delete()) {
            return new SoulReportCollection($report);
        }
    }

    public function my_report($id)
    {
        $report = SoulReport::where("user_id", $id);
        $report = $report->orderBy('id', 'desc')->get();
        return MyContactReportCollection::collection($report);
    }

    public function contact_report($id)
    {
        $report = SoulReport::where("soul_id", $id);
        $report = $report->orderBy('id', 'desc')->get();
        return SoulReportCollection::collection($report);
    }
}
