<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RITransferInternal;
use App\Models\ListDocument;
use Session;
use View;

class RITransferInternalController extends Controller
{
    public function __construct()
    {
    	$this->middleware('haspatient');
    	$this->data['title'] = 'Transfer Pasien Internal Rumah Sakit';
    }

    public function get_ri_transfer_internal()
    {
    	return view('page.ri.transfer_internal', $this->data);
    }

    public function post_ri_transfer_internal(Request $request)
    {
    	$id_pasien = Session::get('id_pasien');
    	$data = new RITransferInternal;
    	$data->id_regis = $id_pasien;
    	$data->tanggal_masuk = $request->tanggal_masuk;
		$data->dpjp = $request->dpjp;
		$data->dokter_konsulen_1 = $request->dokter_konsulen_1;
		$data->dokter_konsulen_2 = $request->dokter_konsulen_2;
		$data->dokter_konsulen_3 = $request->dokter_konsulen_3;
		$data->ruang_kamar = $request->ruang_kamar;
		$data->tanggal_pindah = $request->tanggal_pindah;
		$data->jam_pindah = $request->jam_pindah;
		$data->pindah_ke = $request->pindah_ke;
		$data->diagnosis_sekarang = $request->diagnosis_sekarang;
		$data->keadaan_umum = $request->keadaan_umum;
		$data->kesadaran = $request->kesadaran;
		$data->tensi = $request->tensi;
		$data->suhu = $request->suhu;
		$data->nadi = $request->nadi;
		$data->keluhan = $request->keluhan;
		$data->riwayat_penyakit = $request->riwayat_penyakit;
		$data->riwayat_alergi = $request->riwayat_alergi;
		$data->alasan_pindah = $request->alasan_pindah;
		$data->laboratorium = $request->laboratorium;
		$data->ekg = $request->ekg;
		$data->radiologi = $request->radiologi;
		$data->ct_scan = $request->ct_scan;
		$data->usg = $request->usg;
		$data->tindakan_medis = $request->tindakan_medis;
		$data->infus = $request->infus;
		$data->obat_injeksi = $request->obat_injeksi;
		$data->obat_oral = $request->obat_oral;
		$data->lain_lain = $request->lain_lain;
		$data->panss_ec = $request->panss_ec;
		$data->kategori = $request->kategori;
		$data->tanggal = $request->tanggal;
		$data->jam = $request->jam;
		$data->yang_menyerahkan = $request->yang_menyerahkan;
		$data->yang_menerima = $request->yang_menerima;
		$data->save();

    	$daftar_dokumen = ListDocument::where('id_regis', $id_pasien)->first();
        $daftar_dokumen->ri_transfer_internal = True;
        $daftar_dokumen->save();
    	return redirect('daftar_dokumen');
    }

    public function get_ri_transfer_internal_data()
    {
    	$id_pasien = Session::get('id_pasien');
    	$pasien = RITransferInternal::where('id_regis', $id_pasien)->first();
    	$this->data['id_regis'] = $id_pasien;
    	$this->data['tanggal_masuk'] = $pasien->tanggal_masuk;
		$this->data['dpjp'] = $pasien->dpjp;
		$this->data['dokter_konsulen_1'] = $pasien->dokter_konsulen_1;
		$this->data['dokter_konsulen_2'] = $pasien->dokter_konsulen_2;
		$this->data['dokter_konsulen_3'] = $pasien->dokter_konsulen_3;
		$this->data['ruang_kamar'] = $pasien->ruang_kamar;
		$this->data['tanggal_pindah'] = $pasien->tanggal_pindah;
		$this->data['jam_pindah'] = $pasien->jam_pindah;
		$this->data['pindah_ke'] = $pasien->pindah_ke;
		$this->data['diagnosis_sekarang'] = $pasien->diagnosis_sekarang;
		$this->data['keadaan_umum'] = $pasien->keadaan_umum;
		$this->data['kesadaran'] = $pasien->kesadaran;
		$this->data['tensi'] = $pasien->tensi;
		$this->data['suhu'] = $pasien->suhu;
		$this->data['nadi'] = $pasien->nadi;
		$this->data['keluhan'] = $pasien->keluhan;
		$this->data['riwayat_penyakit'] = $pasien->riwayat_penyakit;
		$this->data['riwayat_alergi'] = $pasien->riwayat_alergi;
		$this->data['alasan_pindah'] = $pasien->alasan_pindah;
		$this->data['laboratorium'] = $pasien->laboratorium;
		$this->data['ekg'] = $pasien->ekg;
		$this->data['radiologi'] = $pasien->radiologi;
		$this->data['ct_scan'] = $pasien->ct_scan;
		$this->data['usg'] = $pasien->usg;
		$this->data['tindakan_medis'] = $pasien->tindakan_medis;
		$this->data['infus'] = $pasien->infus;
		$this->data['obat_injeksi'] = $pasien->obat_injeksi;
		$this->data['obat_oral'] = $pasien->obat_oral;
		$this->data['lain_lain'] = $pasien->lain_lain;
		$this->data['panss_ec'] = $pasien->panss_ec;
		$this->data['kategori'] = $pasien->kategori;
		$this->data['tanggal'] = $pasien->tanggal;
		$this->data['jam'] = $pasien->jam;
		$this->data['yang_menyerahkan'] = $pasien->yang_menyerahkan;
		$this->data['yang_menerima'] = $pasien->yang_menerima;
    }

    public function get_ri_transfer_internal_read()
    {
    	$this->get_ri_transfer_internal_data();
    	return view('page.ri.transfer_internal_read', $this->data);
    }

    public function get_ri_transfer_internal_edit()
    {
    	$this->get_ri_transfer_internal_data();
    	return view('page.ri.transfer_internal_edit', $this->data);
    }

    public function post_ri_transfer_internal_edit(Request $request)
    {
    	$id_pasien = Session::get('id_pasien');
    	$data = RITransferInternal::where('id_regis', $id_pasien)->first();
    	$data->tanggal_masuk = $request->tanggal_masuk;
		$data->dpjp = $request->dpjp;
		$data->dokter_konsulen_1 = $request->dokter_konsulen_1;
		$data->dokter_konsulen_2 = $request->dokter_konsulen_2;
		$data->dokter_konsulen_3 = $request->dokter_konsulen_3;
		$data->ruang_kamar = $request->ruang_kamar;
		$data->tanggal_pindah = $request->tanggal_pindah;
		$data->jam_pindah = $request->jam_pindah;
		$data->pindah_ke = $request->pindah_ke;
		$data->diagnosis_sekarang = $request->diagnosis_sekarang;
		$data->keadaan_umum = $request->keadaan_umum;
		$data->kesadaran = $request->kesadaran;
		$data->tensi = $request->tensi;
		$data->suhu = $request->suhu;
		$data->nadi = $request->nadi;
		$data->keluhan = $request->keluhan;
		$data->riwayat_penyakit = $request->riwayat_penyakit;
		$data->riwayat_alergi = $request->riwayat_alergi;
		$data->alasan_pindah = $request->alasan_pindah;
		$data->laboratorium = $request->laboratorium;
		$data->ekg = $request->ekg;
		$data->radiologi = $request->radiologi;
		$data->ct_scan = $request->ct_scan;
		$data->usg = $request->usg;
		$data->tindakan_medis = $request->tindakan_medis;
		$data->infus = $request->infus;
		$data->obat_injeksi = $request->obat_injeksi;
		$data->obat_oral = $request->obat_oral;
		$data->lain_lain = $request->lain_lain;
		$data->panss_ec = $request->panss_ec;
		$data->kategori = $request->kategori;
		$data->tanggal = $request->tanggal;
		$data->jam = $request->jam;
		$data->yang_menyerahkan = $request->yang_menyerahkan;
		$data->yang_menerima = $request->yang_menerima;
		$data->save();
    	return redirect('daftar_dokumen');
    }

    public function ri_internal_pdf()
    {
    	$this->get_ri_transfer_internal_data();

        ob_clean();

        header('Content-type: application/pdf');

        $mpdf = new \Mpdf\Mpdf([
        'mode' => 'utf-8', 
        'format' => 'A4-L', 
        'orientation' => 'P'
        ]);

        $view = View::make('doc_ri_internal',$this->data);
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
                    <td width="33%" style="text-align: right;">RM. 34.00.RI JULI 2015</td>
                </tr>
            </table>'); 

        $stylesheet = '<style>'.file_get_contents('css/pdf.css').'</style>';

        $mpdf->AddPage('P','','','','',10,10,35,20,10,10);
        //right,left
        $mpdf->WriteHTML($stylesheet, 1);
        $mpdf->WriteHTML($contents,2,true,false);

        $mpdf->Output('ri_internal',\Mpdf\Output\Destination::INLINE);
    }
}
