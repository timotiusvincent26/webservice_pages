<!-- HASIL PENCARIAN BERITA -->
<div class="md:ml-12 mx-3 mt-2">
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
                <a href="">
                    <div class="flex px-2 md:flex-row flex-col md:gap-x-4 gap-x-0 items-center">
                        <img src="/img/sampel.jpeg" alt="" class="md:w-48 md:h-36 w-full h-52 ">
                        <div class="flex-grow">
                            <div class="flex flex-col">
                                <h2 class="text-lg font-heading text-primary font-semibold mb-2">Judul Berita</h2>
                                <div class="text-xs font-paragraph text-primary">11 Januari 2021</div>
                                <div class="text-sm font-paragraph break-words ">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras blandit turpis sem, eu laoreet odio pretium ac. Mauris eget aliquet lorem. Cras dignissim leo non ante molestie, at vulputate justo lobortis. Pellentesque quam elit, mattis eu nibh et, maximus congue mauris
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <hr class="my-4 border-gray-400">
            <?php endfor; ?>
            <hr class="-my-4 border-2 border-gray-400">
        </div>
        <!-- awal tulisan "Selengkapnya" di hasil pencarian -->
        <div class="flex justify-end mt-12" id="beritaSelengkapnya">
            <div class="flex bg-secondary text-white rounded-full md:py-2 py-1 md:px-3 px-2 items-center gap-x-2 cursor-pointer md:text-sm text-xs">
                Selengkapnya
                <img src="/img/right-off.png" class="md:w-4 md:h-4 w-3 h-3" alt="">
            </div>
        </div>
        <!-- akhir tulisan "Selengkapnya" di hasil pencarian -->
        <!-- END DAFTAR HASIL PENCARIAN BERITA -->
    </div>
</div>

<!-- END HASIL PENCARIAN BERITA -->