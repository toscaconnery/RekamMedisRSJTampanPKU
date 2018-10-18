<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiDpjpCaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ri_dpjp_case', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_regis')->reference('id_pasien')->on('identifikasi');
            $table->string('diagnosa')->nullable();
            $table->string('ruang')->nullable();
            $table->string('nama_dpjp')->nullable();
            $table->string('tim_dpjp',1000)->nullable();
            $table->string('rawat_bersama',3000)->nullable();
            $table->string('pengalihan_dpjp_ke')->nullable();
            $table->string('tanggal_pengalihan',10)->nullable();
            $table->string('alasan_pengalihan')->nullable();
            $table->string('cm_1')->nullable();
            $table->string('cm_2')->nullable();
            $table->string('cm_3')->nullable();
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
        Schema::dropIfExists('ri_dpjp_case');
    }
}
