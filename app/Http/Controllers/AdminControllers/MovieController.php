<?php

namespace App\Http\Controllers\AdminControllers;
use App\Models\Movie;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function Index(){
        return view("AdminViews.index",['page'=>"movie"]);
}
public function TestListApi(){
    $list= Movie::with('MovieCategory', 'Director', 'Productor')->get();
    return response()->json($list,200);
}
}