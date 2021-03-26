<?= $this->extend('webservice/kontenWebservice/dokumentasi/layoutDokumentasi.php'); ?>

<?= $this->section('dokumentasi'); ?>

<div class="sm:ml-12 sm:mr-5 ml-8 mr-2 sm:mt-7 mt-4 transition-none">
    <div class="lg:hidden absolute mt-3" id="burgerDok">
        <svg class="block w-7 cursor-pointer fill-current text-secondary" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
    </div>
    <section>
        <div class="text-secondary lg:mx-4 mx-3 ml-10">
            <h1 class="lg:text-xl">Sistem Informasi Alumni</h1>
            <h2 class="font-bold lg:text-3xl md:text-2xl text-xl">DOKUMENTASI WEB SERVICE</h2>
        </div>
        <hr class="border border-gray-500 transform translate-y-2">
        <div class="lg:mx-4 mx-3 mt-4">
            <h3 class="text-secondary mb-5">Penjelasan API Sistem Informasi Alumni</h3>
            <div class="flex 2xl:-mb-10 lg:mb-4 mb-8">
                <p class="text-justify sm:mr-4 mr-0 xl:w-9/12 lg:w-7/12">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, consequuntur hic? Nostrum ratione perferendis repellendus aspernatur illum at nam ex asperiores natus excepturi. Quae, nam laboriosam. Odit consequatur repellendus illo neque rerum ut vel ad quidem! Delectus, sed in similique veniam vero, ducimus qui quasi quos ipsa a consequuntur! Possimus. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit tempora laboriosam deleniti rerum veniam officia provident quis, aspernatur ad doloribus nihil. Molestias placeat error, architecto dolorem et pariatur iusto. Veniam? Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <img src="/img/logo api.png" alt="Logo Api" class="xl:w-3/12 lg:w-5/12 sm:w-4/12 sm:block hidden">
            </div>
        </div>
    </section>

    <section id="memintaData">
        <div class="text-secondary lg:mx-4 mx-3">
            <h1 class="font-bold lg:text-3xl md:text-2xl text-xl">Meminta Data</h1>
        </div>
        <hr class="border border-gray-500 transform translate-y-2">
        <div class="lg:mx-4 mx-3 mt-4 mb-8 text-justify">
            <p class="">Cara meminta data : </p>
            <ol class="list-decimal list-inside">
                <li>Klik menu API kemudian pilih sub menu proyek</li>
                <li>Klik tombol "Buat Proyek" untuk mendaftarkan proyek baru</li>
                <li>Masukkan identitas proyek/aplikasi seperti nama, deskripsi proyek, pilih cakupan data yang diiginkan dan klik "buat"</li>
                <li>Tunggu hingga status permintaan berubah dan Anda akan mendapat kunci beserta token API SIA</li>
            </ol>
            <p class="mt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus consectetur vel sint ad reprehenderit officia officiis quod expedita magni accusamus eveniet ipsum possimus soluta ipsa non similique et sed quo, deleniti iusto vero necessitatibus ipsam! Excepturi placeat possimus pariatur odit. Consequatur necessitatibus harum, blanditiis aut explicabo vitae repudiandae in iusto? Lorem100</p>
        </div>
    </section>
</div>

<!-- Data dokumentasi -->
<div class="sm:ml-12 sm:mr-5 ml-8 mr-2 sm:mt-7 mt-4 transition-none">
    <div class="text-secondary lg:mx-4 mx-3">
        <h1 class="font-bold lg:text-3xl md:text-2xl text-xl">Data 1</h1>
    </div>
    <hr class="border border-gray-500 transform translate-y-2">
    <div class="lg:mx-4 mx-3 mt-4 mb-8 text-justify">
        <p class="">Data 1 adalah Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione modi nesciunt et dicta sunt ab vitae doloribus eveniet, nostrum dolores iusto, laudantium voluptas non maiores quibusdam ipsa, cum voluptates quaerat? </p>
        <section id="subData1_1">
            <div class="shadow-2xl w-full lg:my-6 md:my-4 sm:my-2 my-1 rounded-xl px-0 pt-4 py-6 sm:mx-0 mx-6">
                <div class="text-primary lg:mx-4 mx-3 px-4 py-4">
                    <h1 class="font-bold text-black lg:text-2xl md:text-xl text-lg">Sub Data 1.1</h1>
                    <p class="text-black mt-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione modi nesciunt et dicta sunt ab vitae doloribus eveniet, nostrum dolores iusto, laudantium voluptas non maiores quibusdam ipsa, cum voluptates quaerat? </p>
                    <h1 class="font-bold text-black lg:text-lg md:text-base text-sm mt-4">Judul Tabel</h1>
                    <div class="md:overflow-x-auto overflow-x-scroll shadow-2xl rounded-3xl">
                        <!-- mulai tabel -->
                        <table class="w-full sm:text-sm text-xs rounded-3xl shadow-2xl md:shadow-none font-paragraph">
                            <!-- start nama kolom tabel Sub Data 1.1 -->
                            <thead class="bg-gray-100">
                                <tr>
                                    <th class="pt-6 pb-6 px-4 rounded-tl-3xl text-black">Field</th>
                                    <th class="pt-6 pb-6 px-4 rounded-tl-3xl text-black">Type</th>
                                    <th class="pt-6 pb-6 px-4 rounded-tl-3xl text-black">Description</th>
                                </tr>
                            </thead>
                            <!-- end nama kolom tabel Sub Data 1.1 -->

                            <!-- start isi tabel Sub Data 1.1 -->
                            <tbody>
                                <tr class="border-t-2 border-b-2 bg-white">
                                    <td class="pt-2 pb-2 px-4 rounded-tl-3xl text-black">status</td>
                                    <td class="pt-2 pb-2 px-4 rounded-tl-3xl text-black">String</td>
                                    <td class="pt-2 pb-2 px-4 rounded-tl-3xl text-black">Return status, OK if success and Error if any error occured.</td>
                                </tr>
                                <tr class="border-t-2 border-b-2 bg-white">
                                    <td class="pt-2 pb-2 px-4 rounded-tl-3xl text-black">page</td>
                                    <td class="pt-2 pb-2 px-4 rounded-tl-3xl text-black">Number</td>
                                    <td class="pt-2 pb-2 px-4 rounded-tl-3xl text-black">Information page</td>
                                </tr>
                                <tr class="h-5 formEdit">
                                    <td colspan="8" class="rounded-b-3xl"></td>
                                </tr>
                            </tbody>
                            <!-- end isi tabel Sub Data 1.1 -->
                        </table>
                    </div>
                    <h1 class="font-bold text-black lg:text-lg md:text-base text-sm mt-4">Judul Source Code</h1>

                    <!-- mulai source code -->

        </section>
        <section id="subData1_2">
            <div class="shadow-2xl w-full lg:my-6 md:my-4 sm:my-2 my-1 rounded-xl px-0 pt-4 py-6 sm:mx-0 mx-6">
                <div class="text-primary lg:mx-4 mx-3 px-4 py-4">
                    <h1 class="font-bold text-black lg:text-2xl md:text-xl text-lg">Sub Data 1.2</h1>
                    <p class="text-black mt-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione modi nesciunt et dicta sunt ab vitae doloribus eveniet, nostrum dolores iusto, laudantium voluptas non maiores quibusdam ipsa, cum voluptates quaerat? </p>
                    <h1 class="font-bold text-black lg:text-lg md:text-base text-sm mt-4">Judul Tabel</h1>
                    <div class="md:overflow-x-auto overflow-x-scroll shadow-2xl rounded-3xl">
                        <!-- mulai tabel -->
                        <table class="w-full sm:text-sm text-xs rounded-3xl shadow-2xl md:shadow-none font-paragraph">
                            <!-- start nama kolom tabel Sub Data 1.2 -->
                            <thead class="bg-gray-100">
                                <tr>
                                    <th class="pt-6 pb-6 px-4 rounded-tl-3xl text-black">Field</th>
                                    <th class="pt-6 pb-6 px-4 rounded-tl-3xl text-black">Type</th>
                                    <th class="pt-6 pb-6 px-4 rounded-tl-3xl text-black">Description</th>
                                </tr>
                            </thead>
                            <!-- end nama kolom tabel Sub Data 1.2 -->

                            <!-- start isi tabel Sub Data 1.2 -->
                            <tbody>
                                <tr class="border-t-2 border-b-2 bg-white">
                                    <td class="pt-2 pb-2 px-4 rounded-tl-3xl text-black">status</td>
                                    <td class="pt-2 pb-2 px-4 rounded-tl-3xl text-black">String</td>
                                    <td class="pt-2 pb-2 px-4 rounded-tl-3xl text-black">Return status, OK if success and Error if any error occured.</td>
                                </tr>
                                <tr class="border-t-2 border-b-2 bg-white">
                                    <td class="pt-2 pb-2 px-4 rounded-tl-3xl text-black">page</td>
                                    <td class="pt-2 pb-2 px-4 rounded-tl-3xl text-black">Number</td>
                                    <td class="pt-2 pb-2 px-4 rounded-tl-3xl text-black">Information page</td>
                                </tr>
                                <tr class="h-5 formEdit">
                                    <td colspan="8" class="rounded-b-3xl"></td>
                                </tr>
                            </tbody>
                            <!-- end isi tabel Sub Data 1.2 -->
                        </table>
                    </div>
                    <h1 class="font-bold text-black lg:text-lg md:text-base text-sm mt-4">Judul Source Code</h1>

                    <!-- mulai source code -->

        </section>
    </div>

</div>
<?= $this->endSection(); ?>