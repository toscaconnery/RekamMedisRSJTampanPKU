<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLayananKonsultasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('layanan_konsultasi', function (Blueprint $table) {
            $table->integer('id_regis')->reference('id_regis')->on('identifikasi');
            $table->integer('id_asesmen_tk')->reference('id_asesmen_tk')->on('asesmen_tk_psikolog');
            $table->string('anamnesis', 30);
            $table->string('fisik', 30);
            $table->string('psikiatrik', 30);
            $table->string('penunjang', 30);
            $table->string('diagnosis', 30);
            $table->string('psikofamaka', 30);
            $table->string('terapi_perilaku', 30);
            $table->string('sensori_integrasi', 30);
            $table->string('okupasi', 30);
            $table->string('wicara', 30);
            $table->string('remedial', 30);
            $table->string('play', 30);
            $table->string('storytelling', 30);
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
        Schema::dropIfExists('layanan_konsultasi');
    }
}
