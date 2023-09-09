<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $table="tbl_ticket";
    protected $primarykey="Id";
    public $timestamps=false;
}
