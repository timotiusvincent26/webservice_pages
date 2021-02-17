// awal js buat scroll navbar interaktif

var y = null;
var tinggiLayar = $(window).height();
var tinggiNavbar = $('.navbar').height();
var tinggiMenu = $('.nav-menu').height();
var lastScroll = $(window).scrollTop();;
var batasBawahLayar = 0;

$(window).scroll(function(event){
    var st = $(this).scrollTop();
    if (st > lastScroll){
        $('.navbar').addClass('invisible');
    } else {
        $('.navbar').removeClass('invisible');
    }
    lastScroll = st;

    if(lastScroll > tinggiNavbar){
        $( '.navbar' ).mouseout(function() {
            $('.navbar').addClass('invisible');
        });
    } else {
        $( '.navbar' ).mouseout(function() {
            $('.navbar').removeClass('invisible');
        });
    }
});

$(window).resize(function() {
    lastScroll = $(window).scrollTop();;
});

$( '.menuGaleri' ).mouseover(function() {
    $('.navbar').removeClass('invisible');
});

$( '.menuGaleri' ).mouseout(function() {
    $('.navbar').addClass('invisible');
});

$('.menuWebService').mouseover(function () {
    $('.navbar').removeClass('invisible');
});

$('.menuWebService').mouseout(function () {
    $('.navbar').addClass('invisible');
});

window.addEventListener('mousemove', onMouseUpdate, false);
window.addEventListener('mouseenter', onMouseUpdate, false);

function onMouseUpdate(e) {
    y = e.pageY;
    // kalo mouse nya kena navbar bakal keliatan
    // kendala ga bisa dikecilin wilayah nya karena ga bisa diklik nanti
    if(y <= (lastScroll + tinggiNavbar)){
        $('.navbar').removeClass('invisible');  
    }
}

function getMouseY() {
  return y;
}
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

$('.editTutup').click(function () {
    if (window.matchMedia('(min-width: 768px)').matches) {
        $('.layoutEdit').removeClass('lg:w-1/4 md:w-1/5 w-1/2').addClass('lg:w-16 md:w-14 sm:w-16 w-10')
        $('.layoutEdit').next().removeClass('lg:w-3/4 md:w-4/5')
        $('.navEdit').prev().removeClass('md:hidden hidden')
        $('.navEdit').removeClass('md:block').addClass('hidden')
        $('.editTutup').html(`
        <svg class="lg:w-10 md:w-8 sm:w-7 w-6 cursor-pointer fill-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
    </svg> 
        `)
        // logo hamburger
    } else {
        $('.layoutEdit').removeClass('w-1/2').addClass('sm:w-16 w-10')
        $('.navEdit').prev().removeClass('hidden')
        $('.navEdit').addClass('hidden')
    }
});

$('.navEdit').prev().click(function () {
    if (window.matchMedia('(min-width: 768px)').matches) {
        $('.layoutEdit').removeClass('w-1/2 lg:w-16 md:w-14').addClass('lg:w-1/4 md:w-1/5 sm:w-16 w-10')
        $('.layoutEdit').next().addClass('lg:w-3/4 md:w-4/5')
        if ($('.navEdit').prev().hasClass('md:block')) {
            $('.navEdit').prev().addClass('md:hidden').removeClass('md:block hidden')
        } else {
            $('.navEdit').prev().addClass('md:hidden')
        }
        setTimeout(() => {
            if ($('.navEdit').hasClass('md:hidden')) {
                $('.navEdit').removeClass('md:hidden block').addClass('md:block hidden')
            } else {
                $('.navEdit').addClass('md:block')
            }
        }, 300);
        $('.editTutup').html(`
    <svg class="lg:w-10 md:w-8 sm:w-7 w-6 fill-current cursor-pointer" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
    </svg>
    `)
        // logo cross
    } else {
        $('.layoutEdit').removeClass('sm:w-16 w-10').addClass('w-1/2')
        if ($('.navEdit').prev().hasClass('md:block')) {
            $('.navEdit').prev().removeClass('md:block').addClass('md:block hidden')
        } else {
            $('.navEdit').prev().addClass('hidden md:block')
        }
        setTimeout(() => {
            if ($('.navEdit').hasClass('md:block')) {
                $('.navEdit').removeClass('hidden')
            } else {
                $('.navEdit').removeClass('hidden').addClass('md:hidden block')
            }
        }, 200);
        $('.editTutup').html(`
        <svg class="lg:w-10 md:w-8 sm:w-7 w-6 fill-current cursor-pointer" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
        `)
        // logo cross

    }
});

//nav mobile webservice
$('#navmobile').click(function () {
    $('#navmobile ul').toggleClass('hidden')
});
