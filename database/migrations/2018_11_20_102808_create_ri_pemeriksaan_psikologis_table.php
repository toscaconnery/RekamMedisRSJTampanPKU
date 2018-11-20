<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiPemeriksaanPsikologisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ri_pemeriksaan_psikologis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_regis')->reference('id_pasien')->on('identifikasi');
            $table->string('psikolog')->nullable();
            $table->string('tanggal',10)->nullable();
            $table->string('dikirim_oleh',1)->nullable();
            $table->string('dokter')->nullable();
            $table->string('kontak_mata')->nullable();
            $table->string('respon')->nullable();
            $table->string('cara_bicara')->nullable();
            $table->string('volume')->nullable();
            $table->string('intonasi')->nullable();
            $table->string('ekspresi')->nullable();
            $table->string('gesture')->nullable();
            $table->string('performance')->nullable();
            $table->string('autoanamnesa',1000)->nullable();
            $table->string('alloanamnesa',1000)->nullable();
            $table->string('intelegensi',1000)->nullable();
            $table->string('kepribadian',1000)->nullable();
            $table->string('diagnosa',1000)->nullable();
            $table->string('kesimpulan',1000)->nullable();
            $table->string('terapi_saran',1000)->nullable();
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
        Schema::dropIfExists('ri_pemeriksaan_psikologis');
    }
}
