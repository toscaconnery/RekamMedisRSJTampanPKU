<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHakKewajibanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hak_kewajiban', function (Blueprint $table) {
            $table->increments('id_hak_kewajiban');
            $table->integer('id_regis')->reference('id')->on('identifikasi');
            $table->integer('id_user')->reference('id_user')->on('users');
            $table->boolean('signature');
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
        Schema::dropIfExists('hak_kewajiban');
    }
}
