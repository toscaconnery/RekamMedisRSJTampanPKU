<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIgdSuicideFisikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('igd_suicide_fisik', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_regis')->reference('id_pasien')->on('identifikasi');
            $table->tinyInteger('a1');
            $table->tinyInteger('a2');
            $table->tinyInteger('a3');
            $table->tinyInteger('a4');
            $table->tinyInteger('a5');
            $table->tinyInteger('a6');
            $table->tinyInteger('a7');
            $table->tinyInteger('b1');
            $table->tinyInteger('b2');
            $table->tinyInteger('b3');
            $table->tinyInteger('b4');
            $table->tinyInteger('b5');
            $table->tinyInteger('b6');
            $table->tinyInteger('b7');
            $table->tinyInteger('c1');
            $table->tinyInteger('c2');
            $table->tinyInteger('c3');
            $table->tinyInteger('c4');
            $table->tinyInteger('c5');
            $table->tinyInteger('c6');
            $table->tinyInteger('c7');
            $table->tinyInteger('c8');
            $table->tinyInteger('c9');
            $table->tinyInteger('d1');
            $table->tinyInteger('d2');
            $table->tinyInteger('d3');
            $table->tinyInteger('d4');
            $table->tinyInteger('d5');
            $table->tinyInteger('d6');
            $table->tinyInteger('d7');
            $table->tinyInteger('d8');
            $table->tinyInteger('d9');
            $table->string('suicide_protective_factor')->nullable();
            $table->string('violence_protective_factor')->nullable();
            $table->string('other_risk')->nullable();
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
        Schema::dropIfExists('igd_suicide_fisik');
    }
}
