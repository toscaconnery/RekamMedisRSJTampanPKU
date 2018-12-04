<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiPenggunaanObatKeteranganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ri_penggunaan_obat_keterangan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_regis')->reference('id_pasien')->on('identifikasi');
            $table->string('ruang_bangsal')->nullable();
            $table->string('no_reg')->nullable();
            $table->string('tanggal_masuk',10)->nullable();
            $table->string('tanggal_keluar',10)->nullable();
            $table->string('diagnosis')->nullable();
            $table->string('dokter')->nullable();
            $table->string('riwayat_alergi')->nullable();
            $table->string('konsumen')->nullable();
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
        Schema::dropIfExists('ri_penggunaan_obat_keterangan');
    }
}
