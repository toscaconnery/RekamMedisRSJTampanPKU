<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsesmenMasalahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asesmen_masalah', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_regis')->reference('id_regis')->on('identifikasi');
            $table->date('tanggal');
            $table->string('target', 30);
            $table->string('perkembangan', 30);
            $table->string('pelaksana', 30);
            $table->string('signature', 30);
            $table->string('tumbuh_kembang', 300);
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
        Schema::dropIfExists('asesmen_masalah');
    }
}
