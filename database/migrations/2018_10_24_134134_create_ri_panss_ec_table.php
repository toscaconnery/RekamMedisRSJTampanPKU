<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiPanssEcTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ri_panss_ec', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_regis')->reference('id_pasien')->on('identifikasi');
            $table->string('p4',1)->nullable();
            $table->string('g8',1)->nullable();
            $table->string('p7',1)->nullable();
            $table->string('g14',1)->nullable();
            $table->string('g4',1)->nullable();
            $table->string('bangsal')->nullable();
            $table->string('tanggal_pemeriksaan',10)->nullable();
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
        Schema::dropIfExists('ri_panss_ec');
    }
}
