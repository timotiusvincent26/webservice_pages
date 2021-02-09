<?php

namespace App\Controllers;

class Webservice extends BaseController
{
	public function index()
	{
		$data['judul'] = 'Web Service | SIA';
		$data['login'] = 'sudah';
		return view('webservice/kontenWebservice/halamanUtama/utama.php', $data);
	}

	public function dokumentasi()
	{
		$data['judul'] = 'Dokumentasi Web Service | SIA';
		return view('webservice/kontenWebservice/dokumentasi/dokumentasi.php', $data);
	}

	public function proyek()
	{
		$data['judul'] = 'Proyek Web Service | SIA';
		return view('webservice/kontenWebservice/proyek/proyek.php', $data);
	}

	public function buatProyek()
	{
		$data['judul'] = 'Proyek Web Service | SIA';
		return view('webservice/kontenWebservice/proyek/buatProyek.php', $data);
	}

	public function profilDeveloper()
	{
		$data['judul'] = 'Profil Web Service | SIA';
		return view('webservice/kontenWebservice/profilDeveloper/profilDeveloper.php', $data);
	}

	//--------------------------------------------------------------------

}
