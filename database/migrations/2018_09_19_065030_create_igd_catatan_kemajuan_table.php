<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIgdCatatanKemajuanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('igd_catatan_kemajuan', function (Blueprint $table) {
            $table->integer('id_regis')->reference('id_pasien')->on('identifikasi');
            $table->string('tanggal');
            $table->string('jam');
            $table->string('catatan_kemajuan', 50);
            $table->string('tindakan_terapi', 30);
            $table->string('nama_user');
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
        Schema::dropIfExists('igd_catatan_kemajuan');
    }
}
