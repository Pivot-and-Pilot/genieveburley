(function($){

    $(document).ready(function() {

        /* ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */
        /* ~~~~~~~~~~ Plugin Inits ~~~~~~~~~~ */
        /* ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */

            /* ~~~~~~~~~~ Match height ~~~~~~~~~~ */

            $('.match-height').matchHeight({
                byRow: true,
                property: 'min-height',
                target: null,
                remove: false
            });


            /* ~~~~~~~~~~ Select2 ~~~~~~~~~~ */

            $('select').select2();


            /* ~~~~~~~~~~ Retina init ~~~~~~~~~~ */

            retinajs();


            /* ~~~~~~~~~~ AOS init ~~~~~~~~~~ */

            AOS.init({
                delay: 50,
            });

            $(window).on('load', function () {
                AOS.refresh();
            });


            /* ~~~~~~~~~~ Rellax ~~~~~~~~~~ */

            // if($('.rellax').length) {
            //     var rellax = new Rellax('.rellax');
            // }

            if($('.rellax--no-mobile, .rellax').length) {
                var rellaxNoMobile = new Rellax('.rellax--no-mobile, .rellax');

                if($(window).width() <= 768) {
                    rellaxNoMobile.destroy();
                }
            }


            /* ~~~~~~~~~~ Google map ~~~~~~~~~~ */

            var map = null;

            $('.acf-map').each(function(){
                map = new_map( $(this) );
            });


            /* ~~~~~~~~~~ Lazy Loading ~~~~~~~~~~ */

            $('.lazy').Lazy();


            /* ~~~~~~~~~~ OWL Init ~~~~~~~~~~ */

                /* ~~~~~ Homepage - Intro Slider ~~~~~ */

                $(function() {
                    var owlHomepageMobileIntroSlider = $('#homepage-mobile-intro-slider');

                    owlHomepageMobileIntroSlider.owlCarousel({
                        autoWidth: true,
                        center: true,
                        items: 1,
                        loop: true,
                        animateIn: 'fadeIn',
                        animateOut: 'fadeOut',
                        responsive : {
                            0 : {
                                margin: 15
                            },
                            768 : {
                                margin: 25
                            }
                        }
                    });
                });


                /* ~~~~~ Homepage (Mobile) - About Slider ~~~~~ */

                $(function() {
                    var owlHomepageMobileAboutSlider = $('#homepage-mobile-about-slider');

                    owlHomepageMobileAboutSlider.owlCarousel({
                        autoWidth: true,
                        center: true,
                        loop: true,
                        margin: 15,
                    });
                });


                /* ~~~~~ Homepage (Desktop) - About Slider ~~~~~ */

                $(function() {
                    var owlHomepageDesktopAboutSlider = $('#homepage-desktop-about-slider');

                    owlHomepageDesktopAboutSlider.owlCarousel({
                        items: 1,
                        margin: 0,
                        mouseDrag: false,
                        touchDrag: false,
                        pullDrag: false,
                        freeDrag: false,
                        loop: true,
                        animateIn: 'fadeIn',
                        animateOut: 'fadeOut'
                    });
                });

                $(function() {
                    var owlHomepageDesktopAboutSliderOne = $('#homepage-desktop-about-slider-one'),
                        owlHomepageDesktopAboutSliderTwo = $('#homepage-desktop-about-slider-two'),
                        duration = 250,
                        flag = false;

                    owlHomepageDesktopAboutSliderOne.owlCarousel({
                        items: 1,
                        margin: 0,
                        mouseDrag: false,
                        touchDrag: false,
                        pullDrag: false,
                        freeDrag: false,
                        loop: false,
                        dots: true
                    });

                    owlHomepageDesktopAboutSliderTwo.owlCarousel({
                        items: 1,
                        margin: 0,
                        mouseDrag: false,
                        touchDrag: false,
                        pullDrag: false,
                        freeDrag: false,
                        loop: false,
                        dots: false
                    });

                    owlHomepageDesktopAboutSliderOne.on('changed.owl.carousel', function (e) {
                        if (!flag) {
                            flag = true;
                            owlHomepageDesktopAboutSliderTwo.trigger('to.owl.carousel', [e.item.index, duration, true]);
                            flag = false;
                        }
                    });
                });


                /* ~~~~~ Hello Section - Slider ~~~~~ */

                $(function() {
                    var owlHelloSectionSlider = $('.hello-section__background-carousel');

                    owlHelloSectionSlider.owlCarousel({
                        loop: true,
                        items: 1,
                        autoplay:true,
                        mouseDrag: false,
                        touchDrag: false,
                        pullDrag: false,
                        freeDrag: false,
                        autoplayTimeout: 4000,
                        animateIn: 'fadeIn',
                        animateOut: 'fadeOut',
                        dots: true
                    });
                });


                /* ~~~~~ CTA - Slider ~~~~~ */

                $(function() {
                    var owlCTASlider = $('#cta-carousel');

                    owlCTASlider.owlCarousel({
                        loop: true,
                        items: 1,
                        autoplay:true,
                        mouseDrag: false,
                        touchDrag: false,
                        pullDrag: false,
                        freeDrag: false,
                        autoplayTimeout: 5000,
                        animateIn: 'blur',
                        animateOut: 'unblur',
                        dots: false,
                        onTranslate: function() {
                            $('.active .cta__testimonials').removeClass('cta__testimonials--unblur');
                            $('.active .cta__testimonials').addClass('cta__testimonials--blur');
                        },
                        onTranslated: function() {
                            $('.active .cta__testimonials').addClass('cta__testimonials--unblur');
                            $('.active .cta__testimonials').removeClass('cta__testimonials--blur');
                        },
                        smartSpeed:2000
                    });
                });


                /* ~~~~~ Chiro Page - Adjustments Slider ~~~~~ */

                $(function() {
                    var owlAdjustmentsSlider = $('#adjustments-carousel');

                    owlAdjustmentsSlider.owlCarousel({
                        items: 1,
                        autoWidth: true,
                        margin: 30,
                        loop: true,
                        center: true,
                        responsive : {
                            0 : {
                                items: 1
                            },
                            768 : {
                                items: 2
                            },
                            992 : {
                                items: 4,
                                center: false,
                                loop: false
                            }
                        }
                    });
                });


                /* ~~~~~ Retreats 2nd Page - Location Gallery ~~~~~ */

                $(function() {
                    var owlLocationSlider = $('#location-slider');

                    owlLocationSlider.owlCarousel({
                        items: 1,
                        autoWidth: true,
                        margin: 10,
                        loop: true,
                        center: true,
                        dots: false,
                        responsive : {
                            0 : {
                                items: 1,
                                margin: 10
                            },
                            992 : {
                                items: 3,
                                autoWidth: false,
                                center: false,
                                loop: false,
                                margin: 25
                            }
                        }
                    });
                });


                /* ~~~~~ Retreats 2nd Page - Food Gallery ~~~~~ */

                $(function() {
                    var owlFoodSlider = $('#food-gallery');

                    owlFoodSlider.owlCarousel({
                        items: 1,
                        margin: 25,
                        loop: true,
                        center: true,
                        dots: true
                    });
                });


                /* ~~~~~ Retreats 2nd Page - Food Tabs Carousel ~~~~~ */

                $(function() {
                    var owlFoodTabsSlider = $('#FoodTabs');

                    owlFoodTabsSlider.owlCarousel({
                        autoWidth: true,
                        margin: 0,
                        loop: false,
                        dots: false
                    });
                });


                /* ~~~~~ Retreats 2nd Page - Activities Carousel ~~~~~ */

                $(function() {
                    var owlActivitiesSlider = $('#activities-carousel');

                    owlActivitiesSlider.owlCarousel({
                        items: 1,
                        autoWidth: true,
                        margin: 10,
                        loop: true,
                        center: true,
                        dots: true
                    });
                });


                /* ~~~~~ Retreats 2nd Page - Instructors Carousel ~~~~~ */

                $(function() {
                    var owlInstructorsSlider = $('#instructors-slider');

                    owlInstructorsSlider.owlCarousel({
                        items: 1,
                        margin: 10,
                        loop: true,
                        autoWidth: true,
                        center: true,
                        dots: false,
                        responsive : {
                            0 : {
                                items: 1,
                                margin: 10
                            },
                            992 : {
                                items: 3,
                                autoWidth: false,
                                center: false,
                                loop: false,
                                margin: 25
                            }
                        }
                    });
                });


                /* ~~~~~ About Page - Logos Carousel ~~~~~ */

                $(function() {
                    var owlLogosSlider = $('#partnerships-logos-mobile-carousel');

                    owlLogosSlider.owlCarousel({
                        items: 1,
                        margin: 25,
                        autoWidth: true,
                        loop: true,
                        center: true,
                        dots: true
                    });
                });


                /* ~~~~~ About Page - Approach table Carousel ~~~~~ */

                $(function() {
                    var owlApproachTopSlider = $('.approach-table-carousel-top'),
                        duration = 250,
                        flag = false;

                    owlApproachTopSlider.owlCarousel({
                        items: 1,
                        margin: 0,
                        loop: false,
                        center: true,
                        autoWidth: true,
                        dots: false
                    });

                    var owlApproachBottomSlider = $('.approach-table-carousel-bottom');

                    owlApproachBottomSlider.owlCarousel({
                        items: 1,
                        margin: 0,
                        loop: false,
                        center: true,
                        autoWidth: true,
                        dots: true
                    });

                    owlApproachBottomSlider.on('changed.owl.carousel', function (e) {
                        if (!flag) {
                            flag = true;
                            owlApproachTopSlider.trigger('to.owl.carousel', [e.item.index, duration, true]);
                            flag = false;
                        }
                    });

                    owlApproachTopSlider.on('changed.owl.carousel', function (e) {
                        if (!flag) {
                            flag = true;
                            owlApproachBottomSlider.trigger('to.owl.carousel', [e.item.index, duration, true]);
                            flag = false;
                        }
                    });
                });


                /* ~~~~~ Animated Svg ~~~~~ */

                new Vivus('preloader-svg', {}, function (obj) {
                  obj.el.classList.add('finished');
                });

                if($('#adjust-svg-1').length) {
                    new Vivus('adjust-svg-1', {}, function (obj) {
                      obj.el.classList.add('finished');
                    });
                }
                if($('#adjust-svg-2').length) {
                    new Vivus('adjust-svg-2', {}, function (obj) {
                      obj.el.classList.add('finished');
                    });
                }
                if($('#adjust-svg-3').length) {
                    new Vivus('adjust-svg-3', {}, function (obj) {
                      obj.el.classList.add('finished');
                    });
                }
                if($('#adjust-svg-4').length) {
                    new Vivus('adjust-svg-4', {}, function (obj) {
                      obj.el.classList.add('finished');
                    });
                }
                if($('#adjust-svg-5').length) {
                    new Vivus('adjust-svg-5', {}, function (obj) {
                      obj.el.classList.add('finished');
                    });
                }
                if($('#adjust-svg-6').length) {
                    new Vivus('adjust-svg-6', {}, function (obj) {
                      obj.el.classList.add('finished');
                    });
                }


                if($('.approach__icons').length) {
                    new Vivus('approach__icons_1', {
                        type: 'oneByOne',
                        start: 'inViewport',
                        duration: 150,
                        animTimingFunction: Vivus.EASE_IN
                    });

                    new Vivus('approach__icons_2', {
                        type: 'oneByOne',
                        start: 'inViewport',
                        duration: 100,
                        animTimingFunction: Vivus.EASE
                    });

                    new Vivus('approach__icons_3', {
                        type: 'oneByOne',
                        start: 'inViewport',
                        duration: 150,
                        animTimingFunction: Vivus.EASE_IN
                    });

                    new Vivus('approach__icons_4', {
                        type: 'oneByOne',
                        start: 'inViewport',
                        duration: 200,
                        animTimingFunction: Vivus.EASE_IN
                    });
                }


                // if($('hello-icon').length) {

                //         // new Vivus('hello-icon', {}, function (obj) {
                //         //   obj.el.classList.add('finished');
                //         // });
                //         new Vivus('hello-icon', {
                //             type: 'oneByOne',
                //             start: 'inViewport',
                //             duration: 1000,
                //             animTimingFunction: Vivus.EASE
                //         });

                // }


        /* ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */
        /* ~~~~~~~~~~ Functions ~~~~~~~~~~ */
        /* ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */

            /* ~~~~~~~~~~ Modal fix ~~~~~~~~~~ */

            $('.modal').insertAfter($('body'));


            /* ~~~~~~~~~~ Set animation scroll when URL is with #anchor and make smooth scroll ~~~~~~~~~~ */

            $(function(){
                if ( window.location.hash ) scroll(0,0);
                setTimeout( function() { scroll(0,0); }, 1);

                var headerHeight = $('.main-header').height();

                if($('#wpadminbar').length) {
                    headerHeight += $('#wpadminbar').height();
                }

                $('.scroll').on('click', function(e) {
                    e.preventDefault();

                    $('html, body').animate({
                        scrollTop: ($($(this).attr('href')).offset().top - headerHeight) + 'px'
                    }, 1000, 'swing');
                });

                if(window.location.hash) {
                    $('html, body').animate({
                        scrollTop: ($(window.location.hash).offset().top - headerHeight) + 'px'
                    }, 1000, 'swing');
                }
            });


            /* ~~~~~~~~~~ First content element fix ~~~~~~~~~~ */

            $('.content').prepend('<span class="first-element-fix"></span>');
            $('blockquote').prepend('<span class="first-element-fix"></span>');
            $('.panel').prepend('<span class="first-element-fix"></span>');


            /* ~~~~~~~~~~ Mobile navigation ~~~~~~~~~~ */

            $('#mobile-navigation .navigation li a').addClass('mm-fullsubopen');


            /* ~~~~~~~~~~ Make dropdowns visible on hover ~~~~~~~~~~ */

            $('ul.navbar-nav li.dropdown').hover(function() {
                $(this).find('.dropdown-menu').stop(true, true).delay(50).fadeIn();
            }, function() {
                $(this).find('.dropdown-menu').stop(true, true).delay(50).fadeOut();
            });


            /* ~~~~~~~~~~ Delete empty <p> elements ~~~~~~~~~~~ */

            $('p').each(function() {
                var $this = $(this);
                if($this.html().replace(/\s|&nbsp;/g, '').length === 0)
                    $this.remove();
            });


            /* ~~~~~~~~~~ Change navigation after scroll ~~~~~~~~~~ */

            $(window).scroll(function() {
                if ($(this).scrollTop() >= 100) {
                    $('.main-header').addClass('main-header--scrolled');
                } else {
                    $('.main-header').removeClass('main-header--scrolled');
                }
            });


            /* ~~~~~~~~~~ Replace all SVG images with inline SVG ~~~~~~~~~~ */

            jQuery('img.svg').each(function(){
                var $img = jQuery(this);
                var imgID = $img.attr('id');
                var imgClass = $img.attr('class');
                var imgURL = $img.attr('src');

                jQuery.get(imgURL, function(data) {
                    var $svg = jQuery(data).find('svg');

                    if(typeof imgID !== 'undefined') {
                        $svg = $svg.attr('id', imgID);
                    }

                    if(typeof imgClass !== 'undefined') {
                        $svg = $svg.attr('class', imgClass+' replaced-svg');
                    }

                    $svg = $svg.removeAttr('xmlns:a');
                    $img.replaceWith($svg);
                }, 'xml');
            });


            /* ~~~~~~~~~~ Homepage CTA Testimonials ~~~~~~~~~~ */

            $(function() {
                title = $(".cta__testimonials");
                var isBlurred = true;
                var index = 0;
                var titles = [];

                $('.cta .cta__single-testimonial').each(function() {
                    titles.push($(this).text());
                });

                var titlesLength = titles.length;

                var swapTitle = function() {

                        $(title).text(titles[index]);
                        $(title).addClass("cta__testimonials--unblur");
                        isBlurred = !isBlurred;

                    index++;
                    if (index > titlesLength) {
                        index = 0;
                    }
                };

                var swapTitle2 = function() {

                    $(title).removeClass("cta__testimonials--unblur");
                    isBlurred = !isBlurred;

                    index++;
                    if (index > titlesLength) {
                        index = 0;
                    }
                };

                function render() {
                    if (isBlurred) {
                        setTimeout(swapTitle, 2000);
                    } else {
                        setTimeout(swapTitle2, 5000);
                        render();
                    }
                }

                render();
                jQuery(window).trigger('resize').trigger('scroll');
            });


            /* ~~~~~~~~~~ Header changed after scroll ~~~~~~~~~~ */

            if ($(window).width() < 992) {
                $(window).scroll(function() {
                    if ($(this).scrollTop() >= 100) {
                        $('.main-header .instagram-bar').slideUp();
                    } else {
                        $('.main-header .instagram-bar').slideDown();
                    }
                });
            }

            if ($(window).width() >= 992) {

                // Hide Header on on scroll down
                var didScroll;
                var lastScrollTop;
                var delta = 5;
                var navbarHeight = 175;

                $(window).scroll(function(event){
                    didScroll = true;
                });

                setInterval(function() {
                    if (didScroll) {
                        hasScrolled();
                        didScroll = false;
                    }
                }, 250);

            }

            function hasScrolled() {
                var st = $(this).scrollTop();

                // Make sure they scroll more than delta
                if(Math.abs(lastScrollTop - st) <= delta)
                    return;

                // If they scrolled down and are past the navbar, add class .nav-up.
                // This is necessary so you never see what is "behind" the navbar.
                if (st > lastScrollTop && st > navbarHeight){
                    // Scroll Down
                    $('.main-header--scrolled .scrolled-navbar').removeClass('scrolled-navbar--active');
                } else {
                    // Scroll Up
                    if(st + $(window).height() < $(document).height()) {
                        $('.main-header--scrolled .scrolled-navbar').addClass('scrolled-navbar--active');
                    }


                }

                lastScrollTop = st;
            }

            $(window).scroll(function() {
                if ($(this).scrollTop() <= 300) {
                    $('.scrolled-navbar').removeClass('scrolled-navbar--active');
                }
            });

            /* ~~~~~~~~~~ Mobile navigation ~~~~~~~~~~ */

            $(function(){
                var body = $('body'),
                    mobileNavigation = $('#mobile-navigation'),
                    firstNavigationElement = $('#mobile-navigation .mobile-navigation__list li:first-child'),
                    secondNavigationElement = $('#mobile-navigation .mobile-navigation__list li:nth-child(2)'),
                    thirdNavigationElement = $('#mobile-navigation .mobile-navigation__list li:nth-child(3)'),
                    fourthNavigationElement = $('#mobile-navigation .mobile-navigation__list li:nth-child(4)'),
                    fifthNavigationElement = $('#mobile-navigation .mobile-navigation__list li:nth-child(5)'),
                    sixthNavigationElement = $('#mobile-navigation .mobile-navigation__list li:nth-child(6)'),
                    tlo = new TimelineLite({
                        paused: true
                    }),
                    tlc = new TimelineLite({
                        paused: true
                    });


                /* ~~~~~ Open ~~~~~ */

                TweenMax.set(firstNavigationElement, {opacity: 0, y: 25});
                TweenMax.set(secondNavigationElement, {opacity: 0, y: 25});
                TweenMax.set(thirdNavigationElement, {opacity: 0, y: 25});
                TweenMax.set(fourthNavigationElement, {opacity: 0, y: 25});
                TweenMax.set(fifthNavigationElement, {opacity: 0, y: 25});
                TweenMax.set(sixthNavigationElement, {opacity: 0, y: 25});

                tlo.add(TweenLite.to(mobileNavigation, 0.1, {css:{display: 'block'}, ease:Power1.easeIn}));
                tlo.add(TweenLite.to(mobileNavigation, 0.5, {css:{right: 0}, ease:Power1.easeIn}));
                tlo.add(TweenLite.to(firstNavigationElement, 0.2, {css:{opacity: 1, y: 0}, ease:Power1.easeOut}));
                tlo.add(TweenLite.to(secondNavigationElement, 0.2, {css:{opacity: 1, y: 0}, ease:Power1.easeOut}));
                tlo.add(TweenLite.to(thirdNavigationElement, 0.2, {css:{opacity: 1, y: 0}, ease:Power1.easeOut}));
                tlo.add(TweenLite.to(fourthNavigationElement, 0.2, {css:{opacity: 1, y: 0}, ease:Power1.easeOut}));
                tlo.add(TweenLite.to(fifthNavigationElement, 0.2, {css:{opacity: 1, y: 0}, ease:Power1.easeOut}));
                tlo.add(TweenLite.to(sixthNavigationElement, 0.2, {css:{opacity: 1, y: 0}, ease:Power1.easeOut}));

                $('#open-mobile-navigation').on('click', function(event){
                    event.preventDefault();

                    body.addClass('overflow-hidden');
                    tlo.restart();
                });


                /* ~~~~~ Close ~~~~~ */

                tlc.add(TweenLite.to(mobileNavigation, 0.5, {css:{right: '-100%'}, ease:Power1.easeOut}));
                tlc.add(TweenLite.to(mobileNavigation, 0.1, {css:{display: 'none'}, ease:Power1.easeOut}));

                $('#close-mobile-navigation').on('click', function(event) {
                    event.preventDefault();

                    body.removeClass('overflow-hidden');
                    tlc.restart();
                });
            });


            /* ~~~~~~~~~~ Pay modal ~~~~~~~~~~ */

            $(function(){
                var body = $('body'),
                    mobileNavigation = $('#pay-modal'),
                    tlo = new TimelineLite({
                        paused: true
                    }),
                    tlc = new TimelineLite({
                        paused: true
                    });


                /* ~~~~~ Open ~~~~~ */


                tlo.add(TweenLite.to(mobileNavigation, 0.1, {css:{display: 'block'}, ease:Power1.easeIn}));
                tlo.add(TweenLite.to(mobileNavigation, 0.5, {css:{right: 0}, ease:Power1.easeIn}));

                $('[data-open-pay-modal]').on('click', function(event){
                    event.preventDefault();

                    body.addClass('overflow-hidden');
                    tlo.restart();
                });


                /* ~~~~~ Close ~~~~~ */

                tlc.add(TweenLite.to(mobileNavigation, 0.5, {css:{right: '-100%'}, ease:Power1.easeOut}));
                tlc.add(TweenLite.to(mobileNavigation, 0.1, {css:{display: 'none'}, ease:Power1.easeOut}));

                $('#close-pay-modal').on('click', function(event) {
                    event.preventDefault();

                    body.removeClass('overflow-hidden');
                    tlc.restart();
                });
            });



            /* ~~~~~~~~~~ Contact modal ~~~~~~~~~~ */

            $(function(){
                var body = $('body'),
                    mobileNavigation = $('#contact-modal'),
                    tlo = new TimelineLite({
                        paused: true
                    }),
                    tlc = new TimelineLite({
                        paused: true
                    });


                /* ~~~~~ Open ~~~~~ */


                tlo.add(TweenLite.to(mobileNavigation, 0.1, {css:{display: 'block'}, ease:Power1.easeIn, onComplete: function(){
                    google.maps.event.trigger(window, 'resize', {});
                }}));
                tlo.add(TweenLite.to(mobileNavigation, 0.5, {css:{right: 0}, ease:Power1.easeIn}));

                $('[data-open-contact-modal]').on('click', function(event){
                    event.preventDefault();

                    body.addClass('overflow-hidden body-fix');
                    tlo.restart();
                });


                /* ~~~~~ Close ~~~~~ */

                tlc.add(TweenLite.to(mobileNavigation, 0.5, {css:{right: '-100%'}, ease:Power1.easeOut}));
                tlc.add(TweenLite.to(mobileNavigation, 0.1, {css:{display: 'none'}, ease:Power1.easeOut}));

                $('#close-contact-modal').on('click', function(event) {
                    event.preventDefault();

                    body.removeClass('overflow-hidden body-fix');
                    tlc.restart();
                });
            });


            /* ~~~~~~~~~~ Preloader ~~~~~~~~~~ */

            $(function() {
                var loadedCount = 0,
                    imagesToLoad = $('.itl').length,
                    loadingProgress = 0;

                $('.itl').imagesLoaded({
                    background: true
                  }
                ).progress( function( instance, image ) {
                    loadProgress();
                });

                function loadProgress(imgLoad, image)
                {
                    loadedCount++;

                    loadingProgress = (loadedCount/imagesToLoad);

                    TweenLite.to(progressTl, 2, {progress:loadingProgress, ease:Linear.easeNone});

                }

                var progressTl = new TimelineMax({paused:true,onComplete:loadComplete});

                function loadComplete() {
                    var preloaderOutTl = new TimelineMax();

                    preloaderOutTl
                        .to($('.preloader__logo, .preloader__content-wrapper'), 3, {css:{'opacity':0}, ease:Power4.easeInOut})
                        .set($('body'), {className: '-=overflow-hidden'})
                        .to($('#preloader'), 0.7, {css:{'opacity':0}, ease:Power4.easeInOut})
                        .set($('#preloader'), {className: '+=preloader--hidden'});

                    return preloaderOutTl;


                }
            });


            /* ~~~~~~~~~~ Fix bug open Tabs in carousel ~~~~~~~~~~ */

            $('#FoodTabs').on('click', 'a[data-toggle="tab"]', function(e) {
              e.preventDefault();

              var $link = $(this);

              if (!$link.hasClass('active')) {

                //remove active class from other tab-link
                $('.food__tabs .nav-link:not(#' + $link.attr('id').replace('#','') + ')').removeClass('active');

                //remove active class from other tab-panes
                $('.tab-content:not(.' + $link.attr('href').replace('#','') + ') .tab-pane').removeClass('show active').addClass('fade');

                // click first submenu tab for active section
                // $('a[href="' + $link.attr('href') + '_all"][data-toggle="tab"]').click();

                // activate tab-pane for active section
                $('.tab-content .tab-pane#' + $link.attr('href').replace('#','') + '').addClass('active');
              }
            });


            /* ~~~~~~~~~~ Check only one box ~~~~~~~~~~ */

            $(function() {
                $('input[type="checkbox"]').on('change', function() {
                    $('input[type="checkbox"]').not(this).prop('checked', false);

                    if($('input[type="checkbox"]').is(':checked')) {
                        $('.card-body__pay').removeClass('card-body__pay--disabled');
                    } else {
                        $('.card-body__pay').addClass('card-body__pay--disabled');
                    }

                    if($('input.input-no').is(':checked')) {
                        $('.show .card-body__form--no-upgrade').removeClass('d-none');
                        $('.show .card-body__form--upgrade').addClass('d-none');
                    } else {
                        $('.show .card-body__form--upgrade').removeClass('d-none');
                        $('.show .card-body__form--no-upgrade').addClass('d-none');
                    }
                });

                $(window).bind('load', function () {

                    if( $('input[type="checkbox"]').length ) {
                        $('.upgradeYes').prop('checked', true);
                    }

                });

                if($('input.input-no').is(':checked')) {
                    $('.card-body__form--no-upgrade').removeClass('d-none');
                    $('.card-body__form--upgrade').addClass('d-none');
                } else {
                    $('.card-body__form--upgrade').removeClass('d-none');
                    $('.card-body__form--no-upgrade').addClass('d-none');
                }
            });


            /* ~~~~~~~~~~ Can open only one accordion ~~~~~~~~~~ */

            $(function() {
                if($('.single-price__buy').length) {
                    $('.card-header__link').on('click', function() {
                        $('.collapse').collapse('hide');
                    });

                    $('.card-header__link').on('click', function() {
                        $('.upgradeYes').prop('checked', true);
                        $('.upgradeNo').prop('checked', false);
                        $('.card-body__form--upgrade').removeClass('d-none');
                        $('.card-body__form--no-upgrade').addClass('d-none');
                    });
                }
            });


            /* ~~~~~~~~~~ Preloader animation title ~~~~~~~~~~ */

            if($('.preloader__content-wrapper__title').length) {
                $('.preloader__content-wrapper__title').addClass('preloader__content-wrapper__title--unblur');
            }


            /* ~~~~~~~~~~ Show scroll button on retreats page ~~~~~~~~~~ */

            if($('.section-scroll-button').length) {
                $(window).scroll(function() {

                    var fromTop = $('#booking, #cta-carousel').offset().top - 300;

                    if ($(this).scrollTop() >= fromTop) {
                        $('.section-scroll-button').addClass('no-show');
                    } else {
                        $('.section-scroll-button').removeClass('no-show');
                    }
                });
            }
    });


    $(window).bind('load resize orientationChange', function () {

        /* ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */
        /* ~~~~~~~~~~ Functions ~~~~~~~~~~ */
        /* ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */

            /* ~~~~~~~~~~ AOS Refresh ~~~~~~~~~~ */

            AOS.refresh();

            if($('#wpadminbar').length) {
                $('.modal').on('shown.bs.modal', function (e) {
                    var WPAdminBarHeight = $('#wpadminbar').height();
                    $('.modal').css("margin-top", (WPAdminBarHeight + 30));
                });
            }


            /* ~~~~~~~~~~ Sticky Footer ~~~~~~~~~~ */

            $(function(){
                var $footer = $('.footer-wrapper');

                var pos = $footer.position(),
                    height = ($(window).outerHeight() - pos.top) - ($footer.outerHeight() + 2);

                if (height > 0) {
                    $footer.css('margin-top', height);
                }
            });


            /* ~~~~~~~~~~ Insert modal ~~~~~~~~~~ */

            jQuery($("#accordion-1 .card-body__content > form").detach()).appendTo("#accordion-1 .card-body__checkboxes");
            jQuery($("#accordion-2 .card-body__content > form").detach()).appendTo("#accordion-2 .card-body__checkboxes");
            jQuery($("#accordion-3 .card-body__content > form").detach()).appendTo("#accordion-3 .card-body__checkboxes");
    });


    /* ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */
    /* ~~~~~~~~~~ Resuable functions ~~~~~~~~~~ */
    /* ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */

        /* ~~~~~~~~~~ Check if current devices is mobile ~~~~~~~~~~ */

        function isMobile() {
            try{ document.createEvent("TouchEvent"); return true; }
            catch(e){ return false; }
        }


        /* ~~~~~~~~~~ Google Maps ~~~~~~~~~~ */

        function new_map( $el ) {

            // var
            var $markers = $el.find('.marker');


            // vars
            var args = {
                zoom        : 16,
                center      : new google.maps.LatLng(0, 0),
                mapTypeId   : google.maps.MapTypeId.ROADMAP,
                mapTypeControl: false,
                scaleControl: false,
                scrollwheel: false,
                navigationControl: false,
                streetViewControl: false,
                styles: [
                    {
                        "featureType": "all",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "saturation": "0"
                            },
                            {
                                "color": "#fbf0e8"
                            },
                            {
                                "lightness": "0"
                            }
                        ]
                    },
                    {
                        "featureType": "all",
                        "elementType": "labels.text.stroke",
                        "stylers": [
                            {
                                "visibility": "on"
                            },
                            {
                                "color": "#64aaa7"
                            },
                            {
                                "lightness": "0"
                            },
                            {
                                "weight": "4.59"
                            }
                        ]
                    },
                    {
                        "featureType": "all",
                        "elementType": "labels.icon",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#fbf0e8"
                            },
                            {
                                "lightness": "0"
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#fefefe"
                            },
                            {
                                "lightness": 17
                            },
                            {
                                "weight": 1.2
                            }
                        ]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "lightness": "0"
                            },
                            {
                                "gamma": "1.00"
                            },
                            {
                                "weight": "0.01"
                            },
                            {
                                "color": "#64aaa7"
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#64aaa7"
                            },
                            {
                                "lightness": "0"
                            },
                            {
                                "visibility": "on"
                            }
                        ]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#64aaa7"
                            },
                            {
                                "lightness": "0"
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#fbf0e8"
                            },
                            {
                                "lightness": "0"
                            },
                            {
                                "weight": "1.70"
                            },
                            {
                                "visibility": "on"
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#fbf0e8"
                            },
                            {
                                "lightness": "0"
                            },
                            {
                                "weight": "0.01"
                            },
                            {
                                "visibility": "on"
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#fbf0e8"
                            },
                            {
                                "lightness": "0"
                            },
                            {
                                "weight": "1"
                            },
                            {
                                "visibility": "on"
                            }
                        ]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#fbf0e8"
                            },
                            {
                                "lightness": "0"
                            },
                            {
                                "weight": "1.61"
                            }
                        ]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#fbf0e8"
                            },
                            {
                                "lightness": "0"
                            },
                            {
                                "weight": "1.50"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#538f8c"
                            },
                            {
                                "lightness": "0"
                            }
                        ]
                    }
                ]
            };


            // create map
            var map = new google.maps.Map( $el[0], args);


            // add a markers reference
            map.markers = [];


            // add markers
            $markers.each(function(){

                add_marker( $(this), map );

            });


            // center map
            center_map( map );


            // return
            return map;

        }

        /*
        *  add_marker
        *
        *  This function will add a marker to the selected Google Map
        *
        *  @type    function
        *  @date    8/11/2013
        *  @since   4.3.0
        *
        *  @param   $marker (jQuery element)
        *  @param   map (Google Map object)
        *  @return  n/a
        */

        function add_marker( $marker, map ) {

            // var
            var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

            var template = [
                '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" width="15.2px" height="35.1px" viewBox="0 0 15.2 35.1" style="enable-background:new 0 0 15.2 35.1;" xml:space="preserve">',
                    '<style type="text/css">',
                        '.st0{clip-path:url(#SVGID_2_);fill:#fbf0e8;}',
                        '.st1{clip-path:url(#SVGID_2_);fill:none;stroke:#64aaa7;}',
                        '.st2{clip-path:url(#SVGID_2_);fill:none;stroke:#fbf0e8;stroke-width:1.563;}',
                        '.st3{clip-path:url(#SVGID_4_);fill:#fbf0e8;}',
                        '.st4{clip-path:url(#SVGID_4_);fill:none;stroke:#F5C7BA;}',
                        '.st5{clip-path:url(#SVGID_4_);fill:none;stroke:#fbf0e8;stroke-width:1.563;}',
                    '</style>',
                    '<g>',
                        '<defs>',
                            '<rect id="SVGID_1_" width="15.2" height="35.1"/>',
                        '</defs>',
                        '<clipPath id="SVGID_2_">',
                            '<use xlink:href="#SVGID_1_"  style="overflow:visible;"/>',
                        '</clipPath>',
                        '<path class="st0" d="M7.6,14.7c3.9,0,7.1-3.2,7.1-7.1s-3.2-7.1-7.1-7.1S0.5,3.7,0.5,7.6S3.7,14.7,7.6,14.7"/>',
                        '<circle class="st1" cx="7.6" cy="7.6" r="7.1"/>',
                        '<line class="st2" x1="7.6" y1="35.1" x2="7.6" y2="1.6"/>',
                    '</g>',
                '</svg>'
                ].join('\n');

            var svgWidth = 0,
                svgHeight = 0;

            if ($(window).width() >= 1500) {
                svgWidth = 30;
                svgHeight = 72;
            } else if($(window).width() >= 1200) {
                svgWidth = 27.5;
                svgHeight = 66;
            } else if($(window).width() >= 992) {
                svgWidth = 25;
                svgHeight = 60;
            } else if($(window).width() >= 768) {
                svgWidth = 22.5;
                svgHeight = 54;
            } else if($(window).width() >= 576) {
                svgWidth = 20;
                svgHeight = 48;
            } else {
                svgWidth = 17.5;
                svgHeight = 42;
            }

            // create marker
            var marker = new google.maps.Marker({
                position    : latlng,
                map         : map,
                icon: { url: 'data:image/svg+xml;charset=UTF-8,' + encodeURIComponent(template), scaledSize: new google.maps.Size(svgWidth, svgHeight) }
            });

            // add to array
            map.markers.push( marker );

            // if marker contains HTML, add it to an infoWindow
            if( $marker.html() )
            {
                // create info window
                var infowindow = new google.maps.InfoWindow({
                    content     : $marker.html()
                });

                // show info window when marker is clicked
                google.maps.event.addListener(marker, 'click', function() {

                    infowindow.open( map, marker );

                });
            }

        }

        /*
        *  center_map
        *
        *  This function will center the map, showing all markers attached to this map
        *
        *  @type    function
        *  @date    8/11/2013
        *  @since   4.3.0
        *
        *  @param   map (Google Map object)
        *  @return  n/a
        */

        function center_map( map ) {

            google.maps.event.addDomListener(window, "resize", function() {
                var center = map.getCenter();
                google.maps.event.trigger(map, "resize");
                map.setCenter(center);
            });

            // vars
            var bounds = new google.maps.LatLngBounds();

            // loop through all markers and create bounds
            $.each( map.markers, function( i, marker ){

                var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

                bounds.extend( latlng );

            });

            // only 1 marker?
            if( map.markers.length == 1 )
            {
                // set center of map
                map.setCenter( bounds.getCenter() );
                map.setZoom( 16 );
            }
            else
            {
                // fit to bounds
                map.fitBounds( bounds );
            }

        }


        // $(document).ready(function(){

        //     $('.acf-map').each(function(){

        //         // create map
        //         map = new_map( $(this) );

        //     });

        // });

})(jQuery);