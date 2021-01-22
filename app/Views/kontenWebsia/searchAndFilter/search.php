<?= $this->extend('layoutWebsia/templateBerandaLogin.php'); ?>

<?= $this->section('content'); ?>

<div class="w-full ">
    <!--FILTER -->
    <div class="flex justify-around lg:px-20 md:px-8 px-2 my-8">
        <div class="flex flex-col">
            <div class=" flex items-center gap-x-2 mx-auto">
                <input type="checkbox" name="filterAlumni" id="filterAlumni" class="cursor-pointer my-auto">
                <label for="filterAlumni" id="namaFilterAlumni" class="text-sm text-gray-500 font-heading font-medium cursor-pointer">Filter Alumni</label>
            </div>
            <div class="flex flex-col hidden mt-4" id="pilihanFilterAlumni">
                <button class="flex justify-between w-52 py-1 px-3 text-gray-500 text-sm font-paragraph font-medium border-2 border-gray-500 rounded-lg focus:outline-none focus:border-black focus:text-black" id="dropdownFilterAlumni">
                    <div id="filterBerdasarkan"> Filter Berdasarkan</div>
                    <svg class=" w-4 h-4 my-auto font-medium text-gray-500" id="tombolUpFilterAlumni" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                    <svg class="w-4 h-4 my-auto font-medium text-gray-500 hidden" id="tombolDownFilterAlumni" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path>
                    </svg>
                </button>
                <div class="flex flex-col font-heading font-semibold mt-2 rounded-lg border border-gray-500 hidden" id="listFilterAlumni">
                    <div class="flex px-3 py-2 border-b border-gray-300 cursor-pointer hover:bg-gray-300" id="filterNama">Nama</div>
                    <div class="px-3 py-2 border-b border-gray-300 cursor-pointer hover:bg-gray-300" id="filterNIM">NIM</div>
                    <div class="px-3 py-2 cursor-pointer hover:bg-gray-300" id="filterAngkatan">Angkatan</div>
                </div>
            </div>
        </div>
        <div class="flex flex-col">
            <div class="flex items-center gap-x-2 mx-auto">
                <input type="checkbox" name="filterBerita" id="filterBerita" class="cursor-pointer">
                <label for="filterBerita" class="text-sm text-gray-500 font-heading font-medium cursor-pointer">Filter Tahun Berita</label>
            </div>
            <div class="mx-auto" id="pilihanFilterBerita">damndbndvnbfvnbdfvnbv</div>
        </div>
    </div>


    <!-- END FILTER -->

    <!-- HASIL PENCARIAN ALUMNI -->
    <div class="bg-primary w-full py-4 px-28">
        <div class="text-white mb-6 font-paragraph text-sm">
            Sekitar 28.899 hasil pencarian alumni
        </div>
        <!-- CARD HASIL PENCARIAN -->
        <div>
            <div class="flex justify-between mb-4">
                <div class="rounded-xl bg-white pl-3 pr-12 py-3 flex justify-between gap-x-2">
                    <div class="flex items-center">
                        <img src="/img/account circle 1.png" class="w-20" alt="">
                    </div>
                    <div class="flex items-center">
                        <div>
                            <h2 class="font-heading text-primary text-lg font-semibold">Nama Lengkap</h2>
                            <h3 class="font-paragraph text-primary text-sm">Atribut</h3>
                        </div>
                    </div>
                </div>
                <div class="rounded-xl bg-white pl-3 pr-12 py-3 flex justify-between gap-x-2">
                    <div class="flex items-center">
                        <img src="/img/account circle 1.png" class="w-20" alt="">
                    </div>
                    <div class="flex items-center">
                        <div>
                            <h2 class="font-heading text-primary text-lg font-semibold">Nama Lengkap</h2>
                            <h3 class="font-paragraph text-primary text-sm">Atribut</h3>
                        </div>
                    </div>
                </div>
                <div class="rounded-xl bg-white pl-3 pr-12 py-3 flex justify-between gap-x-2">
                    <div class="flex items-center">
                        <img src="/img/account circle 1.png" class="w-20" alt="">
                    </div>
                    <div class="flex items-center">
                        <div>
                            <h2 class="font-heading text-primary text-lg font-semibold">Nama Lengkap</h2>
                            <h3 class="font-paragraph text-primary text-sm">Atribut</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-between mb-4">
                <div class="rounded-xl bg-white pl-3 pr-12 py-3 flex justify-between gap-x-2">
                    <div class="flex items-center">
                        <img src="/img/account circle 1.png" class="w-20" alt="">
                    </div>
                    <div class="flex items-center">
                        <div>
                            <h2 class="font-heading text-primary text-lg font-semibold">Nama Lengkap</h2>
                            <h3 class="font-paragraph text-primary text-sm">Atribut</h3>
                        </div>
                    </div>
                </div>
                <div class="rounded-xl bg-white pl-3 pr-12 py-3 flex justify-between gap-x-2">
                    <div class="flex items-center">
                        <img src="/img/account circle 1.png" class="w-20" alt="">
                    </div>
                    <div class="flex items-center">
                        <div>
                            <h2 class="font-heading text-primary text-lg font-semibold">Nama Lengkap</h2>
                            <h3 class="font-paragraph text-primary text-sm">Atribut</h3>
                        </div>
                    </div>
                </div>
                <div class="rounded-xl bg-white pl-3 pr-12 py-3 flex justify-between gap-x-2">
                    <div class="flex items-center">
                        <img src="/img/account circle 1.png" class="w-20" alt="">
                    </div>
                    <div class="flex items-center">
                        <div>
                            <h2 class="font-heading text-primary text-lg font-semibold">Nama Lengkap</h2>
                            <h3 class="font-paragraph text-primary text-sm">Atribut</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-between mb-4">
                <div class="rounded-xl bg-white pl-3 pr-12 py-3 flex justify-between gap-x-2">
                    <div class="flex items-center">
                        <img src="/img/account circle 1.png" class="w-20" alt="">
                    </div>
                    <div class="flex items-center">
                        <div>
                            <h2 class="font-heading text-primary text-lg font-semibold">Nama Lengkap</h2>
                            <h3 class="font-paragraph text-primary text-sm">Atribut</h3>
                        </div>
                    </div>
                </div>
                <div class="rounded-xl bg-white pl-3 pr-12 py-3 flex justify-between gap-x-2">
                    <div class="flex items-center">
                        <img src="/img/account circle 1.png" class="w-20" alt="">
                    </div>
                    <div class="flex items-center">
                        <div>
                            <h2 class="font-heading text-primary text-lg font-semibold">Nama Lengkap</h2>
                            <h3 class="font-paragraph text-primary text-sm">Atribut</h3>
                        </div>
                    </div>
                </div>
                <div class="rounded-xl bg-white pl-3 pr-12 py-3 flex justify-between gap-x-2">
                    <div class="flex items-center">
                        <img src="/img/account circle 1.png" class="w-20" alt="">
                    </div>
                    <div class="flex items-center">
                        <div>
                            <h2 class="font-heading text-primary text-lg font-semibold">Nama Lengkap</h2>
                            <h3 class="font-paragraph text-primary text-sm">Atribut</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END CARD HASIL PENCARIAN -->
        <div class="flex justify-end mt-4">
            <div class="flex bg-secondary text-white rounded-full py-2 px-3 items-center gap-x-2 cursor-pointer text-sm">
                Selengkapnya
                <img src="/img/right-off.png" class="w-4 h-4" alt="">
            </div>
        </div>
    </div>
    <!-- END HASIL PENCARIAN ALUMNI -->

    <!-- HASIL PENCARIAN BERITA -->
    <div class="px-28 mt-6">
        <div class="text-primary font-paragraph text-sm">
            Sekitar 28.899 hasil pencarian berita
        </div>
        <hr class="my-2 border-2 border-gray-400">
        <!-- DAFTAR HASIL PENCARIAN BERITA -->
        <div>
            <div class="mx-4">
                <h2 class="font-heading text-primary text-lg font-semibold">Judul Berita</h2>
                <h4 class="font-paragraph text-primary text-xs">11 Januari 2021</h4>
                <div class="text-justify font-paragraph">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras blandit turpis sem, eu laoreet odio pretium ac. Mauris eget aliquet lorem. Cras dignissim leo non ante molestie, at vulputate justo lobortis. Pellentesque quam elit, mattis eu nibh et, maximus congue mauris
                </div>
            </div>
            <hr class="my-2 border-2 border-gray-400">
            <div class="mx-4">
                <h2 class="font-heading text-primary text-lg font-semibold">Judul Berita</h2>
                <h4 class="font-paragraph text-primary text-xs">11 Januari 2021</h4>
                <div class="text-justify font-paragraph">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras blandit turpis sem, eu laoreet odio pretium ac. Mauris eget aliquet lorem. Cras dignissim leo non ante molestie, at vulputate justo lobortis. Pellentesque quam elit, mattis eu nibh et, maximus congue mauris
                </div>
            </div>
            <hr class="my-2 border-2 border-gray-400">
            <div class="mx-4">
                <h2 class="font-heading text-primary text-lg font-semibold">Judul Berita</h2>
                <h4 class="font-paragraph text-primary text-xs">11 Januari 2021</h4>
                <div class="text-justify font-paragraph">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras blandit turpis sem, eu laoreet odio pretium ac. Mauris eget aliquet lorem. Cras dignissim leo non ante molestie, at vulputate justo lobortis. Pellentesque quam elit, mattis eu nibh et, maximus congue mauris
                </div>
            </div>
            <hr class="my-2 border-2 border-gray-400">
        </div>
        <!-- END DAFTAR HASIL PENCARIAN BERITA -->
        <div class="flex justify-end mt-4">
            <div class="flex bg-secondary text-white rounded-full py-2 px-3 items-center gap-x-2 cursor-pointer text-sm">
                Selengkapnya
                <img src="/img/right-off.png" class="w-4 h-4" alt="">
            </div>
        </div>
    </div>
    <!-- END HASIL PENCARIAN BERITA -->
</div>

<!-- HASIL PENCARIAN TIDAK DITEMUKAN-->
<div class="px-28 mt-6 py-32" id="searchNotFound">
    <div>
        <h1 class="text-primary font-heading text-4xl font-bold text-center">Hasil Pencarian Tidak Ditemukan</h1>
        <hr class="mt-4 border-black">
    </div>
</div>
<!-- END HASIL PENCARIAN TIDAK DITEMUKAN-->

<script type="text/javascript" src="/js/search.js"></script>
<?= $this->endSection(); ?>