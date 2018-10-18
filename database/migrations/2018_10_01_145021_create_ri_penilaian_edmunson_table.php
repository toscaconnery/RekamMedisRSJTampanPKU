<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiPenilaianEdmunsonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ri_penilaian_edmunson', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_regis')->reference('id_pasien')->on('identifikasi');
            $table->tinyInteger('usia');
            $table->tinyInteger('status_mental');
            $table->tinyInteger('eliminasi');
            $table->tinyInteger('pengobatan');
            $table->tinyInteger('diagnosa');
            $table->tinyInteger('ambulasi');
            $table->tinyInteger('nutrisi');
            $table->tinyInteger('gangguan_pola_tidur');
            $table->tinyInteger('riwayat_jatuh');
            $table->smallInteger('total');
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
        Schema::dropIfExists('ri_penilaian_edmunson');
    }
}
