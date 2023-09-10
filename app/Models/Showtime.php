<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Showtime extends Model
{
    protected $table="tbl_showtime";
    protected $primaryKey="Id";
    public $timestamps=false;
    public function movie()
    {
        return $this->belongsTo(Movie::class, 'Movie_Id');
    }

    public function cinema()
    {
        return $this->belongsTo(Cinema::class, 'Cinema_Id');
    }

    public function room()
    {
        return $this->belongsTo(Room::class, 'Room_id');
    }

    public function seats()
    {
        return $this->belongsToMany(Seat::class, 'tbl_SeatShowtime', 'Showtime_Id', 'Seat_Id')
            ->withPivot('Status');
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class, 'Showtime_Id');
    }
}
