<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model{
    protected $table="tbl_Room";
    protected $primarykey="Id";
    public $timestamp=false;
}