<?php

namespace App\Http\Controllers;

use App\Models\HomecellReport;
use Illuminate\Http\Request;
use App\Http\Resources\HomecellReport as HomecellReportResources;
use App\Models\District;
use App\Models\Homecell;
use App\Models\Province;
use Illuminate\Support\Facades\Auth;

class HomecellReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $homecellReport = HomecellReport::paginate(30);
        return HomecellReportResources::collection($homecellReport);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $c = $request->input('children');
        $m = $request->input('male');
        $f = $request->input('female');
        $request['total'] = $c + $m + $f;

        if ($homecellReport = HomecellReport::create($request->all())) {
            $res['status'] = true;
            $res['message'] = $homecellReport;
            return response($res, 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\HomecellReport  $homecellReport
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $homecellReport = HomecellReport::findOrfail($id);
        return  new HomecellReportResources($homecellReport);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HomecellReport  $homecellReport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
        $homecellReport = HomecellReport::find($id);
        $homecellReport->update($request->all());

        return response()->json($homecellReport);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HomecellReport  $homecellReport
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $homecellReport = HomecellReport::findOrfail($id);
        if ($homecellReport->delete()) {
            return new HomecellReportResources($homecellReport);
        }
    }




    public function monthReport(Request $request)
    {
        if (isset($request->month)) {
            $month = $request->month . '-01';
        } else {
            $month = date('Y-m-d');
        }
        $total = [];
        $nc = [];
        $ft = [];
        $male = [];
        $female = [];
        $children = [];
        // $districts = District::all();
        // $province = Province::all();
        $homecells = Homecell::all();
        $reports = HomecellReport::whereRaw('MONTH(week) = MONTH(?)', [$month])->get();
        foreach ($reports as $report) {
            $total[] =  $report->total;
            $nc[] =  $report->new_convert;
            $ft[] =  $report->first_time;
            $male[] =  $report->male;
            $female[] =  $report->female;
            $children[] =  $report->children;
        }
        return view('ad.wsf_monthly_report', [
            'nc' => $nc,
            'ft' => $ft,
            'children' => $children,
            'female' => $female,
            'male' => $male,
            'total' => $total,
            'reports' => $reports,
            //     'provinces' => $province,
            //     'districts' => $districts,
            'homecells' => $homecells
        ]);
    }

    public function show_web(Request $request)
    {
        if (isset($request->week)) {
            $week = $request->week;
        } else {
            $week = date('Y-m-d',  strtotime("last saturday"));
        }


        $total = [];
        $nc = [];
        $ft = [];
        $male = [];
        $female = [];
        $children = [];
        $districts = District::all();
        $province = Province::all();
        $homecells = Homecell::all();
        $reports = HomecellReport::whereWeek($week)->get();
        foreach ($reports as $report) {
            $total[] =  $report->total;
            $nc[] =  $report->new_convert;
            $ft[] =  $report->first_time;
            $male[] =  $report->male;
            $female[] =  $report->female;
            $children[] =  $report->children;
        }
        return view('ad.wsf_weekly_report', [
            'nc' => $nc,
            'ft' => $ft,
            'children' => $children,
            'female' => $female,
            'male' => $male,
            'total' => $total,
            'reports' => $reports,
            'provinces' => $province,
            'districts' => $districts,
            'homecells' => $homecells
        ]);
    }


    public function yetToSubmtte()
    {
        if (date("w") == 6) {
            $week = date('Y-m-d',  strtotime("today"));
            // $request['week'] = date('W');
        } else {
            $week = date('Y-m-d',  strtotime("last saturday"));
            // $request['week'] = date('W') - 1;
        }
        $homecells = Homecell::all();
        $reports = HomecellReport::whereWeek($week)->get();
        $h = [];
        $r = [];
        foreach ($homecells as $homecell) {
            $h[] = $homecell->id;
        }
        foreach ($reports as $report) {
            $r[] = $report->homecell_id;
        }
        $result = array_diff($h, $r);

        $yet = [];
        foreach ($result as $key => $value) {
            $yet[] = $value;
        }

        return $yet;
    }
    public function index_web()
    {
        if (date("w") == 6) {
            $week = date('Y-m-d',  strtotime("today"));
            // $request['week'] = date('W');
        } else {
            $week = date('Y-m-d',  strtotime("last saturday"));
            // $request['week'] = date('W') - 1;
        }
        $total = [];
        $nc = [];
        $ft = [];
        $male = [];
        $female = [];
        $children = [];
        $currentMonth = date('m');
        $districts = District::all();
        $province = Province::all();
        $homecells = Homecell::all();
        $reports = HomecellReport::whereWeek($week)->get();
        $newHomecell = Homecell::whereRaw('MONTH(created_at) = ?', [$currentMonth])->get();
        foreach ($reports as $report) {
            $total[] =  $report->total;
            $nc[] =  $report->new_convert;
            $ft[] =  $report->first_time;
            $male[] =  $report->male;
            $female[] =  $report->female;
            $children[] =  $report->children;
        }
        return view('ad.wsf_report', [
            'nc' => $nc,
            'ft' => $ft,
            'children' => $children,
            'female' => $female,
            'male' => $male,
            'total' => $total,
            'reports' => $reports,
            'provinces' => $province,
            'districts' => $districts,
            'homecells' => $homecells,
            'newHomecell' => $newHomecell
        ]);
    }

    public function store_web(Request $request)
    {

        $c = $request->children;
        $m = $request->male;
        $f = $request->female;
        $request['total'] = $c + $m + $f;
        $request['user_id'] = Auth::user()->id;
        // TODO verfy the time of submtting the report
        if (date("w") == 6) {
            $request['week'] = date('Y-m-d',  strtotime("today"));
            // $request['week'] = date('W');
        } else {
            $request['week'] = date('Y-m-d',  strtotime("last saturday"));
            // $request['week'] = date('W') - 1;
        }

        $request['week'] = date('Y-m-d',  strtotime("last saturday"));



        if ($homecellReport = HomecellReport::create($request->all())) {
            return back()
                ->with('success', 'Homecell Report  Saved');
        }
    }
}
