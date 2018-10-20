<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEdmunsonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('edmunson', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_regis')->reference('id_pasien')->on('identifikasi');
            $table->string('jenis_form');
            $table->tinyInteger('status_mental');
            $table->tinyInteger('diagnosis');
            $table->tinyInteger('eliminasi');
            $table->tinyInteger('pengobatan');
            $table->tinyInteger('diagnosa');
            $table->tinyInteger('ambulasi');
            $table->tinyInteger('nutrisi');
            $table->tinyInteger('riwayat_jatuh');
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
        Schema::dropIfExists('edmunson');
    }
}
