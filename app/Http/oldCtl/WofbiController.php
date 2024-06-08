<?php

namespace App\Http\Controllers;

use App\Models\Wofbi;
use Illuminate\Http\Request;

use App\Http\Resources\Wofbi as WofbiResources;


class WofbiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wofbi = Wofbi::get();
        return WofbiResources::collection($wofbi);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($wofbi = Wofbi::create($request->all())) {
            $res['status'] = true;
            $res['message'] = $wofbi;
            return response($res, 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Wofbi  $wofbi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $wofbi = Wofbi::findOrfail($id);
        return  new WofbiResources($wofbi);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Wofbi  $wofbi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
        $wofbi = Wofbi::find($id);
        $wofbi->update($request->all());

        return response()->json($wofbi);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Wofbi  $wofbi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $wofbi = Wofbi::findOrfail($id);
        if ($wofbi->delete()) {
            return new WofbiResources($wofbi);
        }
    }
}