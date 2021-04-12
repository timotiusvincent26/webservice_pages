<?= $this->extend('webservice/kontenWebservice/dokumentasi/layoutDokumentasi.php'); ?>

<?= $this->section('dokumentasi'); ?>

<div class="sm:ml-12 sm:mr-5 ml-8 mr-2 sm:mt-7 mt-4 transition-none overflow-hidden">
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
        <div class="lg:mx-4 mx-3 mt-4 2xl:-mb-2 mb-10">
            <h3 class="text-secondary mb-5">Penjelasan API Sistem Informasi Alumni</h3>
            <div class="flex ">
                <p class="text-justify md:mr-8 sm:mr-2 mr-0 xl:w-10/12 lg:w-9/12">API Sistem Informasi Alumni menyediakan akses terprogram untuk membaca data User dan data Alumni. Pengguna dapat membaca tentang informasi pribadi dasar pengguna, informasi pribadi dasar alumni atas nama pengguna, dan daftar informasi pribadi dasar alumni. API Sistem Informasi Alumni mengidentifikasi pengguna dengan api-key. Pengguna bisa mendapatkan api-key dari situs Webservice Sistem Informasi Alumni. Setiap pengguna bisa mendapatkan dua hingga tiga api-key untuk mengakses API. Tanggapan tersedia dalam bentuk JSON.</p>
                <img src="/img/logo api.png" alt="Logo Api" class="xl:w-2/12 md:w-3/12 sm:w-4/12 sm:block hidden">
            </div>
        </div>
    </section>

    <section id="memintaData" class="pb-12">
        <div class="text-secondary lg:mx-4 mx-3">
            <h1 class="font-bold lg:text-3xl md:text-2xl text-xl">Meminta Data</h1>
        </div>
        <hr class="border border-gray-500 transform translate-y-2">
        <div class="lg:mx-4 mx-3 mt-4 text-justify">
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
<div class="sm:ml-12 sm:mr-5 ml-8 mr-2 transition-none mb-96">
    <section id="data" class="lg:mx-4 mx-3 pb-5">
        <h1 class="font-bold text-secondary lg:text-3xl md:text-2xl text-xl">Data</h1>
        <hr class="border border-gray-500 transform translate-y-2 -mx-3">
        <p class="mt-5">Data 1 adalah Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione modi nesciunt et dicta sunt ab vitae doloribus eveniet, nostrum dolores iusto, laudantium voluptas non maiores quibusdam ipsa, cum voluptates quaerat? </p>
    </section>
    <div class="lg:mx-4 mx-3 text-justify -mt-5">
        <section id="dataUser" class="pb-8">
            <div class="shadow-2xl w-full lg:mt-6 mt-4 rounded-xl">
                <div class="text-primary lg:mx-4 mx-3 px-4 py-4">
                    <h1 class="font-bold text-black lg:text-2xl md:text-xl text-lg">Data User</h1>
                    <p class="text-black mt-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione modi nesciunt et dicta sunt ab vitae doloribus eveniet, nostrum dolores iusto, laudantium voluptas non maiores quibusdam ipsa, cum voluptates quaerat? </p>
                    <h1 class="font-bold text-black lg:text-lg md:text-base text-sm mt-4 mb-1">User Profile Read</h1>
                    <div class="bg-black p-3 rounded-xl w-full">
                        <code>
                            <span style="color: #8bc;">http:</span><span class="text-secondary">//localhost:8080/api/user?api_key=&nim=</span>
                        </code>
                    </div>
                    <h1 class="font-bold text-black lg:text-lg md:text-base text-sm mt-4 mb-1">Parameter</h1>
                    <div class="md:overflow-x-auto overflow-x-scroll shadow-2xl rounded-3xl">
                        <!-- mulai tabel -->
                        <table class="w-full sm:text-sm text-xs rounded-3xl shadow-2xl md:shadow-none font-paragraph">
                            <!-- start nama kolom tabel Sub Data 1.1 -->
                            <thead class="bg-gray-100">
                                <tr>
                                    <th class="pt-6 pb-6 px-4 text-black">Field</th>
                                    <th class="pt-6 pb-6 px-4 text-black">Type</th>
                                    <th class="pt-6 pb-6 px-4 text-black">Description</th>
                                </tr>
                            </thead>
                            <!-- end nama kolom tabel Sub Data 1.1 -->

                            <!-- start isi tabel Sub Data 1.1 -->
                            <tbody>
                                <tr class="border-t-2 border-b-2 bg-white">
                                    <td class="pt-2 pb-2 px-4 text-black">status</td>
                                    <td class="pt-2 pb-2 px-4 text-black">String</td>
                                    <td class="pt-2 pb-2 px-4 text-black">Return status, OK if success and Error if any error occured.</td>
                                </tr>
                                <tr class="border-t-2 border-b-2 bg-white">
                                    <td class="pt-2 pb-2 px-4 text-black">page</td>
                                    <td class="pt-2 pb-2 px-4 text-black">Number</td>
                                    <td class="pt-2 pb-2 px-4 text-black">Information page</td>
                                </tr>
                                <tr class="h-5 formEdit">
                                    <td colspan="8" class="rounded-b-3xl"></td>
                                </tr>
                            </tbody>
                            <!-- end isi tabel Sub Data 1.1 -->
                        </table>
                    </div>

                    <!-- mulai source code -->

        </section>
        <section id="dataAlumni">
            <div class="shadow-2xl w-full mt-0 rounded-xl">
                <div class="text-primary lg:mx-4 mx-3 px-4 py-4">
                    <h1 class="font-bold text-black lg:text-2xl md:text-xl text-lg">Data Alumni</h1>
                    <p class="text-black mt-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione modi nesciunt et dicta sunt ab vitae doloribus eveniet, nostrum dolores iusto, laudantium voluptas non maiores quibusdam ipsa, cum voluptates quaerat? </p>
                    <h1 class="font-bold text-black lg:text-lg md:text-base text-sm mt-4 mb-1">Alumni Profile Read</h1>
                    <div class="bg-black p-3 rounded-xl w-full">
                        <code>
                            <span style="color: #8bc;">http:</span><span class="text-secondary">//localhost:8080/api/alumni?api_key=&nim=&list=</span>
                        </code>
                    </div>
                    <h1 class="font-bold text-black lg:text-lg md:text-base text-sm mt-4 mb-1">Parameter</h1>
                    <div class="md:overflow-x-auto overflow-x-scroll shadow-2xl rounded-3xl">
                        <!-- mulai tabel -->
                        <table class="w-full sm:text-sm text-xs rounded-3xl shadow-2xl md:shadow-none font-paragraph">
                            <!-- start nama kolom tabel Sub Data 1.2 -->
                            <thead class="bg-gray-100">
                                <tr>
                                    <th class="pt-6 pb-6 px-4 text-black">Field</th>
                                    <th class="pt-6 pb-6 px-4 text-black">Type</th>
                                    <th class="pt-6 pb-6 px-4 text-black">Description</th>
                                </tr>
                            </thead>
                            <!-- end nama kolom tabel Sub Data 1.2 -->

                            <!-- start isi tabel Sub Data 1.2 -->
                            <tbody>
                                <tr class="border-t-2 border-b-2 bg-white">
                                    <td class="pt-2 pb-2 px-4 text-black">status</td>
                                    <td class="pt-2 pb-2 px-4 text-black">String</td>
                                    <td class="pt-2 pb-2 px-4 text-black">Return status, OK if success and Error if any error occured.</td>
                                </tr>
                                <tr class="border-t-2 border-b-2 bg-white">
                                    <td class="pt-2 pb-2 px-4 text-black">page</td>
                                    <td class="pt-2 pb-2 px-4 text-black">Number</td>
                                    <td class="pt-2 pb-2 px-4 text-black">Information page</td>
                                </tr>
                                <tr class="h-5 formEdit">
                                    <td colspan="8" class="rounded-b-3xl"></td>
                                </tr>
                            </tbody>
                            <!-- end isi tabel Sub Data 1.2 -->
                        </table>
                    </div>
                    <h1 class="font-bold text-black lg:text-lg md:text-base text-sm mt-8 mb-1">Alumni Profile List</h1>
                    <div class="bg-black p-3 rounded-xl w-full">
                        <code>
                            <span style="color: #8bc;">http:</span><span class="text-secondary">//localhost:8080/api/alumni?api_key=&nim=&list=</span>
                        </code>
                    </div>
                    <!-- mulai source code -->

        </section>
    </div>

</div>
<?= $this->endSection(); ?>