<?php

namespace App\Controllers;

class Websia extends BaseController
{
    public function index()
    {
        // ganti login ='sudah' atau 'belum' sesuai keadaan sudah login atau belum
        $data['judulHalaman'] = 'Beranda WEBSIA';
        $data['login'] = 'sudah';
        return view('websia/kontenWebsia/halamanUtama/beranda', $data);
    }

    public function searchAndFilter()
    {
        $data['judulHalaman'] = 'Search And Filter';
        return view('websia/kontenWebsia/searchAndFilter/searchAndFilter', $data);
    }

    public function profil()
    {
        // ganti status ='user' atau 'bukan user' sesuai pengakses, user itu untuk melihat profil diri sendiri, sedangkan bukan user untuk melihat profil orang lain
        $data['status'] = 'user';
        $data['judulHalaman'] = 'User Profile';
        return view('websia/kontenWebsia/userProfile/userProfile', $data);
    }

    public function rekomendasi()
    {
        $data['judulHalaman'] = 'Rekomendasi';
        return view('websia/kontenWebsia/userProfile/rekomendasi', $data);
    }

    public function galeri()
    {
        $data['judulHalaman'] = 'Galeri Kenangan Alumni';
        return view('websia/kontenWebsia/galeri/galeriAlumni', $data);
    }

    public function coba()
    {
        $data['judulHalaman'] = 'Halaman buat coba coba';
        return view('cobaWebsia/sidebar', $data);
    }
}
