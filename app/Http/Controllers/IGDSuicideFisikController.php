<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IGDSuicideFisik;
use App\Models\ListDocument;
use Session;
use View;

class IGDSuicideFisikController extends Controller
{
    public function __construct()
    {
        $this->middleware('haspatient');
        $this->data['title'] = 'Asesmen Suicide dan Kekerasan Fisik IGD';
    }

    public function get_igd_suicide_fisik()
    {
    	return view('page.igd.suicide_fisik', $this->data);
    }

    public function post_igd_suicide_fisik(Request $request)
    {
    	$data = new IGDSuicideFisik;
        if(Session::has('id_pasien')) {
            $id_pasien = Session::get('id_pasien');
        }
        else {
            $id_pasien = 1;
        }
        
    	$data->id_regis = $id_pasien;

    	$data->a1 = $request->a1;
    	$data->a2 = $request->a2;
    	$data->a3 = $request->a3;
    	$data->a4 = $request->a4;
    	$data->a5 = $request->a5;
    	$data->a6 = $request->a6;
    	$data->a7 = $request->a7;

    	$data->b1 = $request->b1;
    	$data->b2 = $request->b2;
    	$data->b3 = $request->b3;
    	$data->b4 = $request->b4;
    	$data->b5 = $request->b5;
    	$data->b6 = $request->b6;
    	$data->b7 = $request->b7;

    	$data->c1 = $request->c1;
    	$data->c2 = $request->c2;
    	$data->c3 = $request->c3;
    	$data->c4 = $request->c4;
    	$data->c5 = $request->c5;
    	$data->c6 = $request->c6;
    	$data->c7 = $request->c7;
    	$data->c8 = $request->c8;
    	$data->c9 = $request->c9;

    	$data->d1 = $request->d1;
    	$data->d2 = $request->d2;
    	$data->d3 = $request->d3;
    	$data->d4 = $request->d4;
    	$data->d5 = $request->d5;
    	$data->d6 = $request->d6;
    	$data->d7 = $request->d7;
    	$data->d8 = $request->d8;
    	$data->d9 = $request->d9;

    	$data->suicide_protective_factor = $request->suicide_protective_factor;
    	$data->violence_protective_factor = $request->violence_protective_factor;
    	$data->other_risk = $request->other_risk;
    	$data->save();

        $daftar_dokumen = ListDocument::where('id_regis', $id_pasien)->get()->first();
        $daftar_dokumen->igd_suicide_fisik = True;
        $daftar_dokumen->save();

    	return redirect('daftar_dokumen');
    }

    public function get_igd_suicide_fisik_data()
    {
        $id_pasien = Session::get('id_pasien');
        $pasien = IGDSuicideFisik::where('id_regis', $id_pasien)->first();
        
        $this->data['id_regis'] = $pasien->id_regis;
        
        $this->data['a1'] = $pasien->a1;
        $this->data['a2'] = $pasien->a2;
        $this->data['a3'] = $pasien->a3;
        $this->data['a4'] = $pasien->a4;
        $this->data['a5'] = $pasien->a5;
        $this->data['a6'] = $pasien->a6;
        $this->data['a7'] = $pasien->a7;

        $this->data['b1'] = $pasien->b1;
        $this->data['b2'] = $pasien->b2;
        $this->data['b3'] = $pasien->b3;
        $this->data['b4'] = $pasien->b4;
        $this->data['b5'] = $pasien->b5;
        $this->data['b6'] = $pasien->b6;
        $this->data['b7'] = $pasien->b7;

        $this->data['c1'] = $pasien->c1;
        $this->data['c2'] = $pasien->c2;
        $this->data['c3'] = $pasien->c3;
        $this->data['c4'] = $pasien->c4;
        $this->data['c5'] = $pasien->c5;
        $this->data['c6'] = $pasien->c6;
        $this->data['c7'] = $pasien->c7;
        $this->data['c8'] = $pasien->c8;
        $this->data['c9'] = $pasien->c9;

        $this->data['d1'] = $pasien->d1;
        $this->data['d2'] = $pasien->d2;
        $this->data['d3'] = $pasien->d3;
        $this->data['d4'] = $pasien->d4;
        $this->data['d5'] = $pasien->d5;
        $this->data['d6'] = $pasien->d6;
        $this->data['d7'] = $pasien->d7;
        $this->data['d8'] = $pasien->d8;
        $this->data['d9'] = $pasien->d9;

        $this->data['suicide_protective_factor'] = $pasien->suicide_protective_factor;
        $this->data['violence_protective_factor'] = $pasien->violence_protective_factor;
        $this->data['other_risk'] = $pasien->other_risk;

        $suicide_score = 0;
        if($pasien->a1 == 1) {
            $suicide_score += 1;
        }
        if($pasien->a2 == 1) {
            $suicide_score += 1;
        }
        if($pasien->a3 == 1) {
            $suicide_score += 1;
        }
        if($pasien->a4 == 1) {
            $suicide_score += 1;
        }
        if($pasien->a5 == 1) {
            $suicide_score += 1;
        }
        if($pasien->a6 == 1) {
            $suicide_score += 1;
        }
        if($pasien->a7 == 1) {
            $suicide_score += 1;
        }

        if($pasien->b1 == 1) {
            $suicide_score += 1;
        }
        if($pasien->b2 == 1) {
            $suicide_score += 1;
        }
        if($pasien->b3 == 1) {
            $suicide_score += 1;
        }
        if($pasien->b4 == 1) {
            $suicide_score += 1;
        }
        if($pasien->b5 == 1) {
            $suicide_score += 1;
        }
        if($pasien->b6 == 1) {
            $suicide_score += 1;
        }
        if($pasien->b7 == 1) {
            $suicide_score += 1;
        }
        $this->data['suicide_score'] = $suicide_score;

        $violence_score = 0;
        if($pasien->c1 == 1) {
            $violence_score += 1;
        }
        if($pasien->c2 == 1) {
            $violence_score += 1;
        }
        if($pasien->c3 == 1) {
            $violence_score += 1;
        }
        if($pasien->c4 == 1) {
            $violence_score += 1;
        }
        if($pasien->c5 == 1) {
            $violence_score += 1;
        }
        if($pasien->c6 == 1) {
            $violence_score += 1;
        }
        if($pasien->c7 == 1) {
            $violence_score += 1;
        }
        if($pasien->c8 == 1) {
            $violence_score += 1;
        }
        if($pasien->c9 == 1) {
            $violence_score += 1;
        }

        if($pasien->d1 == 1) {
            $violence_score += 1;
        }
        if($pasien->d2 == 1) {
            $violence_score += 1;
        }
        if($pasien->d3 == 1) {
            $violence_score += 1;
        }
        if($pasien->d4 == 1) {
            $violence_score += 1;
        }
        if($pasien->d5 == 1) {
            $violence_score += 1;
        }
        if($pasien->d6 == 1) {
            $violence_score += 1;
        }
        if($pasien->d7 == 1) {
            $violence_score += 1;
        }
        if($pasien->d8 == 1) {
            $violence_score += 1;
        }
        if($pasien->d9 == 1) {
            $violence_score += 1;
        }
        $this->data['violence_score'] = $violence_score;
    }

    public function get_igd_suicide_fisik_read()
    {
        $this->get_igd_suicide_fisik_data();
        return view('page.igd.suicide_fisik_read', $this->data);

    }

    public function get_igd_suicide_fisik_edit()
    {
        $this->get_igd_suicide_fisik_data();
        return view('page.igd.suicide_fisik_edit', $this->data);
    }

    public function post_igd_suicide_fisik_edit(Request $request)
    {
        $id_pasien = Session::get('id_pasien');
        $data = IGDSuicideFisik::where('id_regis', $id_pasien)->first();

        $data->a1 = $request->a1;
        $data->a2 = $request->a2;
        $data->a3 = $request->a3;
        $data->a4 = $request->a4;
        $data->a5 = $request->a5;
        $data->a6 = $request->a6;
        $data->a7 = $request->a7;

        $data->b1 = $request->b1;
        $data->b2 = $request->b2;
        $data->b3 = $request->b3;
        $data->b4 = $request->b4;
        $data->b5 = $request->b5;
        $data->b6 = $request->b6;
        $data->b7 = $request->b7;

        $data->c1 = $request->c1;
        $data->c2 = $request->c2;
        $data->c3 = $request->c3;
        $data->c4 = $request->c4;
        $data->c5 = $request->c5;
        $data->c6 = $request->c6;
        $data->c7 = $request->c7;
        $data->c8 = $request->c8;
        $data->c9 = $request->c9;

        $data->d1 = $request->d1;
        $data->d2 = $request->d2;
        $data->d3 = $request->d3;
        $data->d4 = $request->d4;
        $data->d5 = $request->d5;
        $data->d6 = $request->d6;
        $data->d7 = $request->d7;
        $data->d8 = $request->d8;
        $data->d9 = $request->d9;

        $data->suicide_protective_factor = $request->suicide_protective_factor;
        $data->violence_protective_factor = $request->violence_protective_factor;
        $data->other_risk = $request->other_risk;
        $data->save();

        return redirect('daftar_dokumen');
    }

     public function answer($answer)
    {
        if($answer=='1')
        {
            return 'Yes';
        }
        else if($answer=='2')
        {
            return 'No';
        }
        else
        {
            return 'Not Known';
        } 
    }

    public function igd_suicide_pdf()
    {
        $id_pasien = Session::get('id_pasien');
        $pasien = IGDSuicideFisik::where('id_regis', $id_pasien)->first();
        
        $this->data['id_regis'] = $pasien->id_regis;

        $this->data['a1'] = $this->answer($pasien->a1);
        $this->data['a2'] = $this->answer($pasien->a2);
        $this->data['a3'] = $this->answer($pasien->a3);
        $this->data['a4'] = $this->answer($pasien->a4);
        $this->data['a5'] = $this->answer($pasien->a5);
        $this->data['a6'] = $this->answer($pasien->a6);
        $this->data['a7'] = $this->answer($pasien->a7);

        $this->data['b1'] = $this->answer($pasien->b1);
        $this->data['b2'] = $this->answer($pasien->b2);
        $this->data['b3'] = $this->answer($pasien->b3);
        $this->data['b4'] = $this->answer($pasien->b4);
        $this->data['b5'] = $this->answer($pasien->b5);
        $this->data['b6'] = $this->answer($pasien->b6);
        $this->data['b7'] = $this->answer($pasien->b7);

        $this->data['c1'] = $this->answer($pasien->c1);
        $this->data['c2'] = $this->answer($pasien->c2);
        $this->data['c3'] = $this->answer($pasien->c3);
        $this->data['c4'] = $this->answer($pasien->c4);
        $this->data['c5'] = $this->answer($pasien->c5);
        $this->data['c6'] = $this->answer($pasien->c6);
        $this->data['c7'] = $this->answer($pasien->c7);
        $this->data['c8'] = $this->answer($pasien->c8);
        $this->data['c9'] = $this->answer($pasien->c9);

        $this->data['d1'] = $this->answer($pasien->d1);
        $this->data['d2'] = $this->answer($pasien->d2);
        $this->data['d3'] = $this->answer($pasien->d3);
        $this->data['d4'] = $this->answer($pasien->d4);
        $this->data['d5'] = $this->answer($pasien->d5);
        $this->data['d6'] = $this->answer($pasien->d6);
        $this->data['d7'] = $this->answer($pasien->d7);
        $this->data['d8'] = $this->answer($pasien->d8);
        $this->data['d9'] = $this->answer($pasien->d9);


        $this->data['suicide_protective_factor'] = $pasien->suicide_protective_factor;
        $this->data['violence_protective_factor'] = $pasien->violence_protective_factor;
        $this->data['other_risk'] = $pasien->other_risk;

        ob_clean();

        header('Content-type: application/pdf');

        $mpdf = new \Mpdf\Mpdf([
        'mode' => 'utf-8', 
        'format' => 'A4-P', 
        'orientation' => 'P'
        ]);

        $view = View::make('doc_igd_suicide',$this->data);
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
            </table> <hr> <br>' );

        $mpdf->SetHTMLFooter('<hr>
            <table width="100%" style="vertical-align: bottom; font-family: "arial", Times, serif; 
                font-size: 8pt; color: #000000; font-weight: bold; font-style: italic;">
                <tr>
                    <td width="33%">{DATE j-m-Y}</td>
                    <td width="33%" align="center">{PAGENO}/{nbpg}</td>
                    <td width="33%" style="text-align: right;">RM. 03.00.IGD JULI 2015</td>
                </tr>
            </table>'); 

        $stylesheet = '<style>'.file_get_contents('css/pdf.css').'</style>';

        $mpdf->AddPage('P','','','','',10,10,35,20,10,10);
        //right,left
        $mpdf->WriteHTML($stylesheet, 1);
        $mpdf->WriteHTML($contents,2,true,false);

        $mpdf->Output('igd_suicide.pdf',\Mpdf\Output\Destination::INLINE);
    }
}
