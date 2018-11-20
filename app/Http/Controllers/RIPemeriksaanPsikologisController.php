<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RIPemeriksaanPsikologis;
use App\Models\ListDocument;
use Session;

class RIPemeriksaanPsikologisController extends Controller
{
    public function __construct()
    {
    	$this->data['title'] = 'Pemeriksaan Psikologis';
    }

    public function get_ri_pemeriksaan_psikologis()
    {
    	return view('page.ri.pemeriksaan_psikologis', $this->data);
    }

    public function post_ri_pemeriksaan_psikologis(Request $request)
    {
    	$id_pasien = Session::get('id_pasien');
    	$data = new RIPemeriksaanPsikologis;
    	$data->id_regis = $id_pasien;
    	$data->psikolog = $request->psikolog;
        $data->tanggal = $request->tanggal;
        $data->dikirim_oleh = $request->dikirim_oleh;
        $data->dokter = $request->dokter;
        $data->kontak_mata = $request->kontak_mata;
        $data->respon = $request->respon;
        $data->cara_bicara = $request->cara_bicara;
        $data->volume = $request->volume;
        $data->intonasi = $request->intonasi;
        $data->ekspresi = $request->ekspresi;
        $data->gesture = $request->gesture;
        $data->performance = $request->performance;
        $data->autoanamnesa = $request->autoanamnesa;
        $data->alloanamnesa = $request->alloanamnesa;
        $data->intelegensi = $request->intelegensi;
        $data->kepribadian = $request->kepribadian;
        $data->diagnosa = $request->diagnosa;
        $data->kesimpulan = $request->kesimpulan;
        $data->terapi_saran = $request->terapi_saran;
        $data->save();

        $daftar_dokumen = ListDocument::where('id_regis', $id_pasien)->first();
        $daftar_dokumen->ri_pemeriksaan_psikologis = True;
        $daftar_dokumen->save();
        
        return redirect('daftar_dokumen');
    }

    public function get_ri_pemeriksaan_psikologis_data()
    {
    	$id_pasien = Session::get('id_pasien');
    	$pasien = RIPemeriksaanPsikologis::where('id_regis', $id_pasien)->first();
    	$this->data['id_regis'] = $pasien->id_regis;
    	$this->data['psikolog'] = $pasien->psikolog;
    	$this->data['tanggal'] = $pasien->tanggal;
    	$this->data['dikirim_oleh'] = $pasien->dikirim_oleh;
    	$this->data['dokter'] = $pasien->dokter;
		$this->data['kontak_mata'] = $pasien->kontak_mata;
		$this->data['respon'] = $pasien->respon;
		$this->data['cara_bicara'] = $pasien->cara_bicara;
		$this->data['volume'] = $pasien->volume;
		$this->data['intonasi'] = $pasien->intonasi;
		$this->data['ekspresi'] = $pasien->ekspresi;
		$this->data['gesture'] = $pasien->gesture;
		$this->data['performance'] = $pasien->performance;
		$this->data['autoanamnesa'] = $pasien->autoanamnesa;
		$this->data['alloanamnesa'] = $pasien->alloanamnesa;
		$this->data['intelegensi'] = $pasien->intelegensi;
		$this->data['kepribadian'] = $pasien->kepribadian;
		$this->data['diagnosa'] = $pasien->diagnosa;
		$this->data['kesimpulan'] = $pasien->kesimpulan;
		$this->data['terapi_saran'] = $pasien->terapi_saran;
    }

    public function get_ri_pemeriksaan_psikologis_read()
    {
    	$this->get_ri_pemeriksaan_psikologis_data();
    	return view('page.ri.pemeriksaan_psikologis_read', $this->data);
    }

    public function get_ri_pemeriksaan_psikologis_edit()
    {
    	$this->get_ri_pemeriksaan_psikologis_data();
    	return view('page.ri.pemeriksaan_psikologis_edit', $this->data);
    }

    public function post_ri_pemeriksaan_psikologis_edit(Request $request)
    {
    	$id_pasien = Session::get('id_pasien');
    	$data = RIPemeriksaanPsikologis::where('id_regis', $id_pasien)->first();
    	$data->psikolog = $request->psikolog;
        $data->tanggal = $request->tanggal;
        $data->dikirim_oleh = $request->dikirim_oleh;
        $data->dokter = $request->dokter;
        $data->kontak_mata = $request->kontak_mata;
        $data->respon = $request->respon;
        $data->cara_bicara = $request->cara_bicara;
        $data->volume = $request->volume;
        $data->intonasi = $request->intonasi;
        $data->ekspresi = $request->ekspresi;
        $data->gesture = $request->gesture;
        $data->performance = $request->performance;
        $data->autoanamnesa = $request->autoanamnesa;
        $data->alloanamnesa = $request->alloanamnesa;
        $data->intelegensi = $request->intelegensi;
        $data->kepribadian = $request->kepribadian;
        $data->diagnosa = $request->diagnosa;
        $data->kesimpulan = $request->kesimpulan;
        $data->terapi_saran = $request->terapi_saran;
        $data->save();
    	return redirect('daftar_dokumen');
    }
}
