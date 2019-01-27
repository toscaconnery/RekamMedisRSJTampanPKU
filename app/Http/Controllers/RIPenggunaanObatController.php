<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RIPenggunaanObat;
use App\Models\RIPenggunaanObatKeterangan;
use App\Models\RIPenggunaanObatKeteranganObat;
use App\Models\ListDocument;
use Session;
use DateTime;
use Carbon\Carbon;
use View;

class RIPenggunaanObatController extends Controller
{
    public function __construct()
    {
        $this->middleware('haspatient');
    	$this->data['title'] = 'Catatan Penggunaan Obat (CPO)';
    }

    public function get_ri_penggunaan_obat()
    {
        $id_pasien = Session::get('id_pasien');
        $keterangan = RIPenggunaanObatKeterangan::where('id_regis', $id_pasien)->first();
        if($keterangan == NULL) {
            $this->data['ruang_bangsal'] = '';
            $this->data['no_reg'] = '';
            $this->data['tanggal_masuk'] = '';
            $this->data['tanggal_keluar'] = '';
            $this->data['diagnosis'] = '';
            $this->data['dokter'] = '';
            $this->data['riwayat_alergi'] = '';
            $this->data['konsumen'] = '';
            $this->data['jumlah'] = '';
            $this->data['keterangan'] = '';
        }
        else {
            $this->data['ruang_bangsal'] = $keterangan->ruang_bangsal;
            $this->data['no_reg'] = $keterangan->no_reg;
            $this->data['tanggal_masuk'] = $keterangan->tanggal_masuk;
            $this->data['tanggal_keluar'] = $keterangan->tanggal_keluar;
            $this->data['diagnosis'] = $keterangan->diagnosis;
            $this->data['dokter'] = $keterangan->dokter;
            $this->data['riwayat_alergi'] = $keterangan->riwayat_alergi;
            $this->data['konsumen'] = $keterangan->konsumen;
            $this->data['jumlah'] = $keterangan->jumlah;
            $this->data['keterangan'] = $keterangan->keterangan;
        }
        return view('page.ri.penggunaan_obat', $this->data);
    }

    public function post_ri_penggunaan_obat(Request $request)
    {
        //data umum
        $id_pasien = Session::get('id_pasien');
        $jumlah_keterangan = RIPenggunaanObatKeterangan::where('id_regis', $id_pasien)->count();
        if($jumlah_keterangan == 0) {
            $keterangan = new RIPenggunaanObatKeterangan;
        }
        else {
            $keterangan = RIPenggunaanObatKeterangan::where('id_regis', $id_pasien)->first();
        }
        $keterangan->id_regis = $id_pasien;
        $keterangan->ruang_bangsal = $request->ruang_bangsal;
        $keterangan->no_reg = $request->no_reg;
        $keterangan->tanggal_masuk = $request->tanggal_masuk;
        $keterangan->tanggal_keluar = $request->tanggal_keluar;
        $keterangan->diagnosis = $request->diagnosis;
        $keterangan->dokter = $request->dokter;
        $keterangan->riwayat_alergi = $request->riwayat_alergi;
        $keterangan->konsumen = $request->konsumen;
        $keterangan->save();


        //data detail tiap penggunaan obat, cek dulu apakah tanggal sama obat yg sama udah pernah ada
        $obat_date_number = RIPenggunaanObat::where('id_regis', $id_pasien)->where('obat', $request->obat)->where('tanggal_penggunaan', $request->tanggal_penggunaan)->count();
        if($obat_date_number == 0) {
           $data = new RIPenggunaanObat;
           $data->id_regis = $id_pasien;
        }
        else {   
           $data = RIPenggunaanObat::where('id_regis', $id_pasien)->where('obat', $request->obat)->where('tanggal_penggunaan', $request->tanggal_penggunaan)->first();
        }

        $data->obat = $request->obat;
        $data->tanggal_penggunaan = $request->tanggal_penggunaan;
        $data->tanggal_query = $request->tanggal_query;

        $temp = $request->tanggal_penggunaan;
        $dd = substr($temp, 0, -8);
        $mm = substr($temp, 3, -5);
        $yy = substr($temp, 6);
        $tanggal_query = $yy.'-'.$mm.'-'.$dd;
        // dd($tanggal_query);
        $data->tanggal_query = $tanggal_query;
        if(isset($request->waktu_penggunaan_1)) {
            $data->waktu_penggunaan_1 = 1;
        }
        else {
            $data->waktu_penggunaan_1 = 0;
        }
        if(isset($request->waktu_penggunaan_2)) {
            $data->waktu_penggunaan_2 = 1;
        }
        else {
            $data->waktu_penggunaan_2 = 0;
        }
        if(isset($request->waktu_penggunaan_3)) {
            $data->waktu_penggunaan_3 = 1;
        }
        else {
            $data->waktu_penggunaan_3 = 0;
        }
        if(isset($request->waktu_penggunaan_4)) {
            $data->waktu_penggunaan_4 = 1;
        }
        else {
            $data->waktu_penggunaan_4 = 0;
        }
        $data->perawat = $request->perawat;
        $data->save();

        //penggunaan obat keterangan obat
        $data2 = RIPenggunaanObatKeteranganObat::where('id_regis', $id_pasien)->where('obat', $request->obat)->first();
        if($data2 == NULL) {
            $data2 = new RIPenggunaanObatKeteranganObat;
            $data2->id_regis = $id_pasien;
            $data2->obat = $request->obat;
        }
        $data2->jumlah = $request->jumlah;
        $data2->keterangan = $request->keterangan;
        $data2->save();

        $daftar_dokumen = ListDocument::where('id_regis', $id_pasien)->get()->first();
        $daftar_dokumen->ri_penggunaan_obat = True;
        $daftar_dokumen->save();

        // return redirect('ri_penggunaan_obat_read');
    }

    public function get_ri_penggunaan_obat_data()
    {
        $id_pasien = Session::get('id_pasien');
        $today = Carbon::today();
        // $data = RIPenilaianEdmunson::where('id_regis', $id_pasien)->where('tanggal', '>', $today->subDays(5))->orderBy('tanggal', 'ASC')->get();
        $pasien = RIPenggunaanObat::where('id_regis', $id_pasien)->where('tanggal_query', '>=', $today->subDays(6))->orderBy('tanggal_query', 'ASC')->get();
        // dd($pasien);

        $keterangan = RIPenggunaanObatKeterangan::where('id_regis', $id_pasien)->first();
        $this->data['ruang_bangsal'] = $keterangan->ruang_bangsal;
        $this->data['no_reg'] = $keterangan->no_reg;
        $this->data['tanggal_masuk'] = $keterangan->tanggal_masuk;
        $this->data['tanggal_keluar'] = $keterangan->tanggal_keluar;
        $this->data['diagnosis'] = $keterangan->diagnosis;
        $this->data['dokter'] = $keterangan->dokter;
        $this->data['riwayat_alergi'] = $keterangan->riwayat_alergi;
        $this->data['konsumen'] = $keterangan->konsumen;

        $h0 = date('d/m/Y',strtotime("-5 days"));
        $h1 = date('d/m/Y',strtotime("-4 days"));
        $h2 = date('d/m/Y',strtotime("-3 days"));
        $h3 = date('d/m/Y',strtotime("-2 days"));
        $h4 = date('d/m/Y',strtotime("-1 days"));
        $h5 = date('d/m/Y',strtotime("today"));

        $this->data['h0'] = $h0;
        $this->data['h1'] = $h1;
        $this->data['h2'] = $h2;
        $this->data['h3'] = $h3;
        $this->data['h4'] = $h4;
        $this->data['h5'] = $h5;

        // dd($h0, $h1, $h2, $h3, $h4, $h5);

        $this->data['keterangan'] = 
        $this->data['perawat'] = array();
        $this->data['perawat'][$h0] = NULL;   //masih null karena belum ada data
        $this->data['perawat'][$h1] = NULL;
        $this->data['perawat'][$h2] = NULL;
        $this->data['perawat'][$h3] = NULL;
        $this->data['perawat'][$h4] = NULL;
        $this->data['perawat'][$h5] = NULL;

        $this->data['pasien'] = array();
        foreach ($pasien as $key => $value) {
            //inisialisasi obat dan tanggal untuk  6 hari, isi dari tiap tanggal masih 0 semua
            if(!isset($this->data['pasien'][$value->obat])) {
                $this->data['pasien'][$value->obat] = array();
                $this->data['pasien'][$value->obat][$h0] = array();
                $this->data['pasien'][$value->obat][$h1] = array();
                $this->data['pasien'][$value->obat][$h2] = array();
                $this->data['pasien'][$value->obat][$h3] = array();
                $this->data['pasien'][$value->obat][$h4] = array();
                $this->data['pasien'][$value->obat][$h5] = array();

                $this->data['pasien'][$value->obat][$h0][1] = 0;    //hari 1    //pagi
                $this->data['pasien'][$value->obat][$h0][2] = 0;                //siang
                $this->data['pasien'][$value->obat][$h0][3] = 0;                //sore
                $this->data['pasien'][$value->obat][$h0][4] = 0;                //malam

                $this->data['pasien'][$value->obat][$h1][1] = 0;    //hari 2
                $this->data['pasien'][$value->obat][$h1][2] = 0;
                $this->data['pasien'][$value->obat][$h1][3] = 0;
                $this->data['pasien'][$value->obat][$h1][4] = 0;

                $this->data['pasien'][$value->obat][$h2][1] = 0;    //hari 3
                $this->data['pasien'][$value->obat][$h2][2] = 0;
                $this->data['pasien'][$value->obat][$h2][3] = 0;
                $this->data['pasien'][$value->obat][$h2][4] = 0;

                $this->data['pasien'][$value->obat][$h3][1] = 0;    //hari 4
                $this->data['pasien'][$value->obat][$h3][2] = 0;
                $this->data['pasien'][$value->obat][$h3][3] = 0;
                $this->data['pasien'][$value->obat][$h3][4] = 0;

                $this->data['pasien'][$value->obat][$h4][1] = 0;    //hari 5
                $this->data['pasien'][$value->obat][$h4][2] = 0;
                $this->data['pasien'][$value->obat][$h4][3] = 0;
                $this->data['pasien'][$value->obat][$h4][4] = 0;

                $this->data['pasien'][$value->obat][$h5][1] = 0;    //hari 6
                $this->data['pasien'][$value->obat][$h5][2] = 0;
                $this->data['pasien'][$value->obat][$h5][3] = 0;
                $this->data['pasien'][$value->obat][$h5][4] = 0;

                $keterangan_obat = RIPenggunaanObatKeteranganObat::where('id_regis', $id_pasien)->where('obat', $value->obat)->first();
                $this->data['pasien'][$value->obat]['jumlah'] = $keterangan_obat->jumlah;
                $this->data['pasien'][$value->obat]['keterangan'] = $keterangan_obat->keterangan;


            }
            
            //mengubah nilai untuk tanggal tertera
            $this->data['pasien'][$value->obat][$value->tanggal_penggunaan][1] = $value->waktu_penggunaan_1;
            $this->data['pasien'][$value->obat][$value->tanggal_penggunaan][2] = $value->waktu_penggunaan_2;
            $this->data['pasien'][$value->obat][$value->tanggal_penggunaan][3] = $value->waktu_penggunaan_3;
            $this->data['pasien'][$value->obat][$value->tanggal_penggunaan][4] = $value->waktu_penggunaan_4;
            
            if($value->tanggal_penggunaan == $h0) {
                $this->data['perawat'][$h0] = $value->perawat;
            }
            elseif($value->tanggal_penggunaan == $h1) {
                $this->data['perawat'][$h1] = $value->perawat;
            }
            elseif($value->tanggal_penggunaan == $h2) {
                $this->data['perawat'][$h2] = $value->perawat;
            }
            elseif($value->tanggal_penggunaan == $h3) {
                $this->data['perawat'][$h3] = $value->perawat;
            }
            elseif($value->tanggal_penggunaan == $h4) {
                $this->data['perawat'][$h4] = $value->perawat;
            }
            elseif($value->tanggal_penggunaan == $h5) {
                $this->data['perawat'][$h5] = $value->perawat;
            }


            // dd($h0, $h1, $h2, $h3, $value->tanggal_penggunaan);
            // if(!isset($this->data['pasien'][$value->obat][$value->tanggal_penggunaan])) {
            //     $this->data['pasien'][$value->obat][$value->tanggal_penggunaan] = array();
            // }
        }
        // dd($this->data['pasien']);
    }

    public function get_ri_penggunaan_obat_read()
    {
        $this->get_ri_penggunaan_obat_data();
        /*
        $pasien = RIPenggunaanObat::where('id', 1)->first();
        
        $this->data['id_regis'] = $pasien->id_regis;

        $this->data['ruang_bangsal'] = $pasien->ruang_bangsal;
        $this->data['no_reg'] = $pasien->no_reg;
        $this->data['tanggal_masuk'] = $pasien->tanggal_masuk;
        $this->data['tanggal_keluar'] = $pasien->tanggal_keluar;
        $this->data['dokter'] = $pasien->diagnosis;
        $this->data['riwayat_alergi'] = $pasien->riwayat_alergi;
        $this->data['konsumen'] = $pasien->konsumen;
        $this->data['obat'] = $pasien->obat;
        $this->data['jumlah'] = $pasien->jumlah;
        $this->data['tanggal_penggunaan'] = $pasien->tanggal_penggunaan;

        if($pasien->waktu_penggunaan_1 == True) {
            $this->data['waktu_penggunaan_1'] = $pasien->waktu_penggunaan_1;
        }
        if($pasien->waktu_penggunaan_2 == True) {
            $this->data['waktu_penggunaan_2'] = $pasien->waktu_penggunaan_2;
        }
        if($pasien->waktu_penggunaan_3 == True) {
            $this->data['waktu_penggunaan_3'] = $pasien->waktu_penggunaan_3;
        }
        if($pasien->waktu_penggunaan_4 == True) {
            $this->data['waktu_penggunaan_4'] = $pasien->waktu_penggunaan_4;
        }

        $this->data['keterangan'] = $pasien->keterangan;*/

        return view('page.ri.penggunaan_obat_read', $this->data);
    }

    public function ri_cpo_pdf()
    {
        ob_clean();

        header('Content-type: application/pdf');

        $mpdf = new \Mpdf\Mpdf([
        'mode' => 'utf-8', 
        'format' => 'A4-L', 
        'orientation' => 'L'
        ]);

        $view = View::make('doc_ri_cpo');
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
                    <td width="33%" style="text-align: right;">RM. 26.00.RI JULI 2015</td>
                </tr>
            </table>'); 

        $stylesheet = '<style>'.file_get_contents('css/pdf.css').'</style>';

        $mpdf->AddPage('L','','','','',10,10,35,20,10,10);
        //right,left
        $mpdf->WriteHTML($stylesheet, 1);
        $mpdf->WriteHTML($contents,2,true,false);

        $mpdf->Output('ri_cpo.pdf',\Mpdf\Output\Destination::INLINE);
    }
}
