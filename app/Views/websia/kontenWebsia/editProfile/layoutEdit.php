<?= $this->extend('websia/layoutWebsia/templateBerandaLogin.php'); ?>

<?= $this->section('content'); ?>

<style>
    .layoutEdit {
        z-index: 5;
    }

    @media screen and (max-width: 1024px) {
        #pagePendidikan table tbody tr td {
            padding-left: .25rem;
            padding-right: .25rem;
        }
    }

    @media screen and (max-width: 768px) {
        #pagePendidikan table {
            width: 670px;
        }
    }

    #pagePendidikan table tr td {
        padding-left: .5rem;
        padding-right: .5rem;
    }

    #pagePrestasi table tr td {
        padding-left: .5rem;
        padding-right: .5rem;
    }

    @media screen and (max-width: 640px) {
        #pagePrestasi table {
            width: 580px;
        }
    }

    @media screen and (max-width: 1024px) {
        #pagePrestasi table tbody tr td {
            padding-left: .25rem;
            padding-right: .25rem;
        }
    }
</style>
<script src="https://code.jquery.com/jquery-1.10.1.min.js" integrity="sha256-SDf34fFWX/ZnUozXXEH0AeB+Ip3hvRsjLwp6QNTEb3k=" crossorigin="anonymous"></script>

<div class="w-full">
    <div class="flex w-full relative">
        <div class="layoutEdit md:static absolute top-0 bottom-0 sm:w-16 w-10 lg:w-1/4 md:w-1/5 bg-primary transition-all duration-500">

            <!-- start sidebar hamburger (posisi tutup) -->
            <div class=" md:hidden">
                <svg class="block mx-auto lg:w-10 md:w-8 sm:w-7 w-6 cursor-pointer fill-current text-secondary mt-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </div>
            <!-- end sidebar hamburger (posisi tutup) -->

            <!-- start sidebar posisi buka -->
            <div class="navEdit md:block hidden">
                <div class="flex justify-between items-center text-secondary bg-primaryHover md:text-xl sm:text-lg text-base font-bold py-2 lg:pr-5 md:pr-2 lg:pl-7 md:pl-3 px-3">
                    <p>EDIT PROFIL</p>
                    <div class="editTutup select-none">
                        <svg class="lg:w-10 md:w-8 sm:w-7 w-6 fill-current cursor-pointer" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </div>

                </div>
                <ul>
                    <a href="/edit/profil">
                        <li id="profil" class="button bg-primary font-heading lg:p-3 p-2 pl-3 lg:pl-7 my-2 mr-2 rounded-r-lg sm:text-base text-sm text-white <?= ($active == 'profil') ? 'active' : ''; ?> hover:text-secondary hover:bg-primaryDark font-semibold">Biodata</li>
                    </a>
                    <a href="/edit/pendidikan">
                        <li id="pendidikan" class="button bg-primary font-heading lg:p-3 p-2 pl-3 lg:pl-7 my-2 mr-2 rounded-r-lg sm:text-base text-sm text-white <?= ($active == 'pendidikan') ? 'active' : ''; ?> hover:text-secondary hover:bg-primaryDark font-semibold">Pendidikan</li>
                    </a>
                    <a href="/edit/tempatKerja">
                        <li id="tempatkerja" class="button bg-primary font-heading lg:p-3 p-2 pl-3 lg:pl-7 my-2 mr-2 rounded-r-lg sm:text-base text-sm text-white <?= ($active == 'tempatKerja') ? 'active' : ''; ?> hover:text-secondary hover:bg-primaryDark font-semibold">Tempat Kerja</li>
                    </a>
                    <a href="/edit/prestasi">
                        <li id="prestasi" class="button bg-primary font-heading lg:p-3 p-2 pl-3 lg:pl-7 my-2 mr-2 rounded-r-lg sm:text-base text-sm text-white <?= ($active == 'prestasi') ? 'active' : ''; ?> hover:text-secondary hover:bg-primaryDark font-semibold">Prestasi</li>
                    </a>
                    <a href="/edit/publikasi">
                        <li id="publikasi" class="button bg-primary font-heading lg:p-3 p-2 pl-3 lg:pl-7 my-2 mr-2 rounded-r-lg sm:text-base text-sm text-white <?= ($active == 'publikasi') ? 'active' : ''; ?> hover:text-secondary hover:bg-primaryDark font-semibold">Publikasi</li>
                    </a>
                    <a href="/edit/akun">
                        <li id="akun" class="button bg-primary font-heading lg:p-3 p-2 pl-3 lg:pl-7 my-2 mr-2 rounded-r-lg sm:text-base text-sm text-white <?= ($active == 'akun') ? 'active' : ''; ?> hover:text-secondary hover:bg-primaryDark font-semibold">Akun</li>
                    </a>
                </ul>

            </div>

            <!-- end sidebar posisi buka -->
        </div>

        <!-- start konten edit -->
        <div class="lg:w-3/4 md:w-4/5 w-full md:pl-0 sm:pl-20 pl-12 pr-2 lg:mx-12 md:mx-7 md:mt-12 sm:mt-10 mt-8 rounded-xl">
            <?php $this->renderSection('contentEdit'); ?>
        </div>
        <!-- end konten edit -->
    </div>

</div>


<?= $this->endSection(); ?>