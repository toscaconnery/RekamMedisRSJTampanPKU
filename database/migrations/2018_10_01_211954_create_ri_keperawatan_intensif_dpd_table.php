<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiKeperawatanIntensifDpdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ri_keperawatan_intensif_dpd', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_regis')->reference('id_pasien')->on('identifikasi');
            $table->string('tanggal',10)->nullable();
            $table->string('jam',5)->nullable();
            $table->string('ruangan')->nullable();
            $table->string('diagnosa_medis')->nullable();
            $table->string('tindakan_1',3)->nullable();
            $table->string('tindakan_2',3)->nullable();
            $table->string('tindakan_3',3)->nullable();
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
        Schema::dropIfExists('ri_keperawatan_intensif_dpd');
    }
}
