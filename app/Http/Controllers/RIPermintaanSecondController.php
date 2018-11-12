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

    public function get_ri_permintaan_second_read(Request $request)
    {

        $pasien = RIPermintaanSecond::where('id', 1)->first();
        
        $this->data['id_regis'] = $pasien->id_regis;

        $this->data['nama'] = $pasien->nama;
        $this->data['umur'] = $pasien->umur;
        $this->data['jk'] = $pasien->jk;
        $this->data['alamat'] = $pasien->alamat;
        $this->data['agama'] = $pasien->agama;
        $this->data['permintaan_opini'] = $pasien->permintaan_opini;
        $this->data['nama_hub'] = $pasien->nama_hub;
        $this->data['umur_hub'] = $pasien->umur_hub;
        $this->data['jk_hub'] = $pasien->jk_hub;
        $this->data['alamat_hub'] = $pasien->alamat_hub;
        $this->data['agama_hub'] = $pasien->agama_hub;
        $this->data['no_telp_hub'] = $pasien->no_telp_hub;
        $this->data['tanggal'] = $pasien->tanggal;
        $this->data['nama_saksi'] = $pasien->nama_saksi;
        $this->data['nama_pasien_wali'] = $pasien->nama_pemohon;

        return view('page.ri.permintaan_second_read', $this->data);
    }
}
