<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table="tbl_comment";
    protected $primaryKey='Id';
    public $timestamps=false;
    public function movie()
    {
        return $this->belongsTo(Movie::class, 'Movie_Id','Id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'User_Id', 'Id');
    }
}
