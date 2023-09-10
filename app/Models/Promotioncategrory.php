<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PromotionCategrogy extends Model{
    protected $table="tbl_Promotioncategrogy";
    protected $primarykey="Id";
    public $timestamp=false;
    public function promotions()
    {
        return $this->hasMany(Promotion::class, 'PromotionCategrory_Id');
    }
}