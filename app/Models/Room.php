<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model{
    protected $table="tbl_room";
    protected $primaryKey="Id";
    public $timestamps=false;
    public function cinema()
    {
        return $this->belongsTo(Cinema::class,  'Cinema_Id','Id');
           
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