<?php

namespace App\Http\Controllers\AdminControllers;

use App\Models\Showtime;
use App\Http\Controllers\Controller;
use App\Models\Cinema;
use App\Models\Movie;
use App\Models\Room;
use App\Models\SeatCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShowtimeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listShowtime = Showtime::with(['cinema', 'room', 'seats', 'movie'])->where('Deleted', 0)->get();
        return view('AdminViews.index', ['page' => "showtime",
         'danhsach' => $listShowtime,

        ]);
        // return response()->json($listShowtime,200); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cinema = Cinema::all();
        $room = Room::all();
        $movie = Movie::all();
        return view('AdminViews.index', [
            'page' => "showtimeCreate",
            'JsPage'=>'showtime',
            'cinema' => $cinema,
            'room' => $room,
            'movie' => $movie
        ]);
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Start = $request->input('Start');
        $End = $request->input('End');
        $Movie_Id = $request->input('Movie_Id');
        $Cinema_Id = $request->input('Cinema_Id');
        $Room_id = $request->input('Room_id');
    
        // Tạo một bản ghi mới trong bảng Showtime
        $newShowtime = new Showtime();
        $newShowtime->Start = $Start;
        $newShowtime->End = $End;
        $newShowtime->Movie_Id = $Movie_Id;
        $newShowtime->Cinema_Id = $Cinema_Id;
        $newShowtime->Room_id = $Room_id;
        $newShowtime->save();
    
        // Lấy danh sách các SeatCategory
        $seatCategories = SeatCategory::all();
    
        foreach ($seatCategories as $seatCategory) {
            // Lấy danh sách 23 ghế ngẫu nhiên thuộc SeatCategory
            $randomSeats = DB::table('tbl_seat')
                ->select('Id as Seat_Id')
                ->where('SeatCategory_Id', $seatCategory->Id)
                ->inRandomOrder()
                ->limit(23)
                ->get();
    
            // Thêm dữ liệu vào bảng tbl_seatshowtime
            foreach ($randomSeats as $randomSeat) {
                DB::table('tbl_seatshowtime')->insert([
                    'Seat_Id' => $randomSeat->Seat_Id,
                    'Showtime_Id' => $newShowtime->Id, // Sử dụng id của Showtime mới tạo
                    'Status' => 0,
                ]);
            }
        }
    
        // Redirect sau khi thêm dữ liệu thành công
        return redirect("/admin/showtime");
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $ShowtimeExist = Showtime::with(['cinema', 'room', 'movie'])->where('Id', $id)->first();
        $cinema = Cinema::all();
        $room = Room::where('Cinema_Id',$ShowtimeExist->Cinema_Id)->get();
        $movie = Movie::all();
        return view('AdminViews.index', [
            'page' => "showtimeShow",
            'Showtime' => $ShowtimeExist,
            'cinema' => $cinema,
            'room' => $room,
            'movie' => $movie
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ShowtimeExist = Showtime::with(['cinema', 'room', 'movie'])->where('Id', $id)->first();
        $cinema = Cinema::all();
        $room =  Room::where('Cinema_Id',$ShowtimeExist->Cinema_Id)->get();
        $movie = Movie::all();
        return view('AdminViews.index', [
            'page' => "showtimeEdit",
            'JsPage'=>'showtime',
            'Showtime' => $ShowtimeExist,
            'cinema' => $cinema,
            'room' => $room,
            'movie' => $movie
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Start = $request->input('Start');
        $End = $request->input('End');
        $Movie_Id = $request->input('Movie_Id');
        $Cinema_Id = $request->input('Cinema_Id');
        $Room_id = $request->input('Room_id');

        $newShowtime = Showtime::where('id', $id)->first();
        $newShowtime->Start = $Start;
        $newShowtime->End = $End;
        $newShowtime->Movie_Id = $Movie_Id;
        $newShowtime->Cinema_Id = $Cinema_Id;
        $newShowtime->Room_id = $Room_id;
        $newShowtime->save();
        //return $this->index();
        return redirect("/admin/showtime");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $newShowtime = Showtime::where('Id', $id)->first();

        $newShowtime->Deleted = 1;
        $newShowtime->save();
        // return $this->index();
        return redirect("/admin/showtime");
    }
}
