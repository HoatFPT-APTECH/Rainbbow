<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Photo extends Model{
    protected $table="tbl_Photo";
    protected $primarykey="Id";
    public $timestamps=false;
    public function movies()
    {
        return $this->belongsTo(Movie::class, 'Movie_Id');
    }
}
