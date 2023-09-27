<?php

namespace App\Http\Controllers\RainbowControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\PerformerMovie;
use App\Models\Performer;
class Movie_SingleController extends Controller
{
    //
   public function Index($id){
    $page='movie_single';
    $JsPage="";
    $MovieEx=Movie::with(['photos','movieCategory','director','productor','performers'])->where('Id',$id)->first();
   return view('RainbowViews.index',[
    'page'=>$page,
    'JsPage'=>$JsPage,
    'movieEx'=>$MovieEx,
   ]);
   }
}
