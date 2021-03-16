<?= $this->extend('webservice/layoutWebservice/templateWebserviceLogin.php'); ?>

<?= $this->section('content'); ?>

<div class="lg:mx-36 mx-5 lg:mt-12 md:mt-16 mt-12 mb-8 w-full">
    <h3 class="font-heading font-bold text-center text-secondary xl:text-6xl lg:text-5xl md:text-4xl text-2xl">PROYEK</h3>
    <!-- start tombol buat proyek -->
    <a href="/developer/buatProyek">
        <div class="flex justify-center md:w-44 w-28 md:px-2 md:py-2 px-1 py-1 lg:mt-12 mt-4 mb-8 rounded-lg border-gray shadow-lg tracking-wider cursor-pointer hover:bg-gray-100">
            <div class="flex items-center justify-center">
                <svg class="text-secondary md:w-8 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                </svg>
                <div class="font-heading font-semibold md:text-base text-xs">Buat Proyek</div>
            </div>
        </div>
    </a>
    <!-- end tombol buat proyek -->

    <!-- ini kalau belum ada proyek (default hidden, bisa disesuaikan) -->
    <div id="tidakAdaProyek" class="flex justify-center hidden">
        <div class="mt-8 mb-24">
            <span class="font-heading text-center text-xl">Belum ada proyek yang terdaftar. <b>Buat proyekmu sekarang!</b></span>
        </div>
    </div>

    <!-- ini kalau ada proyek -->
    <div id="adaProyek">
        <div class="proyek flex justify-between items-center rounded-md border font-paragraph mb-4 md:px-2 md:py-2 px-1 py-1 hover:bg-gray-100 cursor-pointer transition-all">
            <span class="font-paragraph md:text-base text-sm">Judul Proyek : Lorem Ipsum Dolor Sit Amet</span>
            <span class="font-paragraph md:text-base text-sm rounded-full border bg-gray-400 text-white px-3 py-1 md:w-32 w-24 text-center">Menunggu</span>
        </div>
        <div class="proyek flex justify-between items-center rounded-md border font-paragraph mb-4 md:px-2 md:py-2 px-1 py-1 hover:bg-gray-100 cursor-pointer transition-all">
            <span class="font-paragraph md:text-base text-sm">Judul Proyek : Lorem Ipsum Dolor Sit Amet</span>
            <span class="font-paragraph md:text-base text-sm rounded-full border bg-green-400 text-white px-3 py-1 md:w-32 w-24 text-center">Disetujui</span>
        </div>
        <div class="proyek flex justify-between items-center rounded-md border font-paragraph mb-4 md:px-2 md:py-2 px-1 py-1 hover:bg-gray-100 cursor-pointer transition-all">
            <span class="font-paragraph md:text-base text-sm">Judul Proyek : Lorem Ipsum Dolor Sit Amet</span>
            <span class="font-paragraph md:text-base text-sm rounded-full border bg-red-600 text-white px-3 py-1 md:w-32 w-24 text-center">Ditolak</span>
        </div>
    </div>

</div>

<?= $this->endSection(); ?>