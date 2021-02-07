<?= $this->extend('websia/layoutWebsia/templateBerandaLogin.php'); ?>

<?= $this->section('content'); ?>

<div class="my-8 lg:px-20 md:px-8 px-3">

    <div class="text-primary md:text-base text-sm font-medium font-paragraph mb-3"> Beranda > Berita > Judul Berita</div>
    <hr class="mb-4 border-t-2 border-b-0 border-primary">

    <div class="flex justify-between">

        <div class=" flex-grow">
            <div class="flex flex-col mr-16">
                <div class="text-secondary font-heading font-bold text-4xl">Judul Berita</div>

                <div class="flex my-3">
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

                    <div class="flex text-primary ml-6">
                        <svg class="w-4 h-4 mr-2 my-auto" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                            <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path>
                        </svg>

                        <div class="text-sm font-paragraph font-medium ">112</div>
                    </div>
                </div>

                <img src="/img/sampel.jpeg" alt="" class="w-full" id="gambarBerita">

                <div class="text-sm text-primary font-paragraph font-medium my-4">Foto oleh : David SMith</div>

                <div class="text-justify break-words font-paragraph w-full">
                    <p class="mb-4">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis impedit temporibus earum nemo odio perspiciatis ut dicta quas ratione quo cum numquam molestias saepe, quisquam aut magni tempore recusandae quibusdam.
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolores facilis dolorum reprehenderit necessitatibus provident velit maxime et quod, neque recusandae illo ullam! Temporibus, sunt repellat dicta eveniet nostrum placeat vitae!
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae, facere cupiditate laudantium maiores beatae adipisci amet possimus eligendi qui saepe repellat vitae quo distinctio, corporis tenetur dolorum odio iure repudiandae!
                    </p>

                    <p class="mb-4">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis impedit temporibus earum nemo odio perspiciatis ut dicta quas ratione quo cum numquam molestias saepe, quisquam aut magni tempore recusandae quibusdam.
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolores facilis dolorum reprehenderit necessitatibus provident velit maxime et quod, neque recusandae illo ullam! Temporibus, sunt repellat dicta eveniet nostrum placeat vitae!
                    </p>

                    <p class="mb-4">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis impedit temporibus earum nemo odio perspiciatis ut dicta quas ratione quo cum numquam molestias saepe, quisquam aut magni tempore recusandae quibusdam.
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolores facilis dolorum reprehenderit necessitatibus provident velit maxime et quod, neque recusandae illo ullam! Temporibus, sunt repellat dicta eveniet nostrum placeat vitae!
                    </p>
                </div>

            </div>
        </div>

        <div class="flex-grow-0">
            <div class="flex flex-col w-96">
                <div>
                    <div class="text-secondary font-heading font-semibold text-2xl">Berita Terpopuler</div>
                    <img src="/img/sampel.jpeg" alt="" class="w-48 h-36">
                </div>
                <div>
                    <div class="text-secondary font-heading font-semibold text-2xl">Berita Terbaru</div>
                </div>
            </div>
        </div>
    </div>


</div>

<script type="text/javascript" src="/js/berita.js"></script>
<?= $this->endSection(); ?>