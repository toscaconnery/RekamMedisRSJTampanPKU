<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RIEdukasiController extends Controller
{
    public function __construct()
    {
    	$this->data['title'] = '';
    }

    public function get_ri_edukasi()
    {
    	return view('page.ri.edukasi', $this->data);
    }

    public function post_ri_edukasi(Request $request)
    {
    	dd($request);
    }
}
