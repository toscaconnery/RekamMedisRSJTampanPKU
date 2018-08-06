<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class IndexController extends Controller
{
    public function get_index()
    {
    	$this->data['pasien'] = DB::table('pasien')->get();
    	return view('index', $this->data);
    }
}
