<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RJIzinVCTHIV;
use App\Models\ListDocument;
use Session;
use View;

class RJIzinVCTHIVController extends Controller
{
	public function __construct()
	{
        $this->middleware('haspatient');
		$this->data['title'] = 'Transfer Pasien Internal Rumah Sakit';
	}

    public function get_rj_izin_vct_hiv()
    {
    	return view('page.rj.izin_vct_hiv', $this->data);
    }

    public function post_rj_izin_vct_hiv(Request $request)
    {
    	$data = new RJIzinVCTHIV;
        $id_pasien = Session::get('id_pasien');
    	$data->id_regis = $id_pasien;
        $data->nama_klien = $request->nama_klien;
        $data->konselor = $request->konselor;
        $data->tanggal = $request->tanggal;
        $data->pemberi_izin = $request->pemberi_izin;
        $data->hubungan = $request->hubungan;
        $data->save();

        $daftar_dokumen = ListDocument::where('id_regis', $id_pasien)->get()->first();
        $daftar_dokumen->rj_izin_vct_hiv = True;
        $daftar_dokumen->save();

        return redirect('daftar_dokumen');
    }

    public function get_rj_izin_vct_hiv_data()
    {
        $id_pasien = Session::get('id_pasien');
    	$pasien = RJIzinVCTHIV::where('id_regis', $id_pasien)->first();
    	$this->data['id_regis'] = $pasien->id_regis;
		$this->data['nama_klien'] = $pasien->nama_klien;
		$this->data['konselor'] = $pasien->konselor;
		$this->data['tanggal'] = $pasien->tanggal;
		$this->data['pemberi_izin'] = $pasien->pemberi_izin;
		$this->data['hubungan'] = $pasien->hubungan;
    }

    public function get_rj_izin_vct_hiv_read()
    {
        $this->get_rj_izin_vct_hiv_data();
        return view('page.rj.izin_vct_hiv_read', $this->data);
    }

    public function get_rj_izin_vct_hiv_edit(Request $request)
    {
        $this->get_rj_izin_vct_hiv_data();
        return view('page.rj.izin_vct_hiv_edit', $this->data);
    }

    public function post_rj_izin_vct_hiv_edit(Request $request)
    {
        $id_pasien = Session::get('id_pasien');
        $data = RJIzinVCTHIV::where('id_regis', $id_pasien)->first();
        $data->konselor = $request->konselor;
        $data->pemberi_izin = $request->pemberi_izin;
        $data->hubungan = $request->hubungan;
        $data->save();

        return redirect('daftar_dokumen');

    }

    public function rj_izinvct_pdf()
    {
        $this->get_rj_izin_vct_hiv_data();

        if($this->data['hubungan']=='1')
        {
            $this->data['hubungan']='';   
        }
        else if($this->data['hubungan']=='2')
        {
            $this->data['hubungan']='Pengasuh';
        }
        else if ($this->data['hubungan']=='3') 
        {
            $this->data['hubungan']='Teman';
        }
        else
        {
            $this->data['hubungan']=='Saudara terdekat';
        }

        ob_clean();

        header('Content-type: application/pdf');

        $mpdf = new \Mpdf\Mpdf([
        'mode' => 'utf-8', 
        'format' => 'A4-P', 
        'orientation' => 'P'
        ]);

        $view = View::make('doc_rj_izinvct',$this->data);
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
                    <td width="33%" style="text-align: right;">RM. 07c.00.RJ JULI 2015</td>
                </tr>
            </table>'); 

        $stylesheet = '<style>'.file_get_contents('css/pdf.css').'</style>';

        $mpdf->AddPage('P','','','','',10,10,35,20,10,10);
        //right,left
        $mpdf->WriteHTML($stylesheet, 1);
        $mpdf->WriteHTML($contents,2,true,false);

        $mpdf->Output('rj_izinvct.pdf',\Mpdf\Output\Destination::INLINE);
    }
}
