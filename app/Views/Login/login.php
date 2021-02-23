<?= $this->extend('Login/templateLogin.php'); ?>

<?= $this->section('content'); ?>

<div class="flex w-full">
    <div class="lg:block hidden lg:w-8/12 h-auto" data-aos="fade-right">
        <img src="/img/login.png" alt="gambar login" class="transform lg:scale-y-125 xl:scale-y-100">
    </div>
    <div class="w-full flex justify-center items-center mt-4">
        <form method="POST" action="/websia" class="pt-6 pb-16 rounded-3xl shadow-2xl flex flex-col justify-center 2xl:w-7/12 xl:w-8/12 lg:w-3/4 md:w-7/12 sm:w-2/3 w-full lg:mx-0 mx-5" data-aos="fade-left">
            <?= csrf_field(); ?>
            <h2 class="text-2xl mb-4 font-bold text-center cursor-default text-primary">LOGIN PENGGUNA</h2>
            <div class="flex lg:mx-8 sm:mx-6 mx-3 h-10 mb-1">
                <label for="email" class="w-1/4 text-primary font-medium flex items-center text-sm md:text-base">Email</label>
                <input type="text" name="email" class="input pl-2 w-3/4 border-2 rounded-lg border-gray-400 text-sm outline-none text-gray-400" spellcheck="false" id="email" placeholder="Ketik email di sini">
            </div>
            <div class="flex lg:mx-8 sm:mx-6 mx-3">
                <div class="w-1/4"></div>
                <p class="w-3/4 text-xs text-red-500 w-3/4 text-justify" id="msg-email">Email yang anda masukkan tidak cocok</p>
            </div>
            <div class="flex lg:mx-8 sm:mx-6 mx-3 mt-2 mb-1 h-10 relative">
                <label for="pass" class="w-1/4 text-primary font-medium flex items-center text-sm md:text-base">Kata Sandi</label>
                <input type="password" name="pass" class="input input-sandi pl-2 w-3/4 border-2 rounded-lg border-gray-400 text-sm outline-none text-gray-400" spellcheck="false" id="pass" placeholder="Ketik kata sandi di sini">
                <div class="relative right-7 flex items-center text-gray-500" id="eye">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="cursor-pointer sm:w-5 w-4 absolute">
                        <path fill-rule="evenodd" d="M3.707 2.293a1 1 0 00-1.414 1.414l14 14a1 1 0 001.414-1.414l-1.473-1.473A10.014 10.014 0 0019.542 10C18.268 5.943 14.478 3 10 3a9.958 9.958 0 00-4.512 1.074l-1.78-1.781zm4.261 4.26l1.514 1.515a2.003 2.003 0 012.45 2.45l1.514 1.514a4 4 0 00-5.478-5.478z" clip-rule="evenodd" />
                        <path d="M12.454 16.697L9.75 13.992a4 4 0 01-3.742-3.741L2.335 6.578A9.98 9.98 0 00.458 10c1.274 4.057 5.065 7 9.542 7 .847 0 1.669-.105 2.454-.303z" />
                    </svg>
                </div>
            </div>

            <div class="flex lg:mx-8 sm:mx-6 mx-3">
                <div class="w-1/4"></div>
                <p class="text-xs text-red-500 w-3/4 text-justify" id="msg-pass">Kata sandi yang anda masukkan kurang tepat</p>
            </div>

            <div class="flex lg:mx-8 sm:mx-6 mx-3 my-3">
                <div class="w-1/4"></div>
                <div class="w-3/4 flex justify-between">
                    <div class="transform -translate-y-1">
                        <input type="checkbox" class="cursor-pointer transform translate-y-0.5 sm:w-5 w-3">
                        <label for="check" id="remember" class="sm:text-sm text-xs cursor-pointer hover:text-blue-600 text-primary font-medium select-none">Ingat saya</label>
                    </div>
                    <a href="/login/resetpass/" class="sm:text-sm text-xs cursor-pointer text-secondary font-medium hover:text-yellow-700">Lupa kata sandi?</a>
                </div>
            </div>

            <div class="flex justify-center lg:mx-8 sm:mx-6 mx-3 my-2">
                <input type="submit" class="tombol w-full shadow-2xl h-10 rounded-2xl text-base outline-none border-none cursor-pointer text-white duration-300" value="Masuk">
            </div>

            <div class="lg:mx-8 sm:mx-6 mx-3 flex mt-2 mb-4">
                <hr class="border border-primary w-1/4 transform translate-y-2">
                <p class="flex justify-center text-sm text-primary w-1/2 font-medium cursor-default">atau masuk dengan</p>
                <hr class="border border-primary w-1/4 transform translate-y-2">
            </div>

            <div class="lg:mx-8 sm:mx-6 mx-3 mb-2">
                <div class="sso flex justify-center rounded-2xl w-full border-2 border-secondary py-1 cursor-pointer trasform transform duration-300 hover:bg-yellow-200 hover:border-yellow-600 hover:scale-105">
                    <img src="/img/sipadu.png" alt="google" width="25" height="25" class="mr-4">
                    <h3 class="flex items-center text-sm text-secondary font-bold"><a href="#">SIPADU</a></h3>
                </div>
            </div>
            <div class="lg:mx-8 sm:mx-6 mx-3">
                <div class="sso flex justify-center rounded-2xl w-full border-2 border-secondary py-1 cursor-pointer transform hover:scale-105 duration-300 hover:bg-yellow-200 hover:border-yellow-600">
                    <img src="/img/bps.png" alt="google" width="25" height="25" class="mr-4">
                    <h3 class="flex items-center text-sm text-secondary font-bold"><a href="#">BPS</a></h3>
                </div>
            </div>
            <p class="text-center mt-3 -mb-9 text-primary font-medium cursor-default">Akun belum terdaftar? <span><a href="/daftar" class="text-secondary hover:text-yellow-700 font-medium">Daftar</a></span></p>
        </form>
    </div>
</div>

<?= $this->endSection(); ?>
