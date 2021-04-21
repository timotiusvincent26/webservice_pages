<?= $this->extend('websia/layoutWebsia/templateBerandaLogin.php'); ?>

<?= $this->section('content'); ?>
<!-- Awal Galeri Alumni -->
<div class="text-center">
    <div class="my-10 text-2xl font-bold font-heading">
        Galeri Video Kenangan Alumni
    </div>
</div>
<div class=" bg-primary">
    <div class="py-4">
        <div class="p-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-x-4 gap-y-10">
            <?php for ($x = 0; $x < 12; $x++) : ?>
                <!-- 1 video -->
                <div class="m-2 bg-primary relative border border-white hover:shadow-xl transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-105">
                    <iframe class="h-full w-full" src="https://www.youtube.com/embed/0jic-ZWsQqw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div class="font-paragraph text-center text-white bg-primary py-2 border-t border-t-white">Video Kenangan Alumni</div>
                </div>
            <?php endfor; ?>
        </div>
        <!-- Awal Navigasi -->
        <div class="flex justify-center md:justify-end items-center mx-8 p-2 text-secondary font-paragraph">
            <a href="" class="p-1 w-8 transform hover:scale-110">
                <img src="/img/left-on.png" alt="">
            </a>
            <a href="" class="p-1 hover:text-primary">
                1
            </a>
            <a href="" class="p-1 hover:text-primary">
                2
            </a>
            <a href="" class="p-1 hover:text-primary">
                ..
            </a>
            <a href="" class="p-1 hover:text-primary">
                45
            </a>
            <a href="" class="p-1 w-8 transform hover:scale-110">
                <img src="/img/right-on.png" alt=""></a>
        </div>
        <!-- Akhir Navigasi -->
    </div>
</div>

<div class="flex flex-col-reverse md:grid md:grid-cols-4 lg:grid-cols-5 md:gap-4">
    <div class="md:col-span-2 lg:col-span-3 md:mx-8 mb-6">
        <div class="flex flex-col mx-6 md:m-6">
            <div class="mt-5 md:mt-1 text-center md:text-left text-3xl text-secondary font-bold font-heading">
                Mama Lorent
            </div>
            <div class="my-4 md:my-5 font-paragraph italic text-base lg:text-xl">
                "Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit adipisci sed fuga, earum fugit reiciendis repellendus maxime at quia dolore similique cupiditate inventore accusantium autem exercitationem ratione, natus minus fugiat?"
            </div>
            <button class="unggahVideo focus:outline-none p-1 rounded-3xl text-base lg:text-xl bg-secondary border-2 border-secondary text-white hover:bg-white hover:border-2 hover:border-secondary hover:text-secondary transition-colors duration-300 font-paragraph text-base lg:text-xl">UNGGAH VIDEO KENANGANMU</button>
        </div>
    </div>
    <div class="md:col-span-2 lg:col-span-2">
        <div class="">
            <img src="/img/galeri.png" alt="" class="w-full md:h-full md:w-auto">
        </div>
    </div>
</div>
</div>
<!-- Akhir Galeri Alumni -->
<?= $this->endSection(); ?>