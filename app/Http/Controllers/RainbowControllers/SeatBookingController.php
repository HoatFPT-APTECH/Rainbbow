<?php

namespace App\Http\Controllers\RainbowControllers;

use App\Events\SeatChooseEvent;
use App\Http\Controllers\Controller;
use App\Models\Showtime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

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
