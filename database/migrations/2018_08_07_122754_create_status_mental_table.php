<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatusMentalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('status_mental', function (Blueprint $table) {
            $table->increments('id_status');
            $table->integer('id_regis')->reference('id_regis')->on('identifikasi');
            $table->string('konsep_diri', 20);
            $table->string('persepsi', 20);
            $table->string('motorik', 20);
            $table->string('penampilan', 20);
            $table->string('pikir', 20);
            $table->string('perasaan', 20);
            $table->string('status_fungsional', 20);
            $table->dateTime('laporan');
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
        Schema::dropIfExists('status_mental');
    }
}
