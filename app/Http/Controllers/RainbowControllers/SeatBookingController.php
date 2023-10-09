<?php

namespace App\Http\Controllers\RainbowControllers;

use App\Events\SeatChooseEvent;
use App\Http\Controllers\Controller;
use App\Models\Seat;
use App\Models\Showtime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;

class SeatBookingController extends Controller
{
    public function Index($id){
        $page = 'seat_booking';
        $JsPage = "seat_booking";
        $ShowTimeEx=Showtime::with(['movie','seats','cinema','room'])->where('Id',$id)->first();
        $ListSeatA= Seat::select('tbl_seat.*', 'tbl_seatcategory.Name as CategoryName', 'tbl_seatcategory.Coefficient', 'tbl_seatshowtime.Status')
        ->join('tbl_seatcategory', 'tbl_seat.SeatCategory_Id', '=', 'tbl_seatcategory.Id')
        ->join('tbl_seatshowtime', 'tbl_seatshowtime.Seat_Id', '=', 'tbl_seat.Id')
        ->where('tbl_seatcategory.Id', 1)
        ->where('tbl_seatshowtime.Showtime_Id', $id)
        ->get();
        $ListSeatB=  Seat::select('tbl_seat.*', 'tbl_seatcategory.Name as CategoryName', 'tbl_seatcategory.Coefficient', 'tbl_seatshowtime.Status')
        ->join('tbl_seatcategory', 'tbl_seat.SeatCategory_Id', '=', 'tbl_seatcategory.Id')
        ->join('tbl_seatshowtime', 'tbl_seatshowtime.Seat_Id', '=', 'tbl_seat.Id')
        ->where('tbl_seatcategory.Id', 2)
        ->where('tbl_seatshowtime.Showtime_Id', $id)
        ->get();
        $ListSeatC=  Seat::select('tbl_seat.*', 'tbl_seatcategory.Name as CategoryName', 'tbl_seatcategory.Coefficient', 'tbl_seatshowtime.Status')
        ->join('tbl_seatcategory', 'tbl_seat.SeatCategory_Id', '=', 'tbl_seatcategory.Id')
        ->join('tbl_seatshowtime', 'tbl_seatshowtime.Seat_Id', '=', 'tbl_seat.Id')
        ->where('tbl_seatcategory.Id', 3)
        ->where('tbl_seatshowtime.Showtime_Id', $id)
        ->get();
        $ListSeatD= Seat::select('tbl_seat.*', 'tbl_seatcategory.Name as CategoryName', 'tbl_seatcategory.Coefficient', 'tbl_seatshowtime.Status')
        ->join('tbl_seatcategory', 'tbl_seat.SeatCategory_Id', '=', 'tbl_seatcategory.Id')
        ->join('tbl_seatshowtime', 'tbl_seatshowtime.Seat_Id', '=', 'tbl_seat.Id')
        ->where('tbl_seatcategory.Id', 4)
        ->where('tbl_seatshowtime.Showtime_Id', $id)
        ->get();
        return view("RainbowViews.index",[
            'page'=>$page,
            'JsPage'=>$JsPage,
            'showTime'=>$ShowTimeEx,
            'listSeatA'=>$ListSeatA,
            'listSeatD'=>$ListSeatD,
            'listSeatB'=>$ListSeatB,
            'listSeatC'=>$ListSeatC,
        ]);
        // return response()->json(
        //     [
        //         'page'=>$page,
        //         'JsPage'=>$JsPage,
        //         'showTime'=>$ShowTimeEx,
        //         'listSeatA'=>$ListSeatA,
        //         'listSeatD'=>$ListSeatD,
        //         'listSeatB'=>$ListSeatB,
        //         'listSeatC'=>$ListSeatC,
        //     ]
        //     );
    }
}
