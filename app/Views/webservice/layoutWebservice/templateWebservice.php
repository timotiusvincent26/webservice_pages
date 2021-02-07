<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/output.css">
    <link rel="stylesheet" href="/css/add_style.css">
    <link rel="stylesheet" href="/css/scrollbar.css">
    <link rel="stylesheet" href="/css/scrollbar.css">
    <script type="text/javascript" src="/js/jquery.js"></script>
    <title>Web Service | SIA</title>
</head>

<body class="flex min-h-screen flex-col w-screen overflow-x-hidden font-paragraph">
    <!-- HEADER -->
    <header class="bg-primary sm:py-4 py-3 md:px-12 px-4 w-full fixed">
        <div class="lingkaran-luar" id="kiri">
            <div class="lingkaran-dalam"></div>
        </div>
        <div class="flex justify-between">
            <div class="font-heading flex items-center sm:gap-x-6 gap-x-3 z-10">
                <a href="<?= base_url(); ?>">
                    <img src="/img/logoSIA.png" class="xl:w-16 lg:w-14 md:w-12 w-8" alt="">
                </a>
                <h1 class="judulApi text-white xl:text-2xl lg:text-lg text-base font-light">WEB SERVICE SISTEM INFORMASI ALUMNI</h1>
            </div>
            <div id="nav" class="flex items-center">
                <ul class="flex lg:gap-x-6 md:gap-x-4 gap-x-2 relative z-10">
                    <li class="bg-secondary text-white sm:py-1.5 py-0 sm:w-24 w-20 text-center cursor-pointer border-secondary border-2 hover:text-secondary hover:bg-white hover:border-opacity-70 transition-colors duration-300"><a href="/login/">MASUK</a></li>
                </ul>
            </div>
        </div>
        <div class="lingkaran-luar" id="kanan">
            <div class="lingkaran-dalam"></div>
        </div>
    </header>
    <!-- END HEADER -->

    <!-- CONTENT PAGE DI SINI -->
    <div class="w-full flex flex-1 justify-center items-center">
        <?= $this->renderSection('content'); ?>
    </div>
    <!-- END CONTENT PAGE -->

    <!-- FOOTER -->
    <footer class="bg-primary w-full mt-4 pt-6 pb-3 lg:px-20 md:px-8 px-2">
        <div class="flex flex-col md:flex-row md:justify-around lg:text-base text-sm ">
            <div class="flex items-center gap-x-2 mx-auto md:mx-0">
                <div class="w-36 md:w-auto">
                    <a href="https://stis.ac.id/"><img class="w-24 h-24" src="/img/STISlogo.png" alt=""></a>
                </div>
                <div class="text-white font-heading">
                    <h3>Jalan Otto Iskandardinatta</h3>
                    <h3>64C Jakarta 13330</h3>
                    <h3>08967xxxxx</h3>
                    <div class="flex gap-x-2 mt-2">
                        <a href="https://www.facebook.com/PolstatSTIS/"><img class="md:h-6 h-4" src="/img/facebook.png" alt=""></a>
                        <a href="https://www.youtube.com/channel/UCwmpr4lmrApoGRpq4TcmsvA"><img src="/img/youtube.png" alt="yt" class="md:h-6 h-4">
                        </a>
                        <a href="https://twitter.com/stisjkt"><img class="md:h-6 h-4" src="/img/twitter.png" alt=""></a>
                        <a href="https://www.instagram.com/polstatstis/"><img class="md:h-6 h-4" src="/img/instagram.png" alt=""></a>
                    </div>
                </div>
            </div>

            <div class="flex items-center mt-4 gap-x-2 md:mt-0 mx-auto md:mx-0">
                <a href="https://haisstis.org/"><img class="md:h-24 h-20 w-36 md:w-auto" src="/img/logo_haisstis1.png" alt=""></a>
                <div class="text-white font-heading">
                    <h3>Jalan Otto Iskandardinatta</h3>
                    <h3>64C Jakarta 13330</h3>
                    <h3>08967xxxxx</h3>
                    <div class="flex gap-x-2 mt-2">
                        <a href=""><img class="md:h-6 h-4" src="/img/facebook.png" alt=""></a>
                        <a href=""><img src="/img/youtube.png" alt="yt" class="md:h-6 h-4">
                        </a>
                        <a href="https://twitter.com/haisstis"><img class="md:h-6 h-4" src="/img/twitter.png" alt=""></a>
                        <a href=""><img class="md:h-6 h-4" src="/img/instagram.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>

        <hr class="text-white mt-2 border-2">
        <h2 class="text-white text-center mt-3 md:text-base text-sm">Copyright &copy; PKL 60 Riset 5</h2>
    </footer>
    <!-- END FOOTER -->
    <script type="text/javascript" src="/js/navbar.js"></script>
</body>

</html>
