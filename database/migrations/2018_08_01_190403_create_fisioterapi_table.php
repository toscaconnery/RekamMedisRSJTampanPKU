<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFisioterapiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fisioterapi', function (Blueprint $table) {
            $table->integer('id_regis')->reference('id_regis')->on('identifikasi');
            $table->integer('id_asesmen_tk')->reference('id_asesmen_tk')->on('asesmen_tk_psikolog');
            $table->string('diagnosis_medis', 30);
            $table->string('catatan_klinis', 30);
            $table->string('terapi_umum', 30);
            $table->string('rujukan_dokter', 30);
            $table->string('keluhan_utama', 30);
            $table->string('keluhan_penyerta', 30);
            $table->string('inspeksi_umum', 30);
            $table->string('inspeksi_khusus', 30);
            $table->string('gerak_dasar', 30);
            $table->string('tes_khusus', 30);
            $table->string('informasi_lain', 30);
            $table->string('pengukuran', 30);
            $table->string('problem', 30);
            $table->string('diagnosis_fisio', 30);
            $table->string('perencanaan', 30);
            $table->string('intervensi', 30);
            $table->string('evaluasi', 30);
            $table->date('tanggal');
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
        Schema::dropIfExists('fisioterapi');
    }
}
