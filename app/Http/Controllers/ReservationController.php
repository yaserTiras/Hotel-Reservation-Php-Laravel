<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Null_;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ReservationController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist = Reservation::where('user_id',Auth::id())->get();
        return view('home.user_reservation',['datalist'=> $datalist]);
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
    public function store(Request $request,$id,$hotel_id)
    {


        $data = new Reservation();
        $data->hotel_id = $hotel_id;
        $data->room_id = $id;
        $data->user_id = Auth::id();
        $data->checkin = $request->input('checkin');
        $data->checkout = $request->input('checkout');
        $data->name = $request->input('name');
        $data->surname = $request->input('surname');
        $data->days = (int)$request->input('days');
        $data->email = $request->input('email');
        $data->phone = (int)$request->input('phone');
        $data->note = $request->input('note');
        $data->total = (float)$request->input('total');
        $data->message = $request->input('message');
        $data->save();
        return redirect()->route('user_shopcart')->with('success','Room Added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation,$reservation_id)
    {
        DB::table('reservations')->where('id','=',$reservation_id)->delete();
        return redirect()->route('user_reservation');
    }
}
