/*-----------------------------------------------------------------------------------
 Theme Name: LEE
 Author: LEE
 Author URI: http://
 Version: 1.0.0
 Description: A Beautiful, Professional and Multipurpose Theme Made by LEE
 -----------------------------------------------------------------------------------*/

/* ----------------------------------------------------------------
 [Table of contents]
        - MobileMenu
        - PreLoader
        - AnimationScrollPage
        - CountTo
        - ParallaxBackground
        - Slider
        - InputFile
        - MegaMenu
        - ScrollToTop
        - LightBox
        - CustomTheme
        - PriceRange
        - CalcQuantity
        - Ads
        - ImageZoom

 ------------------------------------------------------------------*/

'use strict';


//action
$(window).on('load', function () {
    MasonryItem.init();
});


$(document).ready(function () {
    MobileMenu.init();
    PreLoader.init();
    AnimationScrollPage.init();
    CountTo.init();
    ParallaxBackground.init();
    Slider.init();
    InputFile.init();
    ScrollToTop.init();
    CustomTheme.init();
    PriceRange.init();
    CalcQuantity.init();
    Ads.init();
    // ImageZoom.init();
    Cart.init();
});
// Cart
var Cart = function () {
    var _initInstances = function () {
        var step1 = $('#step1');
        var step2 = $('#step2');
        var step3 = $('#step3');

        step2.addClass('unavailable');
        step3.addClass('unavailable');


        // $('#needs-validation ').find(':input').each(function () {
        step1.find(':input').each(function () {
            var attr = $(this).attr('required')

            if (typeof attr !== typeof undefined && attr !== false) {
                $(this).addClass('unvalidated');


            }
        });


        // $('#needs-validation :input').on('change keyup paste click', function (e) {
        step1.find(":input").on('change keyup paste click', function (e) {

            var attr = $(this).attr('required');
            var value = $(this).val();


            if (typeof attr === typeof undefined) {
                $(this).removeClass('unvalidated');
            }


            if (typeof attr !== typeof undefined && attr !== false) {

                $(this).addClass('was-validated');

                if (value !== '') {
                    $(this).removeClass('unvalidated');
                }
                else {
                    $(this).addClass('unvalidated');
                }

            }

            else {
                $(this).addClass('was-validated');
                $(this).removeClass('unvalidated');
            }


            if (checkValidated() === true) {
                step2.addClass('available');
                step2.removeClass('unavailable')
            }
            else {
                step2.addClass('unavailable');
                step2.removeClass('available')
            }


            //step3
            var validateStep2 = step2.hasClass('available');
            if (checkValidated() && validateStep2) {
                step3.addClass('available');
                step3.removeClass('unavailable')
            }
            else {
                step3.addClass('unavailable');
                step3.removeClass('available')
            }


        });

        var checkValidated = function () {
            var check = true;
            step1.find(':input[required]').each(function () {

                if ($(this).hasClass('unvalidated') === true) {
                    check = false;
                    return check;
                }
            });
            return check;

        };
    };

    return {
        init: function () {
            _initInstances();
        }
    };
}();

// Advertise
var Ads = function () {
    var _initInstances = function () {
        var obj = $('[data-ads]');

        if ($('[data-ads-offset-stop]').length) {
            var footerOffset = $('[data-ads-offset-stop]').offset().top;

            obj.each(function () {

                var offsetTop = $(this).offset().top;

                $(this).attr({
                    'data-offset': offsetTop,
                    'data-position': $(this).css('position'),
                    'data-height': parseInt($(this).css('height'), 10),
                });


            });

            $(window).scroll(function (event) {

                var scroll = $(window).scrollTop();

                obj.each(function () {
                    var heightValue = parseInt($(this).attr('data-height'), 10);
                    var offsetValue = parseInt($(this).attr('data-offset'), 10);

                    if (scroll > offsetValue) {
                        if ((scroll + heightValue) > footerOffset) {
                            $(this).css({
                                'transform': 'translateY(' + (footerOffset - offsetValue - heightValue) + 'px)'
                            });
                        } else {
                            $(this).css({
                                'transform': 'translateY(' + (scroll - offsetValue ) + 'px)',
                            });
                        }
                    }


                    else {
                        $(this).css({
                            'transform': 'translateY(0)',
                        });
                    }
                })


            });
        }


    };

    return {
        init: function () {
            setTimeout(
                function () {
                    _initInstances();
                }, 500);
        }
    };
}();

//Image Zoom
var ImageZoom = function () {
    var _initInstances = function () {
        var imageZoom = $('#zoom_03');
        imageZoom.elevateZoom({
            // gallery: 'gallery_03',
            // zoomWindowWidth: $("").width(),
            // zoomWindowHeight: $("").height(),
            // zoomWindowPosition: "zome3-container",
            borderSize: 1,
            cursor: 'pointer',
            // galleryActiveClass: 'active',
            // imageCrossfade: true,
            // loadingIcon: 'ajax-loader.gif',
            //
            zoomWindowFadeIn: 500,
            zoomWindowFadeOut: 500,
            lensFadeIn: 500,
            lensFadeOut: 500,
            easing: true,
            scrollZoom: true

            //Inner zoom
            //zoomType: "inner",
            //cursor: "crosshair"

            //Lens zom
            //zoomType: "lens",
            //lensShape: "round",
            //lensSize: 200
        });


        $("#zoom_03")
            .bind("click",
                function (e) {
                    var ez = $('#zoom_03').data('elevateZoom');
                    $.fancybox(ez.getGalleryList());
                    return false;
                });

        $('.slick')
            .slick({
                slidesToShow: 3,
                focusOnSelect: true,
                centerMode: true
            });

        // Click xzoom on slick change
        $('.slick')
            .on('afterChange',
                function (event, slick, currentSlide) {
                    if ($(".slick .slick-slide[data-slick-index=" + currentSlide + "]").attr("data-image") !==
                        $(".mainImage").attr("src"))
                        $(".slick .slick-slide[data-slick-index=" + currentSlide + "]").click();
                });

        setTimeout(function () {
                $(".slick .slick-current").click();
            },
            100);


    };

    return {
        init: function () {
            _initInstances();
        }
    };
}();

// preloader
var PreLoader = function () {
    var _initInstances = function () {
        $('.animsition').animsition({
            // loadingClass: 'loader',
            inDuration: 900,
            outDuration: 500,
            linkElement: 'a:not([target="_blank"]):not([href^="#"]):not([href^="javascript:void(0);"]):not([href^="callto:"]):not([href^="mailto:"])',
        });
    };

    return {
        init: function () {
            _initInstances();
        }
    };
}();

//Mmenu
var MobileMenu = function () {
    var _initInstances = function () {
        var mobileMenu = $("#menu");
        var closeButton = $("#hamburger");

        mobileMenu.mmenu({
            "extensions": [
                // "fx-panels-zoom",
                "pagedim-black",
                // "theme-dark"
            ],
            "offCanvas": {
                // "position": "right"
            },
            "navbars": [
                {
                    "position": "bottom",
                    "content": [
                        "<a class='fa fa-envelope' href='#/'></a>",
                        "<a class='fa fa-twitter' href='#/'></a>",
                        "<a class='fa fa-facebook' href='#/'></a>"
                    ]
                }
            ]
        });

        //close
        var API = mobileMenu.data("mmenu");
        closeButton.click(function () {
            API.close();
        });
    };


    return {
        init: function () {
            _initInstances();
        }
    };
}();

// animation scroll page
var AnimationScrollPage = function () {
    var _initInstances = function () {
        $('.animation').waypoint(function (direction) {
            $(this.element).addClass('animation-active');
        }, {
            offset: '90%',
            triggerOnce: true
        });
    };

    return {
        init: function () {
            _initInstances();
        }
    };
}();

// count to
var CountTo = function () {
    var _initInstances = function () {
        var itemCount = $('.vk-counter .number-count');
        $(itemCount).waypoint({
            handler: function (direction) {
                $(this.element).countTo({
                    from: 0,
                    speed: 2000,
                    refreshInterval: 50,
                    formatter: function (value, options) {
                        return numeral(value).format('0,0');
                    }
                });
            },
            offset: '100%',
            triggerOnce: true,
        });
    };

    return {
        init: function () {
            _initInstances();
        }
    };
}();

// parallax background
var ParallaxBackground = function () {
    var _initInstances = function () {
        $('.vk-parallax').attr('data-stellar-background-ratio', '0.3');
        $.stellar({
            verticalOffset: 0,
            horizontalScrolling: false,
        });
    };

    return {
        init: function () {
            _initInstances();
        }
    };
}();

// slider
var Slider = function () {
    var singleProjectSlider = function () {
        $('[data-slider="slider-for"]').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            nextArrow:'<button class="vk-btn vk-slider__arrow _next"><img src="images/icon/right.png" alt=""></button>',
            prevArrow:'<button class="vk-btn vk-slider__arrow _prev"><img src="images/icon/left.png" alt=""></button>',
            fade: true,
            infinite:false,
            asNavFor: '[data-slider="slider-nav"]',
            responsive: [{
                breakpoint: 768,
                settings: {
                    arrows: false,

                }

            }]
        });
        $('[data-slider="slider-nav"]').slick({
            arrows: false,
            slidesToShow: 4,
            slidesToScroll: 1,
            asNavFor: '[data-slider="slider-for"]',
            focusOnSelect: true,
            infinite:false,
            swipeToSlide:true,
            responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 3,

                }

            }]

        });


    };


    var homepageSlider = function () {

        $('[data-slider="home"]').slick({
            arrows: false,
            slidesToShow: 1,
            dots: true,
            dotsClass: 'vk-slider__dot vk-list vk-list--inline',
            // autoplay: true,
            // fade: true,
        });


        $('[data-slider="news-related"]').slick({
            arrows: false,
            slidesToShow: 3,
            swipeToSlide: true,
            autoplay: true,
            responsive: [{
                breakpoint: 768,
                settings: {

                    slidesToShow: 2,
                }

            },
            {
                breakpoint: 576,
                settings: {

                    slidesToShow: 1,
                }

            }]
        });

        $('[data-slider="news-home"]').slick({
            nextArrow:'<button class="vk-btn vk-slider__arrow _next"><i class="_icon fa fa-caret-right"></i></button>',
          prevArrow:'<button class="vk-btn vk-slider__arrow _prev"><i class="_icon fa fa-caret-left"></i></button>',
            slidesToShow: 5,
            swipeToSlide: true,
            // autoplay: true,
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {

                        slidesToShow: 4,
                    }

                },{
                    breakpoint: 992,
                    settings: {

                        slidesToShow: 3,
                    }

                },{
                breakpoint: 768,
                settings: {

                    slidesToShow: 2,
                }

            },
                {
                    breakpoint: 576,
                    settings: {

                        slidesToShow: 1,
                    }

                }]
        })

    };

    var shopSlider = function () {

        $('[data-slider="related"]').slick({
            nextArrow: '<button  class="vk-btn vk-slider__arrow _next"><img src="images/icon/right.png"></button>',
            prevArrow: '<button  class="vk-btn vk-slider__arrow _prev"><img src="images/icon/left.png"></button>',
            slidesToShow: 5,
            autoplay: true,
            swipeToSlide: true,

            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 3,
                        arrows: false
                    }
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 3,
                        arrows: false
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        arrows: false
                    }
                },
                {
                    breakpoint: 567,
                    settings: {
                        slidesToShow: 1,
                        arrows: false

                    }
                }
            ],
        })

    };

    var arrowsJustifyAround = function () {

        var obj = $('[data-arrows="justify-around"]');
        var arrowDots = obj.find('.vk-arrow-dots');

        var arrowPrev = obj.find('.vk-arrow.prev');
        var arrowNext = obj.find('.vk-arrow.next');

        var distanceOffset = 5;

        var dotsNavWidth = arrowDots.width();

        var distanceFromBetween = parseFloat(dotsNavWidth / 2) + distanceOffset;


        var currentWidth = $(window).width();

        if (currentWidth > 991) {
            arrowPrev.css('transform', 'translateX(calc(-100% - ' + distanceFromBetween + 'px))');
            arrowNext.css('transform', 'translateX(calc(100% + ' + distanceFromBetween + 'px))');
        }
        return false;

    }

    var _initInstances = function () {

        homepageSlider();
        singleProjectSlider();
        shopSlider();
        arrowsJustifyAround();


    };

    return {
        init: function () {
            _initInstances();
        }
    };
}();

// masonry item
var MasonryItem = function () {
    var masonry = '[data-layout="masonry"]';
    var masonryItem = '[data-layout="masonry-item"]'
    var masonryFix = '[data-layout="masonry-fix"]';

    var buttonFilterDefault = '[data-filter-button="default"]';
    var buttonFilterFix = '[data-filter-button="filter-fix"]';

    var filterFix = function () {

        var delayFilter = function () {
            $(masonryFix).isotope({
                filter: '.first',
            })
        }

        setTimeout(delayFilter, 100);
        $(buttonFilterFix)

            .on('click', 'li', function () {
                var filterValue = $(this).attr('data-filter');
                console.log(filterValue)
                $(masonryFix).isotope({
                    filter: filterValue,
                });

                return false;
            })
            .on('change', function () {

                // get filter value from option value
                var filterValue = this.value;
                $(masonryFix).isotope({
                    filter: filterValue,

                });

                return false;
            });

    }

    var masonryLayout = function () {
        $(masonry).isotope({
            // options...
            itemSelector: masonryItem,
            masonry: {
                columnWidth: masonryItem,
            }
        });

        //filter items on button click
        $(buttonFilterDefault)
            .on('click', 'li', function () {
                var filterValue = $(this).attr('data-filter');
                console.log(filterValue);
                $(masonry).isotope({
                    filter: filterValue,

                });

                return false;
            })
            .on('change', function () {
                // get filter value from option value
                var filterValue = this.value;
                // console.log(filterValue);
                $(masonry).isotope({
                    filter: filterValue,

                });

                return false;
            });
    };

    var _initInstances = function () {
        masonryLayout();
        filterFix();

    };

    return {
        init: function () {
            _initInstances();
        },

        responsive: function () {

        }
    };
}();


// google maps

if ($('[data-map="true"]').length) {
    var script = document.createElement('script');
    script.src = "http://maps.googleapis.com/maps/api/js?key=AIzaSyC2Gs0Rw7L416l5ghD0zrUWf8FGibwT7Ds&callback=initMap";
    document.getElementsByTagName('head')[0].appendChild(script);

    var initMap = function () {
        var myLatLng = {lat: 38.5397102, lng: -93.6881803};
        // Create a map object and specify the DOM element for display.
        var map = new google.maps.Map(document.getElementById('map'), {
            center: myLatLng,
            scrollwheel: false,
            zoom: 4
        });
        // Create a marker and set its position.
        var marker = new google.maps.Marker({
            map: map,
            position: myLatLng,
            title: 'HELLO WORLD!'
        });
    };

}


// input file
var InputFile = function () {
    var _initInstances = function () {
        var inputs = document.querySelectorAll('.vk-input-file');
        Array.prototype.forEach.call(inputs, function (input) {
            var label = input.nextElementSibling,
                labelVal = label.innerHTML;

            input.addEventListener('change', function (e) {
                var fileName = '';
                if (this.files && this.files.length > 1)
                    fileName = ( this.getAttribute('data-multiple-caption') || '' ).replace('{count}', this.files.length);
                else
                    fileName = e.target.value.split('\\').pop();

                if (fileName)
                    label.querySelector('span').innerHTML = fileName;
                else
                    label.innerHTML = labelVal;
            });

            // Firefox bug fix
            input.addEventListener('focus', function () {
                input.classList.add('has-focus');
            });
            input.addEventListener('blur', function () {
                input.classList.remove('has-focus');
            });
        });
    }
    return {
        init: function () {
            _initInstances();
        }
    };
}();

//scroll up
var ScrollToTop = function () {

    var _initInstances = function () {
        $.scrollUp({
            scrollText: '<i class="fa fa-angle-up"></i>',
            scrollSpeed: 500,
            zIndex: 1,

        });

        $('[data-scroll-to^="#"]').on('click', function (event) {

            var target = $(this.getAttribute('data-scroll-to'));
            if (target.length) {
                event.preventDefault();
                $('html, body').stop().animate({
                    scrollTop: target.offset().top

                }, 1000);


            }

        });

        // var obj = $('[data-scroll-to]');
        //
        // $(window).on('scroll', function () {
        //
        //     var scroll = $(window).scrollTop();
        //
        //     if (obj.length){
        //
        //         obj.each(function(){
        //
        //             var target = $(this).attr('href');
        //
        //             if (scroll > $(target).offset().top){
        //                 $(this).hide();
        //             }
        //             else {
        //                 $(this).css('opacity',1 - scroll / $(target).offset().top);
        //                 $(this).show();
        //             }
        //         });
        //     }
        //
        // });
    };

    return {
        init: function () {
            _initInstances();
        }
    };
}();

// price range
var PriceRange = function () {
    var _initInstances = function () {

        $( "#slider-range-min" ).slider({
            range: "min",
            value: 15000000,
            min: 100000,
            max: 20000000,
            slide: function( event, ui ) {
                $( "#amount" ).val( ui.value );
                $( "#amount-label" ).text( numeral(ui.value).format('0,0')+ 'đ' );
            }
        });
        // numeral(1000).format('0,0')
        if($( "#slider-range-min" ).length){
            var result = $( "#slider-range-min" ).slider( "value" );
            $( "#amount" ).val(  result );

            $( "#amount-label" ).text( numeral(result).format('0,0') + 'đ' );
        }

    };

    return {
        init: function () {
            _initInstances();
        }
    };
}();

// calculator quantity
var CalcQuantity = function () {
    var _initInstances = function () {

        $("[data-calculator] button").on("click", function () {

            var $button = $(this);

            var oldValue = $button.siblings("input").val();

            if ($button.attr('data-index') == "plus") {

                var newVal = parseFloat(oldValue) + 1;

            } else {
                // Don't allow decrementing below zero
                if (oldValue > 1) {
                    var newVal = parseFloat(oldValue) - 1;
                } else {
                    newVal = 1;
                }
            }

            $button.siblings("input").val(newVal);

            return false;
        });
    };

    return {
        init: function () {
            _initInstances();
        }
    };
}();

// custom theme
var CustomTheme = function () {

    var _initInstances = function () {

        // disable event click a tag
        $('a').on("click", function (e) {
            if ($(this).attr('href') === undefined) {
                e.preventDefault();
                return false;
            }
        });

    }

    return {
        init: function () {
            _initInstances();
        }
    };
}();









