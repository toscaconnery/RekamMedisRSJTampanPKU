<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRjLaporRehabilitasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rj_lapor_rehabilitasi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_regis')->reference('id')->on('identifikasi');
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
        Schema::dropIfExists('rj_lapor_rehabilitasi');
    }
}
