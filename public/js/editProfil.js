// awal js edit pendidikan
$(".sort").click(function () {
    if (!$(this).children().eq(1).hasClass('invisible')) {
        $(this).children().first().removeClass('invisible')
        $(this).children().first().removeClass('text-gray-400').addClass('text-primary')
        $(this).children().eq(1).addClass('invisible')
    } else {
        $(this).children().eq(1).removeClass('invisible')
        $(this).children().first().addClass('invisible')
        $(this).children().eq(1).removeClass('text-gray-400').addClass('text-primary')
    }
})

$('.editPendidikan').click(function () {
    $('body').prepend(`
    <div class="fixed top-0 bottom-0 right-0 left-0 z-50 flex justify-center items-center bg-black bg-opacity-40" id='formEditPendidikan'>
        <div class="hidden opacity-0 duration-700 transition-all w-1/2 bg-gray bg-opacity-0"> 
        <div class="bg-primary py-4 px-6 rounded-t-2xl flex items-center justify-between text-secondary text-2xl">
            <p class="font-bold">Edit Pendidikan</p>
            <i class="closePendidikan fas fa-times cursor-pointer" ></i>
        </div>
        <form action="" method="post" class="flex flex-col bg-gray-100 px-12 rounded-b-2xl">
            <label for="editJenjang" class="text-primary text-sm mt-4">Jenjang :</label>
            <input type="text" placeholder="Nama Jenjang" class="px-4 text-gray-400 text-sm border-2 rounded-lg border-gray-400 outline-none py-1 mt-2" name="editJenjang" id="editJenjang">
            <label for="editUniversitas" class="text-primary text-sm mt-3">Universitas :</label>
            <input type="text" placeholder="Nama Universitas" class="px-4 text-gray-400 text-sm border-2 rounded-lg border-gray-400 outline-none py-1 mt-2" name="editUniversitas" id="editUniversitas">
            <label for="editStudi" class="text-primary text-sm mt-3">Program Studi :</label>
            <input type="text" placeholder="Nama Program Studi" class="px-4 text-gray-400 text-sm border-2 rounded-lg border-gray-400 outline-none py-1 mt-2" name="editStudi" id="editStudi">
            <div class="flex">
                <div class="flex flex-col mr-8 w-1/3">
                    <label for="editMasuk" class="text-primary text-sm mt-3">Tahun Masuk :</label>
                    <input type="date" placeholder="2021" class="cursor-pointer px-4 text-gray-400 text-sm border-2 rounded-lg border-gray-400 outline-none py-1 mt-2" name="editMasuk" id="editMasuk">
                </div>
                <div class="flex flex-col w-1/3">
                    <label for="editLulus" class="text-primary text-sm mt-3">Tahun Lulus :</label>
                    <input type="date" placeholder="2021" class="cursor-pointer px-4 text-gray-400 text-sm border-2 rounded-lg border-gray-400 outline-none py-1 mt-2" name="editLulus" id="editLulus">
                </div>
            </div>
            <label for="editTulisan" class="text-primary text-sm mt-3">Judul Tulisan</label>
            <textarea name="editTulisan" id="editTulisan" rows="2" class="px-4 text-gray-400 text-sm border-2 rounded-lg border-gray-400 outline-none py-1 mt-2 resize-none" placeholder="Gadget Paling Top Untuk Digunakan Sehari-Hari"></textarea>
            <div class="flex justify-end my-8">
                <input type="submit" value="SIMPAN" class="bg-secondary text-white rounded-full w-24 py-0.5 text-center cursor-pointer border-secondary border-2 hover:text-secondary hover:bg-white hover:border-opacity-70 transition-colors duration-300 text-sm mr-4 outline-none">
                <input type="button" value="KEMBALI" class="closePendidikan bg-secondary text-white rounded-full w-24 py-0.5 text-center cursor-pointer border-secondary border-2 hover:text-secondary hover:bg-white hover:border-opacity-70 transition-colors duration-300 text-sm outline-none" id='backPendidikan'>
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
            <p class="sm:text-base text-sm font-bold" style="color: #54AC00;">Pendidikan Berhasil Disimpan</p>
        </div>
        `)
        $('#formEditPendidikan').children().first().removeClass('hidden')
        setTimeout(function () {
            $('#formEditPendidikan').children().first().removeClass('opacity-0')
        }, 10);
        setTimeout(function () {
            $('#formEditPendidikan').children().eq(1).children().eq(1).submit()
        }, 800);
    })

})

// akhir js edit pendidikan


// awal js edit prestasi
$('.editPrestasi').click(function () {
    $('body').prepend(`
    <div class="fixed top-0 bottom-0 right-0 left-0 z-50 flex justify-center items-center bg-black bg-opacity-40" id='formEditPrestasi'>
        <div class="hidden opacity-0 duration-700 transition-all w-1/2 bg-gray bg-opacity-0">
        <div class="bg-primary py-4 px-6 rounded-t-2xl flex items-center justify-between text-secondary text-2xl">
            <p class="font-bold">Edit Prestasi</p>
            <i class="closePrestasi fas fa-times cursor-pointer"></i>
        </div>
        <form action="" method="post" class="flex flex-col bg-gray-100 px-12 rounded-b-2xl">
            <label for="editJenjang" class="text-primary text-sm mt-4">Nama Prestasi :</label>
            <input type="text" placeholder="Nama Prestasi" class="px-4 text-gray-400 text-sm border-2 rounded-lg border-gray-400 outline-none py-1 mt-2" name="editJenjang" id="editJenjang">
            <label for="editMasuk" class="text-primary text-sm mt-3">Tahun Masuk :</label>
            <input type="date" placeholder="2021" class="w-2/5 cursor-pointer px-4 text-gray-400 text-sm border-2 rounded-lg border-gray-400 outline-none py-1 mt-2" name="editMasuk" id="editMasuk">
            <div class="flex justify-end my-8">
                <input type="submit" value="SIMPAN" class="bg-secondary text-white rounded-full w-24 py-0.5 text-center cursor-pointer border-secondary border-2 hover:text-secondary hover:bg-white hover:border-opacity-70 transition-colors duration-300 text-sm mr-4 outline-none">
                <input type="button" value="KEMBALI" class="closePrestasi bg-secondary text-white rounded-full w-24 py-0.5 text-center cursor-pointer border-secondary border-2 hover:text-secondary hover:bg-white hover:border-opacity-70 transition-colors duration-300 text-sm outline-none" id='backPrestasi'>
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
            <p class="sm:text-base text-sm font-bold" style="color: #54AC00;">Prestasi Berhasil Disimpan</p>
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
// akhir js edit prestasi