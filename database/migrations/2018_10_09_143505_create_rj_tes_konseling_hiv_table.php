<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRjTesKonselingHivTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rj_tes_konseling_hiv', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_regis')->reference('id_pasien')->on('identifikasi');
            $table->string('nama');
            $table->string('alamat');
            $table->string('propinsi');
            $table->string('kota_kabupaten');
            $table->string('nama_ibu_kandung')->nullable();
            $table->string('jenis_kelamin');
            $table->string('spk',1);
            $table->string('tgl_lahir')->nullable();
            $table->string('skh',1);
            $table->smallInteger('umur_anak_terakhir')->nullable();
            $table->smallInteger('jumlah_anak_kandung')->nullable();
            $table->string('pen',1);
            $table->string('pek',1);
            $table->string('jenis_pekerjaan');
            $table->string('kr',1);
            $table->string('ktr',1);
            $table->string('lama_ps_penasun')->nullable();
            $table->string('sk',1);
            $table->string('sr',1);
            $table->string('pt',1);
            $table->string('pp',1);
            $table->string('ha',1);
            $table->string('tanggal_lahir_pasangan',10)->nullable();
            $table->string('sp',1);
            $table->string('tgl_tes_terakhir_pasangan',10)->nullable();
            $table->string('wbp',1);
            $table->string('tgl_konseling_pra_hiv',10)->nullable();
            $table->string('skl',1);
            $table->string('alasan_tes',15);
            $table->string('dmn',1);
            $table->string('dmn_lainnya')->nullable();
            $table->string('kaj',1);
            $table->string('waktu_kaj')->nullable();
            $table->string('an',1);
            $table->string('waktu_an')->nullable();
            $table->string('per',1);
            $table->string('waktu_per')->nullable();
            $table->string('trf',1);
            $table->string('waktu_trf')->nullable();
            $table->string('trm',1);
            $table->string('waktu_trm')->nullable();
            $table->string('ktr_lainnya')->nullable();
            $table->string('waktu_ktr_lainnya')->nullable();
            $table->string('jd',1);
            $table->string('waktu_jd')->nullable();
            $table->string('ksd',1);
            $table->string('tes_hiv',1);
            $table->string('tt_hiv')->nullable();
            $table->string('wt_hiv')->nullable();
            $table->string('ht_hiv',1);
            $table->string('tgl_pemberian_informasi',10)->nullable();
            $table->string('tes_hiv2',1);
            $table->string('tt_hiv2')->nullable();
            $table->string('wt_hiv2')->nullable();
            $table->string('ht_hiv2',1);
            $table->string('ptp',30);
            $table->string('ims_lainnya')->nullable();
            $table->string('ptp_lainnya')->nullable();
            $table->string('kesediaan_tes_tipk',1);
            $table->string('tgl_tes_hiv',10);
            $table->string('jt',1);
            $table->string('r1',1);
            $table->string('r1_reagen')->nullable();
            $table->string('r2',1);
            $table->string('r2_reagen')->nullable();
            $table->string('r3',1);
            $table->string('r3_reagen')->nullable();
            $table->string('kes',1);
            $table->string('nrn_pdp')->nullable();
            $table->string('tgl_masuk_pdp',10);
            $table->string('tl_tipk',5)->nullable();
            $table->string('shp',1);
            $table->string('tgl_konseling_pasca_tes',10);
            $table->string('tha',1);
            $table->string('ktb',1);
            $table->smallInteger('jkyd')->nullable();
            $table->string('tl_kts',23)->nullable();
            $table->string('rpp',5);
            $table->string('rpp_lsm');
            $table->string('ksl',1);
            $table->string('ksl_lainnya')->nullable();
            $table->string('nama_konselor');
            $table->string('sl',1);
            $table->string('jpe',1);
            $table->timestamps('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rj_tes_konseling_hiv');
    }
}
