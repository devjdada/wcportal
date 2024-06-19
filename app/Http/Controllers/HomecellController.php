<?php

namespace App\Http\Controllers;

use App\Http\Resources\HomecellCollection;
use App\Models\Homecell;
use Illuminate\Http\Request;

class HomecellController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $homecell = Homecell::paginate(30);
        return HomecellCollection::collection($homecell);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $homecell = Homecell::findOrfail($id);
        return  new HomecellCollection($homecell);
    }
    public function station_hc(string $station_id)
    {
        $homecell = Homecell::where("station_id", $station_id)
            ->get();
        return HomecellCollection::collection($homecell);
    }
    public function province_hc(string $province_id)
    {
        $homecell = Homecell::where("province_id", $province_id)
            ->paginate(30);
        return HomecellCollection::collection($homecell);
    }
    public function district_hc(string $district_id)
    {
        $homecell = Homecell::where("district_id", $district_id)
            ->paginate(30);
        return HomecellCollection::collection($homecell);
    }
}
