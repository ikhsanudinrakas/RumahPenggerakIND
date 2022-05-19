<?php

namespace App\Http\Controllers;

use App\Models\Proyek;
use Illuminate\Http\Request;

class ProyekController extends Controller
{
    public function index()
    {
        $q = request('q');
        if($q)
        {
            $data_proyek = Proyek::where('nama','like','%' . $q . '%')->orWhere('deskripsi_singkat','like', '%' . $q . '%')->paginate(5);
        }else{
            $data_proyek = Proyek::latest()->paginate(5);
            $q = NULL;
        }
        return view('user.pages.proyek.index',[
            'title' => 'List Proyek',
            'data_proyek' => $data_proyek,
            'q' => $q
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
