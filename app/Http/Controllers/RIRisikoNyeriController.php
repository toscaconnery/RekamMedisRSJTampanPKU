<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RIRisikoNyeri;
use Session;
use View;

class RIRisikoNyeriController extends Controller
{
    public function __construct()
	{
        $this->middleware('haspatient');
		$this->data['title'] = 'Penilaian Resiko Nyeri';
	}

	public function get_ri_risiko_nyeri()
	{
		return view('page.ri.risiko_nyeri', $this->data);
	}

	public function post_ri_risiko_nyeri(Request $request)
	{
		$data = new RIRisikoNyeri;
        $id_pasien = Session::get('id_pasien');
		$data->id_regis = $id_pasien;
		$data->tanggal = $request->tanggal;
        $data->skala_p = $request->skala_p;
        $data->skala_s = $request->skala_s;
		$data->skala_m = $request->skala_m;
		$data->save();
		return redirect('ri_risiko_nyeri_read');
	}

	public function get_ri_risiko_nyeri_read()
	{
        $id_pasien = Session::get('id_pasien');
		$pasien = RIRisikoNyeri::where('id_regis', $id_pasien)->orderBy('tanggal', 'desc')->get();
        $this->data['pasien'] = array();
        foreach ($pasien as $key => $value) {
            if(!isset($this->data['pasien'][$value->tanggal])) {
                $this->data['pasien'][$value->tanggal] = array();
                $this->data['pasien'][$value->tanggal]['p'] = NULL;
                $this->data['pasien'][$value->tanggal]['s'] = NULL;
                $this->data['pasien'][$value->tanggal]['m'] = NULL;
            }
            $this->data['pasien'][$value->tanggal]['p'] = $value->skala_p;
            $this->data['pasien'][$value->tanggal]['s'] = $value->skala_s;
            $this->data['pasien'][$value->tanggal]['m'] = $value->skala_m;
            $this->data['pasien'][$value->tanggal]['id'] = $value->id;
        }
        return view('page.ri.risiko_nyeri_read', $this->data);
	}


    public function get_ri_risiko_nyeri_edit($id)
    {
        $pasien = RIRisikoNyeri::where('id', $id)->first();
        //memastikan hanya bisa mengedit pasien yang tepat ketika session habis
        if($pasien->id_regis == Session::get('id_pasien')) {
            $this->data['skala_p'] = $pasien->skala_p;
            $this->data['skala_s'] = $pasien->skala_s;
            $this->data['skala_m'] = $pasien->skala_m;
            $this->data['tanggal'] = $pasien->tanggal;
            $this->data['id_data'] = $pasien->id;
            return view('page.ri.risiko_nyeri_edit', $this->data);
        }
        else {
            //data tidak ditemukan, kemungkinan karena session habis ketika browser melakukan refresh
            return redirect('risiko_nyeri_read');
        }
    }

    public function post_ri_risiko_nyeri_edit(Request $request, $id)
    {
        $pasien = RIRisikoNyeri::where('id', $id)->first();
        //memastikan hanya bisa mengedit pasien yang tepat ketika session habis
        if($pasien->id_regis == Session::get('id_pasien')) {
            $pasien->skala_p = $request->skala_p;
            $pasien->skala_s = $request->skala_s;
            $pasien->skala_m = $request->skala_m;
            $pasien->tanggal = $request->tanggal;
            $pasien->save();
            return redirect('ri_risiko_nyeri_read');
        }
        else {
            //data tidak ditemukan, kemungkinan karena session habis ketika browser melakukan refresh
            return redirect('ri_risiko_nyeri_read');
        }
    }

	public function ri_nyeri_pdf()
    {

    	$pasien = RIRisikoNyeri::where('id', 1)->first();
        
        $this->data['id_regis'] = $pasien->id_regis;
        $this->data['tanggal'] = $pasien->tanggal;
        $this->data['waktu'] = $pasien->waktu;
        $this->data['skala'] = $pasien->skala;

        ob_clean();

        header('Content-type: application/pdf');

        $mpdf = new \Mpdf\Mpdf([
        'mode' => 'utf-8', 
        'format' => 'A4-L', 
        'orientation' => 'P'
        ]);

        if($this->data['waktu'] == 'P' || $this->data['waktu'] == 'p' )
        {
            $this->data['waktu'] = 'Pagi';
        }
        else if($this->data['waktu'] == 'S' || $this->data['waktu'] == 's' )
        {
            $this->data['waktu'] = 'Siang';
        }
        else
        {
            $this->data['waktu'] = 'Malam';
        }

        $id_pasien = Session::get('id_pasien');
        $pasien = RIRisikoNyeri::where('id_regis', $id_pasien)->orderBy('tanggal', 'desc')->get();
        $this->data['pasien'] = array();
        foreach ($pasien as $key => $value) {
            if(!isset($this->data['pasien'][$value->tanggal])) {
                $this->data['pasien'][$value->tanggal] = array();
                $this->data['pasien'][$value->tanggal]['p'] = NULL;
                $this->data['pasien'][$value->tanggal]['s'] = NULL;
                $this->data['pasien'][$value->tanggal]['m'] = NULL;
            }
            $this->data['pasien'][$value->tanggal]['p'] = $value->skala_p;
            $this->data['pasien'][$value->tanggal]['s'] = $value->skala_s;
            $this->data['pasien'][$value->tanggal]['m'] = $value->skala_m;
            $this->data['pasien'][$value->tanggal]['id'] = $value->id;
        }

        $view = View::make('doc_ri_nyeri',$this->data);
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
                    <td width="33%" style="text-align: right;">RM. 17.00.RI JULI 2015</td>
                </tr>
            </table>'); 

        $stylesheet = '<style>'.file_get_contents('css/pdf.css').'</style>';

        $mpdf->AddPage('P','','','','',10,10,35,20,10,10);
        //right,left
        $mpdf->WriteHTML($stylesheet, 1);
        $mpdf->WriteHTML($contents,2,true,false);

        $mpdf->Output('ri_nyeri.pdf',\Mpdf\Output\Destination::INLINE);
    }
}
