// awal js edit biodata 
$(document).ready(function () {
    $('.jk_radio').on('click', function () {
        $('.jk_radio').parent().css('color', 'gray');
        $(this).parent().css('color', 'black');
    });
    $('.sb_radio').on('click', function () {
        $('.sb_radio').parent().css('color', 'gray');
        $(this).parent().css('color', 'black');
    });
    $('.sp_radio').on('click', function () {
        $('.sp_radio').parent().css('color', 'gray');
        $(this).parent().css('color', 'black');
    });
});
$('.updateFotoProfil').click(function () {
    $('body').prepend(`
    <div class="fixed top-0 bottom-0 right-0 left-0 z-50 flex justify-center items-center bg-black bg-opacity-40" id='formEditFoto'>
        <div class="hidden opacity-0 duration-700 transition-all md:w-1/3 w-2/3 bg-gray bg-opacity-0"> 
        <div class="bg-primary py-2 px-6 rounded-t-2xl flex items-center justify-center text-secondary text-sm">
            <p class="font-bold font-heading">Update Foto Profil</p>
        </div>
        <div class="bg-gray-100 rounded-b-2xl">
            <ul class="text-center font-heading font-bold text-sm text-primary">
                <li id='unggahFoto' class="p-2 border-b-2 border-gray-300 cursor-pointer hover:bg-gray-300">Unggah Foto</li>
                <li class="p-2 border-b-2 border-gray-300 cursor-pointer hover:bg-gray-300" id="hapusFoto">Hapus Foto</li>
                <li class="closeEditFoto p-2 rounded-b-lg cursor-pointer hover:bg-gray-300 text-red-500">Batalkan</li>
            </ul>
        </div>
        </div> 
    </div>
`)

    $('#formEditFoto').children().first().removeClass('hidden')
    setTimeout(function () {
        $('#formEditFoto').children().first().removeClass('opacity-0')
    }, 10);

    $('.closeEditFoto').click(function () {
        $('#formEditFoto').children().first().addClass('opacity-0')
        $('#formEditFoto').children().first().on('transitionend MSTransitionEnd webkitTransitionEnd oTransitionEnd', function () {
            $('#formEditFoto').children().first().addClass('hidden')
        });
        setTimeout(function () {
            $('#formEditFoto').remove()
        }, 400);
    })

    $('#unggahFoto').click(function () {
        $('#formEditFoto').remove()
        $('body').prepend(`
        <div class="fixed top-0 bottom-0 right-0 left-0 z-50 bg-black bg-opacity-40 flex flex-col justify-end" id='updateSucces'>
        <div class="hidden opacity-0 duration-300 transition-all p-2 pl-8 flex items-center" style="background-color: #B1FF66;">
            <img src="/img/icon/check.png" class="h-5 mr-2" style="color: #54AC00;">
            <p class="sm:text-base text-sm font-heading font-bold" style="color: #54AC00;">Foto Profil Berhasil Diubah</p>
        </div>
    </div>
        `)
        $('#updateSucces').children().first().removeClass('hidden')
        setTimeout(function () {
            $('#updateSucces').children().first().removeClass('opacity-0')
        }, 10);
        setTimeout(function () {
            $('#updateSucces').remove()
        }, 1000);
    })
})

$('#submitBiodata').click(function (e) {
    e.preventDefault()
    $('body').prepend(`
    <div class="fixed top-0 bottom-0 right-0 left-0 z-50 flex justify-center items-center bg-black bg-opacity-40" id='modalBiodata'>
    <div class="hidden opacity-0 duration-700 transition-all p-3 rounded-lg flex items-center" style="background-color: #B1FF66;">
    <img src="/img/icon/check.png" class="h-5 mr-2" style="color: #54AC00;">
    <p class="sm:text-base text-sm font-heading font-bold" style="color: #54AC00;">Biodata Berhasil Disimpan</p>
</div>
    </div>
`)

    $('#modalBiodata').children().first().removeClass('hidden')
    setTimeout(function () {
        $('#modalBiodata').children().first().removeClass('opacity-0')
    }, 10);
    setTimeout(function () {
        $('#formEditBiodata').submit()
    }, 700);
})
// akhir js edit biodata

// awal js sorting

$(".sort").click(function () {
    $(".sort").not(this).children().removeClass('invisible text-primary')
    if ($(this).children().eq(0).hasClass('invisible')) {
        $(this).children().first().removeClass('invisible')
        $(this).children().first().removeClass('text-gray-400').addClass('text-primary')
        $(this).children().eq(1).addClass('invisible')
    } else {
        $(this).children().eq(1).removeClass('invisible')
        $(this).children().first().addClass('invisible')
        $(this).children().eq(1).removeClass('text-gray-400').addClass('text-primary')
    }
})

// akhir js sorting

// awal js edit pendidikan
$('.editPendidikan').click(function () {
    $('body').prepend(`
    <div class="fixed top-0 bottom-0 right-0 left-0 z-50 flex justify-center items-center bg-black bg-opacity-40 font-paragraph" id='formEditPendidikan'>
        <div class="hidden opacity-0 duration-700 transition-all xl:w-1/2 lg:w-7/12 md:w-2/3 sm:w-3/4 w-11/12 bg-gray bg-opacity-0">
            <div class="bg-primary py-4 px-6 rounded-t-2xl flex items-center justify-between text-secondary text-2xl">
                <p class="font-heading font-bold">Edit Pendidikan</p>
                <svg class="closePendidikan lg:w-10 md:w-8 sm:w-7 w-6 fill-current cursor-pointer" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
            </div>
            <form action="" method="post" class="flex flex-col bg-gray-100 sm:px-12 px-4 rounded-b-2xl text-sm">
                <label for="editJenjang" class="text-primary font-medium mt-2">Jenjang :</label>
                <input type="text" placeholder="Nama Jenjang" class="inputForm" name="editJenjang" id="editJenjang">
                <label for="editUniversitas" class="text-primary font-medium">Universitas :</label>
                <input type="text" placeholder="Nama Universitas" class="inputForm" name="editUniversitas" id="editUniversitas">
                <label for="editStudi" class="text-primary font-medium">Program Studi :</label>
                <input type="text" placeholder="Nama Program Studi" class="inputForm" name="editStudi" id="editStudi">
                <div class="flex">
                    <div class="flex flex-col mr-8 w-1/3">
                        <label for="editMasuk" class="text-primary font-medium">Tahun Masuk :</label>
                        <input type="date" placeholder="2021" class="cursor-pointer inputForm" name="editMasuk" id="editMasuk">
                    </div>
                    <div class="flex flex-col w-1/3">
                        <label for="editLulus" class="text-primary font-medium">Tahun Lulus :</label>
                        <input type="date" placeholder="2021" class="cursor-pointer px-4 inputForm" name="editLulus" id="editLulus">
                    </div>
                </div>
                <label for="editTulisan" class="text-primary font-medium">Judul Tulisan</label>
                <textarea name="editTulisan" id="editTulisan" rows="2" class="inputForm resize-none" placeholder="Gadget Paling Top Untuk Digunakan Sehari-Hari"></textarea>
                <div class="flex justify-end my-4">
                    <input type="submit" value="SIMPAN" class="bg-secondary text-white rounded-full w-24 py-1 text-center cursor-pointer hover:bg-secondaryhover transition-colors duration-300 text-sm mr-4 outline-none">
                    <input type="button" value="KEMBALI" class="closePendidikan bg-secondary text-white rounded-full w-24 py-1 text-center cursor-pointer hover:bg-secondaryhover transition-colors duration-300 text-sm outline-none" id='backPendidikan'>
                </div>

            </form>

        </div>
    </div>
`)

    $('#formEditPendidikan').children().first().removeClass('hidden')
    setTimeout(function () {
        $('#formEditPendidikan').children().first().removeClass('opacity-0')
    }, 10);

    $('.closePendidikan').click(function () {
        $('#formEditPendidikan').children().first().addClass('opacity-0')
        $('#formEditPendidikan').children().first().on('transitionend MSTransitionEnd webkitTransitionEnd oTransitionEnd', function () {
            $('#formEditPendidikan').children().first().addClass('hidden')
        });
        setTimeout(function () {
            $('#formEditPendidikan').remove()
        }, 400);
    })

    $('#backPendidikan').prev().click(function (e) {
        e.preventDefault()
        $('#formEditPendidikan').children().first().addClass('hidden')
        $('#formEditPendidikan').prepend(`
        <div class="hidden opacity-0 duration-700 transition-all p-3 rounded-lg flex items-center" style="background-color: #B1FF66;">
            <img src="/img/icon/check.png" class="h-5 mr-2" style="color: #54AC00;">
            <p class="sm:text-base text-sm font-heading font-bold" style="color: #54AC00;">Pendidikan Berhasil Disimpan</p>
        </div>
        `)
        $('#formEditPendidikan').children().first().removeClass('hidden')
        setTimeout(function () {
            $('#formEditPendidikan').children().first().removeClass('opacity-0')
        }, 10);
        setTimeout(function () {
            $('#formEditPendidikan').children().eq(1).children().eq(1).submit()
        }, 700);
    })

})

$('.tambahPendidikan').click(function () {
    $('body').prepend(`
    <div class="fixed top-0 bottom-0 right-0 left-0 z-50 flex justify-center items-center bg-black bg-opacity-40 font-paragraph" id='formTambahPendidikan'>
        <div class="hidden opacity-0 duration-700 transition-all xl:w-1/2 lg:w-7/12 md:w-2/3 sm:w-3/4 w-11/12 bg-gray bg-opacity-0">
            <div class="bg-primary py-4 px-6 rounded-t-2xl flex items-center justify-between text-secondary text-2xl">
                <p class="font-heading font-bold">Tambah Pendidikan</p>
                <svg class="closePendidikan lg:w-10 md:w-8 sm:w-7 w-6 fill-current cursor-pointer" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
            </div>
            <form action="" method="post" class="flex flex-col bg-gray-100 sm:px-12 px-4 rounded-b-2xl text-sm">
                <label for="editJenjang" class="text-primary font-medium mt-2">Jenjang :</label>
                <input type="text" placeholder="Nama Jenjang" class="inputForm" name="editJenjang" id="editJenjang">
                <label for="editUniversitas" class="text-primary font-medium">Universitas :</label>
                <input type="text" placeholder="Nama Universitas" class="inputForm" name="editUniversitas" id="editUniversitas">
                <label for="editStudi" class="text-primary font-medium">Program Studi :</label>
                <input type="text" placeholder="Nama Program Studi" class="inputForm" name="editStudi" id="editStudi">
                <div class="flex">
                    <div class="flex flex-col mr-8 w-1/3">
                        <label for="editMasuk" class="text-primary font-medium">Tahun Masuk :</label>
                        <input type="date" placeholder="2021" class="cursor-pointer inputForm" name="editMasuk" id="editMasuk">
                    </div>
                    <div class="flex flex-col w-1/3">
                        <label for="editLulus" class="text-primary font-medium">Tahun Lulus :</label>
                        <input type="date" placeholder="2021" class="cursor-pointer px-4 inputForm" name="editLulus" id="editLulus">
                    </div>
                </div>
                <label for="editTulisan" class="text-primary font-medium">Judul Tulisan</label>
                <textarea name="editTulisan" id="editTulisan" rows="2" class="inputForm resize-none" placeholder="Gadget Paling Top Untuk Digunakan Sehari-Hari"></textarea>
                <div class="flex justify-end my-4">
                    <input type="submit" value="SIMPAN" class="bg-secondary text-white rounded-full w-24 py-1 text-center cursor-pointer hover:bg-secondaryhover transition-colors duration-300 text-sm mr-4 outline-none">
                    <input type="button" value="KEMBALI" class="closePendidikan bg-secondary text-white rounded-full w-24 py-1 text-center cursor-pointer hover:bg-secondaryhover transition-colors duration-300 text-sm outline-none" id='backPendidikan'>
                </div>

            </form>

        </div>
    </div>
`)

    $('#formTambahPendidikan').children().first().removeClass('hidden')
    setTimeout(function () {
        $('#formTambahPendidikan').children().first().removeClass('opacity-0')
    }, 10);

    $('.closePendidikan').click(function () {
        $('#formTambahPendidikan').children().first().addClass('opacity-0')
        $('#formTambahPendidikan').children().first().on('transitionend MSTransitionEnd webkitTransitionEnd oTransitionEnd', function () {
            $('#formTambahPendidikan').children().first().addClass('hidden')
        });
        setTimeout(function () {
            $('#formTambahPendidikan').remove()
        }, 400);
    })

    $('#backPendidikan').prev().click(function (e) {
        e.preventDefault()
        $('#formTambahPendidikan').children().first().addClass('hidden')
        $('#formTambahPendidikan').prepend(`
        <div class="hidden opacity-0 duration-700 transition-all p-3 rounded-lg flex items-center" style="background-color: #B1FF66;">
            <img src="/img/icon/check.png" class="h-5 mr-2" style="color: #54AC00;">
            <p class="sm:text-base text-sm font-heading font-bold" style="color: #54AC00;">Pendidikan Berhasil Ditambahkan</p>
        </div>
        `)
        $('#formTambahPendidikan').children().first().removeClass('hidden')
        setTimeout(function () {
            $('#formTambahPendidikan').children().first().removeClass('opacity-0')
        }, 10);
        setTimeout(function () {
            $('#formTambahPendidikan').children().eq(1).children().eq(1).submit()
        }, 700);
    })

})

// akhir js edit pendidikan


// awal js edit tempat kerja
$('#submitTempatKerja').click(function (e) {
    e.preventDefault()
    $('body').prepend(`
    <div class="fixed top-0 bottom-0 right-0 left-0 z-50 flex justify-center items-center bg-black bg-opacity-40" id='modalTempatKerja'>
    <div class="hidden opacity-0 duration-700 transition-all p-3 rounded-lg flex items-center" style="background-color: #B1FF66;">
    <img src="/img/icon/check.png" class="h-5 mr-2" style="color: #54AC00;">
    <p class="sm:text-base text-sm font-heading font-bold" style="color: #54AC00;">Tempat Kerja Berhasil Disimpan</p>
</div>
    </div>
`)

    $('#modalTempatKerja').children().first().removeClass('hidden')
    setTimeout(function () {
        $('#modalTempatKerja').children().first().removeClass('opacity-0')
    }, 10);
    setTimeout(function () {
        $('#formEditTempatKerja').submit()
    }, 700);
})
// akhir js edit tempat kerja


// awal js edit prestasi
$('.editPrestasi').click(function () {
    $('body').prepend(`
    <div class="fixed top-0 bottom-0 right-0 left-0 z-50 flex justify-center items-center bg-black bg-opacity-40" id='formEditPrestasi'>
        <div class="hidden opacity-0 duration-700 transition-all xl:w-1/2 lg:w-7/12 md:w-2/3 sm:w-3/4 w-11/12 bg-gray bg-opacity-0 font-paragraph">
        <div class="bg-primary py-4 px-6 rounded-t-2xl flex items-center justify-between text-secondary text-2xl">
            <p class="font-heading font-bold">Edit Prestasi</p>
            <svg class="closePrestasi lg:w-10 md:w-8 sm:w-7 w-6 fill-current cursor-pointer" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
        </div>
        <form action="" method="post" class="flex flex-col bg-gray-100 sm:px-12 px-4 rounded-b-2xl text-sm">
            <label for="editJenjang" class="text-primary font-medium mt-2">Nama Prestasi :</label>
            <input type="text" placeholder="Nama Prestasi" class="inputForm" name="editJenjang" id="editJenjang">
            <label for="editMasuk" class="text-primary font-medium">Tahun Masuk :</label>
            <input type="date" placeholder="2021" class="w-2/5 cursor-pointer inputForm" name="editMasuk" id="editMasuk">
            <div class="flex justify-end my-4">
                <input type="submit" value="SIMPAN" class="bg-secondary text-white rounded-full w-24 py-1 text-center cursor-pointer hover:bg-secondaryhover transition-colors duration-300 text-sm mr-4 outline-none">
                <input type="button" value="KEMBALI" class="closePrestasi bg-secondary text-white rounded-full w-24 py-1 text-center cursor-pointer hover:bg-secondaryhover transition-colors duration-300 text-sm outline-none" id='backPrestasi'>
            </div>
        </form>
        </div>
    </div>
    `)

    $('#formEditPrestasi').children().first().removeClass('hidden')
    setTimeout(function () {
        $('#formEditPrestasi').children().first().removeClass('opacity-0')
    }, 10);

    $('.closePrestasi').click(function () {
        $('#formEditPrestasi').children().first().addClass('opacity-0')
        $('#formEditPrestasi').children().first().on('transitionend MSTransitionEnd webkitTransitionEnd oTransitionEnd', function () {
            $('#formEditPrestasi').children().first().addClass('hidden')
        });
        setTimeout(function () {
            $('#formEditPrestasi').remove()
        }, 400);
    })

    $('#backPrestasi').prev().click(function (e) {
        e.preventDefault()
        $('#formEditPrestasi').children().first().addClass('hidden')
        $('#formEditPrestasi').prepend(`
        <div class="hidden opacity-0 duration-700 transition-all p-3 rounded-lg flex items-center" style="background-color: #B1FF66;">
            <img src="/img/icon/check.png" class="h-5 mr-2" style="color: #54AC00;">
            <p class="sm:text-base text-sm font-heading font-bold" style="color: #54AC00;">Prestasi Berhasil Disimpan</p>
        </div>
        `)
        $('#formEditPrestasi').children().first().removeClass('hidden')
        setTimeout(function () {
            $('#formEditPrestasi').children().first().removeClass('opacity-0')
        }, 10);
        setTimeout(function () {
            $('#formEditPrestasi').children().eq(1).children().eq(1).submit()
        }, 800);
    })
})

$('.tambahPrestasi').click(function () {
    $('body').prepend(`
    <div class="fixed top-0 bottom-0 right-0 left-0 z-50 flex justify-center items-center bg-black bg-opacity-40" id='formTambahPrestasi'>
        <div class="hidden opacity-0 duration-700 transition-all xl:w-1/2 lg:w-7/12 md:w-2/3 sm:w-3/4 w-11/12 bg-gray bg-opacity-0 font-paragraph">
        <div class="bg-primary py-4 px-6 rounded-t-2xl flex items-center justify-between text-secondary text-2xl">
            <p class="font-heading font-bold">Tambah Prestasi</p>
            <svg class="closePrestasi lg:w-10 md:w-8 sm:w-7 w-6 fill-current cursor-pointer" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
        </div>
        <form action="" method="post" class="flex flex-col bg-gray-100 sm:px-12 px-4 rounded-b-2xl text-sm">
            <label for="editJenjang" class="text-primary font-medium mt-2">Nama Prestasi :</label>
            <input type="text" placeholder="Nama Prestasi" class="inputForm" name="editJenjang" id="editJenjang">
            <label for="editMasuk" class="text-primary font-medium">Tahun Masuk :</label>
            <input type="date" placeholder="2021" class="w-2/5 cursor-pointer inputForm" name="editMasuk" id="editMasuk">
            <div class="flex justify-end my-4">
                <input type="submit" value="SIMPAN" class="bg-secondary text-white rounded-full w-24 py-1 text-center cursor-pointer hover:bg-secondaryhover transition-colors duration-300 text-sm mr-4 outline-none">
                <input type="button" value="KEMBALI" class="closePrestasi bg-secondary text-white rounded-full w-24 py-1 text-center cursor-pointer hover:bg-secondaryhover transition-colors duration-300 text-sm outline-none" id='backPrestasi'>
            </div>
        </form>
        </div>
    </div>
    `)

    $('#formTambahPrestasi').children().first().removeClass('hidden')
    setTimeout(function () {
        $('#formTambahPrestasi').children().first().removeClass('opacity-0')
    }, 10);

    $('.closePrestasi').click(function () {
        $('#formTambahPrestasi').children().first().addClass('opacity-0')
        $('#formTambahPrestasi').children().first().on('transitionend MSTransitionEnd webkitTransitionEnd oTransitionEnd', function () {
            $('#formTambahPrestasi').children().first().addClass('hidden')
        });
        setTimeout(function () {
            $('#formTambahPrestasi').remove()
        }, 400);
    })

    $('#backPrestasi').prev().click(function (e) {
        e.preventDefault()
        $('#formTambahPrestasi').children().first().addClass('hidden')
        $('#formTambahPrestasi').prepend(`
        <div class="hidden opacity-0 duration-700 transition-all p-3 rounded-lg flex items-center" style="background-color: #B1FF66;">
            <img src="/img/icon/check.png" class="h-5 mr-2" style="color: #54AC00;">
            <p class="sm:text-base text-sm font-heading font-bold" style="color: #54AC00;">Prestasi Berhasil Ditambahkan</p>
        </div>
        `)
        $('#formTambahPrestasi').children().first().removeClass('hidden')
        setTimeout(function () {
            $('#formTambahPrestasi').children().first().removeClass('opacity-0')
        }, 10);
        setTimeout(function () {
            $('#formTambahPrestasi').children().eq(1).children().eq(1).submit()
        }, 800);
    })
})
// akhir js edit prestasi

// awal js edit publikasi
$('.editPublikasi').click(function () {
    $('body').prepend(`
    <div class="fixed top-0 bottom-0 right-0 left-0 z-50 flex justify-center items-center bg-black bg-opacity-40 font-paragraph" id='formEditPublikasi'>
        <div class="hidden opacity-0 duration-700 transition-all xl:w-1/2 lg:w-7/12 md:w-2/3 sm:w-3/4 w-11/12 bg-gray bg-opacity-0">
            <div class="bg-primary py-4 px-6 rounded-t-2xl flex items-center justify-between text-secondary text-2xl">
                <p class="font-heading font-bold">Edit Publikasi</p>
                <svg class="closePublikasi lg:w-10 md:w-8 sm:w-7 w-6 fill-current cursor-pointer" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
            </div>
            <form action="" method="post" class="flex flex-col bg-gray-100 sm:px-12 px-4 rounded-b-2xl text-sm">
                <label for="editTopik" class="text-primary font-medium mt-2">Topik :</label>
                <input type="text" placeholder="Topik Publikasi" class="inputForm" name="editTopik" id="editTopik">
                <label for="editPublisher" class="text-primary font-medium">Publisher :</label>
                <input type="text" placeholder="Nama Publisher" class="inputForm" name="editPublisher" id="editPublisher">
                <div class="flex">
                    <div class="flex flex-col mr-8 w-1/3">
                        <label for="editMasuk" class="text-primary font-medium">Tanggal Publikasi :</label>
                        <input type="date" placeholder="2021" class="cursor-pointer inputForm" name="editMasuk" id="editMasuk">
                    </div>
                </div>
                <label for="editTulisan" class="text-primary font-medium">Deskripsi</label>
                <textarea name="editTulisan" id="editTulisan" rows="2" class="inputForm resize-none" placeholder="Penggunaan Jutsu Air dalam mengatasi Permasalahan Banjir yang Sering Terjadi di Wilayah Pemukiman Rawan Longsor"></textarea>
                <div class="flex justify-end my-8">
                    <input type="submit" value="SIMPAN" class="bg-secondary text-white rounded-full w-24 py-0.5 text-center cursor-pointer border-secondary border-2 hover:text-secondary hover:bg-white hover:border-opacity-70 transition-colors duration-300 text-sm mr-4 outline-none">
                    <input type="button" value="KEMBALI" class="closePublikasi bg-secondary text-white rounded-full w-24 py-0.5 text-center cursor-pointer border-secondary border-2 hover:text-secondary hover:bg-white hover:border-opacity-70 transition-colors duration-300 text-sm outline-none" id='backPublikasi'>
                </div>

            </form>

        </div>
    </div>
`)

    $('#formEditPublikasi').children().first().removeClass('hidden')
    setTimeout(function () {
        $('#formEditPublikasi').children().first().removeClass('opacity-0')
    }, 10);

    $('.closePublikasi').click(function () {
        $('#formEditPublikasi').children().first().addClass('opacity-0')
        $('#formEditPublikasi').children().first().on('transitionend MSTransitionEnd webkitTransitionEnd oTransitionEnd', function () {
            $('#formEditPublikasi').children().first().addClass('hidden')
        });
        setTimeout(function () {
            $('#formEditPublikasi').remove()
        }, 400);
    })

    $('#backPublikasi').prev().click(function (e) {
        e.preventDefault()
        $('#formEditPublikasi').children().first().addClass('hidden')
        $('#formEditPublikasi').prepend(`
        <div class="hidden opacity-0 duration-700 transition-all p-3 rounded-lg flex items-center" style="background-color: #B1FF66;">
            <img src="/img/icon/check.png" class="h-5 mr-2" style="color: #54AC00;">
            <p class="sm:text-base text-sm font-heading font-bold" style="color: #54AC00;">Publikasi Berhasil Disimpan</p>
        </div>
        `)
        $('#formEditPublikasi').children().first().removeClass('hidden')
        setTimeout(function () {
            $('#formEditPublikasi').children().first().removeClass('opacity-0')
        }, 10);
        setTimeout(function () {
            $('#formEditPublikasi').children().eq(1).children().eq(1).submit()
        }, 700);
    })

})

$('.tambahPublikasi').click(function () {
    $('body').prepend(`
    <div class="fixed top-0 bottom-0 right-0 left-0 z-50 flex justify-center items-center bg-black bg-opacity-40 font-paragraph" id='formTambahPublikasi'>
        <div class="hidden opacity-0 duration-700 transition-all xl:w-1/2 lg:w-7/12 md:w-2/3 sm:w-3/4 w-11/12 bg-gray bg-opacity-0">
            <div class="bg-primary py-4 px-6 rounded-t-2xl flex items-center justify-between text-secondary text-2xl">
                <p class="font-heading font-bold">Tambah Publikasi</p>
                <svg class="closePublikasi lg:w-10 md:w-8 sm:w-7 w-6 fill-current cursor-pointer" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
            </div>
            <form action="" method="post" class="flex flex-col bg-gray-100 sm:px-12 px-4 rounded-b-2xl text-sm">
                <label for="editTopik" class="text-primary font-medium mt-2">Topik :</label>
                <input type="text" placeholder="Topik Publikasi" class="inputForm" name="editTopik" id="editTopik">
                <label for="editPublisher" class="text-primary font-medium">Publisher :</label>
                <input type="text" placeholder="Nama Publisher" class="inputForm" name="editPublisher" id="editPublisher">
                <div class="flex">
                    <div class="flex flex-col mr-8 w-1/3">
                        <label for="editMasuk" class="text-primary font-medium">Tanggal Publikasi :</label>
                        <input type="date" placeholder="2021" class="cursor-pointer inputForm" name="editMasuk" id="editMasuk">
                    </div>
                </div>
                <label for="editTulisan" class="text-primary font-medium">Deskripsi</label>
                <textarea name="editTulisan" id="editTulisan" rows="2" class="inputForm resize-none" placeholder="Penggunaan Jutsu Air dalam mengatasi Permasalahan Banjir yang Sering Terjadi di Wilayah Pemukiman Rawan Longsor"></textarea>
                <div class="flex justify-end my-8">
                    <input type="submit" value="SIMPAN" class="bg-secondary text-white rounded-full w-24 py-0.5 text-center cursor-pointer border-secondary border-2 hover:text-secondary hover:bg-white hover:border-opacity-70 transition-colors duration-300 text-sm mr-4 outline-none">
                    <input type="button" value="KEMBALI" class="closePublikasi bg-secondary text-white rounded-full w-24 py-0.5 text-center cursor-pointer border-secondary border-2 hover:text-secondary hover:bg-white hover:border-opacity-70 transition-colors duration-300 text-sm outline-none" id='backPublikasi'>
                </div>

            </form>

        </div>
    </div>
`)

    $('#formTambahPublikasi').children().first().removeClass('hidden')
    setTimeout(function () {
        $('#formTambahPublikasi').children().first().removeClass('opacity-0')
    }, 10);

    $('.closePublikasi').click(function () {
        $('#formTambahPublikasi').children().first().addClass('opacity-0')
        $('#formTambahPublikasi').children().first().on('transitionend MSTransitionEnd webkitTransitionEnd oTransitionEnd', function () {
            $('#formTambahPublikasi').children().first().addClass('hidden')
        });
        setTimeout(function () {
            $('#formTambahPublikasi').remove()
        }, 400);
    })

    $('#backPublikasi').prev().click(function (e) {
        e.preventDefault()
        $('#formTambahPublikasi').children().first().addClass('hidden')
        $('#formTambahPublikasi').prepend(`
        <div class="hidden opacity-0 duration-700 transition-all p-3 rounded-lg flex items-center" style="background-color: #B1FF66;">
            <img src="/img/icon/check.png" class="h-5 mr-2" style="color: #54AC00;">
            <p class="sm:text-base text-sm font-heading font-bold" style="color: #54AC00;">Publikasi Berhasil Ditambahkan</p>
        </div>
        `)
        $('#formTambahPublikasi').children().first().removeClass('hidden')
        setTimeout(function () {
            $('#formTambahPublikasi').children().first().removeClass('opacity-0')
        }, 10);
        setTimeout(function () {
            $('#formTambahPublikasi').children().eq(1).children().eq(1).submit()
        }, 700);
    })

})

// akhir js edit publikasi

// awal js edit akun
$('#submitAkun').click(function (e) {
    e.preventDefault()
    $('body').prepend(`
    <div class="fixed top-0 bottom-0 right-0 left-0 z-50 flex justify-center items-center bg-black bg-opacity-40" id='modalAkun'>
    <div class="hidden opacity-0 duration-700 transition-all p-3 rounded-lg flex items-center" style="background-color: #B1FF66;">
    <img src="/img/icon/check.png" class="h-5 mr-2" style="color: #54AC00;">
    <p class="sm:text-base text-sm font-heading font-bold" style="color: #54AC00;">Akun Berhasil Diperbarui</p>
</div>
    </div>
`)

    $('#modalAkun').children().first().removeClass('hidden')
    setTimeout(function () {
        $('#modalAkun').children().first().removeClass('opacity-0')
    }, 10);
    setTimeout(function () {
        $('#formEditAkun').submit()
    }, 700);
})
// akhir js edit akun

// awal js edit biodata webservice
$('#simpanBiodata').click(function (e) {
    e.preventDefault()
    $('body').prepend(`
    <div class="fixed top-0 bottom-0 right-0 left-0 z-50 flex justify-center items-center bg-black bg-opacity-40" id='popupBiodata'>
        <div class="hidden opacity-0 duration-700 transition-all p-3 rounded-lg flex items-center" style="background-color: #B1FF66;">
            <img src="/img/icon/check.png" class="h-5 mr-2" style="color: #54AC00;">
            <p class="sm:text-base text-sm font-heading font-bold" style="color: #54AC00">Biodata Berhasil Disimpan</p>
        </div>
    </div>`)

    $('#popupBiodata').children().first().removeClass('hidden')
    setTimeout(function () {
        $('#popupBiodata').children().first().removeClass('opacity-0')
    }, 10);
    setTimeout(function () {
        $('#formEditBiodataDev').submit()
    }, 700);
})
// akhir js edit biodata webservice

// awal js edit akun webservice
$('#simpanAkun').click(function (e) {
    e.preventDefault()
    $('body').prepend(`
    <div class="fixed top-0 bottom-0 right-0 left-0 z-50 flex justify-center items-center bg-black bg-opacity-40" id='popupAkun'>
    <div class="hidden opacity-0 duration-700 transition-all p-3 rounded-lg flex items-center" style="background-color: #B1FF66;">
    <img src="/img/icon/check.png" class="h-5 mr-2" style="color: #54AC00;">
    <p class="sm:text-base text-sm font-heading font-bold" style="color: #54AC00;">Akun Berhasil Diperbarui</p>
</div>
    </div>
`)

    $('#popupAkun').children().first().removeClass('hidden')
    setTimeout(function () {
        $('#popupAkun').children().first().removeClass('opacity-0')
    }, 10);
    setTimeout(function () {
        $('#formEditAkunDev').submit()
    }, 700);
})
// akhir js edit akun webservice


//awal js modal hapus di edit profil
$('.hapusModal').click(function () {
    $('body').prepend(`
    <div class="fixed top-0 bottom-0 right-0 left-0 z-50 flex justify-center items-center bg-black bg-opacity-40 font-paragraph" id='formHapus'>
    <div class="hidden opacity-0 duration-700 transition-all bg-gray bg-opacity-0">
        <div class="bg-white rounded-2xl flex flex-col justify-center py-2 sm:px-8 px-3">
            <p class="font-bold sm:text-lg text-base mb-6">Apakah Anda yakin ingin menghapus data ini?</p>
            <div class="text-white flex justify-end">
                <div style="background-color: #D81B01;" class="buttonHapus rounded-2xl  w-20 mr-3 text-sm flex justify-center items-center cursor-pointer py-1">BATAL</div>
                <div style="background-color: #54AC00;" class="rounded-2xl w-20 text-sm flex justify-center items-center cursor-pointer">HAPUS</div>
            </div>
        </div>
    </div>
    </div>
    `)
    $('#formHapus').children().first().removeClass('hidden')
    setTimeout(function () {
        $('#formHapus').children().first().removeClass('opacity-0')
    }, 10);

    $('.buttonHapus').click(function () {
        $('#formHapus').children().first().addClass('opacity-0')
        $('#formHapus').children().first().on('transitionend MSTransitionEnd webkitTransitionEnd oTransitionEnd', function () {
            $('#formHapus').children().first().addClass('hidden')
        });
        setTimeout(function () {
            $('#formHapus').remove()
        }, 400);
    })
})

//akhir js modal hapus di edit profil
