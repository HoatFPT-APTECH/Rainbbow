<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    //
    public function Index(){
        return view("AdminViews.index",['page'=>"movie"]);
    }
   public function TestListApi(){
    $list= Movie::with('MovieCategory', 'Director', 'Productor')->get();
    return response()->json($list,200);
    // foreach($list as $element)
    //  <td name="ten cuar phim ">{{$element->name}}</td>
    //  <td name="ten cuar the loai phim ow bang khac ">{{$element->movie_category->name}}</td>
    // endforeach
   }
}
