<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiLembarKonsultasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ri_lembar_konsultasi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_regis')->reference('id_pasien')->on('identifikasi');
            $table->string('konsultasi1')->nullable();
            $table->string('konsultasi2')->nullable();
            $table->string('konsultasi3')->nullable();
            $table->string('konsultasi4')->nullable();
            $table->string('konsultasi5')->nullable();
            $table->string('jkonsultasi1')->nullable();
            $table->string('jkonsultasi2')->nullable();
            $table->string('jkonsultasi3')->nullable();
            $table->string('jkonsultasi4')->nullable();
            $table->string('jkonsultasi5')->nullable();
            $table->string('jkonsultasi6')->nullable();
            $table->string('jkonsultasi7')->nullable();
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
        Schema::dropIfExists('ri_lembar_konsultasi');
    }
}
