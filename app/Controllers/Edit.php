<?php

namespace App\Controllers;

class Edit extends BaseController
{
    public function index()
    {
        $data['judulHalaman'] = 'Edit Profil';
        $data['login'] = 'sudah';
        return view('websia/kontenWebsia/editProfile/editBiodata.php', $data);
    }

    public function biodata()
    {
        $data['judulHalaman'] = 'Edit Profil';
        $data['login'] = 'sudah';
        return view('websia/kontenWebsia/editProfile/editBiodata.php', $data);
    }

    public function akun()
    {
        $data['judulHalaman'] = 'Edit Profil';
        $data['login'] = 'sudah';
        return view('websia/kontenWebsia/editProfile/editAkun.php', $data);
    }
}
