<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IGDCatatanKemajuan;
use App\Models\ListDocument;
use Session;
use Auth;
use View;

class IGDCatatanKemajuanController extends Controller
{
	public function __construct()
	{
        $this->middleware('haspatient');
		$this->data['title'] = 'Catatan Kemajuan';
	}

    public function get_list_document()
    {
        $id_pasien = Session::get('id_pasien');
        $daftar_dokumen = ListDocument::where('id_regis', $id_pasien)->first();
        
        $this->data['tanggal_pengisian'] = '';
        $this->data['nama_pengisi']       = $daftar_dokumen->igd_catatan_kemajuan_petugas;

        if ($daftar_dokumen->igd_catatan_kemajuan) {
            $tanggal = IGDCatatanKemajuan::where('id_regis', $id_pasien)->first()->created_at;
            $this->data['tanggal_pengisian'] = date('j F Y', strtotime($tanggal));
        }
    }

    public function get_igd_catatan_kemajuan()
    {
        $this->get_list_document();
        if ($this->data['tanggal_pengisian']) {
            return redirect('rj_resume_read');
        }
    	return view('page.igd.catatan_kemajuan', $this->data);
    }

    public function post_igd_catatan_kemajuan(Request $request)
    {
    	$jumlah_form = $request->jumlah_form;
        $id_pasien = Session::get('id_pasien');
    	for($i = 1; $i <= $jumlah_form; $i++) {
    		$str_tanggal = 'tanggal_'.$i;
    		$str_jam = 'jam_'.$i;
    		$str_catatan_kemajuan = 'catatan_kemajuan_'.$i;
    		$str_tindakan_terapi = 'tindakan_terapi_'.$i;
    		$str_nama_user = 'nama_user_'.$i;    		
    		if(!is_null($request->$str_tanggal)) {
    			$data = new IGDCatatanKemajuan;
    			$data->id_regis = $id_pasien;
    			$data->tanggal = $request->$str_tanggal;
    			$data->jam = $request->$str_jam;
    			$data->catatan_kemajuan = $request->$str_catatan_kemajuan;
    			$data->tindakan_terapi = $request->$str_tindakan_terapi;
    			$data->nama_user = $request->$str_nama_user;
    			$data->save();
    		}
    	}

        $daftar_dokumen = ListDocument::where('id_regis', $id_pasien)->get()->first();
        $daftar_dokumen->igd_catatan_kemajuan = True;
        $daftar_dokumen->igd_catatan_kemajuan_petugas = Auth::user()->nama;
        $daftar_dokumen->save();

    	return redirect('igd_catatan_kemajuan_read');
    }

    public function get_igd_catatan_kemajuan_data()
    {
        $id_pasien = Session::get('id_pasien');
        $pasien = IGDCatatanKemajuan::where('id_regis', $id_pasien)->get();
        if(count($pasien) > 0) {
            $this->data['previous_id'] = '';
            $this->data['pasien'] = array();
            foreach($pasien as $key => $value) {
                $this->data['pasien'][$key] = array();
                $this->data['pasien'][$key]['tanggal'] = $value->tanggal;
                $this->data['pasien'][$key]['jam'] = $value->jam;
                $this->data['pasien'][$key]['catatan_kemajuan'] = $value->catatan_kemajuan;
                $this->data['pasien'][$key]['tindakan_terapi'] = $value->tindakan_terapi;
                $this->data['pasien'][$key]['nama_user'] = $value->nama_user;
                $this->data['pasien'][$key]['id_data'] = $value->id;
                $this->data['pasien'][$key]['id_regis'] = $value->id_regis;
                $this->data['previous_id'] .= $value->id.'-';
            }
            $this->data['previous_id'] = substr($this->data['previous_id'], 0, -1);

        }
        else {
            //data tidak ditemukan
            return redirect('daftar_dokumen');
        }
    }

    public function get_igd_catatan_kemajuan_read()
    {
        $this->get_list_document();
        if (!$this->data['nama_pengisi']) {
            Session::put('pesan_kesalahan', 'Dokumen tidak ditemukan');
            return redirect('/');
        }
        $this->get_igd_catatan_kemajuan_data();
        return view('page.igd.catatan_kemajuan_read', $this->data);
    }

    public function get_igd_catatan_kemajuan_edit()
    {
        $this->get_list_document();
        if (!$this->data['nama_pengisi']) {
            Session::put('pesan_kesalahan', 'Dokumen tidak ditemukan');
            return redirect('/');
        }
        $this->get_igd_catatan_kemajuan_data();
        return view('page.igd.catatan_kemajuan_edit', $this->data);
    }

    public function post_igd_catatan_kemajuan_edit(Request $request)
    {
        //old data
        $previous_id = $request->previous_id;
        $previous_id_array = explode('-', $previous_id);
        $id_pasien = Session::get('id_pasien');
        foreach($previous_id_array as $key => $value) {
            $data = IGDCatatanKemajuan::where('id_regis', $id_pasien)->where('id', $value)->first();
            $str_tanggal = 'tanggal_'.$value;
            $str_jam = 'jam_'.$value;
            $str_catatan_kemajuan = 'catatan_kemajuan_'.$value;
            $str_tindakan_terapi = 'tindakan_terapi_'.$value;
            $str_nama_user = 'nama_user_'.$value;

            if (!isset($request->$str_tanggal)) {
                 //ini memang menggunakan 'id', bukan 'id_regis'
                IGDCatatanKemajuan::where('id', $value)->delete();
            }
            else {
                $data->tanggal = $request->$str_tanggal;
                $data->jam = $request->$str_jam;
                $data->catatan_kemajuan = $request->$str_catatan_kemajuan;
                $data->tindakan_terapi = $request->$str_tindakan_terapi;
                $data->nama_user = $request->$str_nama_user;
                $data->save();
            }
        }
       

        //new data
        $jumlah_form = $request->jumlah_form_new;
        if($jumlah_form > 0) {
            for($i = 1; $i <= $jumlah_form; $i++) {
                $str_tanggal = 'tanggal_new_'.$i;
                $str_jam = 'jam_new_'.$i;
                $str_catatan_kemajuan = 'catatan_kemajuan_new_'.$i;
                $str_tindakan_terapi = 'tindakan_terapi_new_'.$i;
                $str_nama_user = 'nama_user_new_'.$i;           
                if(!is_null($request->$str_tanggal)) {
                    $data = new IGDCatatanKemajuan;
                    $data->id_regis = $id_pasien;
                    $data->tanggal = $request->$str_tanggal;
                    $data->jam = $request->$str_jam;
                    $data->catatan_kemajuan = $request->$str_catatan_kemajuan;
                    $data->tindakan_terapi = $request->$str_tindakan_terapi;
                    $data->nama_user = $request->$str_nama_user;
                    $data->save();
                }
            }
        }
        return redirect('igd_catatan_kemajuan_read');
    }


    public function get_igd_catatan_kemajuan_delete()
    {
        $id_pasien = Session::get('id_pasien');

        // menghapus semua dokumen
        IGDCatatanKemajuan::where('id_regis', $id_pasien)->delete();

        // mengosongkan data di list dokumen
        $list_document = ListDocument::where('id_regis', $id_pasien)->first();
        $list_document->igd_catatan_kemajuan = false;
        $list_document->igd_catatan_kemajuan_petugas = null;
        $list_document->save();
        
        Session::put('pesan_berhasil', 'Dokumen berhasil dihapus');

        return redirect('/');
    }

    public function igd_kemajuan_pdf()
    {

        $this->get_igd_catatan_kemajuan_data();
        
        ob_clean();

        header('Content-type: application/pdf');

        $mpdf = new \Mpdf\Mpdf([
        'mode' => 'utf-8', 
        'format' => 'A4-L', 
        'orientation' => 'P'
        ]);

        $view = View::make('doc_igd_kemajuan',$this->data);
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
                            <p>:  '.Session::get('id_pasien').'</p><br>
                            <p>:  '.Session::get("nama").'</p><br>
                            <p>:  '.Session::get("tanggal_lahir").'</p><br>
                            <p>:  '.Session::get("jenis_kelamin").'</p><br>
                            </td>                       
                        </tr>
  
                </tbody>
            </table> <hr> <br>' );

        $mpdf->SetHTMLFooter('<hr>
            <table width="100%" style="vertical-align: bottom; font-family: "arial", Times, serif; 
                font-size: 8pt; color: #000000; font-weight: bold; font-style: italic;">
                <tr>
                    <td width="33%">{DATE j-m-Y}</td>
                    <td width="33%" align="center">{PAGENO}/{nbpg}</td>
                    <td width="33%" style="text-align: right;">RM. 04.00.IGD JULI 2015</td>
                </tr>
            </table>'); 

        $stylesheet = '<style>'.file_get_contents('css/pdf.css').'</style>';

        $mpdf->AddPage('P','','','','',10,10,35,20,10,10);
        //right,left
        $mpdf->WriteHTML($stylesheet, 1);
        $mpdf->WriteHTML($contents,2,true,false);

        $mpdf->Output('igd_kemajuan.pdf',\Mpdf\Output\Destination::INLINE);
    }
}
