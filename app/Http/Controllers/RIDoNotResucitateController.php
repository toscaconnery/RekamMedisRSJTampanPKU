<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RIDoNotResucitate;
use Session;

class RIDoNotResucitateController extends Controller
{
    public function __construct()
    {
    	$this->data['title'] = '';
    }

    public function get_ri_do_not_resucitate()
    {
    	return view('page.ri.do_not_resucitate', $this->data);
    }

    public function post_ri_do_not_resucitate(Request $request)
    {
    	$data = new RIDoNotResucitate;
    	$id_pasien = Session::get('id_pasien');
    	$data->id_regis = $id_pasien;
    	$data->nama = $request->nama;
    	$data->alamat = $request->alamat;
    	$data->agama = $request->agama;
    	$data->yang_menyatakan = $request->yang_menyatakan;
    	$data->saksi_keluarga = $request->saksi_keluarga;
    	$data->saksi_pemberi_asuhan = $request->saksi_pemberi_asuhan;
    	$data->save();

    	return redirect('daftar_dokumen');
    }
}