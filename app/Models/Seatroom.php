<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seatroom extends Model
{
    protected $table="tbl_seatroom";
    protected $primarykey=["Seat_Id","Room_Id"];
    public $timestamps=false;
}
