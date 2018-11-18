<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RISuicideFisik;
use Session;
use View;

class RISuicideFisikController extends Controller
{
	public function __construct()
    {
        $this->data['title'] = 'ASESMEN SUICIDE DAN KEKERASAN FISIK RAWAT INAP';
    }
    
    public function get_ri_suicide_fisik()
    {
    	return view('page.ri.suicide_fisik', $this->data);
    }

    public function post_ri_suicide_fisik(Request $request)
    {
    	$data = new RISuicideFisik;
        if(Session::has('id_pasien')) {
            $id_pasien = Session::get('id_pasien');
        }
        else {
            $id_pasien = 1;
        }
        $data->id_regis = $id_pasien;
        $data->s1 = $request->s1;
        $data->s2 = $request->s2;
        $data->s3 = $request->s3;
        $data->s4 = $request->s4;
        $data->s5 = $request->s5;
        $data->s6 = $request->s6;
        $data->s7 = $request->s7;
        $data->s8 = $request->s8;
        $data->s9 = $request->s9;
        $data->s10 = $request->s10;
        $data->s11 = $request->s11;
        $data->s12 = $request->s12;
        $data->s13 = $request->s13;
        $data->s14 = $request->s14;
        $data->s15 = $request->s15;
        $data->s16 = $request->s16;
        $data->s17 = $request->s17;
        $data->s18 = $request->s18;
        $data->s19 = $request->s19;
        $data->s20 = $request->s20;
        $data->s21 = $request->s21;
        $data->s22 = $request->s22;
        $data->s23 = $request->s23;
        $data->s24 = $request->s24;
        $data->s25 = $request->s25;
        $data->s26 = $request->s26;
        $data->s27 = $request->s27;
        $data->s28 = $request->s28;
        $data->s29 = $request->s29;
        $data->s30 = $request->s30;
        $data->s31 = $request->s31;
        $data->s32 = $request->s32;
        $data->p1 = $request->p1;
        $data->p2 = $request->p2;
        $data->p3 = $request->p3;
        $data->save();

        return back();

    }

    public function get_ri_suicide_fisik_read()
    {
       $pasien = RISuicideFisik::where('id', 1)->first();
        
        $this->data['id_regis'] = $pasien->id_regis;
        
        $this->data['s1'] = $pasien->s1;
        $this->data['s2'] = $pasien->s2;
        $this->data['s3'] = $pasien->s3;
        $this->data['s4'] = $pasien->s4;
        $this->data['s5'] = $pasien->s5;
        $this->data['s6'] = $pasien->s6;
        $this->data['s7'] = $pasien->s7;
        $this->data['s8'] = $pasien->s8;
        $this->data['s9'] = $pasien->s9;
        $this->data['s10'] = $pasien->s10;

        $this->data['s11'] = $pasien->s11;
        $this->data['s12'] = $pasien->s12;
        $this->data['s13'] = $pasien->s13;
        $this->data['s14'] = $pasien->s14;
        $this->data['s15'] = $pasien->s15;
        $this->data['s16'] = $pasien->s16;
        $this->data['s17'] = $pasien->s17;
        $this->data['s18'] = $pasien->s18;
        $this->data['s19'] = $pasien->s19;
        $this->data['s20'] = $pasien->s20;

        $this->data['s21'] = $pasien->s21;
        $this->data['s22'] = $pasien->s22;
        $this->data['s23'] = $pasien->s23;
        $this->data['s24'] = $pasien->s24;
        $this->data['s25'] = $pasien->s25;
        $this->data['s26'] = $pasien->s26;
        $this->data['s27'] = $pasien->s27;
        $this->data['s28'] = $pasien->s28;
        $this->data['s29'] = $pasien->s29;
        $this->data['s30'] = $pasien->s30;

        $this->data['s31'] = $pasien->s31;
        $this->data['s32'] = $pasien->s32;
        
        $this->data['p1'] = $pasien->p1;
        $this->data['p2'] = $pasien->p2;
        $this->data['p3'] = $pasien->p3;
        
        return view('page.ri.suicide_fisik_read', $this->data);

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

    public function ri_suicide_pdf()
    {
        $pasien = RISuicideFisik::where('id', 1)->first();
        
        $this->data['id_regis'] = $pasien->id_regis;

        $this->data['s1'] = $this->answer($pasien->s1);
        $this->data['s2'] = $this->answer($pasien->s2);
        $this->data['s3'] = $this->answer($pasien->s3);
        $this->data['s4'] = $this->answer($pasien->s4);
        $this->data['s5'] = $this->answer($pasien->s5);
        $this->data['s6'] = $this->answer($pasien->s6);
        $this->data['s7'] = $this->answer($pasien->s7);
        $this->data['s8'] = $this->answer($pasien->s8);
        $this->data['s9'] = $this->answer($pasien->s9);
        $this->data['s10'] = $this->answer($pasien->s10);

        $this->data['s11'] = $this->answer($pasien->s11);
        $this->data['s12'] = $this->answer($pasien->s12);
        $this->data['s13'] = $this->answer($pasien->s13);
        $this->data['s14'] = $this->answer($pasien->s14);
        $this->data['s15'] = $this->answer($pasien->s15);
        $this->data['s16'] = $this->answer($pasien->s16);
        $this->data['s17'] = $this->answer($pasien->s17);
        $this->data['s18'] = $this->answer($pasien->s18);
        $this->data['s19'] = $this->answer($pasien->s19);
        $this->data['s20'] = $this->answer($pasien->s20);

        $this->data['s21'] = $this->answer($pasien->s21);
        $this->data['s22'] = $this->answer($pasien->s22);
        $this->data['s23'] = $this->answer($pasien->s23);
        $this->data['s24'] = $this->answer($pasien->s24);
        $this->data['s25'] = $this->answer($pasien->s25);
        $this->data['s26'] = $this->answer($pasien->s26);
        $this->data['s27'] = $this->answer($pasien->s27);
        $this->data['s28'] = $this->answer($pasien->s28);
        $this->data['s29'] = $this->answer($pasien->s29);
        $this->data['s30'] = $this->answer($pasien->s30);

        $this->data['s31'] = $this->answer($pasien->s31);
        $this->data['s32'] = $this->answer($pasien->s32);
        $this->data['s33'] = $this->answer($pasien->s33);
        
        $this->data['p1'] = $pasien->p1;
        $this->data['p2'] = $pasien->p2;
        $this->data['p3'] = $pasien->p3;

        ob_clean();

        header('Content-type: application/pdf');

        $mpdf = new \Mpdf\Mpdf([
        'mode' => 'utf-8', 
        'format' => 'A4-L', 
        'orientation' => 'P'
        ]);

        $view = View::make('doc_ri_suicide',$this->data);
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
                    <td width="33%" style="text-align: right;">RM. 14.00.RI JULI 2015</td>
                </tr>
            </table>'); 

        $stylesheet = '<style>'.file_get_contents('css/pdf.css').'</style>';

        $mpdf->AddPage('P','','','','',10,10,35,20,10,10);
        //right,left
        $mpdf->WriteHTML($stylesheet, 1);
        $mpdf->WriteHTML($contents,2,true,false);

        $mpdf->Output('ri_suicide.pdf',\Mpdf\Output\Destination::INLINE);
    }

}
