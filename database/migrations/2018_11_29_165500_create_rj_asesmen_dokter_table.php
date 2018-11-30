<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRjAsesmenDokterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rj_asesmen_dokter', function (Blueprint $table) {
            $table->increments('id')->nullable();
            //data medis
            $table->integer('id_regis')->reference('id_pasien')->on('identifikasi')->nullable();
            $table->string('pewawancara')->nullable();
            $table->string('keluhan_utama')->nullable();
            $table->string('riwayat_penyakit_sekarang')->nullable();
            $table->string('riwayat_penyakit_dahulu')->nullable();
            $table->string('riwayat_napza',1)->nullable();
            $table->string('lama_pemakaian')->nullable();
            $table->string('cara_pemakaian')->nullable();
            $table->string('latar_belakang_pemakaian')->nullable();
            $table->string('riwayat_pendidikan')->nullable();
            $table->string('riwayat_pekerjaan')->nullable();
            $table->string('riwayat_perkawinan')->nullable();
            $table->string('riwayat_penyakit_lainnya')->nullable();
            $table->string('riwayat_operasi',1)->nullable();
            $table->string('jenis_operasi')->nullable();
            $table->string('waktu_operasi')->nullable();
            $table->string('riwayat_tranfusi',1)->nullable();
            $table->string('reaksi_tranfusi',1)->nullable();
            $table->string('reaksi_timbul')->nullable();
            $table->string('riwayat_penyakit_dalam_keluarga')->nullable();
            $table->string('riwayat_pengobatan')->nullable();
            $table->string('riwayat_alergi')->nullable();

            //pemeriksaan fisik
            $table->string('kepala')->nullable();
            $table->string('leher')->nullable();
            $table->string('dada')->nullable();
            $table->string('jantung')->nullable();
            $table->string('paru')->nullable();
            $table->string('perut')->nullable();
            $table->string('anggota_gerak')->nullable();

            //status psikiatri
            $table->string('penampilan')->nullable();
            $table->string('kesadaran_psikiatri')->nullable();
            $table->string('orientasi')->nullable();
            $table->string('sikap')->nullable();
            $table->string('keterangan')->nullable();
            $table->string('proses_pikir')->nullable();
            $table->string('bentuk_pikir')->nullable();
            $table->string('isi_pikir')->nullable();
            $table->string('mood')->nullable();
            $table->string('afek')->nullable();
            $table->string('halusinasi')->nullable();
            $table->string('ilusi')->nullable();
            $table->string('konsentrasi')->nullable();
            $table->string('ingat')->nullable();
            $table->string('abstrak')->nullable();
            $table->string('impuls')->nullable();
            $table->string('nilai')->nullable();
            $table->string('tilikan')->nullable();
            $table->string('dipercaya')->nullable();

            //status neurologi
            $table->string('meningeal')->nullable();
            $table->string('nervus')->nullable();
            $table->string('motorik')->nullable();
            $table->string('cerebellum')->nullable();
            $table->string('vegetatif')->nullable();

            //instrumen penilaian
            $table->string('gaduh_gelisah',1)->nullable();
            $table->string('ketidakoperatifan',1)->nullable();
            $table->string('permusuhan',1)->nullable();
            $table->string('pengendalian_impuls',1)->nullable();
            $table->string('ketegangan',1)->nullable();
            $table->string('bangsal')->nullable();
            $table->string('tanggal_pemeriksaan')->nullable();
            $table->string('panss_ec')->nullable();
            $table->string('gaff')->nullable();

            //diagnosis tindakan terapi
            $table->string('axis1')->nullable();
            $table->string('axis2')->nullable();
            $table->string('axis3')->nullable();
            $table->string('axis4')->nullable();
            $table->string('axis5')->nullable();
            $table->string('utama')->nullable();
            $table->string('sekunder')->nullable();
            $table->string('jam',8)->nullable();
            $table->string('tindakan_terapi')->nullable();
            $table->string('daftar_masalah')->nullable();

            //tindak lanjut
            $table->string('tindak_lanjut',1)->nullable();
            $table->string('perlu_dikontrol',1)->nullable();
            $table->string('tanggal_kontrol',10)->nullable();
            $table->string('ruangan')->nullable();
            $table->string('indikasi_rawat_inap')->nullable();
            $table->string('alasan_menolak',1)->nullable();
            $table->string('alasan_lainnya')->nullable();
            $table->string('dirujuk_ke')->nullable();
            $table->string('alasan_dirujuk',1)->nullable();
            $table->string('kesadaran')->nullable();
            $table->string('kesadaran_lainnya')->nullable();
            $table->string('tensi')->nullable();
            $table->string('nadi')->nullable();
            $table->string('pernafasan')->nullable();
            $table->string('suhu')->nullable();

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
        Schema::dropIfExists('rj_asesmen_dokter');
    }
}
