<?php

namespace App\Http\Controllers;

use App\Models\WofbiResult;
use Illuminate\Http\Request;

use App\Http\Resources\WofbiResult as WofbiResultResources;


class WofbiResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wofbiResult = WofbiResult::get();
        return WofbiResultResources::collection($wofbiResult);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($wofbiResult = WofbiResult::create($request->all())) {
            $res['status'] = true;
            $res['message'] = $wofbiResult;
            return response($res, 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\WofbiResult  $wofbiResult
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $wofbiResult = WofbiResult::findOrfail($id);
        return  new WofbiResultResources($wofbiResult);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\WofbiResult  $wofbiResult
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
        $wofbiResult = WofbiResult::find($id);
        $wofbiResult->update($request->all());

        return response()->json($wofbiResult);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\WofbiResult  $wofbiResult
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $wofbiResult = WofbiResult::findOrfail($id);
        if ($wofbiResult->delete()) {
            return new WofbiResultResources($wofbiResult);
        }
    }
}