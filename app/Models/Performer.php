<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Performer extends Model
{
    protected $table="tbl_performer";
    protected $primaryKey='Id';
    public $timestamps=false;
    public function movies()
    {
        return $this->belongsToMany(Movie::class, 'tbl_PerformerMovie', 'Performer_Id', 'Movie_Id');
    }
}
