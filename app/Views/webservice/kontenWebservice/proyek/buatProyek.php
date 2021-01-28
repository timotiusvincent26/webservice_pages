<?= $this->extend('webservice/layoutWebservice/templateWebserviceLogin.php'); ?>

<?= $this->section('content'); ?>

<div class="mt-32 w-full flex justify-center">
    <div class="shadow-2xl w-3/4 mt-6 rounded-xl p-4">
        <h1 class="lg:text-6xl text-2xl text-center font-heading text-secondary font-bold">PROYEK</h1>
        <div class="flex justify-center">
            <div class="w-3/5">
                <hr class="border-primary border-2 mt-6">
                <div class="mx-2 mt-4">
                    <form action="">
                        <div class="font-bold text-secondary text-lg">Nama*</div>
                        <input type="text" name="nama" id="nama" placeholder="Nama Proyek" class="border-2 border-gray w-full rounded-lg p-2 mt-2 mb-4">

                        <div class="font-bold text-secondary text-lg">Deskripsi*</div>
                        <textarea name="deskripsi" id="deskripsi" cols="50" rows="5" class="w-full border-2 border-gray rounded-lg p-2 mt-2 mb-4" placeholder="Masukkan Deskripsi Proyek"></textarea>
                        <div>
                            <div class="font-bold text-secondary text-lg">API*</div>
                            <div>
                                <div class="flex items-center gap-x-2">
                                    <input type="checkbox" name="scope1" id="scope1" class="cursor-pointer" onclick="scope1JS()">
                                    <div class="font-heading font-medium" id="labelScope1">Scope 1</div>
                                </div>
                                <div class="ml-5 mt-2 mb-2">
                                    Mengakses informasi dengan cakupan Scope 1.
                                </div>
                            </div>
                            <div>
                                <div class="flex items-center gap-x-2">
                                    <input type="checkbox" name="scope2" id="scope2" class="cursor-pointer" onclick="scope2JS()">
                                    <div class="font-heading font-medium" id="labelScope2">Scope 2</div>
                                </div>
                                <div class="ml-5 mt-2 mb-2">
                                    Mengakses informasi dengan cakupan Scope 2.
                                </div>
                            </div>
                            <div>
                                <div class="flex items-center gap-x-2">
                                    <input type="checkbox" name="scope3" id="scope3" class="cursor-pointer" onclick="scope3JS()">
                                    <div class="font-heading font-medium" id="labelScope3">Scope 3</div>
                                </div>
                                <div class="ml-5 mt-2 mb-2">
                                    Mengakses informasi dengan cakupan Scope 3.
                                </div>
                            </div>
                        </div>
                        <div class="text-xs text-secondary mt-6">
                            *Harus diisi
                        </div>
                        <div class="flex justify-end gap-x-6 items-center">
                            <a href="/webservice/proyek">
                                <div class="flex items-center gap-x-2">
                                    <img src="/img/left-on.png" class="w-3 h-3" alt="">
                                    <div class="text-secondary">KEMBALI</div>
                                </div>
                            </a>
                            <input type="submit" value="BUAT" class="bg-secondary hover:bg-secondaryhover text-white py-1 px-5 cursor-pointer rounded-full">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="/js/checkbox.js"></script>
<?php $this->endSection(); ?>