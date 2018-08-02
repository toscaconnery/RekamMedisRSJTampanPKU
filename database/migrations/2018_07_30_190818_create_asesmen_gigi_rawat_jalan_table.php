<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsesmenGigiRawatJalanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asesmen_gigi_rawat_jalan', function (Blueprint $table) {
            $table->increments('id_asesmen');
            $table->integer('id_regis')->reference('id_regis')->on('identifikasi');
            $table->integer('id_user')->refernce('id_user')->on('users');
            $talbe->boolean('signature');
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
        Schema::dropIfExists('asesmen_gigi_rawat_jalan');
    }
}
