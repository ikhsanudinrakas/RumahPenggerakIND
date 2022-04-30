<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\Notifikasi;
use App\Models\Desa;
use App\Models\Proyek;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class ProyekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Proyek::with('desa')->orderBy('nama','ASC')->get();
        return view('admin.pages.proyek.index',[
            'title' => 'Data Proyek',
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $desa = Desa::orderBy('nama','ASC')->get();
        return view('admin.pages.proyek.create',[
            'title' => 'Tambah Data Proyek',
            'desa' => $desa
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'nama' => ['required'],
            'desa_id' => ['required'],
            'deskripsi_singkat' => ['required'],
            'deskripsi' => ['required'],
            'gambar' => ['required','image']
        ]);

        $data = request()->all();
        $data['gambar'] = request()->file('gambar')->store('proyek','public');
        $item = Proyek::create($data);

        //send notif to all user
        $users = User::where('role','user')->get();
        foreach($users as $user)
        {
            $deskripsi = 'Proyek  ' . $item->nama . ' baru saja dibuat. Silahkan lihat selengkapnya di ' . route('proyek.show',$item->id) . ' untuk mengetahui proyek lebih lanjutnya.';
            Mail::to($user->email)->send(new Notifikasi('Proyek Baru','Pemberitahuan Proyek Baru',$deskripsi));
        }
        return redirect()->route('admin.proyek.index')->with('success','Proyek berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Proyek::with('desa')->findOrFail($id);
        $desa = Desa::orderBy('nama','ASC')->get();
        return view('admin.pages.proyek.edit',[
            'title' => 'Edit Data Proyek',
            'item' => $item,
            'desa' => $desa
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate([
            'nama' => ['required'],
            'desa_id' => ['required'],
            'deskripsi_singkat' => ['required'],
            'deskripsi' => ['required'],
            'gambar' => ['image']
        ]);

        $data = request()->all();
        $item = Proyek::findOrFail($id);
        if(request('gambar'))
        {
            Storage::disk('public')->delete($item->gambar);
            $data['gambar'] = request()->file('gambar')->store('proyek','public');
        }else{
            $data['gambar'] = $item->gambar;
        }
        $item->update($data);
        //send notif to all user
        $users = User::where('role','user')->get();
        foreach($users as $user)
        {
            $deskripsi = 'Proyek  ' . $item->nama . ' baru saja diupdate. Silahkan lihat selengkapnya di ' . route('proyek.show',$item->id) . ' untuk mengetahui perubahan proyek tersebut';
            Mail::to($user->email)->send(new Notifikasi('Proyek Update','Pemberitahuan Proyek Update',$deskripsi));
        }
        return redirect()->route('admin.proyek.index')->with('success','Proyek berhasil disimpan.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Proyek::findOrFail($id);
        Storage::disk('public')->delete($item->gambar);
        $item->delete();
        return redirect()->route('admin.proyek.index')->with('success','Proyek berhasil dihapus.');
    }
}
