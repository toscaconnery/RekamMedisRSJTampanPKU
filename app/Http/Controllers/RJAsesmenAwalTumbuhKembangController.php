<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RJAsesmenAwalTumbuhKembangController extends Controller
{
    public function get_rj_asesmen_awal_tumbuh_kembang_psikolog()
    {
    	return view('page.rj.tumbuh_kembang_psikolog');
    }

    public function post_rj_asesmen_awal_tumbuh_kembang_psikolog(Request $request)
    {
    	//
    }
}
