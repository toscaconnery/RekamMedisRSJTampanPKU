<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IGDTriase;
use App\Models\ListDocument;
use Session;
use View;
use Auth;

class IGDTriaseController extends Controller
{
    public function __construct()
    {
        $this->middleware('haspatient');
        $this->data['title'] = 'Triase Pasien';
    }

    public function get_list_document()
    {
        $id_pasien = Session::get('id_pasien');
        $daftar_dokumen = ListDocument::where('id_regis', $id_pasien)->first();
        
        $this->data['tanggal_pengisian'] = '';
        $this->data['nama_pengisi']       = $daftar_dokumen->igd_triase_petugas;

        if ($daftar_dokumen->igd_triase) {
            $tanggal = IGDTriase::where('id_regis', $id_pasien)->first()->created_at;
            $this->data['tanggal_pengisian'] = date('j F Y', strtotime($tanggal));
        }
    }
    
    public function get_igd_triase()
    {
        $this->get_list_document();
        if ($this->data['tanggal_pengisian']) {
            return redirect('igd_triase_read');
        }
    	return view('page.igd.triase', $this->data);
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
        $daftar_dokumen->igd_triase_petugas = Auth::user()->nama;
        $daftar_dokumen->save();

    	return redirect('igd_triase_read');
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
        $this->data['tanggal_pengisian'] = $pasien->created_at;
        $this->data['nama_pengisi'] = $pasien->petugas;

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
        $this->get_list_document();
        if (!$this->data['nama_pengisi']) {
            Session::put('pesan_kesalahan', 'Dokumen tidak ditemukan');
            return redirect('/');
        }
        $this->get_igd_triase_data();
        return view('page.igd.triase_read', $this->data);
    }

    public function get_igd_triase_edit()
    {
        $this->get_list_document();
        if (!$this->data['nama_pengisi']) {
            Session::put('pesan_kesalahan', 'Dokumen tidak ditemukan');
            return redirect('/');
        }
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

        return redirect('igd_triase_read');
    }

    public function get_igd_triase_delete()
    {
        $id_pasien = Session::get('id_pasien');

        // menghapus semua dokumen
        IGDTriase::where('id_regis', $id_pasien)->delete();

        // mengosongkan data di list dokumen
        $list_document = ListDocument::where('id_regis', $id_pasien)->first();
        $list_document->igd_triase = false;
        $list_document->igd_triase_petugas = null;
        $list_document->save();
        
        Session::put('pesan_berhasil', 'Dokumen berhasil dihapus');

        return redirect('/');
    }

    public function igd_triase_pdf()
    {
        $this->get_igd_triase_data();
        ob_clean();

        header('Content-type: application/pdf');

        $mpdf = new \Mpdf\Mpdf([
        'mode' => 'utf-8', 
        'format' => 'A4-L', 
        'orientation' => 'P'
        ]);

        $view = View::make('doc_igd_triase',$this->data);
        $contents = $view->render();


        $mpdf->SetHTMLHeader('
            <table width="100%" >
                <tbody>
                        <tr>

                            <td class= "doc_headerleft">
                                <img class="relative" src="img/riau.png" height="9%" width="7%">
                            </td>

                            <td class="doc_headermid">
                                <p style="font-size:120%;" ><b>Pemerintah Provinsi Riau</b></p>
                                <br><p style="font-size:160%;" ><b>RUMAH SAKIT JIWA TAMPAN</b></p>
                                <br><p style="font-size:90%;" >Jl. H. R. Soebrantas Km. 12,5 Pekanbaru Telp. (0761) 63240</p>
                                <p style="font-size:90%;" >Fax. (0761) 63239 E-mail : rstampan@yahoo.com</p>
                            </td>
                            
                            <td class="doc_headerright">
                            <p>No. RM           </p><br>
                            <p>Nama Pasien      </p><br>
                            <p>Tanggal Lahir    </p><br>
                            <p>Jenis Kelamin    </p><br>
                            </td>    

                            <td class="doc_headerright_ans">
                            <p>:  '.Session::get('id_pasien').'</p><br>
                            <p>:  '.Session::get("nama").'</p><br>
                            <p>:  '.Session::get("tanggal_lahir").'</p><br>
                            <p>:  '.Session::get("jenis_kelamin").'</p><br>
                            </td>                       
                        </tr>
  
                </tbody>
            </table> <hr> <br>' );

        $mpdf->SetHTMLFooter('<hr>
            <table width="100%" style="vertical-align: bottom; font-family: "arial", Times, serif; 
                font-size: 8pt; color: #000000; font-weight: bold; font-style: italic;">
                <tr>
                    <td width="33%">{DATE j-m-Y}</td>
                    <td width="33%" align="center">{PAGENO}/{nbpg}</td>
                    <td width="33%" style="text-align: right;">RM. 01.00.IGD JULI 2015</td>
                </tr>
            </table>'); 

        $stylesheet = '<style>'.file_get_contents('css/pdf.css').'</style>';

        $mpdf->AddPage('P','','','','',10,10,35,20,10,10);
        //right,left
        $mpdf->WriteHTML($stylesheet, 1);
        $mpdf->WriteHTML($contents,2,true,false);

        $mpdf->Output('igd_triase.pdf',\Mpdf\Output\Destination::INLINE);
    }
}
