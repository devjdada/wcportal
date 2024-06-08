<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

use App\Http\Resources\Staff as StaffResources;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staff = Staff::get()->SortByDesc('id');
        return StaffResources::collection($staff);
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        $staff = Staff::paginate(3)->SortByDesc('id');
        return StaffResources::collection($staff);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $name = $request->input('name');
        $name = explode(' ', $name);
        if (count($name) > 1) {
            $request['firstname'] = $name[1];
            $request['surname'] = $name[0];
        } else {
            $request['firstname'] = $request->input('name');
        }
        if ($staff = Staff::create($request->all())) {
            return response($staff, 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $staff = Staff::findOrfail($id);
        return  new StaffResources($staff);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Staff $staff)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staff $staff)
    {
        //
    }




    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_web(Request $request)
    {
        $form = $request->validate(
            [
                'victory' => 'required',
                'surname' => 'required',
                'firstname' => 'required',
                'phone' => 'required',
                'challenge' => 'required',
                'title' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:8192',
            ]
        );

        $image = $request->file('image');
        $upload_image = new ImageUploader();
        $img = $upload_image->uploadImage($image, 'staff');
        $request['imagex'] = $img;
        $request['ímage'] = $img;
        $staff = new Staff();

        $staff->create($request->all());
        return back()->with('success', 'Your Staff is successfully saved thanks for sharing');
    }




    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update_web(Request $request, Staff $staff)
    {
        $form = $request->validate(
            [
                'victory' => 'required',
                'surname' => 'required',
                'firstname' => 'required',
                'phone' => 'required',
                'challenge' => 'required',
                'title' => 'required',
            ]
        );

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $upload_image = new ImageUploader();
            $img = $upload_image->uploadImage($image, 'staff');
            $request['imagex'] = $img;
            $request['ímage'] = $img;
        }
        $staff = Staff::find($request->id);

        $staff->update($request->all());
        return back()->with('success', 'Your Staff is successfully Edited ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy_web(Request $request)
    {
        $staff = Staff::find($request->staff);
        unlink('images/staff/' . $staff->imagex);
        unlink('images/staff/thumbnail/' . $staff->imagex);
        $staff->delete();
        return back()
            ->with('success', 'Image Upload successful');
    }

    public function publish(Request $request)
    {
        $staff = Staff::find($request->id);
        if ($staff->published == true) {
            $staff->published = false;
            $msg = 'Staff has been unpublished';
        } else {
            $staff->published = true;
            $msg = 'Staff has been published';
        }

        $staff->save();
        return back()
            ->with('success', $msg);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $staff = Staff::find($request->staff);
        return view('ad.staff_edit')->with('staff', $staff);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_web()
    {
        $staffs = Staff::all();
        return view('staffs')->with('staffs', $staffs);
    }
    public function manage()
    {
        $staffs = Staff::all();
        return view('ad.staff_manage')->with('staffs', $staffs);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show_web(Request $request)
    {
        $staff = Staff::find($request->staff);
        return view('staff')->with('staff', $staff);
    }
}