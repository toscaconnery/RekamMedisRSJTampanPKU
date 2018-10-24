<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RIPernyataan;
use Session;

class RIPernyataanController extends Controller
{
    public function __construct()
    {
    	$this->data['title'] = 'SURAT PERNYATAAN';
    }

    public function get_ri_pernyataan()
    {
    	return view('page.ri.pernyataan', $this->data);
    }

    public function post_ri_pernyataan(Request $request)
    {
    	$data = new RIPernyataan;
    	$id_pasien = Session::get('id_pasien');
    	$data->id_regis = $id_pasien;
        $data->nama = $request->nama;
        $data->umur = $request->umur;
        $data->alamat = $request->alamat;
        $data->tanggal = $request->tanggal;
        $data->konselor = $request->konselor;
        $data->kepala_ruangan = $request->kepala_ruangan;
        $data->residen = $request->residen;
        $data->save();

        return redirect('daftar_dokumen');
    }

    public function get_ri_pernyataan_read()
    {
        $pasien = RIPernyataan::where('id', 1)->first();
        
        $this->data['id_regis'] = $pasien->id_regis;
        $this->data['nama'] = $pasien->nama;
        $this->data['umur'] = $pasien->umur;
        $this->data['alamat'] = $pasien->alamat;
        $this->data['tanggal'] = $pasien->pekerjaan_karir;
        $this->data['konselor'] = $pasien->konselor;
        $this->data['kepala_ruangan'] = $pasien->kepala_ruangan;
        $this->data['residen'] = $pasien->residen;

        return view('page.ri.pernyataan_read', $this->data);
    }
}
