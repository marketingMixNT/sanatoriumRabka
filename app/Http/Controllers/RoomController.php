<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function show($slug){

        $room = Room::where('slug->pl',$slug)->firstOrFail();



        return view('pages.room.show',compact('room'));
    }
}
