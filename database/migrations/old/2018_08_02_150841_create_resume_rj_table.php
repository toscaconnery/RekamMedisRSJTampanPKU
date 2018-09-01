<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResumeRjTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resume_rj', function (Blueprint $table) {
            $table->increments('id_resume');
            $table->integer('id_regis')->reference('id')->on('identifikasi');
            $table->integer('id_petugas')->reference('id_user')->on('users');
            $table->date('tanggal_kunjungan');
            $table->string('diagnosis_prosedur', 50);
            $table->string('kode_icd', 20);
            $table->string('riwayat_rawat', 50);
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
        Schema::dropIfExists('resume_rj');
    }
}
