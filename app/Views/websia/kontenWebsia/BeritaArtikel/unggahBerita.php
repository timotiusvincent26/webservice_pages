<?= $this->extend('websia/layoutWebsia/templateBerandaLogin.php'); ?>

<?= $this->section('content'); ?>
<style>
    .content {
        background-color: #6cf;
    }

    .content:before {
        position: absolute;
        top: -10px;
        content: "";
        right: 10px;
        border-style: solid;
        border-width: 0 10px 10px 10px;
        border-color: transparent transparent #6cf transparent;
    }
</style>
<div class="md:mt-8 mt-4 lg:px-20 md:px-8 px-3 w-full">
    <div class="flex justify-between relative">
        <div class="text-primary md:text-base text-sm font-medium font-paragraph mb-3"> Beranda > Berita > Form Unggah Berita</div>
        <svg id="infoBerita" class="cursor-pointer select-none md:w-7 md:h-7 w-6 h-6" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M17.5 27.5932C16.837 27.5932 16.2011 27.4325 15.7322 27.1464C15.2634 26.8604 15 26.4724 15 26.0678V17.5254C15 17.1209 15.2634 16.7329 15.7322 16.4468C16.2011 16.1607 16.837 16 17.5 16C18.163 16 18.7989 16.1607 19.2678 16.4468C19.7366 16.7329 20 17.1209 20 17.5254V26.0678C20 26.4724 19.7366 26.8604 19.2678 27.1464C18.7989 27.4325 18.163 27.5932 17.5 27.5932Z" fill="#014F86" />
            <path d="M17.5 14.17C17.1717 14.17 16.8466 14.1053 16.5433 13.9797C16.24 13.8541 15.9644 13.6699 15.7322 13.4378C15.5001 13.2056 15.3159 12.93 15.1903 12.6267C15.0647 12.3234 15 11.9983 15 11.67V10.5C15 9.83696 15.2634 9.20107 15.7322 8.73223C16.2011 8.26339 16.837 8 17.5 8C18.163 8 18.7989 8.26339 19.2678 8.73223C19.7366 9.20107 20 9.83696 20 10.5V11.67C20 11.9983 19.9353 12.3234 19.8097 12.6267C19.6841 12.93 19.4999 13.2056 19.2678 13.4378C19.0356 13.6699 18.76 13.8541 18.4567 13.9797C18.1534 14.1053 17.8283 14.17 17.5 14.17Z" fill="#014F86" />
            <path d="M18 36C14.4399 36 10.9598 34.9443 7.99974 32.9665C5.03966 30.9886 2.73255 28.1774 1.37018 24.8883C0.0077991 21.5992 -0.348661 17.98 0.345873 14.4884C1.04041 10.9967 2.75474 7.78943 5.27209 5.27209C7.78943 2.75474 10.9967 1.04041 14.4884 0.345873C17.98 -0.348661 21.5992 0.0077991 24.8883 1.37018C28.1774 2.73255 30.9886 5.03966 32.9665 7.99974C34.9443 10.9598 36 14.4399 36 18C35.9952 22.7724 34.0972 27.348 30.7226 30.7226C27.348 34.0972 22.7724 35.9952 18 36ZM18 3.05086C15.0433 3.05086 12.1531 3.92761 9.6947 5.57024C7.23633 7.21288 5.32026 9.54761 4.18879 12.2792C3.05733 15.0108 2.76128 18.0166 3.3381 20.9164C3.91492 23.8163 5.33868 26.48 7.42936 28.5707C9.52004 30.6613 12.1837 32.0851 15.0836 32.6619C17.9834 33.2387 20.9892 32.9427 23.7208 31.8112C26.4524 30.6798 28.7871 28.7637 30.4298 26.3053C32.0724 23.8469 32.9492 20.9567 32.9492 18C32.9443 14.0367 31.3678 10.2372 28.5653 7.43471C25.7628 4.63225 21.9633 3.0557 18 3.05086Z" fill="#014F86" />
        </svg>

        <div class="content hidden opacity-0 transition-all duration-300 rounded-xl text-primary px-5 py-2 text-sm absolute -right-1 top-10">
            <div class="font-bold">Ketentuan Pembuatan Berita</div>
            <ol class="list-decimal list-inside text-justify">
                <li>Berita tidak diperkenankan mengandung unsur SARA dan hoaks</li>
                <li>Berita memiliki minimal dua paragraf</li>
                <li>Nama pena boleh digunakan sebagai nama penulis</li>
                <li>dll.</li>
            </ol>
        </div>

    </div>
    <hr class="border-t-2 border-b-0 border-primary">

    <form id="formUnggahBerita" action="<?= base_url('websia/berandaBerita') ?>" method="post" class="2xl:mx-32 xl:mx-16 md:mx-8 sm:mx-4 mx-2 rounded-xl shadow-2xl py-6 xl:px-10 sm:px-6 px-3 md:my-10 my-6">
        <div class="flex">
            <label for="judulBerita" class="w-2/12 text-primary font-bold flex items-center mb-2 lg:text-base sm:text-sm text-xs">Judul Berita*</label>
            <input type="text" title="Harus Diisi" class="inputForm" name="judulBerita" id="judulBerita" placeholder="Judul berita">
        </div>
        <div class="flex">
            <label for="namaPenulis" class="w-2/12 text-primary font-bold flex items-center mb-2 lg:text-base sm:text-sm text-xs">Nama Penulis*</label>
            <input type="text" title="Harus Diisi" class="inputForm" name="namaPenulis" id="namaPenulis" placeholder="Nama penulis">
        </div>

        <div class="flex">
            <label for="fotoSampul" class="w-2/12 text-primary font-bold flex items-center mb-2 lg:text-base sm:text-sm text-xs">Foto Sampul*</label>
            <div class="flex justify-start items-center mb-2 w-full relative">
                <input type="file" hidden accept=".jpg, .jpeg, .img, .png" title="Pilih Foto" name="fotoSampul" id="fotoSampul">
                <label for="fotoSampul" title="Harus Diisi" class="bg-primary cursor-pointer text-white px-4 py-1 md:text-base text-sm flex items-center">Unggah Foto</label>
                <span class="text-primary absolute md:left-32 left-28 select-none cursor-default cursor md:text-base text-sm">Tidak ada foto yang dipilih</span>
            </div>
        </div>

        <div class="flex">
            <label for="kontenBerita" class="w-2/12 text-primary font-bold lg:text-base sm:text-sm text-xs mt-2">Konten Berita*</label>
            <textarea title="Harus Diisi" class="inputForm w-10/12" name="kontenBerita" id="kontenBerita" cols="30" rows="10"></textarea>
        </div>
        <div class="flex">
            <div class="w-2/12"></div>
            <div class="text-primary w-full text-sm">*Harus Diisi</div>
        </div>
        <div class="flex justify-end">
            <input type="submit" value="KIRIM" class="bg-secondary text-white rounded-full w-20 py-1 text-center cursor-pointer hover:bg-secondaryhover transition-colors duration-300 outline-none">
        </div>
    </form>
</div>
<script>
    $('#fotoSampul').change(function() {
        $(this).next().next().text(this.files[0].name)
    });
    $('#infoBerita').click(function() {
        if ($(this).next().hasClass('hidden')) {
            $(this).next().removeClass('hidden')
            setTimeout(() => {
                $(this).next().removeClass('opacity-0')
            }, 5);
        } else {
            setTimeout(() => {
                $(this).next().addClass('hidden')
            }, 300);
            $(this).next().addClass('opacity-0')
        }
    })
    $('#formUnggahBerita').submit(function(e) {
        e.preventDefault()
        $('body').prepend(`
            <div class="fixed top-0 bottom-0 right-0 left-0 z-40 flex justify-center items-center bg-black bg-opacity-40 font-paragraph" id='konfirUnggahBerita'>
                <div class="hidden opacity-0 duration-700 transition-all bg-gray bg-opacity-0">
                    <div class="mx-8 bg-white rounded-2xl flex flex-col justify-center pt-3 pb-4 sm:px-8 px-3">
                        <p class="font-bold sm:text-lg text-base mb-6 text-justify">Apakah Anda yakin akan mempublikasikan berita ini? Pastikan berita memenuhi ketentuan yang berlaku.</p>
                        <div class="text-white flex justify-end">
                            <div class="buttonBatal rounded-2xl text-white hover:bg-red-700 bg-red-600 w-20 mr-2 text-sm flex justify-center items-center cursor-pointer py-1 transition-all">BATAL</div>
                            <div class="rounded-2xl w-20 text-sm flex justify-center items-center cursor-pointer hover:bg-green-700 bg-green-600 transition-all" id='kirimBerita'>KIRIM</div>
                        </div>
                    </div>
                </div>
            </div>
    `)
        $('#konfirUnggahBerita').children().first().removeClass('hidden')
        setTimeout(function() {
            $('#konfirUnggahBerita').children().first().removeClass('opacity-0')
        }, 10);

        $('.buttonBatal').click(function() {
            $('#konfirUnggahBerita').children().first().addClass('opacity-0')
            $('#konfirUnggahBerita').children().first().on('transitionend MSTransitionEnd webkitTransitionEnd oTransitionEnd', function() {
                $('#konfirUnggahBerita').children().first().addClass('hidden')
            });
            setTimeout(function() {
                $('#konfirUnggahBerita').remove()
            }, 400);
        })

        var modal = document.getElementById('konfirUnggahBerita')
        $(window).click(function(e) {
            if (e.target === modal) {
                $('#konfirUnggahBerita').children().first().addClass('opacity-0')
                $('#konfirUnggahBerita').children().first().on('transitionend MSTransitionEnd webkitTransitionEnd oTransitionEnd', function() {
                    $('#konfirUnggahBerita').children().first().addClass('hidden')
                });
                setTimeout(function() {
                    $('#konfirUnggahBerita').remove()
                }, 400);
            }
        })


        $('#kirimBerita').click(function(e) {
            $('#konfirUnggahBerita').html(`
            <div class="hidden opacity-0 duration-700 transition-all p-3 rounded-lg flex items-center" style="background-color: #B1FF66;">
                <img src="/img/icon/check.png" class="h-5 mr-2" style="color: #54AC00;">
                <p class="sm:text-base text-sm font-heading font-bold" style="color: #54AC00;">Berita Berhasil Dikirim</p>
            </div>
            `)
            $('#konfirUnggahBerita').children().first().removeClass('hidden')
            setTimeout(function() {
                $('#konfirUnggahBerita').children().first().removeClass('opacity-0')
            }, 10);
        })
    })
</script>
<?= $this->endSection(); ?>