
/*-------------GOOGLE MAPS-----------------*/

/*function initialize() {

    var myLatlng = new google.maps.LatLng(59.934602, 30.334607);
    var mapOptions = {
        center: new google.maps.LatLng(59.934602, 30.334607),
        zoom: 17,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        scrollwheel: false
    };
    var map = new google.maps.Map(document.getElementById("map_canvas"),
        mapOptions);
    var marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
        title:"Ditlogistic"
    });
}

function loadScript() {
    var script = document.createElement("script");
    script.type = "text/javascript";
    script.src = "http://maps.googleapis.com/maps/api/js?key=AIzaSyAaOWKyamSxMTXclSDFmJ2N4Am20PCTD6I&sensor=FALSE&callback=initialize";
    document.body.appendChild(script);
}

window.onload = loadScript;
*/
$(function () {

    $('.responsive').slick({
        dots: false,
        infinite: true,
        autoplay: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow: '<button type="button" class="slick-prev"></button>',
        nextArrow: '<button type="button" class="slick-next"></button>',
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });

});

$(function() {

    // $(window).scroll(function() {
    //     if($(this).scrollTop() != 0) {
    //         $('#toTop').fadeIn();
    //     } else {
    //         $('#toTop').fadeOut();
    //     }
    // });
    $('#toTop').click(function() {
        $('body,html').animate({scrollTop: 0}, 1000);
    });

    $('.smoothScroll').click(function(event) {
        event.preventDefault();
        var href=$(this).attr('href');
        var target=$(href);
        var top=target.offset().top;
        $('html,body').animate({
            scrollTop: top
        }, 1000);
    });

    $(window).scroll(function() {
        if ($(".navigation").offset().top > 70) {
            //$(".navigation").addClass("navigation--onScroll"); 
            //$(".navigation--onScroll").removeClass(".navigation"); 
            //$(".navigation").css('display', 'block')
            $(".navigation").fadeIn("slow");      
        } else {
            //$(".navigation--onScroll").addClass("navigation"); 
            //$(".navigation").removeClass("navigation--onScroll"); 
            //$(".navigation").css('display', 'none')   
            $(".navigation").fadeOut("slow");      
        }

     $('.about__desc').each(function(){
        var imagePos2 = $(this).offset().top;

        var topOfWindow = $(window).scrollTop();
            if (imagePos2-400 < topOfWindow) {  
                $(this).addClass("animated");            
                $(this).addClass("visible");
                $(this).addClass("fadeInLeft");           
            }
        });

      $('.services__box').each(function(){
        var imagePos3 = $(this).offset().top;

        var topOfWindow = $(window).scrollTop();
            if (imagePos3-400 < topOfWindow) {  
                $(this).addClass("animated");            
                $(this).addClass("visible");
                $(this).addClass("fadeIn");          
            }
        });

      $('.benefits__item').each(function(){
        var imagePos4 = $(this).offset().top;

        var topOfWindow = $(window).scrollTop();
            if (imagePos4-400 < topOfWindow) {  
                $(this).addClass("animated");   
                $(this).addClass("visible");         
                $(this).addClass("fadeInUp");          
            }
        });

      $('.contacts__animated').each (function() {
        var imagePos4 = $(this).offset().top;

        var topOfWindow = $(window).scrollTop();
            if (imagePos4-300 < topOfWindow) {  
                $(this).addClass("animated");  
                $(this).addClass("visible");          
                $(this).addClass("fadeIn");          
            }
      });
    });
});

jQuery(document).ready(function($) {
    $('.services--img').each(function(){
        $(this).css('height', $(this).width());
        $('.services--desc').css('height', $(this).height());
    });

    $('.slide-image').each(function(){
        $(this).css('height', $(this).width());
    });

    var ab = $('.about');
    var head =$('.header')

    head.each(function(){
        var h = $(this).height(); 
        if ($(this).width()>=500) {       
            ab.css("margin-top", h + 90);
        }
    });

});

$(function(){
    $('.block_title').each(function() {
        $(this).fadeIn("slow");
    });
});
