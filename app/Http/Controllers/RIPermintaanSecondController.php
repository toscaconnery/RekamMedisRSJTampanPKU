<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RIPermintaanSecond;
use Session;

class RIPermintaanSecondController extends Controller
{
    public function __construct()
    {
    	$this->data['title'] = 'PERMINTAAN PENDAPAT LAIN (SECOND OPINION)';
    }

    public function get_ri_permintaan_second()
    {
    	return view('page.ri.permintaan_second', $this->data);
    }

    public function post_ri_permintaan_second(Request $request)
    {
    	$data = new RIPermintaanSecond;
    	$id_pasien = Session::get('id_pasien');
    	$data->id_regis = $id_pasien;
    	$data->nama = $request->nama;
        $data->umur = $request->umur;
        $data->jk = $request->jk;
        $data->alamat = $request->alamat;
        $data->agama = $request->agama;
        $data->permintaan_opini = $request->permintaan_opini;
        $data->nama_hub = $request->nama_hub;
        $data->umur_hub = $request->umur_hub;
        $data->jk_hub = $request->jk_hub;
        $data->alamat_hub = $request->alamat_hub;
        $data->agama_hub = $request->agama_hub;
        $data->no_telp_hub = $request->no_telp_hub;
        $data->tanggal = $request->tanggal;
        $data->nama_saksi = $request->nama_saksi;
        $data->nama_pasien_wali = $request->nama_pasien_wali;
        $data->save();
    	
    	return redirect('daftar_dokumen');
    }
}
