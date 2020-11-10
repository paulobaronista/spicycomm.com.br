
$(document).ready(function () {
    $('.carousel').on('slide.bs.carousel', function () {

        setTimeout(function () {
            $('#chamada').attr('src', 'https://www.spicycomm.com.br/assets/images/chamada-ideias.png');
        }, 200);

        var img = [
            'https://www.spicycomm.com.br/assets/images/chamada-estratégia.png',
            'https://www.spicycomm.com.br/assets/images/chamada-expertise.png',
            'https://www.spicycomm.com.br/assets/images/chamada-resultados.png'
        ],
            i = 0;

        setInterval(function () {
            $('#chamada').attr('src', img[i]);
            i++;
        }, 1000);
    });
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
        interval: 4200
    });
});
