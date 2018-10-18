<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIgdAsesmenAwalRawatDaruratDokterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('igd_asesmen_awal_rawat_darurat_dokter', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_regis')->reference('id_pasien')->on('identifikasi');
            $table->string('pewawancara',100)->nullable();
            $table->string('keluhan_utama')->nullable();
            $table->string('riwayat_penyakit_sekarang')->nullable();
            $table->string('riwayat_penyakit_dahulu')->nullable();
            $table->boolean('riwayat_napza')->default(False);
            $table->string('lama_pemakaian')->nullable();
            $table->string('jenis_zat')->nullable();
            $table->string('cara_pemakaian')->nullable();
            $table->string('latar_belakang_pemakaian')->nullable();
            $table->string('kepribadian_sebelum_sakit')->nullable();
            $table->string('riwayat_pendidikan')->nullable();
            $table->string('riwayat_pekerjaan')->nullable();
            $table->string('riwayat_perkawinan')->nullable();
            $table->string('riwayat_penyakit_lain',32)->nullable();
            $table->string('text_riwayat_penyakit_lain')->nullable();
            $table->boolean('riwayat_operasi')->default(False);
            $table->string('jenis_operasi')->nullable();
            $table->string('waktu_operasi')->nullable();
            $table->boolean('riwayat_tranfusi')->default(False);
            $table->boolean('reaksi_tranfusi')->default(False);
            $table->string('reaksi_tranfusi_timbul')->nullable();
            $table->string('riwayat_penyakit_keluarga')->nullable();
            $table->string('riwayat_pengobatan')->nullable();
            $table->string('riwayat_alergi')->nullable();
            $table->string('kepala')->nullable();
            $table->string('leher')->nullable();
            $table->string('dada')->nullable();
            $table->string('jantung')->nullable();
            $table->string('paru')->nullable();
            $table->string('perut')->nullable();
            $table->string('anggota_gerak')->nullable();
            $table->string('status_lokalis')->nullable();
            $table->string('penampilan')->nullable();
            $table->string('kesadaran')->nullable();
            $table->string('orientasi')->nullable();
            $table->string('sikap_tingkah_laku')->nullable();
            $table->string('proses_pikir')->nullable();
            $table->string('bentuk_pikir')->nullable();
            $table->string('isi_pikir')->nullable();
            $table->string('mood')->nullable();
            $table->string('afek')->nullable();
            $table->string('halusinasi')->nullable();
            $table->string('ilusi')->nullable();
            $table->string('daya_konsentrasi')->nullable();
            $table->string('daya_ingat')->nullable();
            $table->string('pikiran_abstrak')->nullable();
            $table->string('pengendalian_impuls')->nullable();
            $table->string('daya_nilai')->nullable();
            $table->string('tilikan')->nullable();
            $table->string('taraf_dipercaya')->nullable();
            $table->string('meningeal_sight')->nullable();
            $table->string('nervus_cranialis')->nullable();
            $table->string('sistem_motorik')->nullable();
            $table->string('cerebellum')->nullable();
            $table->string('vegetatif')->nullable();
            $table->string('pemeriksaan_laboratorium')->nullable();
            $table->string('hasil_laboratorium')->nullable();
            $table->string('keterangan_laboratorium')->nullable();
            $table->string('jam_pemeriksaan_laboratorium',5)->nullable();
            $table->string('jam_hasil_laboratorium',5)->nullable();
            $table->string('pemeriksaan_radiologi')->nullable();
            $table->string('hasil_radiologi')->nullable();
            $table->string('keterangan_radiologi')->nullable();
            $table->string('jam_pemeriksaan_radiologi',5)->nullable();
            $table->string('jam_hasil_radiologi',5)->nullable();
            $table->string('pemeriksaan_ekg')->nullable();
            $table->string('hasil_ekg')->nullable();
            $table->string('keterangan_ekg')->nullable();
            $table->string('jam_pemeriksaan_ekg',5)->nullable();
            $table->string('jam_hasil_ekg',5)->nullable();
            $table->string('pemeriksaan_lain')->nullable();
            $table->string('hasil_lain')->nullable();
            $table->string('keterangan_lain')->nullable();
            $table->string('jam_pemeriksaan_lain',5)->nullable();
            $table->string('jam_hasil_lain',5)->nullable();
            $table->string('panssec')->nullable();
            $table->string('gaff')->nullable();
            $table->tinyInteger('p4')->nullable();
            $table->tinyInteger('g8')->nullable();
            $table->tinyInteger('p7')->nullable();
            $table->tinyInteger('g14')->nullable();
            $table->tinyInteger('g4')->nullable();
            $table->string('bangsal')->nullable();
            $table->string('tanggal_pemeriksaan',11)->nullable();
            $table->string('axis_1')->nullable();
            $table->string('axis_2')->nullable();
            $table->string('axis_3')->nullable();
            $table->string('axis_4')->nullable();
            $table->string('axis_5')->nullable();
            $table->string('diagnosis_utama')->nullable();
            $table->string('diagnosis_sekunder')->nullable();
            $table->string('daftar_masalah')->nullable();
            $table->string('tindak_lanjut',15)->nullable();
            $table->boolean('kontrol')->default(False);
            $table->string('tanggal_kontrol',11)->nullable();
            $table->string('dirawat_di_ruang')->nullable();
            $table->string('indikasi_rawat_inap')->nullable();
            $table->string('alasan_menolak',20)->nullable();
            $table->string('alasan_menolak_lainnya')->nullable();
            $table->string('dirujuk_ke')->nullable();
            $table->string('alasan_rujuk',20)->nullable();
            $table->boolean('doa')->default(False);
            $table->string('jam_keluar',5)->nullable();
            $table->string('kesadaran_saat_keluar')->nullable();
            $table->string('gcs')->nullable();
            $table->string('kesadaran_lainnya')->nullable();
            $table->string('tensi',10)->nullable();
            $table->string('nadi',10)->nullable();
            $table->string('pernafasan',10)->nullable();
            $table->string('suhu',10)->nullable();
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
        Schema::dropIfExists('igd_asesmen_awal_rawat_darurat_dokter');
    }
}
