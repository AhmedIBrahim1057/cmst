<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Storage;

class eventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        return view('backend.events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'date' => 'required',
        ]);

        if($request->hasFile('image')){
            $image = $request->file('image');
            $image_path = $image->store('events', ['disk' => 'public']);
        }

        Event::create([
            'title' => $request->title,
            'body' => $request->body,
            'image' => $image_path,
            'date' => $request->date,
        ]);

        return redirect()->route('events.index')
                            ->with('success','Events created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::find($id);
        return view('backend.events.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::find($id);
        return view('backend.events.edit',compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'date' => 'required',
        ]);

        $image = $request->file('image');
        if(!empty($image)){
            Storage::disk('public')->delete($event->image);
            $image_path = $image->store('events', ['disk' => 'public']);
            $event->image = $image_path;
            $event->save();
        } else{
            $event->fill( $request->except('image') );
            $event->save();
        }

        return redirect()->route('events.index')
                            ->with('success','Events Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);
        $event->delete();
        return redirect()->route('events.index')
                            ->with('success','Events Deleted Successfully.');
    }
}
