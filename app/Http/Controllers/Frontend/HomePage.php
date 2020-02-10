<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePage extends Controller
{
    //
	function show(){

		return view('pages.home');
	}
}
