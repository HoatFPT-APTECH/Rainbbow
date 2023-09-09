<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seatshowtime extends Model
{
    protected $table="tbl_seatshowtime";
    protected $primarykey=["Seat_Id","Showtime_Id"];
    public $timestamps=false;
}