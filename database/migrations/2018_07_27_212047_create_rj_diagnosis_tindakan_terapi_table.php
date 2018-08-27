<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRJDiagnosisTindakanTerapiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rj_diagnosis_tindakan_terapi', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_regis')->reference('id')->on('identifikasi');
            $table->string('axis1');
            $table->string('axis2');
            $table->string('axis3');
            $table->string('axis4');
            $table->string('axis5');
            $table->string('utama');
            $table->string('sekunder');
            $table->string('jam');
            $table->string('tindakan_terapi');
            $table->string('daftar_masalah');
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
        Schema::dropIfExists('rj_diagnosis_tindakan_terapi');
    }
}
