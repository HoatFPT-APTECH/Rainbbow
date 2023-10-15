<?php

namespace App\Http\Controllers\RainbowControllers;

use App\Http\Controllers\Controller;
use App\Models\Cinema;
use App\Models\Movie;
use App\Models\Showtime;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MovieBookingController extends Controller
{
    public function Index($id)
    {
        $page = 'movie_booking';
        $JsPage = "booking_movie";
        $MovieEx = Movie::with(['photos', 'movieCategory'])->where('Id', $id)->first();
        $ListShowTime = Showtime::with(['cinema', 'room'])->where("Movie_Id", $id)->get();
        $EndTime=Showtime::where('Movie_Id',$id)->max('End');

        if(sizeof($ListShowTime)==0 ||  $EndTime<now() ){
            //    return response()->json(  $EndTime);
            return view('404NotFound');
        }
        $dateTimeStringStart = $ListShowTime[0]->Start;
        $dateTimeStringEnd=$ListShowTime[0]->End;

        $carbonDateStart = Carbon::parse($dateTimeStringStart);


        $startDateMovie = $carbonDateStart->format('d M, Y');
        $intervalTime=$this->IntervalTime($dateTimeStringStart,$dateTimeStringEnd);
        return view("RainbowViews.index", [
            'page' => $page,
            'JsPage' => $JsPage,
            'listShowTime' => $ListShowTime,
            'movie' => $MovieEx,
            'startDate' => $startDateMovie,
            'intervalTime'=>$intervalTime
        ]);
    }
    public function IntervalTime($start, $end)
    {
        $startDateTime = Carbon::parse($start);
        $endDateTime = Carbon::parse($end);

        // Tính khoảng thời gian giữa hai ngày
        $timeInterval = $endDateTime->diffAsCarbonInterval($startDateTime);

        // Lấy số giờ và phút
        $hours = $timeInterval->hours;
        $minutes = $timeInterval->minutes;

        // Định dạng kết quả
        if ($hours > 0 && $minutes > 0) {
            $formattedTime = "{$hours} hrs {$minutes} mins";
        } elseif ($hours > 0) {
            $formattedTime = "{$hours} hrs";
        } else {
            $formattedTime = "{$minutes} mins";
        }
        return $formattedTime;
    }
}
