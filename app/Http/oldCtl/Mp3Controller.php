<?php

namespace App\Http\Controllers;

use App\Models\Mp3;
use Illuminate\Http\Request;
use App\Http\Resources\Mp3 as Mp3Resources;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class Mp3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mp3 = Mp3::paginate(30);
        return Mp3Resources::collection($mp3);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        


        if ($mp3 = $request->file('mp3')) {
            
            $mp3_name = $mp3->getClientOriginalName();
            $mp3_extension = $mp3->getClientOriginalExtension();
            $mp3_fileNameToStore = 'wcphc_mp3' . '_' . time() . '.' . $mp3_extension;
            $mp3_path = $mp3->storeAs('public/mp3', $mp3_fileNameToStore);

            $img= $request->file('img');
            $img_name = $img->getClientOriginalName();
            $img_extension = $img->getClientOriginalExtension();
            $img_fileNameToStore = 'wcphc' . '_' . time() . '.' . $img_extension;
            $img_path = $img->storeAs('public/images', $img_fileNameToStore);
           
            $save = new Mp3();
            $save->summary = $request->summary;
            $save->by = $request->by;
            $save->type = $request->type;
            $save->img = url($img_path);
            $save->url = url($mp3_path);
            $save->date = now();
            $save->save();

            return response()->json([
                "success" => true,
                "message" => "File successfully uploaded",
                "file" => $save
            ]);
        }
    }
 

    /**
     * Display the specified resource.
     *
     * @param  \App\Mp3  $mp3
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $mp3 = Mp3::findOrfail($id);
        return  new Mp3Resources($mp3);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mp3  $mp3
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
        $mp3 = Mp3::find($id);
        $mp3->update($request->all());

        return response()->json($mp3);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mp3  $mp3
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mp3 = Mp3::findOrfail($id);
        if ($mp3->delete()) {
            return new Mp3Resources($mp3);
        }
    }
}