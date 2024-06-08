<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;
use App\Http\Resources\Area as AreaResources;


class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $area = Area::paginate(30);
        return AreaResources::collection($area);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($area = Area::create($request->all())) {
            $res['status'] = true;
            $res['message'] = $area;
            return  new AreaResources($res, 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $area = Area::findOrfail($id);
        return  new AreaResources($area);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
        $area = Area::find($id);
        $area->update($request->all());

        return response()->json($area);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $area = Area::findOrfail($id);
        if ($area->delete()) {
            return new AreaResources($area);
        }
    }
}