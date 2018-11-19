<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RIPemberianInformasi;
use App\Models\ListDocument;
use Session;

class RIPemberianInformasiController extends Controller
{
    public function __construct()
    {
    	$this->data['title'] = 'Pemberian Informasi';
    }

    public function get_ri_pemberian_informasi()
    {
    	return view('page.ri.pemberian_informasi', $this->data);
    }

    public function post_ri_pemberian_informasi(Request $request)
    {
    	$jumlah_form = $request->jumlah_form;
    	$id_pasien = Session::get('id_pasien');
    	$idx = 0;
    	for($i = 1; $i <= $jumlah_form; $i++) {
    		$idx++;
    		$str_tanggal = 'tanggal_'.$i;
    		$str_jam = 'jam_'.$i;
    		$str_informasi = 'informasi_'.$i;
    		$str_pemberi = 'pemberi_'.$i;
    		$str_penerima = 'penerima_'.$i;
    		if(!empty($request->$str_tanggal)) {
    			$data = new RIPemberianInformasi;
    			$data->id_regis = $id_pasien;
    			$data->tanggal = $request->$str_tanggal;
    			$data->jam = $request->$str_jam;
    			$data->informasi = $request->$str_informasi;
    			$data->pemberi = $request->$str_pemberi;
    			$data->penerima = $request->$str_penerima;
    			$data->save();
    		}
    	}
    	if($idx > 0) {
	    	$daftar_dokumen = ListDocument::where('id_regis', $id_pasien)->first();
	        $daftar_dokumen->ri_pemberian_informasi = True;
	        $daftar_dokumen->save();
    	}
    	dd($request);
    }

    public function get_ri_pemberian_informasi_data()
    {
    	//
    }

    public function get_ri_pemberian_informasi_read()
    {
    	$this->get_ri_pemberian_informasi_data();
    	//
    }

    public function get_ri_pemberian_informasi_edit()
    {
    	$this->get_ri_pemberian_informasi_data();
    	//
    }

    public function post_ri_pemberian_informasi_edit(Request $request)
    {
    	//
    }
}
