<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RincianPasien;
use App\Models\RIAsuhanGizi;
use App\Models\RIAsuhanGiziListKonsultasi;
use App\Models\ListDocument;
use Session;
use DateTime;
use View;

class RIAsuhanGiziController extends Controller
{
    public function __construct()
    {
    	$this->middleware('haspatient');
    	$this->data['title'] = 'Asuhan Gizi';
    }

    public function count_age()
    {
    	//tanggal lahir
        $tanggal_lahir = Session::get('tanggal_lahir');
        $tanggal = substr($tanggal_lahir, 0, -8);
        $bulan = substr($tanggal_lahir, 3, -5);
        $tahun = substr($tanggal_lahir, 6);
        $born = new DateTime($tahun.'-'.$bulan.'-'.$tanggal);
        $today = new DateTime();
        $usia = $born->diff($today)->y;
        $usia .= ' Tahun';
		return $usia;    	
    }

    public function get_ri_asuhan_gizi()
    {
    	$id_pasien = Session::get('id_pasien');
    	$this->data['umur'] = $this->count_age();
    	$rincian_pasien = RincianPasien::where('no_rm', $id_pasien)->first();
    	$this->data['etnik'] = $rincian_pasien->budaya;
    	$this->data['agama'] = $rincian_pasien->agama;
    	$jk = Session::get('jenis_kelamin');
    	if($jk == 'L') {
    		$this->data['jenis_kelamin'] = 'Laki-laki';
    	}
    	else {
    		$this->data['jenis_kelamin'] = 'Perempuan';
    	}
    	$this->data['pekerjaan'] = $rincian_pasien->pekerjaan;
    	$this->data['pendidikan'] = $rincian_pasien->pendidikan;
    	return view('page.ri.asuhan_gizi', $this->data);
    }

    public function post_ri_asuhan_gizi(Request $request)
    {
    	$data = new RIAsuhanGizi;
    	$data->id_regis = Session::get('id_pasien');
    	$data->umur = $request->umur;
		$data->etnik_agama = $request->etnik_agama;
		$data->jenis_kelamin = $request->jenis_kelamin;
		$data->kemampuan_baca = $request->kemampuan_baca;
		$data->pekerjaan = $request->pekerjaan;
		$data->pendidikan = $request->pendidikan;
		$data->peran_dalam_keluarga = $request->peran_dalam_keluarga;
		$data->keterbatasan_fisik = $request->keterbatasan_fisik;
		$data->mobilitas = $request->mobilitas;
		$data->perokok = $request->perokok;
		$data->riwayat = $request->riwayat;
		$data->riwayat_sosial_ekonomi = $request->riwayat_sosial_ekonomi;
		$data->diagnosa_dokter = $request->diagnosa_dokter;
		$data->alergi_makanan = $request->alergi_makanan;
		$data->ketidaksukaan_makanan = $request->ketidaksukaan_makanan;
		$data->pantangan_makanan = $request->pantangan_makanan;
		$data->konseling_sebelumnya = $request->konseling_sebelumnya;
		$data->keterangan_konseling = $request->keterangan_konseling;
		$data->bb_saat_ini = $request->bb_saat_ini;
		$data->pbtb = $request->pbtb;
		$data->imt = $request->imt;
		$data->status_gizi = $request->status_gizi;
		$data->bb_biasanya = $request->bb_biasanya;
		$data->penurunan_bb = $request->penurunan_bb;
		$data->penurunan_bb_adj = $request->penurunan_bb_adj;
		$data->pengukuran_lainnya = $request->pengukuran_lainnya;
		$data->biokimia_terkait = $request->biokimia_terkait;
		$data->fk1 = $request->fk1;
		$data->fk2 = $request->fk2;
		$data->fk3 = $request->fk3;
		$data->fk4 = $request->fk4;
		$data->fk5 = $request->fk5;
		$data->fk6 = $request->fk6;
		$data->fk7 = $request->fk7;
		$data->fk8 = $request->fk8;
		$data->fk9 = $request->fk9;
		$data->fk10 = $request->fk10;
		$data->fk11 = $request->fk11;
		$data->fk12 = $request->fk12;
		$data->fk13 = $request->fk13;
		$data->fk14 = $request->fk14;
		$data->fk15 = $request->fk15;
		$data->fk16 = $request->fk16;
		$data->fk17 = $request->fk17;
		$data->fk18 = $request->fk18;
		$data->fk19 = $request->fk19;
		$data->diagnosa_gizi = $request->diagnosa_gizi;
		$data->tujuan_intervensi = $request->tujuan_intervensi;
		$data->target_intervensi = $request->target_intervensi;
		$data->rencana_monitoring_evaluasi = $request->rencana_monitoring_evaluasi;
		$data->p_gr_nasi = $request->p_gr_nasi;
		$data->p_urt_nasi = $request->p_urt_nasi;
		$data->p_gr_lauk = $request->p_gr_lauk;
		$data->p_urt_lauk = $request->p_urt_lauk;
		$data->p_gr_sayur = $request->p_gr_sayur;
		$data->p_urt_sayur = $request->p_urt_sayur;
		$data->p_nama_snack = $request->p_nama_snack;
		$data->p_gr_snack = $request->p_gr_snack;
		$data->p_urt_snack = $request->p_urt_snack;
		$data->energi_pagi = $request->energi_pagi;
		$data->protein_pagi = $request->protein_pagi;
		$data->lemak_pagi = $request->lemak_pagi;
		$data->kh_pagi = $request->kh_pagi;
		$data->s_gr_nasi = $request->s_gr_nasi;
		$data->s_urt_nasi = $request->s_urt_nasi;
		$data->s_gr_lauk = $request->s_gr_lauk;
		$data->s_urt_lauk = $request->s_urt_lauk;
		$data->s_gr_tempe = $request->s_gr_tempe;
		$data->s_urt_tempe = $request->s_urt_tempe;
		$data->s_gr_sayur = $request->s_gr_sayur;
		$data->s_urt_sayur = $request->s_urt_sayur;
		$data->s_gr_buah = $request->s_gr_buah;
		$data->s_urt_buah = $request->s_urt_buah;
		$data->s_nama_snack = $request->s_nama_snack;
		$data->s_gr_snack = $request->s_gr_snack;
		$data->s_urt_snack = $request->s_urt_snack;
		$data->energi_siang = $request->energi_siang;
		$data->protein_siang = $request->protein_siang;
		$data->lemak_siang = $request->lemak_siang;
		$data->kh_siang = $request->kh_siang;
		$data->m_gr_nasi = $request->m_gr_nasi;
		$data->m_urt_nasi = $request->m_urt_nasi;
		$data->m_gr_lauk = $request->m_gr_lauk;
		$data->m_urt_lauk = $request->m_urt_lauk;
		$data->m_gr_tempe = $request->m_gr_tempe;
		$data->m_urt_tempe = $request->m_urt_tempe;
		$data->m_gr_sayur = $request->m_gr_sayur;
		$data->m_urt_sayur = $request->m_urt_sayur;
		$data->m_gr_buah = $request->m_gr_buah;
		$data->m_urt_buah = $request->m_urt_buah;
		$data->m_nama_snack = $request->m_nama_snack;
		$data->m_gr_snack = $request->m_gr_snack;
		$data->m_urt_snack = $request->m_urt_snack;
		$data->energi_malam = $request->energi_malam;
		$data->protein_malam = $request->protein_malam;
		$data->lemak_malam = $request->lemak_malam;
		$data->kh_malam = $request->kh_malam;
		$data->jumlah_1 = $request->jumlah_1;
		$data->jumlah_2 = $request->jumlah_2;
		$data->jumlah_3 = $request->jumlah_3;
		$data->jumlah_4 = $request->jumlah_4;
		$data->jumlah_5 = $request->jumlah_5;
		$data->jumlah_6 = $request->jumlah_6;
		$data->jumlah_7 = $request->jumlah_7;
		$data->jumlah_8 = $request->jumlah_8;
		$data->jumlah_9 = $request->jumlah_9;
		$data->jumlah_10 = $request->jumlah_10;
		$data->jumlah_11 = $request->jumlah_11;
		$data->jumlah_12 = $request->jumlah_12;
		$data->jumlah_13 = $request->jumlah_13;
		$data->jumlah_14 = $request->jumlah_14;
		$data->jumlah_15 = $request->jumlah_15;
		$data->jumlah_16 = $request->jumlah_16;
		$data->jumlah_17 = $request->jumlah_17;
		$data->jumlah_18 = $request->jumlah_18;
		$data->jumlah_19 = $request->jumlah_19;
		$data->jumlah_20 = $request->jumlah_20;
		$data->jumlah_21 = $request->jumlah_21;
		$data->jumlah_22 = $request->jumlah_22;
		$data->jumlah_23 = $request->jumlah_23;
		$data->jumlah_24 = $request->jumlah_24;
		$data->jumlah_25 = $request->jumlah_25;
		$data->jumlah_26 = $request->jumlah_26;
		$data->jumlah_27 = $request->jumlah_27;
		$data->jumlah_28 = $request->jumlah_28;
		$data->jumlah_29 = $request->jumlah_29;
		$data->jumlah_30 = $request->jumlah_30;
		$data->jumlah_31 = $request->jumlah_31;
		$data->jumlah_32 = $request->jumlah_32;
		$data->jumlah_33 = $request->jumlah_33;
		$data->jumlah_34 = $request->jumlah_34;
		$data->jumlah_35 = $request->jumlah_35;
		$data->jumlah_36 = $request->jumlah_36;
		$data->jumlah_37 = $request->jumlah_37;
		$data->jumlah_38 = $request->jumlah_38;
		$data->jumlah_39 = $request->jumlah_39;
		$data->jumlah_40 = $request->jumlah_40;
		$data->jumlah_41 = $request->jumlah_41;
		$data->jumlah_42 = $request->jumlah_42;
		$data->jumlah_43 = $request->jumlah_43;
		$data->tanggal = $request->tanggal;
		$data->jam = $request->jam;
		$data->nama_ahli_gizi = $request->nama_ahli_gizi;
		$data->save();

		$daftar_dokumen = ListDocument::where('id_regis', $id_pasien)->first();
        $daftar_dokumen->ri_asuhan_gizi = True;
        $daftar_dokumen->save();

    	return redirect('ri_asuhan_gizi_read');
    }

    public function get_ri_asuhan_gizi_data()
    {
    	$id_pasien = Session::get('id_pasien');
    	$data = RIAsuhanGizi::where('id_regis', $id_pasien)->first();
    	$this->data['umur'] = $data->umur;
		$this->data['etnik_agama'] = $data->etnik_agama;
		$this->data['jenis_kelamin'] = $data->jenis_kelamin;
		$this->data['kemampuan_baca'] = $data->kemampuan_baca;
		$this->data['pekerjaan'] = $data->pekerjaan;
		$this->data['pendidikan'] = $data->pendidikan;
		$this->data['peran_dalam_keluarga'] = $data->peran_dalam_keluarga;
		$this->data['keterbatasan_fisik'] = $data->keterbatasan_fisik;
		$this->data['mobilitas'] = $data->mobilitas;
		$this->data['perokok'] = $data->perokok;
		$this->data['riwayat'] = $data->riwayat;
		$this->data['riwayat_sosial_ekonomi'] = $data->riwayat_sosial_ekonomi;
		$this->data['diagnosa_dokter'] = $data->diagnosa_dokter;
		$this->data['alergi_makanan'] = $data->alergi_makanan;
		$this->data['ketidaksukaan_makanan'] = $data->ketidaksukaan_makanan;
		$this->data['pantangan_makanan'] = $data->pantangan_makanan;
		$this->data['konseling_sebelumnya'] = $data->konseling_sebelumnya;
		$this->data['keterangan_konseling'] = $data->keterangan_konseling;
		$this->data['bb_saat_ini'] = $data->bb_saat_ini;
		$this->data['pbtb'] = $data->pbtb;
		$this->data['imt'] = $data->imt;
		$this->data['status_gizi'] = $data->status_gizi;
		$this->data['bb_biasanya'] = $data->bb_biasanya;
		$this->data['penurunan_bb'] = $data->penurunan_bb;
		$this->data['penurunan_bb_adj'] = $data->penurunan_bb_adj;
		$this->data['pengukuran_lainnya'] = $data->pengukuran_lainnya;
		$this->data['biokimia_terkait'] = $data->biokimia_terkait;
		$this->data['fk1'] = $data->fk1;
		$this->data['fk2'] = $data->fk2;
		$this->data['fk3'] = $data->fk3;
		$this->data['fk4'] = $data->fk4;
		$this->data['fk5'] = $data->fk5;
		$this->data['fk6'] = $data->fk6;
		$this->data['fk7'] = $data->fk7;
		$this->data['fk8'] = $data->fk8;
		$this->data['fk9'] = $data->fk9;
		$this->data['fk10'] = $data->fk10;
		$this->data['fk11'] = $data->fk11;
		$this->data['fk12'] = $data->fk12;
		$this->data['fk13'] = $data->fk13;
		$this->data['fk14'] = $data->fk14;
		$this->data['fk15'] = $data->fk15;
		$this->data['fk16'] = $data->fk16;
		$this->data['fk17'] = $data->fk17;
		$this->data['fk18'] = $data->fk18;
		$this->data['fk19'] = $data->fk19;
		$this->data['diagnosa_gizi'] = $data->diagnosa_gizi;
		$this->data['tujuan_intervensi'] = $data->tujuan_intervensi;
		$this->data['target_intervensi'] = $data->target_intervensi;
		$this->data['rencana_monitoring_evaluasi'] = $data->rencana_monitoring_evaluasi;
		$this->data['p_gr_nasi'] = $data->p_gr_nasi;
		$this->data['p_urt_nasi'] = $data->p_urt_nasi;
		$this->data['p_gr_lauk'] = $data->p_gr_lauk;
		$this->data['p_urt_lauk'] = $data->p_urt_lauk;
		$this->data['p_gr_sayur'] = $data->p_gr_sayur;
		$this->data['p_urt_sayur'] = $data->p_urt_sayur;
		$this->data['p_nama_snack'] = $data->p_nama_snack;
		$this->data['p_gr_snack'] = $data->p_gr_snack;
		$this->data['p_urt_snack'] = $data->p_urt_snack;
		$this->data['energi_pagi'] = $data->energi_pagi;
		$this->data['protein_pagi'] = $data->protein_pagi;
		$this->data['lemak_pagi'] = $data->lemak_pagi;
		$this->data['kh_pagi'] = $data->kh_pagi;
		$this->data['s_gr_nasi'] = $data->s_gr_nasi;
		$this->data['s_urt_nasi'] = $data->s_urt_nasi;
		$this->data['s_gr_lauk'] = $data->s_gr_lauk;
		$this->data['s_urt_lauk'] = $data->s_urt_lauk;
		$this->data['s_gr_tempe'] = $data->s_gr_tempe;
		$this->data['s_urt_tempe'] = $data->s_urt_tempe;
		$this->data['s_gr_sayur'] = $data->s_gr_sayur;
		$this->data['s_urt_sayur'] = $data->s_urt_sayur;
		$this->data['s_gr_buah'] = $data->s_gr_buah;
		$this->data['s_urt_buah'] = $data->s_urt_buah;
		$this->data['s_nama_snack'] = $data->s_nama_snack;
		$this->data['s_gr_snack'] = $data->s_gr_snack;
		$this->data['s_urt_snack'] = $data->s_urt_snack;
		$this->data['energi_siang'] = $data->energi_siang;
		$this->data['protein_siang'] = $data->protein_siang;
		$this->data['lemak_siang'] = $data->lemak_siang;
		$this->data['kh_siang'] = $data->kh_siang;
		$this->data['m_gr_nasi'] = $data->m_gr_nasi;
		$this->data['m_urt_nasi'] = $data->m_urt_nasi;
		$this->data['m_gr_lauk'] = $data->m_gr_lauk;
		$this->data['m_urt_lauk'] = $data->m_urt_lauk;
		$this->data['m_gr_tempe'] = $data->m_gr_tempe;
		$this->data['m_urt_tempe'] = $data->m_urt_tempe;
		$this->data['m_gr_sayur'] = $data->m_gr_sayur;
		$this->data['m_urt_sayur'] = $data->m_urt_sayur;
		$this->data['m_gr_buah'] = $data->m_gr_buah;
		$this->data['m_urt_buah'] = $data->m_urt_buah;
		$this->data['m_nama_snack'] = $data->m_nama_snack;
		$this->data['m_gr_snack'] = $data->m_gr_snack;
		$this->data['m_urt_snack'] = $data->m_urt_snack;
		$this->data['energi_malam'] = $data->energi_malam;
		$this->data['protein_malam'] = $data->protein_malam;
		$this->data['lemak_malam'] = $data->lemak_malam;
		$this->data['kh_malam'] = $data->kh_malam;
		$this->data['jumlah_1'] = $data->jumlah_1;
		$this->data['jumlah_2'] = $data->jumlah_2;
		$this->data['jumlah_3'] = $data->jumlah_3;
		$this->data['jumlah_4'] = $data->jumlah_4;
		$this->data['jumlah_5'] = $data->jumlah_5;
		$this->data['jumlah_6'] = $data->jumlah_6;
		$this->data['jumlah_7'] = $data->jumlah_7;
		$this->data['jumlah_8'] = $data->jumlah_8;
		$this->data['jumlah_9'] = $data->jumlah_9;
		$this->data['jumlah_10'] = $data->jumlah_10;
		$this->data['jumlah_11'] = $data->jumlah_11;
		$this->data['jumlah_12'] = $data->jumlah_12;
		$this->data['jumlah_13'] = $data->jumlah_13;
		$this->data['jumlah_14'] = $data->jumlah_14;
		$this->data['jumlah_15'] = $data->jumlah_15;
		$this->data['jumlah_16'] = $data->jumlah_16;
		$this->data['jumlah_17'] = $data->jumlah_17;
		$this->data['jumlah_18'] = $data->jumlah_18;
		$this->data['jumlah_19'] = $data->jumlah_19;
		$this->data['jumlah_20'] = $data->jumlah_20;
		$this->data['jumlah_21'] = $data->jumlah_21;
		$this->data['jumlah_22'] = $data->jumlah_22;
		$this->data['jumlah_23'] = $data->jumlah_23;
		$this->data['jumlah_24'] = $data->jumlah_24;
		$this->data['jumlah_25'] = $data->jumlah_25;
		$this->data['jumlah_26'] = $data->jumlah_26;
		$this->data['jumlah_27'] = $data->jumlah_27;
		$this->data['jumlah_28'] = $data->jumlah_28;
		$this->data['jumlah_29'] = $data->jumlah_29;
		$this->data['jumlah_30'] = $data->jumlah_30;
		$this->data['jumlah_31'] = $data->jumlah_31;
		$this->data['jumlah_32'] = $data->jumlah_32;
		$this->data['jumlah_33'] = $data->jumlah_33;
		$this->data['jumlah_34'] = $data->jumlah_34;
		$this->data['jumlah_35'] = $data->jumlah_35;
		$this->data['jumlah_36'] = $data->jumlah_36;
		$this->data['jumlah_37'] = $data->jumlah_37;
		$this->data['jumlah_38'] = $data->jumlah_38;
		$this->data['jumlah_39'] = $data->jumlah_39;
		$this->data['jumlah_40'] = $data->jumlah_40;
		$this->data['jumlah_41'] = $data->jumlah_41;
		$this->data['jumlah_42'] = $data->jumlah_42;
		$this->data['jumlah_43'] = $data->jumlah_43;
		$this->data['tanggal'] = $data->tanggal;
		$this->data['jam'] = $data->jam;
		$this->data['nama_ahli_gizi'] = $data->nama_ahli_gizi;
    }

    public function get_ri_asuhan_gizi_read()
    {
    	$this->get_ri_asuhan_gizi_data();
    	return view('page.ri.asuhan_gizi_read', $this->data);
    }

    public function get_ri_asuhan_gizi_edit()
    {
    	$this->get_ri_asuhan_gizi_data();
    	return view('page.ri.asuhan_gizi_edit', $this->data);
    }

    public function post_ri_asuhan_gizi_edit(Request $request)
    {
    	$id_pasien = Session::get('id_pasien');
    	$data = RIAsuhanGizi::where('id_regis', $id_pasien)->first();
    	$data->umur = $request->umur;
		$data->etnik_agama = $request->etnik_agama;
		$data->jenis_kelamin = $request->jenis_kelamin;
		$data->kemampuan_baca = $request->kemampuan_baca;
		$data->pekerjaan = $request->pekerjaan;
		$data->pendidikan = $request->pendidikan;
		$data->peran_dalam_keluarga = $request->peran_dalam_keluarga;
		$data->keterbatasan_fisik = $request->keterbatasan_fisik;
		$data->mobilitas = $request->mobilitas;
		$data->perokok = $request->perokok;
		$data->riwayat = $request->riwayat;
		$data->riwayat_sosial_ekonomi = $request->riwayat_sosial_ekonomi;
		$data->diagnosa_dokter = $request->diagnosa_dokter;
		$data->alergi_makanan = $request->alergi_makanan;
		$data->ketidaksukaan_makanan = $request->ketidaksukaan_makanan;
		$data->pantangan_makanan = $request->pantangan_makanan;
		$data->konseling_sebelumnya = $request->konseling_sebelumnya;
		$data->keterangan_konseling = $request->keterangan_konseling;
		$data->bb_saat_ini = $request->bb_saat_ini;
		$data->pbtb = $request->pbtb;
		$data->imt = $request->imt;
		$data->status_gizi = $request->status_gizi;
		$data->bb_biasanya = $request->bb_biasanya;
		$data->penurunan_bb = $request->penurunan_bb;
		$data->penurunan_bb_adj = $request->penurunan_bb_adj;
		$data->pengukuran_lainnya = $request->pengukuran_lainnya;
		$data->biokimia_terkait = $request->biokimia_terkait;
		$data->fk1 = $request->fk1;
		$data->fk2 = $request->fk2;
		$data->fk3 = $request->fk3;
		$data->fk4 = $request->fk4;
		$data->fk5 = $request->fk5;
		$data->fk6 = $request->fk6;
		$data->fk7 = $request->fk7;
		$data->fk8 = $request->fk8;
		$data->fk9 = $request->fk9;
		$data->fk10 = $request->fk10;
		$data->fk11 = $request->fk11;
		$data->fk12 = $request->fk12;
		$data->fk13 = $request->fk13;
		$data->fk14 = $request->fk14;
		$data->fk15 = $request->fk15;
		$data->fk16 = $request->fk16;
		$data->fk17 = $request->fk17;
		$data->fk18 = $request->fk18;
		$data->fk19 = $request->fk19;
		$data->diagnosa_gizi = $request->diagnosa_gizi;
		$data->tujuan_intervensi = $request->tujuan_intervensi;
		$data->target_intervensi = $request->target_intervensi;
		$data->rencana_monitoring_evaluasi = $request->rencana_monitoring_evaluasi;
		$data->p_gr_nasi = $request->p_gr_nasi;
		$data->p_urt_nasi = $request->p_urt_nasi;
		$data->p_gr_lauk = $request->p_gr_lauk;
		$data->p_urt_lauk = $request->p_urt_lauk;
		$data->p_gr_sayur = $request->p_gr_sayur;
		$data->p_urt_sayur = $request->p_urt_sayur;
		$data->p_nama_snack = $request->p_nama_snack;
		$data->p_gr_snack = $request->p_gr_snack;
		$data->p_urt_snack = $request->p_urt_snack;
		$data->energi_pagi = $request->energi_pagi;
		$data->protein_pagi = $request->protein_pagi;
		$data->lemak_pagi = $request->lemak_pagi;
		$data->kh_pagi = $request->kh_pagi;
		$data->s_gr_nasi = $request->s_gr_nasi;
		$data->s_urt_nasi = $request->s_urt_nasi;
		$data->s_gr_lauk = $request->s_gr_lauk;
		$data->s_urt_lauk = $request->s_urt_lauk;
		$data->s_gr_tempe = $request->s_gr_tempe;
		$data->s_urt_tempe = $request->s_urt_tempe;
		$data->s_gr_sayur = $request->s_gr_sayur;
		$data->s_urt_sayur = $request->s_urt_sayur;
		$data->s_gr_buah = $request->s_gr_buah;
		$data->s_urt_buah = $request->s_urt_buah;
		$data->s_nama_snack = $request->s_nama_snack;
		$data->s_gr_snack = $request->s_gr_snack;
		$data->s_urt_snack = $request->s_urt_snack;
		$data->energi_siang = $request->energi_siang;
		$data->protein_siang = $request->protein_siang;
		$data->lemak_siang = $request->lemak_siang;
		$data->kh_siang = $request->kh_siang;
		$data->m_gr_nasi = $request->m_gr_nasi;
		$data->m_urt_nasi = $request->m_urt_nasi;
		$data->m_gr_lauk = $request->m_gr_lauk;
		$data->m_urt_lauk = $request->m_urt_lauk;
		$data->m_gr_tempe = $request->m_gr_tempe;
		$data->m_urt_tempe = $request->m_urt_tempe;
		$data->m_gr_sayur = $request->m_gr_sayur;
		$data->m_urt_sayur = $request->m_urt_sayur;
		$data->m_gr_buah = $request->m_gr_buah;
		$data->m_urt_buah = $request->m_urt_buah;
		$data->m_nama_snack = $request->m_nama_snack;
		$data->m_gr_snack = $request->m_gr_snack;
		$data->m_urt_snack = $request->m_urt_snack;
		$data->energi_malam = $request->energi_malam;
		$data->protein_malam = $request->protein_malam;
		$data->lemak_malam = $request->lemak_malam;
		$data->kh_malam = $request->kh_malam;
		$data->jumlah_1 = $request->jumlah_1;
		$data->jumlah_2 = $request->jumlah_2;
		$data->jumlah_3 = $request->jumlah_3;
		$data->jumlah_4 = $request->jumlah_4;
		$data->jumlah_5 = $request->jumlah_5;
		$data->jumlah_6 = $request->jumlah_6;
		$data->jumlah_7 = $request->jumlah_7;
		$data->jumlah_8 = $request->jumlah_8;
		$data->jumlah_9 = $request->jumlah_9;
		$data->jumlah_10 = $request->jumlah_10;
		$data->jumlah_11 = $request->jumlah_11;
		$data->jumlah_12 = $request->jumlah_12;
		$data->jumlah_13 = $request->jumlah_13;
		$data->jumlah_14 = $request->jumlah_14;
		$data->jumlah_15 = $request->jumlah_15;
		$data->jumlah_16 = $request->jumlah_16;
		$data->jumlah_17 = $request->jumlah_17;
		$data->jumlah_18 = $request->jumlah_18;
		$data->jumlah_19 = $request->jumlah_19;
		$data->jumlah_20 = $request->jumlah_20;
		$data->jumlah_21 = $request->jumlah_21;
		$data->jumlah_22 = $request->jumlah_22;
		$data->jumlah_23 = $request->jumlah_23;
		$data->jumlah_24 = $request->jumlah_24;
		$data->jumlah_25 = $request->jumlah_25;
		$data->jumlah_26 = $request->jumlah_26;
		$data->jumlah_27 = $request->jumlah_27;
		$data->jumlah_28 = $request->jumlah_28;
		$data->jumlah_29 = $request->jumlah_29;
		$data->jumlah_30 = $request->jumlah_30;
		$data->jumlah_31 = $request->jumlah_31;
		$data->jumlah_32 = $request->jumlah_32;
		$data->jumlah_33 = $request->jumlah_33;
		$data->jumlah_34 = $request->jumlah_34;
		$data->jumlah_35 = $request->jumlah_35;
		$data->jumlah_36 = $request->jumlah_36;
		$data->jumlah_37 = $request->jumlah_37;
		$data->jumlah_38 = $request->jumlah_38;
		$data->jumlah_39 = $request->jumlah_39;
		$data->jumlah_40 = $request->jumlah_40;
		$data->jumlah_41 = $request->jumlah_41;
		$data->jumlah_42 = $request->jumlah_42;
		$data->jumlah_43 = $request->jumlah_43;
		$data->tanggal = $request->tanggal;
		$data->jam = $request->jam;
		$data->nama_ahli_gizi = $request->nama_ahli_gizi;
		$data->save();
    	return redirect('ri_asuhan_gizi_read');
    }

    public function get_ri_asuhan_gizi_list_konsultasi()
    {
    	return view('page.ri.asuhan_gizi_list_konsultasi', $this->data);
    }

    public function post_ri_asuhan_gizi_list_konsultasi(Request $request)
    {
    	$id_pasien = Session::get('id_pasien');
    	$data = new RIAsuhanGiziListKonsultasi;
    	$data->id_regis = $id_pasien;
    	$data->field1 = $request->field1;
		$data->field2 = $request->field2;
		$data->field3 = $request->field3;
		$data->field4 = $request->field4;
		$data->field5 = $request->field5;
		$jumlah_form = $request->jumlah_form;
		$tabel = '';
		for ($i=1; $i <= $jumlah_form; $i++) { 
			$str_1 = 'tabel1_'.$i;
			$str_2 = 'tabel2_'.$i;
			$str_3 = 'tabel3_'.$i;
			$str_4 = 'tabel4_'.$i;
			$str_5 = 'tabel5_'.$i;
			if(!empty($request->$str_1)) {
				if(isset($request->$str_5)) {
					$value5 = "1";
				}
				else {
					$value5 = "0";
				}
				$tabel .= $request->$str_1."$*@^#".$request->$str_2."$*@^#".$request->$str_3."$*@^#".$request->$str_4."$*@^#".$value5."$*@&#";
			}
		}
		if(strlen($tabel) > 0) {
			$tabel = substr($tabel, 0, -5);
		}
		$data->tabel = $tabel;
		$data->save();
    	return redirect('ri_asuhan_gizi_list_konsultasi_read');
    }

    public function get_ri_asuhan_gizi_list_konsultasi_data()
    {
    	$id_pasien = Session::get('id_pasien');
    	$data = RIAsuhanGiziListKonsultasi::where('id_regis', $id_pasien)->first();
    	$this->data['field1'] = $data->field1;
		$this->data['field2'] = $data->field2;
		$this->data['field3'] = $data->field3;
		$this->data['field4'] = $data->field4;
		$this->data['field5'] = $data->field5;
		$list_data = explode('$*@&#', $data->tabel);
		$this->data['tabel'] = array();
		foreach ($list_data as $key => $value) {
			$this->data['tabel'][$key] = array();
			$temp = explode('$*@^#', $value);
			$this->data['tabel'][$key]['tabel1'] = $temp[0];
			$this->data['tabel'][$key]['tabel2'] = $temp[1];
			$this->data['tabel'][$key]['tabel3'] = $temp[2];
			$this->data['tabel'][$key]['tabel4'] = $temp[3];
			$this->data['tabel'][$key]['tabel5'] = $temp[4];
		}
    }

    public function get_ri_asuhan_gizi_list_konsultasi_read()
    {
    	$this->get_ri_asuhan_gizi_list_konsultasi_data();
    	return view('page.ri.asuhan_gizi_list_konsultasi_read', $this->data);
    }

	public function get_ri_asuhan_gizi_list_konsultasi_edit()
    {
    	$this->get_ri_asuhan_gizi_list_konsultasi_data();
    	return view('page.ri.asuhan_gizi_list_konsultasi_edit', $this->data);
    }

    public function post_ri_asuhan_gizi_list_konsultasi_edit(Request $request)
    {
    	$id_pasien = Session::get('id_pasien');
    	$data = RIAsuhanGiziListKonsultasi::where('id_regis', $id_pasien)->first();
    	$data->id_regis = $id_pasien;
    	$data->field1 = $request->field1;
		$data->field2 = $request->field2;
		$data->field3 = $request->field3;
		$data->field4 = $request->field4;
		$data->field5 = $request->field5;
		$jumlah_form = $request->jumlah_form;
		$tabel = '';
		for ($i=1; $i <= $jumlah_form; $i++) { 
			$str_1 = 'tabel1_'.$i;
			$str_2 = 'tabel2_'.$i;
			$str_3 = 'tabel3_'.$i;
			$str_4 = 'tabel4_'.$i;
			$str_5 = 'tabel5_'.$i;
			if(!empty($request->$str_1)) {
				if(isset($request->$str_5)) {
					$value5 = "1";
				}
				else {
					$value5 = "0";
				}
				$tabel .= $request->$str_1."$*@^#".$request->$str_2."$*@^#".$request->$str_3."$*@^#".$request->$str_4."$*@^#".$value5."$*@&#";
			}
		}
		if(strlen($tabel) > 0) {
			$tabel = substr($tabel, 0, -5);
		}
		$data->tabel = $tabel;
		$data->save();
    	return redirect('ri_asuhan_gizi_list_konsultasi_read');
    }

    function pola($jumlah)
    {
    	if ($jumlah=='1') {
    		return 'Lebih 1x Sehari';
    	}
    	else if ($jumlah=='2') {
    		return '1x Sehari';
    	}
    	else if ($jumlah=='3') {
    		return '3-6x Sehari';
    	} 
    	else if ($jumlah=='4') {
    		return '1-2x Sehari';
    	}
    	else if ($jumlah=='5') {
    		return 'Kurang 1x';
    	}
    	else
    	{
    		return 0;	
    	}
    }

    function fklinis($fk)
    {
    	if ($fk=='1') {
    		return 'Ada';
    	}
    	else
    	{
    		return 'Tidak';	
    	}
    }

    public function ri_gizi_pdf()
    {
    	$this->get_ri_asuhan_gizi_data();

    	$this->data['jumlah_1'] = $this->pola($this->data['jumlah_1']);
		$this->data['jumlah_2'] = $this->pola($this->data['jumlah_2']);
		$this->data['jumlah_3'] = $this->pola($this->data['jumlah_3']);
		$this->data['jumlah_4'] = $this->pola($this->data['jumlah_4']);
		$this->data['jumlah_5'] = $this->pola($this->data['jumlah_5']);
		$this->data['jumlah_6'] = $this->pola($this->data['jumlah_6']);
		$this->data['jumlah_7'] = $this->pola($this->data['jumlah_7']);
		$this->data['jumlah_8'] = $this->pola($this->data['jumlah_8']);
		$this->data['jumlah_9'] = $this->pola($this->data['jumlah_9']);
		$this->data['jumlah_10'] = $this->pola($this->data['jumlah_10']);

		$this->data['jumlah_11'] = $this->pola($this->data['jumlah_11']);
		$this->data['jumlah_12'] = $this->pola($this->data['jumlah_12']);
		$this->data['jumlah_13'] = $this->pola($this->data['jumlah_13']);
		$this->data['jumlah_14'] = $this->pola($this->data['jumlah_14']);
		$this->data['jumlah_15'] = $this->pola($this->data['jumlah_15']);
		$this->data['jumlah_16'] = $this->pola($this->data['jumlah_16']);
		$this->data['jumlah_17'] = $this->pola($this->data['jumlah_17']);
		$this->data['jumlah_18'] = $this->pola($this->data['jumlah_18']);
		$this->data['jumlah_19'] = $this->pola($this->data['jumlah_19']);
		$this->data['jumlah_20'] = $this->pola($this->data['jumlah_20']);

		$this->data['jumlah_21'] = $this->pola($this->data['jumlah_21']);
		$this->data['jumlah_22'] = $this->pola($this->data['jumlah_22']);
		$this->data['jumlah_23'] = $this->pola($this->data['jumlah_23']);
		$this->data['jumlah_24'] = $this->pola($this->data['jumlah_24']);
		$this->data['jumlah_25'] = $this->pola($this->data['jumlah_25']);
		$this->data['jumlah_26'] = $this->pola($this->data['jumlah_26']);
		$this->data['jumlah_27'] = $this->pola($this->data['jumlah_27']);
		$this->data['jumlah_28'] = $this->pola($this->data['jumlah_28']);
		$this->data['jumlah_29'] = $this->pola($this->data['jumlah_29']);
		$this->data['jumlah_30'] = $this->pola($this->data['jumlah_30']);

		$this->data['jumlah_31'] = $this->pola($this->data['jumlah_31']);
		$this->data['jumlah_32'] = $this->pola($this->data['jumlah_32']);
		$this->data['jumlah_33'] = $this->pola($this->data['jumlah_33']);
		$this->data['jumlah_34'] = $this->pola($this->data['jumlah_34']);
		$this->data['jumlah_35'] = $this->pola($this->data['jumlah_35']);
		$this->data['jumlah_36'] = $this->pola($this->data['jumlah_36']);
		$this->data['jumlah_37'] = $this->pola($this->data['jumlah_37']);
		$this->data['jumlah_38'] = $this->pola($this->data['jumlah_38']);
		$this->data['jumlah_39'] = $this->pola($this->data['jumlah_39']);
		$this->data['jumlah_40'] = $this->pola($this->data['jumlah_40']);

		$this->data['jumlah_41'] = $this->pola($this->data['jumlah_41']);
		$this->data['jumlah_42'] = $this->pola($this->data['jumlah_42']);
		$this->data['jumlah_43'] = $this->pola($this->data['jumlah_43']);

		if($this->data['kemampuan_baca'] == '1')
		{
			$this->data['kemampuan_baca'] = 'Bisa';
		}
		else
		{
			$this->data['kemampuan_baca'] = 'Tidak Bisa';
		}

		if($this->data['perokok'] == '0')
		{
			$this->data['perokok'] = 'Ya';
		}
		else if($this->data['perokok'] == '1')
		{
			$this->data['perokok'] = 'Tidak';
		}
		{
			$this->data['perokok'] = 'Pasif';
		}

		if($this->data['konseling_sebelumnya'] == '1')
		{
			$this->data['konseling_sebelumnya'] = 'Ada';
		}
		else
		{
			$this->data['konseling_sebelumnya'] = 'Tidak';
		}

		$this->data['fk1'] = $this->fklinis($this->data['fk1']);
		$this->data['fk2'] = $this->fklinis($this->data['fk2']);
		$this->data['fk3'] = $this->fklinis($this->data['fk3']);
		$this->data['fk4'] = $this->fklinis($this->data['fk4']);
		$this->data['fk5'] = $this->fklinis($this->data['fk5']);
		$this->data['fk6'] = $this->fklinis($this->data['fk6']);
		$this->data['fk7'] = $this->fklinis($this->data['fk7']);
		$this->data['fk8'] = $this->fklinis($this->data['fk8']);
		$this->data['fk9'] = $this->fklinis($this->data['fk9']);
		$this->data['fk13'] = $this->fklinis($this->data['fk13']);
		$this->data['fk14'] = $this->fklinis($this->data['fk14']);
		$this->data['fk15'] = $this->fklinis($this->data['fk15']);


        ob_clean();

        header('Content-type: application/pdf');

        $mpdf = new \Mpdf\Mpdf([
        'mode' => 'utf-8', 
        'format' => 'A4-L', 
        'orientation' => 'P'
        ]);

        $view = View::make('doc_ri_gizi',$this->data);
        $contents = $view->render();


        $mpdf->SetHTMLHeader('
            <table width="100%" >
                <tbody>
                        <tr>

                            <td class= "doc_headerleft">
                                <img class="relative" src="img/riau.png" height="9%" width="7%">
                            </td>

                            <td class="doc_headermid">
                                <p style="font-size:120%;" ><b>Pemerintah Provinsi Riau</b></p>
                                <br><p style="font-size:160%;" ><b>RUMAH SAKIT JIWA TAMPAN</b></p>
                                <br><p style="font-size:90%;" >Jl. H. R. Soebrantas Km. 12,5 Pekanbaru Telp. (0761) 63240</p>
                                <p style="font-size:90%;" >Fax. (0761) 63239 E-mail : rstampan@yahoo.com</p>
                            </td>
                            
                            <td class="doc_headerright">
                            <p>No. RM           </p><br>
                            <p>Nama Pasien      </p><br>
                            <p>Tanggal Lahir    </p><br>
                            <p>Jenis Kelamin    </p><br>
                            </td>    

                            <td class="doc_headerright_ans">
                            <p>:  123456</p><br>
                            <p>:  Joko Pangestu</p><br>
                            <p>:  13/08/1992</p><br>
                            <p>:  L</p><br>
                            </td>                       
                        </tr>
  
                </tbody>
            </table> <hr>' );

        $mpdf->SetHTMLFooter('<hr>
            <table width="100%" style="vertical-align: bottom; font-family: "arial", Times, serif; 
                font-size: 8pt; color: #000000; font-weight: bold; font-style: italic;">
                <tr>
                    <td width="33%">{DATE j-m-Y}</td>
                    <td width="33%" align="center">{PAGENO}/{nbpg}</td>
                    <td width="33%" style="text-align: right;">RM. 29.00.RI JULI 2015</td>
                </tr>
            </table>'); 

        $stylesheet = '<style>'.file_get_contents('css/pdf.css').'</style>';

        $mpdf->AddPage('P','','','','',10,10,35,20,10,10);
        //right,left
        $mpdf->WriteHTML($stylesheet, 1);
        $mpdf->WriteHTML($contents,2,true,false);

        $mpdf->Output('ri_gizi.pdf',\Mpdf\Output\Destination::INLINE);
    }
}
