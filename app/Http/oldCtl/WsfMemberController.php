<?php

namespace App\Http\Controllers;

use App\Models\WsfMember;
use Illuminate\Http\Request;

use App\Http\Resources\WsfMember as AppWsfMember;

class WsfMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wsfMember = WsfMember::paginate(500);
        return AppWsfMember::collection($wsfMember);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_web()
    {
        $wsfMember = WsfMember::get();
        $homecells =  AppWsfMember::collection($wsfMember);
     
        return view('ad.wsf_member', [
            'members' => $homecells,
           
        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($wsfMember = WsfMember::create($request->all())) {
            $res['status'] = true;
            $res['message'] = $wsfMember;
            return response($res, 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\WsfMember  $wsfMember
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $wsfMember = WsfMember::findOrfail($id);
        return  new AppWsfMember($wsfMember);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\WsfMember  $wsfMember
     * @return \Illuminate\Http\Response
     */
    public function edit(WsfMember $wsfMember)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\WsfMember  $wsfMember
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $wsfMember = WsfMember::find($id);
        $wsfMember->update($request->all());

        return response()->json($wsfMember);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\WsfMember  $wsfMember
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $wsfMember = WsfMember::findOrfail($id);
        if ($wsfMember->delete()) {
            return new AppWsfMember($wsfMember);
        }
    }
}

