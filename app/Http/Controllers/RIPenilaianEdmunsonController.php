<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RIPenilaianEdmunson;

class RIPenilaianEdmunsonController extends Controller
{

	public function __construct()
	{
		$this->data['title'] = 'Penilaian Edmunson';
	}

    public function get_ri_penilaian_edmunson()
    {
    	return view('page.ri.penilaian_edmunson', $this->data);
    }

    public function post_ri_penilaian_edmunson(Request $request)
    {	/////////////////////////////////
    	//note: usia belum diperhitungkan, usia juga masuk dalam perhitungan nilai total
    	/////////////////////////////////
    	$data = new RIPenilaianEdmunson;
    	$data->id_regis = 1;
    	$data->usia = 1;
    	$data->status_mental = $request->status_mental;
    	$data->eliminasi = $request->eliminasi;
    	$data->pengobatan = $request->pengobatan;
    	$data->diagnosa = $request->diagnosa;
    	$data->ambulasi = $request->ambulasi;
    	$data->nutrisi = $request->nutrisi;
    	$data->gangguan_pola_tidur = $request->gangguan_pola_tidur;
    	$data->riwayat_jatuh = $request->riwayat_jatuh;
    	$data->total = $request->status_mental + $request->eliminasi;
    	$data->save();

    	return back();
    }
}