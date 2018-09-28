<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mindie extends Controller
{
    function index(){
		return view('index');
	}
	
	function tambah(){
		echo 'Controller contoh dari Mindie di tambah';
	}
}
