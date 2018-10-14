<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class IndexController extends Controller
{
    public function get_index()
    {
    	$this->data['pasien'] = DB::table('pasien')
    							->join('rincian_pasien', 'rincian_pasien.no_rm', '=', 'pasien.no_rm')
    							->get();
    	// $this->data['pasien2'] = DB::connection('mysql2')->table('pasien_s2')->get();
    	// $this->data['pasien3'] = DB::table('pasien')->get();
    	// dd($this->data['pasien3']);
    	return view('index', $this->data);

    }
}
