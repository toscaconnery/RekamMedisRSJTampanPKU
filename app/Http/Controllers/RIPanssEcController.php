<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RIPanssEc;
use App\Models\ListDocument;
use Session;
use View;

class RIPanssEcController extends Controller
{
    public function __construct()
    {
        $this->middleware('haspatient');
    	$this->data['title'] = 'PANSS EC';
    }

    public function get_ri_panss_ec()
    {
    	return view('page.ri.panss_ec', $this->data);
    }

    public function post_ri_panss_ec(Request $request)
    {
    	$data = new RIPanssEc;
    	$id_pasien = Session::get('id_pasien');
    	$data->id_regis = $id_pasien;
    	$data->p4 = $request->p4;
    	$data->g8 = $request->g8;
    	$data->p7 = $request->p7;
    	$data->g14 = $request->g14;
    	$data->g4 = $request->g4;
    	$data->bangsal = $request->bangsal;
    	$data->tanggal_pemeriksaan = $request->tanggal_pemeriksaan;
    	$data->save();

    	$daftar_dokumen = ListDocument::where('id_regis', $id_pasien)->get()->first();
        $daftar_dokumen->ri_panss_ec = True;
        $daftar_dokumen->save();

    	return redirect('ri_panss_ec_read');
    }

    public function get_ri_panss_ec_data()
    {
        $id_pasien = Session::get('id_pasien');
        $pasien = RIPanssEc::where('id_regis', $id_pasien)->first();
        
        $this->data['id_regis'] = $pasien->id_regis;
        $this->data['tanggal'] = $pasien->tanggal;
        $this->data['p4'] = $pasien->p4;
        $this->data['p7'] = $pasien->p7;
        $this->data['g8'] = $pasien->g8;
        $this->data['g14'] = $pasien->g14;
        $this->data['g4'] = $pasien->g4;
        $this->data['bangsal'] = $pasien->bangsal;
        $this->data['tanggal_pemeriksaan'] = $pasien->tanggal_pemeriksaan;
    }

    public function get_ri_panss_ec_read()
    {
        // $this->get_ri_panss_ec_data();
        $id_pasien = Session::get('id_pasien');
        $pasien = RIPanssEc::where('id_regis', $id_pasien)->get();
        $this->data['pasien'] = array();
        foreach ($pasien as $key => $value) {
            $this->data['pasien'][$key] = array();
            $this->data['pasien'][$key]['id_data'] = $value->id;
            $this->data['pasien'][$key]['p4'] = $value->p4;
            $this->data['pasien'][$key]['p7'] = $value->p7;
            $this->data['pasien'][$key]['g8'] = $value->g8;
            $this->data['pasien'][$key]['g14'] = $value->g14;
            $this->data['pasien'][$key]['g4'] = $value->g4;
            $this->data['pasien'][$key]['tanggal_pemeriksaan'] = $value->tanggal_pemeriksaan;
        }
        return view('page.ri.panss_ec_read', $this->data);
    }

    public function get_ri_panss_ec_edit($id)
    {
        // $this->get_ri_panss_ec_data();
        $id_pasien = Session::get('id_pasien');
        $pasien = RIPanssEc::where('id_regis', $id_pasien)->where('id', $id)->first();
        $this->data['tanggal'] = $pasien->tanggal;
        $this->data['p4'] = $pasien->p4;
        $this->data['p7'] = $pasien->p7;
        $this->data['g8'] = $pasien->g8;
        $this->data['g14'] = $pasien->g14;
        $this->data['g4'] = $pasien->g4;
        $this->data['bangsal'] = $pasien->bangsal;
        $this->data['id_data'] = $id;
        $this->data['tanggal_pemeriksaan'] = $pasien->tanggal_pemeriksaan;
        return view('page.ri.panss_ec_edit', $this->data);
    }

    public function post_ri_panss_ec_edit(Request $request)
    {
        $id_pasien = Session::get('id_pasien');
        $data = RIPanssEc::where('id_regis', $id_pasien)->where('id', $request->id_data)->first();
        $data->id_regis = $id_pasien;
        $data->p4 = $request->p4;
        $data->g8 = $request->g8;
        $data->p7 = $request->p7;
        $data->g14 = $request->g14;
        $data->g4 = $request->g4;
        $data->bangsal = $request->bangsal;
        $data->tanggal_pemeriksaan = $request->tanggal_pemeriksaan;
        $data->save();
        return redirect('ri_panss_ec_read');
    }

    public function ri_panssec_pdf()
    {
        // $this->get_ri_panss_ec_data();
        $id_pasien = Session::get('id_pasien');
        $pasien = RIPanssEc::where('id_regis', $id_pasien)->get();
        $this->data['pasien'] = array();
        foreach ($pasien as $key => $value) {
            $this->data['pasien'][$key] = array();
            $this->data['pasien'][$key]['id_data'] = $value->id;
            $this->data['pasien'][$key]['p4'] = $value->p4;
            $this->data['pasien'][$key]['p7'] = $value->p7;
            $this->data['pasien'][$key]['g8'] = $value->g8;
            $this->data['pasien'][$key]['g14'] = $value->g14;
            $this->data['pasien'][$key]['g4'] = $value->g4;
            $this->data['pasien'][$key]['tanggal_pemeriksaan'] = $value->tanggal_pemeriksaan;
        }

        ob_clean();

        header('Content-type: application/pdf');

        $mpdf = new \Mpdf\Mpdf([
        'mode' => 'utf-8', 
        'format' => 'A4-L', 
        'orientation' => 'P'
        ]);

        $view = View::make('doc_ri_panssec',$this->data);
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
                    <td width="33%" style="text-align: right;">RM. 32.00.RI JULI 2015</td>
                </tr>
            </table>'); 

        $stylesheet = '<style>'.file_get_contents('css/pdf.css').'</style>';

        $mpdf->AddPage('P','','','','',10,10,35,20,10,10);
        //right,left
        $mpdf->WriteHTML($stylesheet, 1);
        $mpdf->WriteHTML($contents,2,true,false);

        $mpdf->Output('ri_panssec',\Mpdf\Output\Destination::INLINE);
    }
}