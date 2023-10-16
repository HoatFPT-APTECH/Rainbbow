<?php

namespace App\Http\Controllers\RainbowControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\PerformerMovie;
use App\Models\Performer;
use App\Models\MovieCategory;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class Movie_SingleController extends Controller
{
    //
    public function Index($id)
    {
        // return response()->json([
        //     'hd'=>'helloo'
        // ]);
        $page = 'movie_single';
        $JsPage = "movie_single";
        $MovieEx = Movie::with(['photos', 'movieCategory', 'director', 'productor', 'performers'])->where('Id', $id)->first();
        $Comments = Comment::with(['user'])->where('Movie_Id', $id)->where('Deleted', 0)->get();
        return view('RainbowViews.index', [
            'page' => $page,
            'JsPage' => $JsPage,
            'movieEx' => $MovieEx,
            'comments' => $Comments
        ]);
        // return response()->json($user,200);
    }
    public function updateCMT(Request $request)
    {

        $Content = $request->input('content');
        $userId = $request->input('userId');
        $movieId = $request->input('movieId');
        // return response()->json([
        //     'conent' => $Content,
        //     'user' => $userId,
        //     'movie' => $movieId
        // ]);
        $newcomment = new Comment();
        $newcomment->Movie_Id = $movieId;
        $newcomment->User_Id = $userId;
        $newcomment->Content = $Content;
        $newcomment->save();

        return redirect("/rainbow/movie_single/$movieId");
    }
}