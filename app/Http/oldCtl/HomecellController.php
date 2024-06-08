<?php

namespace App\Http\Controllers;

use App\Models\Homecell;
use Illuminate\Http\Request;
use App\Http\Resources\Homecell as HomecellResources;
use App\Models\District;
use App\Models\Province;
use App\Models\User;

class HomecellController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homecell = Homecell::paginate(30);
        return HomecellResources::collection($homecell);
    }

    public function index_web(Request $request)
    {
        if (isset($request->district)) {
            $homecells = Homecell::whereDistrict_id($request->district)->get();
        } else {
            $homecells = Homecell::all();
        }

        $districts = District::all();
        $provinces = Province::all();
        $user = User::all();
        // $leader = HomecellLeade::all();
        return view('wsf')
            ->with('homecells', $homecells)
            ->with('districts', $districts)
            ->with('users', $user)
            // ->with('leaders', $leader)
            ->with('provinces', $provinces);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        if ($homecell = Homecell::create($request->all())) {
            $res['status'] = true;
            $res['message'] = $homecell;
            return response($res, 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Homecell  $homecell
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $homecell = Homecell::findOrfail($id);
        return  new HomecellResources($homecell);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Homecell  $homecell
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
        $homecell = Homecell::find($id);
        $homecell->update($request->all());

        return response()->json($homecell);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Homecell  $homecell
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $homecell = Homecell::findOrfail($id);
        if ($homecell->delete()) {
            return new HomecellResources($homecell);
        }
    }
}