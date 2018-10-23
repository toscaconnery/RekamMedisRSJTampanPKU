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
}
