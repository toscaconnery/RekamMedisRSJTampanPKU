<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiDoNotResucitateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ri_do_not_resucitate', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_regis')->reference('id_pasien')->on('identifikasi');
            $table->string('nama')->nullable();
            $table->string('alamat')->nullable();
            $table->string('agama')->nullable();
            $table->string('yang_menyatakan')->nullable();
            $table->string('saksi_keluarga')->nullable();
            $table->string('saksi_pemberi_asuhan')->nullable();
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
        Schema::dropIfExists('ri_do_not_resucitate');
    }
}
