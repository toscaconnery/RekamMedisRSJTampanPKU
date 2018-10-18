<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRjEdukasiDiperolehTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rj_edukasi_diperoleh', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_regis')->reference('id_pasien')->on('identifikasi');
            $table->date('tanggal');
            $table->string('poliklinik');
            $table->string('informasi');
            $table->string('nama_edukator');
            $table->boolean('ttd_edukator');
            $table->string('nama_sasaran');
            $table->boolean('ttd_sasaran');
            $table->integer('evaluasi');
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
        Schema::dropIfExists('rj_edukasi_diperoleh');
    }
}
