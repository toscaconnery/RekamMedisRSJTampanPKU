<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiPersetujuanUmumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ri_persetujuan_umum', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_regis')->reference('id_pasien')->on('identifikasi');
            $table->string('nama_petugas');
            $table->string('nama_pasien_keluarga');
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
        Schema::dropIfExists('ri_persetujuan_umum');
    }
}
