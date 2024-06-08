<?php

namespace App\Http\Controllers;

use App\Models\NewConvert;
use Illuminate\Http\Request;

use App\Http\Resources\NewConvert as NewConvertResources;

class NewConvertController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $newConvert = NewConvert::paginate(30);
        return NewConvertResources::collection($newConvert);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $name = $request->input('name');
        $name = explode(' ', $name);
        $request['firstname'] = $name[1];
        $request['surname'] = $name[0];
        if ($newConvert = NewConvert::create($request->all())) {
            $res['status'] = true;
            $res['message'] = $newConvert;
            return response($res, 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\NewConvert  $newConvert
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $newConvert = NewConvert::findOrfail($id);
        return  new NewConvertResources($newConvert);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\NewConvert  $newConvert
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $newConvert = NewConvert::find($id);
        $newConvert->update($request->all());

        return response()->json($newConvert);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\NewConvert  $newConvert
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $newConvert = NewConvert::findOrfail($id);
        if ($newConvert->delete()) {
            return new NewConvertResources($newConvert);
        }
    }
}
