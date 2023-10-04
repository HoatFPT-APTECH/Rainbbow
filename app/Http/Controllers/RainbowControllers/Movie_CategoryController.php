<?php

namespace App\Http\Controllers\RainbowControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Movie_CategoryController extends Controller
{
    public function Index(){
    $page='movie_category';
    $JsPage="";
    return  view('RainbowViews.index', [
        'page' => $page,
        'JsPage'=>$JsPage, ]);
    }
}
