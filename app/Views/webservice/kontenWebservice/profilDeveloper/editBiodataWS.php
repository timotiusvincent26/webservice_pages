<?= $this->extend('webservice/kontenWebservice/profilDeveloper/layoutEditWS.php'); ?>

<?= $this->section('contentEdit'); ?>
<div class="shadow-2xl rounded-xl p-16">
    <form action="" method="POST" class="font-paragraph text-primary">
        <label for="nama" class="font-bold">Nama:</label>
        <input type="text" name="nama" id="nama" class="w-full mt-2 md:p-2 p-1 border-2 border-gray rounded-lg mb-4" placeholder="Nama Lengkap">
        <div class="grid grid-cols-2 gap-x-6">
            <div>
                <label for="tempatlahir" class="font-bold">Tempat Lahir:</label>
                <input type="text" name="tempatlahir" id="tempatlahir" class="w-full mt-2 md:p-2 p-1 border-2 border-gray rounded-lg mb-4" placeholder="Tempat lahir">
            </div>
            <div>
                <label for="tempatlahir" class="font-bold">Tanggal Lahir:</label>
                <input type="date" name="tanggallahir" id="tanggallahir" class="w-full mt-2 md:p-2 p-1 border-2 border-gray rounded-lg mb-4">
            </div>
        </div>
        <label for="status" class="font-bold">Status:</label>
        <input type="text" name="status" id="status" class="w-full mt-2 md:p-2 p-1 border-2 border-gray rounded-lg mb-4" placeholder="Mahasiswa">
        <label for="instansi" class="font-bold">Instansi:</label>
        <input type="text" name="instansi" id="instansi" class="w-full mt-2 md:p-2 p-1 border-2 border-gray rounded-lg mb-4" placeholder="Politeknik Statistika STIS">
        <div class="flex justify-end">
            <input type="submit" value="SIMPAN" class="w-24 text-center py-1 bg-secondary hover:bg-secondaryhover text-white rounded-full cursor-pointer" id="simpanBiodata">
        </div>
    </form>
</div>
<?= $this->endSection(); ?>