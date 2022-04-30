<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Desa;
use App\Models\PesanMasuk;
use App\Models\Potensi;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $count = [
            'user' => User::count(),
            'desa' => Desa::count(),
            'pesan_masuk' => PesanMasuk::count(),
            'potensi' => Potensi::count()
        ];
        return view('admin.pages.dashboard',[
            'title' => 'Dashboard',
            'count' => $count
        ]);
    }
}
