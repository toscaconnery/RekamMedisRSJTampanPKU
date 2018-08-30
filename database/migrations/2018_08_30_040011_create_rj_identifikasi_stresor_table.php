<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRjIdentifikasiStresorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rj_identifikasi_stresor', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_regis')->reference('id')->on('identifikasi');
            $table->string('lingkungan_fisik')->nullable();
            $table->string('sosial_ekonomi_politik')->nullable();
            $table->string('keluarga')->nullable();
            $table->string('pekerjaan_karir')->nullable();
            $table->string('hubungan_pribadi_lingkungan')->nullable();
            $table->string('simptom')->nullable();
            $table->string('cara_mengatasi')->nullable();
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
        Schema::dropIfExists('rj_identifikasi_stresor');
    }
}
