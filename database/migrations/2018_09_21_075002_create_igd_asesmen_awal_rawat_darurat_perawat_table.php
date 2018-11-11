<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIgdAsesmenAwalRawatDaruratPerawatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('igd_asesmen_awal_rawat_darurat_perawat', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_regis')->reference('id_pasien')->on('identifikasi');
            $table->string('tanggal_kedatangan')->nullable();
            $table->string('jam_kedatangan')->nullable();
            $table->string('cara_datang')->nullable();
            $table->string('transportasi_ke_igd')->nullable();
            $table->string('rujukan_dari')->nullable();
            $table->string('nama_rumah_sakit')->nullable();
            $table->boolean('visum')->nullable();
            $table->string('macam_kasus')->nullable();
            $table->string('tensi')->nullable();
            $table->string('nadi')->nullable();
            $table->string('pernafasan')->nullable();
            $table->string('suhu')->nullable();
            $table->string('tb')->nullable();
            $table->string('bb')->nullable();
            $table->string('e')->nullable();
            $table->string('v')->nullable();
            $table->string('m')->nullable();
            $table->string('tindakan_pra_hospital')->nullable();
            $table->string('tindakan_pra_hospital_lain')->nullable();
            $table->string('daftar_obat_obatan')->nullable();
            $table->string('alasan_kunjungan')->nullable();
            $table->string('must_bb')->nullable();
            $table->boolean('must_asupan')->default(False);
            $table->boolean('must_diagnosis')->default(False);
            $table->boolean('sk_1')->default(False);
            $table->boolean('sk_2')->default(False);
            $table->boolean('sk_3')->default(False);
            $table->boolean('sk_4')->default(False);
            $table->string('penyakit_malnutrisi')->nullable();
            $table->string('penyakit_malnutrisi_lain')->nullable();
            $table->boolean('pemberitahuan')->default(False);
            $table->string('waktu_pemberitahuan')->nullable();
            $table->boolean('keluhan_nyeri')->default(False);
            $table->tinyInteger('skala_nyeri')->nullable();
            $table->string('lokasi_nyeri')->nullable();
            $table->string('penyebab_nyeri')->nullable();
            $table->boolean('nyeri_berpindah')->default(False);
            $table->string('frekuensi_nyeri')->nullable();
            $table->string('lama_nyeri')->nullable();
            $table->string('jenis_risiko_jatuh')->nullable();
            $table->tinyInteger('humpty_1')->nullable();
            $table->tinyInteger('humpty_2')->nullable();
            $table->tinyInteger('humpty_3')->nullable();
            $table->tinyInteger('humpty_4')->nullable();
            $table->tinyInteger('humpty_5')->nullable();
            $table->tinyInteger('humpty_6')->nullable();
            $table->boolean('morse_1')->default(False);
            $table->boolean('morse_2')->default(False);
            $table->string('morse_3')->nullable();
            $table->boolean('morse_4')->default(False);
            $table->string('morse_5')->nullable();
            $table->string('morse_6')->nullable();
            $table->tinyInteger('edmunson_1')->nullable();
            $table->tinyInteger('edmunson_2')->nullable();
            $table->tinyInteger('edmunson_3')->nullable();
            $table->tinyInteger('edmunson_4')->nullable();
            $table->tinyInteger('edmunson_5')->nullable();
            $table->tinyInteger('edmunson_6')->nullable();
            $table->tinyInteger('edmunson_7')->nullable();
            $table->tinyInteger('edmunson_8')->nullable();
            $table->boolean('tekanan_intrakanal')->default(False);
            $table->string('list_tekanan_intrakanal')->nullable();
            $table->string('pupil')->nullable();
            $table->string('neurosensorik')->nullable();
            $table->string('muskuloskeletal')->nullable();
            $table->string('integumen')->nullable();
            $table->string('turgor')->nullable();
            $table->boolean('edema')->default(False);
            $table->string('list_edema')->nullable();
            $table->string('mukosa')->nullable();
            $table->boolean('pendarahan')->default(False);
            $table->string('jumlah_pendarahan')->nullable();
            $table->string('warna_pendarahan')->nullable();
            $table->string('intoksisasi')->nullable();
            $table->string('eliminasi')->nullable();
            $table->string('diagnosa_umum')->nullable();
            $table->string('diagnosa_umum_lainnya')->nullable();
            $table->string('diagnosa_jiwa')->nullable();
            $table->string('diagnosa_jiwa_lainnya')->nullable();
            $table->string('obat_parental')->nullable();
            $table->string('ekg')->nullable();
            $table->string('implementasi')->nullable();
            $table->string('evaluasi')->nullable();
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
        Schema::dropIfExists('igd_asesmen_awal_rawat_darurat_perawat');
    }
}
