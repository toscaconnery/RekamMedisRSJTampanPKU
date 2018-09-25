<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IGDAsesmenAwalRawatDaruratPerawat;
use App\Models\IGDAsesmenAwalRawatDaruratDokter;

class IGDAsesmenAwalRawatDaruratController extends Controller
{
	public function __construct()
	{
		$this->data['title'] = 'Asesmen Awal Pasien Rawat Darurat';
	}

    public function get_igd_asesmen_awal_rawat_darurat_perawat()
    {
    	return view('page.igd.asesmen_awal_rawat_darurat_perawat', $this->data);
    }

    public function post_igd_asesmen_awal_rawat_darurat_perawat(Request $request)
    {
        $data = new IGDAsesmenAwalRawatDaruratPerawat;
        $data->id_regis = 1;
        $data->tanggal_kedatangan = $request->tanggal_kedatangan;
        $data->jam_kedatangan = $request->jam_kedatangan;
        $data->cara_datang = $request->cara_datang;
        $data->transportasi_ke_igd = $request->transportasi_ke_igd;
        $data->rujukan_dari = $request->rujukan_dari;
        $data->nama_rumah_sakit = $request->nama_rumah_sakit;
        if($request->visum == 'true') {
            $data->visum = True;
        }
        $data->macam_kasus = $request->macam_kasus;
        $data->tensi = $request->tensi;
        $data->nadi = $request->nadi;
        $data->pernafasan = $request->pernafasan;
        $data->suhu = $request->suhu;
        $data->tb = $request->tb;
        $data->bb = $request->bb;
        $data->e = $request->e;
        $data->v = $request->v;
        $data->m = $request->m;
        $data->tindakan_pra_hospital = $request->tindakan_pra_hospital;
        $data->tindakan_pra_hospital_lain = $request->tindakan_pra_hospital_lain;
        $data->daftar_obat_obatan = $request->daftar_obat_obatan;
        $data->alasan_kunjungan = $request->alasan_kunjungan;
        $data->must_bb = $request->must_bb;
        if($request->must_asupan == 'true') {
            $data->must_asupan = True;
        }
        if($request->must_diagnosis == 'true') {
            $data->must_diagnosis = True;
            $diagnosis_khusus = '';
            if(isset($request->diagnosis_khusus_1)) {
                $diagnosis_khusus .= '1-';
            }
            if(isset($request->diagnosis_khusus_2)) {
                $diagnosis_khusus .= '2-';
            }
            if(isset($request->diagnosis_khusus_3)) {
                $diagnosis_khusus .= '3-';
            }
            if(isset($request->diagnosis_khusus_4)) {
                $diagnosis_khusus .= '4-';
            }
            if(isset($request->diagnosis_khusus_5)) {
                $diagnosis_khusus .= '5-';
            }
            if(isset($request->diagnosis_khusus_6)) {
                $diagnosis_khusus .= '6-';
            }
            if(strlen($diagnosis_khusus) > 0) {
                $diagnosis_khusus = substr($diagnosis_khusus, 0, -1);
            }
            $data->must_list_diagnosis = $diagnosis_khusus;
            $data->must_list_diagnosis_lain = $request->must_diagnosis_lain;
        }
        $data->must_penurunan_bb = $request->must_penurunan_bb;
        if($request->sk_1 == 'true') {
            $data->sk_1 = True;
        }
        if($request->sk_2 == 'true') {
            $data->sk_2 = True;
        }
        if($request->sk_3 == 'true') {
            $data->sk_3 = True;
        }
        if($request->sk_4 == 'true') {
            $data->sk_4 = True;
        }
        $penyakit_malnutrisi = '';
        if(isset($request->penyakit_malnutrisi_1)) {
            $penyakit_malnutrisi .= '1-';
        }
        if(isset($request->penyakit_malnutrisi_2)) {
            $penyakit_malnutrisi .= '2-';
        }
        if(isset($request->penyakit_malnutrisi_3)) {
            $penyakit_malnutrisi .= '3-';
        }
        if(isset($request->penyakit_malnutrisi_4)) {
            $penyakit_malnutrisi .= '4-';
        }
        if(isset($request->penyakit_malnutrisi_5)) {
            $penyakit_malnutrisi .= '5-';
        }
        if(isset($request->penyakit_malnutrisi_6)) {
            $penyakit_malnutrisi .= '6-';
        }
        if(isset($request->penyakit_malnutrisi_7)) {
            $penyakit_malnutrisi .= '7-';
        }
        if(isset($request->penyakit_malnutrisi_8)) {
            $penyakit_malnutrisi .= '8-';
        }
        if(isset($request->penyakit_malnutrisi_9)) {
            $penyakit_malnutrisi .= '9-';
        }
        if(isset($request->penyakit_malnutrisi_10)) {
            $penyakit_malnutrisi .= '10-';
        }
        if(isset($request->penyakit_malnutrisi_11)) {
            $penyakit_malnutrisi .= '11-';
        }
        if(isset($request->penyakit_malnutrisi_12)) {
            $penyakit_malnutrisi .= '12-';
        }
        if(isset($request->penyakit_malnutrisi_13)) {
            $penyakit_malnutrisi .= '13-';
        }
        if(isset($request->penyakit_malnutrisi_14)) {
            $penyakit_malnutrisi .= '14-';
        }
        if(isset($request->penyakit_malnutrisi_15)) {
            $penyakit_malnutrisi .= '15-';
        }
        if(isset($request->penyakit_malnutrisi_16)) {
            $penyakit_malnutrisi .= '16-';
        }
        if(strlen($penyakit_malnutrisi) > 0) {
            $penyakit_malnutrisi = substr($penyakit_malnutrisi, 0, -1);
        }
        $data->penyakit_malnutrisi = $penyakit_malnutrisi;
        $data->penyakit_malnutrisi_lain = $request->penyakit_malnutrisi_lain;
        if($request->pemberitahuan == 'true') {
            $data->pemberitahuan = True;
        }
        $data->waktu_pemberitahuan = $request->waktu_pemberitahuan;
        
        if($request->keluhan_nyeri == 'true') {
            $data->keluhan_nyeri = True;
        }
        $data->skala_nyeri = $request->skala_nyeri;
        $data->lokasi_nyeri = $request->lokasi_nyeri;
        $data->penyebab_nyeri = $request->penyebab_nyeri;
        if($request->nyeri_berpindah == 'true') {
            $data->nyeri_berpindah = True;
        }
        $data->frekuensi_nyeri = $request->frekuensi_nyeri;
        $data->lama_nyeri = $request->lama_nyeri;
        
        $data->jenis_risiko_jatuh = $request->jenis_risiko_jatuh;
        $data->humpty_1 = $request->humpty_1;
        $data->humpty_2 = $request->humpty_2;
        $data->humpty_3 = $request->humpty_3;
        $data->humpty_4 = $request->humpty_4;
        $data->humpty_5 = $request->humpty_5;
        $data->humpty_6 = $request->humpty_6;
        
        if($request->morse_1 == 'true') {
            $data->morse_1 = True;
        }
        if($request->morse_2 == 'true') {
            $data->morse_2 = True;
        }
        $data->morse_3 = $request->morse_3;
        if($request->morse_4 == 'true') {
            $data->morse_4 = True;
        }
        $data->morse_5 = $request->morse_5;
        $data->morse_6 = $request->morse_6;
        $data->edmunson_1 = $request->edmunson_1;
        $data->edmunson_2 = $request->edmunson_2;
        $data->edmunson_3 = $request->edmunson_3;
        $data->edmunson_4 = $request->edmunson_4;
        $data->edmunson_5 = $request->edmunson_5;
        $data->edmunson_6 = $request->edmunson_6;
        $data->edmunson_7 = $request->edmunson_7;
        $data->edmunson_8 = $request->edmunson_8;

        if($request->tekanan_intrakanal == 'true') {
            $data->tekanan_intrakanal = True;
        }
        $list_tekanan_intrakanal = '';
        if(isset($request->list_tekanan_intrakanal_1)) {
            $list_tekanan_intrakanal .= ('1-');
        }
        if(isset($request->list_tekanan_intrakanal_2)) {
            $list_tekanan_intrakanal .= ('2-');
        }
        if(isset($request->list_tekanan_intrakanal_3)) {
            $list_tekanan_intrakanal .= ('3-');
        }
        if(strlen($list_tekanan_intrakanal) > 0) {
            $list_tekanan_intrakanal = substr($list_tekanan_intrakanal, 0, -1);
        }
        $data->list_tekanan_intrakanal = $list_tekanan_intrakanal;
        $pupil = '';
        if(isset($request->pupil_1)) {
            $pupil .= '1-';
        }
        $pupil = '';
        if(isset($request->pupil_2)) {
            $pupil .= '2-';
        }
        $pupil = '';
        if(isset($request->pupil_3)) {
            $pupil .= '3-';
        }
        $pupil = '';
        if(isset($request->pupil_4)) {
            $pupil .= '4-';
        }
        $pupil = '';
        if(isset($request->pupil_5)) {
            $pupil .= '5-';
        }
        if(strlen($pupil) > 0) {
            $pupil = substr($pupil, 0, -1);
        }
        $data->pupil = $pupil;
        $neurosensorik = '';
        if(isset($request->neurosensorik_1)) {
            $neurosensorik .= '1-';
        }
        if(isset($request->neurosensorik_2)) {
            $neurosensorik .= '2-';
        }
        if(isset($request->neurosensorik_3)) {
            $neurosensorik .= '3-';
        }
        if(isset($request->neurosensorik_4)) {
            $neurosensorik .= '4-';
        }
        if(strlen($neurosensorik) > 0) {
            $neurosensorik = substr($neurosensorik, 0, -1);
        }
        $data->neurosensorik = $neurosensorik;
        $muskuloskeletal = '';
        if(isset($request->muskuloskeletal_1)) {
            $muskuloskeletal .= '1-';
        }
        if(isset($request->muskuloskeletal_2)) {
            $muskuloskeletal .= '2-';
        }
        if(isset($request->muskuloskeletal_3)) {
            $muskuloskeletal .= '3-';
        }
        if(isset($request->muskuloskeletal_4)) {
            $muskuloskeletal .= '4-';
        }
        if(isset($request->muskuloskeletal_5)) {
            $muskuloskeletal .= '5-';
        }
        if(isset($request->muskuloskeletal_6)) {
            $muskuloskeletal .= '6-';
        }
        if(isset($request->muskuloskeletal_7)) {
            $muskuloskeletal .= '7-';
        }
        if(strlen($muskuloskeletal) > 0) {
            $muskuloskeletal = substr($muskuloskeletal, 0, -1);
        }
        $data->muskuloskeletal = $muskuloskeletal;
        $integumen = '';
        if(isset($request->integumen_1)) {
            $integumen .= '1-';
        }
        if(isset($request->integumen_2)) {
            $integumen .= '2-';
        }
        if(isset($request->integumen_3)) {
            $integumen .= '3-';
        }
        if(isset($request->integumen_4)) {
            $integumen .= '4-';
        }
        if(isset($request->integumen_5)) {
            $integumen .= '5-';
        }
        if(isset($request->integumen_6)) {
            $integumen .= '6-';
        }
        if(strlen($integumen) > 0) {
            $integumen = substr($integumen, 0, -1);
        }
        $data->integumen = $integumen;
        $turgor = '';
        if(isset($request->turgor_1)) {
            $turgor .= '1-';
        }
        if(isset($request->turgor_2)) {
            $turgor .= '2-';
        }
        if(strlen($turgor) > 0) {
            $turgor = substr($turgor, 0, -1);
        }
        $data->turgor = $turgor;
        if($request->edema == 'true') {
            $data->edema = True;
            $list_edema = '';
            if(isset($request->list_edema_1)) {
                $list_edema .= '1-';
            }
            if(isset($request->list_edema_2)) {
                $list_edema .= '2-';
            }
            if(isset($request->list_edema_3)) {
                $list_edema .= '3-';
            }
            if(isset($request->list_edema_4)) {
                $list_edema .= '4-';
            }
            if(strlen($list_edema) > 0) {
                $list_edema = substr($list_edema, 0, -1);
            }
            $data->list_edema = $list_edema;
        }
        $data->mukosa = $request->mukosa;
        if($request->pendarahan == 'true') {
            $data->pendarahan = True;
            $data->jumlah_pendarahan = $request->jumlah_pendarahan;
            $data->warna_pendarahan = $request->warna_pendarahan;
        }
        $intoksisasi = '';
        if(isset($request->intoksisasi_1)) {
            $intoksisasi .= '1-';
        }
        if(isset($request->intoksisasi_2)) {
            $intoksisasi .= '2-';
        }
        if(isset($request->intoksisasi_3)) {
            $intoksisasi .= '3-';
        }
        if(isset($request->intoksisasi_4)) {
            $intoksisasi .= '4-';
        }
        if(isset($request->intoksisasi_5)) {
            $intoksisasi .= '5-';
        }
        if(isset($request->intoksisasi_6)) {
            $intoksisasi .= '6-';
        }
        if(isset($request->intoksisasi_7)) {
            $intoksisasi .= '7-';
        }
        if(isset($request->intoksisasi_8)) {
            $intoksisasi .= '8-';
        }
        if(isset($request->intoksisasi_9)) {
            $intoksisasi .= '9-';
        }
        if(strlen($intoksisasi) > 0) {
            $intoksisasi = substr($intoksisasi, 0, -1);
        }
        $data->intoksisasi = $intoksisasi;
        $eliminasi = '';
        if(isset($request->eliminasi_1)) {
            $eliminasi .= '1-';
        }
        if(isset($request->eliminasi_2)) {
            $eliminasi .= '2-';
        }
        if(isset($request->eliminasi_3)) {
            $eliminasi .= '3-';
        }
        if(isset($request->eliminasi_4)) {
            $eliminasi .= '4-';
        }
        if(isset($request->eliminasi_5)) {
            $eliminasi .= '5-';
        }
        if(isset($request->eliminasi_6)) {
            $eliminasi .= '6-';
        }
        if(isset($request->eliminasi_7)) {
            $eliminasi .= '7-';
        }
        if(isset($request->eliminasi_8)) {
            $eliminasi .= '8-';
        }
        if(strlen($eliminasi) > 0) {
            $eliminasi = substr($eliminasi, 0, -1);
        }
        $data->eliminasi = $eliminasi;
        $diagnosa_umum = '';
        if(isset($request->diagnosa_umum_1)) {
            $diagnosa_umum .= '1-';
        }
        if(isset($request->diagnosa_umum_2)) {
            $diagnosa_umum .= '2-';
        }
        if(isset($request->diagnosa_umum_3)) {
            $diagnosa_umum .= '3-';
        }
        if(isset($request->diagnosa_umum_4)) {
            $diagnosa_umum .= '4-';
        }
        if(isset($request->diagnosa_umum_5)) {
            $diagnosa_umum .= '5-';
        }
        if(isset($request->diagnosa_umum_6)) {
            $diagnosa_umum .= '6-';
        }
        if(isset($request->diagnosa_umum_7)) {
            $diagnosa_umum .= '7-';
        }
        if(isset($request->diagnosa_umum_8)) {
            $diagnosa_umum .= '8-';
        }
        if(isset($request->diagnosa_umum_9)) {
            $diagnosa_umum .= '9-';
        }
        if(isset($request->diagnosa_umum_10)) {
            $diagnosa_umum .= '10-';
        }
        if(isset($request->diagnosa_umum_11)) {
            $diagnosa_umum .= '11-';
        }
        if(isset($request->diagnosa_umum_12)) {
            $diagnosa_umum .= '12-';
        }
        if(isset($request->diagnosa_umum_13)) {
            $diagnosa_umum .= '13-';
        }
        if(strlen($diagnosa_umum) > 0) {
            $diagnosa_umum = substr($diagnosa_umum, 0, -1);
        }
        $data->diagnosa_umum = $diagnosa_umum;
        $data->diagnosa_umum_lainnya = $request->diagnosa_umum_lainnya;
        $diagnosa_jiwa = '';
        if(isset($request->diagnosa_jiwa_1)) {
            $diagnosa_jiwa .= '1-';
        }
        if(isset($request->diagnosa_jiwa_2)) {
            $diagnosa_jiwa .= '2-';
        }
        if(isset($request->diagnosa_jiwa_3)) {
            $diagnosa_jiwa .= '3-';
        }
        if(isset($request->diagnosa_jiwa_4)) {
            $diagnosa_jiwa .= '4-';
        }
        if(isset($request->diagnosa_jiwa_5)) {
            $diagnosa_jiwa .= '5-';
        }
        if(isset($request->diagnosa_jiwa_6)) {
            $diagnosa_jiwa .= '6-';
        }
        if(isset($request->diagnosa_jiwa_7)) {
            $diagnosa_jiwa .= '7-';
        }
        if(isset($request->diagnosa_jiwa_8)) {
            $diagnosa_jiwa .= '8-';
        }
        if(isset($request->diagnosa_jiwa_9)) {
            $diagnosa_jiwa .= '9-';
        }
        if(isset($request->diagnosa_jiwa_10)) {
            $diagnosa_jiwa .= '10-';
        }
        if(isset($request->diagnosa_jiwa_11)) {
            $diagnosa_jiwa .= '11-';
        }
        if(isset($request->diagnosa_jiwa_12)) {
            $diagnosa_jiwa .= '12-';
        }
        if(strlen($diagnosa_jiwa) > 0) {
            $diagnosa_jiwa = substr($diagnosa_jiwa, 0, -1);
        }
        $data->diagnosa_jiwa = $diagnosa_jiwa;
        $data->diagnosa_jiwa_lainnya = $request->diagnosa_jiwa_lainnya;
        $data->obat_parental = $request->obat_parental;
        $data->ekg = $request->ekg;
        $data->implementasi = $request->implementasi;
        $data->evaluasi = $request->evaluasi;
        $data->save();
        

    	dd($request);
    }
}