<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMorseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('morse', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_regis')->reference('id_pasien')->on('identifikasi');
            $table->string('jenis_form');
            $table->boolean('riwayat_jatuh');
            $table->boolean('diagnosis_sekunder');
            $table->string('alat_bantu');
            $table->boolean('terpasang_infus');
            $table->tinyInteger('gaya_berjalan');
            $table->tinyInteger('status_mental');
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
        Schema::dropIfExists('morse');
    }
}
