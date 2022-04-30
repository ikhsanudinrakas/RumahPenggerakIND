<?php

namespace App\Http\Controllers;

use App\Models\Pengaturan;
use App\Models\Proyek;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $proyek_terakhir = Proyek::with('galeri')->latest()->first();
        $random = Proyek::with('galeri')->inRandomOrder()->get();
        return view('user.pages.home',[
            'title' => 'Home',
            'pengaturan' => Pengaturan::first(),
            'proyek_terakhir' => $proyek_terakhir,
            'proyek_random' => $random
        ]);
    }
}
