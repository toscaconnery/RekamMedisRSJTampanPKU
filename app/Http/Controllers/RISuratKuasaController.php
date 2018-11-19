<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RISuratKuasa;
use App\Models\ListDocument;
use Session;
use View;

class RISuratKuasaController extends Controller
{
    public function __construct()
    {
    	$this->data['title'] = 'Surat Kuasa';
    }

    public function get_ri_surat_kuasa()
    {
    	return view('page.ri.surat_kuasa', $this->data);
    }

    public function post_ri_surat_kuasa(Request $request)
    {
    	$id_pasien = Session::get('id_pasien');
    	$data = new RISuratKuasa;
    	$data->id_regis = $id_pasien;
		$data->nama = $request->nama;
		$data->umur = $request->umur;
		$data->alamat = $request->alamat;
		$data->tanggal = $request->tanggal;
		$data->konselor = $request->konselor;
		$data->kepala_ruangan = $request->kepala_ruangan;
		$data->residen = $request->residen;
		$data->save();

		$daftar_dokumen = ListDocument::where('id_regis', $id_pasien)->first();
        $daftar_dokumen->ri_surat_kuasa = True;
        $daftar_dokumen->save();

    	return redirect('daftar_dokumen');
    }

    public function get_ri_surat_kuasa_data()
    {
    	$id_pasien = Session::get('id_pasien');
    	$pasien = RISuratKuasa::where('id_regis', $id_pasien)->first();
    	$this->data['id_regis'] = $pasien->id_regis;
		$this->data['nama'] = $pasien->nama;
		$this->data['umur'] = $pasien->umur;
		$this->data['alamat'] = $pasien->alamat;
		$this->data['tanggal'] = $pasien->tanggal;
		$this->data['konselor'] = $pasien->konselor;
		$this->data['kepala_ruangan'] = $pasien->kepala_ruangan;
		$this->data['residen'] = $pasien->residen;
    }

    public function get_ri_surat_kuasa_read()
    {
    	$this->get_ri_surat_kuasa_data();
    	return view('page.ri.surat_kuasa_read', $this->data);
    }

    public function get_ri_surat_kuasa_edit()
    {
    	$this->get_ri_surat_kuasa_data();
    	return view('page.ri.surat_kuasa_edit', $this->data);
    }

    public function post_ri_surat_kuasa_edit(Request $request)
    {
    	$id_pasien = Session::get('id_pasien');
    	$data = RISuratKuasa::where('id_regis', $id_pasien)->first();
		$data->nama = $request->nama;
		$data->umur = $request->umur;
		$data->alamat = $request->alamat;
		$data->tanggal = $request->tanggal;
		$data->konselor = $request->konselor;
		$data->kepala_ruangan = $request->kepala_ruangan;
		$data->residen = $request->residen;
		$data->save();
    	return redirect('daftar_dokumen');
    }

    public function ri_surat_kuasa_pdf()
    {

        $this->get_ri_surat_kuasa_data();

        ob_clean();

        header('Content-type: application/pdf');

        $mpdf = new \Mpdf\Mpdf([
        'mode' => 'utf-8', 
        'format' => 'A4-P', 
        'orientation' => 'P'
        ]);

        $view = View::make('doc_ri_surat_kuasa',$this->data);
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
                    <td width="33%" style="text-align: right;">RM. 38.00.RI JULI 2015</td>
                </tr>
            </table>'); 

        $stylesheet = '<style>'.file_get_contents('css/pdf.css').'</style>';

        $mpdf->AddPage('P','','','','',10,10,35,20,10,10);
        //right,left
        $mpdf->WriteHTML($stylesheet, 1);
        $mpdf->WriteHTML($contents,2,true,false);

        $mpdf->Output('ri_surat_kuasa.pdf',\Mpdf\Output\Destination::INLINE);
    }

}
