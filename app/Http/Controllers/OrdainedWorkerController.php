<?php

namespace App\Http\Controllers;

use App\Http\Resources\OrdainedWorkerCollection;
use App\Models\OrdainedWorker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrdainedWorkerController
{
    public function index()
    {
        $ordainedWorker = OrdainedWorker::where('station', Auth::user()->station_id)
            ->where('status', 'active')
            ->get();
        return OrdainedWorkerCollection::collection($ordainedWorker);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($ordainedWorker = OrdainedWorker::create($request->all())) {
            return  new OrdainedWorkerCollection($ordainedWorker);
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(OrdainedWorker $id)
    {
        $ordainedWorker = OrdainedWorker::findOrfail($id);
        return  new OrdainedWorkerCollection($ordainedWorker);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OrdainedWorker $id)
    {
        $ordainedWorker = OrdainedWorker::where('id', $id)->first();
        $ordainedWorker->update($request->all());
        return response()->json($ordainedWorker, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OrdainedWorker $id)
    {
        OrdainedWorker::where('id', $id)->delete();
        return response()->json(null, 204);
    }
}
