<?= $this->extend("websia/layoutWebsia/templateBerandaLogin.php"); ?>

<?= $this->section('content'); ?>


<!-- Awal Rekomendasi -->
<div class="my-8 pt-0 px-8 text-center md:text-left">
    <div class="static md:w-full px-4 pb-4">
        <h2 class="font-heading font-semibold text-xl mb-8">Alumni yang mungkin Anda kenal</h2>
        <section id="cards">
            <div class="mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-x-8 gap-y-2 sm:gap-y-4 md:gap-y-8 ">
                <!-- Angka 36 diganti sesuai jumlah user websia -->
                <?php for ($x = 0; $x < 36; $x++) : ?>
                    <!-- 1 card -->
                    <div class="rekomendasi hidden shadow my-2 border border-gray-200 bg-white hover:bg-gray-200">
                        <a href="/profil" target="_new" class="">
                            <div class="gambar flex flex-row items-center">
                                <img class="w-24 md:w-24 lg:w-24 rounded-full m-4 md:m-65" src="https://demos.creative-tim.com/tailwindcss-starter-project/_next/static/images/team-1-800x800-fa5a7ac2c81a43925586ea85f2fea332.jpg" alt="" />
                                <div class="text-left">
                                    <div class="pr-4 mb-1 sm:mb-2 font-heading font-bold text-primary">Nama Lengkap</div>
                                    <div class="pr-4 font-paragraph text-primary text-base block">Angkatan X</div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endfor; ?>
            </div>
        </section>
        <div class="mt-8 pb-2 text-center md:text-left font-semibold">
            <!-- Awal button Tampilkan Lebih Banyak -->
            <button id="showMore" class="showMore float-right bg-secondary font-paragraph text-sm text-white text-center py-1 px-3 mx-auto rounded-full cursor-pointer hover:bg-secondaryhover transition-colors duration-200 focus:outline-none">
                Tampilkan Lebih Banyak
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="-mt-1 text-white w-4 inline text-bold">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <!-- Akhir button Tampilkan Lebih Banyak -->
            <a class="float-left bg-secondary font-paragraph text-sm text-white text-center py-1 px-3 mx-auto rounded-full cursor-pointer hover:bg-secondaryhover transition-colors duration-200" href="/profil">
                <img src="/img/icon/panah_kiri.png" alt="" class="float-left pr-2">
                Kembali
            </a>
        </div>
    </div>
</div>
<!-- Akhir Rekomendasi -->

<?= $this->endSection(); ?>