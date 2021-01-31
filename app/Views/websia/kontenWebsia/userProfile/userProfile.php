<!-- ganti status ='user' atau 'bukan user' di controller websia class userProfile sesuai pengakses. 
User itu untuk melihat profil diri sendiri, sedangkan bukan user untuk melihat profil orang lain. 
Hal ini berpengaruh pada ada tidaknya tampilan tombol edit profil di halaman profil -->
<?php
if ($status == 'bukan user') {
    $tombolEdit = 'hidden';
} else if ($status == 'user') {
    $tombolEdit = '';
}
?>
<?= $this->extend('websia/layoutWebsia/templateBerandaLogin.php'); ?>

<?= $this->section('content'); ?>
<!-- Awal User Profile-->
<div class="md:flex block items-center md:flex-col lg:flex-row flex-col-reverse my-8 pt-0 lg:px-20 md:px-8 md:pt-4">
    <div class="lg:w-3/5 w-full md:flex items-center font-paragraph text-sm">
        <div class="md:w-2/5 mb-8 justify-center object-center space-y-4">
            <!-- Avatar user profile -->
            <div class="flex flex-wrap justify-center">
                <div class="w-3/4 sm:w-full px-4">
                    <!-- syarat foto disini harus persegi (solusi : object fit) -->
                    <img src="https://demos.creative-tim.com/tailwindcss-starter-project/_next/static/images/team-1-800x800-fa5a7ac2c81a43925586ea85f2fea332.jpg" alt="..." class="shadow rounded-full max-w-full h-auto align-middle border-none" />
                    <!-- <img src="/img/tes/download.jpg" alt="..." class="shadow rounded-full max-w-full h-auto align-middle border-none" /> -->
                </div>
            </div>
            <!-- Tombol edit profil yang ketika di klik akan mengarah ke halaman edit profil -->
            <a class="block bg-secondary text-white text-center py-1 md:py-2 px-4 mx-auto rounded-full w-24 md:w-32 cursor-pointer hover:bg-secondaryhover transition-colors duration-300 <?= $tombolEdit ?>" href="">Edit Profil</a>
        </div>
        <div class="md:w-3/5 justify-center mx-auto items-center text-center md:text-left object-center md:px-8 md:py-6">
            <!-- nama alumni -->
            <h3 class="font-heading text-secondary text-2xl md:text-3xl lg:pr-1 px-8 md:px-0 mb-2 font-extrabold uppercase">Nama Lengkap</h3>
            <div class="mb-8">
                <!-- role alumni -->
                <span class="font-paragraph text-xs inline-block bg-gray-300 mb-1 py-1 px-2 md:px-3 lg:px-4 rounded-lg text-primary align-middle uppercase">Alumni</span>
                <span class="font-paragraph text-xs inline-block bg-gray-300 mb-1 py-1 px-2 md:px-3 lg:px-4 rounded-lg text-primary align-middle uppercase">Admin</span>
                <span class="font-paragraph text-xs inline-block bg-gray-300 mb-1 py-1 px-2 md:px-3 lg:px-4 rounded-lg text-primary align-middle uppercase">Developer</span>
            </div>
            <!-- tempat dan tanggal lahir -->
            <p class="font-heading text-center md:text-left text-base mb-5">Aceh, 32 Januari 2021</p>
            <!-- Instansi tempat bekerja dan jabatan -->
            <p class="font-heading text-base text-center md:text-left">
                Bekerja di BPS Provinsi Aceh <br />
                Sebagai Kepala BPS
            </p>
            <span class="font-heading flex justify-center md:justify-start px-8 md:px-0 text-base items-center text-center md:text-left">
                <img class="my-2 mt-4 mr-2 w-5 float-left" src="/img/icon/maps_flag.png" alt="">
                <!-- Lokasi tempat tinggal -->
                <p class="my-2 mt-4"> Lokasi Tempat Tinggal </p>
            </span>

        </div>
    </div>
    <div class="lg:w-2/5 w-full md:px-8 md:py-6 pb-4">
        <!-- Awal Deskripsi user profile -->
        <p class="px-8 md:px-0 mt-8 md:mt-0 font-heading text-base italic text-justify mb-8 md:mb-0 text-center md:text-justify lg:text-left">
            `Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea incidunt quos saepe doloribus esse, fugit ratione culpa reprehenderit eos totam tenetur consectetur. Id, recusandae aspernatur incidunt cum, quo quaerat sequi earum ex doloremque eos ullam accusantium porro quos laudantium dolore delectus? Natus minima voluptates alias suscipit aperiam debitis voluptatum iusto`
        </p>
        <!-- Akhir Deskripsi user profile -->
        <div class="space-x-4 flex flex-col md:flex-row items-center justify-center lg:justify-start md:py-6 px-8 md:px-0">
            <!-- Awal media sosial dan telepon -->
            <div class="">
                <a href="https://facebook.com" class="inline-block mr-4 md:mr-2">
                    <img src="/img/icon/fb.png" alt="" class="w-6">
                </a>
                <a href="https://twitter.com" class="inline-block mr-4 md:mr-2">
                    <img src="/img/icon/twit.png" alt="" class="w-6">
                </a>
                <a href="https://instagram.com" class="inline-block">
                    <img src="/img/icon/ig.png" alt="" class="w-6">
                </a>
            </div>
            <div class="">
                <div class="inline-block">
                    <img src="/img/icon/telp.png" alt="" class="float-left w-8">
                    <span class="font-heading text-xs object-center">0852-XXXX-XXXX</span>
                </div>
                <div class="inline-block">
                    <img src="/img/icon/msg.png" alt="" class="float-left w-8">
                    <span class="font-heading text-xs object-center">0852-XXXX-XXXX</span>
                </div>
            </div>
            <!--  Akhir media sosial dan telepon -->
        </div>
    </div>
</div>
<!-- Akhir User Profile-->

<!-- Awal Rekomendasi -->
<div class="bg-primary py-8 md:py-4 lg:px-20 md:px-8 px-3">
    <div class="static md:w-full md:px-2 md:py-8 pb-4">
        <div class="-mt-16 sm:mt-0 md:mb-6 mb-2 text-center md:text-left text-secondary font-semibold">
            <!-- link ini mengarah ke halaman tampilan semua rekomendasi -->
            <div class="invisible sm:visible">
                <a class="bg-secondary mb-8 mt-1 md:mt-0 float-right font-paragraph text-sm text-white text-center py-1 px-4 mx-auto rounded-full cursor-pointer hover:bg-secondaryhover transition-colors duration-300" href="/rekomendasi">
                    Lihat Semua Rekomendasi
                    <img src="/img/icon/panah.png" alt="" class="float-right pl-2">
                </a>
            </div>
            <h2 class="font-heading mb-6 text-xl inline-block">Alumni yang mungkin Anda kenal</h2>
        </div>
        <div class="holder mx-auto w-11/12 md:w-full lg:w-11/12 grid grid-cols-2 md:grid-cols-4 gap-x-4 md:gap-x-0 lg:gap-x-8" data-aos="zoom-in">
            <!-- 1 card -->
            <div class="rounded-3xl flex flex-col justify-between p-3 md:p-2 lg:p-4 md:m-2 mb-4 shadow-lg border-gray-800 bg-white relative" data-aos="zoom-in">
                <div class="">
                    <a href="/profil" target="_new">
                        <img class="w-16 md:w-20 lg:w-24 mx-auto mt-4" src="/img/avatar.png" alt="" /> <!-- Hilangin padding klo dah ada gambar, dan pake w-full aja -->
                    </a>
                </div>
                <div>
                    <!-- Nama lengkap bisa diklik dan mengarah ke profil orang tsb -->
                    <span class="title mt-4 font-heading text-sm md:text-base lg:text-lg font-semibold text-primary block px-2 md:px-0 cursor-pointer text-center">Muhammad Nirwansyah Adi Eka Putra</span>
                </div>
                <div>
                    <!-- Atribut adalah angkatan alumni -->
                    <span class="description font-paragraph text-primary text-center md:text-base block pt-2 pb-2 border-gray-400 mb-2">Atribut</span>
                </div>
                <!-- <div class="px-4">
                    tombol lihat profil ketika diklik akan mengarah ke profil orang tsb
                    <a class="block bg-gray-300 font-paragraph text-primary text-sm text-center py-1 md:py-2 px-3 my-4 mx-auto rounded-lg w-full cursor-pointer hover:bg-opacity-70 transition-colors duration-300" href="">Lihat Profil</a>
                </div> -->
            </div>
            <!-- 2 card -->
            <div class="rounded-3xl flex flex-col justify-between p-3 md:p-2 lg:p-4 md:m-2 mb-4 shadow-lg border-gray-800 bg-white relative" data-aos="zoom-in">
                <div class="">
                    <a href="/profil" target="_new">
                        <img class="w-16 md:w-20 lg:w-24 mx-auto mt-4" src="/img/avatar.png" alt="" /> <!-- Hilangin padding klo dah ada gambar, dan pake w-full aja -->
                    </a>
                </div>
                <div>
                    <!-- Nama lengkap bisa diklik dan mengarah ke profil orang tsb -->
                    <span class="title mt-4 font-heading text-sm md:text-base lg:text-lg font-semibold text-primary block px-2 md:px-0 cursor-pointer text-center">Muhammad Putra</span>
                </div>
                <div>
                    <!-- Atribut adalah angkatan alumni -->
                    <span class="description font-paragraph text-primary text-center md:text-base block pt-2 pb-2 border-gray-400 mb-2">Atribut</span>
                </div>
                <!-- <div class="px-4">
                    tombol lihat profil ketika diklik akan mengarah ke profil orang tsb
                    <a class="block bg-gray-300 font-paragraph text-primary text-sm text-center py-1 md:py-2 px-3 my-4 mx-auto rounded-lg w-full cursor-pointer hover:bg-opacity-70 transition-colors duration-300" href="">Lihat Profil</a>
                </div> -->
            </div>
            <!-- 3 card -->
            <div class="rounded-3xl flex flex-col justify-between p-3 md:p-2 lg:p-4 md:m-2 mb-4 shadow-lg border-gray-800 bg-white relative" data-aos="zoom-in">
                <div class="">
                    <a href="/profil" target="_new">
                        <img class="w-16 md:w-20 lg:w-24 mx-auto mt-4" src="/img/avatar.png" alt="" /> <!-- Hilangin padding klo dah ada gambar, dan pake w-full aja -->
                    </a>
                </div>
                <div>
                    <!-- Nama lengkap bisa diklik dan mengarah ke profil orang tsb -->
                    <span class="title mt-4 font-heading text-sm md:text-base lg:text-lg font-semibold text-primary block px-2 md:px-0 cursor-pointer text-center">Muhammad Nirwansyah Adi Eka</span>
                </div>
                <div>
                    <!-- Atribut adalah angkatan alumni -->
                    <span class="description font-paragraph text-primary text-center md:text-base block pt-2 pb-2 border-gray-400 mb-2">Atribut</span>
                </div>
                <!-- <div class="px-4">
                    tombol lihat profil ketika diklik akan mengarah ke profil orang tsb
                    <a class="block bg-gray-300 font-paragraph text-primary text-sm text-center py-1 md:py-2 px-3 my-4 mx-auto rounded-lg w-full cursor-pointer hover:bg-opacity-70 transition-colors duration-300" href="">Lihat Profil</a>
                </div> -->
            </div>
            <!-- 4 card -->
            <div class="rounded-3xl flex flex-col justify-between p-3 md:p-2 lg:p-4 md:m-2 mb-4 shadow-lg border-gray-800 bg-white relative" data-aos="zoom-in">
                <div class="">
                    <a href="/profil" target="_new">
                        <img class="w-16 md:w-20 lg:w-24 mx-auto mt-4" src="/img/avatar.png" alt="" /> <!-- Hilangin padding klo dah ada gambar, dan pake w-full aja -->
                    </a>
                </div>
                <div>
                    <!-- Nama lengkap bisa diklik dan mengarah ke profil orang tsb -->
                    <span class="title mt-4 font-heading text-sm md:text-base lg:text-lg font-semibold text-primary block px-2 md:px-0 cursor-pointer text-center">Muhammad</span>
                </div>
                <div>
                    <!-- Atribut adalah angkatan alumni -->
                    <span class="description font-paragraph text-primary text-center md:text-base block pt-2 pb-2 border-gray-400 mb-2">Atribut</span>
                </div>
                <!-- <div class="px-4">
                    tombol lihat profil ketika diklik akan mengarah ke profil orang tsb
                    <a class="block bg-gray-300 font-paragraph text-primary text-sm text-center py-1 md:py-2 px-3 my-4 mx-auto rounded-lg w-full cursor-pointer hover:bg-opacity-70 transition-colors duration-300" href="">Lihat Profil</a>
                </div> -->
            </div>
        </div>
        <div class="visible sm:invisible">
            <a class="bg-secondary mb-8 mt-1 md:mt-0 float-right font-paragraph text-sm text-white text-center py-1 px-4 mx-auto rounded-full cursor-pointer hover:bg-secondaryhover transition-colors duration-300" href="/rekomendasi">
                Lihat Semua Rekomendasi
                <img src="/img/icon/panah.png" alt="" class="float-right pl-2">
            </a>
        </div>
    </div>
</div>
<!-- Akhir Rekomendasi -->

<!-- Atribut pada section ini belum ditentukan -->
<!-- Awal Informasi Umum -->
<div class="w-full my-8 lg:px-20 md:px-8 px-2">
    <h3 class="font-heading font-bold text-xl text-secondary">Informasi Umum</h3>
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
    <h3 class="font-heading font-bold text-xl text-secondary">Riwayat Pendidikan</h3>
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
    <h3 class="font-heading font-bold text-xl text-secondary">Riwayat Pekerjaan</h3>
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
    <h3 class="font-heading font-bold text-xl text-secondary">Riwayat Organisasi</h3>
    <table class="table-auto font-paragraph text-primary ml-5 mt-3">
        <tbody>
            <?php for ($x = 0; $x <= 5; $x++) : ?>
                <tr>
                    <td class="font-heading font-semibold">Atribut : </td>
                    <td class="pl-4">Isi Atribut</td>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table>
</div>
<!-- Akhir Riwayat Organisasi -->

<?= $this->endSection(); ?>