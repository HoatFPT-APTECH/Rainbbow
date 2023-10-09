<?php

namespace App\Http\Controllers\RainbowControllers;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Movie;
use App\Models\Promotion;
use App\Models\Seat;
use App\Models\SeatShowtime;
use App\Models\Showtime;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Http\Request;

class ConfirmationScreenController extends Controller
{
    //
    public function index(Request $request){
        $page = 'confirmation_screen';
        $JsPage = "";
        $user = $request->session()->get('user');
        $movie = $request->session()->get('movie');
        $showtime = $request->session()->get('showTime');
        $listSeatsChoosed = $request->session()->get('seats');
        $booking = $request->session()->get('booking');

        return view("RainbowViews.index",[
            'page'=>$page,
            'JsPage'=>$JsPage,
            'user'=>$user,
            'movie'=>$movie,
            'showTime'=>$showtime,
           'seats'=>$listSeatsChoosed,
           'booking' => $booking,

        ]);
        // return response()->json([
         
        //     'user'=>$user,
        //     'movie'=>$movie,
        //     'showTime'=>$showtime,
        //    'seats'=>$listSeatsChoosed,
        //    'booking' => $booking,

        // ]);
    }

    public function create(Request $request){
       
        $user_Id=$request->input('User_Id');
        $movie_Id=$request->input('Movie_Id');
        $tickets_Id=explode(',',$request->input('Tickets_Id'));
        $showTime_Id= $request->input('Showtime_Id');
        $promotion_Id= $request->input('Promotion_Id');
       
       
        if($promotion_Id!='null'){
            $promotion=( Promotion::with(['promotionCategory'])->find($promotion_Id));
            
            $promotionDiscount=$promotion->promotionCategory->Coefficient;
            $promotion->Used=1;
            $promotion->save();
        }  
        else {
            $promotionDiscount=0;
            $promotion_Id=null;
        }
       
        $newBooking= new Booking();
        $newBooking->User_Id=$user_Id;
        $newBooking->Promotion_Id= $promotion_Id;
        $allPrice=0;
        $newBooking->save();
        foreach (  $tickets_Id as $t) {
            $newTicket= new Ticket();
           
            $seat= Seat::with(['seatcategory'])->where('Id',$t)->first();
            $movie= Movie::where("Id",$movie_Id)->first();
            $price= ($seat->seatcategory->Coefficient)*($movie->Price);
            $newTicket->Price=$price;
            $allPrice+=$price;
            $newTicket->Showtime_Id=$showTime_Id;
            $newTicket->Booking_Id=$newBooking->Id;
            $newTicket->Seat_Id=$t;
             
            $newTicket->save();

            // lưu trạng thái ghế ngồi không cho thằng khác đặt nữa ?
            $dataSS = [
                'Seat_Id' => $seat->Id,
                'Showtime_Id' => $showTime_Id,
                'Status' => 2,
            ];
        
            SeatShowtime::updateOrInsert(
                ['Seat_Id' => $seat->Id, 'Showtime_Id' => $showTime_Id],
                $dataSS
            );
        }
        $newBooking->AllPrice=$allPrice-$promotionDiscount;
        $newBooking->save();

        // lấy data vừa tạo và trả về user để confirm
        $user=User::find($user_Id);
        $showtime=Showtime::with(['cinema','room'])->where('Id',$showTime_Id)->first();
        $movie = Movie::with(['photos', 'movieCategory'])->find($showtime->Movie_Id);
        $booking=$newBooking;
        $listSeatsChoosed= Seat::with(['seatcategory'])->whereIn('Id',$tickets_Id)->get();
         return redirect('/rainbow/confirmation_screen')->with([
            
            'user'=>$user,
            'movie'=>$movie,
            'showTime'=>$showtime,
           'seats'=>$listSeatsChoosed,
           'booking' => $booking,

         ]);
        

    }
}
