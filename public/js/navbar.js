// awal js buat scroll navbar interaktif
var lastScroll = 0;
$(window).scroll(function (event) {
    var st = $(this).scrollTop();
    if (st > lastScroll) {
        $('.navbar').addClass('invisible');
    } else {
        $('.navbar').removeClass('invisible');
    }
    lastScroll = st;
});
// akhir js buat scroll navbar interaktif

// doropdown navbar mobile
$('#hamburger').click(function () {
    if ($('#menu').hasClass('hidden')) {
        $('#menu').removeClass('hidden');
    } else {
        $('#menu').addClass('hidden');
    }
});

$('#hamburgerApi').click(function () {
    if ($('#menuApi').hasClass('hidden')) {
        $('#menuApi').removeClass('hidden')
        $('#hamburgerApi').html(`
        <svg class="text-white sm:w-8 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        `)
    } else {
        $('#menuApi').addClass('hidden')
        $('#hamburgerApi').html(`
        <svg class="sm:w-8 w-7 fill-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
        `)
    }
});

$('#inputCari').click(function () {
    $('#tombolCari').addClass('hidden');
})

// doropdown navbar mobile

// awal dropdown galeri mobile
$('#galeri').click(function () {
    if ($('#listGaleri').hasClass('hidden')) {
        $('#upGaleri').removeClass('hidden');
        $('#downGaleri').addClass('hidden');
        $('#listGaleri').removeClass('hidden');
    } else {
        $('#upGaleri').addClass('hidden');
        $('#downGaleri').removeClass('hidden');
        $('#listGaleri').addClass('hidden');
    }
});
// akhir dropdown galeri mobile
$('#hamburgerEditProfil').click(function () {
    if ($('#navEdit').hasClass('hidden')) {
        $('#navEdit').removeClass('hidden')
        if ($(window).width() < 640) {
            $('#hamburgerEditProfil').removeClass('translate-x-0.5').addClass('-translate-x-1')
        }
        // $('#navEdit').parent().addClass('w-52')
        $('#navEdit').parent().removeClass('sm:-left-40 -left-44').addClass('left-0')
        $('#hamburgerEditProfil').html(`
            <svg class="text-white sm:w-8 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        `)
    } else {
        $('#navEdit').addClass('hidden')
        $('#navEdit').parent().removeClass('left-0').addClass('sm:-left-40 -left-44')
        if ($(window).width() < 640) {
            $('#hamburgerEditProfil').removeClass('-translate-x-1').addClass('translate-x-0.5')
        }
        // $('#navEdit').parent().removeClass('w-52')
        $('#hamburgerEditProfil').html(`
        <svg class="sm:w-8 w-7 fill-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
        `)
    }
});
