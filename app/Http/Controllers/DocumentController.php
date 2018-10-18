<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListDocument;
use Session;

class DocumentController extends Controller
{
    public function index(Request $request)
    {
    	if(Session::has('id_pasien')) {
    		$id_regis = Session::get('id_pasien');
    		$this->data['dokumen'] = ListDocument::where('id_regis', $id_regis)->get()->first();
    	}
    	else {
    		$request->session()->put('pesan_kesalahan', 'Silahkan pilih salah satu pasien terlebih dahulu');
    		return back();
    	}
    	return view('page.list_document.index', $this->data);
    }
}
