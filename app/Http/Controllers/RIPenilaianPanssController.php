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

    public function get_ri_penilaian_panss_read()
    {
        $pasien = RIPenilaianPanss::where('id', 1)->first();
        
        $this->data['id_regis'] = $pasien->id_regis;

        $this->data['tanggal'] = $pasien->tanggal;
        $this->data['p4'] = $pasien->p4;
        $this->data['p7'] = $pasien->p7;
        $this->data['g7'] = $pasien->g7;
        $this->data['g8'] = $pasien->g8;
        $this->data['g14'] = $pasien->g14;

        return view('page.ri.penilaian_panss_read', $this->data);
    }
}
