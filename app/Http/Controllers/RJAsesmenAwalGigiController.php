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
use App\Models\RJAsesmenGigiDokter;
use View;

class RJAsesmenAwalGigiController extends Controller
{
    public function __construct()
    {
        $this->middleware('haspatient');
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
        $id_pasien = Session::get('id_pasien');
        $data = new RJAsesmenGigiDokter;
        $data->id_regis = $id_pasien;
        $data->pekerjaan = $request->pekerjaan;
        $data->alamat = $request->alamat;
        $data->no_telp = $request->no_telp;
        $data->golongan_darah = $request->golongan_darah;
        $data->tekanan_darah_top = $request->tekanan_darah_top;
        $data->tekanan_darah_bottom = $request->tekanan_darah_bottom;
        $data->tekanan_jantung = $request->tekanan_jantung;
        $data->ket_tekanan_jantung = $request->ket_tekanan_jantung;
        $data->diabetes = $request->diabetes;
        $data->ket_diabetes = $request->ket_diabetes;
        $data->hepatitis = $request->hepatitis;
        $data->ket_hepatitis = $request->ket_hepatitis;
        $data->penyakit_lainnya = $request->penyakit_lainnya;
        $data->ket_penyakit_lainnya = $request->ket_penyakit_lainnya;
        $data->alergi_obat = $request->alergi_obat;
        $data->ket_alergi_obat = $request->ket_alergi_obat;
        $data->alergi_makanan = $request->alergi_makanan;
        $data->ket_alergi_makanan = $request->ket_alergi_makanan;
        $data->oklusi = $request->oklusi;
        $data->torus_palatinus = $request->torus_palatinus;
        $data->torus_mandibularis = $request->torus_mandibularis;
        $data->palatum = $request->palatum;
        $data->supernumerary_teeth = $request->supernumerary_teeth;
        $data->ket_supernumerary_teeth = $request->ket_supernumerary_teeth;
        $data->diastema = $request->diastema;
        $data->ket_diastema = $request->ket_diastema;
        $data->anomali = $request->anomali;
        $data->ket_anomali = $request->ket_anomali;
        $data->lain = $request->lain;
        $data->keterangan = $request->keterangan;
        $data->save();
        // return redirect('index');
    }

    public function get_rj_asesmen_awal_gigi_dokter_data()
    {
        $id_pasien = Session::get('id_pasien');
        $pasien = RJAsesmenGigiDokter::where('id_regis', $id_pasien)->first();
        $this->data['pekerjaan'] = $pasien->pekerjaan;
        $this->data['alamat'] = $pasien->alamat;
        $this->data['no_telp'] = $pasien->no_telp;
        $this->data['golongan_darah'] = $pasien->golongan_darah;
        $this->data['tekanan_darah_top'] = $pasien->tekanan_darah_top;
        $this->data['tekanan_darah_bottom'] = $pasien->tekanan_darah_bottom;
        $this->data['tekanan_jantung'] = $pasien->tekanan_jantung;
        $this->data['ket_tekanan_jantung'] = $pasien->ket_tekanan_jantung;
        $this->data['diabetes'] = $pasien->diabetes;
        $this->data['ket_diabetes'] = $pasien->ket_diabetes;
        $this->data['hepatitis'] = $pasien->hepatitis;
        $this->data['ket_hepatitis'] = $pasien->ket_hepatitis;
        $this->data['penyakit_lainnya'] = $pasien->penyakit_lainnya;
        $this->data['ket_penyakit_lainnya'] = $pasien->ket_penyakit_lainnya;
        $this->data['alergi_obat'] = $pasien->alergi_obat;
        $this->data['ket_alergi_obat'] = $pasien->ket_alergi_obat;
        $this->data['alergi_makanan'] = $pasien->alergi_makanan;
        $this->data['ket_alergi_makanan'] = $pasien->ket_alergi_makanan;
        $this->data['oklusi'] = $pasien->oklusi;
        $this->data['torus_palatinus'] = $pasien->torus_palatinus;
        $this->data['torus_mandibularis'] = $pasien->torus_mandibularis;
        $this->data['palatum'] = $pasien->palatum;
        $this->data['supernumerary_teeth'] = $pasien->supernumerary_teeth;
        $this->data['ket_supernumerary_teeth'] = $pasien->ket_supernumerary_teeth;
        $this->data['diastema'] = $pasien->diastema;
        $this->data['ket_diastema'] = $pasien->ket_diastema;
        $this->data['anomali'] = $pasien->anomali;
        $this->data['ket_anomali'] = $pasien->ket_anomali;
        $this->data['lain'] = $pasien->lain;
        $this->data['keterangan'] = $pasien->keterangan;
    }

    public function get_rj_asesmen_awal_gigi_dokter_read()
    {
        $this->get_rj_asesmen_awal_gigi_dokter_data();
        return view('page.rj.asesmen_awal_gigi_dokter_read', $this->data);
    }

    public function get_rj_asesmen_awal_gigi_dokter_edit()
    {
        $this->get_rj_asesmen_awal_gigi_dokter_data();
        return view('page.rj.asesmen_awal_gigi_dokter_edit', $this->data);
    }

    public function post_rj_asesmen_awal_gigi_dokter_edit(Request $request)
    {
        $id_pasien = Session::get('id_pasien');
        $data = RJAsesmenGigiDokter::where('id_regis', $id_pasien)->first();
        $data->id_regis = $id_pasien;
        $data->pekerjaan = $request->pekerjaan;
        $data->alamat = $request->alamat;
        $data->no_telp = $request->no_telp;
        $data->golongan_darah = $request->golongan_darah;
        $data->tekanan_darah_top = $request->tekanan_darah_top;
        $data->tekanan_darah_bottom = $request->tekanan_darah_bottom;
        $data->tekanan_jantung = $request->tekanan_jantung;
        $data->ket_tekanan_jantung = $request->ket_tekanan_jantung;
        $data->diabetes = $request->diabetes;
        $data->ket_diabetes = $request->ket_diabetes;
        $data->hepatitis = $request->hepatitis;
        $data->ket_hepatitis = $request->ket_hepatitis;
        $data->penyakit_lainnya = $request->penyakit_lainnya;
        $data->ket_penyakit_lainnya = $request->ket_penyakit_lainnya;
        $data->alergi_obat = $request->alergi_obat;
        $data->ket_alergi_obat = $request->ket_alergi_obat;
        $data->alergi_makanan = $request->alergi_makanan;
        $data->ket_alergi_makanan = $request->ket_alergi_makanan;
        $data->oklusi = $request->oklusi;
        $data->torus_palatinus = $request->torus_palatinus;
        $data->torus_mandibularis = $request->torus_mandibularis;
        $data->palatum = $request->palatum;
        $data->supernumerary_teeth = $request->supernumerary_teeth;
        $data->ket_supernumerary_teeth = $request->ket_supernumerary_teeth;
        $data->diastema = $request->diastema;
        $data->ket_diastema = $request->ket_diastema;
        $data->anomali = $request->anomali;
        $data->ket_anomali = $request->ket_anomali;
        $data->lain = $request->lain;
        $data->keterangan = $request->keterangan;
        $data->save();
        // return redirect('index');
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

    // public function get_rj_asesmen_awal_gigi_dokter_read()
    // {
    //     $Pasien = RJDataMedik::where('id', 1)->first();
        
    //     $this->data['id_regis'] = $pasien->id_regis;
    //     $this->data['golongan_darah'] = $pasien->golongan_darah;
    //     $this->data['tekanan_darah_top'] = $pasien->tekanan_darah_top;
    //     $this->data['tekanan_darah_bottom'] = $pasien->tekanan_darah_bottom;
        
    //     if( $pasien->tekanan_jantung == True) {
    //         $this->data['tekanan_jantung'] = $pasien->tekanan_jantung;
    //     }

    //     if( $pasien->diabetes == True) {
    //         $this->data['diabetes'] = $pasien->diabetes;
    //     }

    //     if( $pasien->hepatitis == True) {
    //         $this->data['hepatitis'] = $pasien->hepatitis;
    //     }

    //     if( $pasien->penyakit_lainnya == True) {
    //         $this->data['penyakit_lainnya'] = $pasien->penyakit_lainnya;
    //     }

    //     if( $pasien->alergi_obat == True) {
    //         $this->data['alergi_obat'] = $pasien->alergi_obat;
    //     }

    //     if( $pasien->alergi_makanan == True) {
    //         $this->data['alergi_makanan'] = $pasien->alergi_makanan;
    //     }

    //     $this->data['oklusi'] = $pasien->oklusi;
    //     $this->data['torus_palatinus'] = $pasien->torus_palatinus;
    //     $this->data['torus_mandibularis'] = $pasien->torus_mandibularis;
    //     $this->data['palatum'] = $pasien->palatum;

    //     if( $pasien->supernumerary_teeth == True) {
    //         $this->data['supernumerary_teeth'] = $pasien->supernumerary_teeth;
    //     }

    //     if( $pasien->diastema == True) {
    //         $this->data['diastema'] = $pasien->diastema;
    //     }

    //     if( $pasien->anomali == True) {
    //         $this->data['anomali'] = $pasien->anomali;
    //     }

    //     $this->data['lain'] = $pasien->lain;
    //     $this->data['keterangan'] = $pasien->keterangan;

    //     return view('page.rj_asesmen_awal_gigi_dokter_read', $this->data);
    // }

    function adatidak($isi)
    {
        if($isi=='1')
        {
            return "Ada";
        }
        else {
            return 'Tidak Ada';
        }
    }

    function convert()
    {
        $this->get_rj_asesmen_awal_gigi_perawat_data();
        $this->get_rj_asesmen_awal_gigi_dokter_data();

        $this->data['tekanan_jantung'] = $this->adatidak($this->data['tekanan_jantung']);
        $this->data['$diabetes'] = $this->adatidak($this->data['diabetes']);
        $this->data['hepatitis'] = $this->adatidak($this->data['hepatitis']);
        $this->data['penyakit_lainnya'] = $this->adatidak($this->data['penyakit_lainnya']);
        $this->data['alergi_obat'] = $this->adatidak($this->data['alergi_obat']);
        $this->data['alergi_makanan'] = $this->adatidak($this->data['alergi_makanan']);
        $this->data['supernumerary_teeth'] = $this->adatidak($this->data['supernumerary_teeth']);
        $this->data['diastema'] = $this->adatidak($this->data['diastema']);
        $this->data['anomali'] = $this->adatidak($this->data['anomali']);
        $this->data['tekanan_jantung'] = $this->adatidak($this->data['tekanan_jantung']);

        if($this->data['oklusi']=='1')
        {
            $this->data['oklusi'] = 'Normal bite';
        }
        elseif ($this->data['oklusi']=='2') {
            $this->data['$klusi'] = 'Cross bite'; 
        }
        else {
            $this->data['oklusi'] = 'Deep bite';
        }

        if($this->data['torus_palatinus']=='1')
        {
            $this->data['torus_palatinus'] = 'Tidak ada';
        }
        elseif ($this->data['torus_palatinus']=='2') {
            $this->data['torus_palatinus'] = 'Kecil'; 
        }
        elseif ($this->data['torus_palatinus']=='3') {
            $this->data['torus_palatinus'] = 'Sedang'; 
        }
        elseif ($this->data['$torus_palatinus']=='4') {
            $this->data['torus_palatinus'] = 'Besar'; 
        }
        else {
            $this->data['$torus_palatinus'] = 'Multiple';
        }

        if($this->data['torus_mandibularis']=='1')
        {
            $this->data['torus_mandibularis'] = 'Tidak ada';
        }
        elseif ($this->data['$torus_mandibularis']=='2') {
            $this->data['torus_mandibularis'] = 'Kecil'; 
        }
        elseif ($this->data['$torus_mandibularis']=='3') {
            $this->data['torus_mandibularis'] = 'Sedang'; 
        }
        elseif ($this->data['$torus_mandibularis']=='4') {
            $this->data['torus_mandibularis'] = 'Besar'; 
        }
        else {
            $this->data['torus_mandibularis'] = 'Multiple';
        }

        if($this->data['palatum']=='1')
        {
            $this->data['palatum'] = 'Dalam';
        }
        elseif ($this->data['palatum']=='2') {
            $this->data['palatum'] = 'Sedang'; 
        }
        else {
            $this->data['palatum'] = 'Rendah';
        }

        if($this->data['tingkat']=='1')
        {
            $this->data['tingkat'] = 'Tidak ada nyeri';
        }
        elseif ($this->data['tingkat']=='2') {
            $this->data['tingkat'] = 'Nyeri Kronis'; 
        }
        else {
            $this->data['tingkat'] = 'Nyeri Akut';
        }

        if($this->data['pemberitahuan']=='1')
        {
            $this->data['pemberitahuan'] = 'Ya';
        }
        else {
            $this->data['pemberitahuan'] = 'Nyeri Akut';
        }






        if($this->data['usia']=='1')
        {
            $this->data['usia'] = '(Skor: 4) Dibawah 3 tahun';
        }
        elseif ($this->data['usia']=='2') {
            $this->data['usia'] = '(Skor: 3) 3 – 7 tahun'; 
        }
        elseif ($this->data['usia']=='3') {
            $this->data['usia'] = '(Skor: 2) 7 – 13 tahun'; 
        }
        else {
            $this->data['usia'] = '(Skor: 1) > 13 tahun';
        }

        if($this->data['diagnosis_hd']=='1')
        {
            $this->data['diagnosis_hd'] = '(Skor: 4) Kelainan Neurologi';
        }
        elseif ($this->data['diagnosis_hd']=='2') {
            $this->data['diagnosis_hd'] = '(Skor: 3) Perubahan dalam oksigenasi(masalah saluran nafas, dehidtrasi, anemia, anoreksia, sinkop / sakit kepala, dll)'; 
        }
        elseif ($this->data['diagnosis_hd']=='3') {
            $this->data['diagnosis_hd'] = '(Skor: 2) Kelainan psikis / prilaku'; 
        }
        else {
            $this->data['diagnosis_hd'] = '(Skor: 1) Diagnosis lain';
        }

        if($this->data['gangguan_kognitif']=='1')
        {
            $this->data['gangguan_kognitif'] = '(Skor: 3) Tidak sadar terhadap keterbatasan (gangguan kesadaran, retardasi mental';
        }
        elseif ($this->data['gangguan_kognitif']=='2') {
            $this->data['gangguan_kognitif'] = '(Skor: 2) Lupa keterbatasan (anak yang hiperaktif)'; 
        }
        else {
            $this->data['gangguan_kognitif'] = '(Skor: 1) Mengetahui kemampuan diri';
        }

        if($this->data['faktor_lingkungan']=='1')
        {
            $this->data['faktor_lingkungan'] = '(Skor: 4) Riwayat jatuh dari tempat tidur saat bayi';
        }
        elseif ($this->data['faktor_lingkungan']=='2') {
            $this->data['faktor_lingkungan'] = '(Skor: 3) Pasien menggunakan alat bantu atau box meubel'; 
        }
        elseif ($this->data['faktor_lingkungan']=='3') {
            $this->data['faktor_lingkungan'] = '(Skor: 2) Pasien berada di tempat tidur'; 
        }
        else {
            $this->data['faktor_lingkungan'] = '(Skor: 1) Di luar ruang rawat';
        }

        if($this->data['waktu_respon_obat']=='1')
        {
            $this->data['waktu_respon_obat'] = '(Skor: 3) Dalam 24 Jam';
        }
        elseif ($this->data['waktu_respon_obat']=='2') {
            $this->data['waktu_respon_obat'] = '(Skor: 2) Dalam 48 Jam'; 
        }
        else {
            $this->data['waktu_respon_obat'] = '(Skor: 1) > 48 Jam';
        }

        if($this->data['penggunaan_obat']=='1')
        {
            $this->data['penggunaan_obat'] = '(Skor: 3) Bermacam-macam obat yang digunakan : obat sedatif (kecuali pasien ICU yang menggunakan sedasi dan paralisis), Hiptonik Barbitural, Fonotiazin, Antidepresan, Laksansia / Diuretikan, Narkotik';
        }
        elseif ($this->data['penggunaan_obat']=='2') {
            $this->data['penggunaan_obat'] = '(Skor: 2) Salah satu Pengobatan di atas'; 
        }
        else {
            $this->data['penggunaan_obat'] = '(Skor: 1) Pengobatan lain';
        }

        if($this->data['riwayat_jatuh_mrs']=='1')
        {
            $this->data['riwayat_jatuh_mrs'] = '(Skor: 25) Ya';
        }
        else {
            $this->data['riwayat_jatuh_mrs'] = '(Skor: 0) Tidak';
        }

        if($this->data['diagnosis_sekunder']=='1')
        {
            $this->data['diagnosis_sekunder'] = '(Skor: 15) Ya';
        }
        else {
            $this->data['diagnosis_sekunder'] = '(Skor: 0) Tidak';
        }

        if($this->data['alat_bantu']=='1')
        {
            $this->data['alat_bantu'] = '(Skor: 30) Perabot';
        }
        elseif ($this->data['alat_bantu']=='2') {
            $this->data['alat_bantu'] = '(Skor: 15) Tongkat/Alat Penopang'; 
        }
        else {
            $this->data['alat_bantu'] = '(Skor: 0) Tidak ada/Kursi Roda/Perawat/Tirah Baring';
        }

        if($this->data['terpasang_infus']=='1')
        {
            $this->data['terpasang_infus'] = '(Skor: 20) Ya';
        }
        else {
            $this->data['terpasang_infus'] = '(Skor: 0) Tidak';
        }

        if($this->data['gaya_berjalan']=='1')
        {
            $this->data['gaya_berjalan'] = '(Skor: 20) Terganggu';
        }
        elseif ($this->data['gaya_berjalan']=='2') {
            $this->data['gaya_berjalan'] = '(Skor: 10) Lemah'; 
        }
        else {
            $this->data['gaya_berjalan'] = '(Skor: 0) Normal/Tirah Baring/Imobilisasi';
        }

        if($this->data['status_mental_mrs']=='1')
        {
            $this->data['status_mental_mrs'] = '(Skor: 15) Sering lupa akan keterbatasan yang dimiliki';
        }
        else {
            $this->data['status_mental_mrs'] = '(Skor: 0) Orientasi baik terhadap kemampuan diri sendiri';
        }

        if($this->data['status_mental_edm']=='1')
        {
            $this->data['status_mental_edm'] = '(Skor: 4) Kesadaran baik/orientasi baik setiap saat';
        }
        elseif ($this->data['status_mental_edm']=='2') {
            $this->data['status_mental_edm'] = '(Skor: 12) Agitasi/Ansietas'; 
        }
        elseif ($this->data['status_mental_edm']=='3') {
            $this->data['status_mental_edm'] = '(Skor: 13) Kadang-kadang bingung'; 
        }
        else {
            $this->data['status_mental_edm'] = '(Skor: 14) Bingung/Disorientasi';
        }

        if($this->data['diagnosis_edm']=='1')
        {
            $this->data['diagnosis_edm'] = '(Skor: ) Kelainan Neurologi';
        }
        elseif ($this->data['diagnosis_edm']=='2') {
            $this->data['diagnosis_edm'] = '(Skor: ) Perubahan dalam oksigenasi(masalah saluran nafas, dehidtrasi, anemia, anoreksia, sinkop / sakit kepala, dll)'; 
        }
        elseif ($this->data['diagnosis_edm']=='3') {
            $this->data['diagnosis_edm'] = '(Skor: ) Kelainan psikis / prilaku'; 
        }
        else {
            $this->data['diagnosis_edm'] = '(Skor: ) Diagnosis lain';
        }

        if($this->data['eliminasi']=='1')
        {
            $this->data['eliminasi'] = '(Skor: 8) Mandiri dan mampi mengontrol BAB/BAK';
        }
        elseif ($this->data['eliminasi']=='2') {
            $this->data['eliminasi'] = '(Skor: 12) Dower Catheter/Colostomy'; 
        }
        elseif ($this->data['eliminasi']=='3') {
            $this->data['eliminasi'] = '(Skor: 10) Eliminasi dengan bantuan'; 
        }
        elseif ($this->data['eliminasi']=='4') {
            $this->data['eliminasi'] = '(Skor: 12) Gangguan eliminasi (Inkontinensia/Nokturia/Frekwensi)'; 
        }
        else {
            $this->data['eliminasi'] = '(Skor: 12) Inkontinesia tetapi mampu untuk mobilisasi';
        }

        if($this->data['pengobatan']=='1')
        {
            $this->data['pengobatan'] = '(Skor: 10) Tanpa obat-obatan';
        }
        elseif ($this->data['pengobatan']=='2') {
            $this->data['pengobatan'] = '(Skor: 10) Obat-obatan jantung'; 
        }
        elseif ($this->data['pengobatan']=='3') {
            $this->data['pengobatan'] = '(Skor: 8) Obat-obat psikotropika (termasuk Benzodiazepine dan Antidepresan)'; 
        }
        else {
            $this->data['pengobatan'] = '(Skor: 12) Mendapat tambahan obat-obatan dan/atau obat-obat PRN (psikiatri, antinyeri) yang diberikan dalam 24 jam terakhir';
        }

        if($this->data['diagnosa']=='1')
        {
            $this->data['diagnosa'] = '(Skor: 10) Bipolar/ Gangguan Schizoaffective';
        }
        elseif ($this->data['diagnosa']=='2') {
            $this->data['diagnosa'] = '(Skor: 8) Penggunaan Obat-obatan terlarang/ketergantungan alkohol'; 
        }
        elseif ($this->data['diagnosa']=='3') {
            $this->data['diagnosa'] = '(Skor: 10) Gangguan Depresi Mayor'; 
        }
        else {
            $this->data['diagnosa'] = '(Skor: 12) Dimensia/ Delirium';
        }

        if($this->data['ambulasi']=='1')
        {
            $this->data['ambulasi'] = '(Skor: 8) Mandiri/Keseimbangan Baik/Immobilisasi';
        }
        elseif ($this->data['ambulasi']=='2') {
            $this->data['ambulasi'] = '(Skor: 8) Dengan Alat Bantu (Kursi roda, walker,dll)'; 
        }
        elseif ($this->data['ambulasi']=='3') {
            $this->data['ambulasi'] = '(Skor: 10) Vertigo/kelemahan'; 
        }
        elseif ($this->data['ambulasi']=='4') {
            $this->data['ambulasi'] = '(Skor: 8) Goyah/membutuhkan mantuan dan menyadari kemampuan'; 
        }
        else {
            $this->data['ambulasi'] = '(Skor: 15) Goyah tapi lupa keterbatasan';
        }

        if($this->data['nutrisi']=='1')
        {
            $this->data['nutrisi'] = '(Skor: 12) Mengkonsumsi sedikit makanan atau minuman  dalam 24 jam terakhir';
        }
        else{
            $this->data['nutrisi'] = '(Skor: 0) Tidak ada kelainan dengan nafsu makan'; 
        }

        if($this->data['riwayat_jatuh_edm']=='1')
        {
            $this->data['riwayat_jatuh_edm'] = '(Skor: 8) Tidak ada riwayat jatuh';
        }
        else {
            $this->data['riwayat_jatuh_edm'] = '(Skor: 12) Ada riwayat jatuh dalam 3 bulan terakhir';
        }

    }
    public function rj_gigi_pdf()
    {
        
        $this->convert();

        ob_clean();


        header('Content-type: application/pdf');

        $mpdf = new \Mpdf\Mpdf([
        'mode' => 'utf-8', 
        'format' => 'A4-P', 
        'orientation' => 'P'
        ]);

        $view = View::make('doc_rj_gigi',$this->data);
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
                            <p>:  '.Session::get('id_pasien').'</p><br>
                            <p>:  '.Session::get("nama").'</p><br>
                            <p>:  '.Session::get("tanggal_lahir").'</p><br>
                            <p>:  '.Session::get("jenis_kelamin").'</p><br>
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
                    <td width="33%" style="text-align: right;">RM. 02.00.RJ JULI 2015</td>
                </tr>
            </table>'); 

        $stylesheet = '<style>'.file_get_contents('css/pdf.css').'</style>';

        $mpdf->AddPage('P','','','','',10,10,35,20,10,10);
        //right,left
        $mpdf->WriteHTML($stylesheet, 1);
        $mpdf->WriteHTML($contents,2,true,false);

        $mpdf->Output('rj_asesmen_gigi.pdf',\Mpdf\Output\Destination::INLINE);
    }
}
