<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table="tbl_user";
    protected $primaryKey="Id";
    public $timestamps=false;
    public function role() {
        return $this->belongsTo(Role::class, 'Role_Id');
    }
    public function bookings() {
        return $this->hasMany(Booking::class, 'User_Id');
    }
    public function promotions() {
        return $this->belongsToMany(Promotion::class, 'tbl_PromotionUser', 'User_Id', 'Promotion_Id');
    }
}
