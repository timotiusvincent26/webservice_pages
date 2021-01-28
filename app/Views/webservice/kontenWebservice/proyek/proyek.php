<?= $this->extend('webservice/layoutWebservice/templateWebserviceLogin.php'); ?>

<?= $this->section('content'); ?>

<div class="mx-36 mt-36 w-full">
    <h3 class="font-heading font-bold text-center text-secondary lg:text-6xl text-2xl">PROYEK</h3>
    <a href="/webservice/buatProyek">
        <div class="flex justify-start w-40 px-3 py-2 mt-12 mb-8 rounded-lg border-gray shadow-lg tracking-wider cursor-pointer hover:bg-gray-100">
            <div class="flex gap-x-2 items-center justify-center">
                <i class="fa fa-lg fa-plus text-secondary"></i>
                <div class="font-heading font-semibold">Buat Proyek</div>
            </div>
        </div>
    </a>
    <div class="flex justify-between items-center rounded-md border font-paragraph mb-4 px-2 py-2 hover:bg-gray-100 cursor-pointer">
        <span class="font-paragraph">Judul Proyek : Lorem Ipsum Dolor Sit Amet</span>
        <span class="font-paragraph rounded-full border bg-gray-400 text-white px-3 py-1 w-32 text-center">Menunggu</span>
    </div>
    <div class="flex justify-between items-center rounded-md border font-paragraph mb-4 px-2 py-2 hover:bg-gray-100 cursor-pointer">
        <span class="font-paragraph">Judul Proyek : Lorem Ipsum Dolor Sit Amet</span>
        <span class="font-paragraph rounded-full border bg-green-400 text-white px-3 py-1 w-32 text-center">Disetujui</span>
    </div>
    <div class="flex justify-between items-center rounded-md border font-paragraph mb-4 px-2 py-2 hover:bg-gray-100 cursor-pointer">
        <span class="font-paragraph">Judul Proyek : Lorem Ipsum Dolor Sit Amet</span>
        <span class="font-paragraph rounded-full border bg-red-600 text-white px-3 py-1 w-32 text-center">Ditolak</span>
    </div>
</div>

<?= $this->endSection(); ?>