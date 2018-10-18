<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiEdukasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ri_edukasi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_regis')->reference('id_pasien')->on('identifikasi');
            $table->string('medis_materi')->nullable();
            $table->string('medis_metode')->nullable();
            $table->string('medis_nama_edukator')->nullable();
            $table->string('medis_paraf_pasien')->default(False);
            $table->string('medis_paraf_edukator')->default(False);

            $table->string('mj_materi')->nullable();
            $table->string('mj_metode')->nullable();
            $table->string('mj_nama_edukator')->nullable();
            $table->string('mj_paraf_pasien')->default(False);
            $table->string('mj_paraf_edukator')->default(False);

            $table->string('psikologis_materi')->nullable();
            $table->string('psikologis_metode')->nullable();
            $table->string('psikologis_nama_edukator')->nullable();
            $table->string('psikologis_paraf_pasien')->default(False);
            $table->string('psikologis_paraf_edukator')->default(False);

            $table->string('keperawatan_materi')->nullable();
            $table->string('keperawatan_metode')->nullable();
            $table->string('keperawatan_nama_edukator')->nullable();
            $table->string('keperawatan_paraf_pasien')->default(False);
            $table->string('keperawatan_paraf_edukator')->default(False);

            $table->string('farmasi_materi')->nullable();
            $table->string('farmasi_metode')->nullable();
            $table->string('farmasi_nama_edukator')->nullable();
            $table->string('farmasi_paraf_pasien')->default(False);
            $table->string('farmasi_paraf_edukator')->default(False);

            $table->string('nutrisi_materi')->nullable();
            $table->string('nutrisi_metode')->nullable();
            $table->string('nutrisi_nama_edukator')->nullable();
            $table->string('nutrisi_paraf_pasien')->default(False);
            $table->string('nutrisi_paraf_edukator')->default(False);

            $table->string('kerohanian_materi')->nullable();
            $table->string('kerohanian_metode')->nullable();
            $table->string('kerohanian_nama_edukator')->nullable();
            $table->string('kerohanian_paraf_pasien')->default(False);
            $table->string('kerohanian_paraf_edukator')->default(False);

            $table->string('rehabilitasi_materi')->nullable();
            $table->string('rehabilitasi_metode')->nullable();
            $table->string('rehabilitasi_nama_edukator')->nullable();
            $table->string('rehabilitasi_paraf_pasien')->default(False);
            $table->string('rehabilitasi_paraf_edukator')->default(False);

            $table->string('dt_materi')->nullable();
            $table->string('dt_metode')->nullable();
            $table->string('dt_evaluasi')->nullable();
            $table->string('dt_nama_edukator')->nullable();
            $table->string('dt_paraf_pasien')->default(False);
            $table->string('dt_paraf_edukator')->default(False);

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
        Schema::dropIfExists('ri_edukasi');
    }
}
