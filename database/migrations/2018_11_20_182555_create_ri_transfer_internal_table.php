<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiTransferInternalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ri_transfer_internal', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_regis')->reference('id_pasien')->on('identifikasi');
            $table->string('tanggal_masuk',10)->nullable();
            $table->string('dpjp')->nullable();
            $table->string('dokter_konsulen_1')->nullable();
            $table->string('dokter_konsulen_2')->nullable();
            $table->string('dokter_konsulen_3')->nullable();
            $table->string('ruang_kamar')->nullable();
            $table->string('tanggal_pindah',10)->nullable();
            $table->string('jam_pindah',8)->nullable();
            $table->string('pindah_ke')->nullable();
            $table->string('diagnosis_sekarang')->nullable();
            $table->string('keadaan_umum')->nullable();
            $table->string('kesadaran')->nullable();
            $table->string('tensi')->nullable();
            $table->string('suhu')->nullable();
            $table->string('nadi')->nullable();
            $table->string('keluhan')->nullable();
            $table->string('riwayat_penyakit')->nullable();
            $table->string('riwayat_alergi')->nullable();
            $table->string('alasan_pindah')->nullable();
            $table->string('laboratorium')->nullable();
            $table->string('ekg')->nullable();
            $table->string('radiologi')->nullable();
            $table->string('ct_scan')->nullable();
            $table->string('usg')->nullable();
            $table->string('tindakan_medis')->nullable();
            $table->string('infus')->nullable();
            $table->string('obat_injeksi')->nullable();
            $table->string('obat_oral')->nullable();
            $table->string('lain_lain')->nullable();
            $table->string('panss_ec')->nullable();
            $table->string('kategori')->nullable();
            $table->string('tanggal')->nullable();
            $table->string('jam')->nullable();
            $table->string('yang_menyerahkan')->nullable();
            $table->string('yang_menerima')->nullable();
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
        Schema::dropIfExists('ri_transfer_internal');
    }
}
