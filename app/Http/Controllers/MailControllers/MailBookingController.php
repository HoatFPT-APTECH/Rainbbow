<?php

namespace App\Http\Controllers\MailControllers;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Movie;
use App\Models\Seat;
use App\Models\Showtime;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailBookingController extends Controller
{
    //
    public function index($id){
        $page = 'confirmation_screen';
        $JsPage = "";
        $bookingId = $id;
        $booking=Booking::with(['user'])->find($bookingId);
        
        $user=User::find($booking->User_Id);
        $tickets= Ticket::where("Booking_Id",$booking->Id)->get();
        $showtime=Showtime::find($tickets[0]->Showtime_Id);
        $movie=Movie::find($showtime->Movie_Id);
        $Seats_Id=[];
        for($i=0;$i<sizeof($tickets);$i++){
            array_push($Seats_Id,$tickets[$i]->Seat_Id);
      
        }
        $seats=Seat::with(["seatcategory"])->whereIn("Id",$Seats_Id)->get();
       
        return view("MailViews.MailBooking",[
          
            'user'=>$user,
            'movie'=>$movie,
            'showTime'=>$showtime,
           'seats'=>$seats,
           'booking' => $booking,

        ]);
    }
}
