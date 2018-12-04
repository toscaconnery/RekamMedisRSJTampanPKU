<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiPenggunaanObatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ri_penggunaan_obat', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_regis')->reference('id_pasien')->on('identifikasi');
            $table->string('obat')->nullable();
            $table->string('tanggal_penggunaan',10);
            $table->string('tanggal_query',10);
            $table->string('waktu_penggunaan_1')->default(0);
            $table->string('waktu_penggunaan_2')->default(0);
            $table->string('waktu_penggunaan_3')->default(0);
            $table->string('waktu_penggunaan_4')->default(0);
            $table->string('perawat')->nullable();
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
        Schema::dropIfExists('ri_penggunaan_obat');
    }
}
