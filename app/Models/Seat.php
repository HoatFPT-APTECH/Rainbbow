<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    protected $table="tbl_seat";
    protected $primaryKey="Id";
    public $timestamps=false;
    public function rooms()
    {
        return $this->belongsToMany(Room::class, 'tbl_SeatRoom', 'Seat_Id', 'Room_Id')
            ->withPivot('Status');
    }

    public function showtimes()
    {
        return $this->belongsToMany(Showtime::class, 'tbl_SeatShowtime', 'Seat_Id', 'Showtime_Id')
            ->withPivot('Status');
    }
}
