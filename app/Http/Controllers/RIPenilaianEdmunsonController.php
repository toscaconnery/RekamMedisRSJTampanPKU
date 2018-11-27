<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RIPenilaianEdmunson;
use App\Models\ListDocument;
use Session;
use DateTime;
use View;

class RIPenilaianEdmunsonController extends Controller
{

	public function __construct()
	{
		$this->data['title'] = 'Penilaian Edmunson';
	}

    public function get_ri_penilaian_edmunson()
    {
    	return view('page.ri.penilaian_edmunson', $this->data);
    }

    public function post_ri_penilaian_edmunson(Request $request)
    {	/////////////////////////////////
    	//note: usia belum diperhitungkan, usia juga masuk dalam perhitungan nilai total
    	/////////////////////////////////
    	$data = new RIPenilaianEdmunson;
        $id_pasien = Session::get('id_pasien');
    	$data->id_regis = $id_pasien;
        $data->status_mental = $request->status_mental;
        $data->eliminasi = $request->eliminasi;
        $data->pengobatan = $request->pengobatan;
        $data->diagnosa = $request->diagnosa;
        $data->ambulasi = $request->ambulasi;
        $data->nutrisi = $request->nutrisi;
        $data->gangguan_pola_tidur = $request->gangguan_pola_tidur;
        $data->riwayat_jatuh = $request->riwayat_jatuh;

        $total = 0;
        //tanggal lahir
        $tanggal_lahir = Session::get('tanggal_lahir');
        $tanggal = substr($tanggal_lahir, 0, -8);
        $bulan = substr($tanggal_lahir, 3, -5);
        $tahun = substr($tanggal_lahir, 6);
        $born = new DateTime($tahun.'-'.$bulan.'-'.$tanggal);
        $today = new DateTime();
        $usia = $born->diff($today)->y;
    	$data->usia = $usia;
        if($usia < 50) {
            $total += 8;
        }
        elseif($usia <= 70) {
            $total += 10;
        }
        elseif($usia > 70) {
            $total += 26;
        }
        // dd($tanggal_lahir, $today, $tanggal, $bulan, $tahun, $born, $usia);

        //status mental
        if($request->status_mental == 1) {
            $total += 4;
        }
        elseif($request->status_mental == 2) {
            $total += 12;
        }
        elseif($request->status_mental == 3) {
            $total += 13;
        }
        elseif($request->status_mental == 4) {
            $total += 14;
        }

        //eliminasi
        if($request->eliminasi == 1) {
            $total += 8;
        }
        elseif($request->eliminasi == 2) {
            $total += 12;
        }
        elseif($request->eliminasi == 3) {
            $total += 10;
        }
        elseif($request->eliminasi == 4) {
            $total += 12;
        }
        elseif($request->eliminasi == 5) {
            $total += 12;
        }

        //pengobatan
        if($request->pengobatan == 1) {
            $total += 10;
        }
        elseif($request->pengobatan == 2) {
            $total += 10;
        }
        elseif($request->pengobatan == 3) {
            $total += 8;
        }
        elseif($request->pengobatan == 4) {
            $total += 12;
        }

        //diagnosa
        if($request->diagnosa == 1) {
            $total += 10;
        }
        elseif($request->diagnosa == 2) {
            $total += 8;
        }
        elseif($request->diagnosa == 3) {
            $total += 10;
        }
        elseif($request->diagnosa == 4) {
            $total += 12;
        }

        //ambulasi
        if($request->ambulasi == 1) {
            $total += 7;
        }
        elseif($request->ambulasi == 2) {
            $total += 8;
        }
        elseif($request->ambulasi == 3) {
            $total += 10;
        }
        elseif($request->ambulasi == 4) {
            $total += 8;
        }
        elseif($request->ambulasi == 5) {
            $total += 15;
        }
        
        //nutrisi
        if($request->nutrisi == 1) {
            $total += 12;
        }
        elseif($request->nutrisi == 2) {
            $total += 0;
        }

        if($request->gangguan_pola_tidur == 1) {
            $total += 8;
        }
        elseif($request->gangguan_pola_tidur == 2) {
            $total += 12;
        }

        if($request->riwayat_jatuh == 1) {
            $total += 8;
        }
        elseif($request->riwayat_jatuh == 2) {
            $total += 12;
        }
        $data->total = $total;

    	$data->save();

        $daftar_dokumen = ListDocument::where('id_regis', $id_pasien)->first();
        $daftar_dokumen->ri_penilaian_edmunson = True;
        $daftar_dokumen->save();

    	return back();
    }

    public function get_ri_penilaian_edmunson_data()
    {   /////////////////////////////////
        //note: usia belum diperhitungkan, usia juga masuk dalam perhitungan nilai total
        /////////////////////////////////
        $id_pasien = Session::get('id_pasien');
        $pasien = RIPenilaianEdmunson::where('id_regis', $id_pasien)->first();

        $this->data['id_regis'] = $pasien->id_regis;
        $this->data['usia'] = $pasien->usia;
        $this->data['status_mental'] = $pasien->status_mental;
        $this->data['eliminasi'] = $pasien->eliminasi;
        $this->data['pengobatan'] = $pasien->pengobatan;
        $this->data['diagnosa'] = $pasien->diagnosa;
        $this->data['ambulasi'] = $pasien->ambulasi;
        $this->data['nutrisi'] = $pasien->nutrisi;
        $this->data['gangguan_pola_tidur'] = $pasien->gangguan_pola_tidur;
        $this->data['riwayat_jatuh'] = $pasien->riwayat_jatuh;
        $this->data['total'] = $pasien->total;        
    }

    public function get_ri_penilaian_edmunson_read()
    {
        $this->get_ri_penilaian_edmunson_data();
        return view('page.ri.penilaian_edmunson_read', $this->data);
    }

    public function get_ri_penilaian_edmunson_edit()
    {
        $this->get_ri_penilaian_edmunson_data();
        return view('page.ri.penilaian_edmunson_edit', $this->data);
    }

    public function post_ri_penilaian_edmunson_edit(Request $request)
    {
        // dd('edit');
        $id_pasien = Session::get('id_pasien');
        $data = RIPenilaianEdmunson::where('id_regis', $id_pasien)->first();
        $data->id_regis = $id_pasien;
        $data->status_mental = $request->status_mental;
        $data->eliminasi = $request->eliminasi;
        $data->pengobatan = $request->pengobatan;
        $data->diagnosa = $request->diagnosa;
        $data->ambulasi = $request->ambulasi;
        $data->nutrisi = $request->nutrisi;
        $data->gangguan_pola_tidur = $request->gangguan_pola_tidur;
        $data->riwayat_jatuh = $request->riwayat_jatuh;
        
        $total = 0;
        //tanggal lahir
        $tanggal_lahir = Session::get('tanggal_lahir');
        $tanggal = substr($tanggal_lahir, 0, -8);
        $bulan = substr($tanggal_lahir, 3, -5);
        $tahun = substr($tanggal_lahir, 6);
        $born = new DateTime($tahun.'-'.$bulan.'-'.$tanggal);
        $today = new DateTime();
        $usia = $born->diff($today)->y;
        $data->usia = $usia;
        if($usia < 50) {
            $total += 8;
        }
        elseif($usia <= 70) {
            $total += 10;
        }
        elseif($usia > 70) {
            $total += 26;
        }
        // dd($tanggal_lahir, $today, $tanggal, $bulan, $tahun, $born, $usia);

        //status mental
        if($request->status_mental == 1) {
            $total += 4;
        }
        elseif($request->status_mental == 2) {
            $total += 12;
        }
        elseif($request->status_mental == 3) {
            $total += 13;
        }
        elseif($request->status_mental == 4) {
            $total += 14;
        }

        //eliminasi
        if($request->eliminasi == 1) {
            $total += 8;
        }
        elseif($request->eliminasi == 2) {
            $total += 12;
        }
        elseif($request->eliminasi == 3) {
            $total += 10;
        }
        elseif($request->eliminasi == 4) {
            $total += 12;
        }
        elseif($request->eliminasi == 5) {
            $total += 12;
        }

        //pengobatan
        if($request->pengobatan == 1) {
            $total += 10;
        }
        elseif($request->pengobatan == 2) {
            $total += 10;
        }
        elseif($request->pengobatan == 3) {
            $total += 8;
        }
        elseif($request->pengobatan == 4) {
            $total += 12;
        }

        //diagnosa
        if($request->diagnosa == 1) {
            $total += 10;
        }
        elseif($request->diagnosa == 2) {
            $total += 8;
        }
        elseif($request->diagnosa == 3) {
            $total += 10;
        }
        elseif($request->diagnosa == 4) {
            $total += 12;
        }

        //ambulasi
        if($request->ambulasi == 1) {
            $total += 7;
        }
        elseif($request->ambulasi == 2) {
            $total += 8;
        }
        elseif($request->ambulasi == 3) {
            $total += 10;
        }
        elseif($request->ambulasi == 4) {
            $total += 8;
        }
        elseif($request->ambulasi == 5) {
            $total += 15;
        }
        
        //nutrisi
        if($request->nutrisi == 1) {
            $total += 12;
        }
        elseif($request->nutrisi == 2) {
            $total += 0;
        }

        if($request->gangguan_pola_tidur == 1) {
            $total += 8;
        }
        elseif($request->gangguan_pola_tidur == 2) {
            $total += 12;
        }

        if($request->riwayat_jatuh == 1) {
            $total += 8;
        }
        elseif($request->riwayat_jatuh == 2) {
            $total += 12;
        }
        $data->total = $total;

        $data->save();

        return redirect('daftar_dokumen');
    }

    public function ri_edmunson_pdf()
    {
        $this->get_ri_penilaian_edmunson_data();
        ob_clean();

        header('Content-type: application/pdf');

        $mpdf = new \Mpdf\Mpdf([
        'mode' => 'utf-8', 
        'format' => 'A4-L', 
        'orientation' => 'P'
        ]);

        $view = View::make('doc_ri_edmunson',$this->data);
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
                    <td width="33%" style="text-align: right;">RM. 16.00.RI JULI 2015</td>
                </tr>
            </table>'); 

        $stylesheet = '<style>'.file_get_contents('css/pdf.css').'</style>';

        $mpdf->AddPage('P','','','','',10,10,35,20,10,10);
        //right,left
        $mpdf->WriteHTML($stylesheet, 1);
        $mpdf->WriteHTML($contents,2,true,false);

        $mpdf->Output('ri_edmunson.pdf',\Mpdf\Output\Destination::INLINE);
    }
}