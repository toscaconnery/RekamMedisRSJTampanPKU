<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiRiwayatObatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ri_riwayat_obat', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_regis')->reference('id_pasien')->on('identifikasi');
            $table->string('tanggal_masuk')->nullable();
            $table->string('nomor_farmasi')->nullable();
            $table->string('dokter_ruangan')->nullable();
            $table->boolean('non_alergi')->default(True);
            $table->string('generik',5000)->nullable();
            $table->string('nonresep',5000)->nullable();
            $table->string('sio_1')->nullable();
            $table->string('sio_2')->nullable();
            $table->string('sio_3')->nullable();
            $table->string('sio_4')->nullable();
            $table->string('sio_5')->nullable();
            $table->string('lainnya')->nullable();
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
        Schema::dropIfExists('ri_riwayat_obat');
    }
}
