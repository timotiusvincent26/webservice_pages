<?= $this->extend('websia/kontenWebsia/editProfile/layoutEdit.php'); ?>

<?= $this->section('contentEdit'); ?>
<div class="md:grid md:grid-cols-3 md:gap-x-4">
    <div class="p-6">
        <div class="flex justify-center">
            <img src="/img/avatar.png" alt="" class="mb-6 md:w-full w-28">
        </div>
        <div class="flex justify-center">
            <button class="updateFotoProfil bg-secondary rounded-full font-paragraph text-white px-3 py-1 hover:bg-secondaryhover">Ubah foto profil</button>
        </div>
    </div>
    <div class="col-span-2 md:mt-6 ml-6 mr-6">
        <form action="" method="POST" class="font-paragraph text-primary">
            <label for="nama" class="font-medium mb-2">Nama:</label>
            <input type="text" name="nama" id="nama" class="w-full md:p-2 p-1 border-2 border-gray rounded-lg mb-2" placeholder="Nama Lengkap">
            <div class="grid grid-cols-2 gap-x-4">
                <div>
                    <div class="font-medium">NIM:</div>
                    <div class="font-heading text-black mb-2">XXXXXXXXX</div>
                </div>
                <div>
                    <div class="font-medium">Angkatan:</div>
                    <div class="font-heading text-black">XX</div>
                </div>
            </div>
            <div class="mb-2 lg:w-1/2 lg:mr-4">
                <label for="jeniskelamin" class="font-medium mb-2">Jenis Kelamin:</label>
                <div class="grid grid-cols-2 gap-x-2">
                    <div class="flex items-center">
                        <label class="font-heading text-sm text-gray-500 font-medium jk_label"><input type="radio" name="jeniskelamin" id="lakilaki" value="lakilaki" class="cursor-pointer jk_radio mr-2">Laki-laki</label>
                    </div>
                    <div class="flex items-center">
                        <label class="font-heading text-sm text-gray-500 font-medium jk_label"><input type="radio" name="jeniskelamin" id="perempuan" value="perempuan" class="cursor-pointer jk_radio mr-2">Perempuan</label>
                    </div>
                </div>
            </div>
            <div class="md:grid md:grid-cols-2 md:gap-x-4">
                <div>
                    <label for="tempatlahir" class="font-medium mb-2">Tempat Lahir:</label>
                    <input type="text" name="tempatlahir" id="tempatlahir" class="w-full md:p-2 p-1 border-2 border-gray rounded-lg mb-2" placeholder="Tempat lahir">
                </div>
                <div>
                    <label for="tanggallahir" class="font-medium mb-2">Tanggal Lahir:</label>
                    <input type="date" name="tanggallahir" id="tanggallahir" class="w-full md:p-2 p-1 border-2 border-gray rounded-lg mb-2">
                </div>
            </div>
            <div class="lg:w-1/2 lg:mb-2">
                <div class="lg:mr-2">
                    <label for="notelepon" class="font-medium mb-2">No. Telepon:</label>
                    <input type="text" name="notelepon" id="notelepon" class="w-full md:p-2 p-1 border-2 border-gray rounded-lg mb-2" placeholder="08999339379">
                    <label for="email" class="font-medium mb-2">Email:</label>
                    <input type="email" name="email" id="email" class="w-full md:p-2 p-1 border-2 border-gray rounded-lg mb-2" placeholder="iniemail@stis.ac.id">
                </div>
            </div>
            <label for="alamat" class="font-medium mb-2">Alamat:</label>
            <textarea name="alamat" id="alamat" cols="50" rows="3" placeholder="Jl. Terwilen Margodadi, Seyegan, Kregolan, Margomulyo, Kec. Sleman, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55561" class="w-full md:p-2 p-1 border-2 border-gray rounded-lg mb-2"></textarea>
            <div class="lg:w-1/2 lg:mr-4">
                <label for="statusbekerja" class="font-medium mb-2">Status Bekerja:</label>
                <div class="grid grid-cols-2 gap-x-2 mb-2">
                    <div class="flex items-center">
                        <label class="font-heading text-sm text-gray-500 font-medium sb_label"><input type="radio" name="statusbekerja" id="bekerja" value="bekerja" class="cursor-pointer sb_radio mr-2">Bekerja</label>
                    </div>
                    <div class="flex items-center">
                        <label class="font-heading text-sm text-gray-500 font-medium sb_label"><input type="radio" name="statusbekerja" id="tidakbekerja" value="tidakbekerja" class="cursor-pointer sb_radio mr-2">Tidak Bekerja</label>
                    </div>
                </div>
                <div class="mr-2">
                    <label for="tahunpensiun" class="font-medium mb-2">Perkiraan Tahun Pensiun:</label>
                    <input type="number" name="tahunpensiun" id="tahunpensiun" min="1990" max="2100" class="w-full md:p-2 p-1 border-2 border-gray rounded-lg mb-2" placeholder="2020">
                    <label for="jabatan" class="font-medium mb-2">Jabatan Terakhir:</label>
                    <input type="text" name="jabatan" id="jabatan" class="w-full md:p-2 p-1 border-2 border-gray rounded-lg mb-2" placeholder="Jabatan terakhir">
                </div>
                <label for="pns" class="font-medium mb-2">Aktif PNS:</label>
                <div class="grid grid-cols-2 gap-x-2 mb-2">
                    <div class="flex items-center">
                        <label class="font-heading text-sm text-gray-500 font-medium sp_label"><input type="radio" name="statuspns" id="aktif" value="aktif" class="cursor-pointer sp_radio mr-2">Aktif</label>
                    </div>
                    <div class="flex items-center">
                        <label class="font-heading text-sm text-gray-500 font-medium sp_label"><input type="radio" name="statuspns" id="tidakaktif" value="tidakaktif" class="cursor-pointer sp_radio mr-2">Tidak Aktif</label>
                    </div>
                </div>
            </div>
            <div class="flex justify-end mt-8 mb-6">
                <input type="submit" value="KIRIM" class="w-24 text-center py-1 bg-secondary hover:bg-secondaryhover text-white rounded-full cursor-pointer" id="submitBiodata">
            </div>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>