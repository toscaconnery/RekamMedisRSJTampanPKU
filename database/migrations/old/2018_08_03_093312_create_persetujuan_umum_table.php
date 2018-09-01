<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersetujuanUmumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persetujuan_umum', function (Blueprint $table) {
            $table->increments('id_persetujuan_umum');
            $table->integer('id_regis')->reference('id')->on('identifikasi');
            $table->integer('id_admission')->reference('id_user')->on('users');
            $table->string('keluarga', 30);
            $table->boolean('signature');
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
        Schema::dropIfExists('persetujuan_umum');
    }
}
