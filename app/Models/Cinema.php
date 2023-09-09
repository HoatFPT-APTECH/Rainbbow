<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cinema extends Model
{
    protected $table="tbl_cinema";
    protected $primaryKey='Id';
    public $timestamps=false;
}
