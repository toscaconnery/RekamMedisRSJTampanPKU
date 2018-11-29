<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RJNyeri;
use App\Models\HumptyDumpty;
use App\Models\Morse;
use App\Models\Edmunson;
use App\Models\RJDataMedik;
use Session;
use App\Models\RJAsesmenGigiKeperawatan;

class RJAsesmenAwalGigiController extends Controller
{
    public function __construct()
    {
        $this->data['title'] = 'Asesmen Awal Pasien Gigi Rawat Jalan';
    }

    public function get_rj_asesmen_awal_gigi_perawat()
    {
        return view('page.rj.asesmen_awal_gigi_perawat', $this->data);
    }

    public function get_rj_asesmen_awal_gigi_dokter()
    {
        return view('page.rj.asesmen_awal_gigi_dokter', $this->data);
    }

    public function post_rj_asesmen_awal_gigi_perawat(Request $request)
    {
        //PENILAIAN TINGKAT NYERI
        $data = new RJAsesmenGigiKeperawatan;
        $id_pasien = Session::get('id_pasien');
        $data->id_regis = $id_pasien;

        $data->pekerjaan = $request->pekerjaan;
        $data->alamat = $request->alamat;
        $data->no_telp = $request->no_telp;

        $data->tingkat = $request->tingkat;
        $data->skala = $request->skala;
        $data->lokasi = $request->lokasi;
        $data->lokasi = $request->lokasi;
        $data->durasi = $request->durasi;
        $data->frekuensi = $request->frekuensi;
        $hilang = "";
        if(isset($request->hilang1)) {
            $hilang .= "1-";
        }
        if(isset($request->hilang2)) {
            $hilang .= "2-";
        }
        if(isset($request->hilang3)) {
            $hilang .= "3-";
        }
        if(isset($request->hilang4)) {
            $hilang .= "4-";
        }
        if(isset($request->hilang5)) {
            $hilang .= "5-";
            $data->nyeri_hilang_input_text = $request->nyeri_hilang_input_text;
        }
        if(strlen($hilang) > 0) {
            $hilang = substr($hilang, 0, -1);
        }
        $data->hilang = $hilang;
        $data->pemberitahuan = $request->pemberitahuan;
        if($request->pemberitahuan == '1') {
            $data->waktu_pemberitahuan = $request->waktu_pemberitahuan;
        }

        $data->jenis_resiko_jatuh = $request->jenis_resiko_jatuh;
        if($request->jenis_resiko_jatuh == 'humpty_dumpty')
        {
            $data->usia = $request->usia;
            $data->diagnosis_hd = $request->diagnosis_hd;
            $data->gangguan_kognitif = $request->gangguan_kognitif;
            $data->faktor_lingkungan = $request->faktor_lingkungan;
            $data->waktu_respon_obat = $request->waktu_respon_obat;
            $data->penggunaan_obat = $request->penggunaan_obat;            
        }
        elseif($request->jenis_resiko_jatuh == 'morse')
        {
            $data->riwayat_jatuh_mrs = $request->riwayat_jatuh_mrs;
            $data->diagnosis_sekunder = $request->diagnosis_sekunder;
            $data->alat_bantu = $request->alat_bantu;
            $data->terpasang_infus = $request->terpasang_infus;
            $data->gaya_berjalan = $request->gaya_berjalan;
            $data->status_mental_mrs = $request->status_mental_mrs;
        }
        elseif($request->jenis_resiko_jatuh == 'edmunson')
        {
            $data->status_mental_edm = $request->status_mental_edm;
            $data->diagnosis_edm = $request->diagnosis_edm;
            $data->eliminasi = $request->eliminasi;
            $data->pengobatan = $request->pengobatan;
            $data->diagnosa = $request->diagnosa;
            $data->ambulasi = $request->ambulasi;
            $data->nutrisi = $request->nutrisi;
            $data->riwayat_jatuh_edm = $request->riwayat_jatuh_edm;
        }

        $data->save();
        return redirect('rj_asesmen_awal_gigi_perawat_read');
    }

    public function get_rj_asesmen_awal_gigi_perawat_data()
    {
        $id_pasien = Session::get('id_pasien');
        $pasien = RJAsesmenGigiKeperawatan::where('id_regis', $id_pasien)->first();
        $this->data['pekerjaan'] = $pasien->pekerjaan;
        $this->data['alamat'] = $pasien->alamat;
        $this->data['no_telp'] = $pasien->no_telp;
        $this->data['tingkat'] = $pasien->tingkat;
        $this->data['skala'] = $pasien->skala;
        $this->data['lokasi'] = $pasien->lokasi;
        $this->data['durasi'] = $pasien->durasi;
        $this->data['frekuensi'] = $pasien->frekuensi;
        $hilang = explode('-', $pasien->hilang);
        $this->data['hilang'] = array();
        foreach ($hilang as $key => $value) {
            $this->data['hilang'][$value] = True;
        }
        $this->data['nyeri_hilang_input_text'] = $pasien->nyeri_hilang_input_text;
        $this->data['pemberitahuan'] = $pasien->pemberitahuan;
        $this->data['waktu_pemberitahuan'] = $pasien->waktu_pemberitahuan;
        $this->data['jenis_resiko_jatuh'] = $pasien->jenis_resiko_jatuh;
        $this->data['usia'] = $pasien->usia;
        $this->data['diagnosis_hd'] = $pasien->diagnosis_hd;
        $this->data['gangguan_kognitif'] = $pasien->gangguan_kognitif;
        $this->data['faktor_lingkungan'] = $pasien->faktor_lingkungan;
        $this->data['waktu_respon_obat'] = $pasien->waktu_respon_obat;
        $this->data['penggunaan_obat'] = $pasien->penggunaan_obat;
        $this->data['riwayat_jatuh_mrs'] = $pasien->riwayat_jatuh_mrs;
        $this->data['diagnosis_sekunder'] = $pasien->diagnosis_sekunder;
        $this->data['alat_bantu'] = $pasien->alat_bantu;
        $this->data['terpasang_infus'] = $pasien->terpasang_infus;
        $this->data['gaya_berjalan'] = $pasien->gaya_berjalan;
        $this->data['status_mental_mrs'] = $pasien->status_mental_mrs;
        $this->data['status_mental_edm'] = $pasien->status_mental_edm;
        $this->data['diagnosis_edm'] = $pasien->diagnosis_edm;
        $this->data['eliminasi'] = $pasien->eliminasi;
        $this->data['pengobatan'] = $pasien->pengobatan;
        $this->data['diagnosa'] = $pasien->diagnosa;
        $this->data['ambulasi'] = $pasien->ambulasi;
        $this->data['nutrisi'] = $pasien->nutrisi;
        $this->data['riwayat_jatuh_edm'] = $pasien->riwayat_jatuh_edm;
    }

    public function get_rj_asesmen_awal_gigi_perawat_read()
    {
        $this->get_rj_asesmen_awal_gigi_perawat_data();
        return view('page.rj.asesmen_awal_gigi_perawat_read', $this->data);
    }

    public function get_rj_asesmen_awal_gigi_perawat_edit()
    {
        $this->get_rj_asesmen_awal_gigi_perawat_data();
        return view('page.rj.asesmen_awal_gigi_perawat_edit', $this->data);
    }

    public function post_rj_asesmen_awal_gigi_perawat_edit(Request $request)
    {
        //PENILAIAN TINGKAT NYERI
        $id_pasien = Session::get('id_pasien');
        $data = RJAsesmenGigiKeperawatan::where('id_regis', $id_pasien)->first();
        $data->id_regis = $id_pasien;

        $data->pekerjaan = $request->pekerjaan;
        $data->alamat = $request->alamat;
        $data->no_telp = $request->no_telp;

        $data->tingkat = $request->tingkat;
        $data->skala = $request->skala;
        $data->lokasi = $request->lokasi;
        $data->lokasi = $request->lokasi;
        $data->durasi = $request->durasi;
        $data->frekuensi = $request->frekuensi;
        $hilang = "";
        if(isset($request->hilang1)) {
            $hilang .= "1-";
        }
        if(isset($request->hilang2)) {
            $hilang .= "2-";
        }
        if(isset($request->hilang3)) {
            $hilang .= "3-";
        }
        if(isset($request->hilang4)) {
            $hilang .= "4-";
        }
        if(isset($request->hilang5)) {
            $hilang .= "5-";
            $data->nyeri_hilang_input_text = $request->nyeri_hilang_input_text;
        }
        if(strlen($hilang) > 0) {
            $hilang = substr($hilang, 0, -1);
        }
        $data->hilang = $hilang;
        $data->pemberitahuan = $request->pemberitahuan;
        if($request->pemberitahuan == '1') {
            $data->waktu_pemberitahuan = $request->waktu_pemberitahuan;
        }

        $data->jenis_resiko_jatuh = $request->jenis_resiko_jatuh;
        if($request->jenis_resiko_jatuh == 'humpty_dumpty')
        {
            $data->usia = $request->usia;
            $data->diagnosis_hd = $request->diagnosis_hd;
            $data->gangguan_kognitif = $request->gangguan_kognitif;
            $data->faktor_lingkungan = $request->faktor_lingkungan;
            $data->waktu_respon_obat = $request->waktu_respon_obat;
            $data->penggunaan_obat = $request->penggunaan_obat;            
        }
        elseif($request->jenis_resiko_jatuh == 'morse')
        {
            $data->riwayat_jatuh_mrs = $request->riwayat_jatuh_mrs;
            $data->diagnosis_sekunder = $request->diagnosis_sekunder;
            $data->alat_bantu = $request->alat_bantu;
            $data->terpasang_infus = $request->terpasang_infus;
            $data->gaya_berjalan = $request->gaya_berjalan;
            $data->status_mental_mrs = $request->status_mental_mrs;
        }
        elseif($request->jenis_resiko_jatuh == 'edmunson')
        {
            $data->status_mental_edm = $request->status_mental_edm;
            $data->diagnosis_edm = $request->diagnosis_edm;
            $data->eliminasi = $request->eliminasi;
            $data->pengobatan = $request->pengobatan;
            $data->diagnosa = $request->diagnosa;
            $data->ambulasi = $request->ambulasi;
            $data->nutrisi = $request->nutrisi;
            $data->riwayat_jatuh_edm = $request->riwayat_jatuh_edm;
        }

        $data->save();

        return redirect('rj_asesmen_awal_gigi_perawat_read');
    }


    public function post_rj_asesmen_awal_gigi_dokter(Request $request)
    {
        $data = new RJDataMedik;
        $data->id_regis = $id_pasien;
        $data->golongan_darah = $request->golongan_darah;
        $data->tekanan_darah_top = $request->tekanan_darah_top;
        $data->tekanan_darah_bottom = $request->tekanan_darah_bottom;
         if($request->tekanan_jantung == 'true') {
            $data->ket_tekanan_jantung = $request->ket_tekanan_jantung;
         }
        if($request->diabetes == 'true') {
            $data->ket_diabetes = $request->ket_diabetes;
        }
        if($request->hepatitis == 'true') {
            $data->ket_hepatitis = $request->ket_hepatitis;
        }
        if($request->penyakit_lainnya == 'true') {
            $data->ket_penyakit_lainnya = $request->ket_penyakit_lainnya;
        }
        if($request->alergi_obat == 'true') {
            $data->ket_alergi_obat = $request->ket_alergi_obat;
        }
        if($request->alergi_makanan == 'true') {
            $data->ket_alergi_makanan = $request->ket_alergi_makanan;
        }
        $data->oklusi = $request->oklusi;
        $data->torus_palatinus = $request->torus_palatinus;
        $data->torus_mandibularis = $request->torus_mandibularis;
        $data->palatum = $request->palatum;
        if($request->supernumerary_teeth == 'true') {
            $data->ket_supernumerary_teeth = $request->ket_supernumerary_teeth;
        }
        if($request->diastema == 'true') {
            $data->ket_diastema = $request->ket_diastema;
        }
        if($request->anomali == 'true') {
            $data->ket_anomali = $request->ket_anomali;
        }
        $data->lain = $request->lain;
        $data->keterangan = $request->keterangan;
        $data->save();
        return redirect('index');

    }

    // public function get_rj_asesmen_awal_gigi_perawat_read2()
    // {
    //     //PENILAIAN TINGKAT NYERI

    //     $nyeri = RJNyeri::where('id', 1)->first();
        
    //     $this->data['id_regis'] = $nyeri->id_regis;
    //     $this->data['jenis_form'] = $nyeri->jenis_form;
    //     $this->data['skala'] = $nyeri->skala;
    //     $this->data['lokasi'] = $nyeri->lokasi;
    //     $this->data['durasi'] = $nyeri->durasi;
    //     $this->data['frekuensi'] = $nyeri->frekuensi;
    //     $this->data['hilang'] = $nyeri->hilang;
    //     $this->data['pemberitahuan'] = $nyeri->pemberitahuan;
        
    //     if($nyeri->pemberitahuan == '1') {
    //         $this->data['waktu_pemberitahuan'] = $nyeri->waktu_pemberitahuan;
    //     }
        

    //     //PENILAIAN RISIKO JATUH
    //     $humpty = HumptyDumpty::where('id', 1)->first();
        
    //     $this->data['id_regis'] = $humpty->id_regis;
    //     $this->data['jenis_form'] = $humpty->jenis_form;
    //     $this->data['usia'] = $humpty->usia;
    //     $this->data['diagnosis'] = $humpty->diagnosis;
    //     $this->data['gangguan_kognitif'] = $humpty->gangguan_kognitif;
    //     $this->data['faktor_lingkungan'] = $humpty->faktor_lingkungan;
    //     $this->data['waktu_respon_obat'] = $humpty->waktu_respon_obat;
    //     $this->data['penggunaan_obat'] = $humpty->penggunaan_obat;

    //     $morse = Morse::where('id', 1)->first();
        
    //     $this->data['id_regis'] = $morse->id_regis;
    //     $this->data['jenis_form'] = $morse->jenis_form;
    //     $this->data['riwayat_jatuh'] = $morse->riwayat_jatuh;
    //     $this->data['diagnosis_sekunder'] = $morse->diagnosis_sekunder;
    //     $this->data['alat_bantu'] = $morse->alat_bantu;
    //     $this->data['terpasang_infus'] = $morse->terpasang_infus;
    //     $this->data['gaya_berjalan'] = $morse->gaya_berjalan;
    //     $this->data['status_mental'] = $morse->status_mental;

    //     $edmunson = Edmunson::where('id', 1)->first();
        
    //     $this->data['id_regis'] = $edmunson->id_regis;
    //     $this->data['jenis_form'] = $edmunson->jenis_form;
    //     $this->data['status_mental'] = $edmunson->status_mental;
    //     $this->data['diagnosis'] = $edmunson->diagnosis;
    //     $this->data['eliminasi'] = $edmunson->eliminasi;
    //     $this->data['pengobatan'] = $edmunson->pengobatan;
    //     $this->data['diagnosa'] = $edmunson->diagnosa;
    //     $this->data['ambulasi'] = $edmunson->ambulasi;
    //     $this->data['nutrisi'] = $edmunson->nutrisi;
    //     $this->data['riwayat_jatuh'] = $edmunson->riwayat_jatuh;

    //     return view('page.rj.asesmen_awal_gigi_perawat_read', $this->data);
    // }

    public function get_rj_asesmen_awal_gigi_dokter_read()
    {
        $Pasien = RJDataMedik::where('id', 1)->first();
        
        $this->data['id_regis'] = $pasien->id_regis;
        $this->data['golongan_darah'] = $pasien->golongan_darah;
        $this->data['tekanan_darah_top'] = $pasien->tekanan_darah_top;
        $this->data['tekanan_darah_bottom'] = $pasien->tekanan_darah_bottom;
        
        if( $pasien->tekanan_jantung == True) {
            $this->data['tekanan_jantung'] = $pasien->tekanan_jantung;
        }

        if( $pasien->diabetes == True) {
            $this->data['diabetes'] = $pasien->diabetes;
        }

        if( $pasien->hepatitis == True) {
            $this->data['hepatitis'] = $pasien->hepatitis;
        }

        if( $pasien->penyakit_lainnya == True) {
            $this->data['penyakit_lainnya'] = $pasien->penyakit_lainnya;
        }

        if( $pasien->alergi_obat == True) {
            $this->data['alergi_obat'] = $pasien->alergi_obat;
        }

        if( $pasien->alergi_makanan == True) {
            $this->data['alergi_makanan'] = $pasien->alergi_makanan;
        }

        $this->data['oklusi'] = $pasien->oklusi;
        $this->data['torus_palatinus'] = $pasien->torus_palatinus;
        $this->data['torus_mandibularis'] = $pasien->torus_mandibularis;
        $this->data['palatum'] = $pasien->palatum;

        if( $pasien->supernumerary_teeth == True) {
            $this->data['supernumerary_teeth'] = $pasien->supernumerary_teeth;
        }

        if( $pasien->diastema == True) {
            $this->data['diastema'] = $pasien->diastema;
        }

        if( $pasien->anomali == True) {
            $this->data['anomali'] = $pasien->anomali;
        }

        $this->data['lain'] = $pasien->lain;
        $this->data['keterangan'] = $pasien->keterangan;

        return view('page.rj_asesmen_awal_gigi_dokter_read', $this->data);
    }
}
