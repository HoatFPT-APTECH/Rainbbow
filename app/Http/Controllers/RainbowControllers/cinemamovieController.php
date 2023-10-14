<?php

namespace App\Http\Controllers\RainbowControllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Movie;


class cinemamovieController extends Controller
{   
    public function index()
    {
    $page='cinemamovie';
    $JsPage="";
       $ListMovie=Movie::with(['photos','movieCategory'])
       ->where('Deleted',0)
       ->whereBetween('dateshow', [now(), now()->addDays(7)])
       ->orderBy("dateshow",'desc')
       ->get();
       $ListCinema= DB::table('tbl_cinema')
       ->leftJoin('tbl_showtime', 'tbl_cinema.id', '=', 'tbl_showtime.cinema_id')
       ->groupBy('tbl_cinema.id')
       ->select('tbl_cinema.Id', 'tbl_cinema.Name', DB::raw('count(tbl_cinema.Id) AS tong'));
       $ListReleasedMovie=Movie::with('photos')->get();
        return  view('rainbowViews.index', [
            'page' => $page,
            'JsPage'=>'home',
            'listMovie'=>$ListMovie,
            'listCinema'=>$ListCinema
        ]);
        //  return response()->json(['data'=>$ListUpcomingMovie]);
    }
}
