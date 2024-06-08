<?php

namespace App\Http\Controllers;

use App\Models\Assigned;
use App\Models\Soul;
use App\Models\User;
use Illuminate\Http\Request;

use App\Http\Resources\Assigned as AssignedResources;

class AssignedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $assign = Assigned::paginate(30);
        return AssignedResources::collection($assign);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $assign = $request->isMethod('put') ? Assigned::findOrfail($request->id) : new Assigned;
        // if($assign->save()){
        //     return new AssignedResources($request);
        // }
        $user = 'users';
        $unit = 'units';
        $wsf = 'wsf';
        $request['type'] = $user;
        if ($assign = Assigned::create($request->all())) {
            $res['status'] = true;
            $res['message'] = $assign;

            $request['type'] = $user;
            $request['assigned_to'] = $request->input('assigned_two');
            Assigned::create($request->all());

            $request['type'] = $unit;
            $request['assigned_to'] = $request->input('assigned_unit');
            Assigned::create($request->all());

            $request['type'] = $wsf;
            $request['assigned_to'] = $request->input('assigned_wsf');
            Assigned::create($request->all());

            return response($res, 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Assigned  $assign
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $assign = Assigned::findOrfail($id);
        return  new AssignedResources($assign);
    }

    public function assign_to($id)
    {
       $assign = Assigned::whereAssigned_to($id)->get();
        return AssignedResources::collection($assign);

    }


    public function assignee($id)
    {
        $assign = Assigned::whereContact_id($id)->get();
        return AssignedResources::collection($assign);
    }




    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Assigned  $assign
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
        $assign = Assigned::find($id);
        $assign->update($request->all());

        return new AssignedResources($assign);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Assigned  $assign
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $assign = Assigned::findOrfail($id);
        if ($assign->delete()) {
            return new AssignedResources($assign);
        }
    }

      /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $soul = Soul::findOrfail($request->id);
        $users = User::all();
        $followUp = Assigned::where("contact_id", $soul->id)->get();
        $assignArr = [];

        foreach ($followUp as $f) {
            $assignArr[] = $f->assigned_to;
        }


        return view('ad.assigning')->with("users", $users)->with("soul", $soul)->with("assigned", $assignArr)->with("followUp", $followUp);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_web(Request $request)
    {


        foreach ($request->assign as $assign_to) {
            $assign = new Assigned();
            $assign->assigned_to = $assign_to;
            $assign->contact_id = $request->soul_id;
            $assign->save();
        }

        return redirect()->route("souls")->with('message', 'Assigned successfully!!!');
    }
}
