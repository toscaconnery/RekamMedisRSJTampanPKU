<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiResumeMedisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ri_resume_medis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_regis')->reference('id_pasien')->on('identifikasi');
            $table->string('tanggal_masuk',10)->nullable();
            $table->string('tanggal_keluar',10)->nullable();
            $table->string('ruang_rawat_terakhir')->nullable();
            $table->string('dpjp')->nullable();
            $table->string('alergi')->nullable();
            $table->string('diagnosa_masuk')->nullable();
            $table->string('alasan_dirawat')->nullable();
            $table->string('hasil_pemeriksaan_penunjang')->nullable();
            $table->string('terapi')->nullable();
            $table->string('diagnosa_psikiatri_1')->nullable();
            $table->string('kode_psikiatri_1')->nullable();
            $table->string('diagnosa_non_psikiatri_1')->nullable();
            $table->string('kode_non_psikiatri_1')->nullable();
            $table->string('diagnosa_psikiatri_2')->nullable();
            $table->string('kode_psikiatri_2')->nullable();
            $table->string('diagnosa_non_psikiatri_2')->nullable();
            $table->string('kode_non_psikiatri_2')->nullable();
            $table->string('diagnosa_psikiatri_3')->nullable();
            $table->string('kode_psikiatri_3')->nullable();
            $table->string('diagnosa_non_psikiatri_3')->nullable();
            $table->string('kode_non_psikiatri_3')->nullable();
            $table->string('diagnosa_psikiatri_4')->nullable();
            $table->string('kode_psikiatri_4')->nullable();
            $table->string('diagnosa_non_psikiatri_4')->nullable();
            $table->string('kode_non_psikiatri_4')->nullable();
            $table->string('diagnosa_psikiatri_5')->nullable();
            $table->string('kode_psikiatri_5')->nullable();
            $table->string('diagnosa_non_psikiatri_5')->nullable();
            $table->string('kode_non_psikiatri_5')->nullable();
            $table->string('tindakan_kedokteran', 3000)->nullable();
            $table->string('penyebab_luar')->nullable();
            $table->string('keadaan_keluar')->nullable();
            $table->string('cara_pulang',17)->nullable();
            $table->string('cara_pulang_lainnya')->nullable();
            $table->string('kondisi_pulang')->nullable();
            $table->string('jam_keluar',8)->nullable();
            $table->string('td')->nullable();
            $table->string('hr')->nullable();
            $table->string('rr')->nullable();
            $table->string('t')->nullable();
            $table->string('bb')->nullable();
            $table->string('obat_dibawa_pulang',4000);
            $table->string('penyakit')->nullable();
            $table->string('diet')->nullable();
            $table->string('keterangan_diet')->nullable();
            $table->string('tempat_kontrol')->nullable();
            $table->string('tanggal_kontrol', 10)->nullable();
            $table->string('hasil_tertunda')->nullable();
            $table->string('tanggal_pengambilan',10)->nullable();
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
        Schema::dropIfExists('ri_resume_medis');
    }
}
