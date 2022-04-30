<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Desa;
use App\Models\Potensi;
use Illuminate\Http\Request;

class PotensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Potensi::orderBy('nama','ASC')->get();
        return view('admin.pages.potensi.index',[
            'title' => 'Data Potensi',
            'items' => $items
        ]);
    }

    public function getByDesa($desa_id)
    {
        $potensi = Desa::with('potensi')->find($desa_id)->potensi;
        return response()->json($potensi);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.potensi.create',[
            'title' => 'Tambah Data Potensi'
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
            'nama' => ['required']
        ]);

        $data = request()->all();
        Potensi::create($data);
        return redirect()->route('admin.potensi.index')->with('success','Potensi berhasil disimpan.');
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
        $item = Potensi::findOrFail($id);
        return view('admin.pages.potensi.edit',[
            'title' => 'Edit Data Potensi',
            'item' => $item
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
            'nama' => ['required']
        ]);

        $data = request()->all();
        $item = Potensi::findOrFail($id);
        $item->update($data);
        return redirect()->route('admin.potensi.index')->with('success','Potensi berhasil disimpan.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Potensi::findOrFail($id);
        $item->delete();
        return redirect()->route('admin.potensi.index')->with('success','Potensi berhasil dihapus.');
    }
}
