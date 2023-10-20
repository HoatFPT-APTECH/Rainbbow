<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    public function index()
    {
        $BookingOnToday = Booking::whereDate('OrderTime', now()->toDateString())
            ->whereMonth('OrderTime', now()->month)
            ->count();
        $BookingPayed = Booking::whereDate('OrderTime', now()->toDateString())
            ->whereMonth('OrderTime', now()->month)->where('Status', 1)
            ->count();
        $BookingOnMonth = Booking::whereMonth('OrderTime', now()->month)
            ->count();
        $currentTime = Carbon::now();

        $totalMoney = Booking::whereMonth('OrderTime', $currentTime->month)->where('Status',1)
        ->sum('AllPrice');
        return view('AdminViews.index', [
            'page' => "dasdboard",
            'bookingOnToday' => $BookingOnToday,
            'bookingPayed' => $BookingPayed,
            'bookingOnMonth' => $BookingOnMonth,
            'totalMoney' => $totalMoney
        ]);
    }
}
