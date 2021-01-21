<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/aos.css" />
    <link rel="stylesheet" href="/css/leaflet.css">
    <link rel="stylesheet" href="/css/navbar.css">
    <link rel="stylesheet" href="/css/output.css">
<<<<<<< HEAD
=======
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script type="text/javascript" src="/js/navbar.js"></script>
>>>>>>> bca02065faf3eb9c44022b9556aee12a2d1bd3b9
    <script type="text/javascript" src="/js/jquery.js"></script>
    <script type="text/javascript" src="/js/leaflet.js"></script>
    <title><?php echo $judulHalaman ?></title>
</head>

<!-- CATATAN: Font Cabin belum bisa dipakai, kayaknya ada salah waktu konfigurasi di Tailwind nya, coba bantu cek lagi ya guys! Sama font Poppins nya masih tebel banget, gabisa diganti jenis ketebalannya... -->

<body>
    <!-- HEADER -->
    <div class="w-full fixed bg-blue-600 z-10" id="navbar">
        <header>
            <div class=" absolute lingkaran ">
            </div>
            <div class="flex items-center justify-between px-6 pt-3 ">
                <div class="" style="font-family: Poppins;">
                    <div class="flex">
                        <img src="/img/logoSIA.png" class="mb-1 z-50 md:w-16 w-10" alt="">
                        <div class="md:px-3 px-2 my-auto md:text-2xl text-lg text-white font-light z-50">
                            Sistem Informasi Alumni
                        </div>
                    </div>
                    <div class="hidden md:flex items-end justify-start pt-1">
                        <a href="">
                            <div class="text-white ml-1  p-3 menu">
                                BERANDA
                            </div>
                        </a>
                        <a href="">
                            <div class="text-white ml-1 p-3 menu">
                                PROFIL
                            </div>
                        </a>
                        <a href="">
                            <div class="text-white ml-1 p-3 menu">
                                ADMIN
                            </div>
                        </a>
                        <div class="flex items-end text-sm relative text-white ml-1  p-3 cari">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="absolute h-5 w-5 text-white">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                            </svg>
                            <input type="text" placeholder="|  CARI" class="placeholder-white bg-transparent ml-6">
                        </div>
                    </div>
                </div>
                <div class="flex">
                    <button type="button" class="hidden md:flex md:px-4 md:mt-4 md:-mb-14 md:border md:border-transparent md:shadow-sm md:text-base md:font-medium md:text-white md:bg-gradient-to-b md:from-secondary hover:bg-secondary hover:rounded">
                        KELUAR
                    </button>
                    <div class="-mt-3">
                        <button type="button" class="block text-white hover:text-gray-200 focus:text-gray-200 md:hidden" id="hamburger">
                            <svg class="w-8 fill-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="px-4 py-3 text-sm hidden text-center" style="font-family: Cabin;" id="list">
                <a href="" class="block text-white mt-1 px-2 py-2 rounded menu">BERANDA</a>
                <a href="" class="block text-white mt-1 px-2 py-2 rounded menu">PROFIL</a>
                <a href="" class="block text-white mt-1 px-2 py-2 rounded menu">ADMIN</a>
                <div class="flex block justify-center text-sm relative text-white -mb-3 p-3 mt-1 px-2 py-2 rounded cari">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="absolute -ml-12 h-5 w-5 text-white">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                    </svg>
                    <input type="text" placeholder="|  CARI" class="placeholder-white bg-transparent ml-6 text-center">
                </div>
                <a href="" class="block text-white mt-1 px-2 py-2 rounded bg-gradient-to-t from-secondary hover:bg-secondary">KELUAR</a>
            </div>
        </header>
    </div>
    <div class="w-full h-32 bg-primary">
        <!-- Codingan Navbar Taruh Sini juga buat semacam marginnya -->
    </div>
    <!-- END HEADER -->

    <!-- CONTENT PAGE DI SINI -->
    <div class="w-full">
        <?= $this->renderSection('content'); ?>
    </div>
    <!-- END CONTENT PAGE -->

    <!-- FOOTER -->
    <div class="bg-primary w-full mt-8 pt-6 pb-3 lg:px-20 md:px-8 px-2">
        <div class="flex flex-col md:flex-row md:justify-around lg:text-base md:text-sm ">

            <div class="flex items-center gap-x-2 mx-auto md:mx-0">
                <div class="w-36 md:w-auto">
                    <a href="https://stis.ac.id/"><img class="lg:w-24 lg:h-24 w-20 h-20" src="/img/STISlogo.png" alt=""></a>
                </div>
                <div class="text-white font-heading">
                    <h3>Jalan Otto Iskandardinatta</h3>
                    <h3>64C Jakarta 13330</h3>
                    <h3>08967xxxxx</h3>
                    <div class="flex gap-x-2 mt-2">
                        <a href="https://www.facebook.com/PolstatSTIS/"><img class="lg:h-6 h-4" src="/img/facebook.png" alt=""></a>
                        <a href="https://www.youtube.com/channel/UCwmpr4lmrApoGRpq4TcmsvA"><img class="lg:h-6 h-4" src="/img/youtube.png" alt=""></a>
                        <a href="https://twitter.com/stisjkt"><img class="lg:h-6 h-4" src="/img/twitter.png" alt=""></a>
                        <a href="https://www.instagram.com/polstatstis/"><img class="lg:h-6 h-4" src="/img/instagram.png" alt=""></a>
                    </div>
                </div>
            </div>

            <div class="flex items-center mt-4 gap-x-2 md:mt-0 mx-auto md:mx-0">
                <a href="https://haisstis.org/"><img class="lg:h-24 h-20 w-36 lg:w-auto" src="/img/logo_haisstis1.png" alt=""></a>
                <div class="text-white font-heading">
                    <h3>Jalan Otto Iskandardinatta</h3>
                    <h3>64C Jakarta 13330</h3>
                    <h3>08967xxxxx</h3>
                    <div class="flex gap-x-2 mt-2">
                        <a href=""><img class="lg:h-6 h-4" src="/img/facebook.png" alt=""></a>
                        <a href=""><img class="lg:h-6 h-4" src="/img/youtube.png" alt=""></a>
                        <a href="https://twitter.com/haisstis"><img class="lg:h-6 h-4" src="/img/twitter.png" alt=""></a>
                        <a href=""><img class="lg:h-6 h-4" src="/img/instagram.png" alt=""></a>
                    </div>
                </div>
            </div>

            <div class="text-white font-heading mx-auto md:mx-0 mt-4 md:mt-0">
                <a href="/webservice/">
                    <h3>Webservice(API)</h3>
                </a>
            </div>

        </div>

        <hr class="text-white mt-2 border-2">
        <h2 class="text-white text-center mt-3">Copyright &copy; PKL 60 Riset 5</h2>
    </div>
    <!-- END FOOTER -->
</body>

<script src="/js/aos.js"></script>
<script>
    AOS.init();
</script>
<script type="text/javascript" src="/js/leaflet.ajax.js"></script>
<script type="text/javascript" src="/js/add.js"></script>

</html>
