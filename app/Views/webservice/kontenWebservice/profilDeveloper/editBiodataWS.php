<?= $this->extend('webservice/kontenWebservice/profilDeveloper/layoutEditWS.php'); ?>

<?= $this->section('contentEdit'); ?>
<div class="flex justify-center">
    <div class="shadow-2xl rounded-xl md:p-16 p-4 lg:w-full w-5/6">
        <form action="" method="POST" class="font-paragraph text-primary">
            <label for="nama" class="font-medium">Nama:</label>
            <input type="text" name="nama" id="nama" class="inputForm mb-2" placeholder="Nama Lengkap">
            <div class="md:grid md:grid-cols-2 md:gap-x-6">
                <div>
                    <label for="tempatlahir" class="font-medium">Tempat Lahir:</label>
                    <input type="text" name="tempatlahir" id="tempatlahir" class="inputForm mb-2" placeholder="Tempat lahir">
                </div>
                <div>
                    <label for="tempatlahir" class="font-medium">Tanggal Lahir:</label>
                    <input type="date" name="tanggallahir" id="tanggallahir" class="inputForm mb-2">
                </div>
            </div>
            <label for="status" class="font-medium">Status:</label>
            <input type="text" name="status" id="status" class="inputForm mb-2" placeholder="Mahasiswa">
            <label for="instansi" class="font-medium">Instansi:</label>
            <input type="text" name="instansi" id="instansi" class="inputForm mb-2" placeholder="Politeknik Statistika STIS">
            <div class="flex justify-end">
                <input type="submit" value="SIMPAN" class="w-24 text-center py-1 bg-secondary hover:bg-secondaryhover text-white rounded-full cursor-pointer" id="submitBiodata">
            </div>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>