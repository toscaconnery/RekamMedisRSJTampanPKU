<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RIResiden;
use App\Models\ListDocument;
use Session;

class RIResidenController extends Controller
{
    public function __construct()
    {
    	$this->data['title'] = 'Surat Perjanjian Residen';
    }

    public function get_ri_residen()
    {
    	return view('page.ri.residen', $this->data);
    }

    public function post_ri_residen(Request $request)
    {
    	$id_pasien = Session::get('id_pasien');
    	$data = new RIResiden;
    	$data->id_regis = $id_pasien;
        $data->tanggal = $request->tanggal;
        $data->konselor = $request->konselor;
        $data->kepala_ruangan = $request->kepala_ruangan;
        $data->residen = $request->residen;
        $data->save();

        $daftar_dokumen = ListDocument::where('id_regis', $id_pasien)->first();
        $daftar_dokumen->ri_residen = True;
        $daftar_dokumen->save();

        dd($request);
    }

    public function get_ri_residen_data()
    {
    	$id_pasien = Session::get('id_pasien');
    	$pasien = RIResiden::where('id_regis', $id_pasien)->first();
    	$this->data['tanggal'] = $pasien->tanggal;
    	$this->data['konselor'] = $pasien->konselor;
    	$this->data['kepala_ruangan'] = $pasien->kepala_ruangan;
    	$this->data['residen'] = $pasien->residen;
    }

    public function get_ri_residen_read()
    {
    	$this->get_ri_residen_data();
    	return view('page.ri.residen_read', $this->data);
    }

    public function get_ri_residen_edit()
    {
    	$this->get_ri_residen_data();
    	return view('page.ri.residen_edit', $this->data);
    }

    public function post_ri_residen_edit(Request $request)
    {
    	$id_pasien = Session::get('id_pasien');
    	$data = RIResiden::where('id_regis', $id_pasien)->first();
        $data->tanggal = $request->tanggal;
        $data->konselor = $request->konselor;
        $data->kepala_ruangan = $request->kepala_ruangan;
        $data->residen = $request->residen;
        $data->save();
        dd($request);
    }
}
