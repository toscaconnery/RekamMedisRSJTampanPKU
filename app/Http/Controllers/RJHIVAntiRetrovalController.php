<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RJHIVAntiRetrovalController extends Controller
{
    public function __construct()
    {
    	$this->data['title'] = '';
    }

    public function get_rj_hiv_anti_retroval()
    {
    	return view('page.rj.hiv_anti_retroval', $this->data);
    }

    public function post_rj_hiv_anti_retroval(Request $request)
    {
    	dd($request);
    }
}
