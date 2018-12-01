<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListDocumentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_document', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_regis')->reference('id_pasien')->on('identifikasi');
            $table->boolean('rj_asesmen_awal_perawat')->default(False);
            $table->boolean('rj_asesmen_awal_dokter')->default(False);
            $table->boolean('rj_asesmen_awal_gigi_perawat')->default(False);
            $table->boolean('rj_asesmen_awal_gigi_dokter')->default(False);
            $table->boolean('rj_informasi_edukasi')->default(False);
            $table->boolean('rj_lapor_rehabilitasi')->default(False);
            $table->boolean('rj_identifikasi_stresor')->default(False);
            $table->boolean('rj_tes_konseling_hiv')->default(False);
            $table->boolean('rj_izin_vct_hiv')->default(False);
            $table->boolean('rj_hiv_anti_retroval')->default(False);
            $table->boolean('rj_perkembangan_pasien')->default(False);
            $table->boolean('rj_asesmen_awal_tumbuh_kembang_psikolog')->default(False);
            $table->boolean('rj_asesmen_awal_tumbuh_kembang_dokter')->default(False);
            $table->boolean('rj_resume')->default(False);
            $table->boolean('igd_triase')->default(False);
            $table->boolean('igd_asesmen_awal_rawat_darurat_perawat')->default(False);
            $table->boolean('igd_asesmen_awal_rawat_darurat_dokter')->default(False);
            $table->boolean('igd_suicide_fisik')->default(False);
            $table->boolean('igd_catatan_kemajuan')->default(False);
            $table->boolean('igd_catatan_perkembangan')->default(False);
            $table->boolean('ri_surat_persetujuan')->default(False);
            $table->boolean('ri_resume_medis')->default(False);
            $table->boolean('ri_dpjp_case')->default(False);
            $table->boolean('ri_persetujuan_umum')->default(False);
            $table->boolean('ri_hak_kewajiban')->default(False);
            $table->boolean('ri_asesmen')->default(False);
            $table->boolean('ri_suicide_fisik')->default(False);
            $table->boolean('ri_asesmen_awal_keperawatan_napza')->default(False);
            $table->boolean('ri_penilaian_edmunson')->default(False);
            $table->boolean('ri_risiko_nyeri')->default(False);
            $table->boolean('ri_catatan_perkembangan')->default(False);
            $table->boolean('ri_keperawatan_intensif')->default(False);
            $table->boolean('ri_evaluasi_keperawatan')->default(False);
            $table->boolean('ri_monitoring_observasi')->default(False);
            $table->boolean('ri_laboratorium')->default(False);
            $table->boolean('ri_rencana_napza')->default(False);
            $table->boolean('ri_penggunaan_obat')->default(False);
            $table->boolean('ri_riwayat_obat')->default(False);
            $table->boolean('ri_efek_samping')->default(False);
            $table->boolean('ri_asuhan_gizi')->default(False);
            $table->boolean('ri_edukasi')->default(False);
            $table->boolean('ri_rencana_pemulangan')->default(False);
            $table->boolean('ri_panss_ec')->default(False);
            $table->boolean('ri_penilaian_panss')->default(False);
            $table->boolean('ri_lembar_konsultasi')->default(False);
            $table->boolean('ri_transfer_internal')->default(False);
            $table->boolean('ri_transfer_eksternal')->default(False);
            $table->boolean('ri_pemberian_informasi')->default(False);
            $table->boolean('ri_pemeriksaan_psikologis')->default(False);
            $table->boolean('ri_serah_terima')->default(False);
            $table->boolean('ri_surat_spd')->default(False);
            $table->boolean('ri_permintaan_privasi')->default(False);
            $table->boolean('ri_permintaan_rohani')->default(False);
            $table->boolean('ri_permintaan_second')->default(False);
            $table->boolean('ri_do_not_resucitate')->default(False);
            $table->boolean('ri_instruksi_do_not_resucitate')->default(False);
            $table->boolean('ri_persetujuan_tindakan')->default(False);
            $table->boolean('ri_penolakan_tindakan')->default(False);
            $table->boolean('ri_pulang_paksa')->default(False);
            $table->boolean('ri_residen')->default(False);
            $table->boolean('ri_surat_kuasa')->default(False);
            $table->boolean('ri_pernyataan')->default(False);
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
        Schema::dropIfExists('list_document');
    }
}
