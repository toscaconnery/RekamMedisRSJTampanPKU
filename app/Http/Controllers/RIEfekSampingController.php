<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RIEfekSampingController extends Controller
{
    public function __construct()
    {
    	$this->data['title'] = 'PELAPORAN EFEK SAMPING OBAT KOMITE FARMASI DAN TERAPI';
    }

    public function get_ri_efek_samping()
    {
    	return view('page.ri.efek_samping', $this->data);
    }

    public function post_ri_efek_samping(Request $request)
    {
    	dd($request);
    }
}
