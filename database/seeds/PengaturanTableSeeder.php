<?php

use App\Models\Pengaturan;
use Illuminate\Database\Seeder;

class PengaturanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pengaturan::create([
            'nama' => 'Company Profile',
            'alamat' => 'Jakarta',
            'deskripsi' => 'Company profile merupakan web perusahaan untuk memasarkan produk-produk perusahaan tersebut.',
            'map' => 'map google',
            'link_facebook' => 'https://facebook.com',
            'link_path' => 'https://path.com',
            'link_linkedin' => 'https://linkedin.com',
            'link_twitter' => 'https://twitter.com',
            'email' => 'example@gmail.com',
            'no_telepon' => '02123124124',
            'gambar' => NULL
        ]);
    }
}
