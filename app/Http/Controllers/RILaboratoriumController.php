<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RILaboratorium;
use App\Models\RILaboratoriumHematologi;
use App\Models\RILaboratoriumUrine;
use App\Models\RILaboratoriumFaecesRutin;
use App\Models\RILaboratoriumKimiaDarah;
use App\Models\RILaboratoriumSerologi;
use App\Models\RILaboratoriumNarkoba;
use App\Models\ListDocument;
use Session;
use View;

class RILaboratoriumController extends Controller
{
    public function __construct(){
        $this->middleware('haspatient');
    	$this->data['title'] = 'Pemeriksaan Laboratorium';
    }

    public function get_ri_laboratorium()
    {
    	return view('page.ri.laboratorium', $this->data);
    }

    public function post_ri_laboratorium(Request $request)
    {
    	$id_pasien = Session::get('id_pasien');

    	//laboratorium
    	$data = new RILaboratorium;
    	$data->id_regis = $id_pasien;
    	$data->validasi_oleh = $request->validasi_oleh;
    	$data->dr_pengirim = $request->dr_pengirim;
		$data->bahan_diterima = $request->bahan_diterima;
		$data->ruangan = $request->ruangan;
		$data->tgl_hasil_cetak = $request->tgl_hasil_cetak;
		$data->tgl_permintaan = $request->tgl_permintaan;
		$data->save();

		$daftar_dokumen = ListDocument::where('id_regis', $id_pasien)->first();
        $daftar_dokumen->ri_laboratorium = True;
        $daftar_dokumen->save();

    	//hematologi
    	$jumlah_hematologi = $request->jumlah_form_hematologi;
    	for($i=1; $i<=$jumlah_hematologi; $i++) {
    		$str_pemeriksaan = 'h_pemeriksaan_'.$i;
    		$str_hasil = 'h_hasil_'.$i;
    		$str_status = 'h_status_'.$i;
    		$str_normal = 'h_normal_'.$i;
            if(!empty($request->$str_pemeriksaan)) {
        		$data = new RILaboratoriumHematologi;
        		$data->id_regis = $id_pasien;
        		$data->pemeriksaan = $request->$str_pemeriksaan;
        		$data->hasil = $request->$str_hasil;
        		$data->status = $request->$str_status;
        		$data->normal = $request->$str_normal;
        		$data->save();
            }
    	}

    	//urine
    	$jumlah_urine = $request->jumlah_form_urine;
    	for($i=1; $i<=$jumlah_urine; $i++) {
    		$str_pemeriksaan = 'u_pemeriksaan_'.$i;
    		$str_hasil = 'u_hasil_'.$i;
    		$str_status = 'u_status_'.$i;
    		$str_normal = 'u_normal_'.$i;
            if(!empty($request->$str_pemeriksaan)) {
    		    $data = new RILaboratoriumUrine;
        		$data->id_regis = $id_pasien;
        		$data->pemeriksaan = $request->$str_pemeriksaan;
        		$data->hasil = $request->$str_hasil;
        		$data->status = $request->$str_status;
        		$data->normal = $request->$str_normal;
        		$data->save();
            }
    	}

    	//faeces rutin
    	$jumlah_faeces = $request->jumlah_form_faeces;
        for($i=1; $i<=$jumlah_faeces; $i++) {
            $str_pemeriksaan = 'f_pemeriksaan_'.$i;
            $str_hasil = 'f_hasil_'.$i;
            $str_status = 'f_status_'.$i;
            $str_normal = 'f_normal_'.$i;
            if(!empty($request->$str_pemeriksaan)) {
                $data = new RILaboratoriumFaecesRutin;
                $data->id_regis = $id_pasien;
                $data->pemeriksaan = $request->$str_pemeriksaan;
                $data->hasil = $request->$str_hasil;
                $data->status = $request->$str_status;
                $data->normal = $request->$str_normal;
                $data->save();
            }
        }

    	//kimia darah
        $jumlah_kimia = $request->jumlah_form_kimia;
        for($i=1; $i<=$jumlah_kimia; $i++) {
            $str_pemeriksaan = 'k_pemeriksaan_'.$i;
            $str_hasil = 'k_hasil_'.$i;
            $str_status = 'k_status_'.$i;
            $str_normal = 'k_normal_'.$i;
            if(!empty($request->$str_pemeriksaan)) {
                $data = new RILaboratoriumKimiaDarah;
                $data->id_regis = $id_pasien;
                $data->pemeriksaan = $request->$str_pemeriksaan;
                $data->hasil = $request->$str_hasil;
                $data->status = $request->$str_status;
                $data->normal = $request->$str_normal;
                $data->save();
            }
        }

    	//serologi
        $jumlah_serologi = $request->jumlah_form_serologi;
        for($i=1; $i<=$jumlah_serologi; $i++) {
            $str_pemeriksaan = 's_pemeriksaan_'.$i;
            $str_hasil = 's_hasil_'.$i;
            $str_status = 's_status_'.$i;
            $str_normal = 's_normal_'.$i;
            if(!empty($$request->$str_pemeriksaan)) {
                $data = new RILaboratoriumSerologi;
                $data->id_regis = $id_pasien;
                $data->pemeriksaan = $request->$str_pemeriksaan;
                $data->hasil = $request->$str_hasil;
                $data->status = $request->$str_status;
                $data->normal = $request->$str_normal;
                $data->save();
            }
        }

    	//narkoba
    	$jumlah_narkoba = $request->jumlah_form_narkoba;
        for($i=1; $i<=$jumlah_narkoba; $i++) {
            $str_pemeriksaan = 'n_pemeriksaan_'.$i;
            $str_hasil = 'n_hasil_'.$i;
            $str_status = 'n_status_'.$i;
            $str_normal = 'n_normal_'.$i;
            if(!empty($request->$str_pemeriksaan)) {
                $data = new RILaboratoriumNarkoba;
                $data->id_regis = $id_pasien;
                $data->pemeriksaan = $request->$str_pemeriksaan;
                $data->hasil = $request->$str_hasil;
                $data->status = $request->$str_status;
                $data->normal = $request->$str_normal;
                $data->save();
            }
        }

    	return redirect('daftar_dokumen');
    }

    public function get_ri_laboratorium_data()
    {
    	$id_pasien = Session::get('id_pasien');
    	//laboratorium
    	$laboratorium = RILaboratorium::where('id_regis', $id_pasien)->first();
    	$this->data['validasi_oleh'] = $laboratorium->validasi_oleh;
    	$this->data['dr_pengirim'] = $laboratorium->dr_pengirim;
    	$this->data['bahan_diterima'] = $laboratorium->bahan_diterima;
    	$this->data['ruangan'] = $laboratorium->ruangan;
    	$this->data['tgl_hasil_cetak'] = $laboratorium->tgl_hasil_cetak;
    	$this->data['tgl_permintaan'] = $laboratorium->tgl_permintaan;

    	//hematologi
    	$hematologi = RILaboratoriumHematologi::where('id_regis', $id_pasien)->get();
    	$this->data['hematologi'] = array();
    	$previous_hematologi = '';
    	foreach ($hematologi as $key => $value) {
    		$this->data['hematologi'][$key] = array();
    		$this->data['hematologi'][$key]['id_data'] = $value->id;
    		$this->data['hematologi'][$key]['pemeriksaan'] = $value->pemeriksaan;
    		$this->data['hematologi'][$key]['hasil'] = $value->hasil;
    		$this->data['hematologi'][$key]['status'] = $value->status;
    		$this->data['hematologi'][$key]['normal'] = $value->normal;
    		$previous_hematologi .= $value->id.'-';
    	}
    	if(strlen($previous_hematologi) > 0) {
    		$previous_hematologi = substr($previous_hematologi, 0, -1);
    	}
    	$this->data['previous_hematologi'] = $previous_hematologi;

    	//urine
    	$urine = RILaboratoriumUrine::where('id_regis', $id_pasien)->get();
    	$this->data['urine'] = array();
    	$previous_urine = '';
    	foreach ($urine as $key => $value) {
    		$this->data['urine'][$key] = array();
    		$this->data['urine'][$key]['id_data'] = $value->id;
    		$this->data['urine'][$key]['pemeriksaan'] = $value->pemeriksaan;
    		$this->data['urine'][$key]['hasil'] = $value->hasil;
    		$this->data['urine'][$key]['status'] = $value->status;
    		$this->data['urine'][$key]['normal'] = $value->normal;
    		$previous_urine .= $value->id.'-';
    	}
    	if(strlen($previous_urine) > 0) {
            $previous_urine = substr($previous_urine, 0, -1);
        }
        $this->data['previous_urine'] = $previous_urine;

    	//faeces rutin
    	$faeces = RILaboratoriumFaecesRutin::where('id_regis', $id_pasien)->get();
    	$this->data['faeces'] = array();
    	$previous_faeces = '';
    	foreach ($faeces as $key => $value) {
    		$this->data['faeces'][$key] = array();
    		$this->data['faeces'][$key]['id_data'] = $value->id;
    		$this->data['faeces'][$key]['pemeriksaan'] = $value->pemeriksaan;
    		$this->data['faeces'][$key]['hasil'] = $value->hasil;
    		$this->data['faeces'][$key]['status'] = $value->status;
    		$this->data['faeces'][$key]['normal'] = $value->normal;
    		$previous_faeces .= $value->id.'-';
    	}
    	if(strlen($previous_faeces) > 0) {
            $previous_faeces = substr($previous_faeces, 0, -1);
        }
        $this->data['previous_faeces'] = $previous_faeces;

    	//kimia darah
    	$kimia = RILaboratoriumKimiaDarah::where('id_regis', $id_pasien)->get();
    	$this->data['kimia'] = array();
    	$previous_kimia = '';
    	foreach ($kimia as $key => $value) {
    		$this->data['kimia'][$key] = array();
    		$this->data['kimia'][$key]['id_data'] = $value->id;
    		$this->data['kimia'][$key]['pemeriksaan'] = $value->pemeriksaan;
    		$this->data['kimia'][$key]['hasil'] = $value->hasil;
    		$this->data['kimia'][$key]['status'] = $value->status;
    		$this->data['kimia'][$key]['normal'] = $value->normal;
    		$previous_kimia .= $value->id.'-';
    	}
    	if(strlen($previous_kimia) > 0) {
            $previous_kimia = substr($previous_kimia, 0, -1);
        }
        $this->data['previous_kimia'] = $previous_kimia;

    	//serologi
    	$serologi = RILaboratoriumSerologi::where('id_regis', $id_pasien)->get();
    	$this->data['serologi'] = array();
    	$previous_serologi = '';
    	foreach ($serologi as $key => $value) {
    		$this->data['serologi'][$key] = array();
    		$this->data['serologi'][$key]['id_data'] = $value->id;
    		$this->data['serologi'][$key]['pemeriksaan'] = $value->pemeriksaan;
    		$this->data['serologi'][$key]['hasil'] = $value->hasil;
    		$this->data['serologi'][$key]['status'] = $value->status;
    		$this->data['serologi'][$key]['normal'] = $value->normal;
    		$previous_serologi .= $value->id.'-';
    	}
    	if(strlen($previous_serologi) > 0) {
            $previous_serologi = substr($previous_serologi, 0, -1);
        }
        $this->data['previous_serologi'] = $previous_serologi;

    	//narkoba
    	$narkoba = RILaboratoriumNarkoba::where('id_regis', $id_pasien)->get();
    	$this->data['narkoba'] = array();
    	$previous_narkoba = '';
    	foreach ($narkoba as $key => $value) {
    		$this->data['narkoba'][$key] = array();
    		$this->data['narkoba'][$key]['id_data'] = $value->id;
    		$this->data['narkoba'][$key]['pemeriksaan'] = $value->pemeriksaan;
    		$this->data['narkoba'][$key]['hasil'] = $value->hasil;
    		$this->data['narkoba'][$key]['status'] = $value->status;
    		$this->data['narkoba'][$key]['normal'] = $value->normal;
    		$previous_narkoba .= $value->id.'-';
    	}
    	if(strlen($previous_narkoba) > 0) {
            $previous_narkoba = substr($previous_narkoba, 0, -1);
        }
        $this->data['previous_narkoba'] = $previous_narkoba;
    }

    public function get_ri_laboratorium_read()
    {
    	$this->get_ri_laboratorium_data();
    	return view('page.ri.laboratorium_read', $this->data);
    }

    public function get_ri_laboratorium_edit()
    {
    	$this->get_ri_laboratorium_data();
    	return view('page.ri.laboratorium_edit', $this->data);
    }

    public function post_ri_laboratorium_edit(Request $request)
    {
    	$id_pasien = Session::get('id_pasien');

    	//laboratorium
    	$data = RILaboratorium::where('id_regis', $id_pasien)->first();
    	$data->id_regis = $id_pasien;
    	$data->validasi_oleh = $request->validasi_oleh;
    	$data->dr_pengirim = $request->dr_pengirim;
		$data->bahan_diterima = $request->bahan_diterima;
		$data->ruangan = $request->ruangan;
		$data->tgl_hasil_cetak = $request->tgl_hasil_cetak;
		$data->tgl_permintaan = $request->tgl_permintaan;
		$data->save();

		//hematologi old
        if(strlen($request->previous_hematologi) > 0) {
    		$list_hematologi = explode('-', $request->previous_hematologi);
    		foreach ($list_hematologi as $key => $value) {
    			$data = RILaboratoriumHematologi::where('id', $value)->first();
    			$str_pemeriksaan = 'h_pemeriksaan_'.$value;
        		$str_hasil = 'h_hasil_'.$value;
        		$str_status = 'h_status_'.$value;
        		$str_normal = 'h_normal_'.$value;
        		$data->pemeriksaan = $request->$str_pemeriksaan;
        		$data->hasil = $request->$str_hasil;
        		$data->status = $request->$str_status;
        		$data->normal = $request->$str_normal;
        		$data->save();
    		}
        }

    	//hematologi new
    	$jumlah_hematologi = $request->jumlah_form_hematologi;
    	for($i=1; $i<=$jumlah_hematologi; $i++) {
    		$str_pemeriksaan = 'h_pemeriksaan_new_'.$i;
    		$str_hasil = 'h_hasil_new_'.$i;
    		$str_status = 'h_status_new_'.$i;
    		$str_normal = 'h_normal_new_'.$i;
    		$data = new RILaboratoriumHematologi;
    		$data->id_regis = $id_pasien;
    		$data->pemeriksaan = $request->$str_pemeriksaan;
    		$data->hasil = $request->$str_hasil;
    		$data->status = $request->$str_status;
    		$data->normal = $request->$str_normal;
    		$data->save();
    	}

    	//urine old
        if(strlen($request->previous_urine) > 0) {
        	$list_urine = explode('-', $request->previous_urine);
        	foreach ($list_urine as $key => $value) {
        		$data = RILaboratoriumUrine::where('id', $value)->first();
        		$str_pemeriksaan = 'u_pemeriksaan_'.$value;
        		$str_hasil = 'u_hasil_'.$value;
        		$str_status = 'u_status_'.$value;
        		$str_normal = 'u_normal_'.$value;
        		$data->pemeriksaan = $request->$str_pemeriksaan;
        		$data->hasil = $request->$str_hasil;
        		$data->status = $request->$str_status;
        		$data->normal = $request->$str_normal;
        		$data->save();
        	}
        }

    	//urine new
    	$jumlah_urine = $request->jumlah_form_urine;
    	for($i=1; $i<=$jumlah_urine; $i++) {
    		$str_pemeriksaan = 'u_pemeriksaan_new_'.$i;
    		$str_hasil = 'u_hasil_new_'.$i;
    		$str_status = 'u_status_new_'.$i;
    		$str_normal = 'u_normal_new_'.$i;
    		$data = new RILaboratoriumUrine;
    		$data->id_regis = $id_pasien;
    		$data->pemeriksaan = $request->$str_pemeriksaan;
    		$data->hasil = $request->$str_hasil;
    		$data->status = $request->$str_status;
    		$data->normal = $request->$str_normal;
    		$data->save();
    	}

    	//faeces rutin old
        if(strlen($request->previous_faeces) > 0) {
        	$list_faeces = explode('-', $request->previous_faeces);
        	foreach ($list_faeces as $key => $value) {
        		$data = RILaboratoriumFaecesRutin::where('id', $value)->first();
        		$str_pemeriksaan = 'f_pemeriksaan_'.$value;
        		$str_hasil = 'f_hasil_'.$value;
        		$str_status = 'f_status_'.$value;
        		$str_normal = 'f_normal_'.$value;
        		$data->pemeriksaan = $request->$str_pemeriksaan;
        		$data->hasil = $request->$str_hasil;
        		$data->status = $request->$str_status;
        		$data->normal = $request->$str_normal;
        		$data->save();
        	}
        }

    	//faeces rutin new
    	$jumlah_faeces = $request->jumlah_form_faeces;
        for($i=1; $i<=$jumlah_faeces; $i++) {
            $str_pemeriksaan = 'f_pemeriksaan_new_'.$i;
            $str_hasil = 'f_hasil_new_'.$i;
            $str_status = 'f_status_new_'.$i;
            $str_normal = 'f_normal_new_'.$i;
            $data = new RILaboratoriumFaecesRutin;
            $data->id_regis = $id_pasien;
            $data->pemeriksaan = $request->$str_pemeriksaan;
            $data->hasil = $request->$str_hasil;
            $data->status = $request->$str_status;
            $data->normal = $request->$str_normal;
            $data->save();
        }

        //kimia darah old
        if(strlen($request->previous_kimia) > 0) {
            $list_kimia = explode('-', $request->previous_kimia);
            foreach ($list_kimia as $key => $value) {
            	$data = RILaboratoriumKimiaDarah::where('id', $value)->first();
        		$str_pemeriksaan = 'k_pemeriksaan_'.$value;
        		$str_hasil = 'k_hasil_'.$value;
        		$str_status = 'k_status_'.$value;
        		$str_normal = 'k_normal_'.$value;
        		$data->pemeriksaan = $request->$str_pemeriksaan;
        		$data->hasil = $request->$str_hasil;
        		$data->status = $request->$str_status;
        		$data->normal = $request->$str_normal;
        		$data->save();
            }
        }

    	//kimia darah new
        $jumlah_kimia = $request->jumlah_form_kimia;
        for($i=1; $i<=$jumlah_kimia; $i++) {
            $str_pemeriksaan = 'k_pemeriksaan_new_'.$i;
            $str_hasil = 'k_hasil_new_'.$i;
            $str_status = 'k_status_new_'.$i;
            $str_normal = 'k_normal_new_'.$i;
            $data = new RILaboratoriumKimiaDarah;
            $data->id_regis = $id_pasien;
            $data->pemeriksaan = $request->$str_pemeriksaan;
            $data->hasil = $request->$str_hasil;
            $data->status = $request->$str_status;
            $data->normal = $request->$str_normal;
            $data->save();
        }

    	//serologi old
        if(strlen($request->previous_serologi) > 0) {
            $list_serologi = explode('-', $request->previous_serologi);
            foreach ($list_serologi as $key => $value) {
            	$data = RILaboratoriumSerologi::where('id', $value)->first();
        		$str_pemeriksaan = 's_pemeriksaan_'.$value;
        		$str_hasil = 's_hasil_'.$value;
        		$str_status = 's_status_'.$value;
        		$str_normal = 's_normal_'.$value;
        		$data->pemeriksaan = $request->$str_pemeriksaan;
        		$data->hasil = $request->$str_hasil;
        		$data->status = $request->$str_status;
        		$data->normal = $request->$str_normal;
        		$data->save();
            }
        }

    	//serologi new
        $jumlah_serologi = $request->jumlah_form_serologi;
        for($i=1; $i<=$jumlah_serologi; $i++) {
            $str_pemeriksaan = 's_pemeriksaan_new_'.$i;
            $str_hasil = 's_hasil_new_'.$i;
            $str_status = 's_status_new_'.$i;
            $str_normal = 's_normal_new_'.$i;
            $data = new RILaboratoriumSerologi;
            $data->id_regis = $id_pasien;
            $data->pemeriksaan = $request->$str_pemeriksaan;
            $data->hasil = $request->$str_hasil;
            $data->status = $request->$str_status;
            $data->normal = $request->$str_normal;
            $data->save();
        }

    	//narkoba old
        if(strlen($request->previous_narkoba) > 0) {
            $list_narkoba = explode('-', $request->previous_narkoba);
            foreach ($list_narkoba as $key => $value) {
            	$data = RILaboratoriumNarkoba::where('id', $value)->first();
        		$str_pemeriksaan = 'n_pemeriksaan_'.$value;
        		$str_hasil = 'n_hasil_'.$value;
        		$str_status = 'n_status_'.$value;
        		$str_normal = 'n_normal_'.$value;
        		$data->pemeriksaan = $request->$str_pemeriksaan;
        		$data->hasil = $request->$str_hasil;
        		$data->status = $request->$str_status;
        		$data->normal = $request->$str_normal;
        		$data->save();
            }
        }

    	//narkoba new
    	$jumlah_narkoba = $request->jumlah_form_narkoba;
        for($i=1; $i<=$jumlah_narkoba; $i++) {
            $str_pemeriksaan = 'n_pemeriksaan_new_'.$i;
            $str_hasil = 'n_hasil_new_'.$i;
            $str_status = 'n_status_new_'.$i;
            $str_normal = 'n_normal_new_'.$i;
            $data = new RILaboratoriumNarkoba;
            $data->id_regis = $id_pasien;
            $data->pemeriksaan = $request->$str_pemeriksaan;
            $data->hasil = $request->$str_hasil;
            $data->status = $request->$str_status;
            $data->normal = $request->$str_normal;
            $data->save();
        }
    	dd('posting edit');
    }

    public function ri_lab_pdf()
    {
        $this->get_ri_laboratorium_data();

        ob_clean();

        header('Content-type: application/pdf');

        $mpdf = new \Mpdf\Mpdf([
        'mode' => 'utf-8', 
        'format' => 'A4-P', 
        'orientation' => 'P'
        ]);

        $view = View::make('doc_ri_lab',$this->data);
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
                    <td width="33%" style="text-align: right;">RM. 24.00.RI JULI 2015</td>
                </tr>
            </table>'); 

        $stylesheet = '<style>'.file_get_contents('css/pdf.css').'</style>';

        $mpdf->AddPage('P','','','','',10,10,35,20,10,10);
        //right,left
        $mpdf->WriteHTML($stylesheet, 1);
        $mpdf->WriteHTML($contents,2,true,false);

        $mpdf->Output('ri_lab.pdf',\Mpdf\Output\Destination::INLINE);
    }
}
