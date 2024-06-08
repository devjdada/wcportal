<?php

namespace App\Http\Controllers;

use App\Models\Firsttimer;
use Illuminate\Http\Request;

use App\Http\Resources\Firsttimer as FirsttimerResources;

class FirsttimerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $firsttimer = Firsttimer::paginate(30);
        return FirsttimerResources::collection($firsttimer);
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
        if ($firsttimer = Firsttimer::create($request->all())) {
            $res['status'] = true;
            $res['message'] = $firsttimer;
            return response($res, 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Firsttimer  $firsttimer
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $firsttimer = Firsttimer::findOrfail($id);
        return  new FirsttimerResources($firsttimer);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Firsttimer  $firsttimer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $firsttimer = Firsttimer::find($id);
        $firsttimer->update($request->all());

        return response()->json($firsttimer);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Firsttimer  $firsttimer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $firsttimer = Firsttimer::findOrfail($id);
        if ($firsttimer->delete()) {
            return new FirsttimerResources($firsttimer);
        }
    }
}
