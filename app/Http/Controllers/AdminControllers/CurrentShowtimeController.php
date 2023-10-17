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
  public function index()
  {
    $data = Cinema::with(['rooms'])->get();
    foreach ($data as $e) {
      $e->countShowtime = 0;

      foreach ($e->rooms as $r) {
        $showtime = Showtime::where('Room_id', $r->Id)
          ->where(function ($query) {
            $query->where('tbl_showtime.Start', '<=', now())
              ->where('tbl_showtime.End', '>=', now());
          })
          ->first();
        if (!empty($showtime)) {
          $e->countShowtime++;
          $r->Status = 1;
          $r->Showtime = $showtime;
        } else {
          $r->Showtime = null;
        }
      }
    }
    // return response()->json($data);
    return view("AdminViews.index", [
      'cinemas' => $data,
      'JsPage' => 'currentShowtime',
      'page' => 'currentShowtime'
    ]);
  }
  public function Detail($id)
  {
    $showtime = Showtime::with(['room','movie'])->where('Id', $id)
      ->where(function ($query) {
        $query->where('tbl_showtime.Start', '<=', now())
          ->where('tbl_showtime.End', '>=', now());
      })->first();
      $ListSeatA= Seat::select('tbl_seat.*', 'tbl_seatcategory.Name as CategoryName', 'tbl_seatcategory.Coefficient', 'tbl_seatshowtime.Status')
        ->join('tbl_seatcategory', 'tbl_seat.SeatCategory_Id', '=', 'tbl_seatcategory.Id')
        ->join('tbl_seatshowtime', 'tbl_seatshowtime.Seat_Id', '=', 'tbl_seat.Id')
        ->where('tbl_seatcategory.Id', 1)
        ->where('tbl_seatshowtime.Showtime_Id', $id)
        ->get();
        $countSeatOrderedA=0;
        foreach($ListSeatA as $a){
          if($a->Status==2)$countSeatOrderedA++;
        }
        $ListSeatB=  Seat::select('tbl_seat.*', 'tbl_seatcategory.Name as CategoryName', 'tbl_seatcategory.Coefficient', 'tbl_seatshowtime.Status')
        ->join('tbl_seatcategory', 'tbl_seat.SeatCategory_Id', '=', 'tbl_seatcategory.Id')
        ->join('tbl_seatshowtime', 'tbl_seatshowtime.Seat_Id', '=', 'tbl_seat.Id')
        ->where('tbl_seatcategory.Id', 2)
        ->where('tbl_seatshowtime.Showtime_Id', $id)
        ->get();
        $countSeatOrderedB=0;
        foreach($ListSeatB as $a){
          if($a->Status==2)$countSeatOrderedB++;
        }
        $ListSeatC=  Seat::select('tbl_seat.*', 'tbl_seatcategory.Name as CategoryName', 'tbl_seatcategory.Coefficient', 'tbl_seatshowtime.Status')
        ->join('tbl_seatcategory', 'tbl_seat.SeatCategory_Id', '=', 'tbl_seatcategory.Id')
        ->join('tbl_seatshowtime', 'tbl_seatshowtime.Seat_Id', '=', 'tbl_seat.Id')
        ->where('tbl_seatcategory.Id', 3)
        ->where('tbl_seatshowtime.Showtime_Id', $id)
        ->get();
        $countSeatOrderedC=0;
        foreach($ListSeatC as $a){
          if($a->Status==2)$countSeatOrderedC++;
        }
        $ListSeatD= Seat::select('tbl_seat.*', 'tbl_seatcategory.Name as CategoryName', 'tbl_seatcategory.Coefficient', 'tbl_seatshowtime.Status')
        ->join('tbl_seatcategory', 'tbl_seat.SeatCategory_Id', '=', 'tbl_seatcategory.Id')
        ->join('tbl_seatshowtime', 'tbl_seatshowtime.Seat_Id', '=', 'tbl_seat.Id')
        ->where('tbl_seatcategory.Id', 4)
        ->where('tbl_seatshowtime.Showtime_Id', $id)
        ->get();
        $countSeatOrderedD=0;
        foreach($ListSeatD as $a){
          if($a->Status==2)$countSeatOrderedD++;
        }
        // return response()->json([

        //   'showTime'=>$showtime,
        //   'countSeatOrderedA'=>$countSeatOrderedA,

        //   'listSeatA'=>$ListSeatA,
        //   'countSeatOrderedB'=>$countSeatOrderedB,
        //   'listSeatB'=>$ListSeatB,
        //   'countSeatOrderedC'=>$countSeatOrderedC,
        //   'listSeatC'=>$ListSeatC,
        //   'countSeatOrderedD'=>$countSeatOrderedD,
        //   'listSeatD'=>$ListSeatD
        // ]);
        return view("AdminViews.index", [
          'JsPage' => '',
          'page' => 'currentShowtimeDetail',
          'showTime'=>$showtime,
          'countSeatOrderedA'=>$countSeatOrderedA,

          'listSeatA'=>$ListSeatA,
          'countSeatOrderedB'=>$countSeatOrderedB,
          'listSeatB'=>$ListSeatB,
          'countSeatOrderedC'=>$countSeatOrderedC,
          'listSeatC'=>$ListSeatC,
          'countSeatOrderedD'=>$countSeatOrderedD,
          'listSeatD'=>$ListSeatD
        ]);

  }
}
