<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResumeRiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resume_ri', function (Blueprint $table) {
            $table->increments('id_resume');
            $table->integer('id_regis')->reference('id_regis')->on('identifikasi');
            $table->integer('id_dokter')->reference('id_user')->on('users');
            $table->date('tanggal_masuk');
            $table->date('tanggal_keluar');
            $table->string('ruang_akhir', 10);
            $table->string('dpjp', 10);
            $table->string('alergi', 10);
            $table->string('diagnosa_masuk', 10);
            $table->string('indikasi', 10);
            $table->string('hasil_penunjang', 10);
            $table->string('keadaan_keluar', 10);
            $table->string('cara_pulang', 10);
            $table->string('kondisi', 10);
            $table->time('jam_keluar');
            $table->string('penyakit', 10);
            $table->string('diet', 10);
            $table->string('kontrol', 10);
            $table->date('tanggal_kontrol');
            $table->string('pengambilan_tertunda', 30);
            $table->date('tanggal_pengambilan');
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
        Schema::dropIfExists('resume_ri');
    }
}
