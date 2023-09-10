<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PromotionUser extends Model{
    protected $table="tbl_Promotioncser";
    protected $primarykey=["Promotion_Id","User_Id"];
    public $timestamp=false;
    public function user()
    {
        return $this->belongsTo(User::class, 'User_Id');
    }

    public function promotion()
    {
        return $this->belongsTo(Promotion::class, 'Promotion_Id');
    }
}
