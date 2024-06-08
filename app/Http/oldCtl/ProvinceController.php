<?php

namespace App\Http\Controllers;

use App\Models\Province;
use Illuminate\Http\Request;
use App\Http\Resources\Province as ProvinceResources;
use App\Models\District;
use App\Models\Homecell;

class ProvinceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $province = Province::paginate(30);
        return ProvinceResources::collection($province);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($province = Province::create($request->all())) {
            $res['status'] = true;
            $res['message'] = $province;
            return response($res, 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Province  $province
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $province = Province::findOrfail($id);
        return  new ProvinceResources($province);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Province  $province
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
        $province = Province::find($id);
        $province->update($request->all());

        return response()->json($province);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Province  $province
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $province = Province::findOrfail($id);
        if ($province->delete()) {
            return new ProvinceResources($province);
        }
    }


    public function manage()
    {
        $currentMonth = date('m');
        $districts = District::all();
        $province = Province::all();
        $homecells = Homecell::all();
        $newHomecell = Homecell::whereRaw('MONTH(created_at) = ?', [$currentMonth])->get();
        return view('ad.wsf_manage', ['provinces' => $province, 'districts' => $districts, 'homecells' => $homecells, 'newHomecell' => $newHomecell]);
    }
}