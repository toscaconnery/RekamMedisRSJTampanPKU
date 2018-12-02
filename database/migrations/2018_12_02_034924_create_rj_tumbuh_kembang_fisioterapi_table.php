<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRjTumbuhKembangFisioterapiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rj_tumbuh_kembang_fisioterapi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_regis')->reference('id_pasien')->on('identifikasi');
            $table->string('f1')->nullable();
            $table->string('f2')->nullable();
            $table->string('f3')->nullable();
            $table->string('f4')->nullable();
            $table->string('f5')->nullable();
            $table->string('f6')->nullable();
            $table->string('f7')->nullable();
            $table->string('f8')->nullable();
            $table->string('f9')->nullable();
            $table->string('f10')->nullable();
            $table->string('f11')->nullable();
            $table->string('f12')->nullable();
            $table->string('f13')->nullable();
            $table->string('f14')->nullable();
            $table->string('f15')->nullable();
            $table->string('f16')->nullable();
            $table->string('f17')->nullable();
            $table->string('f18')->nullable();
            $table->string('f19')->nullable();
            $table->string('f20')->nullable();
            $table->string('f21')->nullable();
            $table->string('f22')->nullable();
            $table->string('f23')->nullable();
            $table->string('f24')->nullable();
            $table->string('f25')->nullable();
            $table->string('f26')->nullable();
            $table->string('f27')->nullable();
            $table->string('f28')->nullable();
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
        Schema::dropIfExists('rj_tumbuh_kembang_fisioterapi');
    }
}
