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
            $table->increments('id')->nulable();
            //data medis
            $table->integer('id_regis')->reference('id_pasien')->on('identifikasi')->nulable();
            $table->string('pewawancara')->nulable();
            $table->string('keluhan_utama')->nulable();
            $table->string('riwayat_penyakit_sekarang')->nullable();
            $table->string('riwayat_penyakit_dahulu')->nullable();
            $table->string('riwayat_napza',1)->nulable();
            $table->string('lama_pemakaian')->nullable();
            $table->string('cara_pemakaian')->nullable();
            $table->string('latar_belakang_pemakaian')->nullable();
            $table->string('riwayat_pendidikan')->nulable();
            $table->string('riwayat_pekerjaan')->nulable();
            $table->string('riwayat_perkawinan')->nulable();
            $table->string('riwayat_penyakit_lainnya')->nullable();
            $table->string('riwayat_operasi',1)->nullable();
            $table->string('jenis_operasi')->nullable();
            $table->string('waktu_operasi')->nullable();
            $table->string('riwayat_tranfusi',1)->nulable();
            $table->string('reaksi_tranfusi',1)->nulable();
            $table->string('reaksi_timbul')->nullable();
            $table->string('riwayat_penyakit_dalam_keluarga')->nullable();
            $table->string('riwayat_pengobatan')->nullable();
            $table->string('riwayat_alergi')->nullable();

            //pemeriksaan fisik
            $table->string('kepala')->nulable();
            $table->string('leher')->nulable();
            $table->string('dada')->nulable();
            $table->string('jantung')->nulable();
            $table->string('paru')->nulable();
            $table->string('perut')->nulable();
            $table->string('anggota_gerak')->nulable();

            //status psikiatri
            $table->string('penampilan')->nulable();
            $table->string('kesadaran_psikiatri')->nulable();
            $table->string('orientasi')->nulable();
            $table->string('sikap')->nulable();
            $table->string('keterangan')->nulable();
            $table->string('proses_pikir')->nulable();
            $table->string('bentuk_pikir')->nulable();
            $table->string('isi_pikir')->nulable();
            $table->string('mood')->nulable();
            $table->string('afek')->nulable();
            $table->string('halusinasi')->nulable();
            $table->string('ilusi')->nulable();
            $table->string('konsentrasi')->nulable();
            $table->string('ingat')->nulable();
            $table->string('abstrak')->nulable();
            $table->string('impuls')->nulable();
            $table->string('nilai')->nulable();
            $table->string('tilikan')->nulable();
            $table->string('dipercaya')->nulable();

            //status neurologi
            $table->string('meningeal')->nulable();
            $table->string('nervus')->nulable();
            $table->string('motorik')->nulable();
            $table->string('cerebellum')->nulable();
            $table->string('vegetatif')->nulable();

            //instrumen penilaian
            $table->string('gaduh_gelisah',1)->nulable();
            $table->string('ketidakoperatifan',1)->nulable();
            $table->string('permusuhan',1)->nulable();
            $table->string('pengendalian_impuls',1)->nulable();
            $table->string('ketegangan',1)->nulable();
            $table->string('bangsal')->nulable();
            $table->string('tanggal_pemeriksaan')->nulable();
            $table->string('panss_ec')->nulable();
            $table->string('gaff')->nulable();

            //diagnosis tindakan terapi
            $table->string('axis1')->nulable();
            $table->string('axis2')->nulable();
            $table->string('axis3')->nulable();
            $table->string('axis4')->nulable();
            $table->string('axis5')->nulable();
            $table->string('utama')->nulable();
            $table->string('sekunder')->nulable();
            $table->string('jam',8)->nulable();
            $table->string('tindakan_terapi')->nulable();
            $table->string('daftar_masalah')->nulable();

            //tindak lanjut
            $table->string('tindak_lanjut',1)->nulable();
            $table->string('perlu_dikontrol',1)->nulable();
            $table->string('tanggal_kontrol',10)->nullable();
            $table->string('ruangan')->nulable();
            $table->string('indikasi_rawat_inap')->nullable();
            $table->string('alasan_menolak',1)->nullable();
            $table->string('alasan_lainnya')->nullable();
            $table->string('dirujuk_ke')->nulable();
            $table->string('alasan_dirujuk',1)->nulable();
            $table->string('kesadaran')->nulable();
            $table->string('kesadaran_lainnya')->nullable();
            $table->string('tensi')->nulable();
            $table->string('nadi')->nulable();
            $table->string('pernafasan')->nulable();
            $table->string('suhu')->nulable();

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
        Schema::dropIfExists('rj_asesmen_dokter')->nulable();
    }
}
