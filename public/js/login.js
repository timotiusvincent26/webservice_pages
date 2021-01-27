$(".input").each(function () {
    $(".input").focus(function () {
        $(this).addClass('border-primary').removeClass('border-gray-400')
        $(this).css("border-width", "3px")
    })
    $(".input").blur(function () {
        $(this).addClass('border-gray-400').removeClass('border-primary')
        $(this).css("border-width", "2px")
    })
});

var arg = true
$("#eye").click(function () {
    if (!arg) {
        $('#eye').addClass('fa-eye-slash').removeClass('fa-eye')
        $('#pass').attr('type', 'password')
        arg = true
    } else {
        $('#eye').addClass('fa-eye').removeClass('fa-eye-slash')
        $('#pass').attr('type', 'text')
        arg = false
    }
})

$("#remember").click(function () {
    if ($("#remember").prev().is(':checked')) {
        $("#remember").prev().attr('checked', false)
    } else {
        $("#remember").prev().attr('checked', true)
    }
})

$(".sso").each(function () {
    $(".sso").hover(function () {
        $(this).children().last().addClass('text-yellow-600').removeClass('text-secondary')
    }, function () {
        $(this).children().last().addClass('text-secondary').removeClass('text-yellow-600')
    });
});
