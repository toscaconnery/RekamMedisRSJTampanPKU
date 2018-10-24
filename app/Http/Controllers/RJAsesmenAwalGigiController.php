<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RJNyeri;
use App\Models\HumptyDumpty;
use App\Models\Morse;
use App\Models\Edmunson;
use App\Models\RJDataMedik;
use Session;

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
        $nyeri = new RJNyeri;
        if(Session::has('id_pasien')) {
            $id_pasien = Session::get('id_pasien');
        }
        else {
            $id_pasien = 1;
        }
        $nyeri->id_regis = $id_pasien;
        $nyeri->jenis_form = 'gigi';
        $nyeri->tingkat = $request->tingkat;
        $nyeri->skala = $request->skala;
        $nyeri->lokasi = $request->lokasi;
        $nyeri->lokasi = $request->lokasi;
        $nyeri->durasi = $request->durasi;
        $nyeri->frekuensi = $request->frekuensi;
        $hilang = "";
        if(isset($request->hilang1)) {
            $hilang .= "Minum obat, ";
        }
        if(isset($request->hilang2)) {
            $hilang .= "Mendengar musik, ";
        }
        if(isset($request->hilang3)) {
            $hilang .= "Istirahat, ";
        }
        if(isset($request->hilang4)) {
            $hilang .= "Berubah posisi/tidur, ";
        }
        if(isset($request->hilang5)) {
            $hilang .= $request->nyeri_hilang_input_text;
            $hilang .", ";
        }
        $hilang = substr($hilang, 0, -1);
        $nyeri->hilang = $hilang;
        $nyeri->pemberitahuan = $request->pemberitahuan;
        if($request->pemberitahuan == '1') {
            $nyeri->waktu_pemberitahuan = $request->waktu_pemberitahuan;
        }
        $nyeri->save();

        //PENILAIAN RISIKO JATUH
        if($request->penilaian_risiko_jatuh == 'humpty_dumpty') {
            $humpty = new HumptyDumpty;
            $humpty->id_regis = $id_pasien;
            $humpty->jenis_form = 'gigi';
            $humpty->usia = $request->usia;
            $humpty->diagnosis = $request->diagnosis;
            $humpty->gangguan_kognitif = $request->gangguan_kognitif;
            $humpty->faktor_lingkungan = $request->faktor_lingkungan;
            $humpty->waktu_respon_obat = $request->waktu_respon_obat;
            $humpty->penggunaan_obat = $request->penggunaan_obat;
            $humpty->save();
        }
        elseif($request->penilaian_risiko_jatuh == 'morse') {
            $morse = new Morse;
            $morse->id_regis = $id_pasien;
            $morse->jenis_form = 'gigi';
            if($request->riwayat_jatuh == 'true') {
                $morse->riwayat_jatuh = True;
            }
            else {
                $morse->riwayat_jatuh = False;
            }
            if($request->diagnosis_sekunder == 'true') {
                $morse->diagnosis_sekunder = True;
            }
            else {
                $morse->diagnosis_sekunder = False;
            }
            $morse->alat_bantu = $request->alat_bantu;
            if($request->terpasang_infus == 'true') {
                $morse->terpasang_infus = True;
            }
            else {
                $morse->terpasang_infus = False;
            }
            $morse->gaya_berjalan = $request->gaya_berjalan;
            $morse->status_mental = $request->status_mental;
            $morse->save();
        }
        elseif($request->penilaian_risiko_jatuh == 'edmunson') {
            $edmunson = new Edmunson;
            $edmunson->id_regis = $id_pasien;
            $edmunson->jenis_form = 'gigi';
            $edmunson->status_mental = $request->status_mental;
            $edmunson->diagnosis = $request->diagnosis;
            $edmunson->eliminasi = $request->eliminasi;
            $edmunson->pengobatan = $request->pengobatan;
            $edmunson->diagnosa = $request->diagnosa;
            $edmunson->ambulasi = $request->ambulasi;
            $edmunson->nutrisi = $request->nutrisi;
            $edmunson->riwayat_jatuh = $request->riwayat_jatuh;
            $edmunson->save();
        }
        return redirect('index');
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

    public function get_rj_asesmen_awal_gigi_perawat_read()
    {
        //PENILAIAN TINGKAT NYERI

        $nyeri = RJNyeri::where('id', 1)->first();
        
        $this->data['id_regis'] = $nyeri->id_regis;
        $this->data['jenis_form'] = $nyeri->jenis_form;
        $this->data['skala'] = $nyeri->skala;
        $this->data['lokasi'] = $nyeri->lokasi;
        $this->data['durasi'] = $nyeri->durasi;
        $this->data['frekuensi'] = $nyeri->frekuensi;
        $this->data['hilang'] = $nyeri->hilang;
        $this->data['pemberitahuan'] = $nyeri->pemberitahuan;
        
        if($nyeri->pemberitahuan == '1') {
            $this->data['waktu_pemberitahuan'] = $nyeri->waktu_pemberitahuan;
        }
        

        //PENILAIAN RISIKO JATUH
        $humpty = HumptyDumpty::where('id', 1)->first();
        
        $this->data['id_regis'] = $humpty->id_regis;
        $this->data['jenis_form'] = $humpty->jenis_form;
        $this->data['usia'] = $humpty->usia;
        $this->data['diagnosis'] = $humpty->diagnosis;
        $this->data['gangguan_kognitif'] = $humpty->gangguan_kognitif;
        $this->data['faktor_lingkungan'] = $humpty->faktor_lingkungan;
        $this->data['waktu_respon_obat'] = $humpty->waktu_respon_obat;
        $this->data['penggunaan_obat'] = $humpty->penggunaan_obat;

        $morse = Morse::where('id', 1)->first();
        
        $this->data['id_regis'] = $morse->id_regis;
        $this->data['jenis_form'] = $morse->jenis_form;
        $this->data['riwayat_jatuh'] = $morse->riwayat_jatuh;
        $this->data['diagnosis_sekunder'] = $morse->diagnosis_sekunder;
        $this->data['alat_bantu'] = $morse->alat_bantu;
        $this->data['terpasang_infus'] = $morse->terpasang_infus;
        $this->data['gaya_berjalan'] = $morse->gaya_berjalan;
        $this->data['status_mental'] = $morse->status_mental;

        $edmunson = Edmunson::where('id', 1)->first();
        
        $this->data['id_regis'] = $edmunson->id_regis;
        $this->data['jenis_form'] = $edmunson->jenis_form;
        $this->data['status_mental'] = $edmunson->status_mental;
        $this->data['diagnosis'] = $edmunson->diagnosis;
        $this->data['eliminasi'] = $edmunson->eliminasi;
        $this->data['pengobatan'] = $edmunson->pengobatan;
        $this->data['diagnosa'] = $edmunson->diagnosa;
        $this->data['ambulasi'] = $edmunson->ambulasi;
        $this->data['nutrisi'] = $edmunson->nutrisi;
        $this->data['riwayat_jatuh'] = $edmunson->riwayat_jatuh;

        return view('page.rj.asesmen_awal_gigi_perawat_read', $this->data);
    }

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
