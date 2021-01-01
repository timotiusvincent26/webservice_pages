<?php

namespace App\Controllers;

class Websia extends BaseController
{
    public function index()
    {
        $data['judulHalaman'] = 'Beranda';
        return view('kontenWebsia/beranda', $data);
    }
}
