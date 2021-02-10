<?= $this->extend('websia/layoutWebsia/templateBerandaLogin.php'); ?>

<?= $this->section('content'); ?>
<style>
    .active {
        background-color: #015998;
        color: #FFAA00;
    }

    .formEdit {
        background-color: #F9F9F9;
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

    .listeditprofil:hover {
        background-color: #015998;
    }

    #layoutEdit {
        z-index: 5;
    }
</style>
<script src="https://code.jquery.com/jquery-1.10.1.min.js" integrity="sha256-SDf34fFWX/ZnUozXXEH0AeB+Ip3hvRsjLwp6QNTEb3k=" crossorigin="anonymous"></script>

<div class="w-full">
    <div class="flex w-full relative">
        <div id="layoutEdit" class="md:static absolute top-0 bottom-0 sm:w-16 w-10 lg:w-1/4 md:w-1/5 bg-primary transition-all duration-500">
            <?php
            function getLastCurrentUrl()
            {
                $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                preg_match('/[^\/]+$/', $actual_link, $matches);
                $last_word = $matches[0];
                return $last_word;
            }
            ?>
            <div class="md:hidden">
                <svg class="block mx-auto lg:w-10 md:w-8 sm:w-7 w-6 cursor-pointer fill-current text-secondary mt-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </div>

            <div id="navEdit" class="md:block hidden">
                <div class="flex justify-between items-center text-secondary bg-primaryHover lg:text-2xl md:text-xl font-bold py-3 lg:pr-5 md:pr-2 xl:pl-10 lg:pl-7 md:pl-3 px-3">
                    <p>EDIT</p>
                    <div id="editTutup" class="select-none">
                        <svg class="lg:w-10 md:w-8 sm:w-7 w-6 fill-current cursor-pointer" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </div>

                </div>
                <ul>
<<<<<<< HEAD
                    <a href="/edit/profil">
                        <li id="profil" class="button bg-primaryHover font-heading p-5 text-sm text-white <?= (getLastCurrentUrl() == 'profil') ? 'active' : ''; ?> hover:text-secondary hover:bg-white text-center font-semibold">Biodata</li>
                    </a>
                    <a href="/edit/pendidikan">
                        <li id="pendidikan" class="button bg-primaryHover font-heading p-5 text-sm text-white <?= (getLastCurrentUrl() == 'pendidikan') ? 'active' : ''; ?> hover:text-secondary hover:bg-white text-center font-semibold">Pendidikan</li>
                    </a>
                    <a href="/edit/tempatKerja">
                        <li id="tempatkerja" class="button bg-primaryHover font-heading p-5 text-sm text-white <?= (getLastCurrentUrl() == 'tempatKerja') ? 'active' : ''; ?> hover:text-secondary hover:bg-white text-center font-semibold">Tempat Kerja</li>
                    </a>
                    <a href="/edit/prestasi">
                        <li id="prestasi" class="button bg-primaryHover font-heading p-5 text-sm text-white <?= (getLastCurrentUrl() == 'prestasi') ? 'active' : ''; ?> hover:text-secondary hover:bg-white text-center font-semibold">Prestasi</li>
                    </a>
                    <a href="/edit/publikasi">
                        <li id="publikasi" class="button bg-primaryHover font-heading p-5 text-sm text-white <?= (getLastCurrentUrl() == 'publikasi') ? 'active' : ''; ?> hover:text-secondary hover:bg-white text-center font-semibold">Publikasi</li>
                    </a>
                    <a href="/edit/akun">
                        <li id="akun" class="button bg-primaryHover font-heading p-5 text-sm text-white <?= (getLastCurrentUrl() == 'akun') ? 'active' : ''; ?> hover:text-secondary hover:bg-white text-center font-semibold">Akun</li>
=======
                    <a href="/websia/editProfil">
                        <li id="pendidikan" class="listeditprofil p-3 xl:pl-10 lg:pl-7 lg:text-lg text-white <?= (getLastCurrentUrl() == 'editProfil') ? 'active' : ''; ?> hover:text-secondary font-semibold mr-4 rounded-tr-xl rounded-br-xl">Biodata</li>
                    </a>
                    <a href="/websia/editPendidikan">
                        <li id="pendidikan" class="listeditprofil p-3 xl:pl-10 lg:pl-7 lg:text-lg text-white <?= (getLastCurrentUrl() == 'editPendidikan') ? 'active' : ''; ?> hover:text-secondary font-semibold mr-4 rounded-tr-xl rounded-br-xl">Pendidikan</li>
                    </a>
                    <a href="/websia/editTempatKerja">
                        <li id="tempatkerja" class="listeditprofil p-3 xl:pl-10 lg:pl-7 lg:text-lg text-white <?= (getLastCurrentUrl() == 'editTempatKerja') ? 'active' : ''; ?> hover:text-secondary font-semibold mr-4 rounded-tr-xl rounded-br-xl">Tempat Kerja</li>
                    </a>
                    <a href="/websia/editPrestasi">
                        <li id="prestasi" class="listeditprofil p-3 xl:pl-10 lg:pl-7 lg:text-lg text-white <?= (getLastCurrentUrl() == 'editPrestasi') ? 'active' : ''; ?> hover:text-secondary font-semibold mr-4 rounded-tr-xl rounded-br-xl">Prestasi</li>
                    </a>
                    <a href="/websia/editPublikasi">
                        <li id="publikasi" class="listeditprofil p-3 xl:pl-10 lg:pl-7 lg:text-lg text-white <?= (getLastCurrentUrl() == 'editPublikasi') ? 'active' : ''; ?> hover:text-secondary font-semibold mr-4 rounded-tr-xl rounded-br-xl">Publikasi</li>
                    </a>
                    <a href="/websia/editAkun">
                        <li id="akun" class="listeditprofil p-3 xl:pl-10 lg:pl-7 lg:text-lg text-white <?= (getLastCurrentUrl() == 'editAkun') ? 'active' : ''; ?> hover:text-secondary font-semibold mr-4 rounded-tr-xl rounded-br-xl">Akun</li>
>>>>>>> bc3f27173708756fbb266417374c8b1aff9b40cf
                    </a>
                </ul>

            </div>

        </div>

        <div class="lg:w-3/4 md:w-4/5 w-full md:pl-0 sm:pl-20 pl-12 pr-2 lg:mx-12 md:mx-7 md:mt-12 sm:mt-10 mt-8 rounded-xl">
            <?php $this->renderSection('contentEdit'); ?>
        </div>
    </div>

</div>


<?= $this->endSection(); ?>