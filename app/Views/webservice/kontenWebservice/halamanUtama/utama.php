<?php
if ($login == 'sudah') {
    echo $this->extend('webservice/layoutWebservice/templateWebserviceLogin.php');
} else if ($login == 'belum') {
    echo $this->extend('webservice/layoutWebservice/templateWebservice.php');
}

echo $this->section('content');
?>

<div class="flex relative xl:mx-32 lg:mx-24 md:mx-16 sm:mx-10 mx-6 sm:top-12 top-7" style="z-index: -10;" id="utama">
    <div class="lg:mr-16 sm:mr-10 mr-0 md:w-8/12 w-full flex flex-col justify-center relative">
        <h1 class="xl:text-5xl lg:text-4xl md:text-3xl sm:text-2xl text-xl font-heading text-secondary font-bold flex justify-center sm:block">PENJELASAN SINGKAT</h1>
        <p class="sm:mt-8 mt-4 text-justify md:text-base text-sm">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas nesciunt illum molestiae dolores maxime placeat quae quod vitae, dolore voluptas impedit sit ullam maiores odio qui ipsum nostrum optio a quam, iste alias, et est. Molestias dolorum ut esse repudiandae sed dolore numquam quam eos, a suscipit nesciunt accusantium commodi quas excepturi eligendi velit nisi atque sit officiis quos soluta?Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus, iure praesentium error minus soluta harum! Itaque sunt, molestias nemo, repellat facilis sit maiores velit rem quidem, harum ratione maxime modi.</p>
    </div>
    <div class="sm:flex sm:flex-col sm:justify-center hidden w-4/12 relative">
        <div class="flex flex-col">
            <img src="/img/logo api.png" alt="Logo Api" style="width: 450px;">
            <p class="m-auto text-secondary mt-4">Design by vectorjuice/Freepik</p>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
