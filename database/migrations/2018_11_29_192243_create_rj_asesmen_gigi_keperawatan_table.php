<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRjAsesmenGigiKeperawatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rj_asesmen_gigi_keperawatan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_regis')->reference('id_pasien')->on('identifikasi');

            $table->string('pekerjaan')->nullable();
            $table->string('alamat')->nullable();
            $table->string('no_telp',30)->nullable();
            //nyeri
            $table->string('tingkat',1)->nullable();
            $table->string('skala',2)->nullable();
            $table->string('lokasi')->nullable();
            $table->string('durasi')->nullable();
            $table->string('frekuensi')->nullable();
            $table->string('hilang')->nullable();
            $table->string('nyeri_hilang_input_text')->nullable();
            $table->string('pemberitahuan',1)->nullable();
            $table->string('waktu_pemberitahuan')->nullable();

            $table->string('jenis_resiko_jatuh',30)->nullable();

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
        Schema::dropIfExists('rj_asesmen_gigi_keperawatan');
    }
}
