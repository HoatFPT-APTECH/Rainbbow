<?php

namespace App\Http\Controllers\SocketControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SeatChooseController extends Controller
{
    //
    public function listenForChooseSeatBooking($data){
        return "Data Send: "+$data;
    }
}
