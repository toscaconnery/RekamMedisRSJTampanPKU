<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRJFisikGiziTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rj_fisik_gizi', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_regis')->reference('id_pasien')->on('identifikasi');
            $table->string('td', 10)->nullable();
            $table->string('tb', 10)->nullable();
            $table->string('nadi', 10)->nullable();
            $table->string('bb', 10)->nullable();
            $table->string('pernafasan', 10)->nullable();
            $table->string('golongan_darah', 4)->nullable();
            $table->string('suhu', 10)->nullable();
            $table->smallInteger('must_1')->nullable();
            $table->smallInteger('must_2')->nullable();
            $table->boolean('must_3')->nullable();
            $table->integer('bb_berkurang')->nullable();
            $table->string('diagnosis_khusus')->nullable();
            $table->integer('skor_must')->nullable();
            $table->boolean('sk_1')->nullable();
            $table->boolean('sk_2')->nullable();
            $table->boolean('sk_3')->nullable();
            $table->boolean('sk_4')->nullable();
            $table->integer('skor_sk')->nullable();
            $table->string('penyakit_malnutrisi', 50)->nullable();
            $table->boolean('pemberitahuan')->nullable();
            $table->string('waktu_pemberitahuan', 5)->nullable();
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
        Schema::dropIfExists('rj_fisik_gizi');
    }
}
