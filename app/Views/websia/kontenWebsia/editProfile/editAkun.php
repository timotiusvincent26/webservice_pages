<?= $this->extend('websia/kontenWebsia/editProfile/layoutEdit.php'); ?>

<?= $this->section('contentEdit'); ?>
<div class="p-6 font-paragraph text-primary min-h-screen">
    <div class="w-1/2">
        <div class="font-medium mb-2">Username:</div>
        <input type="text" name="username" id="username" class="w-full p-2 border-2 border-gray rounded-lg mb-2" placeholder="Username">
        <div class="font-medium mb-2">Password Baru:</div>
        <input type="password" name="passbaru" id="passbaru" class="w-full p-2 border-2 border-gray rounded-lg mb-2" placeholder="●●●●●●●●">
        <div class="font-medium mb-2">Ketik Ulang Password Baru:</div>
        <input type="password" name="ulangpassbaru" id="ulangpassbaru" class="w-full p-2 border-2 border-gray rounded-lg mb-2" placeholder="●●●●●●●●">
        <div class="text-red-600 text-xs mb-2 text-justify">Silakan masukkan password lama Anda untuk verifikasi.</div>
        <div class="font-medium mb-2">Password Lama:</div>
        <input type="password" name="passlama" id="passlama" class="w-full p-2 border-2 border-gray rounded-lg" placeholder="●●●●●●●●">
    </div>
    <div class="flex justify-end mb-6">
        <input type="submit" value="KIRIM" class="w-24 text-center py-1 bg-secondary hover:bg-secondaryhover text-white rounded-full cursor-pointer">
    </div>
</div>
<?= $this->endSection(); ?>
