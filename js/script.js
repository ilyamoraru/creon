$(document).ready(function() {
   //sliders

    //main slider

    $('.main-slider').slick({
        arrows: false,
        dots: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: true,
    });

   //header scroll

    //for desctop

    $(window).bind('mousewheel', function(evt) {
       if(evt.originalEvent.wheelDelta >= 0) {
           //up
           $('.header').addClass('header-up');
           $('.header').css('transform', 'translateY(0');
       } else {
           //down
           $('.header').removeClass('header-up');
           $('.header').css('transform', 'translateY(-20vh');
       }

        //white bg for header in top of page

        if($(window).scrollTop() <= 70) {
            $('.header').removeClass('header-up');
        }
    });

    //for touch devices

    var lastScrollTop  = 0;
    $(window).scroll(function() {
       var st = $(this).scrollTop();
       if(st > lastScrollTop) {
           //down
           $('.header').removeClass('header-up');
           $('.header').css('transform', 'translateY(-20vh');
       } else {
           //up
           $('.header').addClass('header-up');
           $('.header').css('transform', 'translateY(0');
       }
       lastScrollTop = st;

        //white bg for header in top of page
       if($(window).scrollTop() <= 70) {
           $('.header').removeClass('header-up');
       }
    });

    //main description in slides animation

    $('.open-btn').click(function() {
        var container = $(this).parent().parent().parent();

        container.addClass('main-slide_show');
        container.find('.left-anim').addClass('left-anim_open');
        container.find('.center-anim').addClass('center-anim_show');
        container.find('.promo-open').addClass('promo-open_show');
        container.find('.main-preview').addClass('main-preview_show');
    });

    $('.back-btn').click(function() {
        $('.main-slide_show').removeClass('main-slide_show');
        $('.left-anim').removeClass('left-anim_open');
        $('.center-anim').removeClass('center-anim_show');
        $('.promo-open').removeClass('promo-open_show');
        $('.main-preview').removeClass('main-preview_show');
    });


    //open items in corporate

    $('.corp-item').click(function() {


       if($(this).hasClass('open-item')) {
           $(this).removeClass('open-item');
           $(this).find('.show-btn').removeClass('show-btn_open');
       } else if(!$(this).hasClass('open-item')){
           $(this).addClass('open-item');
           $(this).find('.show-btn').addClass('show-btn_open');
       }
    });

});