<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $hotel = DB::table('hotels')->find($id);
        $data = DB::table('rooms')->where('hotel_id',$id)->get();
        return view('home.category_rooms',['hotel'=>$hotel,'data'=>$data]);

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
    public function store(Request $request,$id)
    {
        $data = new Room;
        $data->hotel_id = $request->input('hotel_id');
        $data->title =  $request->input('title');
        $data->description = $request->input('description');
        $data->price = $request->input('price');
        $data->adet = $request->input('adet');
        $data->status = $request->input('status');
        $data->image = Storage::putFile('images', $request->file('image'));
        $data->save();
        return redirect()->route('user_rooms')->with('success','Room Added successfully');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $room)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Room $room,$id)
    {
        $data = room::find($id);
        $data->hotel_id = $request->input('hotel_id');
        $data->title =  $request->input('title');
        $data->description = $request->input('description');
        $data->price = $request->input('price');
        $data->adet = $request->input('adet');
        $data->status = $request->input('status');
        if ($request->file('image')!=null)
        {
            $data->image = Storage::putFile('images',$request->file('image'));
        }
        $data->save();
        return redirect()->route('user_rooms');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room,$id,$hotel_id)
    {
        DB::table('rooms')->where('hotel_id','=',$hotel_id)->delete();
        return redirect()->route('user_rooms');
    }
}
