<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RIHakKewajiban;
use App\Models\ListDocument;
use Session;
use View;

class RIHakKewajibanController extends Controller
{
    public function __construct()
    {
    	$this->data['title'] = '';
    }

    public function get_ri_hak_kewajiban()
    {
    	return view('page.ri.hak_kewajiban', $this->data);
    }

    public function post_ri_hak_kewajiban(Request $request)
    {

    	$data = new RIHakKewajiban;
    	$id_pasien = Session::get('id_pasien');
    	$data->id_regis = $id_pasien;
    	$data->nama_penanda_tangan = $request->nama_penanda_tangan;
    	$data->save();

    	$daftar_dokumen = ListDocument::where('id_regis', $id_pasien)->get()->first();
        $daftar_dokumen->ri_hak_kewajiban = True;
        $daftar_dokumen->save();
        return redirect('daftar_dokumen');
    }

    public function get_ri_hak_kewajiban_read()
    {
        $pasien = RIHakKewajiban::where('id', 1)->first();
        
        $this->data['id_regis'] = $pasien->id_regis;
        
        $this->data['nama_penanda_tangan'] = $pasien->nama_penanda_tangan;

        return view('page.ri.hak_kewajiban_read', $this->data);
    }

    public function ri_hakkewajiban_pdf()
    {
        $pasien = RIHakKewajiban::where('id', 1)->first();
        
        $this->data['id_regis'] = $pasien->id_regis;
        
        $this->data['nama_penanda_tangan'] = $pasien->nama_penanda_tangan;

        ob_clean();

        header('Content-type: application/pdf');

        $mpdf = new \Mpdf\Mpdf([
        'mode' => 'utf-8', 
        'format' => 'A4-P', 
        'orientation' => 'P'
        ]);

        $view = View::make('doc_ri_hakkewajiban',$this->data);
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
                    <td width="33%" style="text-align: right;">RM. 05.00.RI JULI 2015</td>
                </tr>
            </table>'); 

        $stylesheet = '<style>'.file_get_contents('css/pdf.css').'</style>';

        $mpdf->AddPage('P','','','','',10,10,35,20,10,10);
        //right,left
        $mpdf->WriteHTML($stylesheet, 1);
        $mpdf->WriteHTML($contents,2,true,false);

        $mpdf->Output('ri_permintaan_hakkewajiban.pdf',\Mpdf\Output\Destination::INLINE);
    }
}
