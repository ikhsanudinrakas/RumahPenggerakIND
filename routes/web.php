<?php

use App\Jobs\SendEmailJob;
use App\Mail\Notifikasi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::middleware(['auth','isAdmin'])->group(function () {
    Route::prefix('admin')->namespace('Admin')->name('admin.')->group(function () {
        Route::get('/','DashboardController')->name('dashboard');
        Route::get('/profile', 'ProfileController@show')->name('profile.show');
        Route::post('/profile', 'ProfileController@update')->name('profile.update');
        Route::resource('users', UserController::class);
        Route::resource('desa',DesaController::class);
        Route::get('/potensi/{id}/desa','PotensiController@getByDesa')->name('potensi.getByDesa');
        Route::resource('potensi',PotensiController::class);
        Route::resource('proyek',ProyekController::class);
        Route::resource('galeri',GaleriController::class);
        Route::resource('pesan-masuk',PesanMasukController::class)->except('create','store','update','edit');
        Route::get('pengaturan-web','PengaturanController@index')->name('pengaturan.index');
        Route::post('pengaturan-web','PengaturanController@update')->name('pengaturan.update');
    });
});

Route::get('/','HomeController@index')->name('home');
Route::get('/desa','DesaController@index')->name('desa.index');
Route::get('/desa/{id}','DesaController@show')->name('desa.show');
Route::get('/proyek','ProyekController@index')->name('proyek.index');
Route::get('/proyek/{id}','ProyekController@show')->name('proyek.show');
Route::get('/kontak','HalamanController@kontak')->name('kontak')->middleware('auth');
Route::get('/tentang','HalamanController@tentang')->name('tentang')->middleware('auth');
