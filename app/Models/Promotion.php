<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model{
    protected $table="tbl_Promotion";
    protected $primarykey="Id";
    public $timestamp=false;
}