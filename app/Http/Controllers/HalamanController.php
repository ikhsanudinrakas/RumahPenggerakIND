<?php

namespace App\Http\Controllers;

use App\Models\Pengaturan;
use Illuminate\Http\Request;

class HalamanController extends Controller
{
    public function kontak()
    {
        return view('user.pages.kontak',[
            'title' => 'Kontak Kami',
            'item' => Pengaturan::first()
        ]);
    }
    public function tentang()
    {
        return view('user.pages.tentang',[
            'title' => 'Tentang Kami',
            'pengaturan' => Pengaturan::first()
        ]);
    }
}
