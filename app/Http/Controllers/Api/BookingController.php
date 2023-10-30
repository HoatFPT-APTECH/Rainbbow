<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use App\Models\Showtime;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function GetListShowByIdMovie(Request $request)
    {
       // $id là của bộ phim
        $id=$request->input('Id_Movie');
        $ListShowTime = Showtime::with(['cinema', 'room'])->where("Movie_Id", $id)
        ->where('Start','>=',now())
        ->where('Deleted',0)
        ->orderBy('Start','asc')
     ->get();

       
        return response()->json($ListShowTime,200);
    }

    // public function GetListShowGroupByCinemaStartDate(Request $request){
    //     $idMovie=$request->input(("idMovie"));
    //     $ListShowTime=Showtime::with(['cinema'])

    // }
}
