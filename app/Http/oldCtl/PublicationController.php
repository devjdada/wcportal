<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(isset($request->category)){
            $publish = Publication::wherePublished(true)->whereCategory($request->category)->get();
        }else{
            $publish = Publication::wherePublished(true)->get();
        }
        
        return view('publish', ['publishs' => $publish]);
    }

    public function manage(){
        $publish = Publication::all();
        return view('ad.publish_manage', ['publishs' => $publish]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ad.publication_upload');
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
            'category' => ['required'],
            'description' => ['required'],
            'published_date' => ['required'],
            'pdf' => 'required',
        ]);



        $pdf = $request->file('pdf');
        $uniqueFileName = uniqid() . '_' . time() . '.' . $pdf->getClientOriginalExtension();
        $pdf->move(public_path('pdfs/') , $uniqueFileName);

        

        $pub = new Publication();
        $pub->image = "";
        $pub->pdf = $uniqueFileName;
        $pub->title = $request->title;
        $pub->description = $request->description;
        $pub->category = $request->category;
        $pub->posted_by = $request->posted_by;
        $pub->download = 0; // $request->edit_by;
        $pub->published_date = $request->published_date;
        $pub->save();
        // Gallery::create($request->all());

        return back()
            ->with('success', 'Image Upload successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function show(Publication $publication)
    {
        //
    }

    public function getDownload(Request $request)
    {

        $file= public_path(). "/pdfs/". $request->pdf;

        $headers = array(
                'Content-Type: application/pdf',
                );
        $pdf = Publication::wherePdf($request->pdf)->first();
        $download = 1 + $pdf->download ;
        $pdf->download = $download;
        $pdf->save();

        return response()->download($file, $request->pdf, $headers);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $publish = Publication::find($request->id);
        return view('ad.publish_edit', ['publish' => $publish]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
           
        $validatedData = $request->validate([
            'title' => ['required',  'max:255'],
            'category' => ['required'],
            'description' => ['required'],
            'published_date' => ['required'],
        ]);

        $pub = new Publication();

        if ($request->hasFile('pdf')) {
            $pdf = $request->file('pdf');
            $uniqueFileName = uniqid() . '_' . time() . '.' . $pdf->getClientOriginalExtension();
            $pdf->move(public_path('pdfs/') , $uniqueFileName);
    
        }else{
            $request->pdf = $pub->pdf;
        }

        $pub->image = "";
        $pub->pdf = $uniqueFileName;
        $pub->title = $request->title;
        $pub->description = $request->description;
        $pub->category = $request->category;
        $pub->posted_by = $request->posted_by;
        $pub->download = 0; // $request->edit_by;
        $pub->published_date = $request->published_date;
        $pub->save();
        // Gallery::create($request->all());

        $publish = Publication::all();
        return view('ad.publish_manage', ['publishs' => $publish]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $publish = Publication::find($request->id);
        unlink('pdfs/' . $publish->pdf);
        // unlink('pdfs/' . $publish->image);
        $publish->delete();
        return back()
            ->with('success', 'Image Upload successful');
    }

    public function publish(Request $request)
    {
        $publish = Publication::find($request->id);
        if ($publish->published == true) {
            $publish->published = false;
            $msg = 'Blog has been unpublished';
        } else {
            $publish->published = true;
            $msg = 'Blog has been published';
        }

        $publish->save();
        return back()
            ->with('success', $msg);
    }
}
