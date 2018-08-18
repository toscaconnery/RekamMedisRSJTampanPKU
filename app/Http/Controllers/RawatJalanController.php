<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\RJAAAsesmenKeperawatan;
use App\Models\Nyeri;
use App\Models\FisikGizi;
use App\Models\HumptyDumpty;
use App\Models\Morse;
use App\Models\Edmunson;
use App\Models\DiagnosaKeperawatan;
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
    	$asesmen_keperawatan->id_user = Auth::user()->id;
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
        $asesmen_keperawatan->perasaan = substr($asesmen_keperawatan->perasaan, 0, -1);

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

    public function store_fisik_gizi(Request $request)
    {
        $fisik_gizi = new FisikGizi;
        $fisik_gizi->id_regis = 1;
        $fisik_gizi->td = $request->td;
        $fisik_gizi->tb = $request->tb;
        $fisik_gizi->nadi = $request->nadi;
        $fisik_gizi->bb = $request->bb;
        $fisik_gizi->pernafasan = $request->pernafasan;
        $fisik_gizi->golongan_darah = $request->golongan_darah;
        $fisik_gizi->suhu = $request->suhu;
        $fisik_gizi->skor_must = $request->must_1 + $request->must_2;
        $fisik_gizi->must_1 = $request->must_1;
        if(isset($request->must_1_input_bb_berkurang)) {
            $fisik_gizi->bb_berkurang = $request->must_1_input_bb_berkurang;
            $fisik_gizi->skor_must += $request->must_1_input_bb_berkurang;
        }
        $fisik_gizi->must_2 = $request->must_2;
        if($request->must_3 == 'True') {
            $fisik_gizi->must_3 = True;
            $dk = "";
            if(isset($diagnosis_khusus_1)) {
                $dk .= "DM, ";
            }
            if(isset($diagnosis_khusus_2)) {
                $dk .= "Kemoterapi, ";
            }
            if(isset($diagnosis_khusus_3)) {
                $dk .= "Hemodialisa, ";
            }
            if(isset($diagnosis_khusus_4)) {
                $dk .= "Geriatri, ";
            }
            if(isset($diagnosis_khusus_5)) {
                $dk .= "Immunitas Menurun, ";
            }
            if(isset($diagnosis_khusus_6)) {
                $dk .= "Lain-lain, ";
            }
            $dk = substr($dk, 0, -2);
            $fisik_gizi->diagnosis_khusus = $dk;
        }
        else {
            $fisik_gizi->must_3 = False;
        }
        $fisik_gizi->sk_1 = $request->sk_1;
        $fisik_gizi->sk_2 = $request->sk_2;
        $fisik_gizi->sk_3 = $request->sk_3;
        $fisik_gizi->sk_4 = $request->sk_4;
        $fisik_gizi->skor_sk = $request->sk_1 + $request->sk_2 + $request->sk_3 + $request->sk_4;

        $fisik_gizi->penyakit_malnutrisi = "";
        if(isset($request->penyakit_malnutrisi_1)) {
            $fisik_gizi->penyakit_malnutrisi .= "1-";
        }
        if(isset($request->penyakit_malnutrisi_2)) {
            $fisik_gizi->penyakit_malnutrisi .= "2-";
        }
        if(isset($request->penyakit_malnutrisi_3)) {
            $fisik_gizi->penyakit_malnutrisi .= "3-";
        }
        if(isset($request->penyakit_malnutrisi_4)) {
            $fisik_gizi->penyakit_malnutrisi .= "4-";
        }
        if(isset($request->penyakit_malnutrisi_5)) {
            $fisik_gizi->penyakit_malnutrisi .= "5-";
        }
        if(isset($request->penyakit_malnutrisi_6)) {
            $fisik_gizi->penyakit_malnutrisi .= "6-";
        }
        if(isset($request->penyakit_malnutrisi_7)) {
            $fisik_gizi->penyakit_malnutrisi .= "7-";
        }
        if(isset($request->penyakit_malnutrisi_8)) {
            $fisik_gizi->penyakit_malnutrisi .= "8-";
        }
        if(isset($request->penyakit_malnutrisi_9)) {
            $fisik_gizi->penyakit_malnutrisi .= "9-";
        }
        if(isset($request->penyakit_malnutrisi_10)) {
            $fisik_gizi->penyakit_malnutrisi .= "10-";
        }
        if(isset($request->penyakit_malnutrisi_11)) {
            $fisik_gizi->penyakit_malnutrisi .= "11-";
        }
        if(isset($request->penyakit_malnutrisi_12)) {
            $fisik_gizi->penyakit_malnutrisi .= "12-";
        }
        if(isset($request->penyakit_malnutrisi_13)) {
            $fisik_gizi->penyakit_malnutrisi .= "13-";
        }
        if(isset($request->penyakit_malnutrisi_14)) {
            $fisik_gizi->penyakit_malnutrisi .= "14-";
        }
        if(isset($request->penyakit_malnutrisi_15)) {
            $fisik_gizi->penyakit_malnutrisi .= "15-";
        }
        if(isset($request->penyakit_malnutrisi_16)) {
            $fisik_gizi->penyakit_malnutrisi .= "16-";
        }
        $fisik_gizi->penyakit_malnutrisi = substr($fisik_gizi->penyakit_malnutrisi, 0, -1);

        if($request->pemberitahuan == "1") {
            $fisik_gizi->pemberitahuan = True;
        }
        elseif($request->pemberitahuan == "0") {
            $fisik_gizi->pemberitahuan = False;
        }
        if(!empty($request->waktu_pemberitahuan)) {
            $fisik_gizi->waktu_pemberitahuan = $request->waktu_pemberitahuan;
        }
        $fisik_gizi->save();
        return redirect('index');
    }

    public function store_penilaian_tingkat_nyeri(Request $request)
    {
        $nyeri = new Nyeri;
        $nyeri->id_regis = 1;
        $nyeri->tingkat = $request->tingkat;
        $nyeri->skala = $request->skala;
        $nyeri->lokasi = $request->lokasi;
        $nyeri->lokasi = $request->lokasi;
        $nyeri->durasi = $request->durasi;
        $nyeri->frekuensi = $request->frekuensi;
        $hilang = "";
        if(isset($request->hilang1)) {
            $hilang .= "Minum obat, ";
        }
        if(isset($request->hilang2)) {
            $hilang .= "Mendengar musik, ";
        }
        if(isset($request->hilang3)) {
            $hilang .= "Istirahat, ";
        }
        if(isset($request->hilang4)) {
            $hilang .= "Berubah posisi/tidur, ";
        }
        if(isset($request->hilang5)) {
            $hilang .= $request->nyeri_hilang_input_text;
            $hilang .", ";
        }
        $hilang = substr($hilang, 0, -1);
        $nyeri->hilang = $hilang;
        $nyeri->pemberitahuan = $request->pemberitahuan;
        if($request->pemberitahuan == '1') {
            $nyeri->waktu_pemberitahuan = $request->waktu_pemberitahuan;
        }
        $nyeri->save();
        return redirect('index');
    }

    public function store_humpty_dumpty(Request $request)
    {
        $humpty = new HumptyDumpty;
        $humpty->id_regis = 1;
        $humpty->usia = $request->usia;
        $humpty->diagnosis = $request->diagnosis;
        $humpty->gangguan_kognitif = $request->gangguan_kognitif;
        $humpty->faktor_lingkungan = $request->faktor_lingkungan;
        $humpty->waktu_respon_obat = $request->waktu_respon_obat;
        $humpty->penggunaan_obat = $request->penggunaan_obat;
        $humpty->save();
        return redirect('index');
    }

    public function store_morse(Request $request)
    {
        $morse = new Morse;
        $morse->id_regis = 1;
        if($request->riwayat_jatuh == 'true') {
            $morse->riwayat_jatuh = True;
        }
        else {
            $morse->riwayat_jatuh = False;
        }
        if($request->diagnosis_sekunder == 'true') {
            $morse->diagnosis_sekunder = True;
        }
        else {
            $morse->diagnosis_sekunder = False;
        }
        $morse->alat_bantu = $request->alat_bantu;
        if($request->terpasang_infus == 'true') {
            $morse->terpasang_infus = True;
        }
        else {
            $morse->terpasang_infus = False;
        }
        $morse->gaya_berjalan = $request->gaya_berjalan;
        $morse->status_mental = $request->status_mental;
        $morse->save();
        return redirect('index');
    }

    public function store_edmunson(Request $request)
    {
        $edmunson = new Edmunson;
        $edmunson->id_regis = 1;
        $edmunson->status_mental = $request->status_mental;
        $edmunson->diagnosis = $request->diagnosis;
        $edmunson->eliminasi = $request->eliminasi;
        $edmunson->pengobatan = $request->pengobatan;
        $edmunson->diagnosa = $request->diagnosa;
        $edmunson->ambulasi = $request->ambulasi;
        $edmunson->nutrisi = $request->nutrisi;
        $edmunson->riwayat_jatuh = $request->riwayat_jatuh;
        $edmunson->save();
        return redirect('index');
    }

    public function store_diagnosa_keperawatan_umum(Request $request)
    {
        $diagnosa = new DiagnosaKeperawatan;

        return redirect('index');
    }
}
