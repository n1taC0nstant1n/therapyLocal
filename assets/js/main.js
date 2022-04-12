$(document).ready(function(){
    $('#slider-home').owlCarousel({
    loop:true,
    // margin:10,
    nav:true,
    autoplay: true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
    })
    // add icon to servicii lista
    $(".servicii-lista li").prepend('<i class="fa-solid fa-circle-check"></i>');
    // $('.contraindicatii li').prepend('<i class="fa-solid fa-circle-xmark"></i>');

    if($('section ul').hasClass('contraindicatii')){
        $('.contraindicatii li i').remove();
        $('.contraindicatii li').prepend('<i class="fa-solid fa-circle-xmark"></i>')
    }

    /*arata sublista meniu desktop*/ 
    if($(window).width()>991){
        $(".nav-item.dropdown").hover(function (event) {
             event.preventDefault();
            $(this).find(".dropdown-menu").toggleClass('arata-sublista');
        });
    } else {
        $('.nav-link.dropdown-toggle').click(function (event) {
            event.preventDefault();
            $(this).parent().find(".dropdown-menu").slideToggle();
        });
    }

    if ($('#back-to-top').length) {
        var scrollTrigger = 100, // px
        backToTop = function () {
            var scrollTop = $(window).scrollTop();
            if (scrollTop > scrollTrigger) {
                $('#back-to-top').addClass('show-bttp');
            } else {
                $('#back-to-top').removeClass('show-bttp');
            }
        };
        backToTop();
        $(window).on('scroll', function () {
            backToTop();
        });
        $('#back-to-top').on('click', function (e) {
            e.preventDefault();
            $('html,body').animate({
                scrollTop: 0
            }, 700);
        });
    }


    });

    /* close menu resp */
    $(".close-navbar").click(function(){
        $('.navbar-collapse').removeClass('show')
    });

    /* sticky menu */
    
    $(window).scroll(function () {
        if($(window).scrollTop() > 140 && $(window).width() > 991 ) {
            $("header").addClass('sticky');
        } else {
            $("header").removeClass('sticky');
        }
    });

    $('nav li a').filter(function(){
        return this.href === location.href;
      }).addClass('active');




  
