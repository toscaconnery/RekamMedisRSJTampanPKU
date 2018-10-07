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
            $table->string('tanggal_kedatangan');
            $table->string('alamat');
            $table->string('telp');
            $table->tinyInteger('status_perkawinan');
            $table->tinyInteger('pendidikan_terakhir');
            
            $table->string('penyakit_menyertai')->nullable();
            $table->tinyInteger('riwayat_penyakit_kronis');
            $table->string('jenis_penyakit_kronis')->nullable();
            $table->tinyInteger('sedang_terapi');
            $table->string('jenis_terapi_dijalani')->nullable();
            $table->tinyInteger('hiv');
            $table->tinyInteger('hepatitis_b');
            $table->tinyInteger('hepatitis_c');

            $table->tinyInteger('status_pekerjaan');
            $table->tinyInteger('pola_pekerjaan');
            $table->string('kode_pekerjaan')->nullable();
            $table->string('keterampilan_teknis')->nullable();
            $table->tinyInteger('pemberi_dukungan');
            $table->string('nama_pemberi_dukungan')->nullable();
            $table->tinyInteger('dukungan_finansial');
            $table->tinyInteger('dukungan_tempat_tinggal');
            $table->tinyInteger('dukungan_makan');
            $table->tinyInteger('dukungan_pengobatan');

            $table->tinyInteger('p_alkohol');
            $table->string('l_alkohol')->nullable();
            $table->tinyInteger('c_alkohol');

            $table->tinyInteger('p_heroin');
            $table->string('l_heroin')->nullable();
            $table->tinyInteger('c_heroin');

            $table->tinyInteger('p_metadon');
            $table->string('l_metadon')->nullable();
            $table->tinyInteger('c_metadon');

            $table->tinyInteger('p_analgesik');
            $table->string('l_analgesik')->nullable();
            $table->tinyInteger('c_analgesik');
            
            $table->tinyInteger('p_barbiturat');
            $table->string('l_barbiturat')->nullable();
            $table->tinyInteger('c_barbiturat');

            $table->tinyInteger('p_sedatif');
            $table->string('l_sedatif')->nullable();
            $table->tinyInteger('c_sedatif');

            $table->tinyInteger('p_kokain');
            $table->string('l_kokain')->nullable();
            $table->tinyInteger('c_kokain');

            $table->tinyInteger('p_amfetamin');
            $table->string('l_amfetamin')->nullable();
            $table->tinyInteger('c_amfetamin');

            $table->tinyInteger('p_kanabis');
            $table->string('l_kanabis')->nullable();
            $table->tinyInteger('c_kanabis');

            $table->tinyInteger('p_halusinogen');
            $table->string('l_halusinogen')->nullable();
            $table->tinyInteger('c_halusinogen');

            $table->tinyInteger('p_inhalan');
            $table->string('l_inhalan')->nullable();
            $table->tinyInteger('c_inhalan');

            $table->tinyInteger('p_lebih_dari_satu');
            $table->string('l_lebih_dari_satu')->nullable();

            $table->string('zat_utama_disalahgunakan')->nullable();
            $table->tinyInteger('terapi_rehabilitasi');
            $table->string('jenis_terapi_rehabilitasi')->nullable();
            $table->tinyInteger('overdosis');
            $table->string('keterangan_overdosis')->nullable();
            $table->string('waktu_overdosis')->nullable();
            $table->tinyInteger('cara_penanggulangan_overdosis');

            $table->tinyInteger('ilegal_1')->default(0);
            $table->tinyInteger('ilegal_2')->default(0);
            $table->tinyInteger('ilegal_3')->default(0);
            $table->tinyInteger('ilegal_4')->default(0);
            $table->tinyInteger('ilegal_5')->default(0);
            $table->tinyInteger('ilegal_6')->default(0);
            $table->tinyInteger('ilegal_7')->default(0);
            $table->tinyInteger('ilegal_8')->default(0);
            $table->tinyInteger('ilegal_9')->default(0);
            $table->tinyInteger('ilegal_10')->default(0);
            $table->tinyInteger('ilegal_11')->default(0);
            $table->tinyInteger('ilegal_12')->default(0);
            $table->tinyInteger('ilegal_13')->default(0);
            $table->tinyInteger('ilegal_14')->default(0);
            $table->tinyInteger('vonis_ilegal')->default(0);
            $table->tinyInteger('tiga_tahun_belakangan');
            $table->tinyInteger('hidup_dengan_pengguna');
            $table->boolean('saudara_pengguna')->default(False);
            $table->boolean('ortu_pengguna')->default(False);
            $table->boolean('pasangan_pengguna')->default(False);
            $table->boolean('om_tante_pengguna')->default(False);
            $table->boolean('teman_pengguna')->default(False);
            $table->boolean('lainnya_pengguna')->default(False);
            $table->string('keterangan_lainnya_pengguna')->nullable();
            
            $table->tinyInteger('konflik_ibu');
            $table->string('keterangan_konflik_ibu')->nullable();
            $table->tinyInteger('konflik_ayah');
            $table->string('keterangan_konflik_ayah')->nullable();
            $table->tinyInteger('konflik_adik_kakak');
            $table->string('keterangan_konflik_adik_kakak')->nullable();
            $table->tinyInteger('konflik_pasangan');
            $table->string('keterangan_konflik_pasangan')->nullable();
            $table->tinyInteger('konflik_anak');
            $table->string('keterangan_konflik_anak')->nullable();
            $table->tinyInteger('konflik_keluarga');
            $table->string('keterangan_konflik_keluarga')->nullable();
            $table->string('subjek_konflik_keluarga')->nullable();
            $table->tinyInteger('konflik_teman');
            $table->string('keterangan_konflik_teman')->nullable();
            $table->tinyInteger('konflik_tetangga');
            $table->string('keterangan_konflik_tetangga')->nullable();
            $table->tinyInteger('konflik_kantor');
            $table->string('keterangan_konflik_kantor')->nullable();

            $table->tinyInteger('psikiatris_1');
            $table->string('keterangan_psikiatris_1');
            $table->tinyInteger('psikiatris_2');
            $table->string('keterangan_psikiatris_2');
            $table->tinyInteger('psikiatris_3');
            $table->string('keterangan_psikiatris_3');
            $table->tinyInteger('psikiatris_4');
            $table->string('keterangan_psikiatris_4');
            $table->tinyInteger('psikiatris_5');
            $table->string('keterangan_psikiatris_5');
            $table->tinyInteger('psikiatris_6');
            $table->string('keterangan_psikiatris_6');
            $table->tinyInteger('psikiatris_7');
            $table->string('keterangan_psikiatris_7');
            $table->tinyInteger('psikiatris_8');
            $table->string('keterangan_psikiatris_8');

            $table->string('tekanan_darah',11)->nullable();
            $table->string('nadi',11)->nullable();
            $table->string('pernapasan',11)->nullable();
            $table->string('suhu',11)->nullable();
            $table->string('sistem_pencernaan')->nullable();
            $table->string('sistem_jantung_pembuluh')->nullable();
            $table->string('sistem_saraf_pusat')->nullable();
            $table->string('tht_kulit')->nullable();
            $table->string('keterangan')->nullable();
            $table->string('hasil_urinalis',13);

            $table->string('')->nullable();
            $table->string('')->nullable();







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
