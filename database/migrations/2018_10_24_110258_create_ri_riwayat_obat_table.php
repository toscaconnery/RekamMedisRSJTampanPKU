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
            $table->string('field1',10)->nullable();
            $table->string('field2',50)->nullable();
            $table->string('field3',100)->nullable();
            $table->string('field4',1)->nullable();
            $table->string('field5')->nullable();
            $table->string('field6')->nullable();
            $table->string('field7',20)->nullable();
            $table->string('field8')->nullable();
            $table->string('field9',20)->nullable();
            $table->string('field10')->nullable();
            $table->string('field11')->nullable();
            $table->string('field12',20)->nullable();
            $table->string('field13',10)->nullable();
            $table->string('resep',6000)->nullable();
            $table->string('nonresep',6000)->nullable();
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
