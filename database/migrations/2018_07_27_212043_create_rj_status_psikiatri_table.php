<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRJStatusPsikiatriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rj_status_psikiatri', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_regis')->reference('id_pasien')->on('identifikasi');
            $table->string('penampilan');
            $table->string('kesadaran');
            $table->string('orientasi');
            $table->string('sikap');
            $table->string('keterangan');
            $table->string('proses_pikir');
            $table->string('bentuk_pikir');
            $table->string('isi_pikir');
            $table->string('mood');
            $table->string('afek');
            $table->string('halusinasi');
            $table->string('ilusi');
            $table->string('konsentrasi');
            $table->string('ingat');
            $table->string('abstrak');
            $table->string('impuls');
            $table->string('nilai');
            $table->string('tilikan');
            $table->string('dipercaya');
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
        Schema::dropIfExists('rj_status_psikiatri');
    }
}
