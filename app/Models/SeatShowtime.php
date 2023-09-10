<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeatShowtime extends Model
{
    protected $table="tbl_seatshowtime";
    protected $primaryKey=['Seat_Id','Showtime_Id'];
    public $timestamps=false;
    
    public function seat()
    {
        return $this->belongsTo(Seat::class, 'Seat_Id');
    }

    public function showtime()
    {
        return $this->belongsTo(Showtime::class, 'Showtime_Id');
    }
}
