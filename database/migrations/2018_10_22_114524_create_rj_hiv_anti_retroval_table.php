<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRjHivAntiRetrovalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rj_hiv_anti_retroval', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_regis')->reference('id_pasien')->on('identifikasi');
            $table->string('no_reg_nasional')->nullable();
            $table->string('nik',16)->nullable();
            $table->string('nama_ibu_kandung',100)->nullable();
            $table->string('alamat_pasien')->nullable();
            $table->string('no_telp')->nullable();
            $table->string('nama_pmo')->nullable();
            $table->string('hubungan_dengan_pasien')->nullable();
            $table->string('alamat_pmo')->nullable();
            $table->string('no_telp_pmo',18)->nullable();
            $table->string('tgl_konfirm_tes_hiv',10)->nullable();
            $table->string('tempat_tes_hiv')->nullable();
            $table->string('entry_point',1)->nullable();
            $table->string('keterangan_entry_point',100)->nullable();
            $table->string('riwayat_alergi_obat')->nullable();
            $table->string('pendidikan',1)->nullable();
            $table->string('pekerjaan',1)->nullable();
            $table->string('nama_pekerjaan')->nullable();
            $table->string('fr',15)->nullable();
            $table->string('keterangan_rawat_jalan',100)->nullable();
            $table->string('keterangan_jangkauan',100)->nullable();
            $table->string('keterangan_fr_lainnya',100)->nullable();
            $table->string('status_pernikahan',1)->nullable();
            $table->string('riwayat_keluarga',1000)->nullable();
            $table->string('pernah_menerima_art',1)->nullable();
            $table->string('jenis_art',1)->nullable();
            $table->string('tempat_art_dulu',1)->nullable();
            $table->string('nama_arv')->nullable();
            $table->string('dosis_arv',100)->nullable();
            $table->string('lama_penggunaan',100)->nullable();
            $table->string('tanggal_pkl_1',10)->nullable();
            $table->string('stad_klinis_pkl_1',50)->nullable();
            $table->smallInteger('bb_pkl_1')->nullable();
            $table->string('status_fungsional_pkl_1',1)->nullable();
            $table->string('cd4_pkl_1',50)->nullable();
            $table->string('lain_lain_pkl_1',50)->nullable();
            $table->string('tanggal_pkl_2',10)->nullable();
            $table->string('stad_klinis_pkl_2',50)->nullable();
            $table->smallInteger('bb_pkl_2')->nullable();
            $table->string('status_fungsional_pkl_2',1)->nullable();
            $table->string('cd4_pkl_2',50)->nullable();
            $table->string('lain_lain_pkl_2',50)->nullable();
            $table->string('tanggal_pkl_3',10)->nullable();
            $table->string('stad_klinis_pkl_3',50)->nullable();
            $table->smallInteger('bb_pkl_3')->nullable();
            $table->string('status_fungsional_pkl_3',1)->nullable();
            $table->string('cd4_pkl_3',50)->nullable();
            $table->string('lain_lain_pkl_3',50)->nullable();
            $table->string('tanggal_pkl_4',10)->nullable();
            $table->string('stad_klinis_pkl_4',50)->nullable();
            $table->smallInteger('bb_pkl_4')->nullable();
            $table->string('status_fungsional_pkl_4',1)->nullable();
            $table->string('cd4_pkl_4',50)->nullable();
            $table->string('lain_lain_pkl_4',50)->nullable();
            $table->string('tanggal_pkl_5',10)->nullable();
            $table->string('stad_klinis_pkl_5',50)->nullable();
            $table->smallInteger('bb_pkl_5')->nullable();
            $table->string('status_fungsional_pkl_5',1)->nullable();
            $table->string('cd4_pkl_5',50)->nullable();
            $table->string('lain_lain_pkl_5',50)->nullable();
            $table->string('tanggal_pkl_6',10)->nullable();
            $table->string('stad_klinis_pkl_6',50)->nullable();
            $table->smallInteger('bb_pkl_6')->nullable();
            $table->string('status_fungsional_pkl_6',1)->nullable();
            $table->string('cd4_pkl_6',50)->nullable();
            $table->string('lain_lain_pkl_6',50)->nullable();
            $table->string('terapi_art',1000)->nullable();
            $table->string('alasan_lain_substitusi',100)->nullable();
            $table->string('alasan_lain_switch',100)->nullable();
            $table->string('alasan_lain_stop',100)->nullable();
            $table->string('klasifikasi_tb',100)->nullable();
            $table->string('ptb',1)->nullable();
            $table->string('kabupaten_tptb',100)->nullable();
            $table->string('nama_tptb',100)->nullable();
            $table->string('noreg_tptb',100)->nullable();
            $table->string('ttb',1)->nullable();
            $table->string('tgl_mulai_terapi_tb',10)->nullable();
            $table->string('tgl_selesai_terapi_tb',10)->nullable();
            $table->string('ii',1)->nullable();
            $table->string('tgl_kunjungan_follow_up',10)->nullable();
            $table->string('rencana_tgl_kunjungan',10)->nullable();
            $table->string('prm',1)->nullable();
            $table->string('drt',1)->nullable();
            $table->string('nama_klinik_sebelumnya',100)->nullable();
            $table->string('bbf',50)->nullable();
            $table->string('tbf',50)->nullable();
            $table->string('sfu',1)->nullable();
            $table->string('stad_klinis')->nullable();
            $table->string('hkb',1)->nullable();
            $table->string('infop',23)->nullable();
            $table->string('keterangan_infop',100)->nullable();
            $table->string('obat_untuk_io',100)->nullable();
            $table->string('stb',1)->nullable();
            $table->string('ppk',1)->nullable();
            $table->string('inh',1)->nullable();
            $table->string('hkr',1)->nullable();
            $table->string('obat_arv')->nullable();
            $table->string('adr',1)->nullable();
            $table->string('esart',38)->nullable();
            $table->string('keterangan_esart',100)->nullable();
            $table->string('jumlah_cd4',100)->nullable();
            $table->string('hasil_lab')->nullable();
            $table->string('dkr',1)->nullable();
            $table->string('jumlah_kondom',100)->nullable();
            $table->string('rsmrs')->nullable();
            $table->string('fll',1)->nullable();
            $table->string('tgl_meninggal',10)->nullable();
            $table->string('tgl_kunjungan_terakhir',10)->nullable();
            $table->string('tgl_keluar',10)->nullable();
            $table->string('nama_klinik_baru')->nullable();
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
        Schema::dropIfExists('rj_hiv_anti_retroval');
    }
}
