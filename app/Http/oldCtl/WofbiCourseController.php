<?php

namespace App\Http\Controllers;

use App\Models\WofbiCourse;
use Illuminate\Http\Request;

use App\Http\Resources\WofbiCourse as WofbiCourseResources;


class WofbiCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wofbiCourse = WofbiCourse::get();
        return WofbiCourseResources::collection($wofbiCourse);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($wofbiCourse = WofbiCourse::create($request->all())) {
            $res['status'] = true;
            $res['message'] = $wofbiCourse;
            return response($res, 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\WofbiCourse  $wofbiCourse
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $wofbiCourse = WofbiCourse::findOrfail($id);
        return  new WofbiCourseResources($wofbiCourse);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\WofbiCourse  $wofbiCourse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
        $wofbiCourse = WofbiCourse::find($id);
        $wofbiCourse->update($request->all());

        return response()->json($wofbiCourse);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\WofbiCourse  $wofbiCourse
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $wofbiCourse = WofbiCourse::findOrfail($id);
        if ($wofbiCourse->delete()) {
            return new WofbiCourseResources($wofbiCourse);
        }
    }
}