<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RIDPJPCase;
use App\Models\ListDocument;
use Session;
use View;

class RIDPJPCaseController extends Controller
{
	public function __construct()
    {
        $this->middleware('haspatient');
        $this->data['title'] = 'DPJP dan Case Manager';
    }

    public function get_ri_dpjp_case()
    {
    	return view('page.ri.dpjp_case', $this->data);
    }

    public function post_ri_dpjp_case(Request $request)
    {
    	$data = new RIDPJPCase;
        $id_pasien = Session::get('id_pasien');
    	$data->id_regis = $id_pasien;
    	$data->diagnosa = $request->diagnosa;
    	$data->ruang = $request->ruang;
    	$data->nama_dpjp = $request->nama_dpjp;
    	$jumlah_tim = $request->jumlah_form_anggota_tim;
    	$anggota_tim = '';
    	for($i = 1; $i <= $jumlah_tim; $i++) {
    		$str_anggota = 'anggota_tim_'.$i;
    		if(!is_null($request->$str_anggota)) {
    			$anggota_tim .= $request->$str_anggota."$&!^@";
    		}
    	}
        if(strlen($anggota_tim) > 0)  {
            $anggota_tim = substr($anggota_tim, 0, -5);
        }
    	$data->tim_dpjp = $anggota_tim;
    	$rawat_bersama = '';
    	$jumlah_rawat_bersama = $request->jumlah_form_dpjp;
    	for($i = 1; $i <= $jumlah_rawat_bersama; $i++) {
    		$str_dpjp = 'dpjp_'.$i;
    		$str_tanggal = 'tanggal_dpjp_'.$i;
    		if(!is_null($request->$str_dpjp)) {
    			$rawat_bersama .= $request->$str_dpjp."#&!^@".$request->$str_tanggal."$&!^@";
    		}
    	}
        if(strlen($rawat_bersama) > 0) {
            $rawat_bersama = substr($rawat_bersama, 0, -5);
        }
    	$data->rawat_bersama = $rawat_bersama;
    	$data->pengalihan_dpjp_ke = $request->pengalihan_dpjp_ke;
    	$data->tanggal_pengalihan = $request->tanggal_pengalihan;
    	$data->alasan_pengalihan = $request->alasan_pengalihan;
    	$data->cm_1 = $request->cm_1;
    	$data->cm_2 = $request->cm_2;
    	$data->cm_3 = $request->cm_3;
    	$data->save();

        $daftar_dokumen = ListDocument::where('id_regis', $id_pasien)->get()->first();
        $daftar_dokumen->ri_dpjp_case = True;
        $daftar_dokumen->save();
    	
    	return redirect('daftar_dokumen');
    }

    public function get_ri_dpjp_case_data()
    {
        $id_pasien = Session::get('id_pasien');
        $pasien = RIDPJPCase::where('id_regis', $id_pasien)->first();
        
        $this->data['diagnosa'] = $pasien->diagnosa;
        $this->data['ruang'] = $pasien->ruang;
        $this->data['nama_dpjp'] = $pasien->nama_dpjp;
        
        $list_team = explode('$&!^@', $pasien->tim_dpjp);
        $this->data['list_team'] = $list_team;

        $list_rawat_bersama = explode('$&!^@', $pasien->rawat_bersama);
        $this->data['rawat_bersama'] = array();
        foreach ($list_rawat_bersama as $key => $value) {
            $this->data['rawat_bersama'][$key] = array();
            $temp = explode('#&!^@', $value);
            $this->data['rawat_bersama'][$key]['dpjp'] = $temp[0];
            $this->data['rawat_bersama'][$key]['tanggal'] = $temp[1];
        }
        $this->data['pengalihan_dpjp_ke'] = $pasien->pengalihan_dpjp_ke;
        $this->data['tanggal_pengalihan'] = $pasien->tanggal_pengalihan;
        $this->data['alasan_pengalihan'] = $pasien->alasan_pengalihan;
        $this->data['cm_1'] = $pasien->cm_1;
        $this->data['cm_2'] = $pasien->cm_2;
        $this->data['cm_3'] = $pasien->cm_3;
    }

    public function get_ri_dpjp_case_read()
    {
        $this->get_ri_dpjp_case_data();
        return view('page.ri.dpjp_case_read', $this->data);
    }

    public function get_ri_dpjp_case_edit()
    {
        $this->get_ri_dpjp_case_data();
        return view('page.ri.dpjp_case_edit', $this->data);
    }

    public function post_ri_dpjp_case_edit(Request $request)
    {
        $id_pasien = Session::get('id_pasien');
        $data = RIDPJPCase::where('id_regis', $id_pasien)->first();
        $data->diagnosa = $request->diagnosa;
        $data->ruang = $request->ruang;
        $data->nama_dpjp = $request->nama_dpjp;
        $jumlah_tim = $request->jumlah_form_anggota_tim;
        $anggota_tim = '';
        for($i = 1; $i <= $jumlah_tim; $i++) {
            $str_anggota = 'anggota_tim_'.$i;
            if(!is_null($request->$str_anggota)) {
                $anggota_tim .= $request->$str_anggota."$&!^@";
            }
        }
        if(strlen($anggota_tim) > 0)  {
            $anggota_tim = substr($anggota_tim, 0, -5);
        }
        $data->tim_dpjp = $anggota_tim;
        $rawat_bersama = '';
        $jumlah_rawat_bersama = $request->jumlah_form_dpjp;
        for($i = 1; $i <= $jumlah_rawat_bersama; $i++) {
            $str_dpjp = 'dpjp_'.$i;
            $str_tanggal = 'tanggal_dpjp_'.$i;
            if(!is_null($request->$str_dpjp)) {
                $rawat_bersama .= $request->$str_dpjp."#&!^@".$request->$str_tanggal."$&!^@";
            }
        }
        if(strlen($rawat_bersama) > 0) {
            $rawat_bersama = substr($rawat_bersama, 0, -5);
        }
        $data->rawat_bersama = $rawat_bersama;
        $data->pengalihan_dpjp_ke = $request->pengalihan_dpjp_ke;
        $data->tanggal_pengalihan = $request->tanggal_pengalihan;
        $data->alasan_pengalihan = $request->alasan_pengalihan;
        $data->cm_1 = $request->cm_1;
        $data->cm_2 = $request->cm_2;
        $data->cm_3 = $request->cm_3;
        $data->save();
        
        return redirect('daftar_dokumen');
    }

    public function ri_dpjpcase_pdf()
    {
        $this->get_ri_dpjp_case_data();
        ob_clean();

        header('Content-type: application/pdf');

        $mpdf = new \Mpdf\Mpdf([
        'mode' => 'utf-8', 
        'format' => 'A4-L', 
        'orientation' => 'P'
        ]);

        $view = View::make('doc_ri_dpjpcase',$this->data);
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
                    <td width="33%" style="text-align: right;">RM. 03.00.RI JULI 2015</td>
                </tr>
            </table>'); 

        $stylesheet = '<style>'.file_get_contents('css/pdf.css').'</style>';

        $mpdf->AddPage('P','','','','',10,10,35,20,10,10);
        //right,left
        $mpdf->WriteHTML($stylesheet, 1);
        $mpdf->WriteHTML($contents,2,true,false);

        $mpdf->Output('ri_dpjpcase.pdf',\Mpdf\Output\Destination::INLINE);
    }

}