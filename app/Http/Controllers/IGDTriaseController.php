<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IGDTriase;
use App\Models\ListDocument;
use Session;

class IGDTriaseController extends Controller
{
    public function __construct()
    {
        $this->data['title'] = 'Triase Pasien';
    }
    
    public function get_igd_triase()
    {
    	return view('page.igd.triase');
    }

    public function post_igd_triase(Request $request)
    {
    	$data = new IGDTriase;
        $id_pasien = Session::get('id_pasien');
    	$data->id_regis = $id_pasien;
    	$data->tanggal_masuk = $request->tanggal_masuk;
    	$data->jam = $request->jam;
    	$data->keluhan_utama = $request->keluhan_utama;
    	if(isset($request->doa)) {
    		$data->doa = True;
    	}
    	else {
    		$data->doa = False;
    	}
    	if($request->jenis == 'resusitasi') {
    		$data->jenis = 'resusitasi';
    		if(isset($request->jalan_nafas_sumbatan)) {
    			$data->jalan_nafas = 'jalan_nafas_sumbatan';
    		}
    		if(isset($request->henti_nafas)) {
    			$data->henti_nafas = True;
    		}
    		if(isset($request->frek_nafas_le_10)) {
    			$data->frek_nafas = 'frek_nafas_le_10';
    		}
    		if(isset($request->sianosis)) {
    			$data->sianosis = True;
    		}
    		if(isset($request->henti_jantung)) {
    			$data->henti_jantung = True;
    		}
    		if(isset($request->kondisi_nadi_tidak_teraba)) {
    			$data->kondisi_nadi = 'kondisi_nadi_tidak_teraba';
    		}
    		if(isset($request->pucat)) {
    			$data->pucat = True;
    		}
    		if(isset($request->akral_dingin)) {
    			$data->akral_dingin = True;
    		}
    		if(isset($request->gcs_le_9)) {
    			$data->gcs = 'gcs_le_9';
    		}
    	}
    	elseif($request->jenis == 'emergent') {
    		$data->jenis = 'emergent';
    		if(isset($request->jalan_nafas_bebas)) {
    			$data->jalan_nafas = 'jalan_nafas_bebas';
    		}
    		if(isset($request->frek_nafas_be_32)) {
    			$data->frek_nafas = 'frek_nafas_be_32';
    		}
    		if(isset($request->mengi)) {
    			$data->mengi = True;
    		}
    		if(isset($request->kondisi_nadi_teraba_lemah)) {
    			$data->kondisi_nadi = 'kondisi_nadi_teraba_lemah';
    		}
    		if(isset($request->frek_nadi_le_50_be_150)) {
    			$data->frek_nadi = 'frek_nadi_le_50_be_150';
    		}
    		if(isset($request->gcs_9_12)) {
    			$data->gcs = 'gcs_9_12';
    		}
    	}
    	elseif($request->jenis == 'tanda vital') {
    		$data->jenis = 'tanda vital';
    		$data->tekanan_darah = $request->tekanan_darah;
    		$data->frek_nadi = $request->frek_nadi_text;
    		$data->frek_nafas = $request->frek_nafas_text;
    		$data->suhu = $request->suhu;
    		$data->alergi_makanan = $request->alergi_makanan;
    		$data->alergi_obat = $request->alergi_obat;
    		$data->alergi_lainnya = $request->alergi_lainnya;
    		$data->gcs = $request->gcs_text;
    	}
    	elseif($request->jenis == 'urgent') {
    		$data->jenis = 'urgent';
    		if(isset($request->jalan_nafas_bebas)) {
    			$data->jalan_nafas = 'jalan_nafas_bebas';
    		}
    		if(isset($request->frek_nafas_be_24_32)) {
    			$data->frek_nafas = 'frek_nafas_be_24_32';
    		}
    		if(isset($request->mengi)) {
    			$data->mengi = True;
    		}
    		if(isset($request->frek_nadi_120_150)) {
    			$data->frek_nadi = 'frek_nadi_120_150';
    		}
    		if(isset($request->sistol_me_160)) {
    			$data->sistol = 'sistol_me_160';
    		}
    		if(isset($request->diastol_m_100)) {
    			$data->diastol = 'diastol_m_100';
    		}
    		if(isset($request->gcs_m_12)) {
    			$data->gcs = 'gcs_m_12';
    		}
    	}
    	elseif($request->jenis == 'non urgent') {
    		$data->jenis = 'non urgent';
    		if(isset($request->jalan_nafas_bebas)) {
    			$data->jalan_nafas = 'jalan_nafas_bebas';
    		}
    		if(isset($request->frek_nafas_me_20_24)) {
    			$data->frek_nafas = 'frek_nafas_me_20_24';
    		}
    		if(isset($request->frek_nadi_100_120)) {
    			$data->frek_nadi = 'frek_nadi_100_120';
    		}
    		if(isset($request->sistol_l_160)) {
    			$data->sistol = 'sistol_l_160';
    		}
    		if(isset($request->diastol_l_100)) {
    			$data->diastol = 'diastol_l_100';
    		}
    		if(isset($request->gcs_15)) {
    			$data->gcs = 'gcs_15';
    		}
    	}
    	elseif($request->jenis == 'false emergency') {
    		$data->jenis = 'false emergency';
    		if(isset($request->jalan_nafas_bebas)) {
    			$data->jalan_nafas = 'jalan_nafas_bebas';
    		}
    		if(isset($request->frek_nafas_16_20)) {
    			$data->frek_nafas = 'frek_nafas_16_20';
    		}
    		if(isset($request->mengi)) {
    			$data->mengi = True;
    		}
    		if(isset($request->frek_nadi_80_100)) {
    			$data->frek_nadi = 'frek_nadi_80_100';
    		}
    		if(isset($request->sistol_me_120)) {
    			$data->sistol = 'sistol_me_120';
    		}
    		if(isset($request->diastol_m_80)) {
    			$data->diastol = 'diastol_m_80';
    		}
    		if(isset($request->gcs_15)) {
    			$data->gcs = 'gcs_15';
    		}
    	}
    	$data->save();

        $daftar_dokumen = ListDocument::where('id_regis', $id_pasien)->first();
        $daftar_dokumen->igd_triase = True;
        $daftar_dokumen->save();

    	return redirect('daftar_dokumen');
    }

    public function get_igd_triase_data()
    {
        $id_pasien = Session::get('id_pasien');
        $pasien = IGDTriase::where('id_regis', $id_pasien)->first();

        $this->data['id_regis'] = $pasien->id_regis;
        $this->data['tanggal_masuk'] = $pasien->tanggal_masuk;
        $this->data['jam'] = $pasien->jam;
        $this->data['keluhan_utama'] = $pasien->keluhan_utama;
        $this->data['doa'] = $pasien->doa;
        $this->data['jenis'] = $pasien->jenis;

        $this->data['tekanan_darah'] = $pasien->tekanan_darah;
        $this->data['henti_jantung'] = $pasien->henti_jantung;
        $this->data['akral_dingin'] = $pasien->akral_dingin;
        $this->data['kondisi_nadi'] = $pasien->kondisi_nadi;
        $this->data['jalan_nafas'] = $pasien->jalan_nafas;
        $this->data['henti_nafas'] = $pasien->henti_nafas;
        $this->data['frek_nafas'] = $pasien->frek_nafas;
        $this->data['frek_nadi'] = $pasien->frek_nadi;
        $this->data['sianosis'] = $pasien->sianosis;
        $this->data['diastol'] = $pasien->diastol;
        $this->data['sistol'] = $pasien->sistol;
        $this->data['mengi'] = $pasien->mengi;
        $this->data['pucat'] = $pasien->pucat;
        $this->data['suhu'] = $pasien->suhu;
        $this->data['gcs'] = $pasien->gcs;


        $this->data['alergi_makanan'] = $pasien->alergi_makanan;
        $this->data['alergi_obat'] = $pasien->alergi_obat;
        $this->data['alergi_lainnya'] = $pasien->alergi_lainnya;


        

        // return view('page.igd.triase_read', $this->data);
    }

    public function get_igd_triase_read()
    {
        $this->get_igd_triase_data();
        return view('page.igd.triase_read', $this->data);
    }

    public function get_igd_triase_edit()
    {
        $this->get_igd_triase_read();
        return view('page.igd.triase_edit', $this->data);
    }

    public function post_igd_triase_edit(Request $request)
    {
        $id_pasien = Session::get('id_pasien');
        $pasien = IGDTriase::where('id_regis', $id_pasien)->first();

        $pasien->tanggal_masuk = $request->tanggal_masuk;
        $pasien->jam = $request->jam;
        $pasien->keluhan_utama = $request->keluhan_utama;
        if(isset($request->doa)) {
            $pasien->doa = True;
        }
        else {
            $pasien->doa = False;
        }
        $pasien->jenis = $request->jenis;

        //hapus semua nilai yang ada di field selain nilai yang umum
        $pasien->henti_jantung = False;
        $pasien->tekanan_darah = Null;
        $pasien->kondisi_nadi = Null;
        $pasien->akral_dingin = False;
        $pasien->jalan_nafas = Null;
        $pasien->henti_nafas = False;
        $pasien->frek_nafas = Null;
        $pasien->frek_nadi = Null;
        $pasien->sianosis = False;
        $pasien->pucat = False;
        $pasien->alergi_makanan = Null;
        $pasien->alergi_lainnya = Null;
        $pasien->alergi_obat = Null;
        $pasien->diastol = Null;
        $pasien->sistol = Null;
        $pasien->mengi = False;
        $pasien->suhu = Null;
        $pasien->gcs = Null;

        if($request->jenis == 'resusitasi') {
            $pasien->jenis = 'resusitasi';
            if(isset($request->jalan_nafas_sumbatan)) {
                $pasien->jalan_nafas = 'jalan_nafas_sumbatan';
            }
            if(isset($request->henti_nafas)) {
                $pasien->henti_nafas = True;
            }
            if(isset($request->frek_nafas_le_10)) {
                $pasien->frek_nafas = 'frek_nafas_le_10';
            }
            if(isset($request->sianosis)) {
                $pasien->sianosis = True;
            }
            if(isset($request->henti_jantung)) {
                $pasien->henti_jantung = True;
            }
            if(isset($request->kondisi_nadi_tidak_teraba)) {
                $pasien->kondisi_nadi = 'kondisi_nadi_tidak_teraba';
            }
            if(isset($request->pucat)) {
                $pasien->pucat = True;
            }
            if(isset($request->akral_dingin)) {
                $pasien->akral_dingin = True;
            }
            if(isset($request->gcs_le_9)) {
                $pasien->gcs = 'gcs_le_9';
            }
        }
        elseif($request->jenis == 'emergent') {
            $pasien->jenis = 'emergent';
            if(isset($request->jalan_nafas_bebas)) {
                $pasien->jalan_nafas = 'jalan_nafas_bebas';
            }
            if(isset($request->frek_nafas_be_32)) {
                $pasien->frek_nafas = 'frek_nafas_be_32';
            }
            if(isset($request->mengi)) {
                $pasien->mengi = True;
            }
            if(isset($request->kondisi_nadi_teraba_lemah)) {
                $pasien->kondisi_nadi = 'kondisi_nadi_teraba_lemah';
            }
            if(isset($request->frek_nadi_le_50_be_150)) {
                $pasien->frek_nadi = 'frek_nadi_le_50_be_150';
            }
            if(isset($request->gcs_9_12)) {
                $pasien->gcs = 'gcs_9_12';
            }
        }
        elseif($request->jenis == 'tanda vital') {
            $pasien->jenis = 'tanda vital';
            $pasien->tekanan_darah = $request->tekanan_darah;
            $pasien->frek_nadi = $request->frek_nadi_text;
            $pasien->frek_nafas = $request->frek_nafas_text;
            $pasien->suhu = $request->suhu;
            $pasien->alergi_makanan = $request->alergi_makanan;
            $pasien->alergi_obat = $request->alergi_obat;
            $pasien->alergi_lainnya = $request->alergi_lainnya;
            $pasien->gcs = $request->gcs_text;
        }
        elseif($request->jenis == 'urgent') {
            $pasien->jenis = 'urgent';
            if(isset($request->jalan_nafas_bebas)) {
                $pasien->jalan_nafas = 'jalan_nafas_bebas';
            }
            if(isset($request->frek_nafas_be_24_32)) {
                $pasien->frek_nafas = 'frek_nafas_be_24_32';
            }
            if(isset($request->mengi)) {
                $pasien->mengi = True;
            }
            if(isset($request->frek_nadi_120_150)) {
                $pasien->frek_nadi = 'frek_nadi_120_150';
            }
            if(isset($request->sistol_me_160)) {
                $pasien->sistol = 'sistol_me_160';
            }
            if(isset($request->diastol_m_100)) {
                $pasien->diastol = 'diastol_m_100';
            }
            if(isset($request->gcs_m_12)) {
                $pasien->gcs = 'gcs_m_12';
            }
        }
        elseif($request->jenis == 'non urgent') {
            $pasien->jenis = 'non urgent';
            if(isset($request->jalan_nafas_bebas)) {
                $pasien->jalan_nafas = 'jalan_nafas_bebas';
            }
            if(isset($request->frek_nafas_me_20_24)) {
                $pasien->frek_nafas = 'frek_nafas_me_20_24';
            }
            if(isset($request->frek_nadi_100_120)) {
                $pasien->frek_nadi = 'frek_nadi_100_120';
            }
            if(isset($request->sistol_l_160)) {
                $pasien->sistol = 'sistol_l_160';
            }
            if(isset($request->diastol_l_100)) {
                $pasien->diastol = 'diastol_l_100';
            }
            if(isset($request->gcs_15)) {
                $pasien->gcs = 'gcs_15';
            }
        }
        elseif($request->jenis == 'false emergency') {
            $pasien->jenis = 'false emergency';
            if(isset($request->jalan_nafas_bebas)) {
                $pasien->jalan_nafas = 'jalan_nafas_bebas';
            }
            if(isset($request->frek_nafas_16_20)) {
                $pasien->frek_nafas = 'frek_nafas_16_20';
            }
            if(isset($request->mengi)) {
                $pasien->mengi = True;
            }
            if(isset($request->frek_nadi_80_100)) {
                $pasien->frek_nadi = 'frek_nadi_80_100';
            }
            if(isset($request->sistol_me_120)) {
                $pasien->sistol = 'sistol_me_120';
            }
            if(isset($request->diastol_m_80)) {
                $pasien->diastol = 'diastol_m_80';
            }
            if(isset($request->gcs_15)) {
                $pasien->gcs = 'gcs_15';
            }
        }
        $pasien->save();

        return redirect('daftar_dokumen');
    }
}
