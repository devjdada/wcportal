<?php

namespace App\Http\Controllers;

use App\Models\UnitMember;
use Illuminate\Http\Request;
use App\Http\Resources\UnitMember as UnitMemberResources;


class UnitMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $unitMember = UnitMember::paginate(500);
        return UnitMemberResources::collection($unitMember);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $unitMember = $request->isMethod('put') ? UnitMember::findOrfail($request->id) : new UnitMember;
        // if($unitMember->save()){
        //     return new UnitMemberResources($request);
        // }
        if($unitMember = UnitMember::create($request->all())){
            $res['status'] = true;
            $res['message'] = $unitMember;
            return response($res, 200);
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UnitMember  $unitMember
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        //
        $unitMember = UnitMember::findOrfail($id);
        return  new UnitMemberResources($unitMember);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UnitMember  $unitMember
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
        $unitMember = UnitMember::find($id);
        $unitMember->update($request->all());

        return response()->json($unitMember);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UnitMember  $unitMember
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $unitMember = UnitMember::findOrfail($id);
        if($unitMember->delete()){
            return new UnitMemberResources($unitMember);
        }
    }
}
