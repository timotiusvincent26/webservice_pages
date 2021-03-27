// js ws proyek
$(".proyek").click(function () {
    if (!$(this).hasClass('border-primary')) {
        $(this).addClass('border-primary')
        $(this).css("border-width", "2px")
        $(this).after(`
        <div class="w-11/12 mx-auto mb-4 rounded-b-xl hidden opacity-0 duration-500 transition-all" style="box-shadow: 0 3px 3px 0 rgba(0, 0, 0, 0.1), 0 0px 3px 3px rgba(0, 0, 0, 0.06);;">
            <div class="flex justify-between text-sm">
                <div class="flex">
                    <div class="text-white py-1 w-20 text-center mr-1 cursor-pointer transform hover:scale-105 outline-none choosed">TOKEN</div>
                    <div class="text-white py-1 w-20 text-center mr-1 cursor-pointer outline-none transform hover:scale-105 notchoose">DETAIL</div>
                </div>
                <div class="mr-3 flex items-center">
                    <input type="button" value="HAPUS" class="text-red-500 font-semibold transition-all cursor-pointer outline-none border-none bg-transparent hover:text-red-700">
                </div>
            </div>
            <div id="isiToken" class="sm:mx-3 mx-2">
                <div class="flex mt-3 mb-2">
                    <p class="w-1/4 text-primary text-sm font-bold">Token Pengguna</p>
                    <p class="w-3/4 text-primary text-sm break-all">fafdsfsgdfgdfhgfhs24235gh43y@4gfdhdshgshshsggrgrgrg4y4456547fefgfeggfgf</p>
                </div>
                <div class="flex mb-2">
                    <p class="w-1/4 text-primary text-sm font-bold">Tanggal Disetujui</p>
                    <p class="w-3/4 text-primary text-sm">30 Feruari 2021 - 21.00</p>
                </div>
                <div class="flex pb-4">
                    <p class="w-1/4 text-primary text-sm font-bold">Masa Berlaku</p>
                    <p class="w-3/4 text-primary text-sm">2 Bulan</p>
                </div>
            </div>
            <div class="hidden" id="isiDetail">
                <div class="flex mx-3 mt-3 mb-2">
                    <p class="w-1/4 text-primary text-sm font-bold">Deskripsi</p>
                    <p class="w-3/4 text-justify text-primary text-sm">Berisikan Data yang diisikan saat membuat proyek. Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, iusto id? Natus officiis nemo laborum similique molestiae in labore tenetur nihil. Cum temporibus alias modi ratione est assumenda, commodi possimus?</p>
                </div>
                <div class="flex mx-3 pb-4">
                    <p class="w-1/4 text-primary text-sm font-bold">Cakupan Data</p>
                    <p class="w-3/4 text-justify text-primary text-sm">Menggunakan informasi pribadi</p>
                </div>
            </div>
        </div>
    `)

        var $this = $(this);
        $(this).next().removeClass('hidden')
        setTimeout(function () {
            $this.next().removeClass('opacity-0');
        }, 30);

        $(this).next().children().first().children().eq(1).click(function () {
            $('body').prepend(`
            <div class="fixed top-0 bottom-0 right-0 left-0 z-50 flex justify-center items-center bg-black bg-opacity-40 font-paragraph" id='proyekHapus'>
                <div class="hidden opacity-0 duration-700 transition-all bg-gray bg-opacity-0">
                    <div class="bg-white rounded-2xl flex flex-col justify-center pt-3 pb-4 sm:px-8 px-3">
                        <p class="font-bold sm:text-lg text-base mb-6">Apakah Anda yakin ingin menghapus proyek ini?</p>
                        <div class="text-white flex justify-end">
                            <div class="buttonBatal text-black hover:text-gray-600 font-bold rounded-2xl border border-black hover:border-gray-600 w-20 mr-2 text-sm flex justify-center items-center cursor-pointer py-1 transition-all">BATAL</div>
                            <div class="rounded-2xl w-20 text-sm flex justify-center items-center cursor-pointer hover:bg-red-800 bg-red-600 transition-all">HAPUS</div>
                        </div>
                    </div>
                </div>
            </div>
            `)

            $('#proyekHapus').children().first().removeClass('hidden')
            setTimeout(function () {
                $('#proyekHapus').children().first().removeClass('opacity-0')
            }, 10);
            $('.buttonBatal').click(function () {
                $('#proyekHapus').children().first().addClass('opacity-0')
                $('#proyekHapus').children().first().on('transitionend MSTransitionEnd webkitTransitionEnd oTransitionEnd', function () {
                    $('#proyekHapus').children().first().addClass('hidden')
                });
                setTimeout(function () {
                    $('#proyekHapus').remove()
                }, 400);
            })
            var modal = document.getElementById('proyekHapus')
            $(window).click(function (e) {
                if (e.target === modal) {
                    $('#proyekHapus').children().first().addClass('opacity-0')
                    $('#proyekHapus').children().first().on('transitionend MSTransitionEnd webkitTransitionEnd oTransitionEnd', function () {
                        $('#proyekHapus').children().first().addClass('hidden')
                    });
                    setTimeout(function () {
                        $('#proyekHapus').remove()
                    }, 400);
                }
            })
        })


        $(this).next().children().first().children().first().children().eq(1).click(function () {
            $(this).removeClass('notchoose').addClass('choosed')
            $(this).prev().removeClass('choosed').addClass('notchoose')

            $(this).parent().parent().next().next().removeClass('hidden')
            $(this).parent().parent().next().addClass('hidden')
        })

        $(this).next().children().first().children().first().children().eq(0).click(function () {
            $(this).removeClass('notchoose').addClass('choosed')
            $(this).next().removeClass('choosed').addClass('notchoose')

            $(this).parent().parent().next().next().addClass('hidden')
            $(this).parent().parent().next().removeClass('hidden')
        })

    } else {
        $(this).removeClass('border-primary')
        $(this).css("border-width", "1px")

        $(this).next().addClass('opacity-0')
        $(this).next().addClass('hidden')
    }
})
// js ws proyek