<?= $this->extend('layoutWebsia/templateBerandaLogin.php'); ?>

<?= $this->section('content'); ?>
<div class="flex justify-around lg:px-20 md:px-8 px-2 my-8">
    <div class="flex flex-col">
        <div class="text-sm text-gray-500 font-heading font-medium"><input type="checkbox" value="filter" /> Filter Alumni</div>
        <div>
            <select class="w-40 text-xs" id="cars" name="cars" placeholder="asnmbas">
                <option value="volvo">Nama</option>
                <option value="fiat">NIM</option>
                <option value="audi">Angkatan</option>
                <option class="hidden text-xs text-center" value="saab" selected>Filter Berdasarkan</option>
            </select>
        </div>
    </div>
    <div class="flex flex-col">
        <div class="text-sm text-gray-500 font-heading font-medium"><input type="checkbox" value="filter" /> Filter Tahun Berita</div>
    </div>
</div>


<div class=" grid grid-cols-3 gap-4 bg-primary my-8 pt-0 lg:px-20 md:px-8 px-2">

</div>
<?= $this->endSection(); ?>