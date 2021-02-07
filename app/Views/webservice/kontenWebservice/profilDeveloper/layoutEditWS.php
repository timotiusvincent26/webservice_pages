<?= $this->extend('webservice/layoutWebservice/templateWebserviceLogin.php'); ?>

<?= $this->section('content'); ?>
<style>
    .active {
        background-color: #015998;
        color: #FFAA00;
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
</style>
<script src="https://code.jquery.com/jquery-1.10.1.min.js" integrity="sha256-SDf34fFWX/ZnUozXXEH0AeB+Ip3hvRsjLwp6QNTEb3k=" crossorigin="anonymous"></script>

<div class="w-full h-full">

    <div class="grid lg:grid-cols-4 md:grid-cols-5 grid-cols-12 lg:gap-x-6 md:gap-x-3 gap-x-0">
        <div class="col-span-1 md:w-auto bg-primary md:block md:static relative" style="z-index: 5;">

            <?php
            function getLastCurrentUrl()
            {
                $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                preg_match('/[^\/]+$/', $actual_link, $matches);
                $last_word = $matches[0];
                return $last_word;
            }
            ?>

            <div id="navEdit" class="md:mt-32 mt-3 hidden md:block min-h-screen z-0">
                <div class="flex justify-between items-center bg-primaryHover">
                    <div class="ml-4 text-xl font-heading font-bold text-secondary">EDIT</div>
                    <div class="flex items-center mr-4 mb-2">
                        <button type="button" class="mt-3 mx-auto block text-white" id="hamburgerEditProfil">
                            <svg class="sm:w-8 w-6 text-secondary" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                    </div>
                </div>
                <ul>
                    <a href="/webservice/edit/biodata">
                        <li id="biodata" class="button font-heading p-3 my-2 mr-4 text-sm text-white <?= (getLastCurrentUrl() == 'biodata') ? 'active' : ''; ?> hover:text-secondary hover:bg-primaryDark font-semibold rounded-r-lg">Biodata</li>
                    </a>
                    <a href="/webservice/edit/akun">
                        <li id="akun" class="button font-heading p-3 my-2 mr-4 text-sm text-white <?= (getLastCurrentUrl() == 'akun') ? 'active' : ''; ?> hover:text-secondary hover:bg-primaryDark font-semibold rounded-r-lg">Akun</li>
                    </a>
                </ul>
            </div>

        </div>

        <div class="lg:col-span-3 md:col-span-4 col-span-11 lg:ml-6 lg:mr-12 md:mr-4 md:mt-32 mt-4 rounded-xl mx-3">
            <?php $this->renderSection('contentEdit'); ?>
        </div>
    </div>

</div>

<script type="text/javascript" src="/js/editProfil.js"></script>
<?= $this->endSection(); ?>