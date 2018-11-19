<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RIPulangPaksa;
use App\Models\ListDocument;
use Session;

class RIPulangPaksaController extends Controller
{
    public function __construct()
    {
        $this->data['title'] = 'Surat Pernyataan Pulang Paksa';
    }

    public function get_ri_pulang_paksa()
    {
    	return view('page.ri.pulang_paksa', $this->data);
    }

    public function post_ri_pulang_paksa(Request $request)
    {
    	$data = new RIPulangPaksa;
    	$id_pasien = Session::get('id_pasien');
		$data->id_regis = $id_pasien;
        $data->nama = $request->nama;
        $data->umur = $request->umur;
        $data->pekerjaan = $request->pekerjaan;
        $data->hubungan_keluarga = $request->hubungan_keluarga;
        $data->alamat = $request->alamat;
        $data->nama_pasien = $request->nama_pasien;
        $data->umur_pasien = $request->umur_pasien;
        $data->alamat_pasien = $request->alamat_pasien;
        $data->tanggal_pengambilan = $request->tanggal_pengambilan;
        $data->tanggal = $request->tanggal;
        $data->yang_menyatakan = $request->yang_menyatakan;
        $data->saksi_keluarga = $request->saksi_keluarga;
        $data->saksi_pemberi_asuhan = $request->saksi_pemberi_asuhan;
        $data->save();

        $daftar_dokumen = ListDocument::where('id_regis', $id_pasien)->first();
        $daftar_dokumen->ri_pulang_paksa = True;
        $daftar_dokumen->save();
    	return redirect('daftar_dokumen');
    }

    public function get_ri_pulang_paksa_data()
    {
    	$id_pasien = Session::get('id_pasien');
    	$pasien = RIPulangPaksa::where('id_regis', $id_pasien)->first();
    	$this->data['id_regis'] = $pasien->id_regis;
        $this->data['nama'] = $pasien->nama;
        $this->data['umur'] = $pasien->umur;
        $this->data['pekerjaan'] = $pasien->pekerjaan;
        $this->data['hubungan_keluarga'] = $pasien->hubungan_keluarga;
        $this->data['alamat'] = $pasien->alamat;
        $this->data['nama_pasien'] = $pasien->nama_pasien;
        $this->data['umur_pasien'] = $pasien->umur_pasien;
        $this->data['alamat_pasien'] = $pasien->alamat_pasien;
        $this->data['tanggal_pengambilan'] = $pasien->tanggal_pengambilan;
        $this->data['tanggal'] = $pasien->tanggal;
        $this->data['yang_menyatakan'] = $pasien->yang_menyatakan;
        $this->data['saksi_keluarga'] = $pasien->saksi_keluarga;
        $this->data['saksi_pemberi_asuhan'] = $pasien->saksi_pemberi_asuhan;
    }

    public function get_ri_pulang_paksa_read()
    {
    	$this->get_ri_pulang_paksa_data();
    	return view('page.ri.pulang_paksa_read', $this->data);
    }

    public function get_ri_pulang_paksa_edit()
    {
    	$this->get_ri_pulang_paksa_data();
    	return view('page.ri.pulang_paksa_edit', $this->data);
    }

    public function post_ri_pulang_paksa_edit(Request $request)
    {
    	$id_pasien = Session::get('id_pasien');
    	$data = RIPulangPaksa::where('id_regis', $id_pasien)->first();
		$data->id_regis = $id_pasien;
        $data->nama = $request->nama;
        $data->umur = $request->umur;
        $data->pekerjaan = $request->pekerjaan;
        $data->hubungan_keluarga = $request->hubungan_keluarga;
        $data->alamat = $request->alamat;
        $data->nama_pasien = $request->nama_pasien;
        $data->umur_pasien = $request->umur_pasien;
        $data->alamat_pasien = $request->alamat_pasien;
        $data->tanggal_pengambilan = $request->tanggal_pengambilan;
        $data->tanggal = $request->tanggal;
        $data->yang_menyatakan = $request->yang_menyatakan;
        $data->saksi_keluarga = $request->saksi_keluarga;
        $data->saksi_pemberi_asuhan = $request->saksi_pemberi_asuhan;
        $data->save();
    	return redirect('daftar_dokumen');
    }
}

