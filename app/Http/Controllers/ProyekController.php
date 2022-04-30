<?php

namespace App\Http\Controllers;

use App\Models\Proyek;
use Illuminate\Http\Request;

class ProyekController extends Controller
{
    public function index()
    {
        return view('user.pages.proyek.index',[
            'title' => 'List Proyek',
            'data_proyek' => Proyek::latest()->paginate(1)
        ]);
    }

    public function show($id)
    {
        $proyek = Proyek::with('galeri')->findOrFail($id);
        return view('user.pages.proyek.show',[
            'title' => $proyek->nama,
            'proyek' => $proyek
        ]);
    }
}
