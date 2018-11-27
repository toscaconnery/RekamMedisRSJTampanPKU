<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiRencanaKlien2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ri_rencana_klien_2', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_regis')->reference('id_pasien')->on('identifikasi');
            $table->string('tanggal_pengkajian',10);
            $table->string('jam_pengkajian',8);
            $table->string('ruangan');
            $table->string('diagnosa_medis')->nullable();
            $table->string('tanggal_1',10)->nullable();
            $table->string('tanggal_2',10)->nullable();
            $table->string('nodx_1')->nullable();
            $table->string('nodx_2')->nullable();
            $table->string('dxk_1')->nullable();
            $table->string('dxk_2')->nullable();
            $table->string('t1')->nullable();
            $table->string('k1')->nullable();
            $table->string('k2')->nullable();
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
        Schema::dropIfExists('ri_rencana_klien_2');
    }
}
