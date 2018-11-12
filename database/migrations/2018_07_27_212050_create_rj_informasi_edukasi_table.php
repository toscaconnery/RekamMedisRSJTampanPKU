<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRjInformasiEdukasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rj_informasi_edukasi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_regis')->reference('id_pasien')->on('identifikasi');
            $table->string('bahasa');
            $table->string('ket_bahasa')->nullable();
            $table->boolean('penerjemah');
            $table->string('pendidikan');
            $table->string('baca_tulis');
            $table->string('cara_belajar');
            $table->string('budaya');
            $table->string('hambatan')->nullable();
            $table->string('hambatan_lain')->nullable();
            $table->string('kebutuhan')->nullable();
            $table->string('kebutuhan_lain')->nullable();
            $table->boolean('kesediaan_menerima');
            $table->string('nama_keluarga');
            $table->string('hubungan');
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
        Schema::dropIfExists('rj_informasi_edukasi');
    }
}
