<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RISuratSPD;
use App\Models\ListDocument;
use Session;
use View;

class RISuratPengantarDirawatController extends Controller
{
	public function __construct()
	{
        $this->middleware('haspatient');
		$this->data['title'] = 'SURAT PENGANTAR DIRAWAT (SPD)';
	}

    public function get_ri_surat_spd()
    {
    	return view('page.ri.surat_spd', $this->data);
    }

    public function post_ri_surat_spd(Request $request)
    {
    	$data = new RISuratSPD;
    	$id_pasien = Session::get('id_pasien');
        $data->id_regis = $id_pasien;
        $data->pendidikan = $request->pendidikan;
        $data->pekerjaan = $request->pekerjaan;
        $data->tanggal_lahir = $request->tanggal_lahir;
        $data->jk = $request->jk;
        $data->alamat = $request->alamat;
        $data->nama_pj = $request->nama_pj;
        $data->alamat_pj = $request->alamat_pj;
        $data->no_telp_pj = $request->no_telp_pj;
        $data->no_telp_pj2 = $request->no_telp_pj2;
        $data->ruang = $request->ruang;
        $data->cara_bayar = $request->cara_bayar;
        $data->sebab_utama_dirawat = $request->sebab_utama_dirawat;
        $data->diagnosa = $request->diagnosa;
        $data->gaf = $request->gaf;
        $data->panss_ec = $request->panss_ec;
        $data->terapi = $request->terapi;
        $data->tanggal_masuk_rs = $request->tanggal_masuk_rs;
        $data->ruang_masuk_rs = $request->ruang_masuk_rs;
        $data->kelas_masuk_rs = $request->kelas_masuk_rs;
        $data->tanggal = $request->tanggal;
        $data->dokter_igd_klinik = $request->dokter_igd_klinik;
        $data->save();

    	$daftar_dokumen = ListDocument::where('id_regis', $id_pasien)->first();
        $daftar_dokumen->ri_surat_spd = True;
        $daftar_dokumen->save();
    	return redirect('daftar_dokumen');
    }

    public function get_ri_surat_spd_data()
    {
        $pasien = RISuratSPD::where('id', 1)->first();
        
        $this->data['id_regis'] = $pasien->id_regis;
        $this->data['pendidikan'] = $pasien->pendidikan;
        $this->data['pekerjaan'] = $pasien->pekerjaan;
        $this->data['tanggal_lahir'] = $pasien->tanggal_lahir;
        $this->data['jk'] = $pasien->jk;
        $this->data['alamat'] = $pasien->alamat;
        $this->data['nama_pj'] = $pasien->nama_pj;
        $this->data['alamat_pj'] = $pasien->alamat_pj;
        $this->data['no_telp_pj'] = $pasien->no_telp_pj;
        $this->data['no_telp_pj2'] = $pasien->no_telp_pj2;
        $this->data['ruang'] = $pasien->ruang;
        $this->data['cara_bayar'] = $pasien->cara_bayar;
        $this->data['sebab_utama_dirawat'] = $pasien->sebab_utama_dirawat;
        $this->data['diagnosa'] = $pasien->diagnosa;
        $this->data['gaf'] = $pasien->gaf;
        $this->data['panss_ec'] = $pasien->panss_ec;
        $this->data['terapi'] = $pasien->terapi;
        $this->data['tanggal_masuk_rs'] = $pasien->tanggal_masuk_rs;
        $this->data['ruang_masuk_rs'] = $pasien->ruang_masuk_rs;
        $this->data['kelas_masuk_rs'] = $pasien->kelas_masuk_rs;
        $this->data['tanggal'] = $pasien->tanggal;
        $this->data['dokter_igd_klinik'] = $pasien->dokter_igd_klinik;
    }

    public function get_ri_surat_spd_read()
    {
        $this->get_ri_surat_spd_data();
        return view('page.ri.surat_spd_read', $this->data);
    }

    public function get_ri_surat_spd_edit()
    {
        $this->get_ri_surat_spd_data();
        return view('page.ri.surat_spd_edit', $this->data);
    }

    public function post_ri_surat_spd_edit(Request $request)
    {
        $id_pasien = Session::get('id_pasien');
        $data = RISuratSPD::where('id_regis', $id_pasien)->first();
        
        $data->id_regis = $id_pasien;
        $data->pendidikan = $request->pendidikan;
        $data->pekerjaan = $request->pekerjaan;
        $data->tanggal_lahir = $request->tanggal_lahir;
        $data->jk = $request->jk;
        $data->alamat = $request->alamat;
        $data->nama_pj = $request->nama_pj;
        $data->alamat_pj = $request->alamat_pj;
        $data->no_telp_pj = $request->no_telp_pj;
        $data->no_telp_pj2 = $request->no_telp_pj2;
        $data->ruang = $request->ruang;
        $data->cara_bayar = $request->cara_bayar;
        $data->sebab_utama_dirawat = $request->sebab_utama_dirawat;
        $data->diagnosa = $request->diagnosa;
        $data->gaf = $request->gaf;
        $data->panss_ec = $request->panss_ec;
        $data->terapi = $request->terapi;
        $data->tanggal_masuk_rs = $request->tanggal_masuk_rs;
        $data->ruang_masuk_rs = $request->ruang_masuk_rs;
        $data->kelas_masuk_rs = $request->kelas_masuk_rs;
        $data->tanggal = $request->tanggal;
        $data->dokter_igd_klinik = $request->dokter_igd_klinik;
        $data->save();
        return redirect('daftar_dokumen');
    }

    public function ri_spd_pdf()
    {
        $this->get_ri_surat_spd_data();
        
        if($this->data['jk'] =='1')
        {
            $this->data['jk'] ='Laki-laki';
        }
        else
        {
            $this->data['jk'] ='Perempuan';
        }

        ob_clean();

        header('Content-type: application/pdf');

        $mpdf = new \Mpdf\Mpdf([
        'mode' => 'utf-8', 
        'format' => 'A4-P', 
        'orientation' => 'P'
        ]);

        $view = View::make('doc_ri_spd',$this->data);
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
                    <td width="33%" style="text-align: right;">RM. 02.02.RI JULI 2015</td>
                </tr>
            </table>'); 

        $stylesheet = '<style>'.file_get_contents('css/pdf.css').'</style>';

        $mpdf->AddPage('P','','','','',10,10,35,20,10,10);
        //right,left
        $mpdf->WriteHTML($stylesheet, 1);
        $mpdf->WriteHTML($contents,2,true,false);

        $mpdf->Output('ri_spd.pdf',\Mpdf\Output\Destination::INLINE);
    }
}
