<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RIEdukasi;
use App\Models\ListDocument;
use Session;
use View;

class RIEdukasiController extends Controller
{
    public function __construct()
    {
        $this->middleware('haspatient');
    	$this->data['title'] = 'Edukasi Pasien dan Keluarga';
    }

    public function get_ri_edukasi()
    {
    	return view('page.ri.edukasi', $this->data);
    }

    public function post_ri_edukasi(Request $request)
    {
        $id_pasien = Session::get('id_pasien');
        $data = new RIEdukasi;
    	$data->id_regis = $id_pasien;
		$data->medis_materi = $request->medis_materi;
		$data->medis_metode = $request->medis_metode;
		$data->medis_nama_edukator = $request->medis_nama_edukator;
		if(isset($request->medis_paraf_pasien)) {
			$data->medis_paraf_pasien = True;
		}
        else{
            $data->medis_paraf_pasien = False;
        }
		if(isset($request->medis_paraf_edukator)) {
			$data->medis_paraf_edukator = True;
		}
        else {
            $data->medis_paraf_edukator = False;
        }

		$data->mj_materi = $request->mj_materi;
		$data->mj_metode = $request->mj_materi;
		$data->mj_nama_edukator = $request->mj_nama_edukator;
		if(isset($request->mj_paraf_pasien)) {
			$data->mj_paraf_pasien = True;
		}
        else {
            $data->mj_paraf_pasien = False;
        }
		if(isset($request->mj_paraf_edukator)) {
			$data->mj_paraf_edukator = True;
		}
        else {
            $data->mj_paraf_edukator = False;
        }

		$data->psikologis_materi = $request->psikologis_materi;
		$data->psikologis_metode = $request->psikologis_metode;
		$data->psikologis_nama_edukator = $request->psikologis_nama_edukator;
		if(isset($request->psikologis_paraf_pasien)) {
			$data->psikologis_paraf_pasien = True;
		}
        else {
            $data->psikologis_paraf_pasien = False;
        }
		if(isset($request->psikologis_paraf_edukator)) {
			$data->psikologis_paraf_edukator = True;
		}
        else {
            $data->psikologis_paraf_edukator = False;
        }

		$data->keperawatan_materi = $request->keperawatan_materi;
		$data->keperawatan_metode = $request->keperawatan_metode;
		$data->keperawatan_nama_edukator = $request->keperawatan_nama_edukator;
		if(isset($request->keperawatan_paraf_pasien)) {
			$data->keperawatan_paraf_pasien = True;
		}
        else {
            $data->keperawatan_paraf_pasien = False;
        }
		if(isset($request->keperawatan_paraf_edukator)) {
			$data->keperawatan_paraf_edukator = True;
		}
        else {
            $data->keperawatan_paraf_edukator = False;
        }

		$data->farmasi_materi = $request->farmasi_materi;
		$data->farmasi_metode = $request->farmasi_metode;
		$data->farmasi_nama_edukator = $request->farmasi_nama_edukator;
		if(isset($request->farmasi_paraf_pasien)) {
			$data->farmasi_paraf_pasien = True;
		}
        else {
            $data->farmasi_paraf_pasien = False;
        }
		if(isset($request->farmasi_paraf_edukator)) {
			$data->farmasi_paraf_edukator = True;
		}
        else {
            $data->farmasi_paraf_edukator = False;
        }

		$data->nutrisi_materi = $request->nutrisi_materi;
		$data->nutrisi_metode = $request->nutrisi_metode;
		$data->nutrisi_nama_edukator = $request->nutrisi_nama_edukator;
		if(isset($request->nutrisi_paraf_pasien)) {
			$data->nutrisi_paraf_pasien = True;
		}
        else {
            $data->nutrisi_paraf_pasien = False;
        }
		if(isset($request->nutrisi_paraf_edukator)) {
			$data->nutrisi_paraf_edukator = True;
		}
        else {
            $data->nutrisi_paraf_edukator = False;
        }

		$data->kerohanian_materi = $request->kerohanian_materi;
		$data->kerohanian_metode = $request->kerohanian_metode;
		$data->kerohanian_nama_edukator = $request->kerohanian_nama_edukator;
		if(isset($request->kerohanian_paraf_pasien)) {
			$data->kerohanian_paraf_pasien = True;
		}
        else {
            $data->kerohanian_paraf_pasien = False;
        }
		if(isset($request->kerohanian_paraf_edukator)) {
			$data->kerohanian_paraf_edukator = True;
		}
        else {
            $data->kerohanian_paraf_edukator = False;
        }

		$data->rehabilitasi_materi = $request->rehabilitasi_materi;
		$data->rehabilitasi_metode = $request->rehabilitasi_metode;
		$data->rehabilitasi_nama_edukator = $request->rehabilitasi_nama_edukator;
		if(isset($request->rehabilitasi_paraf_pasien)) {
			$data->rehabilitasi_paraf_pasien = True;
		}
        else {
            $data->rehabilitasi_paraf_pasien = False;
        }
		if(isset($request->rehabilitasi_paraf_edukator)) {
			$data->rehabilitasi_paraf_edukator = True;
		}
        else {
            $data->rehabilitasi_paraf_edukator = False;
        }

		$data->dt_materi = $request->dt_materi;
		$data->dt_metode = $request->dt_metode;
		$data->dt_evaluasi = $request->dt_evaluasi;
		$data->dt_nama_edukator = $request->dt_nama_edukator;
		if(isset($request->dt_paraf_pasien)) {
			$data->dt_paraf_pasien = True;
		}
        else {
            $data->dt_paraf_pasien = False;
        }
		if(isset($request->dt_paraf_edukator)) {
			$data->dt_paraf_edukator = True;
		}
        else {
            $data->dt_paraf_edukator = False;
        }
		$data->save();

        $daftar_dokumen = ListDocument::where('id_regis', $id_pasien)->first();
        $daftar_dokumen->ri_edukasi = True;
        $daftar_dokumen->save();

    	return back();
    }

    public function get_ri_edukasi_data() {
    	$pasien = RIEdukasi::where('id', 1)->first();
    	
        $this->data['medis_materi'] = $pasien->medis_materi;
        $this->data['medis_metode'] = $pasien->medis_metode;
        $this->data['medis_nama_edukator'] = $pasien->medis_nama_edukator;
        $this->data['medis_paraf_pasien'] = $pasien->medis_paraf_pasien;
        $this->data['medis_paraf_edukator'] = $pasien->medis_paraf_edukator;

        $this->data['mj_materi'] = $pasien->mj_materi;
        $this->data['mj_metode'] = $pasien->mj_metode;
        $this->data['mj_nama_edukator'] = $pasien->mj_nama_edukator;
        $this->data['mj_paraf_pasien'] = $pasien->mj_paraf_pasien;
        $this->data['mj_paraf_edukator'] = $pasien->mj_paraf_edukator;

        $this->data['psikologis_materi'] = $pasien->psikologis_materi;
        $this->data['psikologis_metode'] = $pasien->psikologis_metode;
        $this->data['psikologis_nama_edukator'] = $pasien->psikologis_nama_edukator;
        $this->data['psikologis_paraf_pasien'] = $pasien->psikologis_paraf_pasien;
        $this->data['psikologis_paraf_edukator'] = $pasien->psikologis_paraf_edukator;

        $this->data['keperawatan_materi'] = $pasien->keperawatan_materi;
        $this->data['keperawatan_metode'] = $pasien->keperawatan_metode;
        $this->data['keperawatan_nama_edukator'] = $pasien->keperawatan_nama_edukator;
        $this->data['keperawatan_paraf_pasien'] = $pasien->keperawatan_paraf_pasien;
        $this->data['keperawatan_paraf_edukator'] = $pasien->keperawatan_paraf_edukator;

        $this->data['farmasi_materi'] = $pasien->farmasi_materi;
        $this->data['farmasi_metode'] = $pasien->farmasi_metode;
        $this->data['farmasi_nama_edukator'] = $pasien->farmasi_nama_edukator;
        $this->data['farmasi_paraf_pasien'] = $pasien->farmasi_paraf_pasien;
        $this->data['farmasi_paraf_edukator'] = $pasien->farmasi_paraf_edukator;

        $this->data['nutrisi_materi'] = $pasien->nutrisi_materi;
        $this->data['nutrisi_metode'] = $pasien->nutrisi_metode;
        $this->data['nutrisi_nama_edukator'] = $pasien->nutrisi_nama_edukator;
        $this->data['nutrisi_paraf_pasien'] = $pasien->nutrisi_paraf_pasien;
        $this->data['nutrisi_paraf_edukator'] = $pasien->nutrisi_paraf_edukator;

        $this->data['kerohanian_materi'] = $pasien->kerohanian_materi;
        $this->data['kerohanian_metode'] = $pasien->kerohanian_metode;
        $this->data['kerohanian_nama_edukator'] = $pasien->kerohanian_nama_edukator;
        $this->data['kerohanian_paraf_pasien'] = $pasien->kerohanian_paraf_pasien;
        $this->data['kerohanian_paraf_edukator'] = $pasien->kerohanian_paraf_edukator;

        $this->data['rehabilitasi_materi'] = $pasien->rehabilitasi_materi;
        $this->data['rehabilitasi_metode'] = $pasien->rehabilitasi_metode;
        $this->data['rehabilitasi_nama_edukator'] = $pasien->rehabilitasi_nama_edukator;
        $this->data['rehabilitasi_paraf_pasien'] = $pasien->rehabilitasi_paraf_pasien;
        $this->data['rehabilitasi_paraf_edukator'] = $pasien->rehabilitasi_paraf_edukator;

        $this->data['dt_materi'] = $pasien->dt_materi;
        $this->data['dt_metode'] = $pasien->dt_metode;
        $this->data['dt_evaluasi'] = $pasien->dt_evaluasi;
        $this->data['dt_nama_edukator'] = $pasien->dt_nama_edukator;
        $this->data['dt_paraf_pasien'] = $pasien->dt_paraf_pasien;
        $this->data['dt_paraf_edukator'] = $pasien->dt_paraf_edukator;
    }

    public function get_ri_edukasi_read()
    {
        $this->get_ri_edukasi_data();
        return view('page.ri.edukasi_read', $this->data);
    }

    public function get_ri_edukasi_edit()
    {
        $this->get_ri_edukasi_data();
        return view('page.ri.edukasi_edit', $this->data);
    }

    public function post_ri_edukasi_edit(Request $request)
    {
        $id_pasien = Session::get('id_pasien');
        $data = RIEdukasi::where('id_regis', $id_pasien)->first();
        $data->id_regis = $id_pasien;
        $data->medis_materi = $request->medis_materi;
        $data->medis_metode = $request->medis_metode;
        $data->medis_nama_edukator = $request->medis_nama_edukator;
        if(isset($request->medis_paraf_pasien)) {
            $data->medis_paraf_pasien = True;
        }
        else{
            $data->medis_paraf_pasien = False;
        }
        if(isset($request->medis_paraf_edukator)) {
            $data->medis_paraf_edukator = True;
        }
        else {
            $data->medis_paraf_edukator = False;
        }

        $data->mj_materi = $request->mj_materi;
        $data->mj_metode = $request->mj_materi;
        $data->mj_nama_edukator = $request->mj_nama_edukator;
        if(isset($request->mj_paraf_pasien)) {
            $data->mj_paraf_pasien = True;
        }
        else {
            $data->mj_paraf_pasien = False;
        }
        if(isset($request->mj_paraf_edukator)) {
            $data->mj_paraf_edukator = True;
        }
        else {
            $data->mj_paraf_edukator = False;
        }

        $data->psikologis_materi = $request->psikologis_materi;
        $data->psikologis_metode = $request->psikologis_metode;
        $data->psikologis_nama_edukator = $request->psikologis_nama_edukator;
        if(isset($request->psikologis_paraf_pasien)) {
            $data->psikologis_paraf_pasien = True;
        }
        else {
            $data->psikologis_paraf_pasien = False;
        }
        if(isset($request->psikologis_paraf_edukator)) {
            $data->psikologis_paraf_edukator = True;
        }
        else {
            $data->psikologis_paraf_edukator = False;
        }

        $data->keperawatan_materi = $request->keperawatan_materi;
        $data->keperawatan_metode = $request->keperawatan_metode;
        $data->keperawatan_nama_edukator = $request->keperawatan_nama_edukator;
        if(isset($request->keperawatan_paraf_pasien)) {
            $data->keperawatan_paraf_pasien = True;
        }
        else {
            $data->keperawatan_paraf_pasien = False;
        }
        if(isset($request->keperawatan_paraf_edukator)) {
            $data->keperawatan_paraf_edukator = True;
        }
        else {
            $data->keperawatan_paraf_edukator = False;
        }

        $data->farmasi_materi = $request->farmasi_materi;
        $data->farmasi_metode = $request->farmasi_metode;
        $data->farmasi_nama_edukator = $request->farmasi_nama_edukator;
        if(isset($request->farmasi_paraf_pasien)) {
            $data->farmasi_paraf_pasien = True;
        }
        else {
            $data->farmasi_paraf_pasien = False;
        }
        if(isset($request->farmasi_paraf_edukator)) {
            $data->farmasi_paraf_edukator = True;
        }
        else {
            $data->farmasi_paraf_edukator = False;
        }

        $data->nutrisi_materi = $request->nutrisi_materi;
        $data->nutrisi_metode = $request->nutrisi_metode;
        $data->nutrisi_nama_edukator = $request->nutrisi_nama_edukator;
        if(isset($request->nutrisi_paraf_pasien)) {
            $data->nutrisi_paraf_pasien = True;
        }
        else {
            $data->nutrisi_paraf_pasien = False;
        }
        if(isset($request->nutrisi_paraf_edukator)) {
            $data->nutrisi_paraf_edukator = True;
        }
        else {
            $data->nutrisi_paraf_edukator = False;
        }

        $data->kerohanian_materi = $request->kerohanian_materi;
        $data->kerohanian_metode = $request->kerohanian_metode;
        $data->kerohanian_nama_edukator = $request->kerohanian_nama_edukator;
        if(isset($request->kerohanian_paraf_pasien)) {
            $data->kerohanian_paraf_pasien = True;
        }
        else {
            $data->kerohanian_paraf_pasien = False;
        }
        if(isset($request->kerohanian_paraf_edukator)) {
            $data->kerohanian_paraf_edukator = True;
        }
        else {
            $data->kerohanian_paraf_edukator = False;
        }

        $data->rehabilitasi_materi = $request->rehabilitasi_materi;
        $data->rehabilitasi_metode = $request->rehabilitasi_metode;
        $data->rehabilitasi_nama_edukator = $request->rehabilitasi_nama_edukator;
        if(isset($request->rehabilitasi_paraf_pasien)) {
            $data->rehabilitasi_paraf_pasien = True;
        }
        else {
            $data->rehabilitasi_paraf_pasien = False;
        }
        if(isset($request->rehabilitasi_paraf_edukator)) {
            $data->rehabilitasi_paraf_edukator = True;
        }
        else {
            $data->rehabilitasi_paraf_edukator = False;
        }

        $data->dt_materi = $request->dt_materi;
        $data->dt_metode = $request->dt_metode;
        $data->dt_evaluasi = $request->dt_evaluasi;
        $data->dt_nama_edukator = $request->dt_nama_edukator;
        if(isset($request->dt_paraf_pasien)) {
            $data->dt_paraf_pasien = True;
        }
        else {
            $data->dt_paraf_pasien = False;
        }
        if(isset($request->dt_paraf_edukator)) {
            $data->dt_paraf_edukator = True;
        }
        else {
            $data->dt_paraf_edukator = False;
        }
        $data->save();
        return redirect('daftar_dokumen');
    }

    public function ri_edukasi_pdf()
    {
    	$pasien = RIEdukasi::where('id', 1)->first();
    	
        $this->data['medis_materi'] = $pasien->medis_materi;
        $this->data['medis_metode'] = $pasien->medis_metode;
        $this->data['medis_nama_edukator'] = $pasien->medis_nama_edukator;
        $this->data['medis_paraf_pasien'] = $pasien->medis_paraf_pasien;
        $this->data['medis_paraf_edukator'] = $pasien->medis_paraf_edukator;

        $this->data['mj_materi'] = $pasien->mj_materi;
        $this->data['mj_metode'] = $pasien->mj_metode;
        $this->data['mj_nama_edukator'] = $pasien->mj_nama_edukator;
        $this->data['mj_paraf_pasien'] = $pasien->mj_paraf_pasien;
        $this->data['mj_paraf_edukator'] = $pasien->mj_paraf_edukator;

        $this->data['psikologis_materi'] = $pasien->psikologis_materi;
        $this->data['psikologis_metode'] = $pasien->psikologis_metode;
        $this->data['psikologis_nama_edukator'] = $pasien->psikologis_nama_edukator;
        $this->data['psikologis_paraf_pasien'] = $pasien->psikologis_paraf_pasien;
        $this->data['psikologis_paraf_edukator'] = $pasien->psikologis_paraf_edukator;

        $this->data['keperawatan_materi'] = $pasien->keperawatan_materi;
        $this->data['keperawatan_metode'] = $pasien->keperawatan_metode;
        $this->data['keperawatan_nama_edukator'] = $pasien->keperawatan_nama_edukator;
        $this->data['keperawatan_paraf_pasien'] = $pasien->keperawatan_paraf_pasien;
        $this->data['keperawatan_paraf_edukator'] = $pasien->keperawatan_paraf_edukator;

        $this->data['farmasi_materi'] = $pasien->farmasi_materi;
        $this->data['farmasi_metode'] = $pasien->farmasi_metode;
        $this->data['farmasi_nama_edukator'] = $pasien->farmasi_nama_edukator;
        $this->data['farmasi_paraf_pasien'] = $pasien->farmasi_paraf_pasien;
        $this->data['farmasi_paraf_edukator'] = $pasien->farmasi_paraf_edukator;

        $this->data['nutrisi_materi'] = $pasien->nutrisi_materi;
        $this->data['nutrisi_metode'] = $pasien->nutrisi_metode;
        $this->data['nutrisi_nama_edukator'] = $pasien->nutrisi_nama_edukator;
        $this->data['nutrisi_paraf_pasien'] = $pasien->nutrisi_paraf_pasien;
        $this->data['nutrisi_paraf_edukator'] = $pasien->nutrisi_paraf_edukator;

        $this->data['kerohanian_materi'] = $pasien->kerohanian_materi;
        $this->data['kerohanian_metode'] = $pasien->kerohanian_metode;
        $this->data['kerohanian_nama_edukator'] = $pasien->kerohanian_nama_edukator;
        $this->data['kerohanian_paraf_pasien'] = $pasien->kerohanian_paraf_pasien;
        $this->data['kerohanian_paraf_edukator'] = $pasien->kerohanian_paraf_edukator;

        $this->data['rehabilitasi_materi'] = $pasien->rehabilitasi_materi;
        $this->data['rehabilitasi_metode'] = $pasien->rehabilitasi_metode;
        $this->data['rehabilitasi_nama_edukator'] = $pasien->rehabilitasi_nama_edukator;
        $this->data['rehabilitasi_paraf_pasien'] = $pasien->rehabilitasi_paraf_pasien;
        $this->data['rehabilitasi_paraf_edukator'] = $pasien->rehabilitasi_paraf_edukator;

        $this->data['dt_materi'] = $pasien->dt_materi;
        $this->data['dt_metode'] = $pasien->dt_metode;
        $this->data['dt_evaluasi'] = $pasien->dt_evaluasi;
        $this->data['dt_nama_edukator'] = $pasien->dt_nama_edukator;
        $this->data['dt_paraf_pasien'] = $pasien->dt_paraf_pasien;
        $this->data['dt_paraf_edukator'] = $pasien->dt_paraf_edukator;

        ob_clean();

        header('Content-type: application/pdf');

        $mpdf = new \Mpdf\Mpdf([
        'mode' => 'utf-8', 
        'format' => 'A4-L', 
        'orientation' => 'P'
        ]);

        $view = View::make('doc_ri_edukasi',$this->data);
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
            </table> <hr>' );

        $mpdf->SetHTMLFooter('<hr>
            <table width="100%" style="vertical-align: bottom; font-family: "arial", Times, serif; 
                font-size: 8pt; color: #000000; font-weight: bold; font-style: italic;">
                <tr>
                    <td width="33%">{DATE j-m-Y}</td>
                    <td width="33%" align="center">{PAGENO}/{nbpg}</td>
                    <td width="33%" style="text-align: right;">RM. 30.00.RI JULI 2015</td>
                </tr>
            </table>'); 

        $stylesheet = '<style>'.file_get_contents('css/pdf.css').'</style>';

        $mpdf->AddPage('P','','','','',10,10,35,20,10,10);
        //right,left
        $mpdf->WriteHTML($stylesheet, 1);
        $mpdf->WriteHTML($contents,2,true,false);

        $mpdf->Output('ri_edukasi.pdf',\Mpdf\Output\Destination::INLINE);
    }
}
