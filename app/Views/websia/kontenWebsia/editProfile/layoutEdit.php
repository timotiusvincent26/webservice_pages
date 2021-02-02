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
</style>

<div class="grid grid-cols-4 mt-4 gap-x-6">
    <div class="col-span-1 bg-primary">
        <div id="navEdit" class="mt-4">
            <ul>
                <a href="/websia/editBiodata">
                    <li id="biodata" class="button bg-primaryHover font-heading p-3 text-sm text-white hover:text-secondary hover:bg-whtie text-center font-semibold active">Biodata</li>
                </a>
                <a href="">
                    <li id="pendidikan" class="button bg-primaryHover font-heading p-3 text-sm text-white hover:text-secondary hover:bg-white text-center font-semibold">Pendidikan</li>
                </a>
                <a href="">
                    <li id="tempatkerja" class="button bg-primaryHover font-heading p-3 text-sm text-white hover:text-secondary hover:bg-white text-center font-semibold">Tempat Kerja</li>
                </a>
                <a href="">
                    <li id="prestasi" class="button bg-primaryHover font-heading p-3 text-sm text-white hover:text-secondary hover:bg-white text-center font-semibold">Prestasi</li>
                </a>
                <a href="">
                    <li id="publikasi" class="button bg-primaryHover font-heading p-3 text-sm text-white hover:text-secondary hover:bg-white text-center font-semibold">Publikasi</li>
                </a>
                <a href="/websia/editAkun">
                    <li id="akun" class="button bg-primaryHover font-heading p-3 text-sm text-white hover:text-secondary hover:bg-white text-center font-semibold">Akun</li>
                </a>
            </ul>
        </div>
    </div>
    <div class="col-span-3 ml-6 mr-12 mt-4 formEdit rounded-xl">
        <?php $this->renderSection('contentEdit'); ?>
    </div>
</div>
<?= $this->endSection(); ?>