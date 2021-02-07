<?= $this->extend('websia/layoutWebsia/templateBerandaLogin.php'); ?>

<?= $this->section('content'); ?>

<div class="py-5 md:py-8 lg:py-14 px-3 lg:px-20 md:px-8">
    <div class="font-paragraph font-medium text-primary text-xs md:text-base">
        <a href="">Beranda</a>
        >
        <a href=""><b>Berita</b></a>
    </div>
    <hr class="border-primary border-opacity-75 w-full mb-3 md:mb-5 lg:mb-7 my-2 md:my-4 lg:my-6">
    <div class="bg-primary py-4 md:py-6 lg:py-10 px-3 md:px-5 lg:px-7 rounded md:rounded-lg">
        <h1 class="mb-4 md:mb-7 lg:mb-10 text-secondary text-center text-xl md:text-2xl lg:text-4xl font-heading font-bold">Berita Terpopuler</h1>
        <div class="grid grid-cols-5 grid-rows-2 gap-2 md:gap-4 lg:gap-6">
            <div class="col-span-3 row-span-2">
                <a href="">
                    <img class="rounded md:rounded-lg" src="/img/alumni.jpg" alt=""></a>
            </div>
            <div class="col-span-2 row-span-1">
                <a href="">
                    <img class="rounded md:rounded-lg" src="/img/alumni.jpg" alt=""></a>
            </div>
            <div class="col-span-2 row-span-1">
                <a href="">
                    <img class="rounded md:rounded-lg" src="/img/alumni.jpg" alt=""></a>
            </div>
        </div>
    </div>
    <hr class="border-gray-400 border-opacity-75 w-11/12 mx-auto mt-6 md:mt-8 lg:mt-14 mb-5 md:mb-6 lg:mb-8">
    <?php for ($x = 0; $x < 8; $x++) : ?>
        <div class="px-5 lg:px-16 flex flex-col md:flex-row">
            <div class="w-full md:w-2/5 mr-5">
                <img class="rounded md:rounded-lg" src="/img/alumni.jpg" alt="">
            </div>
            <div class="w-full md:w-3/5 pt-3 md:py-1 lg:py-2">
                <h3 class="font-heading text-primary font-bold md:text-xl lg:text-2xl">Judul Berita</h3>
                <div class="flex my-2">
                    <div class="flex text-primary">
                        <svg class="w-4 h-4 mr-2 my-auto" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                        </svg>
                        <div class="text-sm font-paragraph font-medium ">11 Januari 2021</div>
                    </div>
                    <div class="flex text-primary ml-6">
                        <svg class="w-4 h-4 mr-2 my-auto" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"></path>
                        </svg>
                        <div class="text-sm font-paragraph font-medium ">David SMith</div>
                    </div>
                </div>
                <p class="text-justify text-sm md:text-base">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis tempora nam nihil? Ratione delectus quas, veniam laboriosam at quod consequatur aut nesciunt enim! Doloribus, voluptas! Asperiores, reprehenderit suscipit totam quae dolor sapiente saepe laborum modi aperiam est quia cupiditate, dolorem nulla reiciendis sunt! Reprehenderit doloribus libero necessitatibus, quo ipsa doloremquequia cupiditate, dolorem nulla reiciendis sunt! Reprehenderit doloribus libero necessitatibus, quo ipsa doloremque.</p>
            </div>
        </div>
        <hr class="border-gray-400 border-opacity-75 w-11/12 mx-auto my-5 md:my-6 lg:my-8">
    <?php endfor; ?>
</div>

<?= $this->endSection(); ?>