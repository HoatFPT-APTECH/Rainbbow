<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    protected $table="tbl_director";
    protected $primaryKey='Id';
    public $timestamps=false;
    public function movies()
    {
        return $this->hasMany(Movie::class, 'Director_Id');
    }
}
