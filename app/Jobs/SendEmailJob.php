<?php

namespace App\Jobs;

use App\Mail\Notifikasi;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($email,$subjek,$judul,$deskripsi)
    {
        $this->email = $email;
        $this->subjek = $subjek;
        $this->judul = $judul;
        $this->deskripsi = $deskripsi;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // $users = User::where('role','user')->get();
        Mail::to('agung.kusaeri9@gmail.com')->send(new Notifikasi('asdfasdfgasdg','asdgasdgasd','asdgasdgs'));
        Mail::to('agunguf7@gmail.com')->send(new Notifikasi('asdfasdfgasdg','asdgasdgasd','asdgasdgs'));
    }
}
