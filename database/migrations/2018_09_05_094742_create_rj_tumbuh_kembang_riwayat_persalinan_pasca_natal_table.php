<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRjTumbuhKembangRiwayatPersalinanPascaNatalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rj_tumbuh_kembang_riwayat_persalinan_pasca_natal', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_regis')->reference('id')->on('identifikasi');
            $table->string('lama_asi');
            $table->string('pola_makan');
            $table->string('pola_tidur');
            $table->string('training');
            $table->string('motorik');
            $table->integer('usia_berjalan');
            $table->integer('usia_berbicara');
            $table->string('hambatan_berbicara')->nullable();
            $table->string('obat_masih_diminum')->nullable();
            $table->string('diasuh');
            $table->string('lama_pengasuhan');
            $table->string('masalah_khusus')->nullable();
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
        Schema::dropIfExists('rj_tumbuh_kembang_riwayat_persalinan_pasca_natal');
    }
}
