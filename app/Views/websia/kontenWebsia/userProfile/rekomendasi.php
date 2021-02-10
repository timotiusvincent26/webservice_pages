<?= $this->extend("websia/layoutWebsia/templateBerandaLogin.php"); ?>

<?= $this->section('content'); ?>


<!-- Awal Rekomendasi -->
<div class="my-8 pt-0 px-8 text-center md:text-left">
    <div class="static md:w-full px-4 pb-4">
        <h2 class="font-heading font-semibold text-xl mb-8">Alumni yang mungkin Anda kenal</h2>
        <div class="holder mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-8 ">
            <?php for ($x = 0; $x < 12; $x++) : ?>
                <!-- 1 card -->
                <div class="shadow each my-2 border border-gray-200 bg-white relative hover:bg-gray-200">
                    <a href="/profil" target="_new">
                        <img class="w-24 mx-auto pt-8 pb-4" src="/img/avatar.png" alt="" /> <!-- Hilangin padding klo dah ada gambar, dan pake w-full aja -->
                        <!-- <div class="font-paragraph absolute top-0 right-0 bg-secondary m-3 text-white p-1 px-2 text-xs font-bold rounded">59</div> -->
                        <div class="desc p-2">
                            <span class="title font-heading font-bold text-primary block cursor-pointer text-center">Nama Lengkap</span>
                            <span class="description font-paragraph text-primary text-center text-base block pt-2 border-gray-400 mb-12">Angkatan X</span>
                            <!-- <a class="block bg-gray-300 font-paragraph text-primary text-sm text-center py-1 px-3 my-4 mx-auto rounded-lg w-full cursor-pointer border-gray-300 hover:bg-gray-400 hover:border-opacity-70 transition-colors duration-300" href="/profil">Lihat Profil</a> -->
                        </div>
                    </a>
                </div>
            <?php endfor; ?>
        </div>
        <div class="mt-8 pb-2 text-center md:text-left font-semibold">
            <a class="float-right bg-secondary font-paragraph text-sm text-white text-center py-2 px-3 mx-auto rounded-full cursor-pointer border-secondary border-2 hover:text-secondary hover:bg-white hover:border-opacity-70 transition-colors duration-300" href="#">
                Selengkapnya
                <img src="/img/icon/panah_kanan.png" alt="" class="float-right pl-2">
            </a>
            <a class="float-left bg-secondary font-paragraph text-sm text-white text-center py-2 px-3 mx-auto rounded-full cursor-pointer border-secondary border-2 hover:text-secondary hover:bg-white hover:border-opacity-70 transition-colors duration-300" href="/profil">
                <img src="/img/icon/panah_kiri.png" alt="" class="float-left pr-2">
                Kembali
            </a>
        </div>
    </div>
</div>
<!-- Akhir Rekomendasi -->

<?= $this->endSection(); ?>