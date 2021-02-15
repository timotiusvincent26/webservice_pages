<?= $this->extend('webservice/layoutWebservice/templateWebserviceLogin.php'); ?>

<?= $this->section('content'); ?>

<style>
    .layoutEdit {
        z-index: 5;
    }

    .active {
        background-color: #015998;
        color: #FFAA00;
    }
</style>
<script src="https://code.jquery.com/jquery-1.10.1.min.js" integrity="sha256-SDf34fFWX/ZnUozXXEH0AeB+Ip3hvRsjLwp6QNTEb3k=" crossorigin="anonymous"></script>

<div class="w-full">
    <div class="flex w-full relative">
        <div class="layoutEdit -mb-8 md:static absolute top-0 bottom-0 sm:w-16 w-10 lg:w-1/4 md:w-1/5 bg-primary transition-all duration-500">
            <!-- start buat dapetin kelas aktif -->
            <?php
            function getLastCurrentUrl()
            {
                $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                preg_match('/[^\/]+$/', $actual_link, $matches);
                $last_word = $matches[0];
                return $last_word;
            }
            ?>
            <!-- end buat dapetin kelas aktif -->

            <!-- start sidebar hamburger/posisi tutup -->
            <div class="md:hidden min-h-screen">
                <svg class="block mx-auto lg:w-10 md:w-8 sm:w-7 w-6 cursor-pointer fill-current text-secondary mt-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </div>
            <!-- end sidebar hamburger/posisi tutup -->

            <!-- start sidebar posisi buka -->
            <div class="navEdit md:block hidden min-h-screen">
                <div class="flex justify-between items-center text-secondary bg-primaryHover lg:text-2xl md:text-xl font-bold py-3 lg:pr-5 md:pr-2 lg:pl-7 md:pl-3 px-3">
                    <p>EDIT</p>
                    <div class="editTutup select-none">
                        <svg class="lg:w-10 md:w-8 sm:w-7 w-6 fill-current cursor-pointer" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </div>

                </div>
                <ul>
                    <a href="/developer/edit/biodata">
                        <li id="profilDev" class="button bg-primary font-heading lg:p-3 p-2 pl-3 lg:pl-7 my-2 mr-2 rounded-r-lg text-sm text-white <?= (getLastCurrentUrl() == 'biodata') ? 'active' : ''; ?> hover:text-secondary hover:bg-primaryDark font-semibold">Biodata</li>
                    </a>
                    <a href="/developer/edit/akun">
                        <li id="akunDev" class="button bg-primary font-heading lg:p-3 p-2 pl-3 lg:pl-7 my-2 mr-2 rounded-r-lg text-sm text-white <?= (getLastCurrentUrl() == 'akun') ? 'active' : ''; ?> hover:text-secondary hover:bg-primaryDark font-semibold">Akun</li>
                    </a>
                </ul>

            </div>
            <!-- end sidebar posisi buka -->

        </div>

        <!-- content edit di sini -->
        <div class="lg:w-3/4 md:w-4/5 w-full md:pl-0 sm:pl-20 pl-12 pr-2 lg:mx-12 md:mx-7 md:mt-12 sm:mt-10 mt-8 rounded-xl">
            <?php $this->renderSection('contentEdit'); ?>
        </div>
        <!-- end content edit -->
    </div>

</div>


<?= $this->endSection(); ?>