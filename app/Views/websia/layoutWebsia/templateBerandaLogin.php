<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/aos.css" />
    <link rel="stylesheet" href="/css/leaflet.css">
    <link rel="stylesheet" href="/css/navbar.css">
    <link rel="stylesheet" href="/css/output.css">
    <link rel="stylesheet" href="/css/swiper-bundle.css">
    <script src="/js/swiper-bundle.js"></script>
    <script src="/js/alpine.min.js" defer></script>
    <script type="text/javascript" src="/js/jquery.js"></script>
    <title><?php echo $judulHalaman ?></title>
</head>

<!-- CATATAN: Font Cabin belum bisa dipakai, kayaknya ada salah waktu konfigurasi di Tailwind nya, coba bantu cek lagi ya guys! Sama font Poppins nya masih tebel banget, gabisa diganti jenis ketebalannya... -->

<body>
    <!-- HEADER -->
    <div class="w-full fixed  z-10 bg-cover bg-no-repeat bg-left" style="background-image: url(/img/bgHeader.png)" id="navbar">
        <header>
            <div class="flex flex-col ">
                <div class="flex items-center justify-between px-6 pt-3 ">
                    <div class="">
                        <div class="flex">
                            <a href="/">
                                <img src="/img/logoSIA.png" class=" z-50 md:w-16 w-10" alt="">
                            </a>
                            <div class="md:px-3 px-2 my-auto md:text-2xl text-lg text-white font-heading font-light z-50">
                                Sistem Informasi Alumni
                            </div>
                        </div>
                        <div class="font-paragraph hidden md:flex items-end justify-start pt-1">
                            <a href="">
                                <div class="text-white ml-1 p-3 menu px-5 transition-colors duration-300">
                                    BERANDA
                                </div>
                            </a>
                            <a href="">
                                <div class="text-white ml-1 p-3 menu px-5 transition-colors duration-300">
                                    PROFIL
                                </div>
                            </a>
                            <a href="">
                                <div class="text-white ml-1 p-3 menu px-5 transition-colors duration-300">
                                    ADMIN
                                </div>
                            </a>
                            <div class="flex items-end text-sm relative text-white ml-1  p-3 cari">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="absolute h-5 w-5 text-white">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                </svg>
                                <input type="text" placeholder="|  CARI" class="placeholder-white bg-transparent ml-6 font-paragraph">
                            </div>
                        </div>
                    </div>
                    <div class="flex my-auto">
                        <button type="button" class="font-paragraph font-medium items-center hidden md:flex md:px-5 md:mt-4 md:-mb-14 md:shadow-sm md:text-base  md:text-white md:bg-secondary hover:bg-secondaryhover transition-colors duration-200 hover:rounded">
                            <a href="/login/">KELUAR</a>
                        </button>
                        <div class="">
                            <button type="button" class="block text-white hover:text-gray-200 focus:text-gray-200 md:hidden" id="hamburger">
                                <svg class="w-8 fill-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="md:hidden">
                    <div class="flex flex-col hidden w-full border-t border-b border-white py-2 font-paragraph" id="menu">
                        <div class="text-white text-xs text-center mt-1 px-2 py-2  w-11/12 mx-auto border-b border-white ">
                            <a href="/">BERANDA </a>
                        </div>
                        <div class="text-white text-xs text-center mt-1 px-2 py-2  w-11/12 mx-auto border-b border-white">
                            <a href=""> PROFIL</a>
                        </div>
                        <div class="text-white text-xs text-center mt-1 px-2 py-2  w-11/12 mx-auto border-b border-white">
                            <a href=""> ADMIN</a>
                        </div>

                        <div class="flex  justify-center text-sm relative text-white p-3 cari mt-1 px-2 py-2 w-11/12 mx-auto border-b border-white">
                            <svg xmlns=" http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" id="tombolCari" class="absolute -ml-12 h-5 w-5 text-white">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                            </svg>
                            <input type="text" placeholder="|  CARI" id="inputCari" class="placeholder-white bg-transparent ml-6 text-xs text-center w-2/3 outline-none ">
                        </div>
                        <div class=" mt-1 px-2 py-2 w-11/12 mx-auto font-medium bg-secondary hover:bg-secondaryhover transition-colors duration-200 text-xs text-center text-white ">
                            <a href="/login/">KELUAR</a>
                        </div>
                    </div>
                </div>

            </div>
        </header>
    </div>
    <div class="w-full md:h-32 h-12 bg-primary">
        <!-- Codingan Navbar Taruh Sini juga buat semacam marginnya -->
    </div>
    <!-- END HEADER -->

    <!-- CONTENT PAGE DI SINI -->
    <div class="w-full">
        <?= $this->renderSection('content'); ?>
    </div>
    <!-- END CONTENT PAGE -->

    <!-- FOOTER -->
    <div class="bg-primary w-full mt-8 pt-6 pb-3 lg:px-20 md:px-8 px-2 ">
        <div class="flex flex-col md:flex-row md:justify-around lg:text-base text-sm ">

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
<script type="text/javascript" src="/js/navbar.js"></script>

</html>
