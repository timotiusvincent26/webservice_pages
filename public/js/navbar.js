// awal js buat scroll navbar interaktif
var lastScroll = 0;
$(window).scroll(function(event){
    var st = $(this).scrollTop();
    if (st > lastScroll){
        $('.navbar').addClass('invisible');
    } else {
        $('.navbar').removeClass('invisible');
    }
    lastScroll = st;
});
// akhir js buat scroll navbar interaktif

// doropdown navbar mobile
$('#hamburger').click(function() {
    if($('#menu').hasClass('hidden')){
        $('#menu').removeClass('hidden');
    } else {
        $('#menu').addClass('hidden');
    }
  });

$('#hamburgerApi').click(function () {
    if ($('#menuApi').hasClass('hidden')) {
        $('#menuApi').removeClass('hidden');
    } else {
        $('#menuApi').addClass('hidden');
    }
});

  $('#inputCari').click(function(){
    $('#tombolCari').addClass('hidden');
  })

// doropdown navbar mobile

// awal dropdown galeri mobile
$('#galeri').click(function() {
    if($('#listGaleri').hasClass('hidden')){
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
