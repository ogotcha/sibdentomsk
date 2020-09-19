jQuery(document).ready(function($) {

    $('.sidebar-dropdown').on('click', function() {
        $('.sidebar-address__text_hide').slideToggle();
        $('.sidebar-address__arrow').toggleClass('arrow_up');
    });


    // end дропдаун на главной странице


    // бургер меню

    $(".navbar-menu").on("click", function() {
        $('.navbar-menu span:nth-child(1)').toggleClass('navbar-menu__first');
        $('.navbar-menu span:nth-child(2)').toggleClass('navbar-menu__middle');
        $('.navbar-menu span:nth-child(3)').toggleClass('navbar-menu__last');
        $(".sidebar").slideToggle('slow');
    });

    // end бургер меню

    // дропдаун на странице с ценами

    if ((screen.width < 991)) {
        $('.price-header__top').on('click', function() {
            $('.price-header').slideToggle().css({ 'display': 'flex' });
            $('.price-header__arrow').toggleClass('price-header__arrow_up');
        });
        $('.price-header').on('click', function() {
            $('.price-header').slideToggle();
            $('.price-header__arrow').toggleClass('price-header__arrow_up');
        });
    }

    // end дропдаун на странице с ценами

    // модальное окно

    // let modalBtn = document.querySelectorAll('.btn'),
    //     overlay = document.querySelector('.overlay'),
    //     close = document.querySelector('.popup__close');

    // for (let i = 0; i < modalBtn.length; i++) {
    //     modalBtn[i].addEventListener('click', () => {
    //         overlay.style.display = 'block';
    //         // document.body.style.overflow = 'hidden';
    //     });
    // }

    // close.addEventListener('click', () => {
    //     overlay.style.display = 'none';
    //     document.body.style.overflow = '';
    // });

    // end модальное окно


    // слайдер на главной (отзывы)


    $('.reviews-slider').slick({
        dots: true,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 6000,
        dotsClass: 'reviews-slider__dot'
    });



    //  end слайдер на главной (отзывы)


    // слайдер услуги

    $('.services-slider').slick({
        dots: false,
        infinite: true,
        prevArrow: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        nextArrow: '<img class="services-slider__next-arrow" src="https://sibdentomsk.ru/wp-content/themes/sibdent/img/services/service-right.svg">',
        responsive: [{
                breakpoint: 1320,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    prevArrow: true,
                    prevArrow: '<img class="services-slider__prev-arrow" src="https://sibdentomsk.ru/wp-content/themes/sibdent/img/services/service-left.svg">',
                }
            },
            {
                breakpoint: 720,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    prevArrow: true,
                    prevArrow: '<img class="services-slider__prev-arrow" src="https://sibdentomsk.ru/wp-content/themes/sibdent/img/services/service-left.svg">',
                }
            },
            {
                breakpoint: 500,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    prevArrow: true,
                    prevArrow: '<img class="services-slider__prev-arrow" src="https://sibdentomsk.ru/wp-content/themes/sibdent/img/services/service-left.svg">',
                }
            },
        ]
    });

    //end слайдер услуги

    // слайдер с сертификатами 'О клинике'

    $(window).on("load resize", function() {
        let width = $(document).width();
        if (width > 991) {
            if ($('.clinic-license-slider').hasClass('slick-initialized')) {
                $('.clinic-license-slider').slick('unslick');
            }

        } else {
            $('.clinic-license-slider').not('.slick-initialized').slick({
                dots: false,
                slidesToShow: 3,
                slidesToScroll: 1,
                prevArrow: '<img class="services-slider__prev-arrow" src="https://sibdentomsk.ru/wp-content/themes/sibdent/img/services/service-left.svg">',
                nextArrow: '<img class="services-slider__next-arrow" src="https://sibdentomsk.ru/wp-content/themes/sibdent/img/services/service-right.svg">',
                responsive: [{
                        breakpoint: 520,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                        }
                    },

                ]
            });
        }
    });

    // end слайдер с сертификатами 'О клинике'

    // слайдер с фотографиями клиники

    $('.clinic-photos__wrap__gallery .gallery').slick({
        slidesToScroll: 1,
        slidesToShow: 3.5,
        infinite: true,
        prevArrow: '<img class="services-slider__prev-arrow clinic-slider__prev-arrow " src="https://sibdentomsk.ru/wp-content/themes/sibdent/img/services/service-left.svg">',
        nextArrow: '<img class="services-slider__next-arrow clinic-slider__next-arrow " src="https://sibdentomsk.ru/wp-content/themes/sibdent/img/services/service-right.svg">',
        responsive: [{
                breakpoint: 991,
                settings: {
                    slidesToShow: 2.5,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 520,
                settings: {
                    slidesToShow: 1.5,
                    slidesToScroll: 1,
                }
            },
        ]
    });

    // end слайдер с фотографиями клиники

    // $('.main-stocks').slick({
    //   dots: true,
    //   arrows: false,
    //   autoplay: true,
    //   autoplaySpeed: 6000,
    //   dotsClass: 'reviews-slider__dot'
    // });


    $('.main-stocks-block__text')
        .on('init', function(event, slick) {
            $('.main-stocks-block__text .slick-slide.slick-current').addClass('is-active');
        })
        .slick({
            slidesToShow: 3,
            slidesToScroll: 3,
            dots: false,
            focusOnSelect: true,
            infinite: false,
            asNavFor: '.main-stocks-slider'
        });
    $('.main-stocks-slider').slick({
        dots: false,
        arrows: false,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        useTransform: true,
		autoplay: true,
        autoplaySpeed: 4000,
		pauseOnFocus: false,
		pauseOnHover: false,
        asNavFor: '.main-stocks-block__text',
        responsive: [{
            breakpoint: 767,
            settings: {
                dots: true
            }
        }, ]
    });

    //search
    $('a#search').click(function(event) {
        event.preventDefault();
        $('.overlay-search').fadeIn(400, function() {
            $('#search-win')
                .css('display', 'block')
                .animate({ opacity: 1, top: '50%' }, 200);
			$('.search-input-word').focus();
        });
    });
    //Close
    $('.modalclose, .overlay-search').click(function() {
        $('.modalwin').animate({ opacity: 0, top: '45%' }, 200, function() {
            $(this).css('display', 'none');
            $('.overlay-search').fadeOut(400);
        });
    });


    $('.modal-btn').click(function (event) {
        event.preventDefault();
        var id = $(event.currentTarget).attr('data-to-id');
        $('.overlay-1').fadeIn(400, function () {
            $('#' + id + '.popup')
                .css('display', 'block')
                .animate({ opacity: 1, top: '0%' }, 200);
        });
      });
      //Close
      $('.popup__close, .overlay-1').click(function () {
        $('.popup').animate({ opacity: 0 }, 200, function () {
            $(this).css('display', 'none');
            $('.overlay-1').fadeOut(400);
        });
      });


    $('.main-stocks-slider .modal-btn').on('click', function() {
        $('[name="saleTitle"]').val($(this).parent().find('h1').html());
    })


});