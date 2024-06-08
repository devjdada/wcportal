<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserCollection;
use App\Models\User;

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
        return  new UserCollection(User::findOrfail($id));
    }
}
