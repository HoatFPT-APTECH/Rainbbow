<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;

class ShowtimeController extends Controller
{
    //
    public function  getRoomByCinema($id){
        $rooms=Room::where('Cinema_Id',$id)->get();
        if(empty($rooms))return response()->json(null,402);
        else
        return response()->json($rooms,200);
    }
}
