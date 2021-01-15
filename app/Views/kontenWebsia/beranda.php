<?= $this->extend('layoutWebsia/templateBerandaLogin.php'); ?>

<?= $this->section('content'); ?>

<!-- awal card -->
<div class="flex my-8 w-full justify-center">
    <div class=" text-xl font-bold"> BERITA TERBARU</div>
</div>

<div class="flex flex-col md:flex-row md:justify-between w-full mt-4">

    <div class="w-full mb-6 lg:w-80 md:w-60 w-full border-b-2 border-gray-300">
        <a href="#" class="mb-4">
            <img class="lg:w-80 lg:h-60 md:w-60 md:h-44" src="/img/sampel.jpeg">
        </a>
        <div class="py-4">
            <div>
                <a href="#" class="text-black text-xl font-semibold hover:font-bold">
                    Pelatihan Kepegawaian di Masa Pandemi
                </a>
            </div>

            <div class="text-gray-700 text-sm font-semibold ">1 Januari 2020</div>

            <p class="text-gray-600 break-words text-justify leading-none mt-4">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo voluptatum quibusdam nemo, incidunt dolorem voluptatem, rem eligendi beatae numquam a rerum debitis omnis ratione tempora, quisquam ullam id aperiam quam.
            </p>

        </div>
    </div>

    <div class="w-full mb-6 lg:w-80 md:w-60 w-full border-b-2 border-gray-300">
        <a href="#" class="mb-4">
            <img class="lg:w-80 lg:h-60 md:w-60 md:h-44" src="/img/sampel.jpeg">
        </a>
        <div class="py-4">
            <div>
                <a href="#" class="text-black text-xl font-semibold hover:font-bold">
                    Pelatihan Kepegawaian di Masa Pandemi
                </a>
            </div>

            <div class="text-gray-700 text-sm font-semibold ">1 Januari 2020</div>

            <p class="text-gray-600 break-words text-justify leading-none mt-4">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo voluptatum quibusdam nemo, incidunt dolorem voluptatem, rem eligendi beatae numquam a rerum debitis omnis ratione tempora, quisquam ullam id aperiam quam.
            </p>

        </div>
    </div>

    <div class="w-full mb-6 lg:w-80 md:w-60 w-full border-b-2 border-gray-300">
        <a href="#" class="mb-4">
            <img class="lg:w-80 lg:h-60 md:w-60 md:h-44" src="/img/sampel.jpeg">
        </a>
        <div class="py-4">
            <div>
                <a href="#" class="text-black text-xl font-semibold hover:font-bold">
                    Pelatihan Kepegawaian di Masa Pandemi
                </a>
            </div>

            <div class="text-gray-700 text-sm font-semibold ">1 Januari 2020</div>

            <p class="text-gray-600 break-words text-justify leading-none mt-4">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo voluptatum quibusdam nemo, incidunt dolorem voluptatem, rem eligendi beatae numquam a rerum debitis omnis ratione tempora, quisquam ullam id aperiam quam.
            </p>

        </div>
    </div>

</div>
<div class="flex w-full justify-end">
    <div class="text-primary font-bold my-auto"><a href="">Lihat Berita Selanjutnya</a> </div>
    <div>
        <a href="">
            <svg class="w-6 h-6 font-bold text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </a>
    </div>
</div>
<!-- akhir card -->

<?= $this->endSection(); ?>