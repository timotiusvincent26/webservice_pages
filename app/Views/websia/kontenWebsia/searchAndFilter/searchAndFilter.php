<?= $this->extend('websia/layoutWebsia/templateBerandaLogin.php'); ?>

<?= $this->section('content'); ?>

<div class="flex w-full">

    <!-- awal sidebar -->
    <div class="md:relative fixed flex flex-col bg-primary rounded-r md:h-auto h-full" id="sidebarSearch">
        <div class="flex md:px-4 px-2 py-1 justify-between bg-primaryHover">
            <div class="md:text-xl text-base my-auto font-semibold text-secondary hidden md:mr-24" id="param1"> FILTER</div>
            <svg class="md:w-6 w-4 fill-current text-secondary cursor-pointer" id="hamburgerSidebar" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </div>

        <div class="flex flex-col mt-4 hidden" id="param2">
            <div class="md:text-base text-sm text-secondary hover:bg-primaryDark font-medium px-4 py-1 cursor-pointer" id="filterSidebar">Semua</div>

            <div class="md:text-base text-sm  text-white hover:bg-primaryDark font-medium px-4 py-1 cursor-pointer" id="filterSidebar">Alumni</div>
            <div class="flex flex-col py-1 px-6 w-full hidden" id="listFilterSidebarAlumni">

                <div class="flex flex-col">
                    <div class="flex justify-between mb-1 hover:bg-primaryDark py-1 px-2 rounded-lg cursor-pointer" id="listSidebar">
                        <div class="md:text-sm text-xs text-white ">Prodi</div>
                        <svg class="w-3 h-3 my-auto text-white font-semibold " fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                        <svg class="w-3 h-3 my-auto text-white font-semibold  hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path>
                        </svg>
                    </div>

                    <div class="flex flex-col mb-1 px-3 hidden" id="listProdi">
                        <div class="text-xs text-white cursor-pointer py-1 px-1 hover:bg-primaryDark rounded-lg" id="namaProdi">DIII Statistika</div>
                        <div class="text-xs text-white cursor-pointer py-1 px-1 hover:bg-primaryDark rounded-lg" id="namaProdi">DIV Statistika</div>
                        <div class="text-xs text-white cursor-pointer py-1 px-1 hover:bg-primaryDark rounded-lg" id="namaProdi">DIV Komputasi Statistik</div>
                    </div>
                </div>

                <div class="flex flex-col">
                    <div class="flex justify-between mb-1 hover:bg-primaryDark py-1 px-2 rounded-lg cursor-pointer" id="listSidebar">
                        <div class="md:text-sm text-xs text-white">Angkatan</div>
                        <svg class="w-3 h-3 my-auto text-white font-semibold" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                        <svg class="w-3 h-3 my-auto text-white font-semibold hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path>
                        </svg>
                    </div>

                    <div class="mb-1 px-4 hidden" id="listAngkatan">
                        <input type="text" placeholder="Contoh : 60" class="placeholder-primary text-primary text-xs px-2 py-1 outline-none focus:ring-2 focus:ring-blue-600 font-paragraph rounded-lg">
                    </div>

                </div>

                <div class="flex flex-col">
                    <div class="flex justify-between mb-1 hover:bg-primaryDark py-1 px-2 rounded-lg cursor-pointer" id="listSidebar">
                        <div class="md:text-sm text-xs text-white ">Tempat Kerja</div>
                        <svg class="w-3 h-3 my-auto text-white font-semibold " fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                        <svg class="w-3 h-3 my-auto text-white font-semibold  hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path>
                        </svg>
                    </div>

                    <div class="flex flex-col mb-1 px-4 hidden" id="listTempatKerja">
                        <div class="flex justify-between mb-1 cursor-pointer" id="BPS">
                            <div class="text-white text-xs">BPS</div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-5 text-white" id="onBPS" fill="currentColor" class="bi bi-toggle-on" viewBox="0 0 16 16">
                                <path d="M5 3a5 5 0 0 0 0 10h6a5 5 0 0 0 0-10H5zm6 9a4 4 0 1 1 0-8 4 4 0 0 1 0 8z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-5 text-white hidden" id="offBPS" fill="currentColor" class="bi bi-toggle-off" viewBox="0 0 16 16">
                                <path d="M11 4a4 4 0 0 1 0 8H8a4.992 4.992 0 0 0 2-4 4.992 4.992 0 0 0-2-4h3zm-6 8a4 4 0 1 1 0-8 4 4 0 0 1 0 8zM0 8a5 5 0 0 0 5 5h6a5 5 0 0 0 0-10H5a5 5 0 0 0-5 5z" />
                            </svg>
                        </div>
                        <input type="text" placeholder="Contoh : BPS RI" class="placeholder-primary text-primary text-xs px-2 py-1 outline-none mb-2 focus:ring-2 focus:ring-blue-600 font-paragraph rounded-lg">

                        <div class="flex justify-between mb-1 cursor-pointer" id="Lainnya">
                            <div class="text-white text-xs">Lainnya</div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-5 text-white hidden" id="onLainnya" fill="currentColor" class="bi bi-toggle-on" viewBox="0 0 16 16">
                                <path d="M5 3a5 5 0 0 0 0 10h6a5 5 0 0 0 0-10H5zm6 9a4 4 0 1 1 0-8 4 4 0 0 1 0 8z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-5 text-white" id="offLainnya" fill="currentColor" class="bi bi-toggle-off" viewBox="0 0 16 16">
                                <path d="M11 4a4 4 0 0 1 0 8H8a4.992 4.992 0 0 0 2-4 4.992 4.992 0 0 0-2-4h3zm-6 8a4 4 0 1 1 0-8 4 4 0 0 1 0 8zM0 8a5 5 0 0 0 5 5h6a5 5 0 0 0 0-10H5a5 5 0 0 0-5 5z" />
                            </svg>
                        </div>
                        <input type="text" placeholder="Contoh : Polstat STIS" class="placeholder-primary text-xs text-primary px-2 py-1 outline-none mb-1 focus:ring-2 focus:ring-blue-600 font-paragraph rounded-lg">
                    </div>
                </div>

            </div>

            <div class="md:text-base text-sm text-white hover:bg-primaryDark font-medium px-4 py-1 cursor-pointer" id="filterSidebar">Artikel/Berita</div>

            <div class="flex flex-col py-1 px-7 w-full hidden" id="listFilterSidebarBerita">

                <div class="flex flex-col">
                    <div class="flex justify-between mb-1 hover:bg-primaryDark py-1 px-2 rounded-lg cursor-pointer" id="listSidebar">
                        <div class="md:text-sm text-xs text-white">Rentang Waktu</div>
                        <svg class="w-3 h-3 my-auto text-white font-semibold" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                        <svg class="w-3 h-3 my-auto text-white font-semibold hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path>
                        </svg>
                    </div>

                    <div class="flex flex-col mb-1 px-4 hidden" id="listRentangWaktu">
                        INPUTAN
                    </div>
                </div>

            </div>
        </div>

    </div>
    <!-- akhir sidebar -->
    <!-- awal Hasil Pencarian  -->
    <div class=" ml-2  flex-grow ">
        <div class="flex">
            <div class=" md:hidden flex w-24"></div>
            <div class="flex-grow" id="hasilPencarian">
                <?= $this->include('websia/kontenWebsia/searchAndFilter/searchKosong.php') ?>
            </div>
        </div>
    </div>
    <!-- akhir Hasil Pencarian  -->


</div>


<script type="text/javascript" src="/js/search.js"></script>
<?= $this->endSection(); ?>