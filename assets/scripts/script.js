$(document).ready(function () {

            //Navbar Solid Background
            $(function () {
                let header = $(".navbar");
                $(window).scroll(function () {
                    let scroll = $(window).scrollTop();
                    if (scroll > 200) {
                        header.addClass("nav-scrolled");
                    } else {
                        header.removeClass("nav-scrolled")
                    }
                })
            })
            //Nav toggle background color change
            $(".navbar-toggler").on('click', function () {
                if ($("nav").children('div').hasClass("show")) {
                    $(".navbar").css("background", "#1d1b1b00");
                } else if (!$("nav:nth-child(3)").hasClass("show")) {
                    $(".navbar").css("background", "#1d2124");
                    $(".nav-scrolled").css("background-color", "#343a40f0")

                }
            })






            $(window).on('load', () => {
                $('.hero_header').css('display', 'none').fadeIn(2000)
                $('.hero_header').siblings('h3,h2,button').css('display', 'none').fadeIn(2500)
            })