<?php

namespace App\Mail;

use App\Models\Pengaturan;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Notifikasi extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($subjek,$judul,$deskripsi)
    {
        $this->subjek = $subjek;
        $this->judul = $judul;
        $this->deskripsi = $deskripsi;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(env('MAIL_FROM_ADDRESS'),Pengaturan::first()->nama)
        ->view('admin.pages.email.notifikasi')
        ->subject($this->subjek)
        ->with(
         [
             'judul' => $this->judul,
             'deskripsi' => $this->deskripsi,
             'subjek' => $this->subjek
         ]);
    }
}
