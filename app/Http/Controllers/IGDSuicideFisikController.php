<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IGDSuicideFisik;
use Session;

class IGDSuicideFisikController extends Controller
{
    public function __construct()
    {
        $this->data['title'] = 'Asesmen Suicide dan Kekerasan Fisik IGD';
    }

    public function get_igd_suicide_fisik()
    {
    	return view('page.igd.suicide_fisik', $this->data);
    }

    public function post_igd_suicide_fisik(Request $request)
    {
    	$data = new IGDSuicideFisik;
        if(Session::has('id_pasien')) {
            $id_pasien = Session::get('id_pasien');
        }
        else {
            $id_pasien = 1;
        }
    	$data->id_regis = $id_pasien;
    	$data->a1 = $request->a1;
    	$data->a2 = $request->a2;
    	$data->a3 = $request->a3;
    	$data->a4 = $request->a4;
    	$data->a5 = $request->a5;
    	$data->a6 = $request->a6;
    	$data->a7 = $request->a7;
    	$data->b1 = $request->b1;
    	$data->b2 = $request->b2;
    	$data->b3 = $request->b3;
    	$data->b4 = $request->b4;
    	$data->b5 = $request->b5;
    	$data->b6 = $request->b6;
    	$data->b7 = $request->b7;
    	$data->c1 = $request->c1;
    	$data->c2 = $request->c2;
    	$data->c3 = $request->c3;
    	$data->c4 = $request->c4;
    	$data->c5 = $request->c5;
    	$data->c6 = $request->c6;
    	$data->c7 = $request->c7;
    	$data->c8 = $request->c8;
    	$data->c9 = $request->c9;
    	$data->d1 = $request->d1;
    	$data->d2 = $request->d2;
    	$data->d3 = $request->d3;
    	$data->d4 = $request->d4;
    	$data->d5 = $request->d5;
    	$data->d6 = $request->d6;
    	$data->d7 = $request->d7;
    	$data->d8 = $request->d8;
    	$data->d9 = $request->d9;
    	$data->suicide_protective_factor = $request->suicide_protective_factor;
    	$data->violence_protective_factor = $request->violence_protective_factor;
    	$data->other_risk = $request->other_risk;
    	$data->save();

    	return back();
    }
}
