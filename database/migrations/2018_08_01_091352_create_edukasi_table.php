<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEdukasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('edukasi', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_regis')->reference('id')->on('identifikasi');
            $table->integer('id_user')->reference('id_user')->on('users');
            $table->boolean('penerjemah');
            $table->boolean('baca_tulis');
            $table->boolean('cara_belajar');
            $table->string('hambatan', 100);
            $table->string('kebutuhan', 100);
            $table->boolean('kededidaan');
            $table->string('nama_wali', 32);
            $table->string('hubungan', 30);
            $table->date('tanggal');
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
        Schema::dropIfExists('edukasi');
    }
}
