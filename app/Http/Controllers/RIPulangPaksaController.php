<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RIPulangPaksa;
use App\Models\ListDocument;
use Session;
use View;

class RIPulangPaksaController extends Controller
{
    public function __construct()
    {
        $this->data['title'] = 'Surat Pernyataan Pulang Paksa';
    }

    public function get_ri_pulang_paksa()
    {
    	return view('page.ri.pulang_paksa', $this->data);
    }

    public function post_ri_pulang_paksa(Request $request)
    {
    	$data = new RIPulangPaksa;
    	$id_pasien = Session::get('id_pasien');
		$data->id_regis = $id_pasien;
        $data->nama = $request->nama;
        $data->umur = $request->umur;
        $data->pekerjaan = $request->pekerjaan;
        $data->hubungan_keluarga = $request->hubungan_keluarga;
        $data->alamat = $request->alamat;
        $data->nama_pasien = $request->nama_pasien;
        $data->umur_pasien = $request->umur_pasien;
        $data->alamat_pasien = $request->alamat_pasien;
        $data->tanggal_pengambilan = $request->tanggal_pengambilan;
        $data->tanggal = $request->tanggal;
        $data->yang_menyatakan = $request->yang_menyatakan;
        $data->saksi_keluarga = $request->saksi_keluarga;
        $data->saksi_pemberi_asuhan = $request->saksi_pemberi_asuhan;
        $data->save();

        $daftar_dokumen = ListDocument::where('id_regis', $id_pasien)->first();
        $daftar_dokumen->ri_pulang_paksa = True;
        $daftar_dokumen->save();
    	return redirect('daftar_dokumen');
    }

    public function get_ri_pulang_paksa_data()
    {
    	$id_pasien = Session::get('id_pasien');
    	$pasien = RIPulangPaksa::where('id_regis', $id_pasien)->first();
    	$this->data['id_regis'] = $pasien->id_regis;
        $this->data['nama'] = $pasien->nama;
        $this->data['umur'] = $pasien->umur;
        $this->data['pekerjaan'] = $pasien->pekerjaan;
        $this->data['hubungan_keluarga'] = $pasien->hubungan_keluarga;
        $this->data['alamat'] = $pasien->alamat;
        $this->data['nama_pasien'] = $pasien->nama_pasien;
        $this->data['umur_pasien'] = $pasien->umur_pasien;
        $this->data['alamat_pasien'] = $pasien->alamat_pasien;
        $this->data['tanggal_pengambilan'] = $pasien->tanggal_pengambilan;
        $this->data['tanggal'] = $pasien->tanggal;
        $this->data['yang_menyatakan'] = $pasien->yang_menyatakan;
        $this->data['saksi_keluarga'] = $pasien->saksi_keluarga;
        $this->data['saksi_pemberi_asuhan'] = $pasien->saksi_pemberi_asuhan;
    }

    public function get_ri_pulang_paksa_read()
    {
    	$this->get_ri_pulang_paksa_data();
    	return view('page.ri.pulang_paksa_read', $this->data);
    }

    public function get_ri_pulang_paksa_edit()
    {
    	$this->get_ri_pulang_paksa_data();
    	return view('page.ri.pulang_paksa_edit', $this->data);
    }

    public function post_ri_pulang_paksa_edit(Request $request)
    {
    	$id_pasien = Session::get('id_pasien');
    	$data = RIPulangPaksa::where('id_regis', $id_pasien)->first();
		$data->id_regis = $id_pasien;
        $data->nama = $request->nama;
        $data->umur = $request->umur;
        $data->pekerjaan = $request->pekerjaan;
        $data->hubungan_keluarga = $request->hubungan_keluarga;
        $data->alamat = $request->alamat;
        $data->nama_pasien = $request->nama_pasien;
        $data->umur_pasien = $request->umur_pasien;
        $data->alamat_pasien = $request->alamat_pasien;
        $data->tanggal_pengambilan = $request->tanggal_pengambilan;
        $data->tanggal = $request->tanggal;
        $data->yang_menyatakan = $request->yang_menyatakan;
        $data->saksi_keluarga = $request->saksi_keluarga;
        $data->saksi_pemberi_asuhan = $request->saksi_pemberi_asuhan;
        $data->save();
    	return redirect('daftar_dokumen');
    }

    public function ri_pulang_paksa_pdf()
    {
        $this->get_ri_pulang_paksa_data();

        ob_clean();

        header('Content-type: application/pdf');

        $mpdf = new \Mpdf\Mpdf([
        'mode' => 'utf-8', 
        'format' => 'A4-P', 
        'orientation' => 'P'
        ]);

        $view = View::make('doc_ri_pulang_paksa',$this->data);
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
                    <td width="33%" style="text-align: right;">RM. 36.00.RI JULI 2015</td>
                </tr>
            </table>'); 

        $stylesheet = '<style>'.file_get_contents('css/pdf.css').'</style>';

        $mpdf->AddPage('P','','','','',10,10,35,20,10,10);
        //right,left
        $mpdf->WriteHTML($stylesheet, 1);
        $mpdf->WriteHTML($contents,2,true,false);

        $mpdf->Output('ri_pulang_paksa.pdf',\Mpdf\Output\Destination::INLINE);
    }
}

