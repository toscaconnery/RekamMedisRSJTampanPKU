<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiRencanaPemulanganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ri_rencana_pemulangan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_regis')->reference('id_pasien')->on('identifikasi');
            $table->string('diagnosis_medis')->nullable();
            $table->string('ruangan')->nullable();
            $table->string('a1')->nullable();
            $table->string('a2')->nullable();
            $table->string('a3')->nullable();
            $table->string('a4')->nullable();
            $table->string('a5')->nullable();
            $table->string('a6')->nullable();
            $table->string('a7')->nullable();
            $table->string('a8')->nullable();
            $table->string('a9')->nullable();
            $table->string('a10')->nullable();
            $table->string('a11')->nullable();
            $table->string('a12')->nullable();
            $table->string('a13')->nullable();
            $table->string('keterangan_a4')->nullable();
            $table->string('keterangan_a5')->nullabl();
            $table->string('keterangan_a6')->nullabl();
            $table->string('keterangan_a7')->nullabl();
            $table->string('keterangan_a8')->nullabl();
            $table->string('keterangan_a9')->nullabl();
            $table->string('keterangan_a10')->nullabl();
            $table->string('keterangan_a11')->nullabl();
            $table->string('keterangan_a12')->nullabl();
            $table->string('keterangan_a13')->nullabl();
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
        Schema::dropIfExists('ri_rencana_pemulangan');
    }
}
