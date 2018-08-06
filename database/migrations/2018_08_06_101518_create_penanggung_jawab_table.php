<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenanggungJawabTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penanggung_jawab', function (Blueprint $table) {
            $table->increments('id_pj');
            $table->integer('id_regis')->reference('id_regis')->on('identifikasi');
            $table->string('nama', 30);
            $table->string('alamat', 30);
            $table->string('hubungan', 20);
            $table->string('no_telp', 15);
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
        Schema::dropIfExists('penanggung_jawab');
    }
}
