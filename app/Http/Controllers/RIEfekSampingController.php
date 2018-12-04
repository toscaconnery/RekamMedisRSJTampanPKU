<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RIEfekSamping;
use Session;

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
        $data = new RIEfekSamping;
        $id_pasien = Session::get('id_pasien');
        $data->id_regis = $id_pasien;
        $data->field1 = $request->field1;
        $data->field2 = $request->field2;
        $data->field3 = $request->field3;
        $data->field4 = $request->field4;
        $data->field5 = $request->field5;
        $field6 = '';
        if(isset($request->field6_1)) {
            $field6 .= '1-';
        }
        if(isset($request->field6_2)) {
            $field6 .= '2-';
        }
        if(isset($request->field6_3)) {
            $field6 .= '3-';
        }
        if(isset($request->field6_4)) {
            $field6 .= '4-';
        }
        if(isset($request->field6_5)) {
            $field6 .= '5-';
        }
        if(strlen($field6) > 0) {
            $field6 = substr($field6, 0, -1);
        }

        $data->field6 = $field6;
        $data->field7 = $request->field7;
        $data->field8 = $request->field8;
        $data->field9 = $request->field9;
        $data->field10 = $request->field10;
        $data->field11 = $request->field11;
        $data->field12 = $request->field12;
        $data->field13 = $request->field13;
        $data->field14 = $request->field14;
        $data->field15 = $request->field15;
        $data->field16 = $request->field16;
        $data->field17 = $request->field17;
        $data->field18 = $request->field18;
        $data->field19 = $request->field19;
        $jumlah_form = $request->jumlah_form;
        $obat = '';
        for ($i=0; $i <= $jumlah_form; $i++) { 
            $str_1 = 'obat1_'.$i;
            $str_2 = 'obat2_'.$i;
            $str_3 = 'obat3_'.$i;
            $str_4 = 'obat4_'.$i;
            $str_5 = 'obat5_'.$i;
            $str_6 = 'obat6_'.$i;
            $str_7 = 'obat7_'.$i;
            $str_8 = 'obat8_'.$i;
            if(isset($request->$str_3)) {
                $obat3 = 1;
            }
            else {
                $obat3 = 0;
            }
            if(!empty($request->$str_1)) {
                $obat .= $request->$str_1."#&!^@".$request->$str_2."#&!^@".$obat3."#&!^@".$request->$str_4."#&!^@".$request->$str_5."#&!^@".$request->$str_6."#&!^@".$request->$str_7."#&!^@".$request->$str_8."$&!^@";
            }
        }
        if(strlen($obat) > 0) {
            $obat = substr($obat, 0, -5);
        }
        $data->obat = $obat;
        $data->save();
    	return redirect('ri_efek_samping_read');
    }

    public function get_ri_efek_samping_data()
    {
        $id_pasien = Session::get('id_pasien');
        $pasien = RIEfekSamping::where('id_regis', $id_pasien)->first();
        $this->data['field1'] = $pasien->field1;
        $this->data['field2'] = $pasien->field2;
        $this->data['field3'] = $pasien->field3;
        $this->data['field4'] = $pasien->field4;
        $this->data['field5'] = $pasien->field5;
        $field6 = explode('-', $pasien->field6);
        $this->data['field6'] = array();
        foreach ($field6 as $key => $value) {
            $this->data['field6'][$value] = True;
        }
        $this->data['field7'] = $pasien->field7;
        $this->data['field8'] = $pasien->field8;
        $this->data['field9'] = $pasien->field9;
        $this->data['field10'] = $pasien->field10;
        $this->data['field11'] = $pasien->field11;
        $this->data['field12'] = $pasien->field12;
        $this->data['field13'] = $pasien->field13;
        $this->data['field14'] = $pasien->field14;
        $this->data['field15'] = $pasien->field15;
        $this->data['field16'] = $pasien->field16;
        $this->data['field17'] = $pasien->field17;
        $this->data['field18'] = $pasien->field18;
        $obat = explode("$&!^@", $pasien->obat);
        $this->data['obat'] = array();
        foreach ($obat as $key => $value) {
            $this->data['obat'][$key] = explode('#&!^@', $value);
        }        
    }

    public function get_ri_efek_samping_read()
    {
        $this->get_ri_efek_samping_data();
        return view('page.ri.efek_samping_read', $this->data);
    }

    public function get_ri_efek_samping_edit()
    {
        $this->get_ri_efek_samping_data();
        return view('page.ri.efek_samping_edit', $this->data);
    }

    public function post_ri_efek_samping_edit(Request $request)
    {
        $id_pasien = Session::get('id_pasien');
        $data = RIEfekSamping::where('id_regis', $id_pasien)->first();
        $data->field1 = $request->field1;
        $data->field2 = $request->field2;
        $data->field3 = $request->field3;
        $data->field4 = $request->field4;
        $data->field5 = $request->field5;
        $field6 = '';
        if(isset($request->field6_1)) {
            $field6 .= '1-';
        }
        if(isset($request->field6_2)) {
            $field6 .= '2-';
        }
        if(isset($request->field6_3)) {
            $field6 .= '3-';
        }
        if(isset($request->field6_4)) {
            $field6 .= '4-';
        }
        if(isset($request->field6_5)) {
            $field6 .= '5-';
        }
        if(strlen($field6) > 0) {
            $field6 = substr($field6, 0, -1);
        }

        $data->field6 = $field6;
        $data->field7 = $request->field7;
        $data->field8 = $request->field8;
        $data->field9 = $request->field9;
        $data->field10 = $request->field10;
        $data->field11 = $request->field11;
        $data->field12 = $request->field12;
        $data->field13 = $request->field13;
        $data->field14 = $request->field14;
        $data->field15 = $request->field15;
        $data->field16 = $request->field16;
        $data->field17 = $request->field17;
        $data->field18 = $request->field18;
        $data->field19 = $request->field19;
        $jumlah_form = $request->jumlah_form;
        $obat = '';
        for ($i=0; $i <= $jumlah_form; $i++) { 
            $str_1 = 'obat1_'.$i;
            $str_2 = 'obat2_'.$i;
            $str_3 = 'obat3_'.$i;
            $str_4 = 'obat4_'.$i;
            $str_5 = 'obat5_'.$i;
            $str_6 = 'obat6_'.$i;
            $str_7 = 'obat7_'.$i;
            $str_8 = 'obat8_'.$i;
            if(isset($request->$str_3)) {
                $obat3 = 1;
            }
            else {
                $obat3 = 0;
            }
            if(!empty($request->$str_1)) {
                $obat .= $request->$str_1."#&!^@".$request->$str_2."#&!^@".$obat3."#&!^@".$request->$str_4."#&!^@".$request->$str_5."#&!^@".$request->$str_6."#&!^@".$request->$str_7."#&!^@".$request->$str_8."$&!^@";
            }
        }
        if(strlen($obat) > 0) {
            $obat = substr($obat, 0, -5);
        }
        $data->obat = $obat;
        $data->save();

        return redirect('ri_efek_samping_read');
    }
}
