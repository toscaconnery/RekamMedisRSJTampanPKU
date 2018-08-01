<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsesmenTkPsikologTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asesmen_tk_psikolog', function (Blueprint $table) {
            $table->increments('id_asesmen_tk');
            $table->integer('id_regis')->reference('id_regis')->on('identifikasi');
            $table->string('keadaan_kandungan', 30);
            $table->string('penyakit_mengandung', 30);
            $table->string('perasaan', 31);
            $table->string('obat_obatan', 32);
            $table->boolean('anjuran');
            $table->string('kali_keguguran', 5);
            $table->integer('usia');
            $table->boolean('bekerja');
            $table->smallInteger('proses_kelahiran');
            $table->string('dibantu', 30);
            $table->string('keguguran', 50);
            $table->boolean('kecelakaan');
            $table->boolean('alkohol_dsb');
            $table->smallInteger('kelahiran');
            $table->string('ditolong', 20);
            $table->string('berat_bayi', 20);
            $table->string('panjang_bayi', 20);
            $table->string('asi', 10);
            $table->string('pola_makan', 30);
            $table->string('pola_tidur', 30);
            $table->string('toilt', 30);
            $table->string('motorik', 30);
            $table->integer('berjalan');
            $table->integer('berbicara');
            $table->string('hambatan_berbicara', 30);
            $table->string('pengasuhan', 20);
            $table->string('lama_asuh', 10);
            $table->string('masalah', 50);
            $table->string('sikap', 30);
            $table->string('motorik_awal', 31);
            $table->string('hasil', 32);
            $table->string('pelajaran', 33);
            $table->string('kesukaran', 34);
            $table->string('keluhan', 35);
            $table->boolean('tempat_belajar');
            $table->string('waktu_belajar', 30);
            $table->string('membantu', 30);
            $table->string('penolong', 30);
            $table->string('sikap_kegiatan', 30);
            $table->string('les', 40);
            $table->string('pelajaran_les', 41);
            $table->string('pemberi', 42);
            $table->string('sosialisasi_sekolah', 43);
            $table->string('sosialisasi_keluarga', 44);
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
        Schema::dropIfExists('asesmen_tk_psikolog');
    }
}
