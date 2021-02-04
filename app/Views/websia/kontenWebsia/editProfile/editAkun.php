<?= $this->extend('websia/kontenWebsia/editProfile/layoutEdit.php'); ?>

<?= $this->section('contentEdit'); ?>
<div class="p-6 font-paragraph text-primary min-h-screen">
    <form action="" method="POST">
        <div class="w-1/2">
            <label for="username" class="font-medium mb-2">Username:</label>
            <input type="text" name="username" id="username" class="w-full p-2 border-2 border-gray rounded-lg mb-2" placeholder="Username">
            <label for="passbaru" class="font-medium mb-2">Password Baru:</label>
            <input type="password" name="passbaru" id="passbaru" class="w-full p-2 border-2 border-gray rounded-lg mb-2" placeholder="●●●●●●●●">
            <label for="ulangpassbaru" class="font-medium mb-2">Ketik Ulang Password Baru:</label>
            <input type="password" name="ulangpassbaru" id="ulangpassbaru" class="w-full p-2 border-2 border-gray rounded-lg mb-2" placeholder="●●●●●●●●">
            <div class="text-red-600 text-xs mb-2 text-justify">Silakan masukkan password lama Anda untuk verifikasi.</div>
            <label for="passlama" class="font-medium mb-2">Password Lama:</label>
            <input type="password" name="passlama" id="passlama" class="w-full p-2 border-2 border-gray rounded-lg" placeholder="●●●●●●●●">
        </div>
        <div class="flex justify-end mb-6 mt-48">
            <input type="submit" value="KIRIM" class="w-24 text-center py-1 bg-secondary hover:bg-secondaryhover text-white rounded-full cursor-pointer" id="submitAkun">
        </div>
    </form>
</div>
<?= $this->endSection(); ?>