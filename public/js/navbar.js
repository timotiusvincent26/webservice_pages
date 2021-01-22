$('#hamburger').click(function() {
    if($('#menu').hasClass('hidden')){
        $('#menu').removeClass('hidden');
    } else {
        $('#menu').addClass('hidden');
    }
  });

  $('#inputCari').click(function(){
    $('#tombolCari').addClass('hidden');
  })