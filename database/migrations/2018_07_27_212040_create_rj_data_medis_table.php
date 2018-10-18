<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRJDataMedisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rj_data_medis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_regis')->reference('id_pasien')->on('identifikasi');
            $table->string('pewawancara');
            $table->string('keluhan_utama');
            $table->string('riwayat_penyakit_sekarang')->nullable();
            $table->string('riwayat_penyakit_dahulu')->nullable();
            $table->boolean('riwayat_napza');
            $table->string('lama_pemakaian')->nullable();
            $table->string('cara_pemakaian')->nullable();
            $table->string('latar_belakang_pemakaian')->nullable();
            $table->string('riwayat_pendidikan');
            $table->string('riwayat_pekerjaan');
            $table->string('riwayat_perkawinan');
            $table->string('riwayat_penyakit_lainnya')->nullable();
            $table->boolean('riwayat_operasi')->nullable();
            $table->string('jenis_operasi')->nullable();
            $table->string('waktu_operasi')->nullable();
            $table->boolean('riwayat_tranfusi');
            $table->boolean('reaksi_tranfusi');
            $table->string('reaksi_timbul')->nullable();
            $table->string('riwayat_penyakit_dalam_keluarga')->nullable();
            $table->string('riwayat_pengobatan')->nullable();
            $table->string('riwayat_alergi')->nullable();
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
        Schema::dropIfExists('rj_data_medis');
    }
}
