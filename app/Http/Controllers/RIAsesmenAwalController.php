<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RIAsesmenAwalController extends Controller
{
    public function __construct()
    {
    	$this->data['title'] = 'Asesmen Awal Pasien Rawat Inap';
    }

    public function get_ri_asesmen_awal_perawat()
    {
    	return view('page.ri.asesmen_awal_perawat', $this->data);
    }

    public function post_ri_asesmen_awal_perawat(Request $request)
    {
    	dd('posting_perawat');
    }

    public function get_ri_asesmen_awal_perawat_data()
    {
    	//
    }

    public function get_ri_asesmen_awal_perawat_read()
    {
    	$this->get_ri_asesmen_awal_perawat_data();
    	return view('page.ri.asesmen_awal_perawat_read', $this->data);
    }

    public function get_ri_asesmen_awal_perawat_edit()
    {
    	$this->get_ri_asesmen_awal_perawat_data();
    	return view('page.ri.asesmen_awal_perawat_edit', $this->data);
    }

    public function post_ri_asesmen_awal_perawat_edit(Request $request)
    {
    	dd('posting edit perawat');
    }

    public function get_ri_asesmen_awal_dokter()
    {
    	return view('page.ri.asesmen_awal_dokter', $this->data);
    }

    public function post_ri_asesmen_awal_dokter(Request $request)
    {
    	dd('posting_dokter');
    }

    public function get_ri_asesmen_awal_dokter_data()
    {
    	//
    }

    public function get_ri_asesmen_awal_dokter_read()
    {
    	$this->get_ri_asesmen_awal_dokter_data();
    	return view('page.ri.asesmen_awal_dokter_read', $this->data);
    }

    public function get_ri_asesmen_awal_dokter_edit()
    {
    	$this->get_ri_asesmen_awal_dokter_data();
    	return view('page.ri.asesmen_awal_dokter_edit', $this->data);
    }

    public function post_ri_asesmen_awal_dokter_edit(Request $request)
    {
    	dd('posting edit dokter');
    }

}
