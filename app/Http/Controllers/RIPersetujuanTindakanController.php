<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RIPersetujuanTindakan;
use App\Models\ListDocument;
use Session;
use View;

class RIPersetujuanTindakanController extends Controller
{
    public function __construct()
    {
        $this->middleware('haspatient');
    	$this->data['title'] = 'Persetujuan Tindakan Kedokteran';
    }

    public function get_ri_persetujuan_tindakan()
    {
    	return view('page.ri.persetujuan_tindakan', $this->data);
    }

    public function post_ri_persetujuan_tindakan(Request $request)
    {
    	$data = new RIPersetujuanTindakan;
    	$id_pasien = Session::get('id_pasien');
    	$data->id_regis = $id_pasien;
		$data->dokter_pelaksana_tindakan = $request->dokter_pelaksana_tindakan;
		$data->pemberi_informasi = $request->pemberi_informasi;
		$data->penerima_informasi = $request->penerima_informasi;
		$data->jenis_informasi_1 = $request->jenis_informasi_1;
		if(isset($request->check_informasi_1)) {
			$data->check_informasi_1 = True;
		}
        else {
            $data->check_informasi_1 = False;
        }
		$data->jenis_informasi_2 = $request->jenis_informasi_2;
		if(isset($request->check_informasi_2)) {
			$data->check_informasi_2 = True;
		}
        else {
            $data->check_informasi_2 = False;
        }
		$data->jenis_informasi_3 = $request->jenis_informasi_3;
		if(isset($request->check_informasi_3)) {
			$data->check_informasi_3 = True;
		}
        else {
            $data->check_informasi_3 = False;
        }
		$data->jenis_informasi_4 = $request->jenis_informasi_4;
		if(isset($request->check_informasi_4)) {
			$data->check_informasi_4 = True;
		}
        else {
            $data->check_informasi_4 = False;
        }
		$data->jenis_informasi_5 = $request->jenis_informasi_5;
		if(isset($request->check_informasi_5)) {
			$data->check_informasi_5 = True;
		}
        else {
            $data->check_informasi_5 = False;
        }
		$data->jenis_informasi_6 = $request->jenis_informasi_6;
		if(isset($request->check_informasi_6)) {
			$data->check_informasi_6 = True;
		}
        else {
            $data->check_informasi_6 = False;
        }
		$data->jenis_informasi_7 = $request->jenis_informasi_7;
		if(isset($request->check_informasi_7)) {
			$data->check_informasi_7 = True;
		}
        else {
            $data->check_informasi_7 = False;
        }
		$data->jenis_informasi_8 = $request->jenis_informasi_8;
		if(isset($request->check_informasi_8)) {
			$data->check_informasi_8 = True;
		}
        else {
            $data->check_informasi_8 = False;
        }
		$data->jenis_informasi_9 = $request->jenis_informasi_9;
		if(isset($request->check_informasi_9)) {
			$data->check_informasi_9 = True;
		}
        else {
            $data->check_informasi_9 = False;
        }
		$data->jenis_informasi_10 = $request->jenis_informasi_10;
		if(isset($request->check_informasi_10)) {
			$data->check_informasi_10 = True;
		}
        else {
            $data->check_informasi_10 = False;
        }
		$data->jenis_informasi_11 = $request->jenis_informasi_11;
		if(isset($request->check_informasi_11)) {
			$data->check_informasi_11 = True;
		}
        else {
            $data->check_informasi_11 = False;
        }
		$data->nama = $request->nama;
		$data->umur = $request->umur;
		$data->jk = $request->jk;
		$data->tindakan = $request->tindakan;
		$data->terhadap = $request->terhadap;
		$data->umur_terhadap = $request->umur_terhadap;
		$data->jk_terhadap = $request->jk_terhadap;
		$data->alamat_terhadap = $request->alamat_terhadap;
		$data->tanggal = $request->tanggal;
		$data->waktu = $request->waktu;
		$data->yang_menyatakan = $request->yang_menyatakan;
		$data->saksi = $request->saksi;
		$data->save();

        $daftar_dokumen = ListDocument::where('id_regis', $id_pasien)->first();
        $daftar_dokumen->ri_persetujuan_tindakan = True;
        $daftar_dokumen->save();

    	return redirect('daftar_dokumen');
    }

    public function get_ri_persetujuan_tindakan_data()
    {
        $id_pasien = Session::get('id_pasien');
    	$pasien = RIPersetujuanTindakan::where('id_regis', $id_pasien)->first();
        
        $this->data['id_regis'] = $pasien->id_regis;

        $this->data['dokter_pelaksana_tindakan'] = $pasien->dokter_pelaksana_tindakan;
        $this->data['pemberi_informasi'] = $pasien->pemberi_informasi;
        $this->data['penerima_informasi'] = $pasien->penerima_informasi;
        
        $this->data['jenis_informasi_1'] = $pasien->jenis_informasi_1;
        $this->data['jenis_informasi_2'] = $pasien->jenis_informasi_2;
        $this->data['jenis_informasi_3'] = $pasien->jenis_informasi_3;
        $this->data['jenis_informasi_4'] = $pasien->jenis_informasi_4;
        $this->data['jenis_informasi_5'] = $pasien->jenis_informasi_5;
        $this->data['jenis_informasi_6'] = $pasien->jenis_informasi_6;
        $this->data['jenis_informasi_7'] = $pasien->jenis_informasi_7;
        $this->data['jenis_informasi_8'] = $pasien->jenis_informasi_8;
        $this->data['jenis_informasi_9'] = $pasien->jenis_informasi_9;
        $this->data['jenis_informasi_10'] = $pasien->jenis_informasi_10;
        $this->data['jenis_informasi_11'] = $pasien->jenis_informasi_11;

        $this->data['check_informasi_1'] = $pasien->check_informasi_1;
        $this->data['check_informasi_2'] = $pasien->check_informasi_2;
        $this->data['check_informasi_3'] = $pasien->check_informasi_3;
        $this->data['check_informasi_4'] = $pasien->check_informasi_4;
        $this->data['check_informasi_5'] = $pasien->check_informasi_5;
        $this->data['check_informasi_6'] = $pasien->check_informasi_6;
        $this->data['check_informasi_7'] = $pasien->check_informasi_7;
        $this->data['check_informasi_8'] = $pasien->check_informasi_8;
    	$this->data['check_informasi_9'] = $pasien->check_informasi_9;
    	$this->data['check_informasi_10'] = $pasien->check_informasi_10;
    	$this->data['check_informasi_11'] = $pasien->check_informasi_11;

        $this->data['nama'] = $pasien->nama;
        $this->data['umur'] = $pasien->umur;
        $this->data['jk'] = $pasien->jk;

        $this->data['tindakan'] = $pasien->tindakan;
        $this->data['terhadap'] = $pasien->terhadap;
        $this->data['umur_terhadap'] = $pasien->umur_terhadap;
        $this->data['jk_terhadap'] = $pasien->jk_terhadap;
        $this->data['alamat_terhadap'] = $pasien->alamat_terhadap;
        $this->data['tanggal'] = $pasien->tanggal;
        $this->data['waktu'] = $pasien->waktu;
        $this->data['yang_menyatakan'] = $pasien->yang_menyatakan;
        $this->data['saksi'] = $pasien->saksi;
    }

    public function get_ri_persetujuan_tindakan_read()
    {
        $this->get_ri_persetujuan_tindakan_data();
        return view('page.ri.persetujuan_tindakan_read', $this->data);
    }

    public function get_ri_persetujuan_tindakan_edit()
    {
        $this->get_ri_persetujuan_tindakan_data();
        return view('page.ri.persetujuan_tindakan_edit', $this->data);
    }

    public function post_ri_persetujuan_tindakan_edit(Request $request)
    {
        $id_pasien = Session::get('id_pasien');
        $data = RIPersetujuanTindakan::where('id_regis', $id_pasien)->first();
        $data->id_regis = $id_pasien;
        $data->dokter_pelaksana_tindakan = $request->dokter_pelaksana_tindakan;
        $data->pemberi_informasi = $request->pemberi_informasi;
        $data->penerima_informasi = $request->penerima_informasi;
        $data->jenis_informasi_1 = $request->jenis_informasi_1;
        if(isset($request->check_informasi_1)) {
            $data->check_informasi_1 = True;
        }
        else {
            $data->check_informasi_1 = False;
        }
        $data->jenis_informasi_2 = $request->jenis_informasi_2;
        if(isset($request->check_informasi_2)) {
            $data->check_informasi_2 = True;
        }
        else {
            $data->check_informasi_2 = False;
        }
        $data->jenis_informasi_3 = $request->jenis_informasi_3;
        if(isset($request->check_informasi_3)) {
            $data->check_informasi_3 = True;
        }
        else {
            $data->check_informasi_3 = False;
        }
        $data->jenis_informasi_4 = $request->jenis_informasi_4;
        if(isset($request->check_informasi_4)) {
            $data->check_informasi_4 = True;
        }
        else {
            $data->check_informasi_4 = False;
        }
        $data->jenis_informasi_5 = $request->jenis_informasi_5;
        if(isset($request->check_informasi_5)) {
            $data->check_informasi_5 = True;
        }
        else {
            $data->check_informasi_5 = False;
        }
        $data->jenis_informasi_6 = $request->jenis_informasi_6;
        if(isset($request->check_informasi_6)) {
            $data->check_informasi_6 = True;
        }
        else {
            $data->check_informasi_6 = False;
        }
        $data->jenis_informasi_7 = $request->jenis_informasi_7;
        if(isset($request->check_informasi_7)) {
            $data->check_informasi_7 = True;
        }
        else {
            $data->check_informasi_7 = False;
        }
        $data->jenis_informasi_8 = $request->jenis_informasi_8;
        if(isset($request->check_informasi_8)) {
            $data->check_informasi_8 = True;
        }
        else {
            $data->check_informasi_8 = False;
        }
        $data->jenis_informasi_9 = $request->jenis_informasi_9;
        if(isset($request->check_informasi_9)) {
            $data->check_informasi_9 = True;
        }
        else {
            $data->check_informasi_9 = False;
        }
        $data->jenis_informasi_10 = $request->jenis_informasi_10;
        if(isset($request->check_informasi_10)) {
            $data->check_informasi_10 = True;
        }
        else {
            $data->check_informasi_10 = False;
        }
        $data->jenis_informasi_11 = $request->jenis_informasi_11;
        if(isset($request->check_informasi_11)) {
            $data->check_informasi_11 = True;
        }
        else {
            $data->check_informasi_11 = False;
        }
        $data->nama = $request->nama;
        $data->umur = $request->umur;
        $data->jk = $request->jk;
        $data->tindakan = $request->tindakan;
        $data->terhadap = $request->terhadap;
        $data->umur_terhadap = $request->umur_terhadap;
        $data->jk_terhadap = $request->jk_terhadap;
        $data->alamat_terhadap = $request->alamat_terhadap;
        $data->tanggal = $request->tanggal;
        $data->waktu = $request->waktu;
        $data->yang_menyatakan = $request->yang_menyatakan;
        $data->saksi = $request->saksi;
        $data->save();
        return redirect('daftar_dokumen');
    }

    public function ri_persetujuan_tindakan_pdf()
    {
        $this->get_ri_persetujuan_tindakan_data();
        $pasien = RIPersetujuanTindakan::where('id', 1)->first();
        
        $this->data['id_regis'] = $pasien->id_regis;

        $this->data['dokter_pelaksana_tindakan'] = $pasien->dokter_pelaksana_tindakan;
        $this->data['pemberi_informasi'] = $pasien->pemberi_informasi;
        $this->data['penerima_informasi'] = $pasien->penerima_informasi;
        
        $this->data['jenis_informasi_1'] = $pasien->jenis_informasi_1;
        $this->data['jenis_informasi_2'] = $pasien->jenis_informasi_2;
        $this->data['jenis_informasi_3'] = $pasien->jenis_informasi_3;
        $this->data['jenis_informasi_4'] = $pasien->jenis_informasi_4;
        $this->data['jenis_informasi_5'] = $pasien->jenis_informasi_5;
        $this->data['jenis_informasi_6'] = $pasien->jenis_informasi_6;
        $this->data['jenis_informasi_7'] = $pasien->jenis_informasi_7;
        $this->data['jenis_informasi_8'] = $pasien->jenis_informasi_8;
        $this->data['jenis_informasi_9'] = $pasien->jenis_informasi_9;
        $this->data['jenis_informasi_10'] = $pasien->jenis_informasi_10;
        $this->data['jenis_informasi_11'] = $pasien->jenis_informasi_11;


        $this->data['nama'] = $pasien->nama;
        $this->data['umur'] = $pasien->umur;
        if($pasien->jk=='1')
        {
            $this->data['jk'] = "Laki-laki";
        }
        else
        {
            $this->data['jk'] = "Perempuan";    
        }
        

        $this->data['tindakan'] = $pasien->tindakan;
        $this->data['terhadap'] = $pasien->terhadap;
        $this->data['umur_terhadap'] = $pasien->umur_terhadap;
        $this->data['jk_terhadap'] = $pasien->jk_terhadap;

        if($pasien->jk_terhadap=='1')
        {
            $this->data['jk_terhadap'] = "Laki-laki";
        }
        else
        {
            $this->data['jk_terhadap'] = "Perempuan";    
        }

        $this->data['alamat_terhadap'] = $pasien->alamat_terhadap;
        $this->data['tanggal'] = $pasien->tanggal;
        $this->data['waktu'] = $pasien->waktu;
        $this->data['yang_menyatakan'] = $pasien->yang_menyatakan;
        $this->data['saksi'] = $pasien->saksi;

        ob_clean();

        header('Content-type: application/pdf');

        $mpdf = new \Mpdf\Mpdf([
        'mode' => 'utf-8', 
        'format' => 'A4-P', 
        'orientation' => 'P'
        ]);

        $view = View::make('doc_ri_persetujuan_tindakan',$this->data);
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
                    <td width="33%" style="text-align: right;">RM. 11.01.RI JULI 2015</td>
                </tr>
            </table>'); 

        $stylesheet = '<style>'.file_get_contents('css/pdf.css').'</style>';

        $mpdf->AddPage('P','','','','',10,10,35,20,10,10);
        //right,left
        $mpdf->WriteHTML($stylesheet, 1);
        $mpdf->WriteHTML($contents,2,true,false);

        $mpdf->Output('ri_persetujuan_tindakan.pdf',\Mpdf\Output\Destination::INLINE);
    }
}
