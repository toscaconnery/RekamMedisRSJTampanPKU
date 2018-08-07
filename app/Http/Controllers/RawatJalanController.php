<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use StatusMental;

class RawatJalanController extends Controller
{
    public function asesmen_awal() 
    {
    	return view('rj_asesmen_awal');
    }

    public function store_asesmen_awal(Request $request)
    {
    	$status_mental = new StatusMental;
    	
    	return redirect('index');
    }
}
