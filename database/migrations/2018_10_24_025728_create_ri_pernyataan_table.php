<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiPernyataanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ri_pernyataan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_regis')->reference('id_pasien')->on('identifikasi');
            $table->string('nama')->nullable();
            $table->string('umur')->nullable();
            $table->string('alamat')->nullable();
            $table->string('tanggal')->nullable();
            $table->string('konselor')->nullable();
            $table->string('kepala_ruangan')->nullable();
            $table->string('residen')->nullable();
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
        Schema::dropIfExists('ri_pernyataan');
    }
}
