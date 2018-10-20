<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRJNyeriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rj_nyeri', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_regis')->reference('id_pasien')->on('identifikasi');
            $table->string('jenis_form');
            $table->smallInteger('tingkat');
            $table->smallInteger('skala');
            $table->string('lokasi');
            $table->string('durasi');
            $table->string('frekuensi');
            $table->string('hilang');
            $table->boolean('pemberitahuan');
            $table->string('waktu_pemberitahuan')->nullable();
            $table->timestamps('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rj_nyeri');
    }
}
