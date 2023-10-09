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
    $idUser= intval($id);
    $UserDetails= User::where('id',$idUser)->first();
        return  view('RainbowViews.index',['page'=>$page,
        'JsPage'=>$JsPage,
        'userDetails'=>$UserDetails,
        'id'=>$idUser

    ]);
    // return response()->json($UserDetails,200);
    }
    public function update(Request $request, string $id)
    {
        $UserName= $request->input('UserName');
        $Name= $request->input('Name');
        $Address= $request->input('Address');
        $DateOfBirth= $request->input('DateOfBirth');
        $Phone= $request->input('Phone');

        $newUser= User::where('Id',$id)->first();
        $newUser->UserName=$UserName;
        $newUser->Name=$Name;
        $newUser->Address=$Address;
        $newUser->DateOfBirth=$DateOfBirth;
        $newUser->Phone=$Phone;
       
        $newUser->save();
        
        return redirect("/rainbow/account_details/$id");
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
        $UserPromotion=Promotion::with('users','promotionCategrory')->where('User_Id', $id)
        ->get();
        // $UserDetails=User::with(['bookings','promotions'])->where('Id',$id)->get();
        return  view('RainbowViews.index',['page'=>$page,
        'JsPage'=>$JsPage,
        'danhsach'=>$UserPromotion,
        'id'=>$id
    ]);
    // return response()->json($UserPromotion,200);
    }
}
