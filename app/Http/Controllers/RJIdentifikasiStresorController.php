<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RJIdentifikasiStresor;
use App\Models\ListDocument;
use Session;
use View;

class RJIdentifikasiStresorController extends Controller
{
    public function __construct()
    {
        $this->data['title'] = 'Identifikasi Stresor';
    }

    public function get_rj_identifikasi_stresor()
    {
    	return view('page.rj.identifikasi_stresor');
    }

    public function post_rj_identifikasi_stresor(Request $request)
    {
    	$data = new RJIdentifikasiStresor;
        $id_pasien = Session::get('id_pasien');
    	$data->id_regis = $id_pasien;
    	$data->lingkungan_fisik = $request->lingkungan_fisik;
    	$data->sosial_ekonomi_politik = $request->sosial_ekonomi_politik;
    	$data->keluarga = $request->keluarga;
    	$data->pekerjaan_karir = $request->pekerjaan_karir;
    	$data->hubungan_pribadi_lingkungan = $request->hubungan_pribadi_lingkungan;
    	$data->simptom = $request->simptom;
    	$data->cara_mengatasi = $request->cara_mengatasi;
    	$data->save();

        $daftar_dokumen = ListDocument::where('id_regis', $id_pasien)->get()->first();
        $daftar_dokumen->rj_identifikasi_stresor = True;
        $daftar_dokumen->save();

    	return redirect('daftar_dokumen');
    }

    public function get_rj_identifikasi_stresor_data()
    {
        $pasien = RJIdentifikasiStresor::where('id', 1)->first();
        
        $this->data['id_regis'] = $pasien->id_regis;
        $this->data['lingkungan_fisik'] = $pasien->lingkungan_fisik;
        $this->data['sosial_ekonomi_politik'] = $pasien->sosial_ekonomi_politik;
        $this->data['keluarga'] = $pasien->keluarga;
        $this->data['pekerjaan_karir'] = $pasien->pekerjaan_karir;
        $this->data['hubungan_pribadi_lingkungan'] = $pasien->hubungan_pribadi_lingkungan;
        $this->data['simptom'] = $pasien->simptom;
        $this->data['cara_mengatasi'] = $pasien->cara_mengatasi;

    }

    public function get_rj_identifikasi_stresor_read()
    {
        $this->get_rj_identifikasi_stresor_data();
        return view('page.rj.identifikasi_stresor_read', $this->data);

    }

    public function get_rj_identifikasi_stresor_edit()
    {
        $this->get_rj_identifikasi_stresor_data();
        return view('page.rj.identifikasi_stresor_edit', $this->data);
    }

    public function post_rj_identifikasi_stresor_edit(Request $request)
    {
        $id_pasien = Session::get('id_pasien');
        $data = RJIdentifikasiStresor::where('id_regis', $id_pasien)->first();
        $data->id_regis = $id_pasien;
        $data->lingkungan_fisik = $request->lingkungan_fisik;
        $data->sosial_ekonomi_politik = $request->sosial_ekonomi_politik;
        $data->keluarga = $request->keluarga;
        $data->pekerjaan_karir = $request->pekerjaan_karir;
        $data->hubungan_pribadi_lingkungan = $request->hubungan_pribadi_lingkungan;
        $data->simptom = $request->simptom;
        $data->cara_mengatasi = $request->cara_mengatasi;
        $data->save();
        return redirect('daftar_dokumen');
    }

    public function rj_stressor_pdf()
    {
        $this->get_rj_identifikasi_stresor_data();

        ob_clean();

        header('Content-type: application/pdf');

        $mpdf = new \Mpdf\Mpdf([
        'mode' => 'utf-8', 
        'format' => 'A4-P', 
        'orientation' => 'P'
        ]);

        $view = View::make('doc_rj_stressor',$this->data);
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
                    <td width="33%" style="text-align: right;">RM. 06.00.RJ JULI 2015</td>
                </tr>
            </table>'); 

        $stylesheet = '<style>'.file_get_contents('css/pdf.css').'</style>';

        $mpdf->AddPage('P','','','','',10,10,35,20,10,10);
        //right,left
        $mpdf->WriteHTML($stylesheet, 1);
        $mpdf->WriteHTML($contents,2,true,false);

        $mpdf->Output('rj_stressor.pdf',\Mpdf\Output\Destination::INLINE);
    }
}