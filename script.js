var $window = $(window);
var maxDiff = Math.round($window.width() * 0.2);
var scrollDiff = 300;

console.log(maxDiff);
var $moving = null;

$window.scroll(function () {
    console.log();

    var scroll = $window.scrollTop();

    var active = Math.floor(scroll / maxDiff);

    console.log(scroll, active);

    $('.block-floor').removeClass('top bottom');
    if(active > 0){
        $('.block-floor').first().addClass('top');
        $('.block-floor').eq(active).addClass('bottom');
    }

    // var diff = Math.round($window.scrollTop() % maxDiff);
    //
    // // console.log(scroll, (scroll % maxDiff ), (6 - active), (5 - active));
    //
    //
    // if (active < 5) {
    //     $('.block-floor').removeAttr('style');
    //
    //     $moving = $('.block-floor').eq((5 - active));
    //
    //     var margin = Math.round(parseInt($moving.css('marginTop')));
    //
    //     $moving.css({
    //         'marginTop': (margin - diff) + 'px'
    //     });
    //
    //     $moving = $('.block-floor').eq((6 - active));
    //     $moving.css({
    //         'marginTop': (margin - (maxDiff - diff)) + 'px'
    //     });
    // }

});