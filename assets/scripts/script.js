$(document).ready(function () {

   
        $(window).scroll(function(){
            var scroll = $(window).scrollTop();
            if (scroll > 380) {
              $(".navbar").css("background" , "rgb(25 25 25 / 97%)");
            }
      
            else{
                $(".navbar").css("background" , "rgb(30 30 65 / 0%)");  	
            }
        })
      




            $(window).on('load', () => {
                $('.hero_header').css('display', 'none').fadeIn(2000)
                $('.hero_header').siblings('h3,h2,button').css('display', 'none').fadeIn(2500)
            })

})



