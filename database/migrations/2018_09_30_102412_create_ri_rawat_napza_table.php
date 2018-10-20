<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiRawatNapzaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ri_rawat_napza', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_regis')->reference('id_pasien')->on('identifikasi');
            $table->string('tanggal_pengkajian')->nullable();
            $table->string('sumber_informasi')->nullable();
            $table->string('tanggal_dirawat')->nullable();
            $table->string('ruangan')->nullable();
            $table->string('alasan_masuk',11)->nullable();
            $table->string('alasan_masuk_lainnya')->nullable();
            $table->string('keadaan_masuk',7)->nullable();
            $table->string('pemakaian_terakhir',7)->nullable();
            $table->string('jenis_zat')->nullable();
            $table->string('cara_pemakaian')->nullable();
            $table->boolean('f1')->default(False);
            $table->boolean('f2')->default(False);
            $table->boolean('f3')->default(False);
            $table->string('keterangan_komplikasi')->nullable();
            $table->string('kriminal_dirumah',7)->nullable();
            $table->string('kriminal_diluar',7)->nullable();
            $table->string('problema_sekolah',11)->nullable();
            $table->string('problema_keluarga',7)->nullable();
            $table->string('problema_pekerjaan',11)->nullable();
            $table->string('problema_masyarakat',11)->nullable();
            $table->string('problema_masyarakat_lainnya')->nullable();
            $table->string('dirawat_diagnosis_medis')->nullable();
            $table->string('etiologi',9)->nullable();
            $table->string('faktor_kambuh',15)->nullable();
            $table->string('masalah_keperawatan_1')->nullable();
            $table->string('jenis_penanggulangan',11)->nullable();
            $table->string('alasan_meninggalkan',11)->nullable();
            $table->string('masalah_keperawatan_2')->nullable();
            $table->string('keluhan_fisik',116)->nullable();
            $table->string('masalah_keperawatan_3')->nullable();
            $table->boolean('f4')->default(False);
            $table->string('anggota_keluarga')->nullable();
            $table->string('f5',1)->nullable();
            $table->boolean('f6')->default(False);
            $table->string('keterangan_pranikah')->nullable();
            $table->string('f7',1)->nullable();
            $table->string('masalah_keperawatan_4')->nullable();
            $table->string('gambaran_diri',7)->nullable();
            $table->string('gambaran_diri_lainnya')->nullable();
            $table->string('identitas',7)->nullable();
            $table->string('ideal_diri',7)->nullable();
            $table->string('harga_diri',5)->nullable();
            $table->string('masalah_keperawatan_5')->nullable();
            $table->string('nilai_keyakinan')->nullable();
            $table->string('nilai_keyakinan_lainnya')->nullable();
            $table->string('kegiatan_ibadah',7)->nullable();
            $table->string('masalah_keperawatan_6')->nullable();
            $table->string('adaptif',9)->nullable();
            $table->string('adaptif_lainnya')->nullable();
            $table->string('maladaptif',9)->nullable();
            $table->string('maladaptif_lainnya')->nullable();
            $table->string('masalah_keperawatan_7')->nullable();
            $table->string('pengetahuan_kurang',20)->nullable();
            $table->string('pengetahuan_kurang_lainnya')->nullable();
            $table->string('masalah_keperawatan_8')->nullable();
            $table->string('diagnosis_medis')->nullable();
            $table->string('terapi_medis')->nullable();
            $table->string('checkbox_masalah_keperawatan')->nullable();
            $table->string('masalah_keperawatan_lainnya')->nullable();
            $table->string('text_masalah_keperawatan',3000)->nullable();
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
        Schema::dropIfExists('ri_rawat_napza');
    }
}
