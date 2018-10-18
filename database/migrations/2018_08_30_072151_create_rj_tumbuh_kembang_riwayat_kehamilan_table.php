<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRjTumbuhKembangRiwayatKehamilanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rj_tumbuh_kembang_riwayat_kehamilan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_regis')->reference('id_pasien')->on('identifikasi');
            $table->string('keadaan_awal_kandungan');
            $table->string('penyakit_selama_mengandung');
            $table->string('perasaan_selama_mengandung');
            $table->string('suka_obat_obatan');
            $table->boolean('berdasarkan_anjuran');
            $table->boolean('pernah_jatuh_kecelakaan');
            $table->integer('usia_jatuh_kecelakaan')->nullable();
            $table->boolean('suka_merokok');
            $table->boolean('pernah_keguguran');
            $table->integer('jumlah_keguguran')->nullable();
            $table->integer('usia_ketika_kasus');
            $table->boolean('bekerja_ketika_kasus');
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
        Schema::dropIfExists('rj_tumbuh_kembang_riwayat_kehamilan');
    }
}
