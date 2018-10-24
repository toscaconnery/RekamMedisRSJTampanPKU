<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RIRiwayatObat;
use App\Models\ListDocument;
use Session;

class RIRiwayatObatController extends Controller
{
	public function __construct()
	{
    	$this->data['title'] = 'RIWAYAT PENGGUNAAN OBAT (REKONSILIASI OBAT)';
	}

	public function get_ri_riwayat_obat()
	{
		return view('page.ri.riwayat_obat',$this->data);
	}

	public function post_ri_riwayat_obat(Request $request)
	{
		$data = new RIRiwayatObat;
		$id_pasien = Session::get('id_pasien');
		$data->id_regis = $id_pasien;
		$data->tanggal_masuk = $request->tanggal_masuk;
		$data->nomor_farmasi = $request->nomor_farmasi;
		$data->dokter_ruangan = $request->dokter_ruangan;
		if(isset($request->non_alergi)) {
			$data->non_alergi = True;
		}
		///generik
		$generik = '';
		$jumlah_obat_generik = $request->jumlah_obat_generik;
		for($i = 1; $i <= $jumlah_obat_generik; $i++) {
            $str_1 = 'generik1_'.$i;
            $str_2 = 'generik2_'.$i;
            $str_3 = 'generik3_'.$i;
            $str_4 = 'generik4_'.$i;
            $str_5 = 'generik5_'.$i;
            $str_6 = 'generik6_'.$i;
            $str_7 = 'generik7_'.$i;
            $str_8 = 'generik8_'.$i;
            $str_9 = 'generik9_'.$i;

            if(!is_null($request->$str_1)) {
                $generik .= $request->$str_1."#&!^@".$request->$str_2."#&!^@".$request->$str_3."#&!^@".$request->$str_4."#&!^@".$request->$str_5."#&!^@".$request->$str_6."#&!^@".$request->$str_7."#&!^@".$request->$str_8."#&!^@".$request->$str_9."$&!^@";
            }
        }
        if(strlen($generik) > 0) {
            $generik = substr($generik, 0, -5);
        }
        $data->generik = $generik;


		///non-resep
		$nonresep = '';
		$jumlah_obat_nonresep = $request->jumlah_obat_nonresep;
		for($i = 1; $i <= $jumlah_obat_nonresep; $i++) {
            $str_1 = 'nonresep1_'.$i;
            $str_2 = 'nonresep2_'.$i;
            $str_3 = 'nonresep3_'.$i;
            $str_4 = 'nonresep4_'.$i;
            $str_5 = 'nonresep5_'.$i;
            $str_6 = 'nonresep6_'.$i;
            $str_7 = 'nonresep7_'.$i;
            $str_8 = 'nonresep8_'.$i;
            $str_9 = 'nonresep9_'.$i;

            if(!is_null($request->$str_1)) {
                $nonresep .= $request->$str_1."#&!^@".$request->$str_2."#&!^@".$request->$str_3."#&!^@".$request->$str_4."#&!^@".$request->$str_5."#&!^@".$request->$str_6."#&!^@".$request->$str_7."#&!^@".$request->$str_8."#&!^@".$request->$str_9."$&!^@";
            }
        }
        if(strlen($nonresep) > 0) {
            $nonresep = substr($nonresep, 0, -5);
        }
        $data->nonresep = $nonresep;

		$data->sio_1 = $request->sio_1;
		$data->sio_2 = $request->sio_2;
		$data->sio_3 = $request->sio_3;
		$data->sio_4 = $request->sio_4;
		$data->sio_5 = $request->sio_5;
		$data->lainnya = $request->lainnya;
		$data->save();

		$daftar_dokumen = ListDocument::where('id_regis', $id_pasien)->get()->first();
        $daftar_dokumen->ri_riwayat_obat = True;
        $daftar_dokumen->save();
		return redirect('daftar_dokumen');
	}
}