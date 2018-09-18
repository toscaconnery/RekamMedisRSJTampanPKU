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
            $table_>tinyInteger('b_heroin')->nullable();
            $table->tinyInteger('a_heroin')->nullable();
            $table_>tinyInteger('b_heroin')->nullable();
            $table->tinyInteger('a_heroin')->nullable();
            $table_>tinyInteger('b_heroin')->nullable();
            $table->tinyInteger('a_heroin')->nullable();
            $table_>tinyInteger('b_heroin')->nullable();
            $table->tinyInteger('a_heroin')->nullable();
            $table_>tinyInteger('b_heroin')->nullable();
            $table->tinyInteger('a_heroin')->nullable();
            $table_>tinyInteger('b_heroin')->nullable();
            
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
