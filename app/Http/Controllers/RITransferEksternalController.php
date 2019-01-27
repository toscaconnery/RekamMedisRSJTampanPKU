<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RITransferEksternal;
use App\Models\ListDocument;
use Session;
use View;

class RITransferEksternalController extends Controller
{
    public function __construct()
    {
        $this->middleware('haspatient');
    	$this->data['title'] = 'Transfer Pasien Eksternal Rumah Sakit';
    }

    public function get_ri_transfer_eksternal()
    {
    	return view('page.ri.transfer_eksternal', $this->data);
    }

    public function post_ri_transfer_eksternal(Request $request)
    {
        $id_pasien = Session::get('id_pasien');
        $data = new RITransferEksternal;
        $data->id_regis = $id_pasien;
        $data->nomor = $request->nomor;
        $data->rs_tujuan = $request->rs_tujuan;
        $data->petugas_dihubungi = $request->petugas_dihubungi;
        $data->tanggal_dihubungi = $request->tanggal_dihubungi;
        $data->jam_dihubungi = $request->jam_dihubungi;
        $data->alasan_transfer = $request->alasan_transfer;
        $data->tanggal_transfer = $request->tanggal_transfer;
        $data->jam_transfer = $request->jam_transfer;
        $data->atas_permintaan = $request->atas_permintaan;
        $data->kategori_pasien = $request->kategori_pasien;
        $petugas_pendamping = '';
        if(isset($request->petugas_pendamping_1)) {
            $petugas_pendamping .= '1-';
        }
        if(isset($request->petugas_pendamping_2)) {
            $petugas_pendamping .= '2-';
        }
        if(isset($request->petugas_pendamping_3)) {
            $petugas_pendamping .= '3-';
        }
        if(isset($request->petugas_pendamping_4)) {
            $petugas_pendamping .= '4-';
        }
        if(isset($request->petugas_pendamping_5)) {
            $petugas_pendamping .= '5-';
        }
        if(isset($request->petugas_pendamping_6)) {
            $petugas_pendamping .= '6-';
        }
        if(isset($request->petugas_pendamping_7)) {
            $petugas_pendamping .= '7-';
        }
        if(isset($request->petugas_pendamping_8)) {
            $petugas_pendamping .= '8-';
        }
        if(isset($request->petugas_pendamping_9)) {
            $petugas_pendamping .= '9-';
        }
        if(isset($request->petugas_pendamping_10)) {
            $petugas_pendamping .= '10-';
        }
        if(isset($request->petugas_pendamping_11)) {
            $petugas_pendamping .= '11-';
        }
        if(isset($request->petugas_pendamping_12)) {
            $petugas_pendamping .= '12-';
        }
        if(isset($request->petugas_pendamping_13)) {
            $petugas_pendamping .= '13-';
        }
        if(strlen($petugas_pendamping) > 0) {
            $petugas_pendamping = substr($petugas_pendamping, 0, -1);
        }
        $data->petugas_pendamping = $petugas_pendamping;
        $data->tanggal_masuk_rs = $request->tanggal_masuk_rs;
        $data->anamnesa = $request->anamnesa;
        $data->diagnosa = $request->diagnosa;
        $data->indikasi_dirawat = $request->indikasi_dirawat;
        $data->tindakan_dilakukan = $request->tindakan_dilakukan;
        $data->terapi_diberikan = $request->terapi_diberikan;
        $data->resiko = $request->resiko;
        $data->transportasi = $request->transportasi;
        $data->nama_dokter = $request->nama_dokter;
        $data->jam_sebelum = $request->jam_sebelum;
        $data->keadaan_umum_sebelum = $request->keadaan_umum_sebelum;
        $data->td_sebelum = $request->td_sebelum;
        $data->hr_sebelum = $request->hr_sebelum;
        $data->rr_sebelum = $request->rr_sebelum;
        $data->suhu_sebelum = $request->suhu_sebelum;
        $data->spo2_sebelum = $request->spo2_sebelum;
        $data->lainnya_sebelum = $request->lainnya_sebelum;
        $data->keterangan_sebelum = $request->keterangan_sebelum;
        $data->jam_selama = $request->jam_selama;
        $data->keadaan_umum_selama = $request->keadaan_umum_selama;
        $data->td_selama = $request->td_selama;
        $data->hr_selama = $request->hr_selama;
        $data->rr_selama = $request->rr_selama;
        $data->suhu_selama = $request->suhu_selama;
        $data->spo2_selama = $request->spo2_selama;
        $data->lainnya_selama = $request->lainnya_selama;
        $data->keterangan_selama = $request->keterangan_selama;
        $data->jam_setelah = $request->jam_setelah;
        $data->keadaan_umum_setelah = $request->keadaan_umum_setelah;
        $data->td_setelah = $request->td_setelah;
        $data->hr_setelah = $request->hr_setelah;
        $data->rr_setelah = $request->rr_setelah;
        $data->suhu_setelah = $request->suhu_setelah;
        $data->spo2_setelah = $request->spo2_setelah;
        $data->lainnya_setelah = $request->lainnya_setelah;
        $data->keterangan_setelah = $request->keterangan_setelah;
        $data->nama_petugas_menyerahkan = $request->nama_petugas_menyerahkan;
        $data->nama_petugas_penerima = $request->nama_petugas_penerima;
        $data->tanggal = $request->tanggal;
        $data->jam = $request->jam;
        $data->rs = $request->rs;
        $data->save();

        $daftar_dokumen = ListDocument::where('id_regis', $id_pasien)->first();
        $daftar_dokumen->ri_transfer_eksternal = True;
        $daftar_dokumen->save();
        return redirect('daftar_dokumen');
    }

    public function get_ri_transfer_eksternal_data()
    {
        $id_pasien = Session::get('id_pasien');
    	$pasien = RITransferEksternal::where('id_regis', $id_pasien)->first();
        $this->data['nomor'] = $pasien->nomor;
        $this->data['rs_tujuan'] = $pasien->rs_tujuan;
        $this->data['petugas_dihubungi'] = $pasien->petugas_dihubungi;
        $this->data['tanggal_dihubungi'] = $pasien->tanggal_dihubungi;
        $this->data['jam_dihubungi'] = $pasien->jam_dihubungi;
        $this->data['alasan_transfer'] = $pasien->alasan_transfer;
        $this->data['tanggal_transfer'] = $pasien->tanggal_transfer;
        $this->data['jam_transfer'] = $pasien->jam_transfer;
        $this->data['atas_permintaan'] = $pasien->atas_permintaan;
        $this->data['kategori_pasien'] = $pasien->kategori_pasien;

        $this->data['petugas_pendamping'] = array();
        $petugas_pendamping = explode('-', $pasien->petugas_pendamping);
        foreach ($petugas_pendamping as $key => $value) {
            $this->data['petugas_pendamping'][$value] = True;
        }
        $this->data['tanggal_masuk_rs'] = $pasien->tanggal_masuk_rs;
        $this->data['anamnesa'] = $pasien->anamnesa;
        $this->data['diagnosa'] = $pasien->diagnosa;
        $this->data['indikasi_dirawat'] = $pasien->indikasi_dirawat;
        $this->data['tindakan_dilakukan'] = $pasien->tindakan_dilakukan;
        $this->data['terapi_diberikan'] = $pasien->terapi_diberikan;
        $this->data['resiko'] = $pasien->resiko;
        $this->data['transportasi'] = $pasien->transportasi;
        $this->data['nama_dokter'] = $pasien->nama_dokter;
        $this->data['jam_sebelum'] = $pasien->jam_sebelum;
        $this->data['keadaan_umum_sebelum'] = $pasien->keadaan_umum_sebelum;
        $this->data['td_sebelum'] = $pasien->td_sebelum;
        $this->data['hr_sebelum'] = $pasien->hr_sebelum;
        $this->data['rr_sebelum'] = $pasien->rr_sebelum;
        $this->data['suhu_sebelum'] = $pasien->suhu_sebelum;
        $this->data['spo2_sebelum'] = $pasien->spo2_sebelum;
        $this->data['lainnya_sebelum'] = $pasien->lainnya_sebelum;
        $this->data['keterangan_sebelum'] = $pasien->keterangan_sebelum;
        $this->data['jam_selama'] = $pasien->jam_selama;
        $this->data['keadaan_umum_selama'] = $pasien->keadaan_umum_selama;
        $this->data['td_selama'] = $pasien->td_selama;
        $this->data['hr_selama'] = $pasien->hr_selama;
        $this->data['rr_selama'] = $pasien->rr_selama;
        $this->data['suhu_selama'] = $pasien->suhu_selama;
        $this->data['spo2_selama'] = $pasien->spo2_selama;
        $this->data['lainnya_selama'] = $pasien->lainnya_selama;
        $this->data['keterangan_selama'] = $pasien->keterangan_selama;
        $this->data['jam_setelah'] = $pasien->jam_setelah;
        $this->data['keadaan_umum_setelah'] = $pasien->keadaan_umum_setelah;
        $this->data['td_setelah'] = $pasien->td_setelah;
        $this->data['hr_setelah'] = $pasien->hr_setelah;
        $this->data['rr_setelah'] = $pasien->rr_setelah;
        $this->data['suhu_setelah'] = $pasien->suhu_setelah;
        $this->data['spo2_setelah'] = $pasien->spo2_setelah;
        $this->data['lainnya_setelah'] = $pasien->lainnya_setelah;
        $this->data['keterangan_setelah'] = $pasien->keterangan_setelah;
        $this->data['nama_petugas_menyerahkan'] = $pasien->nama_petugas_menyerahkan;
        $this->data['nama_petugas_penerima'] = $pasien->nama_petugas_penerima;
        $this->data['tanggal'] = $pasien->tanggal;
        $this->data['jam'] = $pasien->jam;
        $this->data['rs'] = $pasien->rs;

    }

    public function get_ri_transfer_eksternal_read()
    {
    	$this->get_ri_transfer_eksternal_data();
    	return view('page.ri.transfer_eksternal_read', $this->data);
    }

    public function get_ri_transfer_eksternal_edit()
    {
    	$this->get_ri_transfer_eksternal_data();
    	return view('page.ri.transfer_eksternal_edit', $this->data);
    }

    public function post_ri_transfer_eksternal_edit(Request $request)
    {
        $id_pasien = Session::get('id_pasien');
        $data = RITransferEksternal::where('id_regis', $id_pasien)->first();
        $data->nomor = $request->nomor;
        $data->rs_tujuan = $request->rs_tujuan;
        $data->petugas_dihubungi = $request->petugas_dihubungi;
        $data->tanggal_dihubungi = $request->tanggal_dihubungi;
        $data->jam_dihubungi = $request->jam_dihubungi;
        $data->alasan_transfer = $request->alasan_transfer;
        $data->tanggal_transfer = $request->tanggal_transfer;
        $data->jam_transfer = $request->jam_transfer;
        $data->atas_permintaan = $request->atas_permintaan;
        $data->kategori_pasien = $request->kategori_pasien;
        $petugas_pendamping = '';
        if(isset($request->petugas_pendamping_1)) {
            $petugas_pendamping .= '1-';
        }
        if(isset($request->petugas_pendamping_2)) {
            $petugas_pendamping .= '2-';
        }
        if(isset($request->petugas_pendamping_3)) {
            $petugas_pendamping .= '3-';
        }
        if(isset($request->petugas_pendamping_4)) {
            $petugas_pendamping .= '4-';
        }
        if(isset($request->petugas_pendamping_5)) {
            $petugas_pendamping .= '5-';
        }
        if(isset($request->petugas_pendamping_6)) {
            $petugas_pendamping .= '6-';
        }
        if(isset($request->petugas_pendamping_7)) {
            $petugas_pendamping .= '7-';
        }
        if(isset($request->petugas_pendamping_8)) {
            $petugas_pendamping .= '8-';
        }
        if(isset($request->petugas_pendamping_9)) {
            $petugas_pendamping .= '9-';
        }
        if(isset($request->petugas_pendamping_10)) {
            $petugas_pendamping .= '10-';
        }
        if(isset($request->petugas_pendamping_11)) {
            $petugas_pendamping .= '11-';
        }
        if(isset($request->petugas_pendamping_12)) {
            $petugas_pendamping .= '12-';
        }
        if(isset($request->petugas_pendamping_13)) {
            $petugas_pendamping .= '13-';
        }
        if(strlen($petugas_pendamping) > 0) {
            $petugas_pendamping = substr($petugas_pendamping, 0, -1);
        }
        $data->petugas_pendamping = $petugas_pendamping;
        $data->tanggal_masuk_rs = $request->tanggal_masuk_rs;
        $data->anamnesa = $request->anamnesa;
        $data->diagnosa = $request->diagnosa;
        $data->indikasi_dirawat = $request->indikasi_dirawat;
        $data->tindakan_dilakukan = $request->tindakan_dilakukan;
        $data->terapi_diberikan = $request->terapi_diberikan;
        $data->resiko = $request->resiko;
        $data->transportasi = $request->transportasi;
        $data->nama_dokter = $request->nama_dokter;
        $data->jam_sebelum = $request->jam_sebelum;
        $data->keadaan_umum_sebelum = $request->keadaan_umum_sebelum;
        $data->td_sebelum = $request->td_sebelum;
        $data->hr_sebelum = $request->hr_sebelum;
        $data->rr_sebelum = $request->rr_sebelum;
        $data->suhu_sebelum = $request->suhu_sebelum;
        $data->spo2_sebelum = $request->spo2_sebelum;
        $data->lainnya_sebelum = $request->lainnya_sebelum;
        $data->keterangan_sebelum = $request->keterangan_sebelum;
        $data->jam_selama = $request->jam_selama;
        $data->keadaan_umum_selama = $request->keadaan_umum_selama;
        $data->td_selama = $request->td_selama;
        $data->hr_selama = $request->hr_selama;
        $data->rr_selama = $request->rr_selama;
        $data->suhu_selama = $request->suhu_selama;
        $data->spo2_selama = $request->spo2_selama;
        $data->lainnya_selama = $request->lainnya_selama;
        $data->keterangan_selama = $request->keterangan_selama;
        $data->jam_setelah = $request->jam_setelah;
        $data->keadaan_umum_setelah = $request->keadaan_umum_setelah;
        $data->td_setelah = $request->td_setelah;
        $data->hr_setelah = $request->hr_setelah;
        $data->rr_setelah = $request->rr_setelah;
        $data->suhu_setelah = $request->suhu_setelah;
        $data->spo2_setelah = $request->spo2_setelah;
        $data->lainnya_setelah = $request->lainnya_setelah;
        $data->keterangan_setelah = $request->keterangan_setelah;
        $data->nama_petugas_menyerahkan = $request->nama_petugas_menyerahkan;
        $data->nama_petugas_penerima = $request->nama_petugas_penerima;
        $data->tanggal = $request->tanggal;
        $data->jam = $request->jam;
        $data->rs = $request->rs;
        $data->save();
    	return redirect('daftar_dokumen');
    }

    public function ri_eksternal_pdf()
    {
        $this->get_ri_transfer_eksternal_data();

        if($this->data['alasan_transfer'] =='1')
        {
            $this->data['alasan_transfer'] = 'Alih Rawat'; 
        }
        else if ($this->data['alasan_transfer'] == '2') {
            $this->data['alasan_transfer'] = 'Rujuk'; 
        }
        else {
            $this->data['alasan_transfer'] = 'Lainnya'; 
        }

        //
        if($this->data['atas_permintaan'] =='1')
        {
            $this->data['atas_permintaan'] = 'Dokter'; 
        }
        else {
            $this->data['atas_permintaan'] = 'Pasien/Keluarga'; 
        }

        //
        if($this->data['transportasi'] =='1')
        {
            $this->data['transportasi'] = 'Ambulance'; 
        }
        else if ($this->data['transportasi'] == '2') {
            $this->data['transportasi'] = 'Mobil Pribadi'; 
        }
        else if ($this->data['transportasi'] == '3') {
            $this->data['transportasi'] = 'Taxi'; 
        }
        else if ($this->data['transportasi'] == '4') {
            $this->data['transportasi'] = 'Angkutan Umum'; 
        }
        else {
            $this->data['transportasi'] = 'Lainnya'; 
        }

        $this->data['kategori_pasien'] = 'Level ' . $this->data['kategori_pasien'];

        ob_clean();

        header('Content-type: application/pdf');

        $mpdf = new \Mpdf\Mpdf([
        'mode' => 'utf-8', 
        'format' => 'A4-L', 
        'orientation' => 'P'
        ]);

        $view = View::make('doc_ri_eksternal',$this->data);
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
                    <td width="33%" style="text-align: right;">RM. 35.00.RI JULI 2015</td>
                </tr>
            </table>'); 

        $stylesheet = '<style>'.file_get_contents('css/pdf.css').'</style>';

        $mpdf->AddPage('P','','','','',10,10,35,20,10,10);
        //right,left
        $mpdf->WriteHTML($stylesheet, 1);
        $mpdf->WriteHTML($contents,2,true,false);

        $mpdf->Output('ri_eksternal',\Mpdf\Output\Destination::INLINE);
    }
}
