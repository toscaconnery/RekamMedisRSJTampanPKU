<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RJNyeri;
use App\Models\HumptyDumpty;
use App\Models\Morse;
use App\Models\Edmunson;
use App\Models\RJDataMedik;

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
        $nyeri->id_regis = 1;
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
            $humpty->id_regis = 1;
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
            $morse->id_regis = 1;
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
            $edmunson->id_regis = 1;
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
        $data->id_regis = 1;
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
}
