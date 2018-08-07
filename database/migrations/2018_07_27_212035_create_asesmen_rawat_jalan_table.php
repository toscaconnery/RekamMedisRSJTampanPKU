<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsesmenRawatJalanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asesmen_rawat_jalan', function (Blueprint $table) {
            $table->increments('id_rj');
            $table->integer('id_regis')->reference('id_regis')->on('identifikasi');
            $table->integer('id_user')->reference('id_user')->on('users');
            $table->date('tanggal');
            $table->string('alasan_kunjungan', 100);
            $table->boolean('hubungan_keluarga');
            $table->string('status_psikologis', 20);
            $table->string('dilaporkan_ke', 20)->nullable();
            $table->string('psikologis_lainnya', 40)->nullable();
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
        Schema::dropIfExists('asesmen_rawat_jalan');
    }
}
