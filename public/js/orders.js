$(document).ready(function () {

    (function () {
        let x = $('.decor').width();
        x = x - 65;
        $('.get-image-here').width(x);
    })();

    $(window).resize(function () {
        let x = $('.decor').width();
        x = x - 65;
        $('.get-image-here').width(x);
    });

    $(document).on('click', '.add-more-image-input', function () {
        let id = $(this).attr('id');
        document.getElementById(id).addEventListener('change', handleNewFileSelect, false);
    });

    function handleNewFileSelect(evt) {

        var file = evt.target.files; // FileList object

        for (let key in file) {
            if (key == 'length') {
                return;
            }
            let f = file[key];
            let name = file[key].name;
            if (!f.type.match('image.*')) {
                alert("Image only please....");
            }
            var reader = new FileReader();
            reader.onload = (function (theFile) {
                return function (e) {
                    let span = document.createElement('span');
                    span.innerHTML = [
                        '<div class="small-image-in-orders-block"><img class="small-image-in-orders" title="', escape(theFile.name), '" src="', e.target.result, '" /></div>'
                    ].join('');

                    let blockName = '<span class="header-2-text">' + name +'</span><br>';
                    $('.get-image-here').append(span);
                    $('.get-mob-image-here').append(blockName);
                };
            })(f);


            reader.readAsDataURL(f);
        }
    }
});
