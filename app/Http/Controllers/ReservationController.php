<?php

namespace App\Http\Controllers;

use App\place;
use App\reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // on crée une réservation
        return view('reservation');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $place = place::where('num_place',0)->get('id');
        reservation::create([
            'users_id'=>Auth::user()->id,
           'place_id'=>$place[0]->id,
            'date_debut'=>request('date_debut'),
            'date_fin'=>request('date_fin'),
            'type_vehicule'=>request('type_vehicule'),
            'num_immat'=>request('num_immat'),
            'PMR'=>request('PMR')
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  reservation $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(reservation $reservation )
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  reservation $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(reservation $reservation)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  reservation $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, reservation $reservation)
    {
        $reservation->update($request->all());


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param reservation $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(reservation $reservation)
    {
        //
    }
}
