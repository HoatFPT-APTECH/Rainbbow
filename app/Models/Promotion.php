<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model{
    protected $table="tbl_promotion";
    protected $primaryKey="Id";
    public $timestamps=false;
    public function cinemas() {
        return $this->belongsToMany(Cinema::class, 'tbl_PromotionCinema', 'Promotion_Id', 'Cinema_Id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'User_Id', 'Id');
    }
    public function promotionCategrory() {
        return $this->belongsTo(PromotionCategrory::class, 'PromotionCategrory_Id','Id');
    }
}