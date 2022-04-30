<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use Illuminate\Http\Request;

class DesaController extends Controller
{
    public function index()
    {
        $data_desa = Desa::with('potensi')->paginate(10);
        return view('user.pages.desa.index',[
            'title' => 'List Desa',
            'data_desa' => $data_desa
        ]);
    }

    public function show($id)
    {
        $desa = Desa::with('galeri','potensi.galeri')->find($id);
        return view('user.pages.desa.show',[
            'title' => $desa->nama,
            'desa' => $desa
        ]);
    }
}
