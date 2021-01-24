<?= $this->extend('websia/layoutWebsia/templateBerandaLogin.php'); ?>

<?= $this->section('content'); ?>
<!-- Awal User Profile-->

</div>
<div class="md:flex items-center md:flex-row flex-col-reverse my-8 pt-0 lg:px-20 md:px-8 md:pt-4">
    <div class="md:w-1/2 w-full md:flex items-center font-paragraph text-sm">
        <div class="md:w-1/2 mb-8 justify-center object-center space-y-4">
            <!-- Avatar user profile -->
            <img class="block float-none mx-auto w-60 md:w-72 mb-2 px-6 object-contain" src="/img/avatar.png" alt="">
            <a class="block bg-secondary text-white text-center py-1 md:py-2 px-4 md:px-6 mx-auto rounded-full w-28 cursor-pointer hover:bg-secondaryhover transition-colors duration-300" href="">Edit Profil</a>
        </div>
        <div class="md:w-1/2 block justify-center mx-auto items-center text-center md:text-left object-center md:px-8 md:py-6">
            <h3 class="font-heading text-secondary text-3xl mb-2 font-extrabold">ZAHLUL FUADI</h3>
            <div class="mb-8">
                <span class="font-paragraph text-xs bg-gray-300 py-1 px-2 rounded-lg text-primary align-middle uppercase">Alumni</span>
                <span class="font-paragraph text-xs bg-gray-300 py-1 px-2 rounded-lg text-primary align-middle uppercase">Admin</span>
                <span class="font-paragraph text-xs bg-gray-300 py-1 px-2 rounded-lg text-primary align-middle uppercase">Developer</span>
            </div>
            <p class="font-heading text-center md:text-left text-base mb-5">Aceh, 32 Januari 2021</p>
            <p class="font-heading text-base text-center md:text-left">
                Bekerja di BPS Provinsi Aceh <br />
                Sebagai Kepala BPS
            </p>
            <span class="font-heading text-base items-center text-center md:text-left">
                <img class="my-2 mt-4 mr-2 w-5 float-left" src="/img/icon/maps_flag.png" alt="">
                <p class="my-2 mt-4"> Alamat tempat tinggal </p>
            </span>

        </div>
    </div>
    <div class="md:w-1/2 w-full md:px-8 md:py-6 pb-4">
        <!-- Awal Deskripsi user profile -->
        <p class="px-8 md:px-0 mt-8 md:mt-0font-heading text-base italic text-justify mb-8 md:mb-0 text-center md:text-left font-paragraph">
            `Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea incidunt quos saepe doloribus esse, fugit ratione culpa reprehenderit eos totam tenetur consectetur. Id, recusandae aspernatur incidunt cum, quo quaerat sequi earum ex doloremque eos ullam accusantium porro quos laudantium dolore delectus? Natus minima voluptates alias suscipit aperiam debitis voluptatum iusto officiis temporibus labore excepturi voluptate ipsa, perferendis dolores adipisci molestias`
        </p>
        <!-- Akhir Deskripsi user profile -->
        <div class="space-x-3 md:py-6 px-8 md:px-0">
            <!-- Awal sosial media dan telepon -->
            <a href="https://facebook.com" class="inline-block">
                <img src="/img/icon/fb.png" alt="" class="w-6">
            </a>
            <a href="https://twitter.com" class="inline-block">
                <img src="/img/icon/twit.png" alt="" class="w-6">
            </a>
            <a href="https://instagram.com" class="inline-block">
                <img src="/img/icon/ig.png" alt="" class="w-6">
            </a>
            <div class="inline-block -mt-8">
                <img src="/img/icon/telp.png" alt="" class="float-left w-8">
                <span class="font-heading text-xs object-center"> 0852-XXXX-XXXX </span>
            </div>
            <div class="inline-block">
                <img src="/img/icon/msg.png" alt="" class="float-left w-8">
                <span class="font-heading text-xs object-center"> 0852-XXXX-XXXX </span>
            </div>
            <!--  Akhir sosial media dan telepon -->
        </div>
    </div>

</div>
<!-- Akhir User Profile-->

<!-- Awal Rekomendasi -->
<div class="bg-primary py-8 md:py-4 lg:px-20 md:px-8 px-2">
    <div class="static md:w-full md:px-2 md:py-8 pb-4">
        <div class="md:mb-6 mb-2 text-center md:text-left text-secondary font-semibold">
            <a class="bg-secondary mb-8 mt-1 md:mt-0 float-right font-paragraph text-sm text-white text-center py-1 px-4 mx-auto rounded-full cursor-pointer hover:bg-secondaryhover transition-colors duration-300" href="">
                Lihat Semua Rekomendasi
                <img src="/img/icon/panah.png" alt="" class="float-right pl-2">
            </a>
            <h2 class="font-heading mb-6 text-xl inline-block">Alumni yang mungkin Anda kenal</h2>
        </div>
        <div class="holder mx-auto w-10/12 grid grid-cols-2 md:grid-cols-4 gap-x-4 lg:gap-x-8">
            <!-- 1 card -->
            <div class="rounded-3xl md:m-2 mb-4 shadow-lg border-gray-800 bg-white relative">
                <img class="w-16 lg:w-24 mx-auto mt-6 md:mt-8" src="/img/avatar.png" alt="" /> <!-- Hilangin padding klo dah ada gambar, dan pake w-full aja -->
                <div class="desc p-2">
                    <!-- Nama lengkap bisa diklik dan mengarah ke profil orang tsb -->
                    <a href="https://www.youtube.com/watch?v=dvqT-E74Qlo" target="_new" class="title font-heading text-sm md:text-lg font-semibold text-primary block cursor-pointer text-center hover:underline">Nama Lengkap</a>
                    <span class="description font-paragraph text-primary text-center text-xs md:text-base block py-2 border-gray-400 mb-2">Atribut</span>
                    <div class="mt-4 md:mt-6 lg:mt-8 px-4">
                        <a class="block bg-gray-300 font-paragraph text-primary text-xs md:text-sm text-center py-1 md:py-2 px-3 my-4 mx-auto rounded-lg w-full cursor-pointer hover:bg-opacity-70 transition-colors duration-300" href="">Lihat Profil</a>
                    </div>
                </div>
            </div>
            <!-- 2 card -->
            <div class="rounded-3xl md:m-2 mb-4 shadow-lg border-gray-800 bg-white relative">
                <img class="w-16 lg:w-24 mx-auto mt-6 md:mt-8" src="/img/avatar.png" alt="" /> <!-- Hilangin padding klo dah ada gambar, dan pake w-full aja -->
                <div class="desc p-2">
                    <!-- Nama lengkap bisa diklik dan mengarah ke profil orang tsb -->
                    <a href="https://www.youtube.com/watch?v=dvqT-E74Qlo" target="_new" class="title font-heading text-sm md:text-lg font-semibold text-primary block cursor-pointer text-center hover:underline">Nama Lengkap</a>
                    <span class="description font-paragraph text-primary text-center text-xs md:text-base block py-2 border-gray-400 mb-2">Atribut</span>
                    <div class="mt-4 md:mt-6 lg:mt-8 px-4">
                        <a class="block bg-gray-300 font-paragraph text-primary text-xs md:text-sm text-center py-1 md:py-2 px-3 my-4 mx-auto rounded-lg w-full cursor-pointer hover:bg-opacity-70 transition-colors duration-300" href="">Lihat Profil</a>
                    </div>
                </div>
            </div>
            <!-- 3 card -->
            <div class="rounded-3xl md:m-2 shadow-lg border-gray-800 bg-white relative">
                <img class="w-16 lg:w-24 mx-auto mt-6 md:mt-8" src="/img/avatar.png" alt="" /> <!-- Hilangin padding klo dah ada gambar, dan pake w-full aja -->
                <div class="desc p-2">
                    <!-- Nama lengkap bisa diklik dan mengarah ke profil orang tsb -->
                    <a href="https://www.youtube.com/watch?v=dvqT-E74Qlo" target="_new" class="title font-heading text-sm md:text-lg font-semibold text-primary block cursor-pointer text-center hover:underline">Nama Lengkap</a>
                    <span class="description font-paragraph text-primary text-center text-xs md:text-base block py-2 border-gray-400 mb-2">Atribut</span>
                    <div class="mt-4 md:mt-6 lg:mt-8 px-4">
                        <a class="block bg-gray-300 font-paragraph text-primary text-xs md:text-sm text-center py-1 md:py-2 px-3 my-4 mx-auto rounded-lg w-full cursor-pointer hover:bg-opacity-70 transition-colors duration-300" href="">Lihat Profil</a>
                    </div>
                </div>
            </div>
            <!-- 4 card -->
            <div class="rounded-3xl md:m-2 shadow-lg border-gray-800 bg-white relative">
                <img class="w-16 lg:w-24 mx-auto mt-6 md:mt-8" src="/img/avatar.png" alt="" /> <!-- Hilangin padding klo dah ada gambar, dan pake w-full aja -->
                <div class="desc p-2">
                    <!-- Nama lengkap bisa diklik dan mengarah ke profil orang tsb -->
                    <a href="https://www.youtube.com/watch?v=dvqT-E74Qlo" target="_new" class="title font-heading text-sm md:text-lg font-semibold text-primary block cursor-pointer text-center hover:underline">Nama Lengkap</a>
                    <span class="description font-paragraph text-primary text-center text-xs md:text-base block py-2 border-gray-400 mb-2">Atribut</span>
                    <div class="mt-4 md:mt-6 lg:mt-8 px-4">
                        <a class="block bg-gray-300 font-paragraph text-primary text-xs md:text-sm text-center py-1 md:py-2 px-3 my-4 mx-auto rounded-lg w-full cursor-pointer hover:bg-opacity-70 transition-colors duration-300" href="">Lihat Profil</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Akhir Rekomendasi -->

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