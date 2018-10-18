<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHumptyDumptyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('humpty_dumpty', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_regis')->reference('id_pasien')->on('identifikasi');
            $table->string('jenis_form');
            $table->string('usia');
            $table->string('diagnosis');
            $table->string('gangguan_kognitif');
            $table->string('faktor_lingkungan');
            $table->string('waktu_respon_obat');
            $table->string('penggunaan_obat');
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
        Schema::dropIfExists('humpty_dumpty');
    }
}
