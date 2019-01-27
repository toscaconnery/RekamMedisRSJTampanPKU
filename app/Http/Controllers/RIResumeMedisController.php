<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RIResumeMedis;
use App\Models\ListDocument;
use Session;
use View;

class RIResumeMedisController extends Controller
{
    public function __construct()
    {
        $this->middleware('haspatient');
        $this->data['title'] = 'Resume Rawat Inap';
    }

    public function get_ri_resume_medis()
    {
    	return view('page.ri.resume_medis', $this->data);
    }

    public function post_ri_resume_medis(Request $request)
    {
        $data = new RIResumeMedis;
        $id_pasien = Session::get('id_pasien');
        $data->id_regis = $id_pasien;
        $data->tanggal_masuk = $request->tanggal_masuk;
        $data->tanggal_keluar = $request->tanggal_keluar;
        $data->ruang_rawat_terakhir = $request->ruang_rawat_terakhir;
        $data->dpjp = $request->dpjp;
        $data->alergi = $request->alergi;
        $data->diagnosa_masuk = $request->diagnosa_masuk;
        $data->alasan_dirawat =  $request->alasan_dirawat;
        $data->hasil_pemeriksaan_penunjang = $request->hasil_pemeriksaan_penunjang;
        $data->terapi = $request->terapi;
        $data->diagnosa_psikiatri_1 = $request->diagnosa_psikiatri_1;
        $data->kode_psikiatri_1 = $request->kode_psikiatri_1;
        $data->diagnosa_non_psikiatri_1 = $request->diagnosa_non_psikiatri_1;
        $data->kode_non_psikiatri_1 = $request->kode_non_psikiatri_1;
        $data->diagnosa_psikiatri_2 = $request->diagnosa_psikiatri_2;
        $data->kode_psikiatri_2 = $request->kode_psikiatri_2;
        $data->diagnosa_non_psikiatri_2 = $request->diagnosa_non_psikiatri_2;
        $data->kode_non_psikiatri_2 = $request->kode_non_psikiatri_2;
        $data->diagnosa_psikiatri_3 = $request->diagnosa_psikiatri_3;
        $data->kode_psikiatri_3 = $request->kode_psikiatri_3;
        $data->diagnosa_non_psikiatri_3 = $request->diagnosa_non_psikiatri_3;
        $data->kode_non_psikiatri_3 = $request->kode_non_psikiatri_3;
        $data->diagnosa_psikiatri_4 = $request->diagnosa_psikiatri_4;
        $data->kode_psikiatri_4 = $request->kode_psikiatri_4;
        $data->diagnosa_non_psikiatri_4 = $request->diagnosa_non_psikiatri_4;
        $data->kode_non_psikiatri_4 = $request->kode_non_psikiatri_4;
        $data->diagnosa_psikiatri_5 = $request->diagnosa_psikiatri_5;
        $data->kode_psikiatri_5 = $request->kode_psikiatri_5;
        $data->diagnosa_non_psikiatri_5 = $request->diagnosa_non_psikiatri_5;
        $data->kode_non_psikiatri_5 = $request->kode_non_psikiatri_5;
        //tindakan_kedokteran
        $jumlah_form_tindakan = $request->jumlah_form_tindakan;
        $tindakan_kedokteran = '';
        for($i = 1; $i <= $jumlah_form_tindakan; $i++) {
            $str_tanggal = 'tanggal_'.$i;
            $str_nama_tindakan = 'nama_tindakan_'.$i;
            $str_kode_icd = 'kode_icd_'.$i;
            if(!is_null($request->$str_tanggal)) {
                $tindakan_kedokteran .= $request->$str_tanggal.'$&!^@'.$request->$str_nama_tindakan.'$&!^@'.$request->$str_kode_icd.'*&!^@';
            }
        }
        if(strlen($tindakan_kedokteran) > 0) {
            $tindakan_kedokteran = substr($tindakan_kedokteran, 0, -5);
        }
        $data->tindakan_kedokteran = $tindakan_kedokteran;
        $data->penyebab_luar = $request->penyebab_luar;
        $data->keadaan_keluar = $request->keadaan_keluar;
        $data->cara_pulang = $request->cara_pulang;
        $data->cara_pulang_lainnya = $request->cara_pulang_lainnya;
        $data->kondisi_pulang = $request->kondisi_pulang;
        $data->jam_keluar = $request->jam_keluar;
        $data->td = $request->td;
        $data->hr = $request->hr;
        $data->rr = $request->rr;
        $data->t = $request->t;
        $data->bb = $request->bb;
        //obat_dibawa_pulang
        $jumlah_form_obat = $request->jumlah_form_obat;
        $obat_dibawa_pulang = '';
        for($i = 1; $i <= $jumlah_form_obat; $i++) {
            $str_nama_obat = 'nama_obat_'.$i;
            $str_jumlah = 'jumlah_'.$i;
            $str_aturan_pakai = 'aturan_pakai_'.$i;
            $str_keterangan = 'keterangan_'.$i;
            if(!is_null($request->$str_nama_obat)) {
                $obat_dibawa_pulang .= $request->$str_nama_obat.'$&!^@'.$request->$str_jumlah.'$&!^@'.$request->$str_aturan_pakai.'$&!^@'.$request->$str_keterangan.'*&!^@';
            }
        }
        if(strlen($obat_dibawa_pulang)) {
            $obat_dibawa_pulang = substr($obat_dibawa_pulang, 0, -5);
        }
        $data->obat_dibawa_pulang = $obat_dibawa_pulang;
        $data->penyakit = $request->penyakit;
        $data->diet = $request->diet;
        $data->keterangan_diet = $request->keterangan_diet;
        $data->tempat_kontrol = $request->tempat_kontrol;
        $data->tanggal_kontrol = $request->tanggal_kontrol;
        $data->hasil_tertunda = $request->hasil_tertunda;
        $data->tanggal_pengambilan = $request->tanggal_pengambilan;
        $data->save();

        $daftar_dokumen = ListDocument::where('id_regis', $id_pasien)->get()->first();
        $daftar_dokumen->ri_resume_medis = True;
        $daftar_dokumen->save();

        return redirect("daftar_dokumen");
    }

    public function get_ri_resume_medis_data()
    {
        $pasien = RIResumeMedis::where('id', 1)->first();

        $this->data['id_regis'] = $pasien->id_regis;
        $this->data['tanggal_masuk'] = $pasien->tanggal_masuk;
        $this->data['tanggal_keluar'] = $pasien->tanggal_keluar;
        $this->data['ruang_rawat_terakhir'] = $pasien->ruang_rawat_terakhir;
        $this->data['dpjp'] = $pasien->dpjp;
        $this->data['alergi'] = $pasien->alergi;
        $this->data['diagnosa_masuk'] = $pasien->diagnosa_masuk;
        $this->data['alasan_dirawat'] = $pasien->alasan_dirawat;
        $this->data['hasil_pemeriksaan_penunjang'] = $pasien->hasil_pemeriksaan_penunjang;

        $this->data['terapi'] = $pasien->terapi;
        
        $this->data['diagnosa_psikiatri_1'] = $pasien->diagnosa_psikiatri_1;
        $this->data['kode_psikiatri_1'] = $pasien->kode_psikiatri_1;
        $this->data['diagnosa_non_psikiatri_1'] = $pasien->diagnosa_non_psikiatri_1;
        $this->data['kode_non_psikiatri_1'] = $pasien->kode_non_psikiatri_1;

        $this->data['diagnosa_psikiatri_2'] = $pasien->diagnosa_psikiatri_2;
        $this->data['kode_psikiatri_2'] = $pasien->kode_psikiatri_2;
        $this->data['diagnosa_non_psikiatri_2'] = $pasien->diagnosa_non_psikiatri_2;
        $this->data['kode_non_psikiatri_2'] = $pasien->kode_non_psikiatri_2;
        
        $this->data['diagnosa_psikiatri_3'] = $pasien->diagnosa_psikiatri_3;
        $this->data['kode_psikiatri_3'] = $pasien->kode_psikiatri_3;
        $this->data['diagnosa_non_psikiatri_3'] = $pasien->diagnosa_non_psikiatri_3;
        $this->data['kode_non_psikiatri_3'] = $pasien->kode_non_psikiatri_3;

        $this->data['diagnosa_psikiatri_4'] = $pasien->diagnosa_psikiatri_4;
        $this->data['kode_psikiatri_4'] = $pasien->kode_psikiatri_4;
        $this->data['diagnosa_non_psikiatri_4'] = $pasien->diagnosa_non_psikiatri_4;
        $this->data['kode_non_psikiatri_4'] = $pasien->kode_non_psikiatri_4;
        
        $this->data['diagnosa_psikiatri_5'] = $pasien->diagnosa_psikiatri_5;
        $this->data['kode_psikiatri_5'] = $pasien->kode_psikiatri_5;
        $this->data['diagnosa_non_psikiatri_5'] = $pasien->diagnosa_non_psikiatri_5;
        $this->data['kode_non_psikiatri_5'] = $pasien->kode_non_psikiatri_5;

        $list_tindakan_kedokteran = explode('*&!^@', $pasien->tindakan_kedokteran);
        $this->data['tindakan_kedokteran'] =  array();
        foreach ($list_tindakan_kedokteran as $key => $value) {
            $this->data['tindakan_kedokteran'][$key] = explode('$&!^@', $value);
        }
        $this->data['penyebab_luar'] = $pasien->penyebab_luar;
        $this->data['keadaan_keluar'] = $pasien->keadaan_keluar;
        $this->data['cara_pulang'] = $pasien->cara_pulang;
        $this->data['cara_pulang_lainnya'] = $pasien->cara_pulang_lainnya;
        $this->data['kondisi_pulang'] = $pasien->kondisi_pulang;
        $this->data['jam_keluar'] = $pasien->jam_keluar;
        $this->data['td'] = $pasien->td;
        $this->data['hr'] = $pasien->hr;
        $this->data['rr'] = $pasien->rr;
        $this->data['t'] = $pasien->t;
        $this->data['bb'] = $pasien->bb;

        $list_obat_dibawa_pulang = explode('*&!^@', $pasien->obat_dibawa_pulang);
        $this->data['obat_dibawa_pulang'] = array();
        foreach ($list_obat_dibawa_pulang as $key => $value) {
            $this->data['obat_dibawa_pulang'][$key] = explode('$&!^@', $value);
        }

        $this->data['penyakit'] = $pasien->penyakit;
        $this->data['diet'] = $pasien->diet;
        $this->data['keterangan_diet'] = $pasien->keterangan_diet;
        $this->data['tempat_kontrol'] = $pasien->tempat_kontrol;
        $this->data['tanggal_kontrol'] = $pasien->tanggal_kontrol;
        $this->data['hasil_tertunda'] = $pasien->hasil_tertunda;
        $this->data['tanggal_pengambilan'] = $pasien->tanggal_pengambilan;
    }

    public function get_ri_resume_medis_read(){
        $this->get_ri_resume_medis_data();
        return view('page.ri.resume_medis_read', $this->data);
    }

    public function get_ri_resume_medis_edit(){
        $this->get_ri_resume_medis_data();
        return view('page.ri.resume_medis_edit', $this->data);
    }

    public function post_ri_resume_medis_edit(Request $request)
    {
        $id_pasien = Session::get('id_pasien');
        $data = RIResumeMedis::where('id_regis', $id_pasien)->first();
        $data->id_regis = $id_pasien;
        $data->tanggal_masuk = $request->tanggal_masuk;
        $data->tanggal_keluar = $request->tanggal_keluar;
        $data->ruang_rawat_terakhir = $request->ruang_rawat_terakhir;
        $data->dpjp = $request->dpjp;
        $data->alergi = $request->alergi;
        $data->diagnosa_masuk = $request->diagnosa_masuk;
        $data->alasan_dirawat =  $request->alasan_dirawat;
        $data->hasil_pemeriksaan_penunjang = $request->hasil_pemeriksaan_penunjang;
        $data->terapi = $request->terapi;
        $data->diagnosa_psikiatri_1 = $request->diagnosa_psikiatri_1;
        $data->kode_psikiatri_1 = $request->kode_psikiatri_1;
        $data->diagnosa_non_psikiatri_1 = $request->diagnosa_non_psikiatri_1;
        $data->kode_non_psikiatri_1 = $request->kode_non_psikiatri_1;
        $data->diagnosa_psikiatri_2 = $request->diagnosa_psikiatri_2;
        $data->kode_psikiatri_2 = $request->kode_psikiatri_2;
        $data->diagnosa_non_psikiatri_2 = $request->diagnosa_non_psikiatri_2;
        $data->kode_non_psikiatri_2 = $request->kode_non_psikiatri_2;
        $data->diagnosa_psikiatri_3 = $request->diagnosa_psikiatri_3;
        $data->kode_psikiatri_3 = $request->kode_psikiatri_3;
        $data->diagnosa_non_psikiatri_3 = $request->diagnosa_non_psikiatri_3;
        $data->kode_non_psikiatri_3 = $request->kode_non_psikiatri_3;
        $data->diagnosa_psikiatri_4 = $request->diagnosa_psikiatri_4;
        $data->kode_psikiatri_4 = $request->kode_psikiatri_4;
        $data->diagnosa_non_psikiatri_4 = $request->diagnosa_non_psikiatri_4;
        $data->kode_non_psikiatri_4 = $request->kode_non_psikiatri_4;
        $data->diagnosa_psikiatri_5 = $request->diagnosa_psikiatri_5;
        $data->kode_psikiatri_5 = $request->kode_psikiatri_5;
        $data->diagnosa_non_psikiatri_5 = $request->diagnosa_non_psikiatri_5;
        $data->kode_non_psikiatri_5 = $request->kode_non_psikiatri_5;
        //tindakan_kedokteran
        $jumlah_form_tindakan = $request->jumlah_form_tindakan;
        $tindakan_kedokteran = '';
        for($i = 1; $i <= $jumlah_form_tindakan; $i++) {
            $str_tanggal = 'tanggal_'.$i;
            $str_nama_tindakan = 'nama_tindakan_'.$i;
            $str_kode_icd = 'kode_icd_'.$i;
            if(!is_null($request->$str_tanggal)) {
                $tindakan_kedokteran .= $request->$str_tanggal.'$&!^@'.$request->$str_nama_tindakan.'$&!^@'.$request->$str_kode_icd.'*&!^@';
            }
        }
        if(strlen($tindakan_kedokteran) > 0) {
            $tindakan_kedokteran = substr($tindakan_kedokteran, 0, -5);
        }
        $data->tindakan_kedokteran = $tindakan_kedokteran;
        $data->penyebab_luar = $request->penyebab_luar;
        $data->keadaan_keluar = $request->keadaan_keluar;
        $data->cara_pulang = $request->cara_pulang;
        $data->cara_pulang_lainnya = $request->cara_pulang_lainnya;
        $data->kondisi_pulang = $request->kondisi_pulang;
        $data->jam_keluar = $request->jam_keluar;
        $data->td = $request->td;
        $data->hr = $request->hr;
        $data->rr = $request->rr;
        $data->t = $request->t;
        $data->bb = $request->bb;
        //obat_dibawa_pulang
        $jumlah_form_obat = $request->jumlah_form_obat;
        $obat_dibawa_pulang = '';
        for($i = 1; $i <= $jumlah_form_obat; $i++) {
            $str_nama_obat = 'nama_obat_'.$i;
            $str_jumlah = 'jumlah_'.$i;
            $str_aturan_pakai = 'aturan_pakai_'.$i;
            $str_keterangan = 'keterangan_'.$i;
            if(!is_null($request->$str_nama_obat)) {
                $obat_dibawa_pulang .= $request->$str_nama_obat.'$&!^@'.$request->$str_jumlah.'$&!^@'.$request->$str_aturan_pakai.'$&!^@'.$request->$str_keterangan.'*&!^@';
            }
        }
        if(strlen($obat_dibawa_pulang)) {
            $obat_dibawa_pulang = substr($obat_dibawa_pulang, 0, -5);
        }
        $data->obat_dibawa_pulang = $obat_dibawa_pulang;
        $data->penyakit = $request->penyakit;
        $data->diet = $request->diet;
        $data->keterangan_diet = $request->keterangan_diet;
        $data->tempat_kontrol = $request->tempat_kontrol;
        $data->tanggal_kontrol = $request->tanggal_kontrol;
        $data->hasil_tertunda = $request->hasil_tertunda;
        $data->tanggal_pengambilan = $request->tanggal_pengambilan;
        $data->save();
        return redirect('daftar_dokumen');
    }

    public function ri_resume_pdf()
    {
        $this->get_ri_resume_medis_data();
        ob_clean();

        header('Content-type: application/pdf');

        $mpdf = new \Mpdf\Mpdf([
        'mode' => 'utf-8', 
        'format' => 'A4-L', 
        'orientation' => 'P'
        ]);

        $view = View::make('doc_ri_resume',$this->data);
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
                    <td width="33%" style="text-align: right;">RM. 01.02.RI JULI 2015</td>
                </tr>
            </table>'); 

        $stylesheet = '<style>'.file_get_contents('css/pdf.css').'</style>';

        $mpdf->AddPage('P','','','','',10,10,35,20,10,10);
        //right,left
        $mpdf->WriteHTML($stylesheet, 1);
        $mpdf->WriteHTML($contents,2,true,false);

        $mpdf->Output('ri_resume.pdf',\Mpdf\Output\Destination::INLINE);
    }
}