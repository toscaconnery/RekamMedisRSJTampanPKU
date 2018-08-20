<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvaluasiTindakanKeperawatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluasi_tindakan_keperawatan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_regis')->reference('id')->on('implementasi');
            $table->text('implementasi');
            $table->text('evaluasi');
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
        Schema::dropIfExists('evaluasi_tindakan_keperawatan');
    }
}
