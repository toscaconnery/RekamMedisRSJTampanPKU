<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasien', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('tanggal_lahir');
            $table->smallInteger('jenis_kelamin');
            $table->string('pernikahan');
            $table->string('agama');
            $table->string('pendidikan');
            $table->string('pekerjaan');
            $table->string('bahasa');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('suku');
            $table->string('alamat');
            $table->string('rt');
            $table->string('rw');
            $table->string('telepon');
            $table->string('perubahan_alamat')->nullable();
            $table->string('nama_pj');
            $table->string('alamat_pj');
            $table->string('hubungan_pj');
            $table->string('telepon_pj')
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
        Schema::dropIfExists('pasien');
    }
}
