<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDpjpCasemanagerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dpjp_casemanager', function (Blueprint $table) {
            $table->increments('id_dpjp');
            $table->integer('id_regis')->reference('id_regis')->on('identifikasi');
            $table->integer('id_user')->reference('id_user')->on('users');
            $table->string('diagnosa', 30);
            $table->string('ruang', 10);
            $table->string('dpjp', 30);
            $table->string('tim_dpjp1', 30);
            $table->string('tim_dpjp2', 30);
            $table->string('pengalihan_dpjp', 30);
            $table->date('tanggal');
            $table->string('alasan', 30);
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
        Schema::dropIfExists('dpjp_casemanager');
    }
}
