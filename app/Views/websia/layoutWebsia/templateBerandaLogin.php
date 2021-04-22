<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/aos.css" />
    <link rel="stylesheet" href="/css/leaflet.css">
    <link rel="stylesheet" href="/css/navbar.css">
    <link rel="stylesheet" href="/css/output.css">
    <link rel="stylesheet" href="/css/scrollbar.css">
    <link rel="stylesheet" href="/css/swiper-bundle.css">
    <link rel="stylesheet" href="/css/img-viewer.css">
    <script src="/js/swiper-bundle.js"></script>
    <script src="/js/alpine.min.js" defer></script>
    <script type="text/javascript" src="/js/navbar.js"></script>
    <script type="text/javascript" src="/js/jquery.js"></script>
    <script type="text/javascript" src="/js/leaflet.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/add_style.css">

    <title><?php echo $judulHalaman; ?></title>

    <style>
        .dropdown {
            margin-top: 5px;
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            padding: 0.25rem 0.5rem;
            text-decoration: none;
            display: block;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
</head>

<!-- CATATAN: Font Cabin belum bisa dipakai, kayaknya ada salah waktu konfigurasi di Tailwind nya, coba bantu cek lagi ya guys! Sama font Poppins nya masih tebel banget, gabisa diganti jenis ketebalannya... -->

<body>
    <!-- loading -->
    <div class="loading flex fixed w-full h-screen z-50 transition-opacity duration-200">
        <img src="/img/load1.gif" class="m-auto items-center md:w-96 sm:w-72 w-60">
    </div>
    <!-- loading -->
    <!-- tombol kembali ke atas -->
    <button onclick="topFunction()" id="onTopBtn" title="Kembali ke Atas" class="hidden fixed bottom-5 right-8 w-10 h-10 p-1 cursor-pointer rounded-full border-none focus:outline-none z-40 bg-secondary">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-white mx-auto" fill="currentColor" class="bi bi-caret-up-fill" viewBox="0 0 16 16">
            <path d="M7.247 4.86l-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z" />
        </svg>
    </button>

    <!-- HEADER -->
    <div class="navbar w-full fixed z-30 bg-cover bg-no-repeat bg-left transition duration-700 ease-out" style="background-image: url(/img/bgHeader.png)" id="navbar">
        <header>
            <div class="flex flex-col">
                <div class="flex items-center justify-between px-6 pt-3 ">
                    <div class="">
                        <div class="flex">
                            <a href="<?= base_url(); ?>">
                                <img src="/img/logoSIA.png" class="z-30 md:w-16 w-10" alt="logo SIA">
                            </a>
                            <div class="md:px-3 px-2 my-auto text-white z-30">
                                <p class="font-heading text-lg md:text-2xl font-semibold">Sistem Informasi Alumni</p>
                                <p class="font-heading md:text-xs font-normal hidden md:block -mt-1.5">Akademi Ilmu Statistik - Sekolah Tinggi Ilmu Statistik - Politeknik Statistika STIS</p>
                            </div>
                        </div>
                        <div class="font-paragraph hidden md:flex items-end justify-start pt-1">
                            <a href="<?= base_url(); ?>">
                                <div class="nav-menu transition-colors duration-300 <?= ($active == 'beranda') ? 'active' : ''; ?>">
                                    BERANDA
                                </div>
                            </a>
                            <a href="/profil">
                                <div class="nav-menu transition-colors duration-300 <?= ($active == 'profil') ? 'active' : ''; ?>">
                                    PROFIL
                                </div>
                            </a>
                            <div class="dropdown menuGaleri">
                                <div class="nav-menu cursor-pointer transition-colors duration-300 <?= ($active == 'galeri') ? 'active' : ''; ?>">
                                    GALERI
                                </div>
                                <div class="dropdown-content ml-1 w-max text-sm">
                                    <a href="/galeriFoto" class="bg-primaryDark hover:bg-primary text-white hover:text-secondary text-left w-full px-2 border-b-2 border-primary transition duration-300"> Galeri Kenangan Alumni </a>
                                    <a href="/galeriVideo" class="bg-primaryDark hover:bg-primary text-white hover:text-secondary text-left w-full px-2 border-b-2 border-primary transition duration-300"> Galeri Video Kegiatan HAISTIS </a>
                                    <a href="/galeriWisuda" class="bg-primaryDark hover:bg-primary text-white hover:text-secondary text-left w-full px-2 transition duration-300"> Galeri Video Wisuda AIS/STIS/Polstat STIS </a>
                                </div>
                            </div>
                            <a href="/admin">
                                <div class="nav-menu transition-colors duration-300 <?= ($active == 'admin') ? 'active' : ''; ?>">
                                    ADMIN
                                </div>
                            </a>
                            <div class="flex items-end text-sm relative text-white ml-1 p-1 bg-primaryLight cursor-pointer transition-colors duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="absolute h-5 w-5 m-1 text-white">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                </svg>
                                <form action="/searchAndFilter" method="get">
                                    <input type="text" name="kata_kunci" placeholder="|  CARI" class="placeholder-white bg-transparent focus:outline-none ml-6 font-paragraph p-1">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="flex my-auto">
                        <a href="/logout" class="font-paragraph font-medium items-center hidden md:flex md:h-9 md:px-5 md:mt-3.5 md:-mb-14 md:shadow-sm md:text-base  md:text-white md:bg-secondary hover:bg-secondaryhover transition-colors duration-200 hover:rounded">
                            KELUAR
                        </a>
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
                        <div class="nav-menu-relative px-2 py-2 <?= ($active == 'beranda') ? 'active' : ''; ?>">
                            <a href="<?= base_url(); ?>">BERANDA </a>
                        </div>
                        <div class="nav-menu-relative px-2 py-2 <?= ($active == 'profil') ? 'active' : ''; ?>">
                            <a href="/profil"> PROFIL</a>
                        </div>
                        <div class="flex flex-col">
                            <div class="nav-menu-relative flex px-2 py-2 <?= ($active == 'galeri') ? 'active' : ''; ?>" id="galeri">
                                <div class="mx-auto">
                                    GALERI
                                    <svg class="inline w-4 h-4 my-auto ml-1" fill="none" id="downGaleri" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                    <svg class="inline w-4 h-4 my-auto ml-1 hidden" fill="currentColor" id="upGaleri" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="flex flex-col hidden" id="listGaleri">
                                <a href="/galeriFoto" class="nav-menu-relative py-2"> Galeri Kenangan Alumni </a>
                                <a href="/galeriVideo" class="nav-menu-relative py-2"> Galeri Video Kegiatan HAISSTIS </a>
                                <a href="/galeriWisuda" class="nav-menu-relative py-2"> Galeri Video Wisuda AIS/STIS/Polstat STIS </a>
                            </div>
                        </div>
                        <div class="nav-menu-relative px-2 py-2">
                            <a href="/admin"> ADMIN</a>
                        </div>

                        <div class="flex  justify-center text-sm relative text-white p-3 cari mt-1 px-2">
                            <svg xmlns=" http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" id="tombolCari" class="absolute -ml-12 h-5 w-5 text-white">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                            </svg>
                            <form action="/searchAndFilter" method="get">
                                <input type="text" name="kata_kunci" placeholder="    |  CARI" id="inputCari" class="placeholder-white bg-transparent ml-6 text-xs text-center w-2/3 outline-none ">
                            </form>
                        </div>
                        <div class=" mt-1 px-2 py-2 w-11/12 mx-auto font-medium bg-secondary hover:bg-secondaryhover transition-colors duration-200 text-xs text-center text-white ">
                            <a href="/logout">KELUAR</a>
                        </div>
                    </div>
                </div>

            </div>
        </header>
    </div>
    <div class="w-full md:h-28 h-12 bg-primary">
        <!-- Codingan Navbar Taruh Sini juga buat semacam marginnya -->
    </div>
    <!-- END HEADER -->

    <!-- CONTENT PAGE DI SINI -->
    <div class="w-full">
        <?= $this->renderSection('content'); ?>
    </div>
    <!-- END CONTENT PAGE -->

    <!-- FOOTER -->
    <div class="bg-primary w-full  pt-6 pb-3 lg:px-20 md:px-8 px-3 ">
        <div class="flex flex-col md:flex-row md:justify-around md:text-sm text-xs">
            <!-- awal footer stis -->
            <div class="flex items-center gap-x-2 mx-auto md:mx-0">
                <div class="w-36 md:w-auto">
                    <a href="https://stis.ac.id/"><img class="lg:w-24 lg:h-24 w-20 h-20" src="/img/STISlogo.png" alt=""></a>
                </div>
                <div class="text-white font-heading">
                    <h3>Jl. Otto Iskandardinata No.64C Jakarta 13330</h3>
                    <h3>Telp. (021) 8191437, 8508812</h3>
                    <h3>Fax. (021) 8197577</h3>
                    <div class="flex gap-x-2 mt-2">
                        <a href="https://www.facebook.com/PolstatSTIS/"><img class="lg:h-6 h-4" src="/img/facebook.png" alt=""></a>
                        <a href="https://www.youtube.com/channel/UCwmpr4lmrApoGRpq4TcmsvA"><img class="lg:h-6 h-4" src="/img/youtube.png" alt=""></a>
                        <a href="https://twitter.com/stisjkt"><img class="lg:h-6 h-4" src="/img/twitter.png" alt=""></a>
                        <a href="https://www.instagram.com/polstatstis/"><img class="lg:h-6 h-4" src="/img/instagram.png" alt=""></a>
                    </div>
                </div>
            </div>
            <!-- akhir footer stis -->

            <!-- awal footer haistis -->
            <div class="flex items-center mt-4 gap-x-2 md:mt-0 mx-auto md:mx-0">
                <a href="https://haisstis.org/"><img class="lg:h-24 h-20 w-36 lg:w-auto" src="/img/logo_haisstis1.png" alt=""></a>
                <div class="text-white font-heading">
                    <h3>Jl. Otto Iskandardinata No.64C Jakarta 13330</h3>
                    <h3>Telp. (021) 8191437, 8508812</h3>
                    <h3>Fax. (021) 8197577</h3>
                    <div class="flex gap-x-2 mt-2">
                        <a href=""><img class="lg:h-6 h-4" src="/img/facebook.png" alt=""></a>
                        <a href=""><img class="lg:h-6 h-4" src="/img/youtube.png" alt=""></a>
                        <a href="https://twitter.com/haisstis"><img class="lg:h-6 h-4" src="/img/twitter.png" alt=""></a>
                        <a href=""><img class="lg:h-6 h-4" src="/img/instagram.png" alt=""></a>
                    </div>
                </div>
            </div>
            <!-- akhir footer haistis -->

            <!-- awal link ke webservice  -->
            <div class="flex flex-col text-white font-heading mx-auto md:mx-5 mt-4 md:mt-0">
                <a href="/websia/" class="mb-2 hover:text-secondary">
                    <h3>Website PKL60</h3>
                </a>
                <a href="/webservice/" class="hover:text-secondary">
                    <h3>Webservice(API)</h3>
                </a>
            </div>
            <!-- akhir link ke webservice  -->

        </div>

        <div class="flex items-center mt-4">
            <div class="flex-grow">
                <hr class="text-white bg-white border my-auto">
            </div>


        </div>

        <h2 class="text-white text-sm text-center mt-1">Copyright &copy; PKL 60 Riset 5</h2>
    </div>
    <!-- END FOOTER -->
</body>
<script type="text/javascript" src="/js/loading.js"></script>
<script src="/js/aos.js"></script>
<script>
    AOS.init();
</script>
<script type="text/javascript" src="/js/onTopBtn.js"></script>
<script type="text/javascript" src="/js/navbar.js"></script>
<script type="text/javascript" src="/js/footer.js"></script>
<script type="text/javascript" src="/js/editProfil.js"></script>
<script type="text/javascript" src="/js/galeri.js"></script>

</html>