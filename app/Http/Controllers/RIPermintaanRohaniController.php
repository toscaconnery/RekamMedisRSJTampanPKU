<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RIPermintaanRohani;
use App\Models\ListDocument;
use Session;
use View;

class RIPermintaanRohaniController extends Controller
{
    public function __construct()
    {
    	$this->data['title'] = 'PERMINTAAN PELAYANAN ROHANI';
    }

    public function get_ri_permintaan_rohani()
    {
        $this->middleware('haspatient');
    	return view('page.ri.permintaan_rohani', $this->data);
    }

    public function post_ri_permintaan_rohani(Request $request)
    {
    	$data = new RIPermintaanRohani;
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
        $data->permintaan_rohani = $request->permintaan_rohani;
        $data->hd = $request->hd;
        $data->keterangan_hd = $request->keterangan_hd;
        $data->tanggal = $request->tanggal;
        $data->nama_saksi = $request->nama_saksi;
        $data->nama_pemohon = $request->nama_pemohon;
        $data->save();

        $daftar_dokumen = ListDocument::where('id_regis', $id_pasien)->first();
        $daftar_dokumen->ri_permintaan_rohani = True;
        $daftar_dokumen->save();

    	return redirect('daftar_dokumen');
    }

    public function get_ri_permintaan_rohani_data()
    {
        $id_pasien = Session::get('id_pasien');
        $pasien = RIPermintaanRohani::where('id_regis', $id_pasien)->first();
        
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
        $this->data['permintaan_rohani'] = $pasien->permintaan_rohani;
        $this->data['hd'] = $pasien->hd;
        $this->data['keterangan_hd'] = $pasien->keterangan_hd;
        $this->data['tanggal'] = $pasien->tanggal;
        $this->data['nama_saksi'] = $pasien->nama_saksi;
        $this->data['nama_pemohon'] = $pasien->nama_pemohon;

    }

    public function get_ri_permintaan_rohani_read()
    {
        $this->get_ri_permintaan_rohani_data();
        return view('page.ri.permintaan_rohani_read', $this->data);
    }

    public function get_ri_permintaan_rohani_edit()
    {
        $this->get_ri_permintaan_rohani_data();
        return view('page.ri.permintaan_rohani_edit', $this->data);
    }

    public function post_ri_permintaan_rohani_edit(Request $request)
    {
        $id_pasien = Session::get('id_pasien');
        $data = RIPermintaanRohani::where('id_regis', $id_pasien)->first();
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
        $data->permintaan_rohani = $request->permintaan_rohani;
        $data->hd = $request->hd;
        $data->keterangan_hd = $request->keterangan_hd;
        $data->tanggal = $request->tanggal;
        $data->nama_saksi = $request->nama_saksi;
        $data->nama_pemohon = $request->nama_pemohon;
        $data->save();
        return redirect('daftar_dokumen');
    }

    public function ri_permintaan_rohani_pdf()
    {
        $pasien = RIPermintaanRohani::where('id', 1)->first();
        
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
        $this->data['jk_hub'] = $pasien->jk_hub;
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

        $this->data['permintaan_rohani'] = $pasien->permintaan_rohani;
        $this->data['hd'] = $pasien->hd;
        $this->data['keterangan_hd'] = $pasien->keterangan_hd;
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

        $view = View::make('doc_ri_permintaan_rohani',$this->data);
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
                    <td width="33%" style="text-align: right;">RM. 07.00.RI JULI 2015</td>
                </tr>
            </table>'); 

        $stylesheet = '<style>'.file_get_contents('css/pdf.css').'</style>';

        $mpdf->AddPage('P','','','','',10,10,35,20,10,10);
        //right,left
        $mpdf->WriteHTML($stylesheet, 1);
        $mpdf->WriteHTML($contents,2,true,false);

        $mpdf->Output('ri_permintaan_rohani.pdf',\Mpdf\Output\Destination::INLINE);
    }
}
