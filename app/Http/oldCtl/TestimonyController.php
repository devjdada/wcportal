<?php

namespace App\Http\Controllers;

use App\Models\Testimony;
use Illuminate\Http\Request;

use App\Http\Resources\Testimony as TestimonyResources;

class TestimonyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimony = Testimony::get()->SortByDesc('id');
        return TestimonyResources::collection( $testimony);
    }



       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        $testimony = Testimony::paginate(3)->SortByDesc('id');
        return TestimonyResources::collection( $testimony);
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
        if ($testimony = Testimony::create($request->all())) {
            return response($testimony, 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Testimony  $testimony
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $testimony = Testimony::findOrfail($id);
        return  new TestimonyResources($testimony);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Testimony  $testimony
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimony $testimony)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Testimony  $testimony
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimony $testimony)
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
        $img = $upload_image->uploadImage($image, 'testimony');
        $request['imagex'] = $img;
        $request['ímage'] = $img;
        $testimony = new Testimony();

        $testimony->create($request->all());
        return back()->with('success', 'Your Testimony is successfully saved thanks for sharing');
    }




    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimony  $testimony
     * @return \Illuminate\Http\Response
     */
    public function update_web(Request $request, Testimony $testimony)
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
            $img = $upload_image->uploadImage($image, 'testimony');
            $request['imagex'] = $img;
            $request['ímage'] = $img;
        }
        $testimony = Testimony::find($request->id);

        $testimony->update($request->all());
        return back()->with('success', 'Your Testimony is successfully Edited ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimony  $testimony
     * @return \Illuminate\Http\Response
     */
    public function destroy_web(Request $request)
    {
        $testimony = Testimony::find($request->testimony);
        unlink('images/testimony/' . $testimony->imagex);
        unlink('images/testimony/thumbnail/' . $testimony->imagex);
        $testimony->delete();
        return back()
            ->with('success', 'Image Upload successful');
    }

    public function publish(Request $request)
    {
        $testimony = Testimony::find($request->id);
        if ($testimony->published == true) {
            $testimony->published = false;
            $msg = 'Testimony has been unpublished';
        } else {
            $testimony->published = true;
            $msg = 'Testimony has been published';
        }

        $testimony->save();
        return back()
            ->with('success', $msg);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimony  $testimony
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $testimony = Testimony::find($request->testimony);
        return view('ad.testimony_edit')->with('testimony', $testimony);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_web()
    {
        $testimonies = Testimony::all();
        return view('testimonies')->with('testimonies', $testimonies);
    }
    public function manage()
    {
        $testimonies = Testimony::all();
        return view('ad.testimonies_manage')->with('testimonies', $testimonies);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimony  $testimony
     * @return \Illuminate\Http\Response
     */
    public function show_web(Request $request)
    {
        $testimony = Testimony::find($request->testimony);
        return view('testimony')->with('testimony', $testimony);
    }
}