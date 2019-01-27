<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RIInstruksiDoNotResucitate;
use App\Models\ListDocument;
use Session;
use View;

class RIInstruksiDoNotResucitateController extends Controller
{
    public function __construct()
    {
        $this->middleware('haspatient');
    	$this->data['title'] = 'Instruksi Jangan Dilakukan Resusitasi (Do Not Resucitate)';
    }

    public function get_ri_instruksi_do_not_resucitate()
    {
    	return view('page.ri.instruksi_do_not_resucitate', $this->data);
    }

    public function post_ri_instruksi_do_not_resucitate(Request $request)
    {
    	$data = new RIInstruksiDoNotResucitate;
    	$id_pasien = Session::get('id_pasien');
    	$data->id_regis = $id_pasien;
    	$data->nama_pasien = $request->nama_pasien;
    	$data->tanggal_lahir = $request->tanggal_lahir;
    	$data->alamat = $request->alamat;
    	$data->dokter = $request->dokter;
    	$data->save();

        $daftar_dokumen = ListDocument::where('id_regis', $id_pasien)->first();
        $daftar_dokumen->ri_instruksi_do_not_resucitate = True;
        $daftar_dokumen->save();

    	return redirect('daftar_dokumen');

    }

    public function get_ri_instruksi_do_not_resucitate_data()
    {
        $id_pasien = Session::get('id_pasien');
        $pasien = RIInstruksiDoNotResucitate::where('id_regis', $id_pasien)->first();
        
        $this->data['id_regis'] = $pasien->id_regis;
        $this->data['nama_pasien'] = $pasien->nama_pasien;
        $this->data['tanggal_lahir'] = $pasien->tanggal_lahir;
        $this->data['alamat'] = $pasien->alamat;
        $this->data['dokter'] = $pasien->dokter;
    }

    public function get_ri_instruksi_do_not_resucitate_read()
    {
        $this->get_ri_instruksi_do_not_resucitate_data();
        return view('page.ri.instruksi_do_not_resucitate_read', $this->data);
    }

    public function get_ri_instruksi_do_not_resucitate_edit()
    {
        $this->get_ri_instruksi_do_not_resucitate_data();
        return view('page.ri.instruksi_do_not_resucitate_edit', $this->data);
    }

    public function post_ri_instruksi_do_not_resucitate_edit(Request $request)
    {
        $id_pasien = Session::get('id_pasien');
        $data = RIInstruksiDoNotResucitate::where('id_regis', $id_pasien)->first();
        $data->nama_pasien = $request->nama_pasien;
        $data->tanggal_lahir = $request->tanggal_lahir;
        $data->alamat = $request->alamat;
        $data->dokter = $request->dokter;
        $data->save();
        dd($request);
    }

    public function ri_instruksi_resucitate_pdf()
    {

        $pasien = RIInstruksiDoNotResucitate::where('id', 1)->first();
        
        $this->data['id_regis'] = $pasien->id_regis;

        $this->data['nama_pasien'] = $pasien->nama_pasien;
        $this->data['tanggal_lahir'] = $pasien->tanggal_lahir;
        $this->data['alamat'] = $pasien->alamat;
        $this->data['dokter'] = $pasien->dokter;

        ob_clean();

        header('Content-type: application/pdf');

        $mpdf = new \Mpdf\Mpdf([
        'mode' => 'utf-8', 
        'format' => 'A4-P', 
        'orientation' => 'P'
        ]);

        $view = View::make('doc_ri_instruksi_resucitate',$this->data);
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
                    <td width="33%" style="text-align: right;">RM. 10.00.RI JULI 2015</td>
                </tr>
            </table>'); 

        $stylesheet = '<style>'.file_get_contents('css/pdf.css').'</style>';

        $mpdf->AddPage('P','','','','',10,10,35,20,10,10);
        //right,left
        $mpdf->WriteHTML($stylesheet, 1);
        $mpdf->WriteHTML($contents,2,true,false);

        $mpdf->Output('ri_instruksi_not_resucitate.pdf',\Mpdf\Output\Destination::INLINE);
    }
}
