<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRJDiagnosaKeperawatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rj_diagnosa_keperawatan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_regis')->reference('id')->on('identifikasi');
            $table->string('umum');
            $table->string('umum_lainnya')->nullable();
            $table->string('jiwa');
            $table->string('jiwa_lainnya')->nullable();
            $table->string('obat_parental');
            $table->string('ekg');
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
        Schema::dropIfExists('rj_diagnosa_keperawatan');
    }
}
