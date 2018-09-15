<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRjTumbuhKembangPemeriksaanStatusMentalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rj_tumbuh_kembang_pemeriksaan_status_mental', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_regis')->reference('id_regis')->on('identifikasi');
            $table->string('deskripsi_umum');
            $table->string('interaksi_ortu_anak');
            $table->string('orientasi_persepsi');
            $table->string('mood');
            $table->string('bentuk_arus_pikir');
            $table->string('isi_pikir');
            $table->string('fantasi');
            $table->string('kemampuan');
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
        Schema::dropIfExists('rj_tumbuh_kembang_pemeriksaan_status_mental');
    }
}
