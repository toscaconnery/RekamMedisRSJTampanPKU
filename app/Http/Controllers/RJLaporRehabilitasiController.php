<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RJLaporRehabilitasiController extends Controller
{
	public function __construct()
	{
		$this->data['title'] = 'Asesmen Wajib Lapor Dan Rehabilitasi Medis';
	}

    public function get_rj_lapor_rehabilitasi()
    {
    	return view('page.rj.lapor_rehabilitasi', $this->data);
    }

    public function post_rj_lapor_rehabilitasi(Request $request)
    {
    	dd($request);
    }
}
