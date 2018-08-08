<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\RJAAAsesmenKeperawatan;
class RawatJalanController extends Controller
{
    public function asesmen_awal() 
    {
    	return view('rj_asesmen_awal');
    }

    public function store_rj_asesmen_awal_asesmen_keperawatan(Request $request)
    {
    	$asesmen_keperawatan = new RJAAAsesmenKeperawatan;
    	$asesmen_keperawatan->id_regis = 1;
    	$asesmen_keperawatan->id_user = Auth::user()->id_user;
    	$asesmen_keperawatan->alasan_kunjungan = $request->alasan_kunjungan;
    	$asesmen_keperawatan->hubungan_keluarga = $request->hubungan_keluarga;
    	
    	$asesmen_keperawatan->status_psikososial = "";
    	if(isset($request->status_psikososial1)) {
    		$asesmen_keperawatan->status_psikososial .= "1-";
    	}
    	if(isset($request->status_psikososial2)) {
    		$asesmen_keperawatan->status_psikososial .= "2-";
    	}
    	if(isset($request->status_psikososial3)) {
    		$asesmen_keperawatan->status_psikososial .= "3-";
    	}
    	if(isset($request->status_psikososial4)) {
    		$asesmen_keperawatan->status_psikososial .= "4-";
    	}
    	if(isset($request->status_psikososial4)) {
    		$asesmen_keperawatan->status_psikososial .= "4-";
    	}
    	if(isset($request->status_psikososial5)) {
    		$asesmen_keperawatan->status_psikososial .= "5-";
    	}
    	if(isset($request->status_psikososial6)) {
    		$asesmen_keperawatan->status_psikososial .= "6-";
    	}
    	$asesmen_keperawatan->status_psikososial = substr($asesmen_keperawatan->status_psikososial, 0, -1);


    	$asesmen_keperawatan->konsep_diri = "";
    	if(isset($request->konsep_diri1)) {
    		$asesmen_keperawatan->konsep_diri .= "1-";
    	}
    	if(isset($request->konsep_diri2)) {
    		$asesmen_keperawatan->konsep_diri .= "2-";
    	}
    	if(isset($request->konsep_diri3)) {
    		$asesmen_keperawatan->konsep_diri .= "3-";
    	}
    	if(isset($request->konsep_diri4)) {
    		$asesmen_keperawatan->konsep_diri .= "4-";
    	}
    	if(isset($request->konsep_diri5)) {
    		$asesmen_keperawatan->konsep_diri .= "5-";
    	}
    	$asesmen_keperawatan->konsep_diri = substr($asesmen_keperawatan->konsep_diri, 0, -1);


    	$asesmen_keperawatan->persepsi = "";
    	if(isset($request->persepsi1)) {
    		$asesmen_keperawatan->persepsi .= "1-";
    	}
    	if(isset($request->persepsi2)) {
    		$asesmen_keperawatan->persepsi .= "2-";
    	}
    	if(isset($request->persepsi3)) {
    		$asesmen_keperawatan->persepsi .= "3-";
    	}
    	if(isset($request->persepsi4)) {
    		$asesmen_keperawatan->persepsi .= "4-";
    	}
    	if(isset($request->persepsi5)) {
    		$asesmen_keperawatan->persepsi .= "5-";
    	}
    	if(isset($request->persepsi6)) {
    		$asesmen_keperawatan->persepsi .= "6-";
    	}
    	if(isset($request->persepsi7)) {
    		$asesmen_keperawatan->persepsi .= "7-";
    	}
    	$asesmen_keperawatan->persepsi = substr($asesmen_keperawatan->persepsi, 0, -1);

    	$asesmen_keperawatan->motorik = "";
    	if(isset($request->motorik1)) {
    		$asesmen_keperawatan->motorik .= "1-";
    	}
    	if(isset($request->motorik2)) {
    		$asesmen_keperawatan->motorik .= "2-";
    	}
    	if(isset($request->motorik3)) {
    		$asesmen_keperawatan->motorik .= "3-";
    	}
    	if(isset($request->motorik4)) {
    		$asesmen_keperawatan->motorik .= "4-";
    	}
    	if(isset($request->motorik5)) {
    		$asesmen_keperawatan->motorik .= "5-";
    	}
    	if(isset($request->motorik6)) {
    		$asesmen_keperawatan->motorik .= "6-";
    	}
    	if(isset($request->motorik7)) {
    		$asesmen_keperawatan->motorik .= "7-";
    	}
    	if(isset($request->motorik8)) {
    		$asesmen_keperawatan->motorik .= "8-";
    	}
    	if(isset($request->motorik9)) {
    		$asesmen_keperawatan->motorik .= "9-";
    	}
    	$asesmen_keperawatan->motorik = substr($asesmen_keperawatan->motorik, 0, -1);

    	$asesmen_keperawatan->penampilan = "";
    	if(isset($request->penampilan1)) {
    		$asesmen_keperawatan->penampilan .= "1-";
    	}
    	if(isset($request->penampilan2)) {
    		$asesmen_keperawatan->penampilan .= "2-";
    	}
    	if(isset($request->penampilan3)) {
    		$asesmen_keperawatan->penampilan .= "3-";
    	}
    	if(isset($request->penampilan4)) {
    		$asesmen_keperawatan->penampilan .= "4-";
    	}
    	$asesmen_keperawatan->penampilan = substr($asesmen_keperawatan->penampilan, 0, -1);


    	$asesmen_keperawatan->pikir = "";
    	if(isset($request->pikir1)) {
    		$asesmen_keperawatan->pikir .= "1-";
    	}
    	if(isset($request->pikir2)) {
    		$asesmen_keperawatan->pikir .= "2-";
    	}
    	if(isset($request->pikir3)) {
    		$asesmen_keperawatan->pikir .= "3-";
    	}
    	if(isset($request->pikir4)) {
    		$asesmen_keperawatan->pikir .= "4-";
    	}
    	if(isset($request->pikir5)) {
    		$asesmen_keperawatan->pikir .= "5-";
    	}
    	if(isset($request->pikir6)) {
    		$asesmen_keperawatan->pikir .= "6-";
    	}
    	if(isset($request->pikir7)) {
    		$asesmen_keperawatan->pikir .= "7-";
    	}
    	if(isset($request->pikir8)) {
    		$asesmen_keperawatan->pikir .= "8-";
    	}
    	if(isset($request->pikir9)) {
    		$asesmen_keperawatan->pikir .= "9-";
    	}
    	if(isset($request->pikir10)) {
    		$asesmen_keperawatan->pikir .= "10-";
    	}
    	if(isset($request->pikir11)) {
    		$asesmen_keperawatan->pikir .= "11-";
    	}
    	if(isset($request->pikir12)) {
    		$asesmen_keperawatan->pikir .= "12-";
    	}
    	if(isset($request->pikir13)) {
    		$asesmen_keperawatan->pikir .= "13-";
    	}
    	if(isset($request->pikir14)) {
    		$asesmen_keperawatan->pikir .= "14-";
    	}
    	if(isset($request->pikir15)) {
    		$asesmen_keperawatan->pikir .= "15-";
    	}
    	$asesmen_keperawatan->pikir = substr($asesmen_keperawatan->pikir, 0, -1);

        $asesmen_keperawatan->perasaan = "";
        if(isset($request->perasaan1)) {
            $asesmen_keperawatan->perasaan .= "1-";
        }
        if(isset($request->perasaan2)) {
            $asesmen_keperawatan->perasaan .= "2-";
        }
        if(isset($request->perasaan3)) {
            $asesmen_keperawatan->perasaan .= "3-";
        }
        if(isset($request->perasaan4)) {
            $asesmen_keperawatan->perasaan .= "4-";
        }
        if(isset($request->perasaan5)) {
            $asesmen_keperawatan->perasaan .= "5-";
        }
        if(isset($request->perasaan6)) {
            $asesmen_keperawatan->perasaan .= "6-";
        }
        if(isset($request->perasaan7)) {
            $asesmen_keperawatan->perasaan .= "7-";
        }

        $asesmen_keperawatan->status_fungsional = $request->status_fungsional;

        if(isset($request->perlu_bantuan)) {
            $asesmen_keperawatan->perlu_bantuan = $request->perlu_bantuan;
    	}

        if(!empty($request->dilaporkan_ke)) {
            $asesmen_keperawatan->waktu_laporan = $request->waktu_laporan;
        }

    	$asesmen_keperawatan->status_fungsional = $request->status_fungsional;
    	$asesmen_keperawatan->waktu_laporan = $request->waktu_laporan;
    	$asesmen_keperawatan->save();

    	return redirect('index');
    }
}