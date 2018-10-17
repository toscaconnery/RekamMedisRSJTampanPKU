<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RISuicideFisik;
use Session;

class RISuicideFisikController extends Controller
{
	public function __construct()
    {
        $this->data['title'] = 'ASESMEN SUICIDE DAN KEKERASAN FISIK RAWAT INAP';
    }
    
    public function get_ri_suicide_fisik()
    {
    	return view('page.ri.suicide_fisik', $this->data);
    }

    public function post_ri_suicide_fisik(Request $request)
    {
    	$data = new RISuicideFisik;
        if(Session::has('id_pasien')) {
            $id_pasien = Session::get('id_pasien');
        }
        else {
            $id_pasien = 1;
        }
        $data->id_regis = $id_pasien;
        $data->s1 = $request->s1;
        $data->s2 = $request->s2;
        $data->s3 = $request->s3;
        $data->s4 = $request->s4;
        $data->s5 = $request->s5;
        $data->s6 = $request->s6;
        $data->s7 = $request->s7;
        $data->s8 = $request->s8;
        $data->s9 = $request->s9;
        $data->s10 = $request->s10;
        $data->s11 = $request->s11;
        $data->s12 = $request->s12;
        $data->s13 = $request->s13;
        $data->s14 = $request->s14;
        $data->s15 = $request->s15;
        $data->s16 = $request->s16;
        $data->s17 = $request->s17;
        $data->s18 = $request->s18;
        $data->s19 = $request->s19;
        $data->s20 = $request->s20;
        $data->s21 = $request->s21;
        $data->s22 = $request->s22;
        $data->s23 = $request->s23;
        $data->s24 = $request->s24;
        $data->s25 = $request->s25;
        $data->s26 = $request->s26;
        $data->s27 = $request->s27;
        $data->s28 = $request->s28;
        $data->s29 = $request->s29;
        $data->s30 = $request->s30;
        $data->s31 = $request->s31;
        $data->s32 = $request->s32;
        $data->p1 = $request->p1;
        $data->p2 = $request->p2;
        $data->p3 = $request->p3;
        $data->save();

        return back();

    }
}
