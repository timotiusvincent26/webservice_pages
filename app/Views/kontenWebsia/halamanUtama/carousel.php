<!-- Kalo mau akses carousel, di controller websia ganti variabel login = 'sudah' -->
<!-- buat yenita codingan di bawah bisa ganti aja tapi width tetep full -->
<?= $this->extend('layout/templateLogin') ?>
<?= $this->section('content') ?>
<!-- konten  -->

<head>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>

<body class="bg-gray-100">
    <div class="w-full bg-white">
        <div id="slider" class="swiper-container w-full transition duration-3000 ease-in-out">
            <div class="swiper-wrapper">
                <div class="swiper-slide transition duration-3000 ease-in-out bg-cover bg-center w-full" style="background-image: url('/webAlumni2/public/img/bg-1.jpeg');">
                    <div class="container mx-auto px-16 md:px-20 py-12">
                        <div class="w-full md:w-1/2">
                            <div class="md:border border-gray-100 md:p-10">
                                <h2 class="font-bold leading-tight text-2xl md:text-6xl ">Perbarui Data Anda</h2>
                                <p class="text-xl mt-3 font-light">Data akurat, persaudaraan makin erat.
                                </p>
                            </div>
                            <div class="my-8 md:mx-10 md:-mt-2"><a href="#" class="bg-pink-500 ease-linear text-xs md:text-xl hover:bg-blue-600 text-white px-4 py-2 md:px-6 md:py-4 rounded-full">BUTTON</a></div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide transition duration-3000 ease-in-out bg-cover bg-center" style="background-image: url('/webAlumni2/public/img/bg-2.jpeg');">
                    <div class="container mx-auto px-16 md:px-20 py-12">
                        <div class="w-full md:w-1/2">
                            <div class="md:border border-gray-100 md:p-10">
                                <h2 class="font-bold leading-tight text-2xl md:text-6xl ">Perbarui Data Anda</h2>
                                <p class="text-xl mt-3 font-light">Data akurat, persaudaraan makin erat.
                                </p>
                            </div>
                            <div class="my-8 md:mx-10 md:-mt-2"><a href="#" class="bg-pink-500 ease-linear text-xs md:text-xl hover:bg-blue-600 text-white px-4 py-2 md:px-6 md:py-4 rounded-full">BUTTON</a></div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide transition duration-3000 ease-in-out bg-cover bg-center" style="background-image: url('/webAlumni2/public/img/bg-3.jpeg');">
                    <div class="container mx-auto px-16 md:px-20 py-12">
                        <div class="w-full md:w-1/2">
                            <div class="md:border border-gray-100 md:p-10">
                                <h2 class="font-bold leading-tight text-2xl md:text-6xl ">Perbarui Data Anda</h2>
                                <p class="text-xl mt-3 font-light">Data akurat, persaudaraan makin erat.
                                </p>
                            </div>
                            <div class="my-8 md:mx-10 md:-mt-2"><a href="#" class="bg-pink-500 ease-linear text-xs md:text-xl hover:bg-blue-600 text-white px-4 py-2 md:px-6 md:py-4 rounded-full">BUTTON</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden md:flex border border-yellow-300 text-pink-500 text-xs swiper-button-prev md:ml-8 w-16 h-16 rounded-full"></div>
            <div class="hidden md:flex swiper-button-next md:mr-8 w-16 h-16 rounded-full"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <!-- LAZY LOAD
    <div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa accusamus, non rerum distinctio ratione saepe cum, reiciendis quod animi neque consequuntur velit praesentium quasi quaerat quae officia eum nobis ut! Delectus sunt dolores aliquam dolor, perspiciatis, veritatis dolorem consequuntur adipisci ea beatae at debitis iure provident necessitatibus aliquid vero nesciunt eius consectetur recusandae. Itaque, nam sint. Dolores, autem maiores. Alias earum corporis nemo quas quasi quidem officia magnam dolorum impedit nesciunt eaque, ipsa ea fuga ratione? Laudantium aliquid modi dolore, quaerat quisquam mollitia ipsa minima reprehenderit veritatis. Dolorem itaque maiores, dolore possimus magni laboriosam excepturi eius exercitationem suscipit natus hic.</p>
        <div class="transition duration-4000">
            <img class="" data-lazy="/webAlumni2/public/img/bg-1.jpeg" alt="">
        </div>
        <div class="transition duration-5000">
            <img class="" data-lazy="/webAlumni2/public/img/bg-2.jpeg" alt="">
        </div>
        <div class="transition duration-6000">
            <img class="" data-lazy="/webAlumni2/public/img/bg-3.jpeg" alt="">
        </div>
    </div> -->


    <script src="/webAlumni2/public/js/carousel.js"></script>
    <!-- <script src="/webAlumni2/public/js/lazyLoad.js"></script> -->

    <!-- konten -->
    <?= $this->endSection() ?>