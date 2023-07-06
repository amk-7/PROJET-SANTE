<?php

namespace App\Http\Controllers;

use App\Models\Personnel;
use Illuminate\Http\Request;
use App\Models\Evenement;
use App\Models\Jour;
use App\Models\Image;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Evenement::all();
        return view('events.index',compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create_or_edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request['staff_id'] = Personnel::all()->first()->staff_id;
        $evenement = Evenement::create($request->all());

        $images = $request->file('images');
        if ($images){
            $chemin_image = '/images/evennements/'.strtolower($request->title).'.'.$images->extension();
            $images->storeAs('public/', $chemin_image);
        } else {
            $chemin_image = "default_event_illustration.png";
        }

        Image::create([
            'image_path' => $chemin_image,
            'event_id' => $evenement->event_id,
        ]);
        $evenement->setDayToEvent($request);
        return redirect()->route('events.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Evenement $evenement)
    {
        return view('evenements.show',compact('evenement'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Evenement $event)
    {
        //dd($event);
        return view('events.create_or_edit',compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evenement $evenement)
    {
        $evenement->update($request->all());
        return redirect()->route('evenements.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evenement $evenement)
    {
        $evenement->delete();
        return redirect()->route('evenements.index');
    }
}
