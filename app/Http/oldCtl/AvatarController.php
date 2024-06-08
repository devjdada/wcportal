<?php

namespace App\Http\Controllers;

use App\Models\Avatar;
use Illuminate\Http\Request;
use App\Http\Resources\Avatar as AvatarResources;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AvatarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $avatar = Avatar::paginate(30);
        return AvatarResources::collection($avatar);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'avatar' => 'required|mimes:jpg,png,jpeg|max:4196',
        ]);

        if ($validator->fails()) {

            return response()->json(['error' => $validator->errors()], 401);
        }


        if ($file = $request->file('avatar')) {
            $name = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $fileNameToStore = 'wcphc' . '_' . time() . '.' . $extension;
            $path = $file->storeAs('public/images', $fileNameToStore);

            $save = new Avatar();
            $save->user_id = $request->user_id;
            $save->title = $name;
            $save->image = url($path);
            $save->icon = asset($path);
            $save->thumbnail = $path;
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
     * @param  \App\Avatar  $avatar
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $avatar = Avatar::findOrfail($id);
        return  new AvatarResources($avatar);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Avatar  $avatar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
        $avatar = Avatar::find($id);
        $avatar->update($request->all());

        return response()->json($avatar);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Avatar  $avatar
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $avatar = Avatar::findOrfail($id);
        if ($avatar->delete()) {
            return new AvatarResources($avatar);
        }
    }
}