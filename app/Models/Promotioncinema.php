<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PromotionCniema extends Model{
    protected $table="tbl_PromotionCinema";
    protected $primarykey=["Promotion_Id","Cinema_Id"];
    public $timestamp=false;
}