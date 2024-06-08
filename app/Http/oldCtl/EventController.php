<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\Event as EventResources;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event = Event::paginate(30);
        return EventResources::collection($event);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function manage()
    {
        $events = Event::all();
        return view('ad.events_manage')->with('events', $events);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'date' => ['required'],
            'time' => ['required'],
            'venue' => ['required'],
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:8192',
        ]);

        $image = $request->file('image');
        $upload_image = new ImageUploader();

        $event = new Event();

        $event->posted_by = Auth::user()->id;
        $event->station_id = Auth::user()->id;
        $event->title = $request->title;
        $event->date = $request->date;
        $event->time = $request->time;
        $event->duration = $request->duration;
        $event->repeat = $request->repeat;
        $event->days = $request->days;
        $event->description = $request->description;
        $event->venue = $request->venue;
        if ($request->hasFile('image')) {
            $event->image = $upload_image->uploadImage($image, 'event');
        }

        $event->save();

        return back()
            ->with('success', 'Event has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $event = Event::find($request->id);
        if ($event->image) {
            unlink('images/event/' . $event->image);
            unlink('images/event/thumbnail/' . $event->image);
        }

        $event->delete();
        return back()
            ->with('success', 'Event has been deleted successful');
    }
}