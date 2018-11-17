<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PenundaanPelayanan;
use Session;
use View;

class PenundaanPelayananController extends Controller
{
    public function __construct()
    {
        $this->data['title'] = 'Penundaan Pelayanan';
    }

    public function get_penundaan_pelayanan()
    {
    	return view('page.penundaan_pelayanan', $this->data);
    }

    public function post_penundaan_pelayanan(Request $request)
    {
    	$data = new PenundaanPelayanan;
    	$data->id_regis = Session::get('id_pasien');
    	$data->nama = $request->nama;
    	$data->umur = $request->umur;
    	$data->hubungan = $request->hubungan;
    	$data->poli_ruangan = $request->poli_ruangan;
    	$data->dokter_pengirim = $request->dokter_pengirim;
    	$data->pelayanan_akan_dilakukan = $request->pelayanan_akan_dilakukan;
    	if(isset($request->dokter_berhalangan)) {
    		$data->dokter_berhalangan = True;
    	}
    	if(isset($request->kerusakan_alat)) {
    		$data->kerusakan_alat = True;
    	}
    	if(isset($request->pemberian_obat_farmasi)) {
    		$data->pemberian_obat_farmasi = True;
    	}
    	if(isset($request->hasil_pemeriksaan_radiologi)) {
    		$data->hasil_pemeriksaan_radiologi = True;
    	}
    	if(isset($request->hasil_pemeriksaan_laboratorium)) {
    		$data->hasil_pemeriksaan_laboratorium = True;
    	}
    	if(isset($request->lainnya)) {
    		$data->sebab_lainnya = $request->sebab_lainnya;
    	}
    	$data->alternatif = $request->alternatif;
    	$data->jadwal_penundaan = $request->jadwal_penundaan;
    	$data->rs_tujuan = $request->rs_tujuan;
    	$data->save();
    	return back();
    }

    public function get_penundaan_pelayanan_data()
    {
        $pasien = PenundaanPelayanan::where('id', 1)->first();

        $this->data['id_regis'] = 1;

        $this->data['nama'] = $pasien->nama;
        $this->data['umur'] = $pasien->umur;
        $this->data['hubungan'] = $pasien->hubungan;
        $this->data['poli_ruangan'] = $pasien->poli_ruangan;
        $this->data['dokter_pengirim'] = $pasien->dokter_pengirim;
        $this->data['pelayanan_akan_dilakukan'] = $pasien->pelayanan_akan_dilakukan;

        $this->data['dokter_berhalangan'] = $pasien->dokter_berhalangan;
        $this->data['kerusakan_alat'] = $pasien->kerusakan_alat;
        $this->data['pemberian_obat_farmasi'] = $pasien->pemberian_obat_farmasi;
        $this->data['hasil_pemeriksaan_radiologi'] = $pasien->hasil_pemeriksaan_radiologi;
        $this->data['hasil_pemeriksaan_laboratorium'] = $pasien->hasil_pemeriksaan_laboratorium;
        $this->data['sebab_lainnya'] = $pasien->sebab_lainnya;

        //alternatif radio
        $this->data['alternatif'] = $pasien->alternatif;

        $this->data['jadwal_penundaan'] = $pasien->jadwal_penundaan;
        $this->data['rs_tujuan'] = $pasien->rs_tujuan;
        
    }

    public function get_penundaan_pelayanan_read()
    {
        $this->get_penundaan_pelayanan_data();
        return view('page.penundaan_pelayanan_read', $this->data);
    }

    public function get_penundaan_pelayanan_edit()
    {
        $this->get_penundaan_pelayanan_data();
        return view('page.penundaan_pelayanan_edit', $this->data);
    }

    public function post_penundaan_pelayanan_edit(Request $request)
    {
        $id_pasien = Session::get('id_pasien');
        $data = PenundaanPelayanan::where('id_regis', $id_pasien)->first();
        $data->umur = $request->umur;
        $data->hubungan = $request->hubungan;
        $data->poli_ruangan = $request->poli_ruangan;
        $data->dokter_pengirim = $request->dokter_pengirim;
        $data->pelayanan_akan_dilakukan = $request->pelayanan_akan_dilakukan;
        if(isset($request->dokter_berhalangan)) {
            $data->dokter_berhalangan = True;
        }
        if(isset($request->kerusakan_alat)) {
            $data->kerusakan_alat = True;
        }
        if(isset($request->pemberian_obat_farmasi)) {
            $data->pemberian_obat_farmasi = True;
        }
        if(isset($request->hasil_pemeriksaan_radiologi)) {
            $data->hasil_pemeriksaan_radiologi = True;
        }
        if(isset($request->hasil_pemeriksaan_laboratorium)) {
            $data->hasil_pemeriksaan_laboratorium = True;
        }
        if(isset($request->lainnya)) {
            $data->sebab_lainnya = $request->sebab_lainnya;
        }
        $data->alternatif = $request->alternatif;
        $data->jadwal_penundaan = $request->jadwal_penundaan;
        $data->rs_tujuan = $request->rs_tujuan;
        $data->save();
        return redirect('daftar_dokumen');
    }

    public function penundaan_pelayanan_pdf()
    {

        $pasien = PenundaanPelayanan::where('id', 1)->first();

        $this->data['id_regis'] = 1;

        $this->data['nama'] = $pasien->nama;
        $this->data['umur'] = $pasien->umur;
        $this->data['hubungan'] = $pasien->hubungan;
        $this->data['poli_ruangan'] = $pasien->poli_ruangan;
        $this->data['dokter_pengirim'] = $pasien->dokter_pengirim;
        $this->data['pelayanan_akan_dilakukan'] = $pasien->pelayanan_akan_dilakukan;

        $this->data['dokter_berhalangan'] = $pasien->dokter_berhalangan;
        $this->data['kerusakan_alat'] = $pasien->kerusakan_alat;
        $this->data['pemberian_obat_farmasi'] = $pasien->pemberian_obat_farmasi;
        $this->data['hasil_pemeriksaan_radiologi'] = $pasien->hasil_pemeriksaan_radiologi;
        $this->data['hasil_pemeriksaan_laboratorium'] = $pasien->hasil_pemeriksaan_laboratorium;
        $this->data['sebab_lainnya'] = $pasien->sebab_lainnya;

        //alternatif radio
        $this->data['alternatif'] = $pasien->alternatif;

        $this->data['jadwal_penundaan'] = $pasien->jadwal_penundaan;
        $this->data['rs_tujuan'] = $pasien->rs_tujuan;

        ob_clean();

        header('Content-type: application/pdf');

        $mpdf = new \Mpdf\Mpdf([
        'mode' => 'utf-8', 
        'format' => 'A4-L', 
        'orientation' => 'P'
        ]);

        $view = View::make('doc_penundaan_pelayanan',$this->data);
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
            </table> <hr><br>');

        $mpdf->SetHTMLFooter(' <hr>
            <table width="100%" style="vertical-align: bottom; font-family: "arial", Times, serif; 
                font-size: 8pt; color: #000000; font-weight: bold; font-style: italic;">
                <tr>
                    <td width="33%">{DATE j-m-Y}</td>
                    <td width="33%" align="center">{PAGENO}/{nbpg}</td>
                    <td width="33%" style="text-align: right;">RM. 02.00. JULI 2015</td>
                </tr>
            </table>'); 

        $stylesheet = '<style>'.file_get_contents('css/pdf.css').'</style>';

        $mpdf->AddPage('P','','','','',10,10,35,10,10,10);
        //right,left
        $mpdf->WriteHTML($stylesheet, 1);
        $mpdf->WriteHTML($contents,2,true,false);

        $mpdf->Output('penundaan_pelayanan.pdf',\Mpdf\Output\Destination::INLINE);
    }
}
