<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGaleriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galeri', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->foreignId('desa_id')->nullable()->constrained('desa')->cascadeOnDelete();
            $table->foreignId('potensi_id')->nullable()->constrained('potensi')->cascadeOnDelete();
            $table->foreignId('proyek_id')->nullable()->constrained('proyek')->cascadeOnDelete();
            $table->string('gambar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('galeri');
    }
}
