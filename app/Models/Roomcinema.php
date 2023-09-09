<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roomcinema extends Model
{
    protected $table="tbl_roomcinema";
    protected $primarykey=["Room_Id","Cinema_Id"];
    public $timestamps=false;
}
