<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productor extends Model{
    protected $table="tbl_Productor";
    protected $primaryKey="Id";
    public $timestamps=false;
    public function movies()
    {
        return $this->hasMany(Movie::class, 'Productor_Id');
    }
}