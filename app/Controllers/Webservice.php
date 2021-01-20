<?php

namespace App\Controllers;

class Webservice extends BaseController
{
	public function index()
	{
		return view('kontenWebservice/dokumentasi.php');
	}

	public function dokumentasi()
	{
		return view('kontenWebservice/dokumentasi.php');
	}

	public function proyek()
	{
		return view('kontenWebservice/proyek.php');
	}
	//--------------------------------------------------------------------

}
