<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRjAsesmenGigiDokterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rj_asesmen_gigi_dokter', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_regis')->reference('id_pasien')->on('identifikasi');
            
            $table->string('pekerjaan')->nullable();
            $table->string('alamat')->nullable();
            $table->string('no_telp',30)->nullable();

            $table->string('golongan_darah')->nullable();
            $table->string('tekanan_darah_top')->nullable();
            $table->string('tekanan_darah_bottom')->nullable();
            $table->string('tekanan_jantung',1)->nullable();
            $table->string('ket_tekanan_jantung')->nullable();
            $table->string('diabetes',1)->nullable();
            $table->string('ket_diabetes')->nullable();
            $table->string('hepatitis',1)->nullable();
            $table->string('ket_hepatitis')->nullable();
            $table->string('penyakit_lainnya',1)->nullable();
            $table->string('ket_penyakit_lainnya')->nullable();
            $table->string('alergi_obat',1)->nullable();
            $table->string('ket_alergi_obat')->nullable();
            $table->string('alergi_makanan',1)->nullable();
            $table->string('ket_alergi_makanan')->nullable();
            $table->string('oklusi',1)->nullable();
            $table->string('torus_palatinus',1)->nullable();
            $table->string('torus_mandibularis',1)->nullable();
            $table->string('palatum',1)->nullable();
            $table->string('supernumerary_teeth',1)->nullable();
            $table->string('ket_supernumerary_teeth')->nullable();
            $table->string('diastema',1)->nullable();
            $table->string('ket_diastema')->nullable();
            $table->string('anomali',1)->nullable();
            $table->string('ket_anomali')->nullable();
            $table->string('lain')->nullable();
            $table->string('keterangan')->nullable();
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
        Schema::dropIfExists('rj_asesmen_gigi_dokter');
    }
}
