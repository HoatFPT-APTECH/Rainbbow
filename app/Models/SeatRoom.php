<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeatRoom extends Model
{
    protected $table="tbl_seatroom";
    protected $primaryKey=['Seat_Id','Room_Id'];
    public $timestamps=false;
    public function seat()
    {
        return $this->belongsTo(Seat::class, 'Seat_Id');
    }

    public function room()
    {
        return $this->belongsTo(Room::class, 'Room_Id');
    }
}
