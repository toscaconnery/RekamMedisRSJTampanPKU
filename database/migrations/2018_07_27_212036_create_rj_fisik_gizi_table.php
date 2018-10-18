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
            $table->string('td', 10);
            $table->string('tb', 10);
            $table->string('nadi', 10);
            $table->string('bb', 10);
            $table->string('pernafasan', 10);
            $table->string('golongan_darah', 4);
            $table->string('suhu', 10);
            $table->smallInteger('must_1');
            $table->smallInteger('must_2');
            $table->boolean('must_3');
            $table->integer('bb_berkurang')->nullable();
            $table->string('diagnosis_khusus')->nullable();
            $table->integer('skor_must');
            $table->boolean('sk_1');
            $table->boolean('sk_2');
            $table->boolean('sk_3');
            $table->boolean('sk_4');
            $table->integer('skor_sk');
            $table->string('penyakit_malnutrisi', 50);
            $table->boolean('pemberitahuan');
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
