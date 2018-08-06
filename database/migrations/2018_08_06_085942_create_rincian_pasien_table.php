<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRincianPasienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rincian_pasien', function (Blueprint $table) {
            $table->increments('id_rincian');
            $table->integer('id_rm')->reference('id_rm')->on('pasien');
            $table->string('no_telp');
            $table->string('pernikahan', 15);
            $table->string('agama', 10);
            $table->string('pendidikan', 10);
            $table->string('perkerjaan', 11);
            $table->string('bahasa', 15);
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('budaya', 30);
            $table->string('alamat');
            $table->string('rt', 5);
            $table->string('rw', 5);
            $table->string('perubahan_alamat')->nullable();
            $table->string('perubahan_rt')->nullable();
            $table->string('perubahan_rw')->nullable();
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
        Schema::dropIfExists('rincian_pasien');
    }
}
