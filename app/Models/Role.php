<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table="tbl_Role";
    protected $primarykey="Id";
    public $timestamp=false;
     function User(){
        $this->hasMany("User","Role_Id","Id");
     }
}
