<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RIRisikoNyeri;

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
		$data->id_regis = 1;
		$data->tanggal = $request->tanggal;
		$data->waktu = $request->waktu;
		$data->skala = $request->skala;
		$data->save();
		
		return back();
	}
}
