<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table="tbl_movie";
    protected $primaryKey='Id';
    public $timestamps=false;
    public function movieCategory() {
        return $this->belongsTo(MovieCategory::class, 'MovieCategory_Id');
    }
    public function director() {
        return $this->belongsTo(Director::class, 'Director_Id');
    }
    public function productor() {
        return $this->belongsTo(Productor::class, 'Productor_Id');
    }
    public function performers() {
        return $this->belongsToMany(Performer::class, 'tbl_PerformerMovie', 'Movie_Id', 'Performer_Id');
    }
    public function photos() {
        return $this->belongsToMany(Photo::class, 'tbl_Photo', 'Id', 'Movie_Id');
    }
}
