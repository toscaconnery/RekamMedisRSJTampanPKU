<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RJPerkembanganPasien;
use App\Models\ListDocument;
use Session;
use View;

class RJPerkembanganPasienController extends Controller
{
    public function __construct()
    {
        $this->data['title'] = 'Catatan Perkembangan Pasien Rawat Jalan';
    }

    public function get_rj_perkembangan_pasien()
    {
    	return view('page.rj.perkembangan_pasien', $this->data);
    }

    public function post_rj_perkembangan_pasien(Request $request)
    {
    	$jumlah_form = $request->jumlah_form;
        $id_pasien = Session::get('id_pasien');
    	for($i = 1; $i <= $jumlah_form; $i++) {
    		$str_tanggal = 'tanggal_'.$i;
    		$str_jam = 'jam_'.$i;
    		$str_profesi = 'profesi_'.$i;
    		$str_keterangan = 'keterangan_'.$i;
    		$str_ttd = 'ttd_'.$i;
    		if(!is_null($request->$str_tanggal)) {
    			$data = new RJPerkembanganPasien;
    			$data->id_regis = $id_pasien;
    			$data->waktu = $request->$str_tanggal.'-'.$request->$str_jam;
    			$data->profesi = $request->$str_profesi;
    			$data->user = 1;
    			$data->keterangan = $request->$str_keterangan;
    			if(isset($request->$str_ttd)) {
    				$data->ttd = True;
    			}
    			else {
    				$data->ttd = False;
    			}
    			$data->save();
    		}
    	}

        $daftar_dokumen = ListDocument::where('id_regis', $id_pasien)->first();
        $daftar_dokumen->rj_perkembangan_pasien = True;
        $daftar_dokumen->save();
    	return redirect('rj_perkembangan_pasien_read');
    }

    public function get_rj_perkembangan_pasien_data()
    {
        $id_pasien = Session::get('id_pasien');
        $pasien = RJPerkembanganPasien::where('id_regis', $id_pasien)->get();
        $this->data['pasien'] = array();
        $previous_id = '';
        foreach ($pasien as $key => $value) {
            $this->data['pasien'][$key] = array();
            $this->data['pasien'][$key]['id_data'] = $value->id;
            $waktu = $value->waktu;
            $this->data['pasien'][$key]['tanggal'] = substr($waktu, 0, 10);
            $this->data['pasien'][$key]['jam'] = substr($waktu, 11);
            $this->data['pasien'][$key]['profesi'] = $value->profesi;
            $this->data['pasien'][$key]['user'] = $value->user;
            $this->data['pasien'][$key]['keterangan'] = $value->keterangan;
            $this->data['pasien'][$key]['ttd'] = $value->ttd;
            $previous_id .= $value->id.'-';
        }
        if(strlen($previous_id) > 0) {
            $previous_id = substr($previous_id, 0, -1);
        }
        $this->data['previous_id'] = $previous_id;
        
    }

    public function get_rj_perkembangan_pasien_read()
    {
        $this->get_rj_perkembangan_pasien_data();
        return view('page.rj.perkembangan_pasien_read', $this->data);
    }

    public function get_rj_perkembangan_pasien_edit()
    {
        $this->get_rj_perkembangan_pasien_data();
        return view('page.rj.perkembangan_pasien_edit', $this->data);
    }

    public function post_rj_perkembangan_pasien_edit(Request $request)
    {
        $id_pasien = Session::get('id_pasien');
        //old
        $previous_id = $request->previous_id;
        $explode = explode('-', $previous_id);
        foreach ($explode as $key => $value) {
            $str_tanggal = 'tanggal_'.$value;
            $str_jam = 'jam_'.$value;
            $str_profesi = 'profesi_'.$value;
            $str_keterangan = 'keterangan_'.$value;
            $str_ttd = 'ttd_'.$value;
            
            $data = RJPerkembanganPasien::where('id', $value)->first();
            $data->waktu = $request->$str_tanggal.'-'.$request->$str_jam;
            $data->profesi = $request->$str_profesi;
            $data->user = 1;
            $data->keterangan = $request->$str_keterangan;
            if(isset($request->$str_ttd)) {
                $data->ttd = True;
            }
            else {
                $data->ttd = False;
            }
            $data->save();

        }

        //new
        $jumlah_form = $request->jumlah_form_new;
        for($i = 1; $i <= $jumlah_form; $i++) {
            $str_tanggal = 'tanggal_new_'.$i;
            $str_jam = 'jam_new_'.$i;
            $str_profesi = 'profesi_new_'.$i;
            $str_keterangan = 'keterangan_new_'.$i;
            $str_ttd = 'ttd_new_'.$i;
            if(!is_null($request->$str_tanggal)) {
                $data = new RJPerkembanganPasien;
                $data->id_regis = $id_pasien;
                $data->waktu = $request->$str_tanggal.'-'.$request->$str_jam;
                $data->profesi = $request->$str_profesi;
                $data->user = 1;
                $data->keterangan = $request->$str_keterangan;
                if(isset($request->$str_ttd)) {
                    $data->ttd = True;
                }
                else {
                    $data->ttd = False;
                }
                $data->save();
            }
        }
        return redirect('rj_perkembangan_pasien_read');
    }

    public function rj_catatan_perkembangan_pdf()
    {
        $this->get_rj_perkembangan_pasien_data();

        ob_clean();

        header('Content-type: application/pdf');

        $mpdf = new \Mpdf\Mpdf([
        'mode' => 'utf-8', 
        'format' => 'A4-L', 
        'orientation' => 'P'
        ]);

        $view = View::make('doc_rj_catatan_perkembangan',$this->data);
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
                    <td width="33%" style="text-align: right;">RM. 05.00.RJ JULI 2015</td>
                </tr>
            </table>'); 

        $stylesheet = '<style>'.file_get_contents('css/pdf.css').'</style>';

        $mpdf->AddPage('P','','','','',10,10,35,20,10,10);
        //right,left
        $mpdf->WriteHTML($stylesheet, 1);
        $mpdf->WriteHTML($contents,2,true,false);

        $mpdf->Output('rj_catatan_perkembangan.pdf',\Mpdf\Output\Destination::INLINE);
    }
}
