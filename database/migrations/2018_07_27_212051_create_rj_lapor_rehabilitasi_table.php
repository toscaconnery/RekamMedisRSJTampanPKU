<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRjLaporRehabilitasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rj_lapor_rehabilitasi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_regis')->reference('id')->on('identifikasi');
            $table->string('tanggal_kedatangan',10);
            $table->string('alamat');
            $table->string('telp',20);
            $table->smallInteger('status_perkawinan');
            $table->smallInteger('pendidikan_terakhir');
            
            $table->string('penyakit_menyertai',3000)->nullable();
            $table->smallInteger('riwayat_penyakit_kronis');
            $table->string('jenis_penyakit_kronis')->nullable();
            $table->smallInteger('sedang_terapi');
            $table->string('jenis_terapi_dijalani')->nullable();
            $table->smallInteger('hiv');
            $table->smallInteger('hepatitis_b');
            $table->smallInteger('hepatitis_c');

            $table->smallInteger('status_pekerjaan');
            $table->smallInteger('pola_pekerjaan');
            $table->string('kode_pekerjaan')->nullable();
            $table->string('keterampilan_teknis')->nullable();
            $table->smallInteger('pemberi_dukungan');
            $table->string('nama_pemberi_dukungan')->nullable();
            $table->smallInteger('dukungan_finansial');
            $table->smallInteger('dukungan_tempat_tinggal');
            $table->smallInteger('dukungan_makan');
            $table->smallInteger('dukungan_pengobatan');

            $table->char('p_alkohol',1);
            $table->string('l_alkohol')->nullable();
            $table->char('c_alkohol',1);

            $table->char('p_heroin',1);
            $table->string('l_heroin')->nullable();
            $table->char('c_heroin',1);

            $table->char('p_metadon',1);
            $table->string('l_metadon')->nullable();
            $table->char('c_metadon',1);

            $table->char('p_analgesik',1);
            $table->string('l_analgesik')->nullable();
            $table->char('c_analgesik',1);
            
            $table->char('p_barbiturat',1);
            $table->string('l_barbiturat')->nullable();
            $table->char('c_barbiturat',1);

            $table->char('p_sedatif',1);
            $table->string('l_sedatif')->nullable();
            $table->char('c_sedatif',1);

            $table->char('p_kokain',1);
            $table->string('l_kokain')->nullable();
            $table->char('c_kokain',1);

            $table->char('p_amfetamin',1);
            $table->string('l_amfetamin')->nullable();
            $table->char('c_amfetamin',1);

            $table->char('p_kanabis',1);
            $table->string('l_kanabis')->nullable();
            $table->char('c_kanabis',1);

            $table->char('p_halusinogen',1);
            $table->string('l_halusinogen')->nullable();
            $table->char('c_halusinogen',1);

            $table->char('p_inhalan',1);
            $table->string('l_inhalan')->nullable();
            $table->char('c_inhalan',1);

            $table->char('p_lebih_dari_satu',1);
            $table->string('l_lebih_dari_satu')->nullable();

            $table->string('zat_utama_disalahgunakan')->nullable();
            $table->smallInteger('terapi_rehabilitasi');
            $table->string('jenis_terapi_rehabilitasi')->nullable();
            $table->smallInteger('overdosis');
            $table->string('keterangan_overdosis')->nullable();
            $table->string('waktu_overdosis')->nullable();
            $table->smallInteger('cara_penanggulangan_overdosis');

            $table->smallInteger('ilegal_1')->nullable();
            $table->smallInteger('ilegal_2')->nullable();
            $table->smallInteger('ilegal_3')->nullable();
            $table->smallInteger('ilegal_4')->nullable();
            $table->smallInteger('ilegal_5')->nullable();
            $table->smallInteger('ilegal_6')->nullable();
            $table->smallInteger('ilegal_7')->nullable();
            $table->smallInteger('ilegal_8')->nullable();
            $table->smallInteger('ilegal_9')->nullable();
            $table->smallInteger('ilegal_10')->nullable();
            $table->smallInteger('ilegal_11')->nullable();
            $table->smallInteger('ilegal_12')->nullable();
            $table->smallInteger('ilegal_13')->nullable();
            $table->smallInteger('ilegal_14')->nullable();
            $table->smallInteger('vonis_ilegal')->nullable();
            $table->smallInteger('tiga_tahun_belakangan');
            $table->smallInteger('hidup_dengan_pengguna');
            $table->boolean('saudara_pengguna')->default(False);
            $table->boolean('ortu_pengguna')->default(False);
            $table->boolean('pasangan_pengguna')->default(False);
            $table->boolean('om_tante_pengguna')->default(False);
            $table->boolean('teman_pengguna')->default(False);
            $table->boolean('lainnya_pengguna')->default(False);
            $table->string('keterangan_lainnya_pengguna')->nullable();
            
            $table->char('konflik_ibu',1);
            $table->string('keterangan_konflik_ibu')->nullable();
            $table->char('konflik_ayah',1);
            $table->string('keterangan_konflik_ayah')->nullable();
            $table->char('konflik_adik_kakak',1);
            $table->string('keterangan_konflik_adik_kakak')->nullable();
            $table->char('konflik_pasangan',1);
            $table->string('keterangan_konflik_pasangan')->nullable();
            $table->char('konflik_anak',1);
            $table->string('keterangan_konflik_anak')->nullable();
            $table->char('konflik_keluarga',1);
            $table->string('keterangan_konflik_keluarga')->nullable();
            $table->string('subjek_konflik_keluarga')->nullable();
            $table->char('konflik_teman',1);
            $table->string('keterangan_konflik_teman')->nullable();
            $table->char('konflik_tetangga',1);
            $table->string('keterangan_konflik_tetangga')->nullable();
            $table->char('konflik_kantor',1);
            $table->string('keterangan_konflik_kantor')->nullable();

            $table->char('psikiatris_1',1);
            $table->string('keterangan_psikiatris_1',30)->nullable();
            $table->char('psikiatris_2',1);
            $table->string('keterangan_psikiatris_2',30)->nullable();
            $table->char('psikiatris_3',1);
            $table->string('keterangan_psikiatris_3',30)->nullable();
            $table->char('psikiatris_4',1);
            $table->string('keterangan_psikiatris_4',30)->nullable();
            $table->char('psikiatris_5',1);
            $table->string('keterangan_psikiatris_5',30)->nullable();
            $table->char('psikiatris_6',1);
            $table->string('keterangan_psikiatris_6',30)->nullable();
            $table->char('psikiatris_7',1);
            $table->string('keterangan_psikiatris_7',30)->nullable();
            $table->char('psikiatris_8',1);
            $table->string('keterangan_psikiatris_8',30)->nullable();

            $table->string('tekanan_darah',11)->nullable();
            $table->string('nadi',11)->nullable();
            $table->string('pernapasan',11)->nullable();
            $table->string('suhu',11)->nullable();
            $table->string('sistem_pencernaan',1000)->nullable();
            $table->string('sistem_jantung_pembuluh',1000)->nullable();
            $table->string('sistem_saraf_pusat',1000)->nullable();
            $table->string('tht_kulit',1000)->nullable();
            $table->string('keterangan',1000)->nullable();
            $table->string('hasil_urinalis',13);

            $table->smallInteger('medis');
            $table->smallInteger('pekerjaan_dukungan');
            $table->smallInteger('napza');
            $table->smallInteger('legal');
            $table->smallInteger('keluarga_sosial');
            $table->smallInteger('psikiatris');
            $table->string('kriteria_napza',100)->nullable();
            $table->string('diagnosis_lainnya',100)->nullable();
            $table->string('resume_masalah')->nullable();
            $table->smallInteger('rencana_tindak_lanjut');
            $table->string('rencana_tindak_lanjut_lainnya',100)->nullable();
            $table->string('nama_dokter',40);

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
        Schema::dropIfExists('rj_lapor_rehabilitasi');
    }
}
