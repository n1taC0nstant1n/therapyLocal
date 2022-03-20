$(document).ready(function(){
    $('#slider-home').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay: false,
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

  
