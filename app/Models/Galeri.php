<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $table = 'galeri';
    protected $guarded = ['id'];

    public function gambar()
    {
        return asset('storage/'.$this->gambar);
    }
}
