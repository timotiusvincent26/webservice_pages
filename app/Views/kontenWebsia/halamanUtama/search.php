<?= $this->extend('layoutWebsia/templateBerandaLogin.php'); ?>

<?= $this->section('content'); ?>

<div class="bg-white w-full py-6">
    <!--FILTER -->
    <div class="flex justify-center gap-x-36">
        <div class=" flex items-center gap-x-2">
            <input type="checkbox" name="alumni" id="alumni" class="cursor-pointer">
            <label for="alumni" class="text-sm font-heading font-light">Filter Alumni</label>
        </div>
        <div class="flex items-center gap-x-2">
            <input type="checkbox" name="berita" id="berita" class="cursor-pointer">
            <label for="berita" class="text-sm font-heading font-light">Filter Tahun Berita</label>
        </div>
    </div>
    <div class="p-3 flex justify-center">
        <div class="" id="filterAlumni">
        </div>
        <div class="hidden" id="filterThBerita">
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

<?= $this->endSection(); ?>