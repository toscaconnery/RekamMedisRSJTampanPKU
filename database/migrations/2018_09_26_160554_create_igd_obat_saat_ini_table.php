<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIgdObatSaatIniTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('igd_obat_saat_ini', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_regis', 20)->reference('id')->on('identifikasi');
            $table->string('nama_obat');
            $table->string('dibawa')->nullable();
            $table->string('jumlah')->nullable();
            $table->string('tidak_dibawa')->nullable();
            $table->string('keterangan')->nullable();
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
        Schema::dropIfExists('igd_obat_saat_ini');
    }
}
