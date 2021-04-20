<?php

namespace App\Controllers;

class Websia extends BaseController
{
    public function index()
    {
        // ganti login ='sudah' atau 'belum' sesuai keadaan sudah login atau belum
        $data['judulHalaman'] = 'Beranda WEBSIA';
        $data['login'] = 'sudah';
        $data['active'] = 'beranda';
        return view('websia/kontenWebsia/halamanUtama/beranda', $data);
    }

    public function searchAndFilter()
    {
        $kata_kunci = $_GET['kata_kunci'];
        $data['judulHalaman'] = 'Search And Filter';
        $data['active'] = '';
        if ($kata_kunci == "kosong") {
            return view('websia/kontenWebsia/searchAndFilter/searchKosong', $data);
        } else {
            return view('websia/kontenWebsia/searchAndFilter/searchAndFilter', $data);
        }
    }

    public function profil()
    {
        // ganti status ='user' atau 'bukan user' sesuai pengakses, user itu untuk melihat profil diri sendiri, sedangkan bukan user untuk melihat profil orang lain
        $data['status'] = 'user';
        $data['judulHalaman'] = 'User Profile';
        $data['active'] = 'profil';
        return view('websia/kontenWebsia/userProfile/userProfile', $data);
    }

    public function rekomendasi()
    {
        $data['judulHalaman'] = 'Rekomendasi';
        $data['active'] = 'profil';
        return view('websia/kontenWebsia/userProfile/rekomendasi', $data);
    }

    public function galeriFoto()
    {
        $data['judulHalaman'] = 'Galeri Kenangan Alumni';
        $data['active'] = 'galeri';
        return view('websia/kontenWebsia/galeri/galeriAlumni', $data);
    }

    public function galeriVideo()
    {
        $data['judulHalaman'] = 'Galeri Video Kegiatan Alumni';
        $data['active'] = 'galeri';
        return view('websia/kontenWebsia/galeri/galeriVidAlumni', $data);
    }

    public function galeriWisuda()
    {
        $data['judulHalaman'] = 'Galeri Video Wisuda';
        $data['active'] = 'galeri';
        return view('websia/kontenWebsia/galeri/galeriWisuda', $data);
    }

    public function editProfil()
    {
        $data['judulHalaman'] = 'Edit Profil';
        $data['login'] = 'sudah';
        $data['active'] = 'profil';
        return view('websia/kontenWebsia/editProfile/editBiodata.php', $data);
    }

    public function editPendidikan()
    {
        $data['judulHalaman'] = 'Edit Profil';
        $data['active'] = 'pendidikan';
        $data['login'] = 'sudah';
        return view('websia/kontenWebsia/editProfile/editPendidikan.php', $data);
    }

    public function editTempatKerja()
    {
        $data['judulHalaman'] = 'Edit Profil';
        $data['login'] = 'sudah';
        $data['active'] = 'tempatKerja';
        return view('websia/kontenWebsia/editProfile/editTempatKerja.php', $data);
    }

    public function editPrestasi()
    {
        $data['judulHalaman'] = 'Edit Profil';
        $data['login'] = 'sudah';
        $data['active'] = 'prestasi';
        return view('websia/kontenWebsia/editProfile/editPrestasi.php', $data);
    }

    public function editPublikasi()
    {
        $data['judulHalaman'] = 'Edit Profil';
        $data['login'] = 'sudah';
        $data['active'] = 'publikasi';
        return view('websia/kontenWebsia/editProfile/editPublikasi.php', $data);
    }

    public function editAkun()
    {
        $data['judulHalaman'] = 'Edit Profil';
        $data['login'] = 'sudah';
        $data['active'] = 'akun';
        return view('websia/kontenWebsia/editProfile/editAkun.php', $data);
    }

    public function berita()
    {
        $data['judulHalaman'] = 'Berita/Artikel';
        $data['login'] = 'sudah';
        $data['active'] = '';
        return view('websia/kontenWebsia/beritaArtikel/berita.php', $data);
    }

    public function berandaBerita()
    {
        $data['judulHalaman'] = 'Beranda Berita/Artikel';
        $data['login'] = 'sudah';
        $data['active'] = '';
        return view('websia/kontenWebsia/beritaArtikel/berandaBerita.php', $data);
    }

    public function coba()
    {
        $data['judulHalaman'] = 'Edit Profil';
        $data['login'] = 'sudah';
        return view('cobaWebsia/map', $data);
    }
}
