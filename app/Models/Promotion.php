<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model{
    protected $table="tbl_Promotion";
    protected $primarykey="Id";
    public $timestamp=false;
    public function cinemas() {
        return $this->belongsToMany(Cinema::class, 'tbl_PromotionCinema', 'Promotion_Id', 'Cinema_Id');
    }
    public function users() {
        return $this->belongsToMany(User::class, 'tbl_PromotionUser', 'Promotion_Id', 'User_Id');
    }
}