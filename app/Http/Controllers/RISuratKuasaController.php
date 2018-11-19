<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RISuratKuasa;
use App\Models\ListDocument;
use Session;

class RISuratKuasaController extends Controller
{
    public function __construct()
    {
    	$this->data['title'] = 'Surat Kuasa';
    }

    public function get_ri_surat_kuasa()
    {
    	return view('page.ri.surat_kuasa', $this->data);
    }

    public function post_ri_surat_kuasa(Request $request)
    {
    	$id_pasien = Session::get('id_pasien');
    	$data = new RISuratKuasa;
    	$data->id_regis = $id_pasien;
		$data->nama = $request->nama;
		$data->umur = $request->umur;
		$data->alamat = $request->alamat;
		$data->tanggal = $request->tanggal;
		$data->konselor = $request->konselor;
		$data->kepala_ruangan = $request->kepala_ruangan;
		$data->residen = $request->residen;
		$data->save();

		$daftar_dokumen = ListDocument::where('id_regis', $id_pasien)->first();
        $daftar_dokumen->ri_surat_kuasa = True;
        $daftar_dokumen->save();

    	dd($request);
    }

    public function get_ri_surat_kuasa_data()
    {
    	$id_pasien = Session::get('id_pasien');
    	$pasien = RISuratKuasa::where('id_regis', $id_pasien)->first();
    	$this->data['id_regis'] = $pasien->id_regis;
		$this->data['nama'] = $pasien->nama;
		$this->data['umur'] = $pasien->umur;
		$this->data['alamat'] = $pasien->alamat;
		$this->data['tanggal'] = $pasien->tanggal;
		$this->data['konselor'] = $pasien->konselor;
		$this->data['kepala_ruangan'] = $pasien->kepala_ruangan;
		$this->data['residen'] = $pasien->residen;
    }

    public function get_ri_surat_kuasa_read()
    {
    	$this->get_ri_surat_kuasa_data();
    	return view('page.ri.surat_kuasa_read', $this->data);
    }

    public function get_ri_surat_kuasa_edit()
    {
    	$this->get_ri_surat_kuasa_data();
    	return view('page.ri.surat_kuasa_edit', $this->data);
    }

    public function post_ri_surat_kuasa_edit(Request $request)
    {
    	$id_pasien = Session::get('id_pasien');
    	$data = RISuratKuasa::where('id_regis', $id_pasien)->first();
		$data->nama = $request->nama;
		$data->umur = $request->umur;
		$data->alamat = $request->alamat;
		$data->tanggal = $request->tanggal;
		$data->konselor = $request->konselor;
		$data->kepala_ruangan = $request->kepala_ruangan;
		$data->residen = $request->residen;
		$data->save();
    	dd($request);
    }

}
