<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRJAsesmenKeperawatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rj_asesmen_keperawatan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_regis')->reference('id_pasien')->on('identifikasi');
            $table->integer('id_user')->reference('id_user')->on('users');
            $table->string('alasan_kunjungan')->nullable();
            $table->string('hubungan_keluarga',1)->nullable();
            $table->string('status_psikososial')->nullable();
            $table->string('status_psikologis_lain')->nullable();
            $table->string('dilaporkan_ke')->nullable();
            $table->string('konsep_diri')->nullable();
            $table->string('persepsi')->nullable();
            $table->string('motorik')->nullable();
            $table->string('penampilan')->nullable();
            $table->string('pikir')->nullable();
            $table->string('perasaan')->nullable();
            $table->string('status_fungsional')->nullable();
            $table->string('perlu_bantuan')->nullable();
            $table->string('waktu_laporan')->nullable();

            //fisik gizi
            $table->string('td', 10)->nullable();
            $table->string('tb', 10)->nullable();
            $table->string('nadi', 10)->nullable();
            $table->string('bb', 10)->nullable();
            $table->string('pernafasan', 10)->nullable();
            $table->string('golongan_darah', 4)->nullable();
            $table->string('suhu', 10)->nullable();
            $table->string('must_1',1)->nullable();
            $table->string('must_2',1)->nullable();
            $table->string('must_3',1)->nullable();
            $table->string('bb_berkurang',30)->nullable();
            $table->string('diagnosis_khusus')->nullable();
            $table->string('skor_must',30)->nullable();
            $table->string('sk_1',1)->nullable();
            $table->string('sk_2',1)->nullable();
            $table->string('sk_3',1)->nullable();
            $table->string('sk_4',1)->nullable();
            $table->string('skor_sk')->nullable();
            $table->string('penyakit_malnutrisi', 50)->nullable();
            $table->string('pemberitahuan_fg',1)->nullable();
            $table->string('waktu_pemberitahuan_fg', 5)->nullable();

            //nyeri
            $table->string('tingkat',2)->nullable();
            $table->string('skala',2)->nullable();
            $table->string('lokasi')->nullable();
            $table->string('durasi')->nullable();
            $table->string('frekuensi')->nullable();
            $table->string('hilang')->nullable();
            $table->string('nyeri_hilang_input_text')->nullable();
            $table->string('pemberitahuan_ny',1)->nullable();
            $table->string('waktu_pemberitahuan_ny')->nullable();

            $table->string('jenis_resiko_jatuh',20)->nullable();

            //humpty_dumpty
            $table->string('usia',1)->nullable();
            $table->string('diagnosis_hd',1)->nullable();
            $table->string('gangguan_kognitif',1)->nullable();
            $table->string('faktor_lingkungan',1)->nullable();
            $table->string('waktu_respon_obat',1)->nullable();
            $table->string('penggunaan_obat',1)->nullable();

            //morse
            $table->string('riwayat_jatuh_mrs',1)->nullable();
            $table->string('diagnosis_sekunder',1)->nullable();
            $table->string('alat_bantu',1)->nullable();
            $table->string('terpasang_infus',1)->nullable();
            $table->string('gaya_berjalan',1)->nullable();
            $table->string('status_mental_mrs',1)->nullable();

            //edmunson
            $table->string('status_mental_edm',1)->nullable();
            $table->string('diagnosis_edm',1)->nullable();
            $table->string('eliminasi',1)->nullable();
            $table->string('pengobatan',1)->nullable();
            $table->string('diagnosa',1)->nullable();
            $table->string('ambulasi',1)->nullable();
            $table->string('nutrisi',1)->nullable();
            $table->string('riwayat_jatuh_edm',1)->nullable();

            //diagnosa keperawatan
            $table->string('umum')->nullable();
            $table->string('umum_lainnya')->nullable();
            $table->string('jiwa')->nullable();
            $table->string('jiwa_lainnya')->nullable();
            $table->string('obat_parental')->nullable();
            $table->string('ekg')->nullable();

            //evaluasi tindakan
            $table->text('implementasi')->nullable();
            $table->text('evaluasi')->nullable();

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
        Schema::dropIfExists('rj_asesmen_keperawatan');
    }
}