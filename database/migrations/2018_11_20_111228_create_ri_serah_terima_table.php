<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiSerahTerimaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ri_serah_terima', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_regis')->reference('id_pasien')->on('identifikasi');
            $table->string('nama')->nullable();
            $table->string('umur')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('alamat')->nullable();
            $table->string('hubungan_dengan_pasien')->nullable();
            $table->string('nama_pasien')->nullable();
            $table->string('umur_pasien')->nullable();
            $table->string('jenis_kelamin_pasien')->nullable();
            $table->string('no_rm')->nullable();
            $table->string('alamat_pasien')->nullable();
            $table->string('jam_dijemput')->nullable();
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
        Schema::dropIfExists('ri_serah_terima');
    }
}
