<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RJInformasiEdukasi;
use App\Models\RJEdukasiDiperoleh;
use App\Models\ListDocument;
use Session;
use Auth;
use View;


class RJInformasiEdukasiController extends Controller
{
    public function __construct()
    {
        $this->middleware('haspatient');
        $this->data['title'] = 'Kebutuhan Informasi Dan Edukasi Pasien/Keluarga Rawat Jalan';
    }

    public function get_list_document()
    {
        $id_pasien = Session::get('id_pasien');
        $daftar_dokumen = ListDocument::where('id_regis', $id_pasien)->first();
        
        $this->data['tanggal_pengisian'] = '';
        $this->data['nama_pengisi']       = $daftar_dokumen->rj_informasi_edukasi_petugas;

        if ($daftar_dokumen->rj_informasi_edukasi) {
            $tanggal = RJInformasiEdukasi::where('id_regis', $id_pasien)->first()->created_at;
            $this->data['tanggal_pengisian'] = date('j F Y', strtotime($tanggal));
        }
    }

    public function get_rj_informasi_edukasi()
    {
        $this->get_list_document();
        if ($this->data['tanggal_pengisian']) {
            return redirect('rj_informasi_edukasi_read');
        }
        return view('page.rj.informasi_edukasi', $this->data);
    }

    public function post_rj_informasi_edukasi(Request $request)
    {
        $data = new RJInformasiEdukasi;
        $id_pasien = Session::get('id_pasien');
        $data->id_regis = $id_pasien;
        $data->bahasa = $request->bahasa;
        if($request->bahasa == 'Daerah' or $request->bahasa == 'Lainnya') {
            $data->ket_bahasa = $request->ket_bahasa;
        }
        if($request->penerjemah == 'true') {
            $data->penerjemah = True;
        }
        else {
            $data->penerjemah = False;
        }
        $data->pendidikan = $request->pendidikan;
        $data->baca_tulis = $request->baca_tulis;
        $data->cara_belajar = $request->cara_belajar;
        $data->budaya = $request->budaya;
        $hambatan = "";
        if(isset($request->hambatan_1)) {
            $hambatan .= "1-";
        }
        if(isset($request->hambatan_2)) {
            $hambatan .= "2-";
        }
        if(isset($request->hambatan_3)) {
            $hambatan .= "3-";
        }
        if(isset($request->hambatan_4)) {
            $hambatan .= "4-";
        }
        if(isset($request->hambatan_5)) {
            $hambatan .= "5-";
        }
        if(isset($request->hambatan_6)) {
            $hambatan .= "6-";
        }
        if(isset($request->hambatan_7)) {
            $hambatan .= "7-";
        }
        if(isset($request->hambatan_8)) {
            $hambatan .= "8-";
        }
        if(isset($request->hambatan_9)) {
            $hambatan .= "9-";
        }
        if(isset($request->hambatan_10)) {
            $hambatan .= "10-";
        }
        if(isset($request->hambatan_11)) {
            $hambatan .= "11-";
        }
        if(isset($request->hambatan_12)) {
            $hambatan .= "12-";
        }
        if(strlen($hambatan) > 0) {
            $hambatan = substr($hambatan, 0, -1);
            $data->hambatan = $hambatan;
        }
        if(isset($request->hambatan_12)) {
            $data->hambatan_lain = $request->hambatan_lain;
        }

        $kebutuhan = "";
        if(isset($request->kebutuhan_1)) {
            $kebutuhan .= "1-";
        }
        if(isset($request->kebutuhan_2)) {
            $kebutuhan .= "2-";
        }
        if(isset($request->kebutuhan_3)) {
            $kebutuhan .= "3-";
        }
        if(isset($request->kebutuhan_4)) {
            $kebutuhan .= "4-";
        }
        if(isset($request->kebutuhan_5)) {
            $kebutuhan .= "5-";
        }
        if(isset($request->kebutuhan_6)) {
            $kebutuhan .= "6-";
        }
        if(isset($request->kebutuhan_7)) {
            $kebutuhan .= "7-";
        }
        if(isset($request->kebutuhan_8)) {
            $kebutuhan .= "8-";
        }
        if(isset($request->kebutuhan_9)) {
            $kebutuhan .= "9-";
        }
        if(isset($request->kebutuhan_10)) {
            $kebutuhan .= "10-";
        }
        if(strlen($kebutuhan) > 0) {
            $kebutuhan = substr($kebutuhan, 0, -1);
            $data->kebutuhan = $kebutuhan;
        }
        if(isset($request->kebutuhan_10)) {
            $data->kebutuhan_lain = $request->kebutuhan_lain;
        }
        if($request->kesediaan_menerima == 'true') {
            $data->kesediaan_menerima = True;
        }
        else {
            $data->kesediaan_menerima = False;
        }
        $data->nama_keluarga = $request->nama_keluarga;
        $data->hubungan= $request->hubungan;
        $data->save();

        $daftar_dokumen = ListDocument::where('id_regis', $id_pasien)->get()->first();
        $daftar_dokumen->rj_informasi_edukasi = True;
        $daftar_dokumen->rj_informasi_edukasi_petugas = Auth::user()->nama;
        $daftar_dokumen->save();

        return redirect('rj_informasi_edukasi_read');
    }

    public function get_rj_informasi_edukasi_data()
    {
        $id_pasien = Session::get('id_pasien');
        $data = RJInformasiEdukasi::where('id_regis', $id_pasien)->first();
        $this->data['bahasa'] = $data->bahasa;
        $this->data['ket_bahasa'] = $data->ket_bahasa;
        $this->data['penerjemah'] = $data->penerjemah;
        $this->data['pendidikan'] = $data->pendidikan;
        $this->data['baca_tulis'] = $data->baca_tulis;
        $this->data['cara_belajar'] = $data->cara_belajar;
        $this->data['budaya'] = $data->budaya;
        $hambatan = $data->hambatan;
        $hambatan = explode('-', $hambatan);
        $this->data['hambatan'] = array();
        foreach ($hambatan as $key => $value) {
            $this->data['hambatan'][$value] = True;
        }
        $this->data['hambatan_lain'] = $data->hambatan_lain;
        $kebutuhan = $data->kebutuhan;
        $kebutuhan = explode('-', $kebutuhan);
        $this->data['kebutuhan'] = array();
        foreach ($kebutuhan as $key => $value) {
            $this->data['kebutuhan'][$value] = True;
        }
        $this->data['kebutuhan_lain'] = $data->kebutuhan_lain;
        $this->data['kesediaan_menerima'] = $data->kesediaan_menerima;
        $this->data['nama_keluarga'] = $data->nama_keluarga;
        $this->data['hubungan'] = $data->hubungan;
    }

    public function get_rj_informasi_edukasi_read()
    {
        $this->get_list_document();
        if (!$this->data['tanggal_pengisian']) {
            return redirect('/');
        }
        $this->get_rj_informasi_edukasi_data();
        return view('page.rj.informasi_edukasi_read', $this->data);
    }

    public function get_rj_informasi_edukasi_edit()
    {
        $this->get_list_document();
        if (!$this->data['tanggal_pengisian']) {
            return redirect('/');
        }
        $this->get_rj_informasi_edukasi_data();
        return view('page.rj.informasi_edukasi_edit', $this->data);
    }

    public function get_rj_informasi_edukasi_list_informasi()
    {
        $this->get_list_document();
        if (empty($this->data['tanggal_pengisian']))
        {
            Session::put('pesan_kesalahan', 'Silahkan mengisi halaman ini terlebih dahulu.');
            return back();
        }
        return view('page.rj.informasi_edukasi_list_informasi', $this->data);
    }

    public function post_rj_informasi_edukasi_list_informasi(Request $request)
    {
        $jumlah_form = $request->jumlah_form;
        $id_pasien = Session::get('id_pasien');
        for($i = 1; $i <= $jumlah_form; $i++) {
            $str_tanggal = 'tanggal_'.$i;
            $str_poliklinik = 'poliklinik_'.$i;
            $str_informasi = 'informasi_'.$i;
            $str_nama_edukator = 'nama_edukator_'.$i;
            $str_ttd_edukator = 'ttd_edukator_'.$i;
            $str_nama_sasaran = 'nama_sasaran_'.$i;
            $str_ttd_sasaran = 'ttd_sasaran_'.$i;
            $str_evaluasi = 'evaluasi_'.$i;
            if(!is_null($request->$str_tanggal)) {
                $data = new RJEdukasiDiperoleh;
                $data->id_regis = $id_pasien;
                $data->tanggal = $request->$str_tanggal;
                $data->poliklinik = $request->$str_poliklinik;
                $data->informasi = $request->$str_informasi;
                $data->nama_edukator = $request->$str_nama_edukator;
                if(isset($request->$str_ttd_edukator)) {
                    $data->ttd_edukator = True;
                }
                else {
                    $data->ttd_edukator = False;
    			}
    			$data->nama_sasaran = $request->$str_nama_sasaran;
    			if(isset($request->$str_ttd_sasaran)) {
    				$data->ttd_sasaran = True;
    			}
    			else {
    				$data->ttd_sasaran = False;
    			}
    			$data->evaluasi = $request->$str_evaluasi;
    			$data->save();
    		}
    	}
		return redirect('rj_informasi_edukasi_read');    	
    }

    public function post_rj_informasi_edukasi_edit(Request $request)
    {
        $id_pasien = Session::get('id_pasien');
        $data = RJInformasiEdukasi::where('id_regis', $id_pasien)->first();
        $data->id_regis = $id_pasien;
        $data->bahasa = $request->bahasa;
        if($request->bahasa == 'Daerah' or $request->bahasa == 'Lainnya') {
            $data->ket_bahasa = $request->ket_bahasa;
        }
        if($request->penerjemah == 'true') {
            $data->penerjemah = True;
        }
        else {
            $data->penerjemah = False;
        }
        $data->pendidikan = $request->pendidikan;
        $data->baca_tulis = $request->baca_tulis;
        $data->cara_belajar = $request->cara_belajar;
        $data->budaya = $request->budaya;
        $hambatan = "";
        if(isset($request->hambatan_1)) {
            $hambatan .= "1-";
        }
        if(isset($request->hambatan_2)) {
            $hambatan .= "2-";
        }
        if(isset($request->hambatan_3)) {
            $hambatan .= "3-";
        }
        if(isset($request->hambatan_4)) {
            $hambatan .= "4-";
        }
        if(isset($request->hambatan_5)) {
            $hambatan .= "5-";
        }
        if(isset($request->hambatan_6)) {
            $hambatan .= "6-";
        }
        if(isset($request->hambatan_7)) {
            $hambatan .= "7-";
        }
        if(isset($request->hambatan_8)) {
            $hambatan .= "8-";
        }
        if(isset($request->hambatan_9)) {
            $hambatan .= "9-";
        }
        if(isset($request->hambatan_10)) {
            $hambatan .= "10-";
        }
        if(isset($request->hambatan_11)) {
            $hambatan .= "11-";
        }
        if(isset($request->hambatan_12)) {
            $hambatan .= "12-";
        }
        if(strlen($hambatan) > 0) {
            $hambatan = substr($hambatan, 0, -1);
            $data->hambatan = $hambatan;
        }
        if(isset($request->hambatan_12)) {
            $data->hambatan_lain = $request->hambatan_lain;
        }

        $kebutuhan = "";
        if(isset($request->kebutuhan_1)) {
            $kebutuhan .= "1-";
        }
        if(isset($request->kebutuhan_2)) {
            $kebutuhan .= "2-";
        }
        if(isset($request->kebutuhan_3)) {
            $kebutuhan .= "3-";
        }
        if(isset($request->kebutuhan_4)) {
            $kebutuhan .= "4-";
        }
        if(isset($request->kebutuhan_5)) {
            $kebutuhan .= "5-";
        }
        if(isset($request->kebutuhan_6)) {
            $kebutuhan .= "6-";
        }
        if(isset($request->kebutuhan_7)) {
            $kebutuhan .= "7-";
        }
        if(isset($request->kebutuhan_8)) {
            $kebutuhan .= "8-";
        }
        if(isset($request->kebutuhan_9)) {
            $kebutuhan .= "9-";
        }
        if(isset($request->kebutuhan_10)) {
            $kebutuhan .= "10-";
        }
        if(strlen($kebutuhan) > 0) {
            $kebutuhan = substr($kebutuhan, 0, -1);
            $data->kebutuhan = $kebutuhan;
        }
        if(isset($request->kebutuhan_10)) {
            $data->kebutuhan_lain = $request->kebutuhan_lain;
        }
        if($request->kesediaan_menerima == 'true') {
            $data->kesediaan_menerima = True;
        }
        else {
            $data->kesediaan_menerima = False;
        }
        $data->nama_keluarga = $request->nama_keluarga;
        $data->hubungan= $request->hubungan;
        $data->save();
        return redirect('rj_informasi_edukasi_read');
    }

    public function get_rj_informasi_edukasi_list_informasi_data()
    {
        $id_pasien = Session::get('id_pasien');
        $data = RJEdukasiDiperoleh::where('id_regis', $id_pasien)->get();
        $this->data['previous_data'] = '';
        $this->data['pasien'] = array();
        foreach($data as $key => $value) {
            $this->data['pasien'][$key] = array();
            $this->data['pasien'][$key]['id_data'] = $value->id; 
            $this->data['pasien'][$key]['tanggal'] = $value->tanggal;
            $this->data['pasien'][$key]['poliklinik'] = $value->poliklinik;
            $this->data['pasien'][$key]['informasi'] = $value->informasi;
            $this->data['pasien'][$key]['nama_edukator'] = $value->nama_edukator;
            $this->data['pasien'][$key]['ttd_edukator'] = $value->ttd_edukator;
            $this->data['pasien'][$key]['nama_sasaran'] = $value->nama_sasaran;
            $this->data['pasien'][$key]['ttd_sasaran'] = $value->ttd_sasaran;
            $this->data['pasien'][$key]['evaluasi'] = $value->evaluasi;
            $this->data['previous_data'] .= $value->id.'-';
        }
        if(strlen($this->data['previous_data']) > 0) {
            $this->data['previous_data'] = substr($this->data['previous_data'], 0, -1);
        }
    }

    public function get_rj_informasi_edukasi_list_informasi_read()
    {
        $this->get_list_document();
        $this->get_rj_informasi_edukasi_list_informasi_data();
        if (!$this->data['previous_data']) {
            return redirect('rj_informasi_edukasi_list_informasi');
        }

        return view('page.rj.informasi_edukasi_list_informasi_read', $this->data);
    }

    public function get_rj_informasi_edukasi_list_informasi_edit()
    {
        $this->get_list_document();
        $this->get_rj_informasi_edukasi_list_informasi_data();
        return view('page.rj.informasi_edukasi_list_informasi_edit', $this->data);
    }

    public function post_rj_informasi_edukasi_list_informasi_edit(Request $request)
    {
        //old data
        $previous_data = $request->get('previous_data');
        $previous_data = explode('-', $previous_data);
        foreach ($previous_data as $key => $value) {
            $data = RJEdukasiDiperoleh::where('id', $value)->first();
            $str_tanggal = 'tanggal_'.$value;
            $str_poliklinik = 'poliklinik_'.$value;
            $str_informasi = 'informasi_'.$value;
            $str_nama_edukator = 'nama_edukator_'.$value;
            $str_ttd_edukator = 'ttd_edukator_'.$value;
            $str_nama_sasaran = 'nama_sasaran_'.$value;
            $str_ttd_sasaran = 'ttd_sasaran_'.$value;
            $str_evaluasi = 'evaluasi_'.$value;
            $data->tanggal = $request->$str_tanggal;
            $data->poliklinik = $request->$str_poliklinik;
            $data->informasi = $request->$str_informasi;
            $data->nama_edukator = $request->$str_nama_edukator;
            if(isset($request->$str_ttd_edukator)) {
                $data->ttd_edukator = True;
            }
            else {
                $data->ttd_edukator = False;
            }
            $data->nama_sasaran = $request->$str_nama_sasaran;
            if(isset($request->$str_ttd_sasaran)) {
                $data->ttd_sasaran = True;
            }
            else {
                $data->ttd_sasaran = False;
            }
            $data->evaluasi = $request->$str_evaluasi;
            $data->save();
        }
        

        //new data
        $jumlah_form = $request->jumlah_form_new;
        $id_pasien = Session::get('id_pasien');
        for($i = 1; $i <= $jumlah_form; $i++) {
            $str_tanggal = 'tanggal_new_'.$i;
            $str_poliklinik = 'poliklinik_new_'.$i;
            $str_informasi = 'informasi_new_'.$i;
            $str_nama_edukator = 'nama_edukator_new_'.$i;
            $str_ttd_edukator = 'ttd_edukator_new_'.$i;
            $str_nama_sasaran = 'nama_sasaran_new_'.$i;
            $str_ttd_sasaran = 'ttd_sasaran_new_'.$i;
            $str_evaluasi = 'evaluasi_new_'.$i;
            if(!is_null($request->$str_tanggal)) {
                $data = new RJEdukasiDiperoleh;
                $data->id_regis = $id_pasien;
                $data->tanggal = $request->$str_tanggal;
                $data->poliklinik = $request->$str_poliklinik;
                $data->informasi = $request->$str_informasi;
                $data->nama_edukator = $request->$str_nama_edukator;
                if(isset($request->$str_ttd_edukator)) {
                    $data->ttd_edukator = True;
                }
                else {
                    $data->ttd_edukator = False;
                }
                $data->nama_sasaran = $request->$str_nama_sasaran;
                if(isset($request->$str_ttd_sasaran)) {
                    $data->ttd_sasaran = True;
                }
                else {
                    $data->ttd_sasaran = False;
                }
                $data->evaluasi = $request->$str_evaluasi;
                $data->save();
            }
        }
        return redirect('daftar_dokumen');
    }

    public function get_rj_informasi_edukasi_delete() 
    {
        $id_pasien = Session::get('id_pasien');

        // menghapus informasi edukasi list informasi
        RJInformasiEdukasi::where('id_regis', $id_pasien)->delete();

        // menghapus informasi edukasi
        RJEdukasiDiperoleh::where('id_regis', $id_pasien)->delete();

        // mengosongkan data di list dokumen
        $list_document = ListDocument::where('id_regis', $id_pasien)->first();
        $list_document->rj_informasi_edukasi = false;
        $list_document->rj_informasi_edukasi_petugas = null;
        $list_document->save();
        
        Session::put('pesan_berhasil', 'Dokumen berhasil dihapus');

        return redirect('/');
    }

    public function rj_infoedu_pdf()
    {
        $this->get_rj_informasi_edukasi_list_informasi_data();
        $this->get_rj_informasi_edukasi_data();

        ob_clean();

        header('Content-type: application/pdf');

        $mpdf = new \Mpdf\Mpdf([
        'mode' => 'utf-8', 
        'format' => 'A4-P', 
        'orientation' => 'P'
        ]);

        $view = View::make('doc_rj_infoedu',$this->data);
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
            </table> <hr>' );

        $mpdf->SetHTMLFooter('<hr>
            <table width="100%" style="vertical-align: bottom; font-family: "arial", Times, serif; 
                font-size: 8pt; color: #000000; font-weight: bold; font-style: italic;">
                <tr>
                    <td width="33%">{DATE j-m-Y}</td>
                    <td width="33%" align="center">{PAGENO}/{nbpg}</td>
                    <td width="33%" style="text-align: right;">RM. 03.00.RJ JULI 2015</td>
                </tr>
            </table>'); 

        $stylesheet = '<style>'.file_get_contents('css/pdf.css').'</style>';

        $mpdf->AddPage('P','','','','',10,10,35,20,10,10);
        //right,left
        $mpdf->WriteHTML($stylesheet, 1);
        $mpdf->WriteHTML($contents,2,true,false);

        $mpdf->Output('rj_informasi_edukasi.pdf',\Mpdf\Output\Destination::INLINE);
    }
}