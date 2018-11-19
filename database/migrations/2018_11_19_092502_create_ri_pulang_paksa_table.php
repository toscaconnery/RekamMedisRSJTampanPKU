<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiPulangPaksaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ri_pulang_paksa', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_regis')->reference('id')->on('identifikasi');
            $table->string('nama');
            $table->string('umur')->nullable();
            $table->string('pekerjaan')->nullable();
            $table->string('hubungan_keluarga')->nullable();
            $table->string('alamat')->nullable();
            $table->string('nama_pasien');
            $table->string('umur_pasien')->nullable();
            $table->string('alamat_pasien')->nullable();
            $table->string('tanggal_pengambilan');
            $table->string('tanggal');
            $table->string('yang_menyatakan')->nullable();
            $table->string('saksi_keluarga')->nullable();
            $table->string('saksi_pemberi_asuhan')->nullable();
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
        Schema::dropIfExists('ri_pulang_paksa');
    }
}
