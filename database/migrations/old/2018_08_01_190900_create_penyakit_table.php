<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenyakitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penyakit', function (Blueprint $table) {
            $table->integer('id_asesmen_tk')->reference('id_asesmen_tk')->on('asesmen_tk_psikolog');
            $table->string('penyakit', 20);
            $table->string('tahun', 21);
            $table->string('lamanya', 22);
            $table->string('keterangan', 23);
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
        Schema::dropIfExists('penyakit');
    }
}
