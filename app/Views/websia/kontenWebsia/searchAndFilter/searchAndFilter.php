<?= $this->extend('websia/layoutWebsia/templateBerandaLogin.php'); ?>

<?= $this->section('content'); ?>

<div class="flex w-full my-4">

    <!-- awal sidebar -->
    <div class="md:relative fixed flex flex-col bg-primary rounded-r md:h-auto h-full" id="sidebarSearch">
        <div class="flex md:px-4 px-2 py-1 justify-between bg-indigo-900">
            <div class="md:text-xl text-base my-auto font-semibold text-secondary hidden mr-12" id="param1"> FILTER</div>
            <svg class="w-8 fill-current text-secondary cursor-pointer hidden" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" class="md:w-6 w-4 fill-current text-secondary cursor-pointer" id="hamburgerSidebar" fill="currentColor" class="bi bi-filter" viewBox="0 0 16 16">
                <path d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z" />
            </svg>
        </div>

        <div class="flex flex-col mt-4 hidden" id="param2">
            <div class="md:text-base text-sm text-secondary hover:bg-blue-800 hover:bg-opacity-75 font-medium px-4 py-1 cursor-pointer" id="filterSidebar">Semua</div>
            <div class="md:text-base text-sm  text-white hover:bg-blue-800 hover:bg-opacity-75 font-medium px-4 py-1 cursor-pointer" id="filterSidebar">Alumni</div>
            <div class="flex flex-col py-1 px-7 w-full hidden" id="listFilterSidebarAlumni">
                <div class="flex justify-between mb-1">
                    <div class="md:text-sm text-xs text-white cursor-pointer "> jurusan</div>
                    <svg class="w-3 h-3 my-auto text-white font-semibold cursor-pointer" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                    <svg class="w-3 h-3 my-auto text-white font-semibold cursor-pointer hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path>
                    </svg>
                </div>

                <div class="flex justify-between mb-1">
                    <div class="md:text-sm text-xs text-white cursor-pointer"> Angkatan</div>
                    <svg class="w-3 h-3 my-auto text-white font-semibold cursor-pointer" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                    <svg class="w-3 h-3 my-auto text-white font-semibold cursor-pointer hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path>
                    </svg>
                </div>

                <div class="flex justify-between mb-1">
                    <div class="md:text-sm text-xs text-white cursor-pointer"> Tempat Kerja</div>
                    <svg class="w-3 h-3 my-auto text-white font-semibold cursor-pointer" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                    <svg class="w-3 h-3 my-auto text-white font-semibold cursor-pointer hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path>
                    </svg>
                </div>
            </div>

            <div class="md:text-base text-sm text-white hover:bg-blue-800 hover:bg-opacity-75 font-medium px-4 py-1 cursor-pointer" id="filterSidebar">Artikel/Berita</div>
            <div class="flex flex-col py-1 px-7 w-full hidden" id="listFilterSidebarBerita">
                <div class="flex justify-between mb-1">
                    <div class="md:text-sm text-xs text-white cursor-pointer"> Rentang Waktu</div>
                    <svg class="w-3 h-3 my-auto text-white font-semibold cursor-pointer" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                    <svg class="w-3 h-3 my-auto text-white font-semibold cursor-pointer hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path>
                    </svg>
                </div>

                <div class="flex justify-between mb-1">
                    <div class="md:text-sm text-xs text-white cursor-pointer"> Penulis</div>
                    <svg class="w-3 h-3 my-auto text-white font-semibold cursor-pointer" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                    <svg class="w-3 h-3 my-auto text-white font-semibold cursor-pointer hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path>
                    </svg>
                </div>
            </div>
        </div>

    </div>
    <!-- akhir sidebar -->

    <div class=" ml-2  flex-grow ">
        <!-- HASIL PENCARIAN ALUMNI -->
        <div class="flex">
            <div class=" md:hidden flex w-24"></div>
            <div class="flex-grow">
                <div class="md:ml-12 ml-3 mr-3">
                    <div>
                        <h1 class="text-secondary font-heading text-2xl font-bold">ALUMNI</h1>
                        <!-- awal jumlah hasil pencarian alumni  -->
                        <div class="text-primary md:mb-6 mb-2 font-paragraph font-extralight text-sm">
                            Sekitar 2.547 hasil pencarian alumni
                        </div>
                        <hr class="my-4 border-2 border-gray-400">
                        <!-- akhir jumlah hasil pencarian alumni  -->

                        <!-- DAFTAR HASIL PENCARIAN ALUMNI -->
                        <div>
                            <?php for ($x = 0; $x < 4; $x++) : ?>
                                <div class="mx-2">
                                    <div class="flex gap-x-4">
                                        <div class="flex items-center">
                                            <img src="/img/avatar.png" class="lg:w-18 w-12 mx-auto" alt="">
                                        </div>
                                        <div class="flex items-center">
                                            <div>
                                                <h2 class="md:text-lg font-heading text-primary font-semibold">Nama Lengkap</h2>
                                                <div class="md:text-sm text-xs font-paragraph text-primary">Atribut</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-4 border-gray-400">
                            <?php endfor; ?>
                            <hr class="-my-4 border-2 border-gray-400">
                        </div>
                        <!-- awal tulisan "Selengkapnya" di hasil pencarian -->
                        <div class="flex justify-end mt-12">
                            <div class="flex bg-secondary text-white rounded-full md:py-2 py-1 md:px-3 px-2 items-center gap-x-2 cursor-pointer md:text-sm text-xs">
                                Selengkapnya
                                <img src="/img/right-off.png" class="md:w-4 md:h-4 w-3 h-3 my-auto" alt="">
                            </div>
                        </div>
                        <!-- akhir tulisan "Selengkapnya" di hasil pencarian -->
                        <!-- END DAFTAR HASIL PENCARIAN ALUMNI -->
                    </div>
                </div>
                <!-- AKHIR HASIL PENCARIAN ALUMNI -->

                <!-- HASIL PENCARIAN BERITA -->
                <div class="md:ml-12 ml-3 mr-3 mt-6">
                    <div>
                        <h1 class="text-secondary font-heading text-2xl font-bold">BERITA</h1>
                        <!-- awal jumlah hasil pencarian berita  -->
                        <div class="text-primary mb-6 font-paragraph font-extralight text-sm">
                            Sekitar 28.899 hasil pencarian berita
                        </div>
                        <hr class="my-4 border-2 border-gray-400">
                        <!-- akhir jumlah hasil pencarian berita  -->

                        <!-- DAFTAR HASIL PENCARIAN BERITA -->
                        <div>
                            <?php for ($x = 0; $x < 4; $x++) : ?>
                                <div class="mx-2">
                                    <div class="flex md:flex-row flex-col md:gap-x-4 gap-x-0">
                                        <div class="flex">
                                            <img src="/img/sampel.jpeg" alt="" class="md:w-48 md:h-36 w-full h-52 ">
                                        </div>
                                        <div class="flex items-center">
                                            <div>
                                                <h2 class="text-lg font-heading text-primary font-semibold mb-2">Judul Berita</h2>
                                                <div class="text-xs font-paragraph text-primary">11 Januari 2021</div>
                                                <div class="text-sm font-paragraph ">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras blandit turpis sem, eu laoreet odio pretium ac. Mauris eget aliquet lorem. Cras dignissim leo non ante molestie, at vulputate justo lobortis. Pellentesque quam elit, mattis eu nibh et, maximus congue mauris
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-4 border-gray-400">
                            <?php endfor; ?>
                            <hr class="-my-4 border-2 border-gray-400">
                        </div>
                        <!-- awal tulisan "Selengkapnya" di hasil pencarian -->
                        <div class="flex justify-end mt-12">
                            <div class="flex bg-secondary text-white rounded-full md:py-2 py-1 md:px-3 px-2 items-center gap-x-2 cursor-pointer md:text-sm text-xs">
                                Selengkapnya
                                <img src="/img/right-off.png" class="md:w-4 md:h-4 w-3 h-3" alt="">
                            </div>
                        </div>
                        <!-- akhir tulisan "Selengkapnya" di hasil pencarian -->
                        <!-- END DAFTAR HASIL PENCARIAN BERITA -->
                    </div>
                </div>
            </div>
        </div>
        <!-- END HASIL PENCARIAN BERITA -->
    </div>

</div>


<script type="text/javascript" src="/js/search.js"></script>
<?= $this->endSection(); ?>