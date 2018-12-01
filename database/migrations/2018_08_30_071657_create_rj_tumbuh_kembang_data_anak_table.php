<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRjTumbuhKembangDataAnakTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rj_tumbuh_kembang_data_anak', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_regis')->reference('id_pasien')->on('identifikasi');
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->string('agama');
            $table->string('sekolah');
            $table->string('kelas');
            $table->string('alamat_sekolah');
            $table->string('suku_bangsa');
            $table->string('bahasa');
            $table->string('alamat_lengkap');
            $table->string('no_telp');
            $table->string('tinggal_dengan');
            $table->string('tinggal_dengan_lainnya');
            $table->string('tanggal',10);
            $table->string('psikolog',10);
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
        Schema::dropIfExists('rj_tumbuh_kembang_data_anak');
    }
}
