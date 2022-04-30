<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Desa;
use App\Models\Galeri;
use App\Models\Potensi;
use App\Models\Proyek;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index()
    {
        $items = Galeri::latest()->get();
        return view('admin.pages.galeri.index',[
            'title' => 'Data Galeri',
            'items' => $items
        ]);
    }

    public function create()
    {
        return view('admin.pages.galeri.create',[
            'title' => 'Tambah Galeri',
            'data_desa' => Desa::get(),
            'data_proyek' => Proyek::get(),
            'data_potensi' => Potensi::get() 
        ]);
    }

    public function store()
    {
        $gambar_arr = request()->file('gambar');
        // cek ketika input kategori proyek
        if(request('proyek'))
        {
            $proyek_id = request('proyek');
        }else if(request('desa') && request('potensidesa'))
        {
            $desa_id = request('desa');
            $potensi_id = request('potensidesa');
        }else if(request('desa'))
        {
            $desa_id = request('desa');
        }
        foreach($gambar_arr as $gambar)
        {
            Galeri::create([
                'proyek_id' => $proyek_id ?? NULL,
                'nama' => request('nama'),
                'desa_id' => $desa_id ?? NULL,
                'potensi_id' => $potensi_id ?? NULL,
                'gambar' => $gambar->store('galeri','public')
            ]);
        }
        return redirect()->route('admin.galeri.index')->with('success','Galeri Foto berhasil disimpan.');
    }

    public function destroy($id)
    {
        Galeri::destroy($id);
        return redirect()->route('admin.galeri.index')->with('success','Galeri Foto berhasil dihapus.');
    }
}
