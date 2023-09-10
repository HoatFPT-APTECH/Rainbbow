<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model{
    protected $table="tbl_Room";
    protected $primarykey="Id";
    public $timestamp=false;
    public function cinemas()
    {
        return $this->belongsToMany(Cinema::class, 'tbl_RoomCinema', 'Room_Id', 'Cinema_Id')
            ->withPivot('Status');
    }

    public function seats()
    {
        return $this->belongsToMany(Seat::class, 'tbl_SeatRoom', 'Room_Id', 'Seat_Id')
            ->withPivot('Status');
    }

    public function showtimes()
    {
        return $this->hasMany(Showtime::class, 'Room_id');
    }
}