<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RIEvaluasiKeperawatan;
use App\Models\ListDocument;
use Session;
class RIEvaluasiKeperawatanController extends Controller
{
    public function __construct()
    {
    	$this->data['title'] = 'Evaluasi Keperawatan';
    }

    public function get_ri_evaluasi_keperawatan()
    {
    	return view('page.ri.evaluasi_keperawatan', $this->data);
    }

    public function post_ri_evaluasi_keperawatan(Request $request)
    {
    	$jumlah_form = $request->jumlah_form;
    	for($i = 1; $i <= $jumlah_form; $i++) {
    		$str_tanggal = 'tanggal_'.$i;
    		$str_jam = 'jam_'.$i;
    		$str_implementasi = 'implementasi_'.$i;
    		$str_evaluasi = 'evaluasi_'.$i;
    		$str_nama_user = 'nama_user_'.$i;
    		if(!is_null($request->$str_tanggal)) {
    			$data = new RIEvaluasiKeperawatan;
                $id_pasien = Session::get('id_pasien');
    			$data->id_regis = $id_pasien;
    			$data->tanggal = $request->$str_tanggal;
    			$data->jam = $request->$str_jam;
    			$data->evaluasi = $request->$str_evaluasi;
    			$data->implementasi = $request->$str_implementasi;
    			$data->nama_user = $request->$str_nama_user;
    			$data->save();
    		}
    	}

        $daftar_dokumen = ListDocument::where('id_regis', $id_pasien)->first();
        $daftar_dokumen->ri_evaluasi_keperawatan = True;
        $daftar_dokumen->save();
    	return back();
    }

    public function get_ri_evaluasi_keperawatan_data()
    {
        $id_pasien = Session::get('id_pasien');
        $pasien = RIEvaluasiKeperawatan::where('id_regis', $id_pasien)->get();
        $this->data['pasien'] = array();
        $previous_value = '';
        foreach ($pasien as $key => $value) {
            $this->data['pasien'][$key] = array();
            $this->data['pasien'][$key]['id_data'] = $value->id;
            $this->data['pasien'][$key]['tanggal'] = $value->tanggal;
            $this->data['pasien'][$key]['jam'] = $value->jam;
            $this->data['pasien'][$key]['evaluasi'] = $value->evaluasi;
            $this->data['pasien'][$key]['implementasi'] = $value->implementasi;
            $this->data['pasien'][$key]['nama_user'] = $value->nama_user;
            $previous_value .= $value->id.'-';
        }
        if(strlen($previous_value) > 0) {
            $previous_value = substr($previous_value, 0, -1);
        }
        $this->data['previous_value'] = $previous_value;
        // dd($this->data);

        // $jumlah_form = $request->jumlah_form;
        // for($i = 1; $i <= $jumlah_form; $i++) {
        //     $str_tanggal = 'tanggal_'.$i;
        //     $str_jam = 'jam_'.$i;
        //     $str_implementasi = 'implementasi_'.$i;
        //     $str_evaluasi = 'evaluasi_'.$i;
        //     $str_nama_user = 'nama_user_'.$i;
        //     if(!is_null($request->$str_tanggal)) {
        //         $pasien = RIEvaluasiKeperawatan::where('id', 1)->first();
        //         $this->data['id_regis'] = $pasien->id_regis;
        //         $this->data['tanggal'] = $pasien->tanggal;
        //         $this->data['jam'] = $pasien->jam;
        //         $this->data['evaluasi'] = $pasien->evaluasi;
        //         $this->data['implementasi'] = $pasien->implementasi;
        //         $this->data['nama_user'] = $pasien->nama_user;
        //     }
        // }
    }

    public function get_ri_evaluasi_keperawatan_read()
    {
        $this->get_ri_evaluasi_keperawatan_data();
        return view('page.ri.evaluasi_keperawatan_read', $this->data);
    }

    public function get_ri_evaluasi_keperawatan_edit()
    {
        $this->get_ri_evaluasi_keperawatan_data();
        return view('page.ri.evaluasi_keperawatan_edit', $this->data);
    }

    public function post_ri_evaluasi_keperawatan_edit(Request $request)
    {
        $id_pasien = Session::get('id_pasien');

        //old
        $list_previous = $request->previous_value;
        $previous_value = explode('-', $list_previous);
        foreach ($previous_value as $key => $value) {
            $data = RIEvaluasiKeperawatan::where('id', $value)->first();
            $str_tanggal = 'tanggal_'.$value;
            $str_jam = 'jam_'.$value;
            $str_implementasi = 'implementasi_'.$value;
            $str_evaluasi = 'evaluasi_'.$value;
            $str_nama_user = 'nama_user_'.$value;
            if(!is_null($request->$str_tanggal)) {
                $data->tanggal = $request->$str_tanggal;
                $data->jam = $request->$str_jam;
                $data->evaluasi = $request->$str_evaluasi;
                $data->implementasi = $request->$str_implementasi;
                $data->nama_user = $request->$str_nama_user;
                $data->save();
            }
            else {
                $data->delete();
            }
        }

        //new
        $jumlah_form = $request->jumlah_form;
        for($i = 1; $i <= $jumlah_form; $i++) {
            $str_tanggal = 'tanggal_new_'.$i;
            $str_jam = 'jam_new_'.$i;
            $str_implementasi = 'implementasi_new_'.$i;
            $str_evaluasi = 'evaluasi_new_'.$i;
            $str_nama_user = 'nama_user_new_'.$i;
            if(!is_null($request->$str_tanggal)) {
                $data = new RIEvaluasiKeperawatan;
                $data->id_regis = $id_pasien;
                $data->tanggal = $request->$str_tanggal;
                $data->jam = $request->$str_jam;
                $data->evaluasi = $request->$str_evaluasi;
                $data->implementasi = $request->$str_implementasi;
                $data->nama_user = $request->$str_nama_user;
                $data->save();
            }
        }
    }
}
