<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiEdukasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ri_edukasi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_regis')->reference('id')->on('identifikasi');
            $table->string('materi_medis')->nullable();
            $table->string('metode_medis')->nullable();
            $table->string('nama_pasien')->nullable();
            $table->string('nama_edukator')->nullable();
            $table->boolean('ttd_pasien')->default(False);
            $table->boolean('ttd_edukator')->default(False);
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
        Schema::dropIfExists('ri_edukasi');
    }
}
