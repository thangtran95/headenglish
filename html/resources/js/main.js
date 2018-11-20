function Helper(){
    var methods = this;

    methods.initSlickSlider = function(){
        if( $('.regular1').length ){
            $('.regular1').on('init', function(event, slick){
                $('.navbar-category .category').css('min-height' , $('.regular1').height());
            });
            $(window).on('resize', function(){
                $('.navbar-category .category').css('min-height' , $('.regular1').height());
            })
        }   
        
        $(".regular1").not('slick-initialized').slick({
            dots: false,
            infinite: true,
            speed: 900,
            // prevArrow: '<button class="fa fa-angle-left"></button>',
            // nextArrow: '<button class="fa fa-angle-right"></button>',
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            responsive: [
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll:1
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll:1
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }

            ]
        })

        $(".regular2").not('slick-initialized').slick({
            dots: false,
            infinite: false,
            speed: 900,
            prevArrow: '<button class="fa fa-angle-left"></button>',
            nextArrow: '<button class="fa fa-angle-right"></button>',
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: false,
            autoplaySpeed: 2000,
            responsive: [
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll:1
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll:1
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            }

            ]
        });

    }
    

    methods.initToTop = function(){
        $(window).scroll(function() {
            if ($(this).scrollTop() >= 50) {
                $('#top').fadeIn("fast");   
            } else {
                $('#top').fadeOut("fast");  
            }
        });
        $('#top').click(function() {        
            $('body,html').animate({
                scrollTop : 0               
            }, 500);
        });
    }


    methods.initFixTop = function(){
        jQuery(function($) {
            function fixDiv() {
                if($(window).width() > 992){
                    var $cache = $('#menu');
                    var $addget = $('#fixedmobile');
                    if ($(window).scrollTop() > 137)
                    {
                        // $('#fixed-mobile').removeClass('fix-mobile-ipad');
                        $cache.addClass('getFixed-1');

                    }
                    else{
                        // $('#fixedmobile').addClass('fix-mobile-ipad');
                        $cache.removeClass('getFixed-1');
                    }
                }
            }

            $(window).scroll(fixDiv);
            fixDiv();
            $(window).resize( function(){
                fixDiv();
            });
        });
    }

    methods.initMenu = function(){
        var open = false;
        $('#btn-toggle').on('click' , function(){
            if( open){
                $('#menu').removeClass('open');
                $('#btn-toggle').removeClass('active');
                $('body').removeClass('menu-open');
            }else{
                $('#menu').addClass('open');
                $('#btn-toggle').addClass('active');
                $('body').addClass('menu-open');
            }
            open = !open;
        });
        $('body, html').on('click', function(event){
            var target = $(event.target);
            if( !target.is('#menu , #menu * ,#btn-toggle ,#btn-toggle *, .header-mid, .header-mid *')){
                $('#menu').removeClass('open');
                $('#btn-toggle').removeClass('active');
                $('body').removeClass('menu-open');
                open = false;
            }
        });
        $('#menu .has-submenu .icon-first-submenu').on('click' , function(event){
            event.preventDefault();
            var parent = $(this).parents('.has-submenu');
            $('#menu .has-submenu').not(parent).removeClass('open').find('.submenu-1').slideUp()
            $('#menu .has-submenu').not(parent).find('.has-second-submenu').removeClass('open');
            $('#menu .has-submenu').not(parent).find('.second-submenu').slideUp();
            parent.toggleClass('open').find('.submenu-1').slideToggle();
        });
        $('#menu .has-second-submenu .icon-second-submenu').on('click' , function(event){
            event.preventDefault();
            var parent = $(this).parents('.has-second-submenu');
            $('#menu .has-second-submenu').not(parent).removeClass('open').find('.submenu-2').slideUp();
            parent.toggleClass('open').find('.submenu-2').slideToggle();
        });
    }

    methods.initDownPdf = function(){
        $('#click-show-pdf').on('click', function(){
            $('.box-download-pdf').slideToggle();
            $('#click-show-pdf .fa-chevron-down').toggleClass('rota90');
        })
    }

    methods.initListBank = function(){
        $('#show-list-bank').on('click', function(){
            $('#show-boxbank').slideDown();
            $('.box-bank--1').slideUp();
        });
        $('#show-master-visa').on('click', function(){
            $('.box-bank--1').slideDown();
            $('#show-boxbank').slideUp();
        })
    }


   
    methods.init = function(){
        methods.initToTop();
        methods.initFixTop();
        methods.initMenu();
        methods.initSlickSlider();
        methods.initDownPdf();
        methods.initListBank();

    }

    return methods;
}

$(function(){
    var helper = new Helper();
    helper.init();
})