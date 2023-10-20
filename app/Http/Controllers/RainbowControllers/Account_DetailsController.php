<?php

namespace App\Http\Controllers\RainbowControllers;

use App\Http\Controllers\Controller;
use App\Models\Promotion;
use App\Models\User;
use App\Models\Booking;
use App\Models\Cinema;
use App\Models\Movie;
use App\Models\Room;
use App\Models\Showtime;
use App\Models\Ticket;
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
       
        $Password= $request->input('Password');

        $newUser= User::where('Id',$id)->first();
        $newUser->UserName=$UserName;
        $newUser->Name=$Name;
        $newUser->Address=$Address;
        $newUser->DateOfBirth=$DateOfBirth;
        $newUser->Phone=$Phone;
        if($newUser->Password!=$Password)  $newUser->Password=md5($Password);
       
       
        $newUser->save();
        
        return redirect("/rainbow/account_details/$id");
    }
    public function convertPathUpLoad($str)
    {

        $listStr = explode("/", $str);
        array_shift($listStr);
        $realPath = implode("/", $listStr);
        return url("storage/" . $realPath);
    }
    public function updateURL(Request $request, string $id){
        $newUser= User::where('Id',$id)->first();

        $fileSrc = $request->file('Image');
        $pathSrc =  $fileSrc->store('public/account_Img');
        $realPathImage = $this->convertPathUpLoad($pathSrc);
        $Image = $realPathImage;
        $newUser->Image=$Image;
        $newUser->save();
        return redirect("/rainbow/account_details/$id");
    }
    public function Booking($id){
        $page='account_booking';
        $JsPage="";
        $UserBookings=Booking::with(['user','tickets'])->where('User_Id',$id)
        ->orderBy('OrderTime','desc')
        
        ->get();
        for($b=0;$b<sizeof($UserBookings);$b++){
            for($t=0;$t<sizeof($UserBookings[$b]->tickets);$t++){
                    $UserBookings[$b]->tickets[$t]->Showtime= Showtime::where("Id",$UserBookings[$b]->tickets[$t]->Showtime_Id)->first();
                    $UserBookings[$b]->tickets[$t]->Showtime->Movie=Movie::where("Id",$UserBookings[$b]->tickets[$t]->Showtime->Movie_Id)->first(); 
                    $UserBookings[$b]->tickets[$t]->Showtime->Cinema=Cinema::where("Id",$UserBookings[$b]->tickets[$t]->Showtime->Cinema_Id)->first();
                    $UserBookings[$b]->tickets[$t]->Showtime->Room= Room::where("Id",$UserBookings[$b]->tickets[$t]->Showtime->Room_id)->first();
            }
          }
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
        $UserPromotion=Promotion::with('user','promotionCategory')->where('User_Id', $id)
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
