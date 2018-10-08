<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestingController extends Controller
{
    public function javascript_test() {
    	return view('javascript_test');
    }

    public function sweetalert2_test() {
    	return view('test_sweetalert2');
    }
}
