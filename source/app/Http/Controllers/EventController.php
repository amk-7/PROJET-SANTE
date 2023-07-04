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
        return view('events.create');
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
        /*
        dd($request->type);
        dd($request->all());
        */

        $images = $request->file('images');
        if ($images){
            $chemin_image = strtolower($request->title).'.'.$images->extension();
            $images->storeAs('public/images/evennements', $chemin_image);
        } else {
            $chemin_image = "default_event_illustration.png";
        }

        Image::create([
            'image_path' => $chemin_image,
            'event_id' => $evenement->event_id,
        ]);

        $evenement = Evenement::create($request->all());
        for ($i=0; $i<count($request->date); $i++){
            Jour::create([
                'date' => $request->date[$i],
                'start_time' => $request->start_time[$i],
                'end_time' => $request->end_time[$i],
                'link' => $request->link[$i],
                'date' => $request->country[$i],
                'town' => $request->town[$i],
                'address' => $request->address[$i],
                'longitude' => $request->longitude[$i],
                'latitude' => $request->latitude[$i],
                'event_id' => $evenement->event_id,
            ]);
        }

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
    public function edit(Evenement $evenement)
    {
        return view('evenements.edit',compact('evenement'));
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
