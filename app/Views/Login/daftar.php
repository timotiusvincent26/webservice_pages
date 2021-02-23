<?= $this->extend('Login/templateLogin.php'); ?>

<?= $this->section('content'); ?>

<div class="rounded-xl shadow-2xl sm:px-8 px-4 pt-4 mt-6 lg:mx-14 md:mx-10 sm:mx-8 mx-0">
    <h3 class="font-bold text-primary lg:text-3xl md:text-2xl text-xl sm:block flex justify-center text-center sm:text-left">Panduan Pendaftaran Sistem Informasi Alumni</h3>
    <a href="/login/" class="text-secondary sm:text-base font-medium sm:block hidden hover:text-yellow-700 w-max">Kembali ke laman login</a>
    <div class="flex justify-center mt-4 sm:pb-4 pb-2">
        <img src="/img/daftar.jpg" alt="Daftar">
    </div>
    <div class="sm:hidden pb-3 text-right">
        <a href="/login/" class="text-secondary text-sm font-medium hover:text-yellow-700">Kembali ke laman login</a>
    </div>
</div>

<?= $this->endSection(); ?>
