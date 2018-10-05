<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RIEdukasi;

class RIEdukasiController extends Controller
{
    public function __construct()
    {
    	$this->data['title'] = '';
    }

    public function get_ri_edukasi()
    {
    	return view('page.ri.edukasi', $this->data);
    }

    public function post_ri_edukasi(Request $request)
    {
    	$data = new RIEdukasi;
    	$data->id_regis = 1;
		$data->medis_materi = $request->medis_materi;
		$data->medis_metode = $request->medis_metode;
		$data->medis_nama_edukator = $request->medis_nama_edukator;
		if(isset($request->medis_paraf_pasien)) {
			$data->medis_paraf_pasien = True;
		}
		if(isset($request->medis_paraf_edukator)) {
			$data->medis_paraf_edukator = True;
		}

		$data->mj_materi = $request->mj_materi;
		$data->mj_metode = $request->mj_materi;
		$data->mj_nama_edukator = $request->mj_nama_edukator;
		if(isset($request->mj_paraf_pasien)) {
			$data->mj_paraf_pasien = True;
		}
		if(isset($request->mj_paraf_edukator)) {
			$data->mj_paraf_edukator = True;
		}

		$data->psikologis_materi = $request->psikologis_materi;
		$data->psikologis_metode = $request->psikologis_metode;
		$data->psikologis_nama_edukator = $request->psikologis_nama_edukator;
		if(isset($request->psikologis_paraf_pasien)) {
			$data->psikologis_paraf_pasien = True;
		}
		if(isset($request->psikologis_paraf_edukator)) {
			$data->psikologis_paraf_edukator = True;
		}

		$data->keperawatan_materi = $request->keperawatan_materi;
		$data->keperawatan_metode = $request->keperawatan_metode;
		$data->keperawatan_nama_edukator = $request->keperawatan_nama_edukator;
		if(isset($request->keperawatan_paraf_pasien)) {
			$data->keperawatan_paraf_pasien = True;
		}
		if(isset($request->keperawatan_paraf_edukator)) {
			$data->keperawatan_paraf_edukator = True;
		}

		$data->farmasi_materi = $request->farmasi_materi;
		$data->farmasi_metode = $request->farmasi_metode;
		$data->farmasi_nama_edukator = $request->farmasi_nama_edukator;
		if(isset($request->farmasi_paraf_pasien)) {
			$data->farmasi_paraf_pasien = True;
		}
		if(isset($request->farmasi_paraf_edukator)) {
			$data->farmasi_paraf_edukator = True;
		}

		$data->nutrisi_materi = $request->nutrisi_materi;
		$data->nutrisi_metode = $request->nutrisi_metode;
		$data->nutrisi_nama_edukator = $request->nutrisi_nama_edukator;
		if(isset($request->nutrisi_paraf_pasien)) {
			$data->nutrisi_paraf_pasien = True;
		}
		if(isset($request->nutrisi_paraf_edukator)) {
			$data->nutrisi_paraf_edukator = True;
		}

		$data->kerohanian_materi = $request->kerohanian_materi;
		$data->kerohanian_metode = $request->kerohanian_metode;
		$data->kerohanian_nama_edukator = $request->kerohanian_nama_edukator;
		if(isset($request->kerohanian_paraf_pasien)) {
			$data->kerohanian_paraf_pasien = True;
		}
		if(isset($request->kerohanian_paraf_edukator)) {
			$data->kerohanian_paraf_edukator = True;
		}

		$data->rehabilitasi_materi = $request->rehabilitasi_materi;
		$data->rehabilitasi_metode = $request->rehabilitasi_metode;
		$data->rehabilitasi_nama_edukator = $request->rehabilitasi_nama_edukator;
		if(isset($request->rehabilitasi_paraf_pasien)) {
			$data->rehabilitasi_paraf_pasien = True;
		}
		if(isset($request->rehabilitasi_paraf_edukator)) {
			$data->rehabilitasi_paraf_edukator = True;
		}

		$data->dt_materi = $request->dt_materi;
		$data->dt_metode = $request->dt_metode;
		$data->dt_evaluasi = $request->dt_evaluasi;
		$data->dt_nama_edukator = $request->dt_nama_edukator;
		if(isset($request->dt_paraf_pasien)) {
			$data->dt_paraf_pasien = True;
		}
		if(isset($request->dt_paraf_edukator)) {
			$data->dt_paraf_edukator = True;
		}

		$data->save();
    	dd($request);
    	return back();
    }
}
