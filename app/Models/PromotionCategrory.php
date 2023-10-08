<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PromotionCategrory extends Model{
    protected $table="tbl_promotioncategrory";
    protected $primaryKey="Id";
    public $timestamps=false;
    public function promotions()
    {
        return $this->hasMany(Promotion::class, 'PromotionCategrory_Id', 'Id');
    }
}
