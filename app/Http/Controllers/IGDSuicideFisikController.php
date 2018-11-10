<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IGDSuicideFisik;
use App\Models\ListDocument;
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

        $daftar_dokumen = ListDocument::where('id_regis', $id_pasien)->get()->first();
        $daftar_dokumen->igd_suicide_fisik = True;
        $daftar_dokumen->save();

    	return redirect('daftar_dokumen');
    }

    public function get_igd_suicide_fisik_data()
    {
        $id_pasien = Session::get('id_pasien');
        $pasien = IGDSuicideFisik::where('id_regis', $id_pasien)->first();
        
        $this->data['id_regis'] = $pasien->id_regis;
        
        $this->data['a1'] = $pasien->a1;
        $this->data['a2'] = $pasien->a2;
        $this->data['a3'] = $pasien->a3;
        $this->data['a4'] = $pasien->a4;
        $this->data['a5'] = $pasien->a5;
        $this->data['a6'] = $pasien->a6;
        $this->data['a7'] = $pasien->a7;

        $this->data['b1'] = $pasien->b1;
        $this->data['b2'] = $pasien->b2;
        $this->data['b3'] = $pasien->b3;
        $this->data['b4'] = $pasien->b4;
        $this->data['b5'] = $pasien->b5;
        $this->data['b6'] = $pasien->b6;
        $this->data['b7'] = $pasien->b7;

        $this->data['c1'] = $pasien->c1;
        $this->data['c2'] = $pasien->c2;
        $this->data['c3'] = $pasien->c3;
        $this->data['c4'] = $pasien->c4;
        $this->data['c5'] = $pasien->c5;
        $this->data['c6'] = $pasien->c6;
        $this->data['c7'] = $pasien->c7;
        $this->data['c8'] = $pasien->c8;
        $this->data['c9'] = $pasien->c9;

        $this->data['d1'] = $pasien->d1;
        $this->data['d2'] = $pasien->d2;
        $this->data['d3'] = $pasien->d3;
        $this->data['d4'] = $pasien->d4;
        $this->data['d5'] = $pasien->d5;
        $this->data['d6'] = $pasien->d6;
        $this->data['d7'] = $pasien->d7;
        $this->data['d8'] = $pasien->d8;
        $this->data['d9'] = $pasien->d9;

        $this->data['suicide_protective_factor'] = $pasien->suicide_protective_factor;
        $this->data['violence_protective_factor'] = $pasien->violence_protective_factor;
        $this->data['other_risk'] = $pasien->other_risk;
        
    }

    public function get_igd_suicide_fisik_read()
    {
        $this->get_igd_suicide_fisik_data();
        return view('page.igd.suicide_fisik_read', $this->data);

    }

    public function get_igd_suicide_fisik_edit()
    {
        $this->get_igd_suicide_fisik_data();
        return view('page.igd.suicide_fisik_edit', $this->data);
    }

    public function post_igd_suicide_fisik_edit(Request $request)
    {
        $id_pasien = Session::get('id_pasien');
        $data = IGDSuicideFisik::where('id_regis', $id_pasien)->first();

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

        return redirect('daftar_dokumen');
    }
}
