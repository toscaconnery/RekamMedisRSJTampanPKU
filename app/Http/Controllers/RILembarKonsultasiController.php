<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RILembarKonsultasi;
use App\Models\ListDocument;
use Session;

class RILembarKonsultasiController extends Controller
{
    public function __construct()
    {
    	$this->data['title'] = 'LEMBAR KONSULTASI';
    }

    public function get_ri_lembar_konsultasi()
    {
    	return view('page.ri.lembar_konsultasi', $this->data);
    }

    public function post_ri_lembar_konsultasi(Request $request)
    {
    	$data = new RILembarKonsultasi;
    	$id_pasien = Session::get('id_pasien');
    	$data->id_regis = $id_pasien;
    	$data->konsultasi1 = $request->konsultasi1;
    	$data->konsultasi2 = $request->konsultasi2;
    	$data->konsultasi3 = $request->konsultasi3;
    	$data->konsultasi4 = $request->konsultasi4;
    	$data->konsultasi5 = $request->konsultasi5;
    	$data->jkonsultasi1 = $request->jkonsultasi1;
    	$data->jkonsultasi2 = $request->jkonsultasi2;
    	$data->jkonsultasi3 = $request->jkonsultasi3;
    	$data->jkonsultasi4 = $request->jkonsultasi4;
    	$data->jkonsultasi5 = $request->jkonsultasi5;
    	$data->jkonsultasi6 = $request->jkonsultasi6;
    	$data->jkonsultasi7 = $request->jkonsultasi7;
    	$data->save();

    	$daftar_dokumen = ListDocument::where('id_regis', $id_pasien)->get()->first();
        $daftar_dokumen->ri_lembar_konsultasi = True;
        $daftar_dokumen->save();

    	return redirect('daftar_dokumen');
    }

    public function get_ri_lembar_konsultasi_read()
    {
        $pasien = RILembarKonsultasi::where('id', 1)->first();
        
        $this->data['id_regis'] = $pasien->id_regis;

        $this->data['konsultasi1'] = $pasien->konsultasi1;
        $this->data['konsultasi2'] = $pasien->konsultasi2;
        $this->data['konsultasi3'] = $pasien->konsultasi3;
        $this->data['konsultasi4'] = $pasien->konsultasi4;
        $this->data['konsultasi5'] = $pasien->konsultasi5;

        $this->data['jkonsultasi1'] = $pasien->jkonsultasi1;
        $this->data['jkonsultasi2'] = $pasien->jkonsultasi2;
        $this->data['jkonsultasi3'] = $pasien->jkonsultasi3;
        $this->data['jkonsultasi4'] = $pasien->jkonsultasi4;
        $this->data['jkonsultasi5'] = $pasien->jkonsultasi5;
        $this->data['jkonsultasi6'] = $pasien->jkonsultasi6;
        $this->data['jkonsultasi6'] = $pasien->jkonsultasi6;

        return view('page.ri.lembar_konsultasi_read', $this->data);
    }
}
