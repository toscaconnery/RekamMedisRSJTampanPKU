<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RIPemberianInformasi;
use App\Models\ListDocument;
use Session;
use View;

class RIPemberianInformasiController extends Controller
{
    public function __construct()
    {
    	$this->data['title'] = 'Pemberian Informasi';
    }

    public function get_ri_pemberian_informasi()
    {
    	return view('page.ri.pemberian_informasi', $this->data);
    }

    public function post_ri_pemberian_informasi(Request $request)
    {
    	$jumlah_form = $request->jumlah_form;
    	$id_pasien = Session::get('id_pasien');
    	$idx = 0;
    	for($i = 1; $i <= $jumlah_form; $i++) {
    		$idx++;
    		$str_tanggal = 'tanggal_'.$i;
    		$str_jam = 'jam_'.$i;
    		$str_informasi = 'informasi_'.$i;
    		$str_pemberi = 'pemberi_'.$i;
    		$str_penerima = 'penerima_'.$i;
    		if(!empty($request->$str_tanggal)) {
    			$data = new RIPemberianInformasi;
    			$data->id_regis = $id_pasien;
    			$data->tanggal = $request->$str_tanggal;
    			$data->jam = $request->$str_jam;
    			$data->informasi = $request->$str_informasi;
    			$data->pemberi = $request->$str_pemberi;
    			$data->penerima = $request->$str_penerima;
    			$data->save();
    		}
    	}
    	if($idx > 0) {
	    	$daftar_dokumen = ListDocument::where('id_regis', $id_pasien)->first();
	        $daftar_dokumen->ri_pemberian_informasi = True;
	        $daftar_dokumen->save();
    	}
    	//dd($request);
    }

    public function get_ri_pemberian_informasi_data()
    {
    	$id_pasien = Session::get('id_pasien');
    	$pasien = RIPemberianInformasi::where('id_regis', $id_pasien)->get();
    	$this->data['pasien'] = array();
    	$this->data['id_regis'] = $id_pasien;
    	$this->data['previous_data'] = '';
    	foreach ($pasien as $key => $value) {
    		$this->data['pasien'][$key] = array();
    		$this->data['pasien'][$key]['id_data'] = $value->id;
    		$this->data['pasien'][$key]['tanggal'] = $value->tanggal;
    		$this->data['pasien'][$key]['jam'] = $value->jam;
    		$this->data['pasien'][$key]['informasi'] = $value->informasi;
    		$this->data['pasien'][$key]['pemberi'] = $value->pemberi;
    		$this->data['pasien'][$key]['penerima'] = $value->penerima;
    		$this->data['previous_data'] .= $value->id.'-';
    	}
    	if(strlen($this->data['previous_data']) > 0) {
    		$this->data['previous_data'] = substr($this->data['previous_data'], 0, -1);
    	}
    }

    public function get_ri_pemberian_informasi_read()
    {
    	$this->get_ri_pemberian_informasi_data();
    	return view('page.ri.pemberian_informasi_read', $this->data);
    }

    public function get_ri_pemberian_informasi_edit()
    {
    	$this->get_ri_pemberian_informasi_data();
    	return view('page.ri.pemberian_informasi_edit', $this->data);
    }

    public function post_ri_pemberian_informasi_edit(Request $request)
    {	//old data
    	$previous_data = $request->previous_data;
    	if(strlen($previous_data) > 0) {
    		$list_previous_data = explode('-', $previous_data);
    		foreach ($list_previous_data as $l) {
    			$data = RIPemberianInformasi::where('id', $l)->first();
    			$str_tanggal = 'tanggal_'.$l;
	    		$str_jam = 'jam_'.$l;
	    		$str_informasi = 'informasi_'.$l;
	    		$str_pemberi = 'pemberi_'.$l;
	    		$str_penerima = 'penerima_'.$l;
	    		$data->tanggal = $request->$str_tanggal;
    			$data->jam = $request->$str_jam;
    			$data->informasi = $request->$str_informasi;
    			$data->pemberi = $request->$str_pemberi;
    			$data->penerima = $request->$str_penerima;
    			$data->save();
    		}
    	}
    	
    	//new data
    	$id_pasien = Session::get('id_pasien');
    	$jumlah_form = $request->jumlah_form;
    	for($i = 1; $i <= $jumlah_form; $i++) {
    		$str_tanggal = 'tanggal_new_'.$i;
    		$str_jam = 'jam_new_'.$i;
    		$str_informasi = 'informasi_new_'.$i;
    		$str_pemberi = 'pemberi_new_'.$i;
    		$str_penerima = 'penerima_new_'.$i;
    		if(!empty($request->$str_tanggal)) {
    			$data = new RIPemberianInformasi;
    			$data->id_regis = $id_pasien;
    			$data->tanggal = $request->$str_tanggal;
    			$data->jam = $request->$str_jam;
    			$data->informasi = $request->$str_informasi;
    			$data->pemberi = $request->$str_pemberi;
    			$data->penerima = $request->$str_penerima;
    			$data->save();
    		}
    	}
    	dd($request);
    }

    public function ri_informasi_pdf()
    {
        $this->get_ri_pemberian_informasi_data();

        ob_clean();

        header('Content-type: application/pdf');

        $mpdf = new \Mpdf\Mpdf([
        'mode' => 'utf-8', 
        'format' => 'A4-P', 
        'orientation' => 'P'
        ]);

        $view = View::make('doc_ri_informasi',$this->data);
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
                    <td width="33%" style="text-align: right;">RM. 40.00.RI JULI 2015</td>
                </tr>
            </table>'); 

        $stylesheet = '<style>'.file_get_contents('css/pdf.css').'</style>';

        $mpdf->AddPage('P','','','','',10,10,35,20,10,10);
        //right,left
        $mpdf->WriteHTML($stylesheet, 1);
        $mpdf->WriteHTML($contents,2,true,false);

        $mpdf->Output('ri_informasi.pdf',\Mpdf\Output\Destination::INLINE);
    }
}
