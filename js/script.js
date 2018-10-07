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

    $('.about-slider_date').slick({
        arrows: true,
        dots: false,
        infinite: false,
        fade: true,
    });

    //nav in about page dates

    $('.dots-cont button').click(function() {
        $('.dots-cont button').removeClass('active-btn');
        $(this).addClass('active-btn');
        var number_slide = $(this).attr('data-slide');

        $('.about-slider_date').slick('slickGoTo', number_slide);
    });

    $('.about-slider_date').on('afterChange', function(event, slick, currentSlide, nextSlide) {
        $('.dots-cont button').removeClass('active-btn');
       var number_slide = currentSlide;
       $('.date'+number_slide).addClass('active-btn');
    });

    $('.bosses-slider').slick({
        dots: true,
        arrows: false,
        slidesToShow: 4,
        slidesToScroll: 4,
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

    //считаем колиество постов на about

    var length_posts = $('.hidden-client').length;

    $('.showmore-client span').html(length_posts);

    $('.showmore-client').click(function() {
       $(this).hide();
       $('.hidden-client').removeClass('hidden-client');
    });

    //show boss modal

    $('.boss-slide').click(function() {
       var boss_order = $(this).attr('data-boss');
       $('html, body').css('overflow', 'hidden');
       $('.boss'+boss_order+'-modal').addClass('boss-modal_show');
    });

    //show partners modal
    $('.partner-slide').click(function() {
       var part_order = $(this).attr('data-partner');
        $('html, body').css('overflow', 'hidden');
       $('.part'+part_order).addClass('part-modal_show');
    });

    //close modals

    $('.close-modal').click(function() {
        $('html, body').css('overflow', 'auto');
       $('.boss-modal').removeClass('boss-modal_show');
        $('.part-modal').removeClass('part-modal_show');
    });





});