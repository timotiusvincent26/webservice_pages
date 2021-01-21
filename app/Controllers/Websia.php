<?php

namespace App\Controllers;

class Websia extends BaseController
{
    public function index()
    {
        // ganti login ='sudah' atau 'belum' sesuai keadaan sudah login atau belum
        $data['judulHalaman'] = 'Beranda WEBSIA';
        $data['login'] = 'sudah';
        return view('kontenWebsia/halamanUtama/beranda', $data);
    }

    public function coba()
    {
        return view('cobaWebsia/map');
    }
}
