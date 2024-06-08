<?php

namespace App\Http\Controllers;

use App\Models\Rent;
use Illuminate\Http\Request;
use App\Http\Resources\Rent as RentResources;
use Illuminate\Support\Facades\DB;

class RentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $rents = Rent::paginate(30);
        return RentResources::collection($rents);
    }

    /**
     * Display a listing of the resource.
     *ss
     * @return \Illuminate\Http\Response
     */
    public function manage()
    {

        $jan = DB::table('rents')
            ->select('next_payment')
            ->whereMonth('next_payment_date', '1')
            ->sum('next_payment');
        $feb = DB::table('rents')
            ->select('next_payment')
            ->whereMonth('next_payment_date', '2')
            ->sum('next_payment');
        $mar = DB::table('rents')
            ->select('next_payment')
            ->whereMonth('next_payment_date', '3')
            ->sum('next_payment');
        $apr = DB::table('rents')
            ->select('next_payment')
            ->whereMonth('next_payment_date', '4')
            ->sum('next_payment');
        $may = DB::table('rents')
            ->select('next_payment')
            ->whereMonth('next_payment_date', '5')
            ->sum('next_payment');
        $jun = DB::table('rents')
            ->select('next_payment')
            ->whereMonth('next_payment_date', '6')
            ->sum('next_payment');
        $jul = DB::table('rents')
            ->select('next_payment')
            ->whereMonth('next_payment_date', '7')
            ->sum('next_payment');
        $aug = DB::table('rents')
            ->select('next_payment')
            ->whereMonth('next_payment_date', '8')
            ->sum('next_payment');
        $sep = DB::table('rents')
            ->select('next_payment')
            ->whereMonth('next_payment_date', '9')
            ->sum('next_payment');
        $oct = DB::table('rents')
            ->select('next_payment')
            ->whereMonth('next_payment_date', '10')
            ->sum('next_payment');
        $nov = DB::table('rents')
            ->select('next_payment')
            ->whereMonth('next_payment_date', '11')
            ->sum('next_payment');
        $dec = DB::table('rents')
            ->select('next_payment')
            ->whereMonth('next_payment_date', '12')
            ->sum('next_payment');


        $rents = Rent::paginate(30);
        $rents = RentResources::collection($rents);
        return view("ad.rent_manage")->with([
            "rents" => $rents,
            "january" => $jan,
            "february" => $feb,
            "march" => $mar,
            "april" => $apr,
            "may" => $may,
            "june" => $jun,
            "july" => $jul,
            "august" => $aug,
            "september" => $sep,
            "october" => $oct,
            "november" => $nov,
            "december" => $dec,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ad.rent_post');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'title' => ['required',  'max:255'],
            'rent' => ['required'],
            'author' => ['required'],
            'published_date' => ['required'],
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:8192',
        ]);


        $image_uploader = new ImageUploader;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $request->image = $image_uploader->uploadImage($image, 'rent');
        }

        $blog = new Rent();
        $blog->image = $request->image;
        $blog->rent = $request->rent;
        $blog->title = $request->title;
        $blog->author = $request->author;
        $blog->posted_by = $request->posted_by;
        $blog->category = 'rent'; //$request->category;
        $blog->tags =  'msg'; //$request->tags;
        $blog->published_date = $request->published_date;
        $blog->save();
        // Gallery::create($request->all());

        return back()
            ->with('success', 'Image Upload successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rent  $rent
     * @return \Illuminate\Http\Response
     */
    public function show(Rent $rent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rent  $rent
     * @return \Illuminate\Http\Response
     */
    public function edit(Rent $rent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rent  $rent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rent $rent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rent  $rent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rent $rent)
    {
        //
    }
}