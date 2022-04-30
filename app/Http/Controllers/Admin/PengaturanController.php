<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pengaturan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PengaturanController extends Controller
{
    public function index()
    {
        return view('admin.pages.pengaturan.index',[
            'title' => 'Pengaturan Web',
            'item' => Pengaturan::first()
        ]);
    }

    public function update()
    {
        request()->validate([
            'nama' => ['required'],
            'alamat' => ['required'],
            'map' => ['required'],
            'no_telepon' => ['required'],
            'email' => ['required'],
            'deskripsi' => ['required'],
            'link_facebook' => ['required'],
            'link_twitter' => ['required'],
            'link_path' => ['required'],
            'link_linkedin' => ['required'],
            'gambar' => ['image']
        ]);
        $data = request()->all();
        $item = Pengaturan::first();
        if(request('gambar'))
        {
            Storage::disk('public')->delete($item->gambar);
            $data['gambar'] = request()->file('gambar')->store('pengaturan','public');
        }else{
            $data['gambar'] = $item->gambar;
        }

        $item->update($data);
        return redirect()->route('admin.pengaturan.index')->with('success','Pengaturan Web berhasil disimpan.');
    }
}
