$(document).ready(function(){

    $('li').hover(function(){
        $(this).css('opacity', 0.5);
    });

    $('li').mouseleave(function(){
        $(this).css('opacity', 1);
    });
});
