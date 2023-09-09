<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table="tbl_booking";
    protected $primaryKey='Id';
    public $timestamps=false;
}
