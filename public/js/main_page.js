$(document).ready(function () {

    $('li').hover(function () {
        $(this).css('opacity', 0.5);
    });

    $('li').mouseleave(function () {
        $(this).css('opacity', 1);
    });

    $(document).on('click', '.read-more-button', function (event) {
        event.preventDefault();
        $('.text-block-for-little-displays').css({'overflow': 'auto', 'height': '80%'});
        let lang = $(this).data('lang');
        if (lang == 'ru') {
            var block = '<a class="d-block d-md-none d-lg-none read-less-button" ' +
                'href="">Свернуть->>></a>';
        }
        if (lang == 'ua') {
            var block = '<a class="d-block d-md-none d-lg-none read-less-button" ' +
                'href="">Згорнути->>></a>';
        }

        $('.text-block-for-little-displays').append(block);
        $('.read-less-button').data('lang', lang);
        $(this).remove();
    });

    $(document).on('click', '.read-less-button', function (event) {
        event.preventDefault();
        $('.text-block-for-little-displays').css({'overflow': 'hidden', 'height': '135px'});
        let lang = $(this).data('lang');
        if (lang == 'ru') {
            var block = '<a class="d-block d-md-none d-lg-none read-more-button" ' +
                'href="">Читать больше->>></a>';
        }
        if (lang == 'ua') {
            var block = '<a class="d-block d-md-none d-lg-none read-more-button" ' +
                'href="">Читати більше->>></a>';
        }

        $('.text-block-for-little-displays').after(block);
        $('.read-more-button').data('lang', lang);
        $(this).remove();
    });

});
