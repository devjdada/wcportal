<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Resources\Unit as UnitResources;


class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $unit = Unit::paginate(30);
        return UnitResources::collection($unit);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $unit = $request->isMethod('put') ? Unit::findOrfail($request->id) : new Unit;
        // if($unit->save()){
        //     return new UnitResources($request);
        // }
        if ($unit = Unit::create($request->all())) {
            $res['status'] = true;
            $res['message'] = $unit;
            return response($res, 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $unit = Unit::findOrfail($id);
        return  new UnitResources($unit);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
        $unit = Unit::find($id);
        $unit->update($request->all());

        return response()->json($unit);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $unit = Unit::findOrfail($id);
        if ($unit->delete()) {
            return new UnitResources($unit);
        }
    }


    public function index_web()
    {
        $unit = Unit::where('published', true)->where('category', 'unit')->get();
        return view('units', ['units' => $unit]);
    }




    public function manage()
    {
        $unit = Unit::all();
        return view('ad.unit_manage', ['units' => $unit]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_web()
    {
        // $pastor = User::where('status', 'pastor')->get();
        $pastor = User::get();
        return view('ad.unit_post', ['pastors' => $pastor]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_web(Request $request)
    {
        $validatedData = $request->validate([
            'title' => ['required',  'max:255'],
            'about' => ['required'],
            'phone' => ['required'],
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:8192',
        ]);

        $image_uploader = new ImageUploader;


        $image = $request->file('image');

        $request->image = $image_uploader->uploadImage($image, 'unit');

        $unit = new Unit();
        $unit->image = $request->image;
        $unit->about = $request->about;
        $unit->title = $request->title;
        $unit->email = $request->email;
        $unit->description = $request->description;
        $unit->phone = $request->phone;
        $unit->leader = $request->leader;
        $unit->ass_leader = $request->ass_leader;
        $unit->secretory = $request->secretory;
        $unit->views = 0; // $request->edit_by;
        $unit->save();
        // Gallery::create($request->all());

        return back()
            ->with('success', 'Image Upload successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function show_web(Request $unit)
    {
        $unit = Unit::find($unit->id);

        $views = $unit->views + 1;
        $unit->views = $views;
        $unit->save();
        return view('unit', ['unit' => $unit]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function edit_web(Request $unit)
    {
        // $pastor = User::where('status', 'pastor')->get();
        $pastor = User::get();
        $unit = Unit::find($unit->id);
        return view('ad.unit_edit', ['unit' => $unit, 'pastors' => $pastor]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function update_web(Request $request, Unit $unit)
    {
        $validatedData = $request->validate([
            'title' => ['required',  'max:255'],
            'about' => ['required'],
            'phone' => ['required'],
        ]);

        $image_uploader = new ImageUploader;

        $unit = Unit::find($request->id);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $request->image = $image_uploader->uploadImage($image, 'unit');
        } else {
            $request->image = $unit->image;
        }



        $unit->image = $request->image;
        $unit->about = $request->about;
        $unit->title = $request->title;
        $unit->email = $request->email;
        $unit->description = $request->description;
        $unit->phone = $request->phone;
        $unit->leader = $request->leader;
        $unit->ass_leader = $request->ass_leader;
        $unit->secretory = $request->secretory;
        $unit->save();
        // Gallery::create($request->all());

        return back()
            ->with('success', 'Image Upload successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function destroy_web(Unit $unit)
    {
        $unit = Unit::find($unit->id);
        unlink('images/unit/' . $unit->image);
        unlink('images/unit/thumbnail/' . $unit->image);
        $unit->delete();
        return back()
            ->with('success', 'Image Upload successful');
    }

    public function publish_web(Request $request)
    {
        $unit = Unit::find($request->id);
        if ($request->status == true) {
            $unit->published = false;
            $msg = 'Unit has been unpublished';
        } else {
            $unit->published = true;
            $msg = 'Unit has been published';
        }

        $unit->save();
        return back()
            ->with('success', $msg);
    }
}
