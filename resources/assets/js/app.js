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
        switch (href) {
            case '#customers':
                $('.bubble').addClass('animated fadeInUp').removeClass('hidden');
                break;
            case '#dev':
                for (var i = 0; i < 6; i++)
                    $('.tech li:nth-child(' + i + ') i').addClass('animated fadeInUp').removeClass('hidden');
                break;
            case '#startup':
                $('.car').addClass('animated slideInLeft').removeClass('hidden');
                break;
            case '#usability':
                $('.frontend').addClass('animated fadeIn').removeClass('hidden');
                break;
            case '#devices':
                $('.computers').addClass('animated fadeIn').removeClass('hidden');
                break;
            case '#headhunters':
                var cv = $('.cv');
                cv.addClass('animated fadeIn').removeClass('hidden');
                cv.next().removeClass('col-lg-offset-6');
        }
    });

});