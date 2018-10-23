<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RIHakKewajiban;
use App\Models\ListDocument;
use Session;

class RIHakKewajibanController extends Controller
{
    public function __construct()
    {
    	$this->data['title'] = '';
    }

    public function get_ri_hak_kewajiban()
    {
    	return view('page.ri.hak_kewajiban', $this->data);
    }

    public function post_ri_hak_kewajiban(Request $request)
    {

    	$data = new RIHakKewajiban;
    	$id_pasien = Session::get('id_pasien');
    	$data->id_regis = $id_pasien;
    	$data->nama_penanda_tangan = $request->nama_penanda_tangan;
    	$data->save();

    	$daftar_dokumen = ListDocument::where('id_regis', $id_pasien)->get()->first();
        $daftar_dokumen->ri_hak_kewajiban = True;
        $daftar_dokumen->save();
        return redirect('daftar_dokumen');
    }
}
