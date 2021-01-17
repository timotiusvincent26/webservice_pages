var lastScroll = 0;
$(window).scroll(function(event){
    var st = $(this).scrollTop();
    if (st > lastScroll){
        $('#navbar').addClass('invisible');
    } else {
        $('#navbar').removeClass('invisible');
    }
    lastScroll = st;
});