

$(function () {

    $('#logo').hover(
        function () {
            $(this).removeClass('bounceInDown');
            $(this).addClass('animated pulse');
        }, function () {
            $(this).removeClass('animated pulse');
        }
    );

    $('a').smoothScroll();

});