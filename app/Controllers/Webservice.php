<?php

namespace App\Controllers;

class Webservice extends BaseController
{
	public function index()
	{
		return view('kontenWebservice/utama_dev.php');
	}

	public function dokumentasi()
	{
		return view('kontenWebservice/dokumentasi.php');
	}
	//--------------------------------------------------------------------

}
