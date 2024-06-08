<?php

namespace App\Http\Controllers;

use App\Models\Leadership;
use Illuminate\Http\Request;

use App\Http\Resources\Leadership as LeadershipResources;

class LeadershipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $leadership = Leadership::paginate(30)->SortByDesc('id');
        return LeadershipResources::collection($leadership);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($leadership = Leadership::create($request->all())) {
            $res['status'] = true;
            $res['message'] = $leadership;
            return response($res, 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Leadership  $leadership
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $leadership = Leadership::findOrfail($id);
        return  new LeadershipResources($leadership);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Leadership  $leadership
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $leadership = Leadership::find($id);
        $leadership->update($request->all());

        return response()->json($leadership);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Leadership  $leadership
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $leadership = Leadership::findOrfail($id);
        if ($leadership->delete()) {
            return new LeadershipResources($leadership);
        }
    }
}
