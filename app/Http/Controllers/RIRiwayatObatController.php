<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RIRiwayatObat;
use App\Models\ListDocument;
use Session;
use View;

class RIRiwayatObatController extends Controller
{
	public function __construct()
	{
    	$this->data['title'] = 'Riwayat Penggunaan Obat (Rekonsiliasi Obat)';
	}

	public function get_ri_riwayat_obat()
	{
		return view('page.ri.riwayat_obat',$this->data);
	}

	public function post_ri_riwayat_obat(Request $request)
	{
		$data = new RIRiwayatObat;
		$id_pasien = Session::get('id_pasien');
		$data->id_regis = $id_pasien;
        $data->field1 = $request->field1;
        $data->field2 = $request->field2;
        $data->field3 = $request->field3;
        if(isset($request->field4)) {
            $data->field4 = 1;
        }
        else {
            $data->field4 = 0;
        }
        $data->field5 = $request->field5;
        $data->field6 = $request->field6;
        $data->field7 = $request->field7;
        $data->field8 = $request->field8;
        $data->field9 = $request->field9;
        $data->field10 = $request->field10;
        $data->field11 = $request->field11;
        $data->field12 = $request->field12;
        $data->field13 = $request->field13;

		$resep = '';
        $non_resep = '';
        $jumlah_form_resep = $request->jumlah_form_resep;
        $jumlah_form_non_resep = $request->jumlah_form_non_resep;

        for($i = 1; $i <= $jumlah_form_resep; $i++) {
            $str_1 = 'nama_generik_'.$i;
            $str_2 = 'nama_dagang_'.$i;
            $str_3 = 'regimen_'.$i;
            $str_4 = 'sumber_obat_'.$i;
            $str_5 = 'tgl_mulai_'.$i;
            $str_6 = 'tgl_stop_'.$i;
            $str_7 = 'jml_obat_tersisa_'.$i;
            $str_8 = 'status_admisi_'.$i;
            $str_9 = 'status_pulang_'.$i;
            $str_10 = 'catatan_'.$i;
            if(!empty($request->$str_1) || !empty($request->$str_2)) {
                $resep .= $request->$str_1."#&!^@".$request->$str_2."#&!^@".$request->$str_3."#&!^@".$request->$str_4."#&!^@".$request->$str_5."#&!^@".$request->$str_6."#&!^@".$request->$str_7."#&!^@".$request->$str_8."#&!^@".$request->$str_9."#&!^@".$request->$str_10."$&!^@";
            }
        }
        if(strlen($resep) > 0) {
            $resep = substr($resep, 0, -5);
        }
        $data->resep = $resep;


        for($i = 1; $i <= $jumlah_form_non_resep; $i++) {
            $str_1 = 'nama_generik_non_'.$i;
            $str_2 = 'nama_dagang_non_'.$i;
            $str_3 = 'regimen_non_'.$i;
            $str_4 = 'sumber_obat_non_'.$i;
            $str_5 = 'tgl_mulai_non_'.$i;
            $str_6 = 'tgl_stop_non_'.$i;
            $str_7 = 'jml_obat_tersisa_non_'.$i;
            $str_8 = 'status_admisi_non_'.$i;
            $str_9 = 'status_pulang_non_'.$i;
            $str_10 = 'catatan_non_'.$i;
            if(!empty($request->$str_1) || !empty($request->$str_2)) {
                $non_resep .= $request->$str_1."#&!^@".$request->$str_2."#&!^@".$request->$str_3."#&!^@".$request->$str_4."#&!^@".$request->$str_5."#&!^@".$request->$str_6."#&!^@".$request->$str_7."#&!^@".$request->$str_8."#&!^@".$request->$str_9."#&!^@".$request->$str_10."$&!^@";
            }
        }
        if(strlen($non_resep) > 0) {
            $non_resep = substr($non_resep, 0, -5);
        }
        $data->nonresep = $non_resep;
		$data->save();

		$daftar_dokumen = ListDocument::where('id_regis', $id_pasien)->first();
        $daftar_dokumen->ri_riwayat_obat = True;
        $daftar_dokumen->save();
		return redirect('ri_riwayat_obat_read');
	}

    public function get_ri_riwayat_obat_data()
    {
        $id_pasien = Session::get('id_pasien');
        $pasien = RIRiwayatObat::where('id_regis', $id_pasien)->first();
        $this->data['field1'] = $pasien->field1;
        $this->data['field2'] = $pasien->field2;
        $this->data['field3'] = $pasien->field3;
        $this->data['field4'] = $pasien->field4;
        $this->data['field5'] = $pasien->field5;
        $this->data['field6'] = $pasien->field6;
        $this->data['field7'] = $pasien->field7;
        $this->data['field8'] = $pasien->field8;
        $this->data['field9'] = $pasien->field9;
        $this->data['field10'] = $pasien->field10;
        $this->data['field11'] = $pasien->field11;
        $this->data['field12'] = $pasien->field12;
        $this->data['field13'] = $pasien->field13;
        $resep = explode('$&!^@', $pasien->resep);
        $this->data['resep'] = array();
        foreach ($resep as $key => $value) {
            $temp = explode('#&!^@', $value);
            $this->data['resep'][$key] = $temp;
        }

        $nonresep = explode('$&!^@', $pasien->nonresep);
        $this->data['nonresep'] = array();
        foreach ($resep as $key => $value) {
            $temp = explode('#&!^@', $value);
            $this->data['nonresep'][$key] = $temp;
        }
        // dd($this->data['resep']);
    }

    public function get_ri_riwayat_obat_read()
    {
        $this->get_ri_riwayat_obat_data();
        return view('page.ri.riwayat_obat_read', $this->data);
    }

    public function get_ri_riwayat_obat_edit()
    {
        $this->get_ri_riwayat_obat_data();
        return view('page.ri.riwayat_obat_edit', $this->data);
    }

    public function post_ri_riwayat_obat_edit(Request $request) {
        $id_pasien = Session::get('id_pasien');
        $data = RIRiwayatObat::where('id_regis', $id_pasien)->first();
        $data->field1 = $request->field1;
        $data->field2 = $request->field2;
        $data->field3 = $request->field3;
        if(isset($request->field4)) {
            $data->field4 = 1;
        }
        else {
            $data->field4 = 0;
        }
        $data->field5 = $request->field5;
        $data->field6 = $request->field6;
        $data->field7 = $request->field7;
        $data->field8 = $request->field8;
        $data->field9 = $request->field9;
        $data->field10 = $request->field10;
        $data->field11 = $request->field11;
        $data->field12 = $request->field12;
        $data->field13 = $request->field13;

        $resep = '';
        $non_resep = '';
        $jumlah_form_resep = $request->jumlah_form_resep;
        $jumlah_form_non_resep = $request->jumlah_form_non_resep;

        for($i = 1; $i <= $jumlah_form_resep; $i++) {
            $str_1 = 'nama_generik_'.$i;
            $str_2 = 'nama_dagang_'.$i;
            $str_3 = 'regimen_'.$i;
            $str_4 = 'sumber_obat_'.$i;
            $str_5 = 'tgl_mulai_'.$i;
            $str_6 = 'tgl_stop_'.$i;
            $str_7 = 'jml_obat_tersisa_'.$i;
            $str_8 = 'status_admisi_'.$i;
            $str_9 = 'status_pulang_'.$i;
            $str_10 = 'catatan_'.$i;
            if(!empty($request->$str_1) || !empty($request->$str_2)) {
                $resep .= $request->$str_1."#&!^@".$request->$str_2."#&!^@".$request->$str_3."#&!^@".$request->$str_4."#&!^@".$request->$str_5."#&!^@".$request->$str_6."#&!^@".$request->$str_7."#&!^@".$request->$str_8."#&!^@".$request->$str_9."#&!^@".$request->$str_10."$&!^@";
            }
        }
        if(strlen($resep) > 0) {
            $resep = substr($resep, 0, -5);
        }
        $data->resep = $resep;


        for($i = 1; $i <= $jumlah_form_non_resep; $i++) {
            $str_1 = 'nama_generik_non_'.$i;
            $str_2 = 'nama_dagang_non_'.$i;
            $str_3 = 'regimen_non_'.$i;
            $str_4 = 'sumber_obat_non_'.$i;
            $str_5 = 'tgl_mulai_non_'.$i;
            $str_6 = 'tgl_stop_non_'.$i;
            $str_7 = 'jml_obat_tersisa_non_'.$i;
            $str_8 = 'status_admisi_non_'.$i;
            $str_9 = 'status_pulang_non_'.$i;
            $str_10 = 'catatan_non_'.$i;
            if(!empty($request->$str_1) || !empty($request->$str_2)) {
                $non_resep .= $request->$str_1."#&!^@".$request->$str_2."#&!^@".$request->$str_3."#&!^@".$request->$str_4."#&!^@".$request->$str_5."#&!^@".$request->$str_6."#&!^@".$request->$str_7."#&!^@".$request->$str_8."#&!^@".$request->$str_9."#&!^@".$request->$str_10."$&!^@";
            }
        }
        if(strlen($non_resep) > 0) {
            $non_resep = substr($non_resep, 0, -5);
        }
        $data->nonresep = $non_resep;
        $data->save();

        return redirect('ri_riwayat_obat_read');
    }

    public function ri_rekonsiliasi_pdf()
    {
        $this->get_ri_riwayat_obat_data();
        ob_clean();

        header('Content-type: application/pdf');

        $mpdf = new \Mpdf\Mpdf([
        'mode' => 'utf-8', 
        'format' => 'A4-L', 
        'orientation' => 'L'
        ]);

        $view = View::make('doc_ri_rekonsiliasi',$this->data);
        $contents = $view->render();


        $mpdf->SetHTMLHeader('

            <table width="100%" >
                <tbody>
                        <tr>

                            <td class= "doc_lheaderleft">
                                <img class="relative" src="img/riau.png" height="6%" width="4%">
                            </td>

                            <td class="doc_lheadermid">
                                <p style="font-size:120%;" ><b>Pemerintah Provinsi Riau</b></p>
                                <br><p style="font-size:160%;" ><b>RUMAH SAKIT JIWA TAMPAN</b></p>
                                <br><p style="font-size:90%;" >Jl. H. R. Soebrantas Km. 12,5 Pekanbaru Telp. (0761) 63240</p>
                                <p style="font-size:90%;" >Fax. (0761) 63239 E-mail : rstampan@yahoo.com</p>
                            </td>
                            
                            <td class="doc_lheaderright">
                            <p>No. RM           </p><br>
                            <p>Nama Pasien      </p><br>
                            <p>Tanggal Lahir    </p><br>
                            <p>Jenis Kelamin    </p><br>
                            </td>    

                            <td class="doc_lheaderright_ans">
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
                    <td width="33%" style="text-align: right;">RM. 27.00.RI JULI 2015</td>
                </tr>
            </table>'); 

        $stylesheet = '<style>'.file_get_contents('css/pdf.css').'</style>';

        $mpdf->AddPage('L','','','','',10,10,35,20,10,10);
        //right,left
        $mpdf->WriteHTML($stylesheet, 1);
        $mpdf->WriteHTML($contents,2,true,false);

        $mpdf->Output('ri_rekonsiliasi.pdf',\Mpdf\Output\Destination::INLINE);
    }
}