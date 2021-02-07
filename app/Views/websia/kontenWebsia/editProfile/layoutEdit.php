<?= $this->extend('websia/layoutWebsia/templateBerandaLogin.php'); ?>

<?= $this->section('content'); ?>
<style>
    .active {
        background-color: white;
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
</style>
<script src="https://code.jquery.com/jquery-1.10.1.min.js" integrity="sha256-SDf34fFWX/ZnUozXXEH0AeB+Ip3hvRsjLwp6QNTEb3k=" crossorigin="anonymous"></script>

<div class="w-full h-full">

    <div class="grid lg:grid-cols-4 md:grid-cols-5 grid-cols-12 lg:gap-x-6 md:gap-x-3 gap-x-0">
        <div class="col-span-1 md:w-auto bg-primary md:block md:static relative" style="z-index: 5;">

            <button type="button" class="mt-3 mx-auto block text-white md:hidden" id="hamburgerEditProfil">
                <svg class="sm:w-8 w-6 fill-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
            <?php
            function getLastCurrentUrl()
            {
                $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                preg_match('/[^\/]+$/', $actual_link, $matches);
                $last_word = $matches[0];
                return $last_word;
            }
            ?>

            <div id="navEdit" class="md:mt-6 mt-3 hidden md:block">
                <ul>
                    <a href="/edit/profil">
                        <li id="pendidikan" class="button bg-primaryHover font-heading p-5 text-sm text-white <?= (getLastCurrentUrl() == 'editProfil') ? 'active' : ''; ?> hover:text-secondary hover:bg-white text-center font-semibold">Biodata</li>
                    </a>
                    <a href="/edit/profil">
                        <li id="pendidikan" class="button bg-primaryHover font-heading p-5 text-sm text-white <?= (getLastCurrentUrl() == 'editPendidikan') ? 'active' : ''; ?> hover:text-secondary hover:bg-white text-center font-semibold">Pendidikan</li>
                    </a>
                    <a href="/edit/tempatKerja">
                        <li id="tempatkerja" class="button bg-primaryHover font-heading p-5 text-sm text-white <?= (getLastCurrentUrl() == 'editTempatKerja') ? 'active' : ''; ?> hover:text-secondary hover:bg-white text-center font-semibold">Tempat Kerja</li>
                    </a>
                    <a href="/edit/prestasi">
                        <li id="prestasi" class="button bg-primaryHover font-heading p-5 text-sm text-white <?= (getLastCurrentUrl() == 'editPrestasi') ? 'active' : ''; ?> hover:text-secondary hover:bg-white text-center font-semibold">Prestasi</li>
                    </a>
                    <a href="/edit/publikasi">
                        <li id="publikasi" class="button bg-primaryHover font-heading p-5 text-sm text-white <?= (getLastCurrentUrl() == 'editPublikasi') ? 'active' : ''; ?> hover:text-secondary hover:bg-white text-center font-semibold">Publikasi</li>
                    </a>
                    <a href="/edit/akun">
                        <li id="akun" class="button bg-primaryHover font-heading p-5 text-sm text-white <?= (getLastCurrentUrl() == 'editAkun') ? 'active' : ''; ?> hover:text-secondary hover:bg-white text-center font-semibold">Akun</li>
                    </a>
                </ul>
            </div>

        </div>

        <div class="lg:col-span-3 md:col-span-4 col-span-11 lg:ml-6 lg:mr-12 md:mr-4 mt-4 formEdit rounded-xl mx-3">
            <?php $this->renderSection('contentEdit'); ?>
        </div>
    </div>

</div>


<?= $this->endSection(); ?>