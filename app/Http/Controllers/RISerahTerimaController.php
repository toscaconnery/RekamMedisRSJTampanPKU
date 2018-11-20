<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RISerahTerima;
use App\Models\ListDocument;
use Session;
use View;

class RISerahTerimaController extends Controller
{
    public function __construct()
    {
    	$this->data['title'] = 'Serah Terima Pasien Pulang';
    }

    public function get_ri_serah_terima()
    {
    	return view('page.ri.serah_terima', $this->data);
    }

    public function post_ri_serah_terima(Request $request)
    {
    	$id_pasien = Session::get('id_pasien');
    	$data = new RISerahTerima;
    	$data->id_regis = $id_pasien;
    	$data->nama = $request->nama;
		$data->umur = $request->umur;
		$data->jenis_kelamin = $request->jenis_kelamin;
		$data->alamat = $request->alamat;
		$data->hubungan_dengan_pasien = $request->hubungan_dengan_pasien;
		$data->nama_pasien = $request->nama_pasien;
		$data->umur_pasien = $request->umur_pasien;
		$data->jenis_kelamin_pasien = $request->jenis_kelamin_pasien;
		$data->no_rm = $request->no_rm;
		$data->alamat_pasien = $request->alamat_pasien;
		$data->jam_dijemput = $request->jam_dijemput;
		$data->save();

		$daftar_dokumen = ListDocument::where('id_regis', $id_pasien)->first();
        $daftar_dokumen->ri_serah_terima = True;
        $daftar_dokumen->save();
        
    	return redirect('daftar_dokumen');
    }

    public function get_ri_serah_terima_data()
    {
    	$id_pasien = Session::get('id_pasien');
    	$pasien = RISerahTerima::where('id_regis', $id_pasien)->first();
    	$this->data['id_regis'] = $pasien->id_regis;
    	$this->data['nama'] = $pasien->nama;
		$this->data['umur'] = $pasien->umur;
		$this->data['jenis_kelamin'] = $pasien->jenis_kelamin;
		$this->data['alamat'] = $pasien->alamat;
		$this->data['hubungan_dengan_pasien'] = $pasien->hubungan_dengan_pasien;
		$this->data['nama_pasien'] = $pasien->nama_pasien;
		$this->data['umur_pasien'] = $pasien->umur_pasien;
		$this->data['jenis_kelamin_pasien'] = $pasien->jenis_kelamin_pasien;
		$this->data['no_rm'] = $pasien->no_rm;
		$this->data['alamat_pasien'] = $pasien->alamat_pasien;
		$this->data['jam_dijemput'] = $pasien->jam_dijemput;
    }

    public function get_ri_serah_terima_read()
    {
    	$this->get_ri_serah_terima_data();
    	return view('page.ri.serah_terima_read', $this->data);
    }

    public function get_ri_serah_terima_edit()
    {
    	$this->get_ri_serah_terima_data();
    	return view('page.ri.serah_terima_edit', $this->data);
    }

    public function post_ri_serah_terima_edit(Request $request)
    {
    	$id_pasien = Session::get('id_pasien');
    	$data = RISerahTerima::where('id_regis', $id_pasien)->first();
    	$data->nama = $request->nama;
		$data->umur = $request->umur;
		$data->jenis_kelamin = $request->jenis_kelamin;
		$data->alamat = $request->alamat;
		$data->hubungan_dengan_pasien = $request->hubungan_dengan_pasien;
		$data->nama_pasien = $request->nama_pasien;
		$data->umur_pasien = $request->umur_pasien;
		$data->jenis_kelamin_pasien = $request->jenis_kelamin_pasien;
		$data->no_rm = $request->no_rm;
		$data->alamat_pasien = $request->alamat_pasien;
		$data->jam_dijemput = $request->jam_dijemput;
		$data->save();
    	return redirect('daftar_dokumen');
    }

    public function ri_serah_terima_pdf()
    {
        $this->get_ri_serah_terima_data();
        
        if($this->data['jenis_kelamin']=='L')
        {
            $this->data['jenis_kelamin']='Laki-laki';
        }
        else
        {
            $this->data['jenis_kelamin']='Perempuan';
        }

        if($this->data['jenis_kelamin_pasien']=='L')
        {
            $this->data['jenis_kelamin_pasien']='Laki-laki';
        }
        else
        {
            $this->data['jenis_kelamin_pasien']='Perempuan';
        }
        ob_clean();

        header('Content-type: application/pdf');

        $mpdf = new \Mpdf\Mpdf([
        'mode' => 'utf-8', 
        'format' => 'A4-P', 
        'orientation' => 'P'
        ]);

        $view = View::make('doc_ri_serah_terima',$this->data);
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
                    <td width="33%" style="text-align: right;">RM. 42.00.RI JULI 2015</td>
                </tr>
            </table>'); 

        $stylesheet = '<style>'.file_get_contents('css/pdf.css').'</style>';

        $mpdf->AddPage('P','','','','',10,10,35,20,10,10);
        //right,left
        $mpdf->WriteHTML($stylesheet, 1);
        $mpdf->WriteHTML($contents,2,true,false);

        $mpdf->Output('ri_serah_terima.pdf',\Mpdf\Output\Destination::INLINE);
    }
}


