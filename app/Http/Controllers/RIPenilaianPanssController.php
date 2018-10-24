<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\RIPenilaianPanss;
use App\Models\ListDocument;
use Session;

class RIPenilaianPanssController extends Controller
{
    public function __construct()
    {
    	$this->data['title'] = 'LEMBAR PENILAIAN PANSS EC';
    }

    public function get_ri_penilaian_panss()
    {
    	return view('page.ri.penilaian_panss', $this->data);
    }

    public function post_ri_penilaian_panss(Request $request)
    {
    	$data = new RIPenilaianPanss;
    	$id_pasien = Session::get('id_pasien');
    	$data->id_regis = $id_pasien;
    	$data->tanggal = $request->tanggal;
    	$data->p4 = $request->p4;
    	$data->p7 = $request->p7;
    	$data->g7 = $request->g7;
    	$data->g8 = $request->g8;
    	$data->g14 = $request->g14;
    	$data->save();

    	$daftar_dokumen = ListDocument::where('id_regis', $id_pasien)->get()->first();
        $daftar_dokumen->ri_penilaian_panss = True;
        $daftar_dokumen->save();

    	return redirect('daftar_dokumen');
    }
}
