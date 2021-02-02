<?= $this->extend('websia/kontenWebsia/editProfile/layoutEdit.php'); ?>

<?= $this->section('contentEdit'); ?>
<div class="grid grid-cols-3 gap-x-4">
    <div class="p-6">
        <img src="/img/avatar.png" alt="" class="mb-6">
        <div class="flex justify-center">
            <button class="bg-secondary rounded-full font-paragraph text-white px-3 py-1 hover:bg-secondaryhover">Ubah foto profil</button>
        </div>
    </div>
    <div class="col-span-2 mt-6 mr-6">
        <form action="" class="font-paragraph text-primary">
            <div class="font-medium mb-2">Nama:</div>
            <input type="text" name="nama" id="nama" class="w-full p-2 border-2 border-gray rounded-lg mb-2" placeholder="Nama Lengkap">
            <div class="grid grid-cols-2 gap-x-4 mb-2">
                <div>
                    <div class="font-medium mb-2">NIM:</div>
                    <div class="font-heading text-black mb-2">XXXXXXXXX</div>
                    <div class="font-medium mb-2">Jenis Kelamin:</div>
                    <div class="grid grid-cols-2 gap-x-2">
                        <div class="flex gap-x-2 items-center">
                            <input type="radio" name="jeniskelamin" id="lakilaki" value="laki-laki">
                            <div class="font-heading text-sm text-black font-medium">Laki-laki</div>
                        </div>
                        <div class="flex gap-x-2 items-center">
                            <input type="radio" name="jeniskelamin" id="perempuan" value="perempuan">
                            <div class="font-heading text-sm text-black font-medium">Perempuan</div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="font-medium mb-2">Angkatan:</div>
                    <div class="font-heading text-black">XX</div>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-x-4 mb-2">
                <div>
                    <div class="font-medium mb-2">Tempat Lahir:</div>
                    <input type="text" name="tempatlahir" id="tempatlahir" class="w-full p-2 border-2 border-gray rounded-lg mb-2" placeholder="Tempat lahir">
                    <div class="font-medium mb-2">No. Telepon:</div>
                    <input type="text" name="notelepon" id="notelepon" class="w-full p-2 border-2 border-gray rounded-lg mb-2" placeholder="08999339379">
                    <div class="font-medium mb-2">Email:</div>
                    <input type="email" name="email" id="email" class="w-full p-2 border-2 border-gray rounded-lg mb-2" placeholder="iniemail@stis.ac.id">
                </div>
                <div>
                    <div class="font-medium mb-2">Tanggal Lahir:</div>
                    <input type="date" name="tanggallahir" id="tanggallahir" class="w-full p-2 border-2 border-gray rounded-lg mb-2">
                </div>
            </div>
            <div class="font-medium mb-2">Alamat:</div>
            <textarea name="alamat" id="alamat" cols="50" rows="3" placeholder="Jl. Terwilen Margodadi, Seyegan, Kregolan, Margomulyo, Kec. Sleman, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55561" class="w-full p-2 border-2 border-gray rounded-lg mb-2"></textarea>
            <div class="w-1/2 mr-4">
                <div class="font-medium mb-2">Status Bekerja:</div>
                <div class="grid grid-cols-2 gap-x-2 mb-2">
                    <div class="flex gap-x-2 items-center">
                        <input type="radio" name="statusbekerja" id="bekerja" value="bekerja">
                        <div class="font-heading text-sm text-black font-medium">Bekerja</div>
                    </div>
                    <div class="flex gap-x-2 items-center">
                        <input type="radio" name="statusbekerja" id="tidakbekerja" value="tidakbekerja">
                        <div class="font-heading text-sm text-black font-medium">Tidak Bekerja</div>
                    </div>
                </div>
                <div class="font-medium mb-2">Perkiraan Tahun Pensiun:</div>
                <input type="number" name="tahunpensiun" id="tahunpensiun" min="1990" class="w-full p-2 border-2 border-gray rounded-lg mb-2" placeholder="2020">
                <div class="font-medium mb-2">Jabatan Terakhir:</div>
                <input type="text" name="jabatan" id="jabatan" class="w-full p-2 border-2 border-gray rounded-lg mb-2" placeholder="Jabatan terakhir">
                <div class="font-medium mb-2">Aktif PNS:</div>
                <div class="grid grid-cols-2 gap-x-2 mb-2">
                    <div class="flex gap-x-2 items-center">
                        <input type="radio" name="pns" id="aktif" value="aktif">
                        <div class="font-heading text-sm text-black font-medium">Aktif</div>
                    </div>
                    <div class="flex gap-x-2 items-center">
                        <input type="radio" name="pns" id="tidakaktif" value="tidakaktif">
                        <div class="font-heading text-sm text-black font-medium">Tidak Aktif</div>
                    </div>
                </div>
            </div>
            <div class="flex justify-end mb-6">
                <input type="submit" value="KIRIM" class="w-24 text-center py-1 bg-secondary hover:bg-secondaryhover text-white rounded-full cursor-pointer">
            </div>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>