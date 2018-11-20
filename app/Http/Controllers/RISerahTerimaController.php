<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RISerahTerima;
use App\Models\ListDocument;
use Session;

class RISerahTerimaController extends Controller
{
    public function __construct()
    {
    	$this->data['title'] = 'Serah Terima Pasien Pulang';
    }

    public function get_ri_serah_terima()
    {
    	return view('page.ri.serah_terima', $this->data);
    }

    public function post_ri_serah_terima(Request $request)
    {
    	$id_pasien = Session::get('id_pasien');
    	$data = new RISerahTerima;
    	$data->id_regis = $id_pasien;
    	$data->nama = $request->nama;
		$data->umur = $request->umur;
		$data->jenis_kelamin = $request->jenis_kelamin;
		$data->alamat = $request->alamat;
		$data->hubungan_dengan_pasien = $request->hubungan_dengan_pasien;
		$data->nama_pasien = $request->nama_pasien;
		$data->umur_pasien = $request->umur_pasien;
		$data->jenis_kelamin_pasien = $request->jenis_kelamin_pasien;
		$data->no_rm = $request->no_rm;
		$data->alamat_pasien = $request->alamat_pasien;
		$data->jam_dijemput = $request->jam_dijemput;
		$data->save();

		$daftar_dokumen = ListDocument::where('id_regis', $id_pasien)->first();
        $daftar_dokumen->ri_serah_terima = True;
        $daftar_dokumen->save();
        
    	return redirect('daftar_dokumen');
    }

    public function get_ri_serah_terima_data()
    {
    	$id_pasien = Session::get('id_pasien');
    	$pasien = RISerahTerima::where('id_regis', $id_pasien)->first();
    	$this->data['id_regis'] = $pasien->id_regis;
    	$this->data['nama'] = $pasien->nama;
		$this->data['umur'] = $pasien->umur;
		$this->data['jenis_kelamin'] = $pasien->jenis_kelamin;
		$this->data['alamat'] = $pasien->alamat;
		$this->data['hubungan_dengan_pasien'] = $pasien->hubungan_dengan_pasien;
		$this->data['nama_pasien'] = $pasien->nama_pasien;
		$this->data['umur_pasien'] = $pasien->umur_pasien;
		$this->data['jenis_kelamin_pasien'] = $pasien->jenis_kelamin_pasien;
		$this->data['no_rm'] = $pasien->no_rm;
		$this->data['alamat_pasien'] = $pasien->alamat_pasien;
		$this->data['jam_dijemput'] = $pasien->jam_dijemput;
    }

    public function get_ri_serah_terima_read()
    {
    	$this->get_ri_serah_terima_data();
    	return view('page.ri.serah_terima_read', $this->data);
    }

    public function get_ri_serah_terima_edit()
    {
    	$this->get_ri_serah_terima_data();
    	return view('page.ri.serah_terima_edit', $this->data);
    }

    public function post_ri_serah_terima_edit(Request $request)
    {
    	$id_pasien = Session::get('id_pasien');
    	$data = RISerahTerima::where('id_regis', $id_pasien)->first();
    	$data->nama = $request->nama;
		$data->umur = $request->umur;
		$data->jenis_kelamin = $request->jenis_kelamin;
		$data->alamat = $request->alamat;
		$data->hubungan_dengan_pasien = $request->hubungan_dengan_pasien;
		$data->nama_pasien = $request->nama_pasien;
		$data->umur_pasien = $request->umur_pasien;
		$data->jenis_kelamin_pasien = $request->jenis_kelamin_pasien;
		$data->no_rm = $request->no_rm;
		$data->alamat_pasien = $request->alamat_pasien;
		$data->jam_dijemput = $request->jam_dijemput;
		$data->save();
    	return redirect('daftar_dokumen');
    }
}


