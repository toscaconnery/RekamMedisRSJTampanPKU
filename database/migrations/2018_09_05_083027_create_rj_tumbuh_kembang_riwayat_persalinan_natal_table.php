<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRjTumbuhKembangRiwayatPersalinanNatalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rj_tumbuh_kembang_riwayat_persalinan_natal', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_regis')->reference('id_pasien')->on('identifikasi');
            $table->string('proses_kelahiran');
            $table->string('dibantu_alat');
            $table->string('alat_bantu')->nullable();
            $table->boolean('mengalami_keguguran');
            $table->string('keterangan_keguguran')->nullable();
            $table->string('kondisi_lahir');
            $table->string('dibantu_oleh');
            $table->string('dibantu_oleh_lainnya');
            $table->string('berat_bayi');
            $table->string('panjang_bayi');
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
        Schema::dropIfExists('rj_tumbuh_kembang_riwayat_persalinan_natal');
    }
}
