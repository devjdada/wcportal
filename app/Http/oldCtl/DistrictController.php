<?php

namespace App\Http\Controllers;

use App\Models\District;
use Illuminate\Http\Request;
use App\Http\Resources\District as DistrictResources;


class DistrictController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        $district = District::paginate(30);
        return DistrictResources::collection($district);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $district = $request->isMethod('put') ? District::findOrfail($request->id) : new District;
        // if($district->save()){
        //     return new DistrictResources($request);
        // }
        if($district = District::create($request->all())){
            $res['status'] = true;
            $res['message'] = $district;
            return response($res, 200);
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\District  $district
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        //
        $district = District::findOrfail($id);
        return  new DistrictResources($district);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\District  $district
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
        $district = District::find($id);
        $district->update($request->all());

        return response()->json($district);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\District  $district
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $district = District::findOrfail($id);
        if($district->delete()){
            return new DistrictResources($district);
        }
    }
}
