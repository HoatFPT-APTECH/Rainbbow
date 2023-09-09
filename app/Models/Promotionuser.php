<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PromotionUser extends Model{
    protected $table="tbl_PromotionUser";
    protected $primarykey=["Promotion_Id","User_Id"];
    public $timestamp=false;
}