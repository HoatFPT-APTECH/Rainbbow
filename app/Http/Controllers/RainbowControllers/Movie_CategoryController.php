<?php

namespace App\Http\Controllers\RainbowControllers;

use App\Http\Controllers\Controller;
use App\Models\MovieCategory;
use Illuminate\Http\Request;
use App\Models\Movie;
use Illuminate\Support\Facades\DB;

class Movie_CategoryController extends Controller
{
    public function Index(){
 
    $page='movie_category';
    $JsPage="";
    $ListMovie= Movie::with(['photos','movieCategory'])
    ->orderBy('DateShow','desc')
    
    ->get();
    $ListMovieCategory = MovieCategory::with(['movies'])->get();
    return  view('RainbowViews.index', [
        'page' => $page,
        'JsPage'=>$JsPage,
        'listMovie'=>$ListMovie,
        'listMovieCategory'=>$ListMovieCategory
    ]);


    // return response()->json($ListMovie);
    }
    public function Search(Request $request){
        $keySearch= $request->input('keySearch');
        $category=$request->input('category');
    $page='movie_category';
    $JsPage="";
    if($keySearch!==null&& $category==null){
        $ListMovie=  Movie::with(['photos','movieCategory'])
        ->where('tbl_movie.Name', 'like', '%'.$keySearch.'%')
        ->get();   
    }
   
    else if($category!==null && $keySearch==null){
        $ListMovie=Movie::with(['photos','movieCategory'])
       -> where('MovieCategory_Id',$category)->get();
    }
    else{
        $ListMovie=Movie::with(['photos','movieCategory'])
        ->where('tbl_movie.Name', 'like', '%'.$keySearch.'%')
       -> where('MovieCategory_Id',$category)->get();
    }
    $ListMovieCategory = MovieCategory::with(['movies'])->get();
    return  view('RainbowViews.index', [
        'page' => $page,
        'JsPage'=>$JsPage,
        'listMovie'=>$ListMovie,
        'listMovieCategory'=>$ListMovieCategory
    ]);
   }
}
