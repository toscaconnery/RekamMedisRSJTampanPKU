<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRjTumbuhKembangRiwayatPsikiatrikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rj_tumbuh_kembang_riwayat_psikiatrik', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_regis')->reference('id_pasien')->on('identifikasi');
            $table->string('keluhan_utama');
            $table->string('riwayat_gangguan_sekarang');
            $table->string('riwayat_gangguan_sebelumnya');
            $table->string('riwayat_pribadi');
            $table->string('riwayat_pranatal_perinatal');
            $table->string('early_childhood');
            $table->string('middle_childhood');
            $table->string('late_childhood');
            $table->string('riwayat_keluarga');
            $table->string('riwayat_sosial_sekarang');
            $table->string('persepsi_sendiri');            
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
        Schema::dropIfExists('rj_tumbuh_kembang_riwayat_psikiatrik');
    }
}
