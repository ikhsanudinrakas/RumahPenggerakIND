<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Potensi extends Model
{
    protected $table = 'potensi';
    protected $guarded = ['id'];

    public function desa()
    {
        return $this->belongsToMany(Desa::class,'desa_potensi','desa_id','potensi_id');
    }

    public function galeri()
    {
        return $this->hasMany(Galeri::class,'potensi_id','id');
    }
}
