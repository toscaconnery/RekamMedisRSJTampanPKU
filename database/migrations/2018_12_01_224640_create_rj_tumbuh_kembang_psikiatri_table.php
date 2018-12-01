<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRjTumbuhKembangPsikiatriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rj_tumbuh_kembang_psikiatri', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_regis')->reference('id_pasien')->on('identifikasi');
            $table->string('f1')->nullable();
            $table->string('f2')->nullable();
            $table->string('f3')->nullable();
            $table->string('f4')->nullable();
            $table->string('f5')->nullable();
            $table->string('f6')->nullable();
            $table->string('f7')->nullable();
            $table->string('t1')->nullable();
            $table->string('r1')->nullable();
            $table->string('t2')->nullable();
            $table->string('r2')->nullable();
            $table->string('t3')->nullable();
            $table->string('r3')->nullable();
            $table->string('t4')->nullable();
            $table->string('r4')->nullable();
            $table->string('t5')->nullable();
            $table->string('r5')->nullable();
            $table->string('t6')->nullable();
            $table->string('r6')->nullable();
            $table->string('t7')->nullable();
            $table->string('r7')->nullable();
            $table->string('t8')->nullable();
            $table->string('r8')->nullable();
            $table->string('tanggal')->nullable();
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
        Schema::dropIfExists('rj_tumbuh_kembang_psikiatri');
    }
}
