<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiLaboratoriumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ri_laboratorium', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_regis')->reference('id_pasien')->on('identifikasi');
            $table->string('validasi_oleh')->nullable();
            $table->string('dr_pengirim')->nullable();
            $table->string('bahan_diterima')->nullable();
            $table->string('ruangan')->nullable();
            $table->string('tgl_hasil_cetak',10)->nullable();
            $table->string('tgl_permintaan',10)->nullable();
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
        Schema::dropIfExists('ri_laboratorium');
    }
}
