<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RIEvaluasiKeperawatan;
use App\Models\ListDocument;
use Session;
use View;

class RIEvaluasiKeperawatanController extends Controller
{
    public function __construct()
    {
        $this->middleware('haspatient');
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
    	return redirect('ri_evaluasi_keperawatan_read');
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
        return redirect('ri_evaluasi_keperawatan_read');
    }

    public function ri_evaluasi_pdf()
    {
        $this->get_ri_evaluasi_keperawatan_data();
        
        ob_clean();

        header('Content-type: application/pdf');

        $mpdf = new \Mpdf\Mpdf([
        'mode' => 'utf-8', 
        'format' => 'A4-P', 
        'orientation' => 'P'
        ]);

        $view = View::make('doc_ri_evaluasi',$this->data);
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
                            <p>:  123456</p><br>
                            <p>:  Joko Pangestu</p><br>
                            <p>:  13/08/1992</p><br>
                            <p>:  L</p><br>
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
                    <td width="33%" style="text-align: right;">RM. 22.00.RI JULI 2015</td>
                </tr>
            </table>'); 

        $stylesheet = '<style>'.file_get_contents('css/pdf.css').'</style>';

        $mpdf->AddPage('P','','','','',10,10,35,20,10,10);
        //right,left
        $mpdf->WriteHTML($stylesheet, 1);
        $mpdf->WriteHTML($contents,2,true,false);

        $mpdf->Output('ri_evaluasi.pdf',\Mpdf\Output\Destination::INLINE);
    }
}
