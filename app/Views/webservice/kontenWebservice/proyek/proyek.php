<?= $this->extend('webservice/layoutWebservice/templateWebserviceLogin.php'); ?>

<?= $this->section('content'); ?>

<div class="lg:mx-36 mx-5 lg:mt-36 md:mt-28 mt-20 w-full">
    <h3 class="font-heading font-bold text-center text-secondary lg:text-6xl md:text-3xl text-2xl">PROYEK</h3>
    <a href="/webservice/buatProyek">
        <div class="flex justify-center md:w-40 w-36 md:px-3 md:py-2 px-1 py-1 lg:mt-12 mt-4 mb-8 rounded-lg border-gray shadow-lg tracking-wider cursor-pointer hover:bg-gray-100">
            <div class="flex gap-x-2 items-center justify-center">
                <i class="fa md:fa-lg fa-plus text-secondary"></i>
                <div class="font-heading font-semibold md:text-base text-sm">Buat Proyek</div>
            </div>
        </div>
    </a>
    <div class="flex justify-between items-center rounded-md border font-paragraph mb-4 md:px-2 md:py-2 px-1 py-1 hover:bg-gray-100 cursor-pointer">
        <span class="font-paragraph md:text-base text-sm">Judul Proyek : Lorem Ipsum Dolor Sit Amet</span>
        <span class="font-paragraph md:text-base text-sm rounded-full border bg-gray-400 text-white px-3 py-1 md:w-32 w-24 text-center">Menunggu</span>
    </div>
    <div class="flex justify-between items-center rounded-md border font-paragraph mb-4 md:px-2 md:py-2 px-1 py-1 hover:bg-gray-100 cursor-pointer">
        <span class="font-paragraph md:text-base text-sm">Judul Proyek : Lorem Ipsum Dolor Sit Amet</span>
        <span class="font-paragraph md:text-base text-sm rounded-full border bg-green-400 text-white px-3 py-1 md:w-32 w-24 text-center">Disetujui</span>
    </div>
    <div class="flex justify-between items-center rounded-md border font-paragraph mb-4 md:px-2 md:py-2 px-1 py-1 hover:bg-gray-100 cursor-pointer">
        <span class="font-paragraph md:text-base text-sm">Judul Proyek : Lorem Ipsum Dolor Sit Amet</span>
        <span class="font-paragraph md:text-base text-sm rounded-full border bg-red-600 text-white px-3 py-1 md:w-32 w-24 text-center">Ditolak</span>
    </div>
</div>

<?= $this->endSection(); ?>