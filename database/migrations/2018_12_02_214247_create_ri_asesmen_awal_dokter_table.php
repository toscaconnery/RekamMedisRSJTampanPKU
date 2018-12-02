<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiAsesmenAwalDokterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ri_asesmen_awal_dokter', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_regis',20)->reference('id_pasien')->on('identifikasi');
            $table->string('tanggal_diperiksa')->nullable();
            $table->string('jam_diperiksa')->nullable();
            $table->string('anamnesa',5000)->nullable();
            $table->string('anamnesa1')->nullable();
            $table->string('anamnesa2')->nullable();
            $table->string('anamnesa3')->nullable();
            $table->string('anamnesa4')->nullable();
            $table->string('anamnesa5')->nullable();
            $table->string('anamnesa6')->nullable();
            $table->string('anamnesa7')->nullable();
            $table->string('anamnesa8')->nullable();
            $table->string('psikiatri1')->nullable();
            $table->string('psikiatri2')->nullable();
            $table->string('psikiatri3')->nullable();
            $table->string('psikiatri4')->nullable();
            $table->string('psikiatri5')->nullable();
            $table->string('psikiatri6')->nullable();
            $table->string('psikiatri7')->nullable();
            $table->string('psikiatri8')->nullable();
            $table->string('psikiatri9')->nullable();
            $table->string('psikiatri10')->nullable();
            $table->string('psikiatri11')->nullable();
            $table->string('psikiatri12')->nullable();
            $table->string('psikiatri13')->nullable();
            $table->string('psikiatri14')->nullable();
            $table->string('psikiatri15')->nullable();
            $table->string('psikiatri16')->nullable();
            $table->string('psikiatri17')->nullable();
            $table->string('psikiatri18')->nullable();
            $table->string('psikiatri19')->nullable();
            $table->string('penunjang1')->nullable();
            $table->string('penunjang2')->nullable();
            $table->string('penunjang3')->nullable();
            $table->string('penunjang4')->nullable();
            $table->string('penilaian1')->nullable();
            $table->string('penilaian2')->nullable();
            $table->string('diagnosis1')->nullable();
            $table->string('diagnosis2')->nullable();
            $table->string('diagnosis3')->nullable();
            $table->string('diagnosis4')->nullable();
            $table->string('diagnosis5')->nullable();
            $table->string('rencana1')->nullable();
            $table->string('rencana2')->nullable();
            $table->string('rencana3')->nullable();
            $table->string('instruksi1',1)->nullable();
            $table->string('Instruksi2')->nullable();
            $table->string('Instruksi3')->nullable();
            $table->string('instruksi4',1)->nullable();
            $table->string('instruksi5')->nullable();
            $table->string('instruksi6')->nullable();
            $table->string('instruksi7',1)->nullable();
            $table->string('instruksi8')->nullable();
            $table->string('tanggal')->nullable();
            $table->string('jam')->nullable();
            $table->string('nama_dokter')->nullable();
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
        Schema::dropIfExists('ri_asesmen_awal_dokter');
    }
}
