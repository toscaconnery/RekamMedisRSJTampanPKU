<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RincianPasien;
use App\Models\RIAsuhanGizi;
use Session;
use DateTime;

class RIAsuhanGiziController extends Controller
{
    public function __construct()
    {
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
    	dd('posting');
    }

    public function get_ri_asuhan_gizi_data()
    {
    	//
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
    	dd('posting edit');
    }

    public function get_ri_asuhan_gizi_list_konsultasi()
    {
    	return view('page.ri.asuhan_gizi_list_konsultasi', $this->data);
    }
}
