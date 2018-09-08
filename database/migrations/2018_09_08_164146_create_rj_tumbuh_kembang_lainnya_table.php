<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRjTumbuhKembangLainnyaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rj_tumbuh_kembang_lainnya', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_regis')->reference('id')->on('identifikasi');
            $table->string('diagnostik_lanjutan');
            $table->string('hasil_pemeriksaan');
            $table->string('formulasi_diagnostik');
            $table->string('aksis1');
            $table->string('aksis2');
            $table->string('aksis3');
            $table->string('aksis4');
            $table->string('aksis5');
            $table->string('masalah_organobiologik');
            $table->string('masalah_psikologik');
            $table->string('masalah_sosial');
            $table->string('prognosis');
            $table->string('treatment_pasien');
            $table->string('treatment_keluarga');
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
        Schema::dropIfExists('rj_tumbuh_kembang_lainnya');
    }
}
