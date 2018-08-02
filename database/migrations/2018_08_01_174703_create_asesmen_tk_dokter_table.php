<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsesmenTkDokterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asesmen_tk_dokter', function (Blueprint $table) {
            $table->integer('id_regis')->reference('id_regis')->on('identifikasi');
            $table->integer('id_asesmen_tk')->reference('id_asesmen_tk')->on('asesmen_tk_psikolog');
            $table->string('pengirim', 30);
            $table->string('keterangan', 30);
            $table->string('problem_perilaku', 50);
            $table->string('institusi_lain', 30);
            $table->date('fisik_akhir');
            $table->string('nama_dokter', 32);
            $table->string('sekretari_klinik', 32);
            $table->string('riwayat_psikiatrik', 50);
            $table->string('keluhan_utama', 50);
            $table->string('gangguan_sekarang', 50);
            $table->string('gangguan_sebelumnya', 50);
            $table->string('riwayat_pribadi', 50);
            $table->string('riwayat_natal', 50);
            $table->string('riwayat_bayi', 50);
            $table->string('riwayat_pertengahan', 50);
            $table->string('riwayat_keluarga', 50);
            $table->string('riwayat_sosial', 50);
            $table->string('persepsi_pasien', 50);
            $table->string('mental_umum', 50);
            $table->string('interaksi_orangtua', 50);
            $table->string('orientasi_persepsi', 50);
            $table->string('mood_dll', 50);
            $table->string('fantasi', 50);
            $table->string('diagnostik_lanjutan', 50);
            $table->string('ringkasan_pemeriksaan', 50);
            $table->string('formulasi_diagnostik', 50);
            $table->string('evaluasi_multiaksial', 50);
            $table->string('organobiologik', 50);
            $table->string('psikologik', 50);
            $table->string('sosial', 50);
            $table->string('prgnosis', 50);
            $table->string('tp_pasien', 50);
            $table->string('tp_keluarga', 50);
            $table->date('tanggal');
            $table->boolean('signature');
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
        Schema::dropIfExists('asesmen_tk_dokter');
    }
}
