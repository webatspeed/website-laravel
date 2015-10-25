$(function () {

    // let the logo pulse on hover
    $('#logo').hover(
        function () {
            $(this).removeClass('bounceInDown');
            $(this).addClass('animated pulse');
        }, function () {
            $(this).removeClass('animated pulse');
        }
    );

    // initiate smooth scrolling
    $('a').smoothScroll();

    $('body').scrollspy({
        // activate navigation bar elements on scrolling
        target: '#navbar',
        offset: $(window).height() * 0.4

        // fade in customer bubbles on scrolling in
    }).on('activate.bs.scrollspy', function () {
        var href = $('.nav li.active > a').attr('href');
        if (href == '#customers') {
            $('.bubble').addClass('animated fadeInUp').removeClass('hidden');
        }
    });

});