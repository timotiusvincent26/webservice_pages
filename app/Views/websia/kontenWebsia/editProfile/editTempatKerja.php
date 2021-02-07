<?= $this->extend('websia/kontenWebsia/editProfile/layoutEdit.php'); ?>

<?= $this->section('contentEdit'); ?>
<div class="p-6 font-paragraph text-primary lg:min-h-screen">
    <form action="" method="POST">
        <div class="md:w-1/2 w-full">
            <label for="nama" class="font-medium mb-2">Nama Instansi:</label>
            <input type="text" name="nama" id="nama" class="w-full p-2 border-2 border-gray rounded-lg mb-2" placeholder="Nama Lengkap">
            <label for="alamat" class="font-medium mb-2">Alamat Instansi:</label>
            <textarea type="text" name="alamat" id="alamat" class="w-full p-2 border-2 border-gray rounded-lg mb-2 resize-none" placeholder="Jl. Zimbabwe Tercinta No. 69 Kelurahan Tokyo Ghoul"></textarea>
            <label for="telepon" class="font-medium mb-2">No Telepon Instansi:</label>
            <input type="text" name="telepon" id="telepon" class="w-full p-2 border-2 border-gray rounded-lg mb-2" placeholder="727 6 kali">
            <label for="faks" class="font-medium mb-2">Faks Instansi:</label>
            <input type="text" name="faks" id="faks" class="w-full p-2 border-2 border-gray rounded-lg mb-2" placeholder="082233445566">
            <label for="email" class="font-medium mb-2">Email:</label>
            <input type="text" name="email" id="email" class="w-full p-2 border-2 border-gray rounded-lg mb-2" placeholder="instansimantap@mantap.co.id">
        </div>
        <div class="flex justify-end md:mb-6 mt-48">
            <input type="submit" value="KIRIM" class="w-24 text-center py-1 bg-secondary hover:bg-secondaryhover text-white rounded-full cursor-pointer" id="submitTempatKerja">
        </div>
    </form>
</div>
<?= $this->endSection(); ?>