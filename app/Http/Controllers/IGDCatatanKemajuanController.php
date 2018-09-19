<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IGDCatatanKemajuanController extends Controller
{
    public function get_igd_catatan_kemajuan()
    {
    	return view('page.igd.catatan_kemajuan');
    }

    public function post_igd_catatan_kemajuan(Request $request)
    {
    	dd('post catatan kemajuan');
    }
}
