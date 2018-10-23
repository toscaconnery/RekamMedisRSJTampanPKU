<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RIRisikoNyeri;
use Session;

class RIRisikoNyeriController extends Controller
{
    public function __construct()
	{
		$this->data['title'] = 'Penilaian Resiko Nyeri';
	}

	public function get_ri_risiko_nyeri()
	{
		return view('page.ri.risiko_nyeri', $this->data);
	}

	public function post_ri_risiko_nyeri(Request $request)
	{
		$data = new RIRisikoNyeri;
		if(Session::has('id_pasien')) {
            $id_pasien = Session::get('id_pasien');
        }
        else {
            $id_pasien = 1;
        }
		$data->id_regis = $id_pasien;
		$data->tanggal = $request->tanggal;
		$data->waktu = $request->waktu;
		$data->skala = $request->skala;
		$data->save();
		
		return back();
	}

	public function get_ri_risiko_nyeri_read()
	{
		$pasien = RIRisikoNyeri::where('id', 1)->first();
        
        $this->data['id_regis'] = $pasien->id_regis;
        $this->data['tanggal'] = $pasien->tanggal;
        $this->data['waktu'] = $pasien->waktu;
        $this->data['skala'] = $pasien->skala;

        return view('page.ri.risiko_nyeri_read', $this->data);
	}
}
