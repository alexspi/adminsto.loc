$(function () {

    var casesLeftSlider = new Swiper('.cases__left-swiper', {
        slidesPerView: 1,
        spaceBetween: 30,
        speed: 800,
        navigation: {
            nextEl: '.cases__left-swiper-wrapper .swiper-button-next',
            prevEl: '.cases__left-swiper-wrapper .swiper-button-prev',
        },
        on: {
            slideChange() {
                casesRightSlider.slideToLoop(this.realIndex);
            },
        },
        effect: 'fade',
        fadeEffect: {
            crossFade: true
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
    var casesRightSlider = new Swiper('.cases__right-swiper', {
        slidesPerView: 1,
        speed: 800,
        spaceBetween: 30,
        allowTouchMove: false,
        effect: 'fade',
        fadeEffect: {
            crossFade: true
        },
    });

    $('.header__burger-btn').click(function () {
        if($(this).hasClass('active')) {
            $('html,body').removeClass('fixed');
            $(this).removeClass('active');
            $('.mob-menu').removeClass('opened');
        } else {
            $('html,body').addClass('fixed');
            $(this).addClass('active');
            $('.mob-menu').addClass('opened');
        }
    });

    $('.faq-item').click(function () {
        if($(this).hasClass('active')) {
            $(this).removeClass('active').find('.faq-item__content').slideUp();
        } else {
            $('.faq-item.active').removeClass('active').find('.faq-item__content').slideUp();
            $(this).addClass('active').find('.faq-item__content').slideDown();
        }
    });

    $('.header__nav-link').click(function (e) {
        e.preventDefault();
        $('html,body').animate({scrollTop:$(this.hash).offset().top - 100}, 900);

        $('html, body').removeClass('fixed');
        $('.mob-menu').removeClass('opened');
        $('.header__burger-btn').removeClass('active');
    });

    $('input[type="tel"]').mask('+7 (Z00) 000-00-00', {translation:  {'Z': {pattern: /[9]/, optional: false}}});

});