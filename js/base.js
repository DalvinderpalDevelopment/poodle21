(function($) {

    'use strict';
    
    function slideshow() {

        if ($("body").hasClass("home")) {

            var slideIndex = 1;
            showSlides(slideIndex);

            window.plusSlides = function (n) {
            showSlides(slideIndex += n);
            }

            window.currentSlide = function (n) {
            showSlides(slideIndex = n);
            }

            function showSlides(n) {

                var i;
                var slides = document.getElementsByClassName("slideshow-slides");
                var dots = document.getElementsByClassName("dot");

                if (n > slides.length) {slideIndex = 1}
                if (n < 1) {slideIndex = slides.length}

                for (i = 0; i < slides.length; i++) {

                        slides[i].style.display = "none";

                }

                for (i = 0; i < dots.length; i++) {

                    dots[i].className = dots[i].className.replace(" active", "");

                }

                slides[slideIndex-1].style.display = "flex";
                dots[slideIndex-1].className += " active";

            }

        }

    }

    
    function modal() {

        var modal = document.getElementById("signup-modal");

        var btn1 = document.getElementById("signup-button-1");

        var btn2 = document.getElementById("signup-button-2");

        var span = document.getElementsByClassName("modal-close")[0];

        if ($("body").hasClass("home")) {

            btn1.onclick = function() {

                modal.style.display = "block";
    
            }
    
    
        }

        btn2.onclick = function() {

            modal.style.display = "block";

        }

        span.onclick = function() {

            modal.style.display = "none";

        }

        window.onclick = function(event) {

            if (event.target == modal) {
                modal.style.display = "none";
            }

        }

    }

    function mobileMenu() {

        var menu = document.getElementById("mobile-menu");

        var mobile_btn = document.getElementById("mobile-button");

        var span = document.getElementsByClassName("close")[0];

        mobile_btn.onclick = function() {

            menu.style.display = "block";

        }

        span.onclick = function() {

            menu.style.display = "none";

        }

        window.onclick = function(event) {

            if (event.target == menu) {

                menu.style.display = "none";

            }

        }

    }

    function activeLinks() {

        var link = $(".menu").find("a");

        link.each(function( index ) {

            $(this).on("click",function(){

                $("a.active").removeClass("active");

                $(this).addClass("active");
                
              })

        });

        var link = $(".mobile").find("a");

        link.each(function( index ) {

            $(this).on("click",function(){

                $("a.active").removeClass("active");

                $(this).addClass("active");
                
              })

        });

    }

$( document ).ready(function() {

    slideshow();

    modal();

    mobileMenu();

    activeLinks();

});

})(jQuery);
