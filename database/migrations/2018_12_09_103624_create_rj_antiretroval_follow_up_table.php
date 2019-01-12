<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRjAntiretrovalFollowUpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rj_antiretroval_follow_up', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_regis')->reference('id_pasien')->on('identifikasi');
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
            $table->string('mkb')->nullable();
            $table->string('infop',23)->nullable();
            $table->string('keterangan_infop',100)->nullable();
            $table->string('obat_untuk_io',100)->nullable();
            $table->string('stb',1)->nullable();
            $table->string('ppk',1)->nullable();
            $table->string('inh',1)->nullable();
            $table->string('hkr',1)->nullable();
            $table->string('obat_arv')->nullable();
            $table->string('sisa_obat')->nullable();
            $table->string('adr',1)->nullable();
            $table->string('esart',38)->nullable();
            $table->string('keterangan_esart',100)->nullable();
            $table->string('jumlah_cd4',100)->nullable();
            $table->string('hasil_lab')->nullable();
            $table->string('dkr',1)->nullable();
            $table->string('jumlah_kondom',100)->nullable();
            $table->string('rsmrs')->nullable();
            $table->string('fll',1)->nullable();
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
        Schema::dropIfExists('rj_antiretroval_follow_up');
    }
}
