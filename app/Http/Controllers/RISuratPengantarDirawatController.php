<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RISuratSPD;
use App\Models\ListDocument;
use Session;

class RISuratPengantarDirawatController extends Controller
{
	public function __construct()
	{
		$this->data['title'] = 'SURAT PENGANTAR DIRAWAT (SPD)';
	}

    public function get_ri_surat_spd()
    {
    	return view('page.ri.surat_spd', $this->data);
    }

    public function post_ri_surat_spd(Request $request)
    {
    	$data = new RISuratSPD;
    	$id_pasien = Session::get('id_pasien');
        $data->id_regis = $id_pasien;
        $data->pendidikan = $request->pendidikan;
        $data->pekerjaan = $request->pekerjaan;
        $data->tanggal_lahir = $request->tanggal_lahir;
        $data->jk = $request->jk;
        $data->alamat = $request->alamat;
        $data->nama_pj = $request->nama_pj;
        $data->alamat_pj = $request->alamat_pj;
        $data->no_telp_pj = $request->no_telp_pj;
        $data->no_telp_pj2 = $request->no_telp_pj2;
        $data->ruang = $request->ruang;
        $data->cara_bayar = $request->cara_bayar;
        $data->sebab_utama_dirawat = $request->sebab_utama_dirawat;
        $data->diagnosa = $request->diagnosa;
        $data->gaf = $request->gaf;
        $data->panss_ec = $request->panss_ec;
        $data->terapi = $request->terapi;
        $data->tanggal_masuk_rs = $request->tanggal_masuk_rs;
        $data->ruang_masuk_rs = $request->ruang_masuk_rs;
        $data->kelas_masuk_rs = $request->kelas_masuk_rs;
        $data->tanggal = $request->tanggal;
        $data->dokter_igd_klinik = $request->dokter_igd_klinik;
        $data->save();

    	// $daftar_dokumen = ListDocument::where('id_regis', $id_pasien)->get()->first();
     //    $daftar_dokumen->ri_surat_spd = True;
     //    $daftar_dokumen->save();
        // dd($request);
    	return redirect('daftar_dokumen');
    }

    public function get_ri_surat_spd_read()
    {
        $pasien = RISuratSPD:where('id', 1)->first();
        
        $this->data['id_regis'] = $pasien->id_regis;
        $this->data['pendidikan'] = $pasien->pendidikan;
        $this->data['pekerjaan'] = $pasien->pekerjaan;
        $this->data['tanggal_lahir'] = $pasien->tanggal_lahir;
        $this->data['jk'] = $pasien->jk;
        $this->data['alamat'] = $pasien->alamat;
        $this->data['nama_pj'] = $pasien->nama_pj;
        $this->data['alamat_pj'] = $pasien->alamat_pj;
        $this->data['no_telp_pj'] = $pasien->no_telp_pj;
        $this->data['no_telp_pj2'] = $pasien->no_telp_pj2;
        $this->data['ruang'] = $pasien->ruang;
        $this->data['cara_bayar'] = $pasien->cara_bayar;
        $this->data['sebab_utama_dirawat'] = $pasien->sebab_utama_dirawat;
        $this->data['diagnosa'] = $pasien->diagnosa;
        $this->data['gaf'] = $pasien->gaf;
        $this->data['panss_ec'] = $pasien->panss_ec;
        $this->data['terapi'] = $pasien->terapi;
        $this->data['tanggal_masuk_rs'] = $pasien->tanggal_masuk_rs;
        $this->data['ruang_masuk_rs'] = $pasien->ruang_masuk_rs;
        $this->data['kelas_masuk_rs'] = $pasien->kelas_masuk_rs;
        $this->data['tanggal'] = $pasien->tanggal;
        $this->data['dokter_igd_klinik'] = $pasien->dokter_igd_klinik;
        
        // $daftar_dokumen = ListDocument::where('id_regis', $id_pasien)->get()->first();
     //    $daftar_dokumen->ri_surat_spd = True;
     //    $daftar_dokumen->save();
        // dd($request);
        return view('page.ri.surat_spd_read', $this->data);
    }
}
