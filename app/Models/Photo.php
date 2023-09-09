<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Photo extends Model{
    protected $table="tbl_Photo";
    protected $primarykey="Id";
    public $timestamp=false;
    
}
