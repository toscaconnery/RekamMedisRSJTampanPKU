<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RIPermintaanPrivasi;
use App\Models\ListDocument;
use Session;
use View;

class RIPermintaanPrivasiController extends Controller
{
    public function __construct()
    {
    	$this->data['title'] = 'PERMINTAAN KEBUTUHAN PRIVASI';
    }

    public function get_ri_permintaan_privasi()
    {
    	return view('page.ri.permintaan_privasi', $this->data);
    }

    public function post_ri_permintaan_privasi(Request $request)
    {
    	$data = new RIPermintaanPrivasi;
    	$id_pasien = Session::get('id_pasien');
    	$data->id_regis = $id_pasien;
	    $data->nama = $request->nama;
        $data->umur = $request->umur;
        $data->jk = $request->jk;
        $data->alamat = $request->alamat;
        $data->agama = $request->agama;
        $data->no_telp = $request->no_telp;
        $data->hub = $request->hub;
        $data->hub_lain = $request->hub_lain;
        $data->nama_hub = $request->nama_hub;
        $data->umur_hub = $request->umur_hub;
        $data->jk_hub = $request->jk_hub;
        $data->alamat_hub = $request->alamat_hub;
        $data->agama_hub = $request->agama_hub;
        $data->no_telp_hub = $request->no_telp_hub;
        $data->permintaan_privasi = $request->permintaan_privasi;
        $data->keterangan_pp_1 = $request->keterangan_pp_1;
        $data->keterangan_pp_2 = $request->keterangan_pp_2;
        $data->keterangan_pp_3 = $request->keterangan_pp_3;
        $data->tanggal = $request->tanggal;
        $data->nama_saksi = $request->nama_saksi;
        $data->nama_pemohon = $request->nama_pemohon;
        $data->save();
    	return redirect('daftar_dokumen');
    }

    public function get_ri_permintaan_privasi_read()
    {
        $pasien = RIPermintaanPrivasi::where('id', 1)->first();
        
        $this->data['id_regis'] = $pasien->id_regis;

        $this->data['nama'] = $pasien->nama;
        $this->data['umur'] = $pasien->umur;
        $this->data['jk'] = $pasien->jk;
        $this->data['alamat'] = $pasien->alamat;
        $this->data['agama'] = $pasien->agama;
        $this->data['no_telp'] = $pasien->no_telp;
        $this->data['hub'] = $pasien->hub;
        $this->data['hub_lain'] = $pasien->hub_lain;
        $this->data['nama_hub'] = $pasien->nama_hub;
        $this->data['umur_hub'] = $pasien->umur_hub;
        $this->data['jk_hub'] = $pasien->jk_hub;
        $this->data['alamat_hub'] = $pasien->alamat_hub;
        $this->data['agama_hub'] = $pasien->agama_hub;
        $this->data['no_telp_hub'] = $pasien->no_telp_hub;
        $this->data['permintaan_privasi'] = $pasien->permintaan_privasi;
        $this->data['keterangan_pp_1'] = $pasien->keterangan_pp_1;
        $this->data['keterangan_pp_2'] = $pasien->keterangan_pp_2;
        $this->data['keterangan_pp_3'] = $pasien->keterangan_pp_3;
        $this->data['tanggal'] = $pasien->tanggal;
        $this->data['nama_saksi'] = $pasien->nama_saksi;
        $this->data['nama_pemohon'] = $pasien->nama_pemohon;

        return view('page.ri.permintaan_privasi_read', $this->data);
    }

    public function ri_permintaan_privasi_pdf()
    {

        $pasien = RIPermintaanPrivasi::where('id', 1)->first();
        
        $this->data['id_regis'] = $pasien->id_regis;

        $this->data['nama'] = $pasien->nama;
        $this->data['umur'] = $pasien->umur;
        $this->data['jk'] = $pasien->jk;
        if($pasien->jk=='1')
        {
            $this->data['jk']='Laki-laki';
        }
        else
        {
            $this->data['jk']='Perempuan';
        }

        $this->data['alamat'] = $pasien->alamat;
        $this->data['agama'] = $pasien->agama;
        $this->data['no_telp'] = $pasien->no_telp;
        
        
        if($pasien->hub=='6')
        {
            $this->data['hub'] = $pasien->hub_lain;
        }
        else
        {
            if($pasien->hub=='1')
                $this->data['hub'] = 'Suami';
            if($pasien->hub=='2')
                $this->data['hub'] = 'Istri';
            if($pasien->hub=='3')
                $this->data['hub'] = 'Anak';
            if($pasien->hub=='4')
                $this->data['hub'] = 'Ayah';
            if($pasien->hub=='5')
                $this->data['hub'] = 'Ibu';
        }
        
        $this->data['nama_hub'] = $pasien->nama_hub;
        $this->data['umur_hub'] = $pasien->umur_hub;
        if($pasien->jk_hub=='1')
        {
            $this->data['jk_hub']='Laki-laki';
        }
        else
        {
            $this->data['jk_hub']='Perempuan';
        }

        $this->data['alamat_hub'] = $pasien->alamat_hub;
        $this->data['agama_hub'] = $pasien->agama_hub;
        $this->data['no_telp_hub'] = $pasien->no_telp_hub;
        $this->data['permintaan_privasi'] = $pasien->permintaan_privasi;
        $this->data['keterangan_pp_1'] = $pasien->keterangan_pp_1;
        $this->data['keterangan_pp_2'] = $pasien->keterangan_pp_2;
        $this->data['keterangan_pp_3'] = $pasien->keterangan_pp_3;
        $this->data['tanggal'] = $pasien->tanggal;
        $this->data['nama_saksi'] = $pasien->nama_saksi;
        $this->data['nama_pemohon'] = $pasien->nama_pemohon;

        ob_clean();

        header('Content-type: application/pdf');

        $mpdf = new \Mpdf\Mpdf([
        'mode' => 'utf-8', 
        'format' => 'A4-P', 
        'orientation' => 'P'
        ]);

        $view = View::make('doc_ri_permintaan_privasi',$this->data);
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
                    <td width="33%" style="text-align: right;">RM. 08.00.RI JULI 2015</td>
                </tr>
            </table>'); 

        $stylesheet = '<style>'.file_get_contents('css/pdf.css').'</style>';

        $mpdf->AddPage('P','','','','',10,10,35,20,10,10);
        //right,left
        $mpdf->WriteHTML($stylesheet, 1);
        $mpdf->WriteHTML($contents,2,true,false);

        $mpdf->Output('ri_permintaan_privasi.pdf',\Mpdf\Output\Destination::INLINE);
    }
}
