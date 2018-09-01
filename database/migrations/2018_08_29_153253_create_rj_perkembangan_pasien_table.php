<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRjPerkembanganPasienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rj_perkembangan_pasien', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_regis')->reference('id')->on('identifikasi');
            $table->string('waktu');
            $table->string('profesi');
            $table->integer('user')->reference('id')->on('users');
            $table->string('keterangan');
            $table->boolean('ttd');
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
        Schema::dropIfExists('rj_perkembangan_pasien');
    }
}
