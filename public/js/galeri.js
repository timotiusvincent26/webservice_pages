// awal js unggah foto
$('.unggahFoto').click(function () {
    $('body').prepend(`
    <div class="fixed top-0 bottom-0 right-0 left-0 z-50 flex justify-center items-center bg-black bg-opacity-40 font-paragraph" id='formEditPendidikan'>
        <div class="hidden opacity-0 duration-700 transition-all xl:w-1/2 lg:w-7/12 md:w-2/3 sm:w-3/4 w-11/12 bg-gray bg-opacity-0">
            <div class="bg-primary py-4 px-6 rounded-t-2xl flex items-center justify-between text-secondary text-2xl">
                <p class="font-heading font-bold">Unggah Foto</p>
                <svg class="closePendidikan lg:w-10 md:w-8 sm:w-7 w-6 fill-current cursor-pointer" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
            </div>
            <form action="" method="post" class="flex flex-col bg-gray-100 sm:px-12 px-4 rounded-b-2xl text-sm">
                <div class="flex mt-5">
                    <div class="flex flex-col">
                    <input type="button" value="Pilih File" class="closePendidikan bg-secondary text-white rounded-full w-24 py-1 text-center cursor-pointer hover:bg-secondaryhover transition-colors duration-300 text-sm mr-4 outline-none" id='backPendidikan'>
                    </div>
                    <div class="flex flex-col justify-center">
                        <p class="font-heading text-primary text-xs">Kenangan.jpg</p>
                    </div>
                </div>
                <label for="editJenjang" class="text-primary font-medium mt-2">Album Foto:</label>
                <select name="cars" id="cars" class="inputForm">
                    <option label="pilih album foto:">
                    <option value="album1">Album Foto 1</option>
                    <option value="album2">Album Foto 2</option>
                    </option>
                </select>
                <label for="editTulisan" class="text-primary font-medium">*Deskripsi</label>
                <textarea name="editTulisan" id="editTulisan" rows="2" class="inputForm resize-none" placeholder="Penggunaan Jutsu Air dalam Mengatasi Permasalahan Banjir yang Sering Terjadi di Wilayah Pemukiman Rawan Longsor" required></textarea>
                <label for="editUniversitas" class="text-primary font-medium">*Angkatan :</label>
                <input type="number" min="1" max="63" step="1" value="60" size="6" class="inputForm" required>
                <label for="editStudi" class="text-primary font-medium">Tags :</label>
                <select name="cars" id="cars" class="inputForm">
                    <option value="album1">Album Foto 1</option>
                    <option value="album2">Album Foto 2</option>
                    </option>
                </select>
                <div class="flex justify-end my-4">
                    <input type="button" value="BATAL" class="closePendidikan bg-secondary text-white rounded-full w-24 py-1 text-center cursor-pointer hover:bg-secondaryhover transition-colors duration-300 text-sm mr-4 outline-none" id='backPendidikan'>
                    <input type="submit" value="UNGGAH" class="bg-secondary text-white rounded-full w-24 py-1 text-center cursor-pointer hover:bg-secondaryhover transition-colors duration-300 text-sm outline-none">
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

    var modal = document.getElementById('formEditPendidikan')
    $(window).click(function (e) {
        if (e.target === modal) {
            $('#formEditPendidikan').children().first().addClass('opacity-0')
            $('#formEditPendidikan').children().first().on('transitionend MSTransitionEnd webkitTransitionEnd oTransitionEnd', function () {
                $('#formEditPendidikan').children().first().addClass('hidden')
            });
            setTimeout(function () {
                $('#formEditPendidikan').remove()
            }, 400);
        }
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

//Akhir Unggah Foto

//Awal Unggah Video

function tutupFormUnggahVideo() {
    $('#formUnggahVideo').children().first().addClass('opacity-0')
    $('#formUnggahVideo').children().first().on('transitionend MSTransitionEnd webkitTransitionEnd oTransitionEnd', function () {
        $('#formUnggahVideo').children().first().addClass('hidden')
    });
    setTimeout(function () {
        $('#formUnggahVideo').remove()
    }, 400);
}

$('.unggahVideo').click(function () {
    $('body').prepend(`
    <div class="fixed top-0 bottom-0 right-0 left-0 z-50 flex justify-center items-center bg-black bg-opacity-40 font-paragraph" id='formUnggahVideo'>
        <div class="hidden opacity-0 duration-700 transition-all xl:w-1/2 lg:w-7/12 md:w-2/3 sm:w-3/4 w-11/12 bg-gray bg-opacity-0">
            <div class="bg-primary py-4 px-6 rounded-t-2xl flex items-center justify-between text-secondary text-2xl">
                <p class="font-heading font-bold">Unggah Video</p>
                <svg class="closeFormUnggahVideo lg:w-10 md:w-8 sm:w-7 w-6 fill-current cursor-pointer" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </div>
            <form action="" method="post" class="flex flex-col bg-gray-100 sm:px-12 px-4 rounded-b-2xl text-sm">
                <label for="linkVideo" class="text-primary font-medium mt-8">Link Video Youtube</label>
                <input type="text" placeholder="Link video" class="inputForm" id='backPendidikan' required>

                <label for="albumVideo" class="text-primary font-medium mt-4">Album Video :</label>
                <select name="albumVideo" id="albumVideo" class="inputForm" value="album0">
                    <option class="text-gray-500" value="album0">Pilih Album Video</option>
                    <option value="album1">Album Foto 1</option>
                    <option value="album2">Album Foto 2</option>
                </select>
                <div class="flex justify-end my-4">
                    <input type="button" value="BATAL" class="closeFormUnggahVideo bg-secondary text-white rounded-full w-24 py-1 text-center cursor-pointer hover:bg-secondaryhover transition-colors duration-300 text-sm mr-4 outline-none" id='backUnggahVideo'>
                    <input type="submit" value="UNGGAH" class="submitUnggahVideo bg-secondary text-white rounded-full w-24 py-1 text-center cursor-pointer hover:bg-secondaryhover transition-colors duration-300 text-sm outline-none">
                </div>

            </form>

        </div>
    </div>
`)

    $('#formUnggahVideo').children().first().removeClass('hidden')
    setTimeout(function () {
        $('#formUnggahVideo').children().first().removeClass('opacity-0')
    }, 10);

    $('.closeFormUnggahVideo').click(function () {
        tutupFormUnggahVideo();
    })

    var modal = document.getElementById('formUnggahVideo')
    $(window).click(function (e) {
        if (e.target === modal) {
            tutupFormUnggahVideo();
        }
    })

    $('#backUnggahVideo').click(function (e) {
        e.preventDefault()
        $('#formUnggahVideo').children().first().addClass('hidden')
        $('#formUnggahVideo').children().first().removeClass('hidden')
        setTimeout(function () {
            $('#formUnggahVideo').children().first().removeClass('opacity-0')
        }, 10);
        setTimeout(function () {
            $('#formUnggahVideo').children().eq(1).children().eq(1).submit()
        }, 700);
    })

})

//Awal apabila Unggah Video Sukses
function suksesUnggahVideo () {
    
    tutupFormUnggahVideo();

    $('body').prepend(`
    <div class="fixed top-0 bottom-0 right-0 left-0 z-50 flex justify-center items-center bg-black bg-opacity-40 font-paragraph" id='suksesUnggahVideo'>
        <div class="hidden opacity-0 duration-700 transition-all lg:w-1/3 md:w-2/3 sm:w-3/4 w-11/12 bg-gray bg-opacity-0">
            <div class="flex flex-col items-center bg-white py-8 rounded-2xl shadow-md">
                <svg class="h-20 w-20 bg-primary text-white rounded-full mb-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                </svg>
                <p class="sm:text-base text-sm font-heading font-bold text-primary mb-2">Video Anda Berhasil Diunggah</p>
                <input type="button" value="OKE" class="closeSuksesUnggahVideo bg-secondary text-white rounded-full w-24 py-1 text-center cursor-pointer hover:bg-secondaryhover transition-colors duration-300 text-sm mr-4 outline-none" id='backUnggahFoto'>

            </div>
        </div>
    </div>
`)

    $('#suksesUnggahVideo').children().first().removeClass('hidden')
    setTimeout(function () {
        $('#suksesUnggahVideo').children().first().removeClass('opacity-0')
    }, 10);

    $('.closeSuksesUnggahVideo').click(function () {
        $('#suksesUnggahVideo').children().first().addClass('opacity-0')
        $('#suksesUnggahVideo').children().first().on('transitionend MSTransitionEnd webkitTransitionEnd oTransitionEnd', function () {
            $('#suksesUnggahVideo').children().first().addClass('hidden')
        });
        setTimeout(function () {
            $('#suksesUnggahVideo').remove()
        }, 400);
    })

    var modal = document.getElementById('suksesUnggahVideo')
    $(window).click(function (e) {
        if (e.target === modal) {
            $('#suksesUnggahVideo').children().first().addClass('opacity-0')
            $('#suksesUnggahVideo').children().first().on('transitionend MSTransitionEnd webkitTransitionEnd oTransitionEnd', function () {
                $('#suksesUnggahVideo').children().first().addClass('hidden')
            });
            setTimeout(function () {
                $('#suksesUnggahVideo').remove()
            }, 400);
        }
    })

}
//Akhir apabila Unggah Video Sukses

//Akhir Unggah Video


