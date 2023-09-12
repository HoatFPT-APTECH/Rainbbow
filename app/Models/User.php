<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    
    
    protected $table="tbl_user";
    protected $primaryKey="Id";
    protected $hidden=["Password"];
    protected $username="UserName";
    protected $password='Password';
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
