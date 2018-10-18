<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenundaanPelayananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penundaan_pelayanan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_regis')->reference('id_pasien')->on('identifikasi');
            $table->string('nama');
            $table->tinyInteger('umur');
            $table->string('hubungan');
            $table->string('poli_ruangan');
            $table->string('dokter_pengirim');
            $table->string('pelayanan_akan_dilakukan');
            $table->boolean('dokter_berhalangan')->default(False);
            $table->boolean('kerusakan_alat')->default(False);
            $table->boolean('pemberian_obat_farmasi')->default(False);
            $table->boolean('hasil_pemeriksaan_radiologi')->default(False);
            $table->boolean('hasil_pemeriksaan_laboratorium')->default(False);
            $table->string('sebab_lainnya')->nullable();
            $table->string('alternatif');
            $table->string('jadwal_penundaan')->nullable();
            $table->string('rs_tujuan')->nullable();
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
        Schema::dropIfExists('penundaan_pelayanan');
    }
}
