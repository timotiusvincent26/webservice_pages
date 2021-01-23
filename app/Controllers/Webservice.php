<?php

namespace App\Controllers;

class Webservice extends BaseController
{
	public function index()
	{
		$data['judul'] = 'Web Service | SIA';
		return view('webservice/kontenWebservice/halamanUtama/utama_dev.php', $data);
	}

	public function dokumentasi()
	{
		$data['judul'] = 'Dokumentasi Web Service | SIA';
		return view('webservice/kontenWebservice/dokumentasi/dokumentasi.php', $data);
	}
	//--------------------------------------------------------------------

}
