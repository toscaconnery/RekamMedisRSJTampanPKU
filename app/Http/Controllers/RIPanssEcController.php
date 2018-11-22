<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RIPanssEc;
use App\Models\ListDocument;
use Session;

class RIPanssEcController extends Controller
{
    public function __construct()
    {
    	$this->data['title'] = 'PANSS EC';
    }

    public function get_ri_panss_ec()
    {
    	return view('page.ri.panss_ec', $this->data);
    }

    public function post_ri_panss_ec(Request $request)
    {
    	$data = new RIPanssEc;
    	$id_pasien = Session::get('id_pasien');
    	$data->id_regis = $id_pasien;
    	$data->p4 = $request->p4;
    	$data->g8 = $request->g8;
    	$data->p7 = $request->p7;
    	$data->g14 = $request->g14;
    	$data->g4 = $request->g4;
    	$data->bangsal = $request->bangsal;
    	$data->tanggal_pemeriksaan = $request->tanggal_pemeriksaan;
    	$data->save();

    	$daftar_dokumen = ListDocument::where('id_regis', $id_pasien)->get()->first();
        $daftar_dokumen->ri_panss_ec = True;
        $daftar_dokumen->save();

    	return redirect('daftar_dokumen');
    }

    public function get_ri_panss_ec_data()
    {
        $id_pasien = Session::get('id_pasien');
        $pasien = RIPanssEc::where('id_regis', $id_pasien)->first();
        
        $this->data['id_regis'] = $pasien->id_regis;
        $this->data['tanggal'] = $pasien->tanggal;
        $this->data['p4'] = $pasien->p4;
        $this->data['p7'] = $pasien->p7;
        $this->data['g7'] = $pasien->g7;
        $this->data['g8'] = $pasien->g8;
        $this->data['g14'] = $pasien->g14;
        $this->data['g4'] = $pasien->g4;
        $this->data['bangsal'] = $pasien->bangsal;
        $this->data['tanggal_pemeriksaan'] = $pasien->tanggal_pemeriksaan;
    }

    public function get_ri_panss_ec_read()
    {
        $this->get_ri_panss_ec_data();
        return view('page.ri.panss_ec_read', $this->data);
    }

    public function get_ri_panss_ec_edit()
    {
        $this->get_ri_panss_ec_data();
        return view('page.ri.panss_ec_edit', $this->data);
    }

    public function post_ri_panss_ec_edit(Request $request)
    {
        $id_pasien = Session::get('id_pasien');
        $data = RIPanssEc::where('id_regis', $id_pasien)->first();
        $data->id_regis = $id_pasien;
        $data->p4 = $request->p4;
        $data->g8 = $request->g8;
        $data->p7 = $request->p7;
        $data->g14 = $request->g14;
        $data->g4 = $request->g4;
        $data->bangsal = $request->bangsal;
        $data->tanggal_pemeriksaan = $request->tanggal_pemeriksaan;
        $data->save();
        return redirect('daftar_dokumen');
    }
}