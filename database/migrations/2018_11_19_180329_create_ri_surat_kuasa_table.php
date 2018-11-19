<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiSuratKuasaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ri_surat_kuasa', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_regis')->reference('id_pasien')->on('identifikasi');
            $table->string('nama');
            $table->string('umur');
            $table->string('alamat');
            $table->string('tanggal',10);
            $table->string('konselor');
            $table->string('kepala_ruangan');
            $table->string('residen');
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
        Schema::dropIfExists('ri_surat_kuasa');
    }
}
