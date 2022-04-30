<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDesaPotensiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desa_potensi', function (Blueprint $table) {
            $table->foreignId('desa_id')->constrained('desa')->cascadeOnDelete();
            $table->foreignId('potensi_id')->constrained('potensi')->cascadeOnDelete();
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
        Schema::dropIfExists('desa_potensi');
    }
}
