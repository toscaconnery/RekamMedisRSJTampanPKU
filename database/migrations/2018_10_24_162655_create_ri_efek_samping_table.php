<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiEfekSampingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ri_efek_samping', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_regis')->reference('id_pasien')->on('identifikasi');
            $table->string('field1')->nullable();
            $table->string('field2')->nullable();
            $table->string('field3')->nullable();
            $table->string('field4')->nullable();
            $table->string('field5')->nullable();
            $table->string('field6')->nullable();
            $table->string('field7')->nullable();
            $table->string('field8')->nullable();
            $table->string('field9')->nullable();
            $table->string('field10')->nullable();
            $table->string('field11')->nullable();
            $table->string('field12')->nullable();
            $table->string('field13')->nullable();
            $table->string('field14')->nullable();
            $table->string('field15')->nullable();
            $table->string('field16')->nullable();
            $table->string('field17')->nullable();
            $table->string('field18')->nullable();
            $table->string('obat',6000)->nullable();
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
        Schema::dropIfExists('ri_efek_samping');
    }
}
