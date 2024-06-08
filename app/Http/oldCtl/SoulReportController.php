<?php

namespace App\Http\Controllers;

use App\Models\SoulReport;
use Illuminate\Http\Request;
use App\Http\Resources\SoulReport as SoulReportResources;

class SoulReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $report = SoulReport::paginate(50);
        return SoulReportResources::collection($report);
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
        return  new SoulReportResources($report);
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
            return new SoulReportResources($report);
        }
    }

    public function my_report($id)
    {
        $report = SoulReport::where("user_id", $id);
        $report = $report->orderBy('id', 'desc')->get();
        return SoulReportResources::collection($report);
    }

    public function contact_report($id)
    {
        $report = SoulReport::where("soul_id", $id);
        $report = $report->orderBy('id', 'desc')->get();
        return SoulReportResources::collection($report);
    }
}