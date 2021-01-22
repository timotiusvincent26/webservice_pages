<?php
// Kalo mau akses carousel, di controller websia ganti variabel login = 'sudah'
//  Kalo mau akses jumbotron, di controller websia ganti variabel login = 'belum'
if ($login == 'belum') {
    $urlTemplate = 'layoutWebsia/templateBeranda.php';
    $urlCarouselorJumbotron = 'kontenWebsia/halamanUtama/jumbotron.php';
} else if ($login == 'sudah') {
    $urlTemplate = 'layoutWebsia/templateBerandaLogin.php';
    $urlCarouselorJumbotron = 'kontenWebsia/halamanUtama/carousel.php';
}
?>

<?= $this->extend($urlTemplate); ?>

<?= $this->section('content'); ?>


<!-- Awal User Profile-->

</div>
<div class="flex md:flex-row flex-col-reverse my-8 pt-0 lg:px-20 md:px-4 md:pt-4">
    <div class="md:w-1/2 w-full md:flex md:items-stretch font-paragraph text-sm">
        <div class="md:w-1/2 justify-center object-center space-y-4">
            <img class="block float-none mb-2 px-6 object-contain" src="/img/avatar.png" alt="">
            <a class="block bg-secondary text-white text-center py-1 px-3 mx-auto rounded-full w-24 cursor-pointer border-secondary border-2 hover:text-secondary hover:bg-white hover:border-opacity-70 transition-colors duration-300" href="">Edit Profil</a>
        </div>
        <div class="md:w-1/2 block md:px-2 md:py-6">
            <h3 class="font-heading text-secondary text-2xl mb-1 font-extrabold">ZAHLUL FUADI</h3>
            <div class="mb-5">
                <span class="font-small bg-gray-300 py-1 px-2 rounded-lg text-primary align-middle">Alumni</span>
                <span class="font-small bg-gray-300 py-1 px-2 rounded-lg text-primary align-middle">Admin</span>
            </div>
            <p class="mb-5">Aceh, 32 Januari 2021</p>
            <p class="">
                Bekerja di BPS Provinsi Aceh <br />
                Sebagai Kepala BPS
            </p>
            <span>
                <img class="my-2 mr-2 w-5 float-left" src="/img/icon/maps_flag.png" alt="">
                <p class="my-2"> Alamat tempat tinggal </p>
            </span>

        </div>
    </div>
    <div class="md:w-1/2 w-full md:px-8 md:py-6 pb-4">
        <div>
            <p class="text-primary text-justify md:text-left font-paragraph text-sm">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat repellendus omnis, iure numquam, quam quas, at fugit fuga voluptatibus ipsum nostrum doloremque? Harum cum quos ea qui dicta blanditiis laborum!
            </p>
        </div>
        <div class="space-x-3 md:py-6">
            <a href="https://facebook.com" class="inline-block">
                <img src="/img/icon/fb.png" alt="" class="w-6">
            </a>
            <a href="https://twitter.com" class="inline-block">
                <img src="/img/icon/twit.png" alt="" class="w-6">
            </a>
            <a href="https://instagram.com" class="inline-block">
                <img src="/img/icon/ig.png" alt="" class="w-6">
            </a>
            <div class="inline-block">
                <img src="/img/icon/telp.png" alt="" class="float-left w-6">
                <span class="font-paragraph text-xs object-center"> 0852-XXXX-XXXX </span>
            </div>
            <div class="inline-block">
                <img src="/img/icon/msg.png" alt="" class="float-left w-6">
                <span class="font-paragraph text-xs object-center"> 0852-XXXX-XXXX </span>
            </div>
        </div>
    </div>

</div>
<!-- Akhir User Profile-->

<!-- Awal Rekomendasi -->
<div class="bg-primary my-8 pt-0 lg:px-20 md:px-8 px-2">
    <div class="static md:w-full md:px-2 md:py-8 pb-4">
        <div class="md:mb-6 mb-2 text-center md:text-left text-secondary font-semibold">
            <a class="float-right bg-secondary font-paragraph text-sm text-white text-center py-0 px-3 mx-auto rounded-full cursor-pointer border-secondary border-2 hover:text-secondary hover:bg-white hover:border-opacity-70 transition-colors duration-300" href="">
                Lihat Semua Rekomendasi
                <img src="/img/icon/panah.png" alt="" class="float-right pl-2">
            </a>
            <h2 class="font-heading text-xl">Alumni yang mungkin Anda kenal</h2>
        </div>
        <div class="holder mx-auto w-10/12 grid sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-x-8 ">
            <!-- 1 card -->
            <div class="each rounded-3xl m-2 shadow-lg border-gray-800 bg-white relative">
                <img class="w-24 mx-auto py-4" src="/img/avatar.png" alt="" /> <!-- Hilangin padding klo dah ada gambar, dan pake w-full aja -->
                <!-- <div class="badge absolute top-0 right-0 bg-secondary m-3 text-white p-1 px-2 text-xs font-bold rounded">Hai</div> -->
                <div class="desc p-2">
                    <a href="https://www.youtube.com/watch?v=dvqT-E74Qlo" target="_new" class="title font-heading font-bold text-primary block cursor-pointer text-center hover:underline">Nama Lengkap</a>
                    <span class="description font-paragraph text-primary text-center text-base block py-2 border-gray-400 mb-2">Atribut</span>
                    <a class="block bg-gray-300 font-paragraph text-primary text-sm text-center py-1 px-3 my-4 mx-auto rounded-lg w-full cursor-pointer border-gray-300 hover:bg-gray-400 hover:border-opacity-70 transition-colors duration-300" href="">Lihat Profil</a>
                </div>
            </div>
            <!-- 1 card -->
            <div class="each rounded-3xl m-2 shadow-lg border-gray-800 bg-white relative">
                <img class="w-24 mx-auto py-4" src="/img/avatar.png" alt="" /> <!-- Hilangin padding klo dah ada gambar, dan pake w-full aja -->
                <div class="desc p-2">
                    <a href="https://www.youtube.com/watch?v=dvqT-E74Qlo" target="_new" class="title font-heading font-bold text-primary block cursor-pointer text-center hover:underline">Nama Lengkap</a>
                    <span class="description font-paragraph text-primary text-center text-base block py-2 border-gray-400 mb-2">Atribut</span>
                    <a class="block bg-gray-300 font-paragraph text-primary text-sm text-center py-1 px-3 my-4 mx-auto rounded-lg w-full cursor-pointer border-gray-300 hover:bg-gray-400 hover:border-opacity-70 transition-colors duration-300" href="">Lihat Profil</a>
                </div>
            </div>
            <!-- 1 card -->
            <div class="each rounded-3xl m-2 shadow-lg border-gray-800 bg-white relative">
                <img class="w-24 mx-auto py-4" src="/img/avatar.png" alt="" /> <!-- Hilangin padding klo dah ada gambar, dan pake w-full aja -->
                <div class="desc p-2">
                    <a href="https://www.youtube.com/watch?v=dvqT-E74Qlo" target="_new" class="title font-heading font-bold text-primary block cursor-pointer text-center hover:underline">Nama Lengkap</a>
                    <span class="description font-paragraph text-primary text-center text-base block py-2 border-gray-400 mb-2">Atribut</span>
                    <a class="block bg-gray-300 font-paragraph text-primary text-sm text-center py-1 px-3 my-4 mx-auto rounded-lg w-full cursor-pointer border-gray-300 hover:bg-gray-400 hover:border-opacity-70 transition-colors duration-300" href="">Lihat Profil</a>
                </div>
            </div>
            <!-- 1 card -->
            <div class="each rounded-3xl m-2 shadow-lg border-gray-800 bg-white relative">
                <img class="w-24 mx-auto py-4" src="/img/avatar.png" alt="" /> <!-- Hilangin padding klo dah ada gambar, dan pake w-full aja -->
                <div class="desc p-2">
                    <a href="https://www.youtube.com/watch?v=dvqT-E74Qlo" target="_new" class="title font-heading font-bold text-primary block cursor-pointer text-center hover:underline">Nama Lengkap</a>
                    <span class="description font-paragraph text-primary text-center text-base block py-2 border-gray-400 mb-2">Atribut</span>
                    <a class="block bg-gray-300 font-paragraph text-primary text-sm text-center py-1 px-3 my-4 mx-auto rounded-lg w-full cursor-pointer border-gray-300 hover:bg-gray-400 hover:border-opacity-70 transition-colors duration-300" href="">Lihat Profil</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Akhir Rekomendasi -->

<!-- Awal Informasi Umum -->
<div class="w-full my-8 lg:px-20 md:px-8 px-2">
    <h3 class="font-heading font-bold text-lg text-secondary">Informasi Umum</h3>
    <table class="table-auto font-paragraph text-primary ml-5 mt-3">
        <tbody>
            <?php for ($x = 0; $x <= 5; $x++) : ?>
                <tr>
                    <td class="font-bold">Atribut : </td>
                    <td class="pl-4">Isi Atribut</td>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table>
    <hr class="border-primary border-opacity-75 w-3/4 object-center mx-auto mt-8">
</div>
<!-- Akhir Informasi Umum -->

<!-- Awal Riwayat Pendidikan -->
<div class="w-full my-8 lg:px-20 md:px-8 px-2">
    <h3 class="font-heading font-bold text-lg text-secondary">Riwayat Pendidikan</h3>
    <table class="table-auto font-paragraph text-primary ml-5 mt-3">
        <tbody>
            <?php for ($x = 0; $x <= 5; $x++) : ?>
                <tr>
                    <td class="font-bold">Atribut : </td>
                    <td class="pl-4">Isi Atribut</td>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table>
    <hr class="border-primary border-opacity-75 w-3/4 object-center mx-auto mt-8">
</div>
<!-- Akhir Riwayat Pendidikan -->

<!-- Awal Riwayat Pekerjaan -->
<div class="w-full my-8 lg:px-20 md:px-8 px-2">
    <h3 class="font-heading font-bold text-lg text-secondary">Riwayat Pekerjaan</h3>
    <table class="table-auto font-paragraph text-primary ml-5 mt-3">
        <tbody>
            <?php for ($x = 0; $x <= 5; $x++) : ?>
                <tr>
                    <td class="font-bold">Atribut : </td>
                    <td class="pl-4">Isi Atribut</td>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table>
    <hr class="border-primary border-opacity-75 w-3/4 object-center mx-auto mt-8">
</div>
<!-- Akhir Riwayat Pekerjaan -->

<!-- Awal Riwayat Organisasi -->
<div class="w-full my-8 lg:px-20 md:px-8 px-2">
    <h3 class="font-heading font-bold text-lg text-secondary">Riwayat Organisasi</h3>
    <table class="table-auto font-paragraph text-primary ml-5 mt-3">
        <tbody>
            <?php for ($x = 0; $x <= 5; $x++) : ?>
                <tr>
                    <td class="font-bold">Atribut : </td>
                    <td class="pl-4">Isi Atribut</td>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table>
</div>
<!-- Akhir Riwayat Organisasi -->

<?= $this->endSection(); ?>