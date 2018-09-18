<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIgdTriaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('igd_triase', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_regis')->reference('id')->on('identifikasi');
            $table->string('jenis');
            $table->string('tanggal_masuk');
            $table->string('jam');
            $table->string('keluhan_utama');
            $table->string('jalan_nafas')->nullable();
            $table->boolean('henti_nafas')->default(False);
            $table->string('frek_nafas')->nullable();
            $table->boolean('sianosis')->default(False);
            $table->boolean('mengi')->default(False);
            $table->boolean('henti_jantung')->default(False);
            $table->string('kondisi_nadi')->nullable();
            $table->string('frek_nadi')->nullable();
            $table->boolean('pucat')->default(False);
            $table->boolean('akral_dingin')->default(False);
            $table->string('tekanan_darah')->nullable();
            $table->string('suhu')->nullable();
            $table->string('alergi_makanan')->nullable();
            $table->string('alergi_obat')->nullable();
            $table->string('alergi_lainnya')->nullable();
            $table->string('sistol')->nullable();
            $table->string('diastol')->nullable();
            $table->string('gcs')->nullable();
            $table->boolean('doa');
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
        Schema::dropIfExists('igd_triase');
    }
}
