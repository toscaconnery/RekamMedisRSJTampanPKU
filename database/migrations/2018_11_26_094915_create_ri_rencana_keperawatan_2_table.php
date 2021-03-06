<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiRencanaKeperawatan2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ri_rencana_keperawatan_2', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_regis')->reference('id_pasien')->on('identifikasi');
            $table->string('tanggal_pengkajian',10);
            $table->string('jam_pengkajian',8);
            $table->string('ruangan');
            $table->string('diagnosa_medis')->nullable();
            $table->string('ti1',3)->nullable();
            $table->string('ti2',3)->nullable();
            $table->string('ti3',3)->nullable();
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
        Schema::dropIfExists('ri_rencana_keperawatan_2');
    }
}
