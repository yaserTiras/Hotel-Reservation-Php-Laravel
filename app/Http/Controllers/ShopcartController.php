<?php

namespace App\Http\Controllers;

use App\Models\Shopcart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ShopcartController extends Controller
{
    public static function countshopcart()
    {

        return Shopcart::where('user_id',Auth::id())->count();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist=Shopcart::where('user_id',Auth::id())->get();
        return view('home.user_room_book',['datalist'=>$datalist]);
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
    public function store(Request $request,$id,$hotel_id,$hotel_title)
    {
        $data=Shopcart::where('hotel_id',$hotel_id)->where('room_id',$id)->where('user_id',Auth::id())->first();

        if($data)
        {
            $data->quantity=$data->quantity + $request->input('adet');
        }
        else
            {

                $data = new Shopcart;
                $data->hotel_id = $hotel_id;
                $data->room_id = $id;
                $data->checkin =$request->input('checkin');
                $data->hotel_title = $hotel_title;
                $data->user_id = Auth::id();
                $data->quantity = $request->input('adet');
           }
        $data->save();

        return redirect()->back()->with('success','Room Added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shopcart  $shopcart
     * @return \Illuminate\Http\Response
     */
    public function show(Shopcart $shopcart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shopcart  $shopcart
     * @return \Illuminate\Http\Response
     */
    public function edit(Shopcart $shopcart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Shopcart  $shopcart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shopcart $shopcart)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shopcart  $shopcart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shopcart $shopcart,$id)
    {
        DB::table('shopcarts')->where('id','=',$id)->delete();
        return redirect()->back()->with('success','Room Rezervation Deleted Successfuly');
    }
}
