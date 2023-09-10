<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PromotionCniema extends Model{
    protected $table="tbl_Promotioncinema";
    protected $primarykey=["Promotion_Id","Cinema_Id"];
    public $timestamp=false;
    public function cinema()
    {
        return $this->belongsTo(Cinema::class, 'Cinema_Id');
    }

    public function promotion()
    {
        return $this->belongsTo(Promotion::class, 'Promotion_Id');
    }
}
