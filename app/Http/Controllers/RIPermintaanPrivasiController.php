<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RIPermintaanPrivasi;
use App\Models\ListDocument;
use Session;

class RIPermintaanPrivasiController extends Controller
{
    public function __construct()
    {
    	$this->data['title'] = 'PERMINTAAN KEBUTUHAN PRIVASI';
    }

    public function get_ri_permintaan_privasi()
    {
    	return view('page.ri.permintaan_privasi', $this->data);
    }

    public function post_ri_permintaan_privasi(Request $request)
    {
    	$data = new RIPermintaanPrivasi;
    	$id_pasien = Session::get('id_pasien');
    	$data->id_regis = $id_pasien;
	    $data->nama = $request->nama;
        $data->umur = $request->umur;
        $data->jk = $request->jk;
        $data->alamat = $request->alamat;
        $data->agama = $request->agama;
        $data->no_telp = $request->no_telp;
        $data->hub = $request->hub;
        $data->hub_lain = $request->hub_lain;
        $data->nama_hub = $request->nama_hub;
        $data->umur_hub = $request->umur_hub;
        $data->jk_hub = $request->jk_hub;
        $data->alamat_hub = $request->alamat_hub;
        $data->agama_hub = $request->agama_hub;
        $data->no_telp_hub = $request->no_telp_hub;
        $data->permintaan_privasi = $request->permintaan_privasi;
        $data->keterangan_pp_1 = $request->keterangan_pp_1;
        $data->keterangan_pp_2 = $request->keterangan_pp_2;
        $data->keterangan_pp_3 = $request->keterangan_pp_3;
        $data->tanggal = $request->tanggal;
        $data->nama_saksi = $request->nama_saksi;
        $data->nama_pemohon = $request->nama_pemohon;
        $data->save();
    	return redirect('daftar_dokumen');
    }

    public function get_ri_permintaan_privasi_read()
    {
        $pasien = RIPermintaanPrivasi::where('id', 1)->first();
        
        $this->data['id_regis'] = $pasien->id_regis;

        $this->data['nama'] = $pasien->nama;
        $this->data['umur'] = $pasien->umur;
        $this->data['jk'] = $pasien->jk;
        $this->data['alamat'] = $pasien->alamat;
        $this->data['agama'] = $pasien->agama;
        $this->data['no_telp'] = $pasien->no_telp;
        $this->data['hub'] = $pasien->hub;
        $this->data['hub_lain'] = $pasien->hub_lain;
        $this->data['nama_hub'] = $pasien->nama_hub;
        $this->data['umur_hub'] = $pasien->umur_hub;
        $this->data['jk_hub'] = $pasien->jk_hub;
        $this->data['alamat_hub'] = $pasien->alamat_hub;
        $this->data['agama_hub'] = $pasien->agama_hub;
        $this->data['no_telp_hub'] = $pasien->no_telp_hub;
        $this->data['permintaan_privasi'] = $pasien->permintaan_privasi;
        $this->data['keterangan_pp_1'] = $pasien->keterangan_pp_1;
        $this->data['keterangan_pp_2'] = $pasien->keterangan_pp_2;
        $this->data['keterangan_pp_3'] = $pasien->keterangan_pp_3;
        $this->data['tanggal'] = $pasien->tanggal;
        $this->data['nama_saksi'] = $pasien->nama_saksi;
        $this->data['nama_pemohon'] = $pasien->nama_pemohon;

        return view('page.ri.permintaan_privasi_read', $this->data);
    }
}
