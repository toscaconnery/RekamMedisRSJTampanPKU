<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IGDAsesmenAwalRawatDaruratPerawat;
use App\Models\IGDAsesmenAwalRawatDaruratDokter;
use App\Models\IGDTindakanTerapi;
use App\Models\IGDObatSaatIni;
use App\Models\ListDocument;
use Session;

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
        $id_pasien = Session::get('id_pasien');
        $data->id_regis = $id_pasien;
        $data->tanggal_kedatangan = $request->tanggal_kedatangan;
        $data->jam_kedatangan = $request->jam_kedatangan;
        $data->cara_datang = $request->cara_datang;
        $data->transportasi_ke_igd = $request->transportasi_ke_igd;
        $data->rujukan_dari = $request->rujukan_dari;
        $data->nama_rumah_sakit = $request->nama_rumah_sakit;
        if($request->visum == 'true') {
            $data->visum = True;
        }
        $macam_kasus = '';
        if(isset($request->macam_kasus_1)) {
            $macam_kasus .= '1-';
        }
        if(isset($request->macam_kasus_2)) {
            $macam_kasus .= '2-';
        }
        if(isset($request->macam_kasus_3)) {
            $macam_kasus .= '3-';
        }
        if(isset($request->macam_kasus_4)) {
            $macam_kasus .= '4-';
        }
        if(isset($request->macam_kasus_5)) {
            $macam_kasus .= '5-';
        }
        if(isset($request->macam_kasus_6)) {
            $macam_kasus .= '6-';
        }
        if(isset($request->macam_kasus_7)) {
            $macam_kasus .= '7-';
        }
        if(isset($request->macam_kasus_8)) {
            $macam_kasus .= '8-';
        }
        if(strlen($macam_kasus) > 0) {
            $macam_kasus = substr($macam_kasus, 0, -1);
        }
        $data->macam_kasus = $macam_kasus;
        $data->tensi = $request->tensi;
        $data->nadi = $request->nadi;
        $data->pernafasan = $request->pernafasan;
        $data->suhu = $request->suhu;
        $data->tb = $request->tb;
        $data->bb = $request->bb;
        $data->e = $request->e;
        $data->v = $request->v;
        $data->m = $request->m;
        $tindakan_pra_hospital = '';
        if(isset($request->tindakan_pra_hospital_1)) {
            $tindakan_pra_hospital .= '1-';
        }
        if(isset($request->tindakan_pra_hospital_2)) {
            $tindakan_pra_hospital .= '2-';
        }
        if(isset($request->tindakan_pra_hospital_3)) {
            $tindakan_pra_hospital .= '3-';
        }
        if(isset($request->tindakan_pra_hospital_4)) {
            $tindakan_pra_hospital .= '4-';
        }
        if(isset($request->tindakan_pra_hospital_5)) {
            $tindakan_pra_hospital .= '5-';
        }
        if(isset($request->tindakan_pra_hospital_6)) {
            $tindakan_pra_hospital .= '6-';
        }
        if(isset($request->tindakan_pra_hospital_7)) {
            $tindakan_pra_hospital .= '7-';
        }
        if(isset($request->tindakan_pra_hospital_8)) {
            $tindakan_pra_hospital .= '8-';
        }
        if(isset($request->tindakan_pra_hospital_9)) {
            $tindakan_pra_hospital .= '9-';
        }
        if(isset($request->tindakan_pra_hospital_10)) {
            $tindakan_pra_hospital .= '10-';
        }
        if(strlen($tindakan_pra_hospital) > 0) {
            $tindakan_pra_hospital = substr($tindakan_pra_hospital, 0, -1);
        }
        $data->tindakan_pra_hospital = $tindakan_pra_hospital;
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

        $daftar_dokumen = ListDocument::where('id_regis', $id_pasien)->get()->first();
        $daftar_dokumen->igd_asesmen_awal_rawat_darurat_perawat = True;
        $daftar_dokumen->save();
        
        return redirect('daftar_dokumen');
    }


    public function get_igd_asesmen_awal_rawat_darurat_perawat_data()
    {
        $id_pasien = Session::get('id_pasien');
        $pasien = IGDAsesmenAwalRawatDaruratPerawat::where('id_regis', $id_pasien)->first();
        
        $this->data['id_regis'] = $pasien->id_regis;
        $this->data['tanggal_kedatangan'] = $pasien->tanggal_kedatangan;
        $this->data['jam_kedatangan'] = $pasien->jam_kedatangan;
        $this->data['cara_datang'] = $pasien->cara_datang;
        $this->data['transportasi_ke_igd'] = $pasien->transportasi_ke_igd;
        $this->data['rujukan_dari'] = $pasien->rujukan_dari;
        $this->data['nama_rumah_sakit'] = $pasien->nama_rumah_sakit;
        
        $this->data['visum'] = $pasien->visum;

        $macam_kasus = $pasien->macam_kasus;
        $macam_kasus = explode('-', $macam_kasus);
        $this->data['macam_kasus'] = array();
        foreach($macam_kasus as $key => $value) {
            $this->data['macam_kasus'][$value] = True;
        }
        $this->data['tensi'] = $pasien->tensi;
        $this->data['nadi'] = $pasien->nadi;
        $this->data['pernafasan'] = $pasien->pernafasan;
        $this->data['suhu'] = $pasien->suhu;
        $this->data['tb'] = $pasien->tb;
        $this->data['bb'] = $pasien->bb;
        $this->data['e'] = $pasien->e;
        $this->data['v'] = $pasien->v;
        $this->data['m'] = $pasien->m;
        $tindakan_pra_hospital = $pasien->tindakan_pra_hospital;
        $tindakan_pra_hospital = explode('-', $tindakan_pra_hospital);
        $this->data['tindakan_pra_hospital'] = array();
        foreach ($tindakan_pra_hospital as $key => $value) {
            $this->data['tindakan_pra_hospital'][$value] = True;
        }
        $this->data['tindakan_pra_hospital_lain'] = $pasien->tindakan_pra_hospital_lain;
        $this->data['daftar_obat_obatan'] = $pasien->daftar_obat_obatan;
        $this->data['alasan_kunjungan'] = $pasien->alasan_kunjungan;
        $this->data['must_bb'] = $pasien->must_bb;
        
        if(!is_null($pasien->must_asupan)){
            $this->data['must_asupan'] = $pasien->must_asupan;
        }

        if(!is_null($pasien->must_diagnosis)){
            $this->data['must_diagnosis'] = $pasien->must_diagnosis;
            $this->data['diagnosis_khusus'] = $pasien->diagnosis_khusus;
            $this->data['must_list_diagnosis'] = $pasien->must_list_diagnosis;
            $this->data['must_list_diagnosis_lain'] = $pasien->must_list_diagnosis_lain;
        }

        $this->data['must_penurunan_bb'] = $pasien->must_penurunan_bb;
        
        if(!is_null($pasien->sk_1)){
            $this->data['sk_1'] = $pasien->sk_1;
        }

        if(!is_null($pasien->sk_2)){
            $this->data['sk_2'] = $pasien->sk_2;
        }

        if(!is_null($pasien->sk_3)){
            $this->data['sk_3'] = $pasien->sk_3;
        }

        if(!is_null($pasien->sk_4)){
            $this->data['sk_4'] = $pasien->sk_4;
        }

        $penyakit_malnutrisi = $pasien->penyakit_malnutrisi;
        $penyakit_malnutrisi = explode('-', $penyakit_malnutrisi);
        $this->data['penyakit_malnutrisi'] = array();
        foreach ($penyakit_malnutrisi as $key => $value) {
            $this->data['penyakit_malnutrisi'][$value] = True;
        }        
        $this->data['penyakit_malnutrisi_lain'] = $pasien->penyakit_malnutrisi_lain;

        if(!is_null($pasien->pemberitahuan)){
            $this->data['pemberitahuan'] = $pasien->pemberitahuan;
        }

        $this->data['waktu_pemberitahuan'] = $pasien->waktu_pemberitahuan;
        
        if(!is_null($pasien->keluhan_nyeri)){
            $this->data['keluhan_nyeri'] = $pasien->keluhan_nyeri;
        }

        $this->data['skala_nyeri'] = $pasien->skala_nyeri;
        $this->data['lokasi_nyeri'] = $pasien->lokasi_nyeri;
        $this->data['penyebab_nyeri'] = $pasien->penyebab_nyeri;

        if(!is_null($pasien->nyeri_berpindah)){
            $this->data['nyeri_berpindah'] = $pasien->nyeri_berpindah;
        }

        $this->data['frekuensi_nyeri'] = $pasien->frekuensi_nyeri;
        $this->data['lama_nyeri'] = $pasien->lama_nyeri;
        $this->data['jenis_risiko_jatuh'] = $pasien->jenis_risiko_jatuh;
        $this->data['humpty_1'] = $pasien->humpty_1;
        $this->data['humpty_2'] = $pasien->humpty_2;
        $this->data['humpty_3'] = $pasien->humpty_3;
        $this->data['humpty_4'] = $pasien->humpty_4;
        $this->data['humpty_5'] = $pasien->humpty_5;
        $this->data['humpty_6'] = $pasien->humpty_6;

        if(!is_null($pasien->morse_1)){
            $this->data['morse_1'] = $pasien->morse_1;
        }

        if(!is_null($pasien->morse_2)){
            $this->data['morse_2'] = $pasien->morse_2;
        }

        $this->data['morse_3'] = $pasien->morse_3;

        if(!is_null($pasien->morse_4)){
            $this->data['morse_4'] = $pasien->morse_4;
        }

        $this->data['morse_5'] = $pasien->morse_5;
        $this->data['morse_6'] = $pasien->morse_6;
        
        $this->data['edmunson_1'] = $pasien->edmunson_1;
        $this->data['edmunson_2'] = $pasien->edmunson_2;
        $this->data['edmunson_3'] = $pasien->edmunson_3;
        $this->data['edmunson_4'] = $pasien->edmunson_4;
        $this->data['edmunson_5'] = $pasien->edmunson_5;
        $this->data['edmunson_6'] = $pasien->edmunson_6;
        $this->data['edmunson_7'] = $pasien->edmunson_7;
        $this->data['edmunson_8'] = $pasien->edmunson_8;
        
        if(!is_null($pasien->tekanan_intrakanal)){
            $this->data['tekanan_intrakanal'] = $pasien->tekanan_intrakanal;
        }

        $list_tekanan_intrakanal = $pasien->list_tekanan_intrakanal;
        $list_tekanan_intrakanal = explode('-', $list_tekanan_intrakanal);
        $this->data['list_tekanan_intrakanal'] = array();
        foreach($list_tekanan_intrakanal as $key => $value) {
            $this->data['list_tekanan_intrakanal'][$value] = True;
        }
        $pupil = $pasien->pupil;
        $pupil = explode('-', $pupil);
        $this->data['pupil'] = array();
        foreach ($pupil as $key => $value) {
            $this->data['pupil'][$value] = True;
        }
        $neurosensorik = $pasien->neurosensorik;
        $neurosensorik = explode('-', $neurosensorik);
        $this->data['neurosensorik'] = array();
        foreach ($neurosensorik as $key => $value) {
            $this->data['neurosensorik'][$value] = True;
        }
        $muskuloskeletal = $pasien->muskuloskeletal;
        $muskuloskeletal = explode('-', $muskuloskeletal);
        $this->data['muskuloskeletal'] = array();
        foreach ($muskuloskeletal as $key => $value) {
            $this->data['muskuloskeletal'][$value] = True;
        }
        $integumen = $pasien->integumen;
        $integumen = explode('-', $integumen);
        $this->data['integumen'] = array();
        foreach ($integumen as $key => $value) {
            $this->data['integumen'][$value] = True;
        }
        $turgor = $pasien->turgor;
        $turgor = explode('-', $turgor);
        $this->data['turgor'] = array();
        foreach ($turgor as $key => $value) {
            $this->data['turgor'][$value] = True;
        }
        $this->data['edema'] = $pasien->edema;
        $list_edema = $pasien->list_edema;
        $list_edema = explode('-', $list_edema);
        $this->data['list_edema'] = array();
        foreach ($list_edema as $key => $value) {
            $this->data['list_edema'][$value] = True;
        }
        $this->data['mukosa'] = $pasien->mukosa;
        $this->data['pendarahan'] = $pasien->pendarahan;
        $this->data['jumlah_pendarahan'] = $pasien->jumlah_pendarahan;
        $this->data['warna_pendarahan'] = $pasien->warna_pendarahan;

        $intoksisasi = $pasien->intoksisasi;
        $intoksisasi = explode('-', $intoksisasi);
        $this->data['intoksisasi'] = array();
        foreach ($intoksisasi as $key => $value) {
            $this->data['intoksisasi'][$value] = True;
        }
        $eliminasi = $pasien->eliminasi;
        $eliminasi = explode('-', $eliminasi);
        $this->data['eliminasi'] = array();
        foreach ($eliminasi as $key => $value) {
            $this->data['eliminasi'][$value] = True;
        }
        $diagnosa_umum = $pasien->diagnosa_umum;
        $diagnosa_umum = explode('-', $diagnosa_umum);
        $this->data['diagnosa_umum'] = array();
        foreach ($diagnosa_umum as $key => $value) {
            $this->data['diagnosa_umum'][$value] = True;
        }
        $this->data['diagnosa_umum_lainnya'] = $pasien->diagnosa_umum_lainnya;
        $diagnosa_jiwa = $pasien->diagnosa_jiwa;
        $diagnosa_jiwa = explode('-', $diagnosa_jiwa);
        $this->data['diagnosa_jiwa'] = array();
        foreach ($diagnosa_jiwa as $key => $value) {
            $this->data['diagnosa_jiwa'][$value] = True;
        }
        $this->data['diagnosa_jiwa_lainnya'] = $pasien->diagnosa_jiwa_lainnya;
        $this->data['obat_parental'] = $pasien->obat_parental;
        $this->data['ekg'] = $pasien->ekg;
        $this->data['implementasi'] = $pasien->implementasi;
        $this->data['evaluasi'] = $pasien->evaluasi;
    }

    public function get_igd_asesmen_awal_rawat_darurat_perawat_read()
    {
        $this->get_igd_asesmen_awal_rawat_darurat_perawat_data();
        return view('page.igd.asesmen_awal_rawat_darurat_perawat_read', $this->data);
    }

    public function get_igd_asesmen_awal_rawat_darurat_perawat_edit()
    {
        $this->get_igd_asesmen_awal_rawat_darurat_perawat_data();
        return view('page.igd.asesmen_awal_rawat_darurat_perawat_edit', $this->data);
    }

    public function post_igd_asesmen_awal_rawat_darurat_perawat_edit(Request $request)
    {
        $id_pasien = Session::get('id_pasien');
        $data = IGDAsesmenAwalRawatDaruratPerawat::where('id_regis', $id_pasien)->first();
        $data->id_regis = $id_pasien;
        $data->tanggal_kedatangan = $request->tanggal_kedatangan;
        $data->jam_kedatangan = $request->jam_kedatangan;
        $data->cara_datang = $request->cara_datang;
        $data->transportasi_ke_igd = $request->transportasi_ke_igd;
        $data->rujukan_dari = $request->rujukan_dari;
        $data->nama_rumah_sakit = $request->nama_rumah_sakit;
        if($request->visum == 'true') {
            $data->visum = True;
        }
        $macam_kasus = '';
        if(isset($request->macam_kasus_1)) {
            $macam_kasus .= '1-';
        }
        if(isset($request->macam_kasus_2)) {
            $macam_kasus .= '2-';
        }
        if(isset($request->macam_kasus_3)) {
            $macam_kasus .= '3-';
        }
        if(isset($request->macam_kasus_4)) {
            $macam_kasus .= '4-';
        }
        if(isset($request->macam_kasus_5)) {
            $macam_kasus .= '5-';
        }
        if(isset($request->macam_kasus_6)) {
            $macam_kasus .= '6-';
        }
        if(isset($request->macam_kasus_7)) {
            $macam_kasus .= '7-';
        }
        if(isset($request->macam_kasus_8)) {
            $macam_kasus .= '8-';
        }
        if(strlen($macam_kasus) > 0) {
            $macam_kasus = substr($macam_kasus, 0, -1);
        }
        $data->macam_kasus = $macam_kasus;
        $data->tensi = $request->tensi;
        $data->nadi = $request->nadi;
        $data->pernafasan = $request->pernafasan;
        $data->suhu = $request->suhu;
        $data->tb = $request->tb;
        $data->bb = $request->bb;
        $data->e = $request->e;
        $data->v = $request->v;
        $data->m = $request->m;
        $tindakan_pra_hospital = '';
        if(isset($request->tindakan_pra_hospital_1)) {
            $tindakan_pra_hospital .= '1-';
        }
        if(isset($request->tindakan_pra_hospital_2)) {
            $tindakan_pra_hospital .= '2-';
        }
        if(isset($request->tindakan_pra_hospital_3)) {
            $tindakan_pra_hospital .= '3-';
        }
        if(isset($request->tindakan_pra_hospital_4)) {
            $tindakan_pra_hospital .= '4-';
        }
        if(isset($request->tindakan_pra_hospital_5)) {
            $tindakan_pra_hospital .= '5-';
        }
        if(isset($request->tindakan_pra_hospital_6)) {
            $tindakan_pra_hospital .= '6-';
        }
        if(isset($request->tindakan_pra_hospital_7)) {
            $tindakan_pra_hospital .= '7-';
        }
        if(isset($request->tindakan_pra_hospital_8)) {
            $tindakan_pra_hospital .= '8-';
        }
        if(isset($request->tindakan_pra_hospital_9)) {
            $tindakan_pra_hospital .= '9-';
        }
        if(isset($request->tindakan_pra_hospital_10)) {
            $tindakan_pra_hospital .= '10-';
        }
        if(strlen($tindakan_pra_hospital) > 0) {
            $tindakan_pra_hospital = substr($tindakan_pra_hospital, 0, -1);
        }
        $data->tindakan_pra_hospital = $tindakan_pra_hospital;
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
        
        return redirect('daftar_dokumen');
    }

    ///// DOKTER

    public function get_igd_asesmen_awal_rawat_darurat_dokter()
    {
        return view('page.igd.asesmen_awal_rawat_darurat_dokter', $this->data);
    }

    public function post_igd_asesmen_awal_rawat_darurat_dokter(Request $request)
    {
        $data = new IGDAsesmenAwalRawatDaruratDokter;
        $id_pasien = Session::get('id_pasien');
        
        $data->id_regis = $id_pasien;
        $data->pewawancara = $request->pewawancara;
        $data->keluhan_utama = $request->keluhan_utama;
        $data->riwayat_penyakit_sekarang = $request->riwayat_penyakit_sekarang;
        $data->riwayat_penyakit_dahulu = $request->riwayat_penyakit_dahulu;
        if($request->riwayat_napza == 'true') {
            $data->riwayat_napza = True;
        }
        $data->lama_pemakaian = $request->lama_pemakaian;
        $data->jenis_zat = $request->jenis_zat;
        $data->cara_pemakaian = $request->cara_pemakaian;
        $data->latar_belakang_pemakaian = $request->latar_belakang_pemakaian;
        $data->kepribadian_sebelum_sakit = $request->kepribadian_sebelum_sakit;
        $data->riwayat_pendidikan = $request->riwayat_pendidikan;
        $data->riwayat_pekerjaan = $request->riwayat_pekerjaan;
        $data->riwayat_perkawinan = $request->riwayat_perkawinan;
        $riwayat_penyakit_lain = '';
        if(isset($request->riwayat_penyakit_lain_1)) {
            $riwayat_penyakit_lain .= '1-';
        }
        if(isset($request->riwayat_penyakit_lain_2)) {
            $riwayat_penyakit_lain .= '2-';
        }
        if(isset($request->riwayat_penyakit_lain_3)) {
            $riwayat_penyakit_lain .= '3-';
        }
        if(isset($request->riwayat_penyakit_lain_4)) {
            $riwayat_penyakit_lain .= '4-';
        }
        if(isset($request->riwayat_penyakit_lain_5)) {
            $riwayat_penyakit_lain .= '5-';
        }
        if(isset($request->riwayat_penyakit_lain_6)) {
            $riwayat_penyakit_lain .= '6-';
        }
        if(isset($request->riwayat_penyakit_lain_7)) {
            $riwayat_penyakit_lain .= '7-';
        }
        if(isset($request->riwayat_penyakit_lain_8)) {
            $riwayat_penyakit_lain .= '8-';
        }
        if(isset($request->riwayat_penyakit_lain_9)) {
            $riwayat_penyakit_lain .= '9-';
        }
        if(isset($request->riwayat_penyakit_lain_10)) {
            $riwayat_penyakit_lain .= '10-';
        }
        if(isset($request->riwayat_penyakit_lain_11)) {
            $riwayat_penyakit_lain .= '11-';
        }
        if(isset($request->riwayat_penyakit_lain_12)) {
            $riwayat_penyakit_lain .= '12-';
        }
        if(isset($request->riwayat_penyakit_lain_13)) {
            $riwayat_penyakit_lain .= '13-';
        }
        if(isset($request->riwayat_penyakit_lain_14)) {
            $riwayat_penyakit_lain .= '14-';
        }
        if(strlen($riwayat_penyakit_lain) > 0) {
            $riwayat_penyakit_lain = substr($riwayat_penyakit_lain, 0, -1);
        }
        $data->riwayat_penyakit_lain = $riwayat_penyakit_lain;
        $data->text_riwayat_penyakit_lain = $request->text_riwayat_penyakit_lain;
        if($request->riwayat_operasi == 'true') {
            $data->riwayat_operasi = True;
        }
        $data->jenis_operasi = $request->jenis_operasi;
        $data->waktu_operasi = $request->waktu_operasi;
        if($request->riwayat_tranfusi == 'true') {
            $data->riwayat_tranfusi = True;
        }
        if($request->reaksi_tranfusi == 'true') {
            $data->reaksi_tranfusi = True;
        }
        $data->reaksi_tranfusi_timbul = $request->reaksi_tranfusi_timbul;
        $data->riwayat_penyakit_keluarga = $request->riwayat_penyakit_keluarga;
        $data->riwayat_pengobatan = $request->riwayat_pengobatan;
        $data->riwayat_alergi = $request->riwayat_alergi;
        $data->kepala = $request->kepala;
        $data->leher = $request->leher;
        $data->dada = $request->dada;
        $data->jantung = $request->jantung;
        $data->paru = $request->paru;
        $data->perut = $request->perut;
        $data->anggota_gerak = $request->anggota_gerak;
        $data->status_lokalis = $request->status_lokalis;
        $data->penampilan = $request->penampilan;
        $data->kesadaran = $request->kesadaran;
        $data->orientasi = $request->orientasi;
        $data->sikap_tingkah_laku = $request->sikap_tingkah_laku;
        $data->proses_pikir = $request->proses_pikir;
        $data->bentuk_pikir = $request->bentuk_pikir;
        $data->isi_pikir = $request->isi_pikir;
        $data->mood = $request->mood;
        $data->afek = $request->afek;
        $data->halusinasi = $request->halusinasi;
        $data->ilusi = $request->ilusi;
        $data->daya_konsentrasi = $request->daya_konsentrasi;
        $data->daya_ingat = $request->daya_ingat;
        $data->pikiran_abstrak = $request->pikiran_abstrak;
        $data->pengendalian_impuls = $request->pengendalian_impuls;
        $data->daya_nilai = $request->daya_nilai;
        $data->tilikan = $request->tilikan;
        $data->taraf_dipercaya = $request->taraf_dipercaya;
        $data->meningeal_sight = $request->meningeal_sight;
        $data->nervus_cranialis = $request->nervus_cranialis;
        $data->sistem_motorik = $request->sistem_motorik;
        $data->cerebellum = $request->cerebellum;
        $data->vegetatif = $request->vegetatif;
        $data->pemeriksaan_laboratorium = $request->pemeriksaan_laboratorium;
        $data->hasil_laboratorium = $request->hasil_laboratorium;
        $data->keterangan_laboratorium = $request->keterangan_laboratorium;
        $data->jam_pemeriksaan_laboratorium = $request->jam_pemeriksaan_laboratorium;
        $data->jam_hasil_laboratorium = $request->jam_hasil_laboratorium;
        $data->pemeriksaan_radiologi = $request->pemeriksaan_radiologi;
        $data->hasil_radiologi = $request->hasil_radiologi;
        $data->keterangan_radiologi = $request->keterangan_radiologi;
        $data->jam_pemeriksaan_radiologi = $request->jam_pemeriksaan_radiologi;
        $data->jam_hasil_radiologi = $request->jam_hasil_radiologi;
        $data->pemeriksaan_ekg = $request->pemeriksaan_ekg;
        $data->hasil_ekg = $request->hasil_ekg;
        $data->keterangan_ekg = $request->keterangan_ekg;
        $data->jam_pemeriksaan_ekg = $request->jam_pemeriksaan_ekg;
        $data->jam_hasil_ekg = $request->jam_hasil_ekg;
        $data->pemeriksaan_lain = $request->pemeriksaan_lain;
        $data->hasil_lain = $request->hasil_lain;
        $data->keterangan_lain = $request->keterangan_lain;
        $data->jam_pemeriksaan_lain = $request->jam_pemeriksaan_lain;
        $data->jam_hasil_lain = $request->jam_hasil_lain;
        $data->panssec = $request->panssec;
        $data->gaff = $request->gaff;
        $data->p4 = $request->p4;
        $data->g8 = $request->g8;
        $data->p7 = $request->p7;
        $data->g14 = $request->g14;
        $data->g4 = $request->g4;
        $data->bangsal = $request->bangsal;
        $data->tanggal_pemeriksaan = $request->tanggal_pemeriksaan;
        $data->axis_1 = $request->axis_1;
        $data->axis_2 = $request->axis_2;
        $data->axis_3 = $request->axis_3;
        $data->axis_4 = $request->axis_4;
        $data->axis_5 = $request->axis_5;
        $data->diagnosis_utama = $request->diagnosis_utama;
        $data->diagnosis_sekunder = $request->diagnosis_sekunder;
        $data->daftar_masalah = $request->daftar_masalah;
        $data->tindak_lanjut = $request->tindak_lanjut;
        if($request->kontrol == 'true') {
            $data->kontrol = True;
        }
        $data->tanggal_kontrol = $request->tanggal_kontrol;
        $data->dirawat_di_ruang = $request->dirawat_di_ruang;
        $data->indikasi_rawat_inap = $request->indikasi_rawat_inap;
        $data->alasan_menolak = $request->alasan_menolak;
        $data->alasan_menolak_lainnya = $request->alasan_menolak_lainnya;
        $data->dirujuk_ke = $request->dirujuk_ke;
        $data->alasan_rujuk = $request->alasan_rujuk;
        if(isset($request->doa)) {
            $data->doa = True;
        }
        $data->jam_keluar = $request->jam_keluar;
        $kesadaran_saat_keluar = '';
        if(isset($request->kesadaran_saat_keluar_1)) {
            $kesadaran_saat_keluar .= '1-';
        }
        if(isset($request->kesadaran_saat_keluar_2)) {
            $kesadaran_saat_keluar .= '2-';
        }
        if(isset($request->kesadaran_saat_keluar_3)) {
            $kesadaran_saat_keluar .= '3-';
        }
        if(isset($request->kesadaran_saat_keluar_4)) {
            $kesadaran_saat_keluar .= '4-';
        }
        if(isset($request->kesadaran_saat_keluar_5)) {
            $kesadaran_saat_keluar .= '5-';
        }
        if(isset($request->kesadaran_saat_keluar_6)) {
            $kesadaran_saat_keluar .= '6-';
        }
        if(isset($request->kesadaran_saat_keluar_7)) {
            $kesadaran_saat_keluar .= '7-';
        }
        if(strlen($kesadaran_saat_keluar) > 0) {
            $kesadaran_saat_keluar = substr($kesadaran_saat_keluar, 0, -1);
        }
        $data->kesadaran_saat_keluar = $kesadaran_saat_keluar;
        $data->gcs = $request->gcs;
        $data->kesadaran_lainnya = $request->kesadaran_lainnya;
        $data->tensi = $request->tensi;
        $data->nadi = $request->nadi;
        $data->pernafasan = $request->pernafasan;
        $data->suhu = $request->suhu;
        $data->save();

        $jumlah_form_obat = $request->jumlah_form_obat;
        for($i = 1; $i <= $jumlah_form_obat; $i++) {
            $obat = new IGDObatSaatIni;
            $obat->id_regis = $data->id_regis;
            $str_nama_obat = 'nama_obat_'.$i;
            $str_dibawa = 'dibawa_'.$i;
            $str_jumlah = 'jumlah_'.$i;
            $str_tidak_dibawa = 'tidak_dibawa_'.$i;
            $str_keterangan = 'keterangan_'.$i;
            if(!empty($request->$str_nama_obat)) {
                $obat->nama_obat = $request->$str_nama_obat;
                $obat->dibawa = $request->$str_dibawa;
                $obat->jumlah = $request->$str_jumlah;
                $obat->tidak_dibawa = $request->$str_tidak_dibawa;
                $obat->keterangan = $request->$str_keterangan;
                $obat->save();
            }
        }

        $jumlah_form_tindakan = $request->jumlah_form_tindakan;
        for($i = 1; $i <= $jumlah_form_tindakan; $i++) {
            $tindakan = new IGDTindakanTerapi;
            $tindakan->id_regis = $data->id_regis;
            $str_jam_tindakan = 'jam_tindakan_'.$i;
            $str_tindakan_terapi = 'tindakan_terapi_'.$i;
            if(!empty($request->$str_tindakan_terapi) and !empty($request->$str_jam_tindakan)) {
                $tindakan->jam = $request->$str_jam_tindakan;
                $tindakan->tindakan = $request->$str_tindakan_terapi;
                $tindakan->save();
            }
        }

        $daftar_dokumen = ListDocument::where('id_regis', $id_pasien)->get()->first();
        $daftar_dokumen->igd_asesmen_awal_rawat_darurat_dokter = True;
        $daftar_dokumen->save();

        return redirect('daftar_dokumen');
    }

    //dokter
    public function get_igd_asesmen_awal_rawat_darurat_dokter_data()
    {
        $id_pasien = Session::get('id_pasien');
        $pasien = IGDAsesmenAwalRawatDaruratDokter::where('id_regis', $id_pasien)->first();
        
        $this->data['id_regis'] = $pasien->id_regis;
        $this->data['pewawancara'] = $pasien->pewawancara;
        $this->data['keluhan_utama'] = $pasien->keluhan_utama;
        $this->data['riwayat_penyakit_sekarang'] = $pasien->riwayat_penyakit_sekarang;
        $this->data['riwayat_penyakit_dahulu'] = $pasien->riwayat_penyakit_dahulu;
        
        if(!is_null($pasien->riwayat_napza)){
            $this->data['riwayat_napza'] = $pasien->riwayat_napza;
        }
        
        $this->data['lama_pemakaian'] = $pasien->lama_pemakaian;
        $this->data['jenis_zat'] = $pasien->jenis_zat;
        $this->data['cara_pemakaian'] = $pasien->cara_pemakaian;
        $this->data['latar_belakang_pemakaian'] = $pasien->latar_belakang_pemakaian;
        $this->data['kepribadian_sebelum_sakit'] = $pasien->kepribadian_sebelum_sakit;
        $this->data['riwayat_pendidikan'] = $pasien->riwayat_pendidikan;
        $this->data['riwayat_pekerjaan'] = $pasien->riwayat_pekerjaan;
        $this->data['riwayat_perkawinan'] = $pasien->riwayat_perkawinan;
        $riwayat_penyakit_lain = $pasien->riwayat_penyakit_lain;
        $riwayat_penyakit_lain = explode('-', $riwayat_penyakit_lain);
        $this->data['riwayat_penyakit_lain'] = array();
        foreach ($riwayat_penyakit_lain as $key => $value) {
            $this->data['riwayat_penyakit_lain'][$value] = True;
        }
        $this->data['text_riwayat_penyakit_lain'] = $pasien->text_riwayat_penyakit_lain;
        
        if(!is_null($pasien->riwayat_operasi)){
            $this->data['riwayat_operasi'] = $pasien->riwayat_operasi;
        }

        $this->data['jenis_operasi'] = $pasien->jenis_operasi;
        $this->data['waktu_operasi'] = $pasien->waktu_operasi;
        
        if(!is_null($pasien->riwayat_tranfusi)){
            $this->data['riwayat_tranfusi'] = $pasien->riwayat_tranfusi;
        }

        if(!is_null($pasien->reaksi_tranfusi)){
            $this->data['reaksi_tranfusi'] = $pasien->reaksi_tranfusi;
        }

        $this->data['reaksi_tranfusi_timbul'] = $pasien->reaksi_tranfusi_timbul;
        $this->data['riwayat_penyakit_keluarga'] = $pasien->riwayat_penyakit_keluarga;
        $this->data['riwayat_pengobatan'] = $pasien->riwayat_pengobatan;

        $this->data['riwayat_alergi'] = $pasien->riwayat_alergi;
        $this->data['kepala'] = $pasien->kepala;
        $this->data['leher'] = $pasien->leher;
        $this->data['dada'] = $pasien->dada;
        $this->data['jantung'] = $pasien->jantung;
        $this->data['paru'] = $pasien->paru;
        $this->data['perut'] = $pasien->perut;

        $this->data['anggota_gerak'] = $pasien->anggota_gerak;
        $this->data['status_lokalis'] = $pasien->status_lokalis;
        $this->data['penampilan'] = $pasien->penampilan;
        $this->data['kesadaran'] = $pasien->kesadaran;
        $this->data['orientasi'] = $pasien->orientasi;
        $this->data['sikap_tingkah_laku'] = $pasien->sikap_tingkah_laku;
        $this->data['proses_pikir'] = $pasien->proses_pikir;
        $this->data['bentuk_pikir'] = $pasien->bentuk_pikir;
        $this->data['isi_pikir'] = $pasien->isi_pikir;
        $this->data['mood'] = $pasien->mood;
        $this->data['afek'] = $pasien->afek;
        $this->data['halusinasi'] = $pasien->halusinasi;
        $this->data['ilusi'] = $pasien->ilusi;
        $this->data['daya_konsentrasi'] = $pasien->daya_konsentrasi;
        $this->data['daya_ingat'] = $pasien->daya_ingat;
        $this->data['pikiran_abstrak'] = $pasien->pikiran_abstrak;
        $this->data['pengendalian_impuls'] = $pasien->pengendalian_impuls;
        $this->data['daya_nilai'] = $pasien->daya_nilai;
        $this->data['tilikan'] = $pasien->tilikan;
        $this->data['taraf_dipercaya'] = $pasien->taraf_dipercaya;
        $this->data['meningeal_sight'] = $pasien->meningeal_sight;
        $this->data['nervus_cranialis'] = $pasien->nervus_cranialis;
        $this->data['sistem_motorik'] = $pasien->sistem_motorik;
        $this->data['cerebellum'] = $pasien->cerebellum;
        $this->data['vegetatif'] = $pasien->vegetatif;

        $this->data['pemeriksaan_laboratorium'] = $pasien->pemeriksaan_laboratorium;
        $this->data['hasil_laboratorium'] = $pasien->hasil_laboratorium;
        $this->data['keterangan_laboratorium'] = $pasien->keterangan_laboratorium;
        $this->data['jam_pemeriksaan_laboratorium'] = $pasien->jam_pemeriksaan_laboratorium;
        $this->data['jam_hasil_laboratorium'] = $pasien->jam_hasil_laboratorium;

        $this->data['pemeriksaan_radiologi'] = $pasien->pemeriksaan_radiologi;
        $this->data['hasil_radiologi'] = $pasien->hasil_radiologi;
        $this->data['keterangan_radiologi'] = $pasien->keterangan_radiologi;
        $this->data['jam_pemeriksaan_radiologi'] = $pasien->jam_pemeriksaan_radiologi;
        $this->data['jam_hasil_radiologi'] = $pasien->jam_hasil_radiologi;

        $this->data['pemeriksaan_ekg'] = $pasien->pemeriksaan_ekg;
        $this->data['hasil_ekg'] = $pasien->hasil_ekg;
        $this->data['keterangan_ekg'] = $pasien->keterangan_ekg;
        $this->data['jam_pemeriksaan_ekg'] = $pasien->jam_pemeriksaan_ekg;
        $this->data['jam_hasil_ekg'] = $pasien->jam_hasil_ekg;

        $this->data['pemeriksaan_lain'] = $pasien->pemeriksaan_lain;
        $this->data['hasil_lain'] = $pasien->hasil_lain;
        $this->data['keterangan_lain'] = $pasien->keterangan_lain;
        $this->data['jam_pemeriksaan_lain'] = $pasien->jam_pemeriksaan_lain;
        $this->data['jam_hasil_lain'] = $pasien->jam_hasil_lain;
        
        $this->data['panssec'] = $pasien->panssec;
        $this->data['gaff'] = $pasien->gaff;
        $this->data['p4'] = $pasien->p4;
        $this->data['g8'] = $pasien->g8;
        $this->data['p7'] = $pasien->p7;
        $this->data['g14'] = $pasien->g14;
        $this->data['g4'] = $pasien->g4;
        $this->data['bangsal'] = $pasien->bangsal;
        $this->data['tanggal_pemeriksaan'] = $pasien->tanggal_pemeriksaan;
        
        $this->data['axis_1'] = $pasien->axis_1;
        $this->data['axis_2'] = $pasien->axis_2;
        $this->data['axis_3'] = $pasien->axis_3;
        $this->data['axis_4'] = $pasien->axis_4;
        $this->data['axis_5'] = $pasien->axis_5;
        
        $this->data['diagnosis_utama'] = $pasien->diagnosis_utama;
        $this->data['diagnosis_sekunder'] = $pasien->diagnosis_sekunder;
        $this->data['daftar_masalah'] = $pasien->daftar_masalah;
        $this->data['tindak_lanjut'] = $pasien->tindak_lanjut;

        if(!is_null($pasien->kontrol)){
            $this->data['kontrol'] = $pasien->kontrol;
        }

        $this->data['tanggal_kontrol'] = $pasien->tanggal_kontrol;
        $this->data['dirawat_di_ruang'] = $pasien->dirawat_di_ruang;
        $this->data['indikasi_rawat_inap'] = $pasien->indikasi_rawat_inap;
        $this->data['alasan_menolak'] = $pasien->alasan_menolak;
        $this->data['alasan_menolak_lainnya'] = $pasien->alasan_menolak_lainnya;
        $this->data['dirujuk_ke'] = $pasien->dirujuk_ke;
        $this->data['alasan_rujuk'] = $pasien->alasan_rujuk;
        
        if(!is_null($pasien->doa)){
            $this->data['doa'] = $pasien->doa;
        }

        $this->data['jam_keluar'] = $pasien->jam_keluar;
        $kesadaran_saat_keluar = $pasien->kesadaran_saat_keluar;
        $kesadaran_saat_keluar = explode('-', $kesadaran_saat_keluar);
        $this->data['kesadaran_saat_keluar'] = array();
        foreach ($kesadaran_saat_keluar as $key => $value) {
            $this->data['kesadaran_saat_keluar'][$value] = True;
        }
        $this->data['gcs'] = $pasien->gcs;
        $this->data['kesadaran_lainnya'] = $pasien->kesadaran_lainnya;
        $this->data['tensi'] = $pasien->tensi;
        $this->data['nadi'] = $pasien->nadi;
        $this->data['pernafasan'] = $pasien->pernafasan;
        $this->data['suhu'] = $pasien->suhu;

        $this->data['obat'] = IGDObatSaatIni::where('id_regis', $id_pasien)->get();
        $this->data['tindakan'] = IGDTindakanTerapi::where('id_regis', $id_pasien)->get();
        $previous_obat = '';
        foreach($this->data['obat'] as $p) {
            $previous_obat .= $p->id.'-';
        }
        if(strlen($previous_obat) > 0) {
            $previous_obat = substr($previous_obat, 0, -1);
        }

        $previous_tindakan = '';
        foreach($this->data['tindakan'] as $t) {
            $previous_tindakan .= $t->id.'-';
        }
        if(strlen($previous_tindakan) > 0) {
            $previous_tindakan = substr($previous_tindakan, 0, -1);
        }
        $this->data['previous_obat'] = $previous_obat;
        $this->data['previous_tindakan'] = $previous_tindakan;
    }

    public function get_igd_asesmen_awal_rawat_darurat_dokter_read()
    {
        $this->get_igd_asesmen_awal_rawat_darurat_dokter_data();
        return view('page.igd.asesmen_awal_rawat_darurat_dokter_read', $this->data);

    }

    public function get_igd_asesmen_awal_rawat_darurat_dokter_edit()
    {
        $this->get_igd_asesmen_awal_rawat_darurat_dokter_data();
        return view('page.igd.asesmen_awal_rawat_darurat_dokter_edit', $this->data);
    }

    public function post_igd_asesmen_awal_rawat_darurat_dokter_edit(Request $request)
    {
        $id_pasien = Session::get('id_pasien');
        $data = IGDAsesmenAwalRawatDaruratDokter::where('id_regis', $id_pasien)->first();
        
        $data->id_regis = $id_pasien;
        $data->pewawancara = $request->pewawancara;
        $data->keluhan_utama = $request->keluhan_utama;
        $data->riwayat_penyakit_sekarang = $request->riwayat_penyakit_sekarang;
        $data->riwayat_penyakit_dahulu = $request->riwayat_penyakit_dahulu;
        if($request->riwayat_napza == 'true') {
            $data->riwayat_napza = True;
        }
        $data->lama_pemakaian = $request->lama_pemakaian;
        $data->jenis_zat = $request->jenis_zat;
        $data->cara_pemakaian = $request->cara_pemakaian;
        $data->latar_belakang_pemakaian = $request->latar_belakang_pemakaian;
        $data->kepribadian_sebelum_sakit = $request->kepribadian_sebelum_sakit;
        $data->riwayat_pendidikan = $request->riwayat_pendidikan;
        $data->riwayat_pekerjaan = $request->riwayat_pekerjaan;
        $data->riwayat_perkawinan = $request->riwayat_perkawinan;
        $riwayat_penyakit_lain = '';
        if(isset($request->riwayat_penyakit_lain_1)) {
            $riwayat_penyakit_lain .= '1-';
        }
        if(isset($request->riwayat_penyakit_lain_2)) {
            $riwayat_penyakit_lain .= '2-';
        }
        if(isset($request->riwayat_penyakit_lain_3)) {
            $riwayat_penyakit_lain .= '3-';
        }
        if(isset($request->riwayat_penyakit_lain_4)) {
            $riwayat_penyakit_lain .= '4-';
        }
        if(isset($request->riwayat_penyakit_lain_5)) {
            $riwayat_penyakit_lain .= '5-';
        }
        if(isset($request->riwayat_penyakit_lain_6)) {
            $riwayat_penyakit_lain .= '6-';
        }
        if(isset($request->riwayat_penyakit_lain_7)) {
            $riwayat_penyakit_lain .= '7-';
        }
        if(isset($request->riwayat_penyakit_lain_8)) {
            $riwayat_penyakit_lain .= '8-';
        }
        if(isset($request->riwayat_penyakit_lain_9)) {
            $riwayat_penyakit_lain .= '9-';
        }
        if(isset($request->riwayat_penyakit_lain_10)) {
            $riwayat_penyakit_lain .= '10-';
        }
        if(isset($request->riwayat_penyakit_lain_11)) {
            $riwayat_penyakit_lain .= '11-';
        }
        if(isset($request->riwayat_penyakit_lain_12)) {
            $riwayat_penyakit_lain .= '12-';
        }
        if(isset($request->riwayat_penyakit_lain_13)) {
            $riwayat_penyakit_lain .= '13-';
        }
        if(isset($request->riwayat_penyakit_lain_14)) {
            $riwayat_penyakit_lain .= '14-';
        }
        if(strlen($riwayat_penyakit_lain) > 0) {
            $riwayat_penyakit_lain = substr($riwayat_penyakit_lain, 0, -1);
        }
        $data->riwayat_penyakit_lain = $riwayat_penyakit_lain;
        $data->text_riwayat_penyakit_lain = $request->text_riwayat_penyakit_lain;
        if($request->riwayat_operasi == 'true') {
            $data->riwayat_operasi = True;
        }
        $data->jenis_operasi = $request->jenis_operasi;
        $data->waktu_operasi = $request->waktu_operasi;
        if($request->riwayat_tranfusi == 'true') {
            $data->riwayat_tranfusi = True;
        }
        if($request->reaksi_tranfusi == 'true') {
            $data->reaksi_tranfusi = True;
        }
        $data->reaksi_tranfusi_timbul = $request->reaksi_tranfusi_timbul;
        $data->riwayat_penyakit_keluarga = $request->riwayat_penyakit_keluarga;
        $data->riwayat_pengobatan = $request->riwayat_pengobatan;
        $data->riwayat_alergi = $request->riwayat_alergi;
        $data->kepala = $request->kepala;
        $data->leher = $request->leher;
        $data->dada = $request->dada;
        $data->jantung = $request->jantung;
        $data->paru = $request->paru;
        $data->perut = $request->perut;
        $data->anggota_gerak = $request->anggota_gerak;
        $data->status_lokalis = $request->status_lokalis;
        $data->penampilan = $request->penampilan;
        $data->kesadaran = $request->kesadaran;
        $data->orientasi = $request->orientasi;
        $data->sikap_tingkah_laku = $request->sikap_tingkah_laku;
        $data->proses_pikir = $request->proses_pikir;
        $data->bentuk_pikir = $request->bentuk_pikir;
        $data->isi_pikir = $request->isi_pikir;
        $data->mood = $request->mood;
        $data->afek = $request->afek;
        $data->halusinasi = $request->halusinasi;
        $data->ilusi = $request->ilusi;
        $data->daya_konsentrasi = $request->daya_konsentrasi;
        $data->daya_ingat = $request->daya_ingat;
        $data->pikiran_abstrak = $request->pikiran_abstrak;
        $data->pengendalian_impuls = $request->pengendalian_impuls;
        $data->daya_nilai = $request->daya_nilai;
        $data->tilikan = $request->tilikan;
        $data->taraf_dipercaya = $request->taraf_dipercaya;
        $data->meningeal_sight = $request->meningeal_sight;
        $data->nervus_cranialis = $request->nervus_cranialis;
        $data->sistem_motorik = $request->sistem_motorik;
        $data->cerebellum = $request->cerebellum;
        $data->vegetatif = $request->vegetatif;
        $data->pemeriksaan_laboratorium = $request->pemeriksaan_laboratorium;
        $data->hasil_laboratorium = $request->hasil_laboratorium;
        $data->keterangan_laboratorium = $request->keterangan_laboratorium;
        $data->jam_pemeriksaan_laboratorium = $request->jam_pemeriksaan_laboratorium;
        $data->jam_hasil_laboratorium = $request->jam_hasil_laboratorium;
        $data->pemeriksaan_radiologi = $request->pemeriksaan_radiologi;
        $data->hasil_radiologi = $request->hasil_radiologi;
        $data->keterangan_radiologi = $request->keterangan_radiologi;
        $data->jam_pemeriksaan_radiologi = $request->jam_pemeriksaan_radiologi;
        $data->jam_hasil_radiologi = $request->jam_hasil_radiologi;
        $data->pemeriksaan_ekg = $request->pemeriksaan_ekg;
        $data->hasil_ekg = $request->hasil_ekg;
        $data->keterangan_ekg = $request->keterangan_ekg;
        $data->jam_pemeriksaan_ekg = $request->jam_pemeriksaan_ekg;
        $data->jam_hasil_ekg = $request->jam_hasil_ekg;
        $data->pemeriksaan_lain = $request->pemeriksaan_lain;
        $data->hasil_lain = $request->hasil_lain;
        $data->keterangan_lain = $request->keterangan_lain;
        $data->jam_pemeriksaan_lain = $request->jam_pemeriksaan_lain;
        $data->jam_hasil_lain = $request->jam_hasil_lain;
        $data->panssec = $request->panssec;
        $data->gaff = $request->gaff;
        $data->p4 = $request->p4;
        $data->g8 = $request->g8;
        $data->p7 = $request->p7;
        $data->g14 = $request->g14;
        $data->g4 = $request->g4;
        $data->bangsal = $request->bangsal;
        $data->tanggal_pemeriksaan = $request->tanggal_pemeriksaan;
        $data->axis_1 = $request->axis_1;
        $data->axis_2 = $request->axis_2;
        $data->axis_3 = $request->axis_3;
        $data->axis_4 = $request->axis_4;
        $data->axis_5 = $request->axis_5;
        $data->diagnosis_utama = $request->diagnosis_utama;
        $data->diagnosis_sekunder = $request->diagnosis_sekunder;
        $data->daftar_masalah = $request->daftar_masalah;
        $data->tindak_lanjut = $request->tindak_lanjut;
        if($request->kontrol == 'true') {
            $data->kontrol = True;
        }
        $data->tanggal_kontrol = $request->tanggal_kontrol;
        $data->dirawat_di_ruang = $request->dirawat_di_ruang;
        $data->indikasi_rawat_inap = $request->indikasi_rawat_inap;
        $data->alasan_menolak = $request->alasan_menolak;
        $data->alasan_menolak_lainnya = $request->alasan_menolak_lainnya;
        $data->dirujuk_ke = $request->dirujuk_ke;
        $data->alasan_rujuk = $request->alasan_rujuk;
        if(isset($request->doa)) {
            $data->doa = True;
        }
        $data->jam_keluar = $request->jam_keluar;
        $kesadaran_saat_keluar = '';
        if(isset($request->kesadaran_saat_keluar_1)) {
            $kesadaran_saat_keluar .= '1-';
        }
        if(isset($request->kesadaran_saat_keluar_2)) {
            $kesadaran_saat_keluar .= '2-';
        }
        if(isset($request->kesadaran_saat_keluar_3)) {
            $kesadaran_saat_keluar .= '3-';
        }
        if(isset($request->kesadaran_saat_keluar_4)) {
            $kesadaran_saat_keluar .= '4-';
        }
        if(isset($request->kesadaran_saat_keluar_5)) {
            $kesadaran_saat_keluar .= '5-';
        }
        if(isset($request->kesadaran_saat_keluar_6)) {
            $kesadaran_saat_keluar .= '6-';
        }
        if(isset($request->kesadaran_saat_keluar_7)) {
            $kesadaran_saat_keluar .= '7-';
        }
        if(strlen($kesadaran_saat_keluar) > 0) {
            $kesadaran_saat_keluar = substr($kesadaran_saat_keluar, 0, -1);
        }
        $data->kesadaran_saat_keluar = $kesadaran_saat_keluar;
        $data->gcs = $request->gcs;
        $data->kesadaran_lainnya = $request->kesadaran_lainnya;
        $data->tensi = $request->tensi;
        $data->nadi = $request->nadi;
        $data->pernafasan = $request->pernafasan;
        $data->suhu = $request->suhu;
        $data->save();

        //old obat
        $previous_obat = $request->previous_obat;
        $previous_obat = explode('-', $previous_obat);
        foreach ($previous_obat as $id_obat) {
            //updating
            $str_nama_obat = 'nama_obat_'.$id_obat;
            if(isset($request->$str_nama_obat)) {
                $obat = IGDObatSaatIni::where('id', $id_obat)->first();
                $str_dibawa = 'dibawa_'.$id_obat;
                $str_jumlah = 'jumlah_'.$id_obat;
                $str_tidak_dibawa = 'tidak_dibawa_'.$id_obat;
                $str_keterangan = 'keterangan_'.$id_obat;
                $obat->nama_obat = $request->$str_nama_obat;
                $obat->dibawa = $request->$str_dibawa;
                $obat->jumlah = $request->$str_jumlah;
                $obat->tidak_dibawa = $request->$str_tidak_dibawa;
                $obat->keterangan = $request->$str_keterangan;
                $obat->save();
            }
            //deleting
            else {
                $obat = IGDObatSaatIni::where('id', $id_obat)->first();
                $obat->delete();
            }
        }
        //new obat
        $jumlah_form_obat_new = $request->jumlah_form_obat_new;
        for($i = 1; $i <= $jumlah_form_obat_new; $i++) {
            $obat = new IGDObatSaatIni;
            $obat->id_regis = $data->id_regis;
            $str_nama_obat = 'nama_obat_new_'.$i;
            $str_dibawa = 'dibawa_new_'.$i;
            $str_jumlah = 'jumlah_new_'.$i;
            $str_tidak_dibawa = 'tidak_dibawa_new_'.$i;
            $str_keterangan = 'keterangan_new_'.$i;
            if(!empty($request->$str_nama_obat)) {
                $obat->nama_obat = $request->$str_nama_obat;
                $obat->dibawa = $request->$str_dibawa;
                $obat->jumlah = $request->$str_jumlah;
                $obat->tidak_dibawa = $request->$str_tidak_dibawa;
                $obat->keterangan = $request->$str_keterangan;
                $obat->save();
            }
        }

        //old tindakan
        $previous_tindakan = $request->previous_tindakan;
        $previous_tindakan = explode('-', $previous_tindakan);
        foreach($previous_tindakan as $id_tindakan) {
            //updating
            $str_jam_tindakan = 'jam_tindakan_'.$id_tindakan;
            if(isset($request->$str_jam_tindakan)) {
                $tindakan = IGDTindakanTerapi::where('id', $id_tindakan)->first();
                $str_tindakan_terapi = 'tindakan_terapi_'.$id_tindakan;
                $tindakan->jam = $request->$str_jam_tindakan;
                $tindakan->tindakan = $request->$str_tindakan_terapi;
                $tindakan->save();
            }
            //deleting
            else {
                $tindakan = IGDTindakanTerapi::where('id', $id_tindakan)->first();
                $tindakan->delete();
            }
        }
        //new tindakan
        $jumlah_form_tindakan_new = $request->jumlah_form_tindakan_new;
        for($i = 1; $i <= $jumlah_form_tindakan_new; $i++) {
            $tindakan = new IGDTindakanTerapi;
            $tindakan->id_regis = $data->id_regis;
            $str_jam_tindakan = 'jam_tindakan_new_'.$i;
            $str_tindakan_terapi = 'tindakan_terapi_new_'.$i;
            if(!empty($request->$str_tindakan_terapi) and !empty($request->$str_jam_tindakan)) {
                $tindakan->jam = $request->$str_jam_tindakan;
                $tindakan->tindakan = $request->$str_tindakan_terapi;
                $tindakan->save();
            }
        }
        return redirect('daftar_dokumen');
    }

    function yesno($stats)
    {
        if($stats)
        {
            return 'Ya';
        }
        else
        {
            return 'Tidak';
        }
    }

    function adatidak($stats)
    {
        if($stats)
        {
            return 'Ada';
        }
        else
        {
            return 'Tidak Ada';
        }
    }

    function convert()
    {

        $this->data['riwayat_operasi'] = yesno($this->data['riwayat_operasi']);
        $this->data['riwayat_tranfusi'] = yesno($this->data['riwayat_tranfusi']);
        $this->data['reaksi_tranfusi'] = yesno($this->data['reaksi_tranfusi']);
        $this->data['must_asupan'] = yesno($this->data['must_asupan']);
        $this->data['must_diagnosis'] = yesno($this->data['must_diagnosis']);
        $this->data['pendarahan'] = adatidak($this->data['pendarahan']);
        $this->data['sk_2'] = yesno($this->data['sk_2']);
        $this->data['sk_3'] = yesno($this->data['sk_3']);
        $this->data['sk_4'] = yesno($this->data['sk_4']);
        $this->data['nyeri_berpindah'] = yesno($this->data['nyeri_berpindah']);
        $this->data['edema'] = yesno($this->data['edema']);

        if($this->data['kontrol'])
        {
            $this->data['kontrol'] = 'Perlu Kontrol';
        }
        else
        {
            $this->data['kontrol'] = 'Tidak perlu kontrol';
        }


         if($this->data['visum'])
        {
            $this->data['visum'] = 'Dengan disertai VISUM ET REPERTUM PSIKIATRIKUM';
        }
        else
        {
            $this->data['visum'] = 'Tidak disertai VISUM ET REPERTUM PSIKIATRIKUM';
        }

        if($this->data['keluhan_nyeri'])
        {
            $this->data['keluhan_nyeri'] = 'Ada nyeri';
        }
        else
        {
            $this->data['keluhan_nyeri'] = 'Tidak ada nyeri';
        }

        if($this->data['tekanan_intrakanal'])
        {
            $this->data['tekanan_intrakanal'] = 'Ada keluhan :';
        }
        else
        {
            $this->data['tekanan_intrakanal'] = 'Tidak ada keluhan';
        }

        //resiko jatuh
        if($this->data['humpty_1']=='1')
        {
            $this->data['humpty_1'] = '(Skor: 4) Dibawah 3 tahun';
        }
        elseif ($this->data['humpty_1']=='2') {
            $this->data['humpty_1'] = '(Skor: 3) 3 – 7 tahun'; 
        }
        elseif ($this->data['humpty_1']=='3') {
            $this->data['humpty_1'] = '(Skor: 2) 7 – 13 tahun'; 
        }
        else {
            $this->data['humpty_1'] = '(Skor: 1) > 13 tahun';
        }

        if($this->data['humpty_2']=='1')
        {
            $this->data['humpty_2'] = '(Skor: 4) Kelainan Neurologi';
        }
        elseif ($this->data['humpty_2']=='2') {
            $this->data['humpty_2'] = '(Skor: 3) Perubahan dalam oksigenasi(masalah saluran nafas, dehidtrasi, anemia, anoreksia, sinkop / sakit kepala, dll)'; 
        }
        elseif ($this->data['humpty_2']=='3') {
            $this->data['humpty_2'] = '(Skor: 2) Kelainan psikis / prilaku'; 
        }
        else {
            $this->data['humpty_2'] = '(Skor: 1) Diagnosis lain';
        }

        if($this->data['humpty_3']=='1')
        {
            $this->data['humpty_3'] = '(Skor: 3) Tidak sadar terhadap keterbatasan (gangguan kesadaran, retardasi mental';
        }
        elseif ($this->data['humpty_3']=='2') {
            $this->data['humpty_3'] = '(Skor: 2) Lupa keterbatasan (anak yang hiperaktif)'; 
        }
        else {
            $this->data['humpty_3'] = '(Skor: 1) Mengetahui kemampuan diri';
        }

        if($this->data['humpty_4']=='1')
        {
            $this->data['humpty_4'] = '(Skor: 4) Riwayat jatuh dari tempat tidur saat bayi';
        }
        elseif ($this->data['humpty_4']=='2') {
            $this->data['humpty_4'] = '(Skor: 3) Pasien menggunakan alat bantu atau box meubel'; 
        }
        elseif ($this->data['humpty_4']=='3') {
            $this->data['humpty_4'] = '(Skor: 2) Pasien berada di tempat tidur'; 
        }
        else {
            $this->data['humpty_4'] = '(Skor: 1) Di luar ruang rawat';
        }

        if($this->data['humpty_5']=='1')
        {
            $this->data['humpty_5'] = '(Skor: 3) Dalam 24 Jam';
        }
        elseif ($this->data['humpty_5']=='2') {
            $this->data['humpty_5'] = '(Skor: 2) Dalam 48 Jam'; 
        }
        else {
            $this->data['humpty_5'] = '(Skor: 1) > 48 Jam';
        }

        if($this->data['humpty_6']=='1')
        {
            $this->data['humpty_6'] = '(Skor: 3) Bermacam-macam obat yang digunakan : obat sedatif (kecuali pasien ICU yang menggunakan sedasi dan paralisis), Hiptonik Barbitural, Fonotiazin, Antidepresan, Laksansia / Diuretikan, Narkotik';
        }
        elseif ($this->data['humpty_6']=='2') {
            $this->data['humpty_6'] = '(Skor: 2) Salah satu Pengobatan di atas'; 
        }
        else {
            $this->data['humpty_6'] = '(Skor: 1) Pengobatan lain';
        }

        if($this->data['morse_1']=='1')
        {
            $this->data['morse_1'] = '(Skor: 25) Ya';
        }
        else {
            $this->data['morse_1'] = '(Skor: 0) Tidak';
        }

        if($this->data['morse_2']=='1')
        {
            $this->data['morse_2'] = '(Skor: 15) Ya';
        }
        else {
            $this->data['morse_2'] = '(Skor: 0) Tidak';
        }

        if($this->data['morse_3']=='1')
        {
            $this->data['morse_3'] = '(Skor: 30) Perabot';
        }
        elseif ($this->data['morse_3']=='2') {
            $this->data['morse_3'] = '(Skor: 15) Tongkat/Alat Penopang'; 
        }
        else {
            $this->data['morse_3'] = '(Skor: 0) Tidak ada/Kursi Roda/Perawat/Tirah Baring';
        }

        if($this->data['morse_4']=='1')
        {
            $this->data['morse_4'] = '(Skor: 20) Ya';
        }
        else {
            $this->data['morse_4'] = '(Skor: 0) Tidak';
        }

        if($this->data['morse_5']=='1')
        {
            $this->data['morse_5'] = '(Skor: 20) Terganggu';
        }
        elseif ($this->data['morse_5']=='2') {
            $this->data['morse_5'] = '(Skor: 10) Lemah'; 
        }
        else {
            $this->data['morse_5'] = '(Skor: 0) Normal/Tirah Baring/Imobilisasi';
        }

        if($this->data['morse_6']=='1')
        {
            $this->data['morse_6'] = '(Skor: 15) Sering lupa akan keterbatasan yang dimiliki';
        }
        else {
            $this->data['morse_6'] = '(Skor: 0) Orientasi baik terhadap kemampuan diri sendiri';
        }

        if($this->data['edmunson_1']=='1')
        {
            $this->data['edmunson_1'] = '(Skor: 4) Kesadaran baik/orientasi baik setiap saat';
        }
        elseif ($this->data['edmunson_1']=='2') {
            $this->data['edmunson_1'] = '(Skor: 12) Agitasi/Ansietas'; 
        }
        elseif ($this->data['edmunson_1']=='3') {
            $this->data['edmunson_1'] = '(Skor: 13) Kadang-kadang bingung'; 
        }
        else {
            $this->data['edmunson_1'] = '(Skor: 14) Bingung/Disorientasi';
        }

        if($this->data['edmunson_2']=='1')
        {
            $this->data['edmunson_2'] = '(Skor: ) Kelainan Neurologi';
        }
        elseif ($this->data['edmunson_2']=='2') {
            $this->data['edmunson_2'] = '(Skor: ) Perubahan dalam oksigenasi(masalah saluran nafas, dehidtrasi, anemia, anoreksia, sinkop / sakit kepala, dll)'; 
        }
        elseif ($this->data['edmunson_2']=='3') {
            $this->data['edmunson_2'] = '(Skor: ) Kelainan psikis / prilaku'; 
        }
        else {
            $this->data['edmunson_2'] = '(Skor: ) Diagnosis lain';
        }

        if($this->data['edmunson_3']=='1')
        {
            $this->data['edmunson_3'] = '(Skor: 8) Mandiri dan mampi mengontrol BAB/BAK';
        }
        elseif ($this->data['edmunson_3']=='2') {
            $this->data['edmunson_3'] = '(Skor: 12) Dower Catheter/Colostomy'; 
        }
        elseif ($this->data['edmunson_3']=='3') {
            $this->data['edmunson_3'] = '(Skor: 10) Eliminasi dengan bantuan'; 
        }
        elseif ($this->data['edmunson_3']=='4') {
            $this->data['edmunson_3'] = '(Skor: 12) Gangguan eliminasi (Inkontinensia/Nokturia/Frekwensi)'; 
        }
        else {
            $this->data['edmunson_3'] = '(Skor: 12) Inkontinesia tetapi mampu untuk mobilisasi';
        }

        if($this->data['edmunson_4']=='1')
        {
            $this->data['edmunson_4'] = '(Skor: 10) Tanpa obat-obatan';
        }
        elseif ($this->data['edmunson_4']=='2') {
            $this->data['edmunson_4'] = '(Skor: 10) Obat-obatan jantung'; 
        }
        elseif ($this->data['edmunson_4']=='3') {
            $this->data['edmunson_4'] = '(Skor: 8) Obat-obat psikotropika (termasuk Benzodiazepine dan Antidepresan)'; 
        }
        else {
            $this->data['edmunson_4'] = '(Skor: 12) Mendapat tambahan obat-obatan dan/atau obat-obat PRN (psikiatri, antinyeri) yang diberikan dalam 24 jam terakhir';
        }

        if($this->data['edmunson_5']=='1')
        {
            $this->data['edmunson_5'] = '(Skor: 10) Bipolar/ Gangguan Schizoaffective';
        }
        elseif ($this->data['edmunson_5']=='2') {
            $this->data['edmunson_5'] = '(Skor: 8) Penggunaan Obat-obatan terlarang/ketergantungan alkohol'; 
        }
        elseif ($this->data['edmunson_5']=='3') {
            $this->data['edmunson_5'] = '(Skor: 10) Gangguan Depresi Mayor'; 
        }
        else {
            $this->data['edmunson_5'] = '(Skor: 12) Dimensia/ Delirium';
        }

        if($this->data['edmunson_6']=='1')
        {
            $this->data['edmunson_6'] = '(Skor: 8) Mandiri/Keseimbangan Baik/Immobilisasi';
        }
        elseif ($this->data['edmunson_6']=='2') {
            $this->data['edmunson_6'] = '(Skor: 8) Dengan Alat Bantu (Kursi roda, walker,dll)'; 
        }
        elseif ($this->data['edmunson_6']=='3') {
            $this->data['edmunson_6'] = '(Skor: 10) Vertigo/kelemahan'; 
        }
        elseif ($this->data['edmunson_6']=='4') {
            $this->data['edmunson_6'] = '(Skor: 8) Goyah/membutuhkan mantuan dan menyadari kemampuan'; 
        }
        else {
            $this->data['edmunson_6'] = '(Skor: 15) Goyah tapi lupa keterbatasan';
        }

        if($this->data['edmunson_7']=='1')
        {
            $this->data['edmunson_7'] = '(Skor: 12) Mengkonsumsi sedikit makanan atau minuman  dalam 24 jam terakhir';
        }
        else{
            $this->data['edmunson_7'] = '(Skor: 0) Tidak ada kelainan dengan nafsu makan'; 
        }

        if($this->data['edmunson_8']=='1')
        {
            $this->data['edmunson_8'] = '(Skor: 8) Tidak ada riwayat jatuh';
        }
        else {
            $this->data['edmunson_8'] = '(Skor: 12) Ada riwayat jatuh dalam 3 bulan terakhir';
        }

        //panss

        if($this->data['p4']=='1')
        {
            $this->data['p4'] = 'Tidak ada - definisi tidak dipenuhi';
            $this->data['pe1'] = 1;
        }
        elseif($this->data['p4']=='2')
        {
            $this->data['p4'] = 'Minimal – patologis diragukan';
            $this->data['pe1'] = 2;
        }
        elseif($this->data['p4']=='3')
        {
            $this->data['p4'] = 'Ringan – sedikit agitatif, waspada berlebihan, atau sedikit mudah terangsang selama wawancara, tanpa episode yang jelas dari gaduh gelisah atau labilitas alam perasaan yang mecolok. Pembicaraan mungkin sedikit mendesah';
            $this->data['pe1'] = 3;
        }
        elseif($this->data['p4']=='4')
        {
            $this->data['p4'] = 'Sedang – agitasi atau mudah terangsang yang jelas, ledakan-ledakan episodik';
            $this->data['pe1'] = 4;
        }
        elseif($this->data['p4']=='5')
        {
            $this->data['p4'] = 'Agak berat – hiperaktivitas yang bermakna, sering terjadi ledakan-leadakan atau aktivitas mototrik, sulit untuk tetap duduk';
            $this->data['pe1'] = 5;
        }
        elseif($this->data['p4']=='6')
        {
            $this->data['p4'] = 'Berat – gaduh gelisah yang mencolok mempengaruhi fungsi sehari-hari seperti makan  dan tidur';
            $this->data['pe1'] = 6;
        }
        else {
            $this->data['p4'] = 'Sangat berat – gaduh gelisah yang mencolok, mempengaruhi kegiatan makan dan tidur, serta jelas tidak memungkinkan interaksi interpersonal. Percepatan dan pembicaraan dan aktivitas motorik dapat menimbulkan inkoherensi dan kelelahan';
            $this->data['pe1'] = 7;
        }

        if($this->data['g8']=='1')
        {
            $this->data['g8'] = 'Tidak ada - definisi tidak dipenuhi';
            $this->data['pe2'] = 1;
        }
        elseif($this->data['g8']=='2')
        {
            $this->data['g8'] = 'Minimal – patologis diragukan';
            $this->data['pe2'] = 2;
        }
        elseif($this->data['g8']=='3')
        {
            $this->data['g8'] = 'Ringan – patuh tapi disertai sikap marah tidak sabar atau sarkasme, mungkin ada penolakan yang tidak mengganggu terhadap penyelidikan yang sensitif selama wawancara';
            $this->data['pe2'] = 3;
        }
        elseif($this->data['g8']=='4')
        {
            $this->data['g8'] = 'Sedang – kadang-kadang terdapat penolakan langsung untuk patuh, memproyeksikan hostilitas, defensif atau bersifat negatif tetapi biasanya masih dapat diatasi';
            $this->data['pe2'] = 4;
        }
        elseif($this->data['g8']=='5')
        {
            $this->data['g8'] = 'Agak berat – seringkali tidak patuh, jelas defensif atau iritabilitas terhadap pewawancara dan mungkin tidak bersedia menghadapi banyak pertanyaan';
            $this->data['pe2'] = 5;
        }
        elseif($this->data['g8']=='6')
        {
            $this->data['g8'] = 'Berat – sangat tidak kooperatif, negativistik dan suka membangkang. Menolak untuk patuh, tidak mau memulai atau mengikuti wawancara sepenuhnya';
            $this->data['pe2'] = 6;
        }
        else {
            $this->data['g8'] = 'Sangat berat – resistensi aktif, menolak untuk ikut dalam aktivitas sosial apapun, mengurus kebersihan diri, bercakap-cakap dengan keluarga atau staf dan bahkan untuk berpartisipasi dalam wawancara singkat';
            $this->data['pe2'] = 7;
        }

        if($this->data['p7']=='1')
        {
            $this->data['p7'] = 'Tidak ada - definisi tidak dipenuhi';
            $this->data['pe3'] = 1;
        }
        elseif($this->data['p7']=='2')
        {
            $this->data['p7'] = 'Minimal – patologis diragukan';
            $this->data['pe3'] = 2;
        }
        elseif($this->data['p7']=='3')
        {
            $this->data['p7'] = 'Ringan – melampiaskan kemarahan secara tidak langsung atau ditahan';
            $this->data['pe3'] = 3;
        }
        elseif($this->data['p7']=='4')
        {
            $this->data['p7'] = 'Sedang – sikap bermusuhan yang nyata';
            $this->data['pe3'] = 4;
        }
        elseif($this->data['p7']=='5')
        {
            $this->data['p7'] = 'Agak berat – pasien sangat mudah marah dan kadang-kadang memaki dengan kata-kata kasar atau mengancam';
            $this->data['pe3'] = 5;
        }
        elseif($this->data['p7']=='6')
        {
            $this->data['p7'] = 'Berat – tidak kooperatif dan mencaci maki dengan kasar atau mengancam, dapat beringas dan merusak tetapi tidak menyerang orang lain secara fisik';
            $this->data['pe3'] = 6;
        }
        else {
            $this->data['p7'] = 'Sangat berat – kemarahan yang hebat berakibat sangat tidak kooperatif, menghalangi interaksi, atau secara episodik melakukan penyerangan fisik terhadap orang lain';
            $this->data['pe3'] = 7;
        }

        if($this->data['g14']=='1')
        {
            $this->data['g14'] = 'Tidak ada - definisi tidak dipenuhi';
            $this->data['pe4'] = 1;
        }
        elseif($this->data['g14']=='2')
        {
            $this->data['g14'] = 'Minimal – patologis diragukan';
            $this->data['pe4'] = 2;
        }
        elseif($this->data['g14']=='3')
        {
            $this->data['g14'] = 'Ringan – cenderung mudah marah dan frustasi bila menghadapi stres atau pemuasannya ditolak tetapi jarang bertindak impulsif';
            $this->data['pe4'] = 3;
        }
        elseif($this->data['g14']=='4')
        {
            $this->data['g14'] = 'Sedang – dengan provokasi yang minimal, pasien menjadi marah dan mencaci maki. Mungkin sekali-kali mengancam, merusak atau terdapat satu atau dua episode yang melibatkan konfrontasi fisik atau perselisihan ringan';
            $this->data['pe4'] = 4;
        }
        elseif($this->data['g14']=='5')
        {
            $this->data['g14'] = 'Agak berat – memperlihatkan episode impulsif yang berulang, termasuk mencaci maki, merusak harta benda atau ancaman fisik. Mungkin ada satu atau dua episode yang melibatkan serangn serius';
            $this->data['pe4'] = 5;
        }
        elseif($this->data['g14']=='6')
        {
            $this->data['g14'] = 'Berat – agresif secara impulsif, mengancam, menuntut dan merusak, tanpa pertimbangan terhadap konsekuensinya. Menunjukkan perilaku menyerang';
            $this->data['pe4'] = 6;
        }
        else {
            $this->data['g14'] = 'Sangat berat – memperlihatkan serangan kebrutalan dan berbahaya';
            $this->data['pe4'] = 7;
        }

        if($this->data['g4']=='1')
        {
            $this->data['g4'] = 'Tidak ada - definisi tidak dipenuhi';
            $this->data['pe5'] = 1;
        }
        elseif($this->data['g4']=='2')
        {
            $this->data['g4'] = 'Minimal – patologis diragukan';
            $this->data['pe5'] = 2;
        }
        elseif($this->data['g4']=='3')
        {
            $this->data['g4'] = 'Ringan – postur dan gerakan-gerakan menunjukkan kekhawatiran ringan, ketidaktenangan yang sekali-kali, perubahan posisi, atau tremor tangan yang halus dan cepat';
            $this->data['pe5'] = 3;
        }
        elseif($this->data['g4']=='4')
        {
            $this->data['g4'] = 'Sedang – nyata-nyata gelisah seperti perilaku tidak tenang, tremor tangan yang nyata, keringat berlebihan, atau manerisme karena gugup';
            $this->data['pe5'] = 4;
        }
        elseif($this->data['g4']=='5')
        {
            $this->data['g4'] = 'Agak berat – ketegangan yang berat, manifestasi seperti gemetar karena gugup, keringat sangat berlebihan dan ketidaktenangan, perilaku selama wawancara tidak terpengaruh secara bermakna';
            $this->data['pe5'] = 5;
        }
        elseif($this->data['g4']=='6')
        {
            $this->data['g4'] = 'Berat – Ketegangan berat, taraf interaksi terganggu. Misalnya terus-menerus bergerak, tidak dapat tetap duduk, hiperventilasi';
            $this->data['pe5'] = 6;
        }
        else {
            $this->data['g4'] = 'Sangat berat – ketegangan sangat mencolok, tanda panik atau percepatan gerakan motorik kaar, ketidak mampuan tetap duduk > 1 menit yang menyebabkan percakapan tidak mungkin diteruskan';
            $this->data['pe5'] = 7;
        }
    }

    public function igd_asesmen_pdf()
    {
        $this->get_igd_asesmen_awal_rawat_darurat_perawat_data();
        $this->get_igd_asesmen_awal_rawat_darurat_dokter_data();
        
        $this->convert()
        ob_clean();

        header('Content-type: application/pdf');

        $mpdf = new \Mpdf\Mpdf([
        'mode' => 'utf-8', 
        'format' => 'A4-L', 
        'orientation' => 'P'
        ]);

        $view = View::make('doc_igd_asesmen',$this->data);
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
            </table> <hr> <br>' );

        $mpdf->SetHTMLFooter('<hr>
            <table width="100%" style="vertical-align: bottom; font-family: "arial", Times, serif; 
                font-size: 8pt; color: #000000; font-weight: bold; font-style: italic;">
                <tr>
                    <td width="33%">{DATE j-m-Y}</td>
                    <td width="33%" align="center">{PAGENO}/{nbpg}</td>
                    <td width="33%" style="text-align: right;">RM. 02.00.IGD JULI 2015</td>
                </tr>
            </table>'); 

        $stylesheet = '<style>'.file_get_contents('css/pdf.css').'</style>';

        $mpdf->AddPage('P','','','','',10,10,35,20,10,10);
        //right,left
        $mpdf->WriteHTML($stylesheet, 1);
        $mpdf->WriteHTML($contents,2,true,false);

        $mpdf->Output('igd_asesmen.pdf',\Mpdf\Output\Destination::INLINE);
    }
}