<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengaturan extends Model
{
    protected $table = 'pengaturan_web';
    protected $guarded = ['id'];

    public function gambar()
    {
        if($this->gambar)
        {
            return asset('storage/'.$this->gambar);
        }else{
            return asset('assets/dist/img/AdminLTELogo.png');
        }
    }
}
