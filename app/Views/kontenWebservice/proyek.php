<?= $this->extend('layoutWebservice/templateWebservice.php'); ?>

<?= $this->section('content'); ?>
<div>
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form action="#" method="POST">
                <h1 class="text-6xl text-center font-heading text-secondary font-bold">PROYEK</h1>
                <div class="hidden sm:block" aria-hidden="true">
                    <div class="py-6">
                        <div class="border-t border-blue-600"></div>
                    </div>
                </div>
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-3">
                                <label for="nama" class="block text-sm font-medium text-gray-700">Nama*</label>
                                <input type="text" name="nama" id="nama" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Nama Proyek">
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="deskripsi" class="block text-sm font-medium text-gray-700">
                                    Deskripsi*
                                </label>
                                <div class="mt-1">
                                    <textarea id="deskripsi" name="deskripsi" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Masukkan Deskripsi Proyek"></textarea>
                                </div>
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="api" class="block text-sm font-medium text-gray-700">API*</label>
                                <select id="api" name="api" autocomplete="api" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option>Data 1</option>
                                    <option>Data 2</option>
                                    <option>Data 3</option>
                                    <option>Data 4</option>
                                </select>
                                <p class="mt-2 text-sm text-gray-500">
                                    *Harus diisi
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                    <button type="button" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Kembali
                    </button>
                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Buat
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>