$(document).ready(function (){
    $('.image-in-table-show').hover(function () {
        let src = $(this).attr('src');
        let block = '<div class="show-image"><img class="image-in-show-image-block" src="' + src + '"></div>';

        $('body').append(block);
    });

    $('.image-in-table-show').mouseleave(function () {
        $('.show-image').remove();
    });

    $('.description-in-table').hover(function () {
        let read = $(this).children('span').text();
        if (read != '') {
            let block = '<div class="show-description">' + read + '</div>';
            $('body').append(block);
        }
    });

    $('.description-in-table').mouseleave(function () {
        $('.show-description').remove();
    });

    $('body').on('click','.remove-order', function (){
        let agree = confirm('Удалить заказ?');
        let deleteBlock = $(this).parent();

        if(agree){
            $.ajax({
                method: 'post',
                url: '/delete_order',
                dataType: 'json',
                data: {
                    _token: $(this).data('token'),
                    id: $(this).data('id'),
                },
                success: function () {
                    console.log('OK');
                    deleteBlock.next('hr').remove();
                    deleteBlock.remove();
                },
                error: function (errorThrown) {
                    alert('ERROR');
                    console.log(errorThrown);
                }
            });



        }
    });
});
