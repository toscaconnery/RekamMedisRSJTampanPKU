<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiPenolakanTindakanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ri_penolakan_tindakan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_regis')->reference('id_pasien')->on('identifikasi');
            $table->string('dokter_pelaksana_tindakan')->nullable();
            $table->string('pemberi_informasi')->nullable();
            $table->string('penerima_informasi')->nullable();
            $table->string('jenis_informasi_1')->nullable();
            $table->boolean('check_informasi_1')->default(False);
            $table->string('jenis_informasi_2')->nullable();
            $table->boolean('check_informasi_2')->default(False);
            $table->string('jenis_informasi_3')->nullable();
            $table->boolean('check_informasi_3')->default(False);
            $table->string('jenis_informasi_4')->nullable();
            $table->boolean('check_informasi_4')->default(False);
            $table->string('jenis_informasi_5')->nullable();
            $table->boolean('check_informasi_5')->default(False);
            $table->string('jenis_informasi_6')->nullable();
            $table->boolean('check_informasi_6')->default(False);
            $table->string('jenis_informasi_7')->nullable();
            $table->boolean('check_informasi_7')->default(False);
            $table->string('jenis_informasi_8')->nullable();
            $table->boolean('check_informasi_8')->default(False);
            $table->string('jenis_informasi_9')->nullable();
            $table->boolean('check_informasi_9')->default(False);
            $table->string('jenis_informasi_10')->nullable();
            $table->boolean('check_informasi_10')->default(False);
            $table->string('jenis_informasi_11')->nullable();
            $table->boolean('check_informasi_11')->default(False);
            $table->string('nama')->nullable();
            $table->string('umur')->nullable();
            $table->string('jk',1)->nullable();
            $table->string('tindakan')->nullable();
            $table->string('terhadap')->nullable();
            $table->string('umur_terhadap')->nullable();
            $table->string('jk_terhadap')->nullable();
            $table->string('alamat_terhadap')->nullable();
            $table->string('tanggal')->nullable();
            $table->string('waktu')->nullable();
            $table->string('yang_menyatakan')->nullable();
            $table->string('saksi')->nullable();
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
        Schema::dropIfExists('ri_penolakan_tindakan');
    }
}
