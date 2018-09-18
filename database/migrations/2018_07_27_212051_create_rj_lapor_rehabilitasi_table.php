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
            $table->string('status_perkawinan');
            $table->string('pendidikan_terakhir');
            $table->string('status_pekerjaan');
            $table->string('pola_pekerjaan');
            $table->string('kode_pekerjaan');
            $table->string('keterampilan_teknis');
            $table->boolean('ada_pemberi_dukungan');
            $table->string('nama_pemberi_dukungan')->nullable();
            $table->boolean('dukungan_finansial')->default(False);
            $table->boolean('dukungan_tempat_tinggal')->default(False);
            $table->boolean('dukungan_makan')->default(False);
            $table->boolean('dukungan_pengobatan')->default(False);
            $table->tinyInteger('a_alkohol')->nullable();
            $table->tinyInteger('b_alkohol')->nullable();
            $table->tinyInteger('a_heroin')->nullable();
            $table->tinyInteger('b_heroin')->nullable();
            $table->tinyInteger('a_metadon')->nullable();
            $table->tinyInteger('b_metadon')->nullable();
            $table->tinyInteger('a_analgesik')->nullable();
            $table->tinyInteger('b_analgesik')->nullable();
            $table->tinyInteger('a_barbiturat')->nullable();
            $table->tinyInteger('b_barbiturat')->nullable();
            $table->tinyInteger('a_sedatif')->nullable();
            $table->tinyInteger('b_sedatif')->nullable();
            $table->tinyInteger('a_kokain')->nullable();
            $table->tinyInteger('b_kokain')->nullable();
            $table->tinyInteger('a_amfetamin')->nullable();
            $table->tinyInteger('b_amfitamin')->nullable();
            $table->tinyInteger('a_kanabis')->nullable();
            $table->tinyInteger('b_kanabis')->nullable();
            $table->tinyInteger('a_halusinogen')->nullable();
            $table->tinyInteger('b_halusinogen')->nullable();
            $table->tinyInteger('a_inhalan')->nullable();
            $table->tinyInteger('b_inhalan')->nullable();



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
