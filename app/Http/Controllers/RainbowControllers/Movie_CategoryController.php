<?php

namespace App\Http\Controllers\RainbowControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class Movie_CategoryController extends Controller
{
    public function Index(){
    $page='movie_category';
    $JsPage="";
    $ListMovie= Movie::with(['photos','movieCategory'])->get();
    return  view('RainbowViews.index', [
        'page' => $page,
        'JsPage'=>$JsPage,
        'listMovie'=>$ListMovie,
    ]);
    }
}
