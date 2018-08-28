<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RJLaporRehabilitasiController extends Controller
{
    public function get_rj_lapor_rehabilitasi()
    {
    	return view('page.rj.lapor_rehabilitasi');
    }

    public function post_rj_lapor_rehabilitasi(Request $request)
    {
    	//
    }
}
