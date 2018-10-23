<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiSuratPengantarDirawatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ri_surat_pengantar_dirawat', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_regis')->reference('id_pasien')->on('identifikasi');
            $table->string('pendidikan',100)->nullable();
            $table->string('pekerjaan',100)->nullable();
            $table->string('tanggal_lahir',10)->nullable();
            $table->string('jk',1)->nullable();
            $table->string('alamat')->nullable();
            $table->string('nama_pj',100)->nullable();
            $table->string('alamat_pj',100)->nullable();
            $table->string('no_telp_pj',20)->nullable();
            $table->string('no_telp_pj2',20)->nullable();
            $table->string('ruang',100)->nullable();
            $table->string('cara_bayar',50)->nullable();
            $table->string('sebab_utama_dirawat')->nullable();
            $table->string('diagnosa')->nullable();
            $table->string('gaf')->nullable();
            $table->string('panss_ec')->nullable();
            $table->string('terapi')->nullable();
            $table->string('tanggal_masuk_rs')->nullable();
            $table->string('ruang_masuk_rs')->nullable();
            $table->string('kelas_masuk_rs')->nullable();
            $table->string('tanggal')->nullable();
            $table->string('dokter_igd_klinik')->nullable();
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
        Schema::dropIfExists('ri_surat_pengantar_dirawat');
    }
}
