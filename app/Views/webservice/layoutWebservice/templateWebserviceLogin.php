<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/output.css">
    <link rel="stylesheet" href="/css/scrollbar.css">
    <link rel="stylesheet" href="/css/all.css">
    <link rel="stylesheet" href="/css/add_style.css">
    <link rel="stylesheet" href="/css/aos.css" />
    <script type="text/javascript" src="/js/jquery.js"></script>
    <title><?= $judul; ?></title>

    <style>
        .menu {
            background-image: linear-gradient(to right, #014f86, #025e9e, #0567ab);
            background-size: 200% auto;
        }

        .choosed {
            background-color: #003c75;
        }

        .notchoose {
            background-color: #005490;
        }

        .list:hover {
            background-color: #FF8A00;
        }

        #utama {
            z-index: -1;
        }
    </style>

</head>

<body class="flex min-h-screen flex-col w-screen overflow-x-hidden font-paragraph">
    <!-- HEADER -->
    <header class="bg-primary sm:py-4 py-3 md:px-12 sm:px-8 px-4 w-full navbar fixed z-50">
        <div class="lingkaran-luar" id="kiri">
            <div class="lingkaran-dalam"></div>
        </div>
        <div class="flex justify-between">
            <div class="font-heading flex items-center sm:gap-x-6 gap-x-3 z-10">
                <a href="<?= base_url(); ?>">
                    <img src="/img/logoSIA.png" class="xl:w-16 lg:w-14 md:w-12 w-8" alt="">
                </a>
                <h1 class="judulApi text-white xl:text-2xl lg:text-xl md:text-base text-sm font-light">WEB SERVICE SISTEM INFORMASI ALUMNI</h1>
            </div>
            <div id="nav" class="hidden sm:flex sm:items-center z-10">
                <ul class="flex lg:gap-x-6 md:gap-x-4 gap-x-2 relative">
                    <li class="bg-secondary text-white py-1.5 sm:w-20 md:w-24 text-center cursor-pointer border-secondary border-2 hover:text-secondary hover:bg-white transition-colors duration-300 relative">API
                        <i class="fa fa-caret-down"></i>
                        <ul class="text-secondary absolute top-11 left-0 overflow-hidden transition-all max-h-0 bg-white duration-300">

                            <a href="/webservice/">
                                <li class="list hover:text-white py-1.5 text-left border-2 border-secondary transiton duration-300 px-3">BERANDA</li>
                            </a>
                            <a href="/webservice/dokumentasi">
                                <li class="list hover:text-white py-1.5 text-left border-l-2 border-r-2 border-secondary transiton duration-300 px-3">DOKUMENTASI</li>
                            </a>
                            <a href="/webservice/proyek">
                                <li class="list hover:text-white py-1.5 text-left border-2 border-secondary transiton duration-300 px-3">PROYEK</li>
                            </a>
                        </ul>
                    </li>

                    <a href="/webservice/profilDeveloper">
                        <li class="bg-secondary text-white py-1.5 sm:w-20 md:w-24 text-center cursor-pointer border-secondary border-2 hover:text-secondary hover:bg-white transition-colors duration-300">PROFIL</li>
                    </a>
                    <a href="/logout">
                        <li class="bg-secondary text-white py-1.5 sm:w-20 md:w-24 text-center cursor-pointer border-secondary border-2 hover:text-secondary hover:bg-white transition-colors duration-300">KELUAR</li>
                    </a>
                </ul>
            </div>

            <button type="button" class="block text-white hover:text-gray-200 focus:text-gray-200 sm:hidden" id="hamburgerApi">
                <svg class="w-8 fill-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
        <div class="lingkaran-luar" id="kanan">
            <div class="lingkaran-dalam"></div>
        </div>

        <div class="sm:hidden hidden transform translate-y-3" id="menuApi">
            <div class="menu  border-t border-b flex justify-center">
                <ul class="w-min" id="navmobile">
                    <li class="cursor-pointer flex justify-center text-white py-1">
                        <div class="bg-secondary w-28 flex justify-center hover:bg-white hover:text-secondary py-0.5">API<i class="fa fa-caret-down transform translate-y-1 translate-x-1"></i></div>
                    </li>
                    <ul class="transform -translate-y-0.5 text-white w-screen flex flex-col items-center hidden top-o right-0">
                        <a href="/webservice/">
                            <li class="list m-auto hover:text-white bg-white text-center text-secondary text-sm py-0.5 w-44 border-b-2 border-gray-500">BERANDA</li>
                        </a>
                        <a href="/webservice/dokumentasi">
                            <li class="list m-auto hover:text-white bg-white text-center text-secondary text-sm py-0.5 w-44 border-b-2 border-gray-500">DOKUMENTASI</li>
                        </a>
                        <a href="/webservice/proyek">
                            <li class="list m-auto hover:text-white bg-white text-center text-secondary text-sm py-0.5 w-44 border-b-2 border-gray-500">PROYEK</li>
                        </a>
                    </ul>
                </ul>
            </div>
            <div class="menu border-b flex justify-center">
                <ul class="w-min">
                    <a href="#">
                        <li class="cursor-pointer flex justify-center text-white py-1">
                            <div class="bg-secondary w-28 flex justify-center hover:bg-white hover:text-secondary py-0.5">PROFIL</div>
                        </li>
                    </a>
                </ul>
            </div>
            <div class="menu flex justify-center">
                <ul class="w-min">
                    <a href="/logout/">
                        <li class="cursor-pointer flex justify-center text-white py-1">
                            <div class="bg-secondary w-28 flex justify-center hover:bg-white hover:text-secondary py-0.5">KELUAR</div>
                        </li>
                    </a>
                </ul>
            </div>
        </div>

    </header>
    <!-- END HEADER -->

    <div class="w-full bg-primary w-full lg:h-24 md:h-20 h-12">
    </div>

    <!-- CONTENT PAGE DI SINI -->
    <div class="w-full flex flex-1 justify-center items-center">
        <?= $this->renderSection('content'); ?>
    </div>
    <!-- END CONTENT PAGE -->

    <!-- FOOTER -->
    <div class="bg-primary w-full mt-8 pt-6 pb-3 lg:px-20 md:px-8 px-3">
        <div class="flex flex-col md:flex-row md:justify-around md:text-sm text-xs">

            <!-- awal footer stis -->
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
            <!-- akhir footer stis -->

            <!-- awal footer haistis -->
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
            <!-- akhir footer haistis -->

            <!-- awal link ke webservice  -->
            <div class="flex flex-col text-white font-heading mx-auto md:mx-0 mt-4 md:mt-0">
                <a href="/websia/" class="mb-4">
                    <h3>Website PKL60</h3>
                </a>

                <a href="/webservice/">
                    <h3>Webservice(API)</h3>
                </a>
            </div>
            <!-- akhir link ke webservice  -->

        </div>

        <div class="flex items-center mt-2">
            <div class="flex-grow">
                <hr class="text-white border-2 my-auto">
            </div>
            <div class="flex-grow-0">
                <div class="flex items-center w-8 h-8 rounded-full bg-secondary cursor-pointer" id="upPage">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-white mx-auto" fill="currentColor" class="bi bi-caret-up-fill" viewBox="0 0 16 16">
                        <path d="M7.247 4.86l-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z" />
                    </svg>
                </div>
            </div>
        </div>

        <h2 class="text-white text-center mt-3">Copyright &copy; PKL 60 Riset 5</h2>
    </div>
    <!-- END FOOTER -->
    <script type="text/javascript" src="/js/navbar.js"></script>
    <script src="/js/aos.js"></script>
    <script type="text/javascript" src="/js/footer.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>