<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiRencanaKlienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ri_rencana_klien', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_regis')->reference('id_pasien')->on('identifikasi');
            $table->boolean('ri_rencana_klien_1')->default(False);
            $table->boolean('ri_rencana_klien_2')->default(False);
            $table->boolean('ri_rencana_klien_3')->default(False);
            $table->boolean('ri_rencana_klien_4')->default(False);
            $table->boolean('ri_rencana_klien_5')->default(False);
            $table->boolean('ri_rencana_klien_6')->default(False);
            $table->boolean('ri_rencana_klien_7')->default(False);
            $table->string('ri_rencana_klien_1_tanggal')->nullable();
            $table->string('ri_rencana_klien_2_tanggal')->nullable();
            $table->string('ri_rencana_klien_3_tanggal')->nullable();
            $table->string('ri_rencana_klien_4_tanggal')->nullable();
            $table->string('ri_rencana_klien_5_tanggal')->nullable();
            $table->string('ri_rencana_klien_6_tanggal')->nullable();
            $table->string('ri_rencana_klien_7_tanggal')->nullable();
            $table->string('ri_rencana_klien_1_pengisi')->nullable();
            $table->string('ri_rencana_klien_2_pengisi')->nullable();
            $table->string('ri_rencana_klien_3_pengisi')->nullable();
            $table->string('ri_rencana_klien_4_pengisi')->nullable();
            $table->string('ri_rencana_klien_5_pengisi')->nullable();
            $table->string('ri_rencana_klien_6_pengisi')->nullable();
            $table->string('ri_rencana_klien_7_pengisi')->nullable();
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
        Schema::dropIfExists('ri_rencana_klien');
    }
}
