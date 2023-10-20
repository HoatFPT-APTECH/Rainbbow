<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeSlide extends Model
{
    protected $table="tbl_homeslide";
    protected $primaryKey="Id";
    public $timestamps=false;
    public function categorySlide(){
        return $this->belongsTo(SlideCategory::class,'SlideCategory_Id','Id');
    }
}
