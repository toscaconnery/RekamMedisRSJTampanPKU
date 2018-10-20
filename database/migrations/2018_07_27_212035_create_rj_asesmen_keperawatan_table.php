<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRJAsesmenKeperawatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rj_asesmen_keperawatan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_regis')->reference('id_pasien')->on('identifikasi');
            $table->integer('id_user')->reference('id_user')->on('users');
            $table->string('alasan_kunjungan')->nullable();
            $table->boolean('hubungan_keluarga')->nullable();
            $table->string('status_psikososial')->nullable();
            $table->string('konsep_diri')->nullable();
            $table->string('persepsi')->nullable();
            $table->string('motorik')->nullable();
            $table->string('penampilan')->nullable();
            $table->string('pikir')->nullable();
            $table->string('perasaan')->nullable();
            $table->string('status_fungsional')->nullable();
            $table->string('perlu_bantuan')->nullable();
            $table->dateTime('waktu_laporan')->nullable();
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
        Schema::dropIfExists('rj_asesmen_keperawatan');
    }
}