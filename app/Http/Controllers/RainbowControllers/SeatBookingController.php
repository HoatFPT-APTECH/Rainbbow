<?php

namespace App\Http\Controllers\RainbowControllers;

use App\Http\Controllers\Controller;
use App\Models\Showtime;
use Illuminate\Http\Request;

class SeatBookingController extends Controller
{
    public function Index($id){
        $page = 'seat_booking';
        $JsPage = "seat_booking";
        
        $ShowTimeEx=Showtime::with(['movie','seats','cinema','room'])->where('Id',$id)->first();
        return view("RainbowViews.index",[
            'page'=>$page,
            'JsPage'=>$JsPage,
            'showTime'=>$ShowTimeEx
        ]);
    }
}
