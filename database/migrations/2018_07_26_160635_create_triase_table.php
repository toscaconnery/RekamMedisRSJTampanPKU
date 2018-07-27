<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTriaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('triase', function (Blueprint $table) {
            $table->increments('id_triase');
            $table->integer('id_regis')->references('id_regis')->on('identifikasi');
            $table->dateTime('waktu_masuk');
            $table->string('keluhan_utama', 100);
            $table->string('jalan_nafas', 30);
            $table->string('frek_nafas', 10);
            $table->boolean('sianosis');
            $table->boolean('henti_nafas');
            $table->boolean('mengi');
            $table->boolean('henti_jantung');
            $table->string('frek_nadi', 10);
            $table->boolean('pucat');
            $table->boolean('akral_dingin');
            $table->smallInteger('gcs');
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
        Schema::dropIfExists('triase');
    }
}
