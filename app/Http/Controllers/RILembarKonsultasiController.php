<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RILembarKonsultasi;
use App\Models\ListDocument;
use Session;
use View;

class RILembarKonsultasiController extends Controller
{
    public function __construct()
    {
        $this->middleware('haspatient');
    	$this->data['title'] = 'Lembar Konsultasi';
    }

    public function get_ri_lembar_konsultasi()
    {
    	return view('page.ri.lembar_konsultasi', $this->data);
    }

    public function post_ri_lembar_konsultasi(Request $request)
    {
    	$data = new RILembarKonsultasi;
    	$id_pasien = Session::get('id_pasien');
    	$data->id_regis = $id_pasien;
    	$data->konsultasi1 = $request->konsultasi1;
    	$data->konsultasi2 = $request->konsultasi2;
    	$data->konsultasi3 = $request->konsultasi3;
    	$data->konsultasi4 = $request->konsultasi4;
    	$data->konsultasi5 = $request->konsultasi5;
    	$data->jkonsultasi1 = $request->jkonsultasi1;
    	$data->jkonsultasi2 = $request->jkonsultasi2;
    	$data->jkonsultasi3 = $request->jkonsultasi3;
    	$data->jkonsultasi4 = $request->jkonsultasi4;
    	$data->jkonsultasi5 = $request->jkonsultasi5;
    	$data->jkonsultasi6 = $request->jkonsultasi6;
    	$data->jkonsultasi7 = $request->jkonsultasi7;
    	$data->save();

    	$daftar_dokumen = ListDocument::where('id_regis', $id_pasien)->get()->first();
        $daftar_dokumen->ri_lembar_konsultasi = True;
        $daftar_dokumen->save();

    	return redirect('daftar_dokumen');
    }

    public function get_ri_lembar_konsultasi_data()
    {
        $id_pasien = Session::get('id_pasien');
        $pasien = RILembarKonsultasi::where('id_regis', $id_pasien)->first();
        
        $this->data['id_regis'] = $pasien->id_regis;

        $this->data['konsultasi1'] = $pasien->konsultasi1;
        $this->data['konsultasi2'] = $pasien->konsultasi2;
        $this->data['konsultasi3'] = $pasien->konsultasi3;
        $this->data['konsultasi4'] = $pasien->konsultasi4;
        $this->data['konsultasi5'] = $pasien->konsultasi5;

        $this->data['jkonsultasi1'] = $pasien->jkonsultasi1;
        $this->data['jkonsultasi2'] = $pasien->jkonsultasi2;
        $this->data['jkonsultasi3'] = $pasien->jkonsultasi3;
        $this->data['jkonsultasi4'] = $pasien->jkonsultasi4;
        $this->data['jkonsultasi5'] = $pasien->jkonsultasi5;
        $this->data['jkonsultasi6'] = $pasien->jkonsultasi6;
        $this->data['jkonsultasi7'] = $pasien->jkonsultasi7;
    }

    public function get_ri_lembar_konsultasi_read()
    {
        $this->get_ri_lembar_konsultasi_data();
        return view('page.ri.lembar_konsultasi_read', $this->data);
    }

    public function get_ri_lembar_konsultasi_edit()
    {
        $this->get_ri_lembar_konsultasi_data();
        return view('page.ri.lembar_konsultasi_edit', $this->data);
    }

    public function post_ri_lembar_konsultasi_edit(Request $request)
    {
        $id_pasien = Session::get('id_pasien');
        $data = RILembarKonsultasi::where('id_regis', $id_pasien)->first();
        $data->konsultasi1 = $request->konsultasi1;
        $data->konsultasi2 = $request->konsultasi2;
        $data->konsultasi3 = $request->konsultasi3;
        $data->konsultasi4 = $request->konsultasi4;
        $data->konsultasi5 = $request->konsultasi5;
        $data->jkonsultasi1 = $request->jkonsultasi1;
        $data->jkonsultasi2 = $request->jkonsultasi2;
        $data->jkonsultasi3 = $request->jkonsultasi3;
        $data->jkonsultasi4 = $request->jkonsultasi4;
        $data->jkonsultasi5 = $request->jkonsultasi5;
        $data->jkonsultasi6 = $request->jkonsultasi6;
        $data->jkonsultasi7 = $request->jkonsultasi7;
        $data->save();
        return redirect('daftar_dokumen');
    }

    public function ri_konsultasi_pdf()
    {

        $pasien = RILembarKonsultasi::where('id', 1)->first();
        
        $this->data['id_regis'] = $pasien->id_regis;

        $this->data['konsultasi1'] = $pasien->konsultasi1;
        $this->data['konsultasi2'] = $pasien->konsultasi2;
        $this->data['konsultasi3'] = $pasien->konsultasi3;
        $this->data['konsultasi4'] = $pasien->konsultasi4;
        $this->data['konsultasi5'] = $pasien->konsultasi5;

        $this->data['jkonsultasi1'] = $pasien->jkonsultasi1;
        $this->data['jkonsultasi2'] = $pasien->jkonsultasi2;
        $this->data['jkonsultasi3'] = $pasien->jkonsultasi3;
        $this->data['jkonsultasi4'] = $pasien->jkonsultasi4;
        $this->data['jkonsultasi5'] = $pasien->jkonsultasi5;
        $this->data['jkonsultasi6'] = $pasien->jkonsultasi6;
        $this->data['jkonsultasi7'] = $pasien->jkonsultasi7;

        ob_clean();

        header('Content-type: application/pdf');

        $mpdf = new \Mpdf\Mpdf([
        'mode' => 'utf-8', 
        'format' => 'A4-P', 
        'orientation' => 'P'
        ]);

        $view = View::make('doc_ri_konsultasi',$this->data);
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
                    <td width="33%" style="text-align: right;">RM. 33.00.RI JULI 2015</td>
                </tr>
            </table>'); 

        $stylesheet = '<style>'.file_get_contents('css/pdf.css').'</style>';

        $mpdf->AddPage('P','','','','',10,10,35,20,10,10);
        //right,left
        $mpdf->WriteHTML($stylesheet, 1);
        $mpdf->WriteHTML($contents,2,true,false);

        $mpdf->Output('ri_konsultasi.pdf',\Mpdf\Output\Destination::INLINE);
    }
}
