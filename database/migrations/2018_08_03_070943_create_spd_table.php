<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spd', function (Blueprint $table) {
            $table->increments('id_spd');
            $table->integer('id_regis')->reference('id')->on('identifikasi');
            $table->integer('id_user')->reference('id_user')->on('users');
            $table->string('ruang_kelas', 30);
            $table->string('sebab_rawat', 200);
            $table->string('diagnosa', 200);
            $table->string('gaf', 200);
            $table->string('panss_ec', 100);
            $table->string('terapi', 100);
            $table->date('tanggal_masuk');
            $table->string('ruang_masuk', 20);
            $table->string('kelas_masuk', 20);
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
        Schema::dropIfExists('spd');
    }
}
