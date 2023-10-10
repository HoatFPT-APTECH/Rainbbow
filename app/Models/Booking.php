<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table="tbl_booking";
    protected $primaryKey='Id';
    public $timestamps=false;
   

    public function tickets()
    {
        return $this->hasMany(Ticket::class, 'Booking_Id','Id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'User_Id','Id');
    }
   

}
