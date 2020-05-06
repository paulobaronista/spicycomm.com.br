
$(document).ready(function () {
    setTimeout(function () {
        $("#loader").slideUp("slow");
    }, 1000);
    return false;
});

$(document).ready(function () {
    $('.modal').on('hide.bs.modal', function () {
        var memory = $(this).html();
        $(this).html(memory);
    });
});

// Script Carousel
$(document).ready(function () {
    $('.carousel').carousel({
        interval: 10000
    });
});

// Script Scroll OnPage
$(document).ready(function () {
    $(document).on("scroll", onScroll);
    $('.scrollink').on('click', function (e) {
        e.preventDefault();
        $(document).off("scroll");
        $('.scrollink').each(function () {
            $(this).removeClass('active');
        })
        $(this).addClass('active');
        var target = this.hash,
            menu = target;
        $target = $(target);
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top
        }, 500, 'swing', function () {
            window.location.hash = target;
            $(document).on("scroll", onScroll);
        });
    });
});

function onScroll(event) {
    var scrollPos = $(document).scrollTop();
    $('#menuCenter .scrollink').each(function () {
        var currLink = $(this);
        var refElement = $(currLink.attr("href"));
        if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
            $('#menuCenter ul li .scrollink').removeClass("active");
            currLink.addClass("active");
        } else {
            currLink.removeClass("active");
        }
    });
}

$(function () {
    $('.nome').clear();
    $('.email').clear();
    $('.phone').clear();
    $('.msg').clear();

    $('.btn_enviar').on('click', function () {
        var n, e, t, m, s;
        var msg = "";
        n = $('.nome').val();
        e = $('.email').val();
        t = $('.phone').val();
        m = $('.msg').val();
    });

});
