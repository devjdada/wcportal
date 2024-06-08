<?php

namespace App\Http\Controllers;

use App\Models\WofbiStudent;
use Illuminate\Http\Request;

use App\Http\Resources\WofbiStudent as WofbiStudentResources;


class WofbiStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wofbiStudent = WofbiStudent::get();
        return WofbiStudentResources::collection($wofbiStudent);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($wofbiStudent = WofbiStudent::create($request->all())) {
            $res['status'] = true;
            $res['message'] = $wofbiStudent;
            return response($res, 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\WofbiStudent  $wofbiStudent
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $wofbiStudent = WofbiStudent::findOrfail($id);
        return  new WofbiStudentResources($wofbiStudent);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\WofbiStudent  $wofbiStudent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
        $wofbiStudent = WofbiStudent::find($id);
        $wofbiStudent->update($request->all());

        return response()->json($wofbiStudent);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\WofbiStudent  $wofbiStudent
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $wofbiStudent = WofbiStudent::findOrfail($id);
        if ($wofbiStudent->delete()) {
            return new WofbiStudentResources($wofbiStudent);
        }
    }
}