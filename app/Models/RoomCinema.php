<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomCinema extends Model
{
    protected $table="tbl_roomcinema";
    protected $primaryKey=['Room_Id','Cinema_Id'];
    public $timestamps=false;
    
    public function room()
    {
        return $this->belongsTo(Room::class, 'Room_Id');
    }

    public function cinema()
    {
        return $this->belongsTo(Cinema::class, 'Cinema_Id');
    }
}
