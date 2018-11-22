<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiTransferEksternalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ri_transfer_eksternal', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_regis')->reference('id_pasien')->on('identifikasi');
            $table->string('nomor')->nullable();
            $table->string('rs_tujuan')->nullable();
            $table->string('petugas_dihubungi')->nullable();
            $table->string('tanggal_dihubungi')->nullable();
            $table->string('jam_dihubungi')->nullable();
            $table->string('alasan_transfer',1)->nullable();
            $table->string('tanggal_transfer',10)->nullable();
            $table->string('jam_transfer',8)->nullable();
            $table->string('atas_permintaan',1)->nullable();
            $table->string('kategori_pasien',1)->nullable();
            $table->string('petugas_pendamping',30)->nullable();
            $table->string('tanggal_masuk_rs',10)->nullable();
            $table->string('anamnesa')->nullable();
            $table->string('diagnosa')->nullable();
            $table->string('indikasi_dirawat')->nullable();
            $table->string('tindakan_dilakukan')->nullable();
            $table->string('terapi_diberikan')->nullable();
            $table->string('resiko')->nullable();
            $table->string('transportasi')->nullable();
            $table->string('nama_dokter')->nullable();
            $table->string('jam_sebelum',8)->nullable();
            $table->string('keadaan_umum_sebelum')->nullable();
            $table->string('td_sebelum')->nullable();
            $table->string('hr_sebelum')->nullable();
            $table->string('rr_sebelum')->nullable();
            $table->string('suhu_sebelum')->nullable();
            $table->string('spo2_sebelum')->nullable();
            $table->string('lainnya_sebelum')->nullable();
            $table->string('keterangan_sebelum')->nullable();
            $table->string('jam_selama',8)->nullable();
            $table->string('keadaan_umum_selama')->nullable();
            $table->string('td_selama')->nullable();
            $table->string('hr_selama')->nullable();
            $table->string('rr_selama')->nullable();
            $table->string('suhu_selama')->nullable();
            $table->string('spo2_selama')->nullable();
            $table->string('lainnya_selama')->nullable();
            $table->string('keterangan_selama')->nullable();
            $table->string('jam_setelah',8)->nullable();
            $table->string('keadaan_umum_setelah')->nullable();
            $table->string('td_setelah')->nullable();
            $table->string('hr_setelah')->nullable();
            $table->string('rr_setelah')->nullable();
            $table->string('suhu_setelah')->nullable();
            $table->string('spo2_setelah')->nullable();
            $table->string('lainnya_setelah')->nullable();
            $table->string('keterangan_setelah')->nullable();
            $table->string('nama_petugas_menyerahkan')->nullable();
            $table->string('nama_petugas_penerima')->nullable();
            $table->string('tanggal',10)->nullable();
            $table->string('jam',8)->nullable();
            $table->string('rs')->nullable();
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
        Schema::dropIfExists('ri_transfer_eksternal');
    }
}
