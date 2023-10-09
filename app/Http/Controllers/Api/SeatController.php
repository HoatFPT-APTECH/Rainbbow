<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Seat;
use App\Models\SeatShowtime;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class SeatController extends Controller
{
    public function ChangeStatusSeat(Request $request)
{
    $seat_Name = $request->input('seat');
    $showTime_Id = $request->input('showTime_Id');
    $status = $request->input('status');
    $seat = Seat::where('Name', $seat_Name)->first();

    // Tạo mảng dữ liệu để cập nhật hoặc chèn
    $data = [
        'Seat_Id' => $seat->Id,
        'Showtime_Id' => $showTime_Id,
        'Status' => $status,
    ];

    SeatShowtime::updateOrInsert(
        ['Seat_Id' => $seat->Id, 'Showtime_Id' => $showTime_Id],
        $data
    );

    return response()->json($data);
}

}
