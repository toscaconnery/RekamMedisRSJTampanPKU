<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRJPemeriksaanFisikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rj_pemeriksaan_fisik', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_regis')->reference('id')->on('identifikasi');
            $table->string('kepala');
            $table->string('leher');
            $table->string('dada');
            $table->string('jantung');
            $table->string('paru');
            $table->string('perut');
            $table->string('anggota_gerak');
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
        Schema::dropIfExists('rj_pemeriksaan_fisik');
    }
}
