<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRJDataMedikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rj_data_medik', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_regis')->reference('id_pasien')->on('identifikasi');
            $table->string('golongan_darah')->nullable();
            $table->string('tekanan_darah_top')->nullable();
            $table->string('tekanan_darah_bottom')->nullable();
            $table->string('ket_tekanan_jantung')->nullable();
            $table->string('ket_diabetes')->nullable();
            $table->string('ket_hepatitis')->nullable();
            $table->string('ket_penyakit_lainnya')->nullable();
            $table->string('ket_alergi_obat')->nullable();
            $table->string('ket_alergi_makanan')->nullable();
            $table->string('oklusi')->nullable();
            $table->string('torus_palatinus')->nullable();
            $table->string('torus_mandibularis')->nullable();
            $table->string('palatum')->nullable();
            $table->string('ket_supernumerary_teeth')->nullable();
            $table->string('ket_diastema')->nullable();
            $table->string('ket_anomali')->nullable();
            $table->string('lain')->nullable();
            $table->string('keterangan')->nullable();
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
        Schema::dropIfExists('rj_data_medik');
    }
}
