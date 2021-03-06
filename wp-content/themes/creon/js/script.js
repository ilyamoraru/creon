$(document).ready(function() {
   //sliders

    //main slider

    $('.about-slider_date').slick({
        arrows: true,
        dots: false,
        infinite: false,
        fade: true,
        adaptiveHeight: true,
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
        responsive: [
            {
                breakpoint: 1300,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                }
            },
            {
                breakpoint: 441,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
    }
            }
        ]
    });

    $('.structure-slider').slick({
        dots: true,
        arrows: false,
        slidesToScroll: 1,
        slidesToShow: 1,
    });

    $('.green-block5').slick({
       arrows: false,
       dots: true,
       fade: false,
        slidesToShow: 2,
    });

    $('.patent-slider').slick({
       arrows: false,
       dots: true,
       slidesToShow: 3,
       slidesToScroll: 3,
        responsive: [
            {
                breakpoint: 440,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            },
        ]
    });

    $('.post-slider').slick({
        arrows: true,
        dots: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: false,
    });

    if (window.matchMedia("(max-width: 1300px)").matches) {
        $('.corp2-list').slick({
            arrows: false,
            dots: true,
            slidesToShow: 3,
            slidesToScroll: 3,
            responsive: [
                {
                    breakpoint: 440,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                    }
                },
            ]
        })
    }

    if (window.matchMedia("(max-width: 1300px)").matches) {
        $('.partners-slider').slick({
           arrows: false,
           dots: true,
           slidesToShow: 2,
           slidesToScroll: 2,
        });
    };

    //считаем слайды

    var number_slides = $('.post-slider img').length;
    $('.count2').text('0'+number_slides);

    //текущий слайд

    $('.post-slider').on('afterChange', function(event, slick,currentSlide) {
       var number_slide = currentSlide + 1;
       $('.count1').text('0'+number_slide);
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
           $('.mob-toogle-blog').addClass('mob-toogle-blog_up');
           $('.mob-toogle-blog').css('transform', 'translateY(-20vh)');
       } else {
           //up
           $('.header').addClass('header-up');
           $('.header').css('transform', 'translateY(0');
           $('.mob-toogle-blog').removeClass('mob-toogle-blog_up');

           $('.mob-toogle-blog').css('transform', 'translateY(0vh)');
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

    if (window.matchMedia("(max-width: 1300px)").matches) {
        $('.hidden_mob').addClass('hidden-client');
    }

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

    window.addEventListener("keydown", function(evt) {
        if(evt.keyCode === 27) {
            evt.preventDefault();

            $('.boss-modal').removeClass('boss-modal_show');
            $('.part-modal').removeClass('part-modal_show');
            $('html, body').css('overflow','auto');
        };
    });

    //contacts toogle maps

    $('.contacts-item').click(function() {
       $('.contacts-item').removeClass('open-item_cont');
       $('.contacts-item').removeClass('order-100');
       $(this).addClass('open-item_cont');
        if (window.matchMedia("(max-width: 1024px)").matches) {
            $(this).addClass('order-100');
        }
       var number_map = $(this).attr('data-address');
       $('.map').css('display', 'none');
       $('#cont'+number_map+'-map').css('display', 'block');
    });

    // if (window.matchMedia("(max-width: 440px)").matches) {
    //     $('.order-100').click(function() {
    //         $('.contacts-item').addClass('contacts-item_height');
    //     });
    // }

    //validation in blog

    $('#check').click(function() {
        if($('#check').attr('checked')) {
            $('#check').removeAttr('checked');
            $('.submit').attr('disabled','true');
            console.log('off')
        } else {
            $('#check').attr('checked','true');
            $('.submit').removeAttr('disabled');
            console.log('on')
        }
    });

    //переключение на старнице блог

    $('.blog .nav-item').click(function() {
        $('.blog .nav-item').removeClass('this-item');
        $(this).addClass('this-item');

        var number = $(this).attr('data-news');
        $('.block-news').removeClass('block-news_show');
        $('.block-news'+number).addClass('block-news_show');
    });

    //mobile menu

    $('.burger').click(function() {
        $('body, html').css('overflow', 'hidden');
       $('.mobile-menu').addClass('mobile-menu_show');
    });

    $('.close-menu').click(function() {
       $('body, html').css('overflow', 'auto');
       $('.mobile-menu').removeClass('mobile-menu_show');
    });

    $('.mob-toogle-blog select').change(function() {
       var val = $(this).val();
       $('.mob-sec').removeClass('mob-sec_show');
       $('.mob'+val).addClass('mob-sec_show');
    });

});