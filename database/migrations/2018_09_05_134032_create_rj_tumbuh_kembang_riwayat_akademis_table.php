<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRjTumbuhKembangRiwayatAkademisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rj_tumbuh_kembang_riwayat_akademis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_regis')->reference('id')->on('identifikasi');
            $table->string('sikap');
            $table->string('keterampilan_motorik_awal');
            $table->string('hasil_belajar_anak');
            $table->string('pelajaran_disenangi');
            $table->string('pelajaran_sulit');
            $table->string('keluhan_di_pelajaran_sulit');
            $table->boolean('tempat_belajar_sendiri');
            $table->string('waktu_biasa_belajar');
            $table->string('dibantu_belajar');
            $table->string('dibantu_belajar_oleh');
            $table->string('sikap_di_kegiatan');
            $table->boolean('les');
            $table->string('pelajaran_les')->nullable();
            $table->string('pengajar')->nullable();
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
        Schema::dropIfExists('rj_tumbuh_kembang_riwayat_akademis');
    }
}
