<?php

namespace App\Controllers;

class Websia extends BaseController
{
    public function index()
    {
        // ganti login ='sudah' atau 'belum' sesuai keadaan sudah login atau belum
        $data['judulHalaman'] = 'Beranda WEBSIA';
        $data['login'] = 'belum';
        return view('kontenWebsia/halamanUtama/beranda', $data);
    }

    public function searchAndFilter()
    {
        $data['judulHalaman'] = 'Search And Filter';
        return view('kontenWebsia/searchAndFilter/searchAndFilter', $data);
    }

    public function profil()
    {
        $data['judulHalaman'] = 'User Profile';
        $data['login'] = 'sudah';
        return view('kontenWebsia/userProfile/userProfile', $data);
    }

    public function rekomendasi()
    {
        $data['judulHalaman'] = 'Rekomendasi';
        $data['login'] = 'sudah';
        return view('kontenWebsia/userProfile/rekomendasi', $data);
    }

    public function galeriFoto()
    {
        $data['judulHalaman'] = 'Galeri Kenangan Alumni';
        $data['login'] = 'sudah';
        return view('kontenWebsia/galeri/galeriAlumni', $data);
    }

    public function galeriVideo()
    {
        $data['judulHalaman'] = 'Galeri Video Kegiatan Alumni';
        $data['login'] = 'sudah';
        return view('kontenWebsia/galeri/galeriVidAlumni', $data);
    }

    public function galeriWisuda()
    {
        $data['judulHalaman'] = 'Galeri Video Wisuda';
        $data['login'] = 'sudah';
        return view('kontenWebsia/galeri/galeriWisuda', $data);
    }

    public function coba()
    {
        return view('cobaWebsia/map');
    }
}
