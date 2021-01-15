<?php

namespace App\Controllers;

class Websia extends BaseController
{
    public function index()
    {
        $data['judulHalaman'] = 'Beranda WEBSIA';
        return view('kontenWebsia/beranda', $data);
    }
}
