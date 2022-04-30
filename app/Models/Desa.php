<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Desa extends Model
{
    protected $table = 'desa';
    protected $guarded = ['id'];

    public function potensi()
    {
        return $this->belongsToMany(Potensi::class,'desa_potensi','desa_id','potensi_id');
    }

    public function gambar()
    {
        return asset('storage/'.$this->gambar);
    }

    public function galeri()
    {
        return $this->hasMany(Galeri::class,'desa_id','id');
    }
}
