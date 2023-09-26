<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovieCategory extends Model
{
    protected $table="tbl_moviecategory";
    protected $primaryKey='Id';
    public $timestamps=false;
    
    public function movies()
    {
        return $this->hasMany(Movie::class, 'MovieCategory_Id','Id');
    }
}
