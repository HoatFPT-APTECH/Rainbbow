<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $table="tbl_ticket";
    protected $primaryKey="Id";
    public $timestamps=false;
    public function promotion()
    {
        return $this->belongsTo(promotion::class,"Promotion_Id");
    }
    public function showtime()
    {
        return $this->belongsTo(Showtime::class, 'Showtime_Id');
    }

    public function booking()
    {
        return $this->belongsTo(Booking::class, 'Booking_Id');
    }

    public function seat()
    {
        return $this->belongsTo(Seat::class, 'Seat_Id');
    }
}
