<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRJAAAsesmenKeperawatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rj_aa_asesmen_keperawatan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_regis')->reference('id')->on('identifikasi');
            $table->integer('id_user')->reference('id_user')->on('users');
            $table->string('alasan_kunjungan', 100);
            $table->boolean('hubungan_keluarga');
            $table->string('status_psikososial', 20);
            $table->string('konsep_diri', 20);
            $table->string('persepsi', 20);
            $table->string('motorik', 20);
            $table->string('penampilan', 20);
            $table->string('pikir', 40);
            $table->string('perasaan', 20);
            $table->string('status_fungsional', 20);
            $table->string('perlu_bantuan', 40)->nullable();
            $table->dateTime('waktu_laporan');
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
        Schema::dropIfExists('rjaaasesmenkeperawatan');
    }
}