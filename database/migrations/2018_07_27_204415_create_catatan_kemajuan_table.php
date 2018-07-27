<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatatanKemajuanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catatan_kemajuan', function (Blueprint $table) {
            $table->increments('id_catatan');
            $table->integer('id_regis')->reference('id_regis')->on('identifikasi');
            $table->dateTime('waktu');
            $table->string('catatan_kemajuan', 50);
            $table->string('tindakan_terapi', 30);
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
        Schema::dropIfExists('catatan_kemajuan');
    }
}
