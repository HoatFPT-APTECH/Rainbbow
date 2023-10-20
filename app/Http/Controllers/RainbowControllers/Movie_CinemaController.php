<?php

namespace App\Http\Controllers\RainbowControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Showtime;
use App\Models\Cinema;
use App\Models\MovieCategory;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent;


class Movie_CinemaController extends Controller
{
    public function Index()
    {

        $page = 'movie_cinema';
        $JsPage = "";
        $now = now();
        // $listMovie= Movie::join('tbl_showtime as st', 'st.Movie_Id', '=', 'tbl_Movie.Id')
        // ->where(function ($query) use ($now) {
        //     $query->where('st.End', '>=', now())->where('st.Start','<=',now())
        //        ;
        // })
        // ->get();;

        $ListMovie = Movie::distinct()->where('tbl_movie.Deleted', 0)
            ->join('tbl_showtime as st', 'st.Movie_Id', '=', 'tbl_movie.Id')
            ->join('tbl_cinema', 'st.Cinema_Id', '=', 'tbl_cinema.Id')
            ->join('tbl_moviecategory', 'tbl_movie.MovieCategory_Id', '=', 'tbl_moviecategory.Id')
            ->where(function ($query) {
                $query->where('st.Start', '<=', now())
                    ->where('st.End', '>=', now());
            })
            ->orderBy('st.Start', 'desc')
            ->select('tbl_movie.*', 'tbl_moviecategory.name as Category')
            ->paginate(9);
        // return response()->json($ListMovie);
        $ListCinema = DB::table('tbl_cinema')
            ->join('tbl_showtime', 'tbl_showtime.cinema_Id', '=', 'tbl_cinema.Id')
            ->where(function ($query) use ($now) {
                $query->where('tbl_showtime.Start', '<=', $now)
                    ->where('tbl_showtime.End', '>=', $now);
            })
            ->groupBy('tbl_cinema.Id', 'tbl_cinema.Name')
            ->select('tbl_cinema.Id', 'tbl_cinema.Name', DB::raw('count(tbl_cinema.Id) AS tong'))
            ->get();
        $movies = Movie::distinct()->join('tbl_showtime', 'tbl_movie.id', '=', 'tbl_showtime.movie_id')
            // ->where('tbl_showtime.cinema_id', 1)
            ->get();
        return view('RainbowViews.index', [
            'page' => $page,
            'JsPage' => $JsPage,
            'listMovie' => $ListMovie,
            'listCinema' => $ListCinema
        ])->with('i', (request()->input('page', 1) - 1) * 9);
        //    return response()->json($ListCinema,200);
    }
    public function Search(Request $request)
    {
        $keySearch = $request->input('keySearch');
        $cinema = $request->input('cinema');
        $now = now();
        $page = 'movie_cinema';
        $JsPage = "";
        if ($keySearch !== null && $cinema == null) {
            $ListMovie = Movie::distinct()->where('tbl_movie.Deleted', 0)
            ->join('tbl_showtime as st', 'st.Movie_Id', '=', 'tbl_movie.Id')
            ->join('tbl_cinema', 'st.Cinema_Id', '=', 'tbl_cinema.Id')
            ->join('tbl_moviecategory', 'tbl_movie.MovieCategory_Id', '=', 'tbl_moviecategory.Id')
            ->where(function ($query) {
                $query->where('st.Start', '<=', now())
                    ->where('st.End', '>=', now());
            })
            ->orderBy('st.Start', 'desc')
            ->select('tbl_movie.*', 'tbl_moviecategory.name as Category')

            ->where('tbl_movie.Name', 'like', '%'.$keySearch.'%')
                ->paginate(9);
        } else if ($cinema !== null && $keySearch == null) {
            $ListMovie = Movie::distinct()->where('tbl_movie.Deleted', 0)
            ->join('tbl_showtime as st', 'st.Movie_Id', '=', 'tbl_movie.Id')
            ->join('tbl_cinema', 'st.Cinema_Id', '=', 'tbl_cinema.Id')
            ->join('tbl_moviecategory', 'tbl_movie.MovieCategory_Id', '=', 'tbl_moviecategory.Id')
            ->where(function ($query) {
                $query->where('st.Start', '<=', now())
                    ->where('st.End', '>=', now());
            })
            ->orderBy('st.Start', 'desc')
            ->select('tbl_movie.*', 'tbl_moviecategory.name as Category')
                // ->where('Cinema', 'like', '%'.$keySearch.'%')
                ->where('st.Cinema_Id', $cinema)
                ->where('Cinema_Id', $cinema)->paginate(9);
        } else {
            $ListMovie = Movie::distinct()->where('tbl_movie.Deleted', 0)
            ->join('tbl_showtime as st', 'st.Movie_Id', '=', 'tbl_movie.Id')
            ->join('tbl_cinema', 'st.Cinema_Id', '=', 'tbl_cinema.Id')
            ->join('tbl_moviecategory', 'tbl_movie.MovieCategory_Id', '=', 'tbl_moviecategory.Id')
            ->where(function ($query) {
                $query->where('st.Start', '<=', now())
                    ->where('st.End', '>=', now());
            })
            ->orderBy('st.Start', 'desc')
            ->select('tbl_movie.*', 'tbl_moviecategory.name as Category')
                // ->where('Cinema', 'like', '%'.$keySearch.'%')
                ->where('st.Cinema_Id', $cinema)
                ->paginate(9);
        }
        // $ListMovieCategory = MovieCategory::with(['movies'])->get();
        $ListCinema = DB::table('tbl_cinema')
            ->join('tbl_showtime', 'tbl_showtime.cinema_Id', '=', 'tbl_cinema.Id')
            ->where(function ($query) use ($now) {
                $query->where('tbl_showtime.Start', '<=', $now)
                    ->where('tbl_showtime.End', '>=', $now);
            })
            ->groupBy('tbl_cinema.Id', 'tbl_cinema.Name')
            ->select('tbl_cinema.Id', 'tbl_cinema.Name', DB::raw('count(tbl_cinema.Id) AS tong'))
            ->get();
        return view('RainbowViews.index', [
            'page' => $page,
            'JsPage' => $JsPage,
            'listMovie' => $ListMovie,
            'listCinema' => $ListCinema
        ])->with('i', (request()->input('page', 1) - 1) * 9);
    }
}