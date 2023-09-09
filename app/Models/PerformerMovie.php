<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerformerMovie extends Model
{
    protected $table="tbl_performermovie";
    protected $primaryKey=['Performer_Id','Movie_Id'];
    public $timestamps=false;
}
