<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    protected $table="tbl_seat";
    protected $primaryKey="Id";
    public $timestamps=false;
}
