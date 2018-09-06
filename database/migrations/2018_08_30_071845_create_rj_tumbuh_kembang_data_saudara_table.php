<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRjTumbuhKembangDataSaudaraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rj_tumbuh_kembang_data_saudara', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_regis')->reference('id')->on('identifikasi');
            $table->string('status');
            $table->string('umur');
            $table->string('jenis_kelamin');
            $table->string('pendidikan');
            $table->string('pekerjaan');
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
        Schema::dropIfExists('rj_tumbuh_kembang_data_saudara');
    }
}
