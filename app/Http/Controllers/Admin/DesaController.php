<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\Notifikasi;
use App\Models\Desa;
use App\Models\Potensi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class DesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Desa::with('potensi')->orderBy('nama','ASC')->get();
        return view('admin.pages.desa.index',[
            'title' => 'Data Desa',
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
        $potensi = Potensi::orderBy('nama','ASC')->get();
        return view('admin.pages.desa.create',[
            'title' => 'Tambah Data Desa',
            'potensi' => $potensi
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
            'alamat' => ['required'],
            'deskripsi_singkat' => ['required'],
            'deskripsi' => ['required'],
            'potensi' => ['required'],
            'gambar' => ['required','image','mimes:jpg,jpeg,png']
        ]);

        $data = request()->all();
        $data['gambar'] = request()->file('gambar')->store('desa','public');
        $desa = Desa::create($data);
        $desa->potensi()->attach(request('potensi'));


        //send notif to all user
        $users = User::where('role','user')->get();
        foreach($users as $user)
        {
            $deskripsi = 'Desa  ' . $desa->nama . ' baru saja dibuat. Silahkan lihat selengkapnya di ' . route('desa.show',$desa->id) . ' untuk mengetahui profile desa tersebut';
            Mail::to($user->email)->send(new Notifikasi('Desa Baru','Pemberitahuan Desa Baru',$deskripsi));
        }


        return redirect()->route('admin.desa.index')->with('success','Desa berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Desa::with('potensi')->findOrFail($id);
        return view('admin.pages.desa.show',[
            'title' => 'Detail ' . $item->nama,
            'item' => $item,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Desa::findOrFail($id);
        $potensi = Potensi::orderBy('nama','ASC')->get();
        return view('admin.pages.desa.edit',[
            'title' => 'Edit Data Desa',
            'item' => $item,
            'potensi' => $potensi
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
            'alamat' => ['required'],
            'deskripsi_singkat' => ['required'],
            'deskripsi' => ['required'],
            'potensi' => ['required'],
            'gambar' => ['image','mimes:jpg,jpeg,png']
        ]);

        $data = request()->all();
        $item = Desa::findOrFail($id);
        if(request('gambar'))
        {
            Storage::disk('public')->delete($item->gambar);
            $data['gambar'] = request()->file('gambar')->store('desa','public');
        }else{
            $data['gambar'] = $item->gambar;
        }
        $item->update($data);
        $item->potensi()->sync(request('potensi'));

        //send notif to all user
        $users = User::where('role','user')->get();
        foreach($users as $user)
        {
            $deskripsi = 'Desa  ' . $item->nama . ' baru saja diupdate. Silahkan lihat selengkapnya di ' . route('desa.show',$item->id) . ' untuk mengetahui perubahan desa tersebut';
            Mail::to($user->email)->send(new Notifikasi('Desa Update','Pemberitahuan Desa Update',$deskripsi));
        }
        return redirect()->route('admin.desa.index')->with('success','Desa berhasil disimpan.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Desa::findOrFail($id);
        Storage::disk('public')->delete($item->gambar);
        $item->delete();
        return redirect()->route('admin.desa.index')->with('success','Desa berhasil dihapus.');
    }
}
