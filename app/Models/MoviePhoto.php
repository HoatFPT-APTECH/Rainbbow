<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MoviePhoto extends Model
{
    protected $table="tbl_moviephoto";
    protected $primaryKey=['Photo_Id','Movie_Id'];
    public $timestamps=false;
    public function movie()
    {
        return $this->belongsTo(Movie::class, 'Movie_Id');
    }

    public function photo()
    {
        return $this->belongsTo(Photo::class, 'Photo_Id');
    }
}
