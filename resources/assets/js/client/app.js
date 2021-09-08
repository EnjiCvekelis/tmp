import AOS from 'aos';
import 'aos/dist/aos.css';

AOS.init();

$(function () {
    let images = ["homepage/bg0.png", "homepage/bg1.png", "homepage/bg2.png", "homepage/bg3.png", "homepage/bg4.png", "homepage/bg5.png"];
    let main_images = $("#mosart_images");
    let i = 0;
    main_images.css("background-image", "url(/images/" + images[i] + ")");
    main_images.css('background-position', 'center');
    main_images.css('background-size', '180%');
    main_images.animate({ backgroundSize: '100%' }, 7000);
    setInterval(function () {
        i++;
        if (i === images.length) {
            i = 0;
        }
        main_images.css("background-image", "url(/images/" + images[i] + ")");
        main_images.css("transition", "background-image 0.2s");
        main_images.animate({ backgroundSize: 180 + '%' }, 0);
        main_images.css('background-position', 'center');
        main_images.animate({ backgroundSize: 100 + '%' }, 7000);
    }, 7000);

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(window).scroll(function () {
        if ($(document).scrollTop() > 100) {
            $('.header-wrap').addClass('scroll')
        } else {
            $('.header-wrap').removeClass('scroll')
        }
    })
    $(document).ready(function () {
        $(".btn-contact").click(function (event) {

            event.preventDefault();
            var form = $('#contact-form')[0];
            var data = new FormData(form);

            $.ajax({
                type: "POST",
                url: '/request/add',
                data: data,
                processData: false,
                contentType: false,
                cache: false,
                timeout: 6000,
                success: function (response) {
                    $('#contact-form input').val('')
                    $('#contact-form button').hide()
                    $('#contact-form .success-message').css('display', 'flex')
                    $('#contact-form textarea').val('')
                    $('#contact-form #checkbox-main').prop("checked", false);

                },
                error: function () {
                    $('#contact-form .error-message').css('display', 'flex')
                    $('#contact-form button').hide()
                }
            });

        });
        $('#contact-form .close').on('click', function () {
            $('#contact-form button').show()
            $('#contact-form .success-message').hide()
            $('#contact-form .error-message').hide()
        })

        $('.search-open').on('click', function () {
            $('.search-modal').css('display', 'flex')
        })
        $('.search-modal__close').on('click', function () {
            $('.search-modal').hide()
        })

        var slideCount = null;
        $('.portfolio-gallery').on('init', function (event, slick) {
            slideCount = slick.slideCount;
            setSlideCount();
            setCurrentSlideNumber(slick.currentSlide);
        });

        $('.portfolio-gallery').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
            setCurrentSlideNumber(nextSlide);
        });
        $('.template__content-gallery').on('init', function (event, slick) {
            slideCount = slick.slideCount;
            setSlideCount();
            setCurrentSlideNumber(slick.currentSlide);
        });

        $('.template__content-gallery').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
            setCurrentSlideNumber(nextSlide);
        });
        $('.portfolio-gallery').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.portfolio-gallery__thumbs'
        });
        $('.portfolio-gallery__thumbs').slick({
            slidesToShow: 2,
            slidesToScroll: 1,
            asNavFor: '.portfolio-gallery',
            dots: false,
            // arrows: false,
            prevArrow: $('.arrow-prev'),
            nextArrow: $('.arrow-next'),
            focusOnSelect: true
        });
        $('.template__content-gallery').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.template__content-gallery__thumbs'
        });
        $('.template__content-gallery__thumbs').slick({
            slidesToShow: 2,
            slidesToScroll: 1,
            asNavFor: '.template__content-gallery',
            dots: false,
            // arrows: false,
            prevArrow: $('.arrow-prev'),
            nextArrow: $('.arrow-next'),
            focusOnSelect: true,
            mobileFirst: true,
            responsive: [
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 0,
                    settings: {
                        slidesToShow: 1.5,
                        slidesToScroll: 1
                    }
                },
            ]
        });

        function setSlideCount() {
            let el = $('.slide-count-wrap').find('.total');
            if (slideCount < 10) {
                el.text('0' + slideCount);
            } else {
                el.text(slideCount);
            }
        }

        function setCurrentSlideNumber(currentSlide) {
            let el = $('.slide-count-wrap').find('.current');
            let slideNum = currentSlide + 1;
            if (slideNum < 10) {
                el.text('0' + slideNum);
            } else {
                el.text(slideNum);
            }

        }

        $(function () {
            $(".header-mobile").click(function (e) {
                e.preventDefault();
                $(this).toggleClass("active").next().slideToggle(500);
            });
        });

        $(function () {
            $(".dropdown-mobile").click(function (e) {
                e.preventDefault();
                $(this).toggleClass("active").next().slideToggle(200);
            });
        });

    })
})

