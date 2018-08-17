<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerkembanganPasienIgdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perkembangan_pasien_igd', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_regis')->reference('id')->on('identifikasi');
            $table->integer('id_user')->reference('id_user')->on('users');
            $table->dateTime('waktu');
            $table->string('hasil_pemeriksaan', 100);
            $table->boolean('status_verifikasi');
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
        Schema::dropIfExists('perkembangan_pasien_igd');
    }
}
