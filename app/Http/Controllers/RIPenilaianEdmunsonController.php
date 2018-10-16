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
    	$data->total = $request->status_mental + $request->eliminasi + $request->pengobatan + $request->diagnosa + $request->ambulasi + $request->nutrisi + $request->gangguan_pola_tidur + $request->riwayat_jatuh;
    	$data->save();

    	return back();
    }

    public function get_ri_penilaian_edmunson_read()
    {   /////////////////////////////////
        //note: usia belum diperhitungkan, usia juga masuk dalam perhitungan nilai total
        /////////////////////////////////
        $pasien = RIPenilaianEdmunson::where('id', 1)->first();

        $this->data['id_regis'] = $pasien->id_regis;
        $this->data['usia'] = $pasien->usia;
        $this->data['status_mental'] = $pasien->status_mental;
        $this->data['eliminasi'] = $pasien->eliminasi;
        $this->data['pengobatan'] = $pasien->pengobatan;
        $this->data['diagnosa'] = $pasien->diagnosa;
        $this->data['ambulasi'] = $pasien->ambulasi;
        $this->data['nutrisi'] = $pasien->nutrisi;
        $this->data['gangguan_pola_tidur'] = $pasien->gangguan_pola_tidur;
        $this->data['riwayat_jatuh'] = $pasien->riwayat_jatuh;
        $this->data['total'] = $pasien->total;

        return view('page.ri.penilaian_edmunson_read', $this->data);
        
    }
}