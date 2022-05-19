<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use Illuminate\Http\Request;

class DesaController extends Controller
{
    public function index()
    {
        $q = request('q');
        if($q)
        {
            $data_desa = Desa::with('potensi')->where('nama','like','%' . $q . '%')->orWhere('deskripsi_singkat','like', '%' . $q . '%')->paginate(5);
        }else{
            $data_desa = Desa::with('potensi')->paginate(5);
            $q = NULL;
        }
        return view('user.pages.desa.index',[
            'title' => 'List Desa',
            'data_desa' => $data_desa,
            'q' => $q
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
