<?php

namespace App\Http\Controllers;

use App\Http\Resources\HomecellCollection;
use App\Http\Resources\UnitCollection;
use App\Http\Resources\UnitMemberUnitCollection;
use App\Http\Resources\UserCollection;
use App\Http\Resources\UserMeCollection;
use App\Http\Resources\WsfMemberHcCollection;
use App\Models\Homecell;
use App\Models\Unit;
use App\Models\UnitMember;
use App\Models\User;
use App\Models\WsfMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return UserCollection::collection(User::paginate(3)->SortByDesc('id'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function basic()
    {

        return User::select('id', 'name', 'phone', 'email')->get();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $hc = WsfMember::select('homecell_id')
            ->where('user_id', $id)
            ->where('status', true)
            ->first();
        if ($hc) {
            $homecell = new HomecellCollection(Homecell::where('id', $hc->homecell_id)->first());
        } else {
            $homecell = null;
        }


        $unit_id = UnitMember::select('unit_id')
            ->where('user_id', $id)->get();
        $units = UnitCollection::collection(Unit::whereIn('id', $unit_id)->get());
        $me =  new UserMeCollection(User::findOrfail($id));

        return response()->json(['homecell' => $homecell, 'units' => $units,  'me' => $me]);
    }

    public function update(Request $request, string $id)
    {
        $user = User::findOrfail($id);
        $user->update($request->all());
        return new UserMeCollection(User::findOrfail($id));
    }

    public function me(Request $request)
    {

        $success['apiToken'] = User::findOrfail(Auth::user()->id)->createToken('update_device')->plainTextToken;
        $success['user'] =  Auth::user();
        $success['message'] =  'Login Successful';
        $success['status'] =  true;
        return response()->json($success, 201);
    }
}
