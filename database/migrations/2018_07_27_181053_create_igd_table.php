<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIgdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('igd', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_regis')->reference('id')->on('identifikasi');
            $table->dateTime('waktu_masuk');
            $table->boolean('cara_datang');
            $table->smallInteger('transportasi');
            $table->string('rujukan', 20);
            $table->boolean('dikirim');
            $table->smallInteger('kasus');
            $table->string('tindakan_pra', 50);
            $table->smallInteger('triase');
            $table->string('alasan_kunjungan', 100);
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
        Schema::dropIfExists('igd');
    }
}
