<?php

namespace App\Http\Controllers\RainbowControllers;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use App\Models\Seat;
use App\Models\Showtime;
use App\Models\User;
use Illuminate\Http\Request;

class BookingTypeController extends Controller
{
    //
    public function index(Request $request){
        $page = 'booking_type';
        $JsPage = "booking_type";
        $user_Id=$request->input('User_Id');
        $tickets_Id=explode(',',$request->input('Tickets_Id'));
        $showTime_Id= $request->input('Showtime_Id');
/// get data
        $user=User::find($user_Id);
        $showtime=Showtime::with(['cinema','room'])->where('Id',$showTime_Id)->first();
        $movie = Movie::with(['photos', 'movieCategory'])->find($showtime->Movie_Id);

        $listSeatsChoosed= Seat::with(['seatcategory'])->whereIn('Id',$tickets_Id)->get();
        $data = [
            'showTime_Id' => $showTime_Id,
            'tickets_Id' => $tickets_Id,
            'movie_Id' =>$movie->Id
        ];
        
        $dataJson = json_encode($data);
        return view("RainbowViews.index",[
            'page'=>$page,
            'JsPage'=>$JsPage,
            'user'=>$user,
            'movie'=>$movie,
            'showTime'=>$showtime,
           'seats'=>$listSeatsChoosed,
           'dataJson' => $dataJson,

        ]);
    //     return response()->json([
    //    'user'=>$user_Id,
    //    'tickets'=>$tickets_Id,
    //    'showtime_id'=>$showTime_Id,
    //    'movie'=>$movie,
    //     'showTime'=>$showtime,
    //    'seats'=>$listSeatsChoosed,
    //    'seatId'=>$tickets_Id
    //     ]);
    }
}
