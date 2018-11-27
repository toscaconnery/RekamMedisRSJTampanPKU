<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiRencanaKlien5Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ri_rencana_klien_5', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_regis')->reference('id_pasien')->on('identifikasi');
            $table->string('tanggal_pengkajian',10);
            $table->string('jam_pengkajian',8);
            $table->string('ruangan');
            $table->string('diagnosa_medis')->nullable();
            $table->string('tanggal_1',10)->nullable();
            $table->string('tanggal_2',10)->nullable();
            $table->string('tanggal_3',10)->nullable();
            $table->string('tanggal_4',10)->nullable();
            $table->string('tanggal_5',10)->nullable();
            $table->string('tanggal_6',10)->nullable();
            $table->string('tanggal_7',10)->nullable();
            $table->string('tanggal_8',10)->nullable();
            $table->string('nodx_1')->nullable();
            $table->string('nodx_2')->nullable();
            $table->string('nodx_3')->nullable();
            $table->string('nodx_4')->nullable();
            $table->string('nodx_5')->nullable();
            $table->string('nodx_6')->nullable();
            $table->string('nodx_7')->nullable();
            $table->string('nodx_8')->nullable();
            $table->string('dxk_1')->nullable();
            $table->string('dxk_2')->nullable();
            $table->string('dxk_3')->nullable();
            $table->string('dxk_4')->nullable();
            $table->string('dxk_5')->nullable();
            $table->string('dxk_6')->nullable();
            $table->string('dxk_7')->nullable();
            $table->string('dxk_8')->nullable();
            $table->string('t1')->nullable();
            $table->string('t1b')->nullable();
            $table->string('t3')->nullable();
            $table->string('t3b')->nullable();
            $table->string('k1')->nullable();
            $table->string('k2')->nullable();
            $table->string('k4')->nullable();
            $table->string('k5')->nullable();
            $table->string('k6')->nullable();
            $table->string('k6b')->nullable();
            $table->string('k7')->nullable();
            $table->string('k7b')->nullable();
            $table->string('k8')->nullable();
            $table->string('k8b')->nullable();
            $table->string('k8c')->nullable();
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
        Schema::dropIfExists('ri_rencana_klien_5');
    }
}
