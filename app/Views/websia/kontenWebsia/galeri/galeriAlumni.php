<?= $this->extend('websia/layoutWebsia/templateBerandaLogin.php'); ?>

<?= $this->section('content'); ?>
<style>
    .album-btn:hover {
        border-radius: 0px;
    }
</style>

<!-- Awal Galeri Alumni -->
<div class="text-center">
    <div class="mt-8 text-2xl font-bold font-heading">
        Galeri Kenangan Alumni
    </div>
    <div class="flex items-center justify-center mt-4 mb-8">
        <button class="-ml-4 mr-4 px-4 py-1 rounded-3xl border border-secondary text-sm bg-white text-secondary hover:bg-secondaryhover hover:text-white transition-colors duration-300 focus:outline-none galeriButton">SEMUA FOTO</button>
        <div class="album-btn rounded-3xl text-sm bg-white text-secondary hover:bg-secondaryhover hover:text-white transition-all duration-400 galeriButton">
            <!-- Awal dropdown button album -->
            <div class="dropdown font-paragraph">
                <button class="text-center rounded-3xl px-4 py-1 border border-secondary focus:outline-none">
                    ALBUM
                    <!-- awal konten dropdown -->
                    <div class="dropdown-content content-center w-max -ml-6 mt-1">
                        <a href="" class="text-secondary bg-white border-2 border-secondary hover:bg-secondary hover:text-white py-4 px-3 text-left transiton duration-300"> AIS/STIS/POLSTAT STIS </a>
                        <a href="" class="text-secondary bg-white border-b-2 border-l-2 border-r-2 border-secondary hover:bg-secondary hover:text-white py-1 px-3 text-left transiton duration-300"> Wisuda </a>
                        <a href="" class="text-secondary bg-white border-l-2 border-r-2 border-secondary hover:bg-secondary hover:text-white py-1 px-3 text-left transiton duration-300"> Prestasi </a>
                        <a href="" class="text-secondary bg-white border-2 border-secondary hover:bg-secondary hover:text-white py-1 px-3 text-left transiton duration-300"> Sweet Memories </a>
                    </div>
                    <!-- akhir konten dropdown -->
                </button>
            </div>
            <!-- Akhir dropdown button album -->
        </div>
    </div>
</div>
<div class="bg-primary">
    <div class="py-4">
        <div class="holder p-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-4">
            <!-- Awal Tampilan Galeri (Buat ditambahkan coding sesuai gambar dari database) -->
            <?php for ($x = 0; $x < 12; $x++) : ?>
                <!-- 1 gambar -->
                <a href="#img-1">
                    <div class="rounded-3xl m-2 relative hover:shadow-xl transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-105 cursor-pointer">
                        <img class="albumImg w-full rounded-3xl mx-auto" src="/img/alumni.jpg" alt="" />
                    </div>
                </a>
            <?php endfor; ?>
            <!-- Akhir Tampilan Galeri -->
        </div>
        <!-- Awal Navigasi -->
        <div class="flex justify-center md:justify-end items-center mx-8 p-2 text-secondary font-paragraph">
            <a href="" class="p-1 rounded-full w-7 transform hover:scale-110">
                <img src="/img/left-on.png" alt="">
            </a>
            <a href="" class="p-1 hover:text-white">
                1
            </a>
            <a href="" class="p-1 hover:text-white">
                2
            </a>
            <a href="" class="p-1 hover:text-white">
                ..
            </a>
            <a href="" class="p-1 hover:text-white">
                45
            </a>
            <a href="" class="p-1 rounded-full w-7 transform hover:scale-110">
                <img src="/img/right-on.png" alt=""></a>
        </div>
        <!-- Akhir Navigasi -->
    </div>
</div>

<!-- Awal fitur unggah foto galeri -->
<div class="flex flex-col-reverse md:grid md:grid-cols-4 lg:grid-cols-5 md:gap-4">
    <div class="md:col-span-2 lg:col-span-3 md:mx-8 mb-6">
        <div class="flex flex-col mx-6 md:m-6">
            <div class="mt-5 md:mt-1 text-center md:text-left text-3xl text-secondary font-bold font-heading">
                Mama Lorent
            </div>
            <div class="my-4 md:my-5 font-paragraph italic text-base lg:text-xl">
                "Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit adipisci sed fuga, earum fugit reiciendis repellendus maxime at quia dolore similique cupiditate inventore accusantium autem exercitationem ratione, natus minus fugiat?"
            </div>
            <button class="unggahFoto focus:outline-none p-1 rounded-3xl text-base lg:text-xl bg-secondary border-2 border-secondary text-white hover:bg-white hover:border-2 hover:border-secondary hover:text-secondary transition-colors duration-300 font-paragraph text-base lg:text-xl">UNGGAH KENANGANMU</button>
        </div>
    </div>
    <div class="md:col-span-2 lg:col-span-2">
        <div class="">
            <img src="/img/galeri.png" alt="" class="w-full md:h-full md:w-auto">
        </div>
    </div>


</div>
</div>
<!-- Akhir fitur unggah foto galeri -->

<!-- Catatan : Apabila sukses mengunggah foto dapat maka dapat memanggil fungsi js => suksesUnggahFoto ()  -->
<!-- Catatan : Apabila sukses laporkan foto dapat maka dapat memanggil fungsi js => suksesLaporkanFoto ()  -->


<!-- Akhir Galeri Alumni -->
<?= $this->endSection(); ?>