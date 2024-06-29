<?php

namespace App\Http\Controllers;

use App\Http\Resources\WsfMemberCollection;
use App\Http\Resources\WsfMemberHcCollection;
use App\Http\Resources\WsfMemberUserCollection;

use App\Models\WsfMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WsfMemberController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $homecell = WsfMember::paginate(30);
        return WsfMemberCollection::collection($homecell);
    }


    public function show(string $id)
    {
        $homecell = WsfMember::findOrfail($id);
        return  new WsfMemberHcCollection($homecell);
    }

    public function store(Request $request)
    {
        $wsf = WsfMember::where('user_id', Auth::user()->id)->get();
        if ($wsf->count() > 0) {
            foreach ($wsf as $item) {
                $item->update(['status' => false]);
            }
        }
        $request['user_id'] = Auth::user()->id;
        $request['station_id'] = Auth::user()->station_id;
        $request['status'] = true;
        return WsfMember::create($request->all());
    }
}
