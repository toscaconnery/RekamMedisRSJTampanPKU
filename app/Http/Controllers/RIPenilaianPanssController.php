<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\RIPenilaianPanss;
use App\Models\ListDocument;
use Session;

class RIPenilaianPanssController extends Controller
{
    public function __construct()
    {
    	$this->data['title'] = 'LEMBAR PENILAIAN PANSS EC';
    }

    public function get_ri_penilaian_panss()
    {
    	return view('page.ri.penilaian_panss', $this->data);
    }

    public function post_ri_penilaian_panss(Request $request)
    {
    	$data = new RIPenilaianPanss;
    	$id_pasien = Session::get('id_pasien');
    	$data->id_regis = $id_pasien;
    	$data->tanggal = $request->tanggal;
    	$data->p4 = $request->p4;
    	$data->p7 = $request->p7;
    	$data->g7 = $request->g7;
    	$data->g8 = $request->g8;
    	$data->g14 = $request->g14;
    	$data->save();

    	$daftar_dokumen = ListDocument::where('id_regis', $id_pasien)->get()->first();
        $daftar_dokumen->ri_penilaian_panss = True;
        $daftar_dokumen->save();

    	return redirect('daftar_dokumen');
    }

    public function get_ri_penilaian_panss_read()
    {
        $pasien = RIPenilaianPanss::where('id', 1)->first();
        
        $this->data['id_regis'] = $pasien->id_regis;

        $this->data['tanggal'] = $pasien->tanggal;
        $this->data['p4'] = $pasien->p4;
        $this->data['p7'] = $pasien->p7;
        $this->data['g7'] = $pasien->g7;
        $this->data['g8'] = $pasien->g8;
        $this->data['g14'] = $pasien->g14;

        return view('page.ri.penilaian_panss_read', $this->data);
    }

    public function pdf_ri_nilaipanss()
    {
        ob_clean();

        header('Content-type: application/pdf');

        $mpdf = new \Mpdf\Mpdf([
        'mode' => 'utf-8', 
        'format' => 'A4-L', 
        'orientation' => 'P'
        ]);

        $view = View::make('doc_ri_nilaipanss');
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
                    <td width="33%" style="text-align: right;">RM. 32.2.00.RI JULI 2015</td>
                </tr>
            </table>'); 

        $stylesheet = '<style>'.file_get_contents('css/pdf.css').'</style>';

        $mpdf->AddPage('P','','','','',10,10,35,20,10,10);
        //right,left
        $mpdf->WriteHTML($stylesheet, 1);
        $mpdf->WriteHTML($contents,2,true,false);

        $mpdf->Output('ri_nilaipanss',\Mpdf\Output\Destination::INLINE);
    }
}
