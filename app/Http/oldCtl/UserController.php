<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Resources\User as UserResources;
use App\Http\Controllers\SmsController as SMS;
use App\Models\Assigned;
use App\Models\Homecell;
use App\Models\Soul;
use App\Models\Unit;
use App\Models\SoulReport;
use App\Models\UnitMember;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::paginate(30)->SortByDesc('id');
        return UserResources::collection($user);
    }

    public function manage()
    {
        $user = User::get()->SortByDesc('id');
        $user =  UserResources::collection($user);
        return view('ad.user_manage', [
            'users' => $user
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
        $name = $request->input('name');
        $name = explode(' ', $name);
        if (count($name) > 1) {
            $request['firstname'] = $name[1];
            $request['surname'] = $name[0];
            $n = $name[1];
        } else {
            $request['firstname'] = $request->input('name');
            $n = $request->input('name');
        }
        if ($user = User::create($request->all())) {
            return response($user, 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $user = User::findOrfail($id);
        return  new UserResources($user);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {


        $user = User::find($id);
        $user->update($request->all());

        return response()->json($user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrfail($id);
        if ($user->delete()) {
            return new UserResources($user);
        }
    }

    public function my_user($id)
    {
        $user = User::where('user_winner', $id)->orderBy('id', 'desc')->paginate();
        return UserResources::collection($user);
    }

    public function find_user_phone($phone)
    {
        $user = User::where('phone', $phone);

        $user = $user->get();
        $n = count($user);
        $response = '';



        if ($n == 0) {
            $response = [
                "id" => 0,
                "user_winner" => 0,
                "surname" => "",
                "firstname" => "",
                "location" => "",
                "phone" => "",
                "marital" => "",
                "gender" => "",
                "ocupation" => "",
                "address" => "",
                "email" => "",
                "bus_stop" => "",
                "born_again" => 0,
                "born_again_on" => "",
                "prayer_point" => "",
                "type" => "",
                "fc" => 0,
                "wb" => 0,
                "exblish" => 0,
                "created_at" => "",
                "updated_at" => ""
            ];
            json_encode($response);
        } else {
            $response =  $user[0];
        }

        return $response;
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_web($id)
    {
        $user = User::whereId($id)->get();
        $profile =  UserResources::collection($user);
        return view('ad.profile_edit')->with('profile', $profile);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        if (isset($request->profile)) {
            $profile = $request->profile;
        } else {
            $profile = Auth::user()->id;
        }
        $homecell = Homecell::all();
        $unit = Unit::all();
        $user = User::whereId($profile)->get();
        // $profile =  UserResources::collection($user);
        // return $data =  new UserResources($user);

        $profile = [
            "profile" => UserResources::collection($user)
        ];

        return view('ad.profile_edit', [
            'homecells' => $homecell,
            'units' => $unit,
            'profile' => $profile,
        ]);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function changeImage(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'required',
        ]);
        $image_uploader = new ImageUploader;
        $image = $request->file('image');
        $profile = User::find(Auth::user()->id);
        $profile->image =  $image_uploader->uploadImage($image, 'profile');
        $profile->save();
        return back();
    }


    public function activate(Request $request, $id)
    {
        $user = User::where('id', $id)
            ->update(['delayed' => 1]);;
        return response()->json($request);
    }

    public function searchWithPhone($user)
    {
        $user = User::where('phone', $user)->first();
        if ($user) {
            if ($user->count() > 0) {

                $res['status'] = true;
                $code['status'] = false;
                $code['code'] = mt_rand(000000, 999999);
                $code['user_id'] = $user['id'];
                $res['message'] = $code;
                return response($res, 200);
            }
        } else {
            $res['status'] = false;
            $res['message'] = $user;
            return response($res, 500);
        }
    }

    public function process_user(Request $request)
    {


        if ($request->action == 'delete') {
            foreach ($request->user_id as $value) {
                $user = User::findOrfail($value);
                $user->delete();
            }
            return back()
                ->with('success', 'Deleted successfully');
        }
    }
}
