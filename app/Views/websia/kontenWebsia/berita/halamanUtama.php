<?= $this->extend('websia/layoutWebsia/templateBerandaLogin.php'); ?>

<?= $this->section('content'); ?>

<div class="py-5 md:py-8 lg:py-14 px-3 lg:px-20 md:px-8">
    <div class="font-paragraph text-primary text-xs md:text-base">
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
    <hr class="border-gray-400 border-opacity-75 w-11/12 mx-auto mt-6 md:mt-8 lg:mt-14 mb-4 md:mb-6">
    <div class="px-10 lg:px-16 flex">
        <div class="mr-5">
            <img class="rounded md:rounded-lg" src="/img/alumni.jpg" alt="">
        </div>
        <div class="py-1 lg:py-2">
            <h3 class="font-heading text-primary font-bold md:text-xl lg:text-2xl">Judul Berita</h3>
            <div class="inline-block mr-5">
                <img src="/img/icon/subtract.png" alt="" class="float-left w-4">
                <span class="font-paragraph text-primary text-sm object-center">11 Januari 2021</span>
            </div>
            <div class="inline-block">
                <img src="/img/icon/iconColor.png" alt="" class="float-left w-4">
                <span class="font-paragraph text-primary text-sm object-center">David Smith</span>
            </div>
            <p class="text-justify text-sm md:text-base">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis tempora nam nihil? Ratione delectus quas, veniam laboriosam at quod consequatur aut nesciunt enim! Doloribus, voluptas! Asperiores, reprehenderit suscipit totam quae dolor sapiente saepe laborum modi aperiam est quia cupiditate, dolorem nulla reiciendis sunt! Reprehenderit doloribus libero necessitatibus, quo ipsa doloremquequia cupiditate, dolorem nulla reiciendis sunt! Reprehenderit doloribus libero necessitatibus, quo ipsa doloremque.</p>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>