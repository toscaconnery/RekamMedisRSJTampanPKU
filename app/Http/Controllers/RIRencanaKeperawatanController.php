<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RIRencanaKeperawatanController extends Controller
{
    public function __construct()
    {
    	$this->data['title'] = '';
    }

    public function get_ri_rencana_keperawatan()
    {
    	return view('ri_rencana_keperawatan', $this->data);
    }

    public function post_rencana_keperawatan(Request $request)
    {
    	dd('posting');
    }

    public function get_ri_rencana_keperawatan_data()
    {
    	//
    }

    public function get_ri_rencana_keperawatan_read()
    {
    	$this->get_ri_rencana_keperawatan_data();
    	return view('ri_rencana_keperawatan', $this->data);
    }
}
