<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use Illuminate\Http\Request;
use App\Http\Resources\Apartment as ApartmentResources;


class ApartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apartment = Apartment::paginate(30);
        return ApartmentResources::collection($apartment);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function manage()
    {
        $apartment = Apartment::paginate(30);
        $apartments =  ApartmentResources::collection($apartment);
        return view('ad.apartment_manage')->with('apartments', $apartments);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($apartment = Apartment::create($request->all())) {
            $res['status'] = true;
            $res['message'] = $apartment;
            return  new ApartmentResources($res, 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Apartment  $apartment
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $apartment = Apartment::findOrfail($id);
        return  new ApartmentResources($apartment);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Apartment  $apartment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
        $apartment = Apartment::find($id);
        $apartment->update($request->all());

        return response()->json($apartment);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Apartment  $apartment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $apartment = Apartment::findOrfail($id);
        if ($apartment->delete()) {
            return new ApartmentResources($apartment);
        }
    }
}