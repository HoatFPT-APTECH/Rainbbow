<?php

namespace App\Http\Controllers\RainbowControllers;

use App\Http\Controllers\Controller;
use App\Models\Promotion;
use App\Models\User;
use App\Models\Role;
use App\Models\Booking;
use Illuminate\Http\Request;

class Account_DetailsController extends Controller
{
    public function Index($id){
    $page='account_details';
    $JsPage="";
    $UserDetails=User::with(['bookings','promotions'])->where('Id',$id)->first();
        return  view('RainbowViews.index',['page'=>$page,
        'JsPage'=>$JsPage,
        'userDetails'=>$UserDetails,
        'id'=>$id

    ]);
    // return response()->json($UserDetails,200);
    }
    public function Booking($id){
        $page='account_booking';
        $JsPage="";
        $UserBookings=Booking::with(['user'])->where('User_Id',$id)->get();
        return  view('RainbowViews.index',['page'=>$page,
        'JsPage'=>$JsPage,
        'danhsach'=>$UserBookings,
        'id'=>$id
    ]);
    // return response()->json($UserBookings,200);
    }
    public function Promotion($id){
        $page='account_promotion';
        $JsPage="";
        $UserPromotion=Promotion::
        $UserDetails=User::with(['bookings','promotions'])->where('Id',$id)->get();
    //     return  view('RainbowViews.index',['page'=>$page,
    //     'JsPage'=>$JsPage,
    //     'danhsach'=>$UserPromotion
    // ]);
    return response()->json($UserDetails,200);
    }
}
