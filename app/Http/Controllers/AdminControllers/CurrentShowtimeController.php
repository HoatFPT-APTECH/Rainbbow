<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\Cinema;
use App\Models\Seat;
use App\Models\Showtime;
use Illuminate\Http\Request;

class CurrentShowtimeController extends Controller
{
    //
    public function index(){
        $data=Cinema::with(['rooms'])->get();
        foreach($data as $e){
            $e->countShowtime=0;
           
           foreach($e->rooms as $r){
              $showtime=Showtime::where('Room_id',$r->Id)
              ->where(function ($query)  {
                $query->where('tbl_showtime.Start', '<=',now())
                    ->where('tbl_showtime.End', '>=', now());
            })
              ->first();
              if(!empty($showtime)){
                $e->countShowtime++;
                $r->Status=1;
                $r->Showtime=$showtime;
              }else{
                $r->Showtime=null;
              }
           }
        }
        // return response()->json($data);
        return view("AdminViews.index", [
             'cinemas'=>$data,
             'JsPage'=>'currentShowtime',
            'page' => 'currentShowtime'
        ]);
    }
    public function Detail($id){
     
    }
}
