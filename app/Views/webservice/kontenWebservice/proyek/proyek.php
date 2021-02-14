<?= $this->extend('webservice/layoutWebservice/templateWebserviceLogin.php'); ?>

<?= $this->section('content'); ?>

<div class="lg:mx-36 mx-5 mt-12 w-full">
    <h3 class="font-heading font-bold text-center text-secondary lg:text-6xl md:text-3xl text-2xl">PROYEK</h3>
    <a href="/webservice/buatProyek">
        <div class="flex justify-center md:w-44 w-28 md:px-2 md:py-2 px-1 py-1 lg:mt-12 mt-4 mb-8 rounded-lg border-gray shadow-lg tracking-wider cursor-pointer hover:bg-gray-100">
            <div class="flex items-center justify-center">
                <svg class="text-secondary md:w-8 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                </svg>
                <div class="font-heading font-semibold md:text-base text-xs">Buat Proyek</div>
            </div>
        </div>
    </a>
    <div class="proyek flex justify-between items-center rounded-md border font-paragraph mb-4 md:px-2 md:py-2 px-1 py-1 hover:bg-gray-100 cursor-pointer transition-all">
        <span class="font-paragraph md:text-base text-sm">Judul Proyek : Lorem Ipsum Dolor Sit Amet</span>
        <span class="font-paragraph md:text-base text-sm rounded-full border bg-gray-400 text-white px-3 py-1 md:w-32 w-24 text-center">Menunggu</span>
    </div>
    <div class="proyek flex justify-between items-center rounded-md border font-paragraph mb-4 md:px-2 md:py-2 px-1 py-1 hover:bg-gray-100 cursor-pointer transition-all">
        <span class="font-paragraph md:text-base text-sm">Judul Proyek : Lorem Ipsum Dolor Sit Amet</span>
        <span class="font-paragraph md:text-base text-sm rounded-full border bg-green-400 text-white px-3 py-1 md:w-32 w-24 text-center">Disetujui</span>
    </div>
    <div class="proyek flex justify-between items-center rounded-md border font-paragraph mb-4 md:px-2 md:py-2 px-1 py-1 hover:bg-gray-100 cursor-pointer transition-all">
        <span class="font-paragraph md:text-base text-sm">Judul Proyek : Lorem Ipsum Dolor Sit Amet</span>
        <span class="font-paragraph md:text-base text-sm rounded-full border bg-red-600 text-white px-3 py-1 md:w-32 w-24 text-center">Ditolak</span>
    </div>

</div>

<script>
    $(".proyek").click(function() {
        if (!$(this).hasClass('border-primary')) {
            $(this).addClass('border-primary')
            $(this).css("border-width", "2px")
            $(this).after(`
            <div class="w-11/12 mx-auto mb-4 rounded-b-xl shadow-xl hidden opacity-0 duration-500 transition-all">
        <div class="flex justify-start text-sm">
            <div class="text-white py-1 w-20 text-center mr-1 cursor-pointer transform hover:scale-105 outline-none choosed">TOKEN</div>
            <div class="text-white py-1 w-20 text-center mr-1 cursor-pointer outline-none transform hover:scale-105 notchoose">DETAIL</div>
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
            $(this).next().children().first().hover(function() {
                // alert('ok')
                $(this).next().children().first().children().eq(0).removeAttr('style')
                $(this).next().children().first().children().eq(1).removeAttr('style')
            })
            var $this = $(this);
            $(this).next().removeClass('hidden')
            setTimeout(function() {
                $this.next().removeClass('opacity-0');
            }, 30);


            $(this).next().children().first().children().eq(1).click(function() {
                $(this).removeClass('notchoose').addClass('choosed')
                $(this).prev().removeClass('choosed').addClass('notchoose')

                $(this).parent().next().next().removeClass('hidden')
                $(this).parent().next().addClass('hidden')
            })

            $(this).next().children().first().children().eq(0).click(function() {
                $(this).removeClass('notchoose').addClass('choosed')
                $(this).next().removeClass('choosed').addClass('notchoose')

                $(this).parent().next().next().addClass('hidden')
                $(this).parent().next().removeClass('hidden')
            })

        } else {
            $(this).removeClass('border-primary')
            $(this).css("border-width", "1px")
            // $(this).next().addClass('hidden')

            $(this).next().addClass('opacity-0')
            $(this).next().addClass('hidden')
        }
    })
</script>

<?= $this->endSection(); ?>