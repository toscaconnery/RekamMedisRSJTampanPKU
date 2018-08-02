<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnakTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anak', function (Blueprint $table) {
            $table->increments('id_anak');
            $table->integer('id_asesmen_tk')->reference('id_asesmen_tk')->on('asesmen_tk_psikolog');
            $table->string('nama', 30);
            $table->string('jenis_kelamin', 12);
            $table->integer('usia');
            $table->integer('sekolah_pekerjaan', 30);
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
        Schema::dropIfExists('anak');
    }
}
