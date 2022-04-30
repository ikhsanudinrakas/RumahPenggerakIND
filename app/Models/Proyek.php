<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proyek extends Model
{
    protected $table = 'proyek';
    protected $guarded = ['id'];

    public function desa()
    {
        return $this->belongsTo(Desa::class);
    }

    public function gambar()
    {
        return asset('storage/'. $this->gambar);
    }

    public function galeri()
    {
        return $this->hasMany(Galeri::class,'proyek_id','id');
    }
}
