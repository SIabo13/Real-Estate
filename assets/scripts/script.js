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

  




    $(window).on('load',() =>{
        $('.hero_header').css('display','none').fadeIn(2000)
    $('.hero_header').siblings('h3,h2,button').css('display','none').fadeIn(2500)
    })


//     let bottom_of_screen = $(window).scrollTop() + $(window).innerHeight();

//     let location = $('.fp-title').offset().top + 20;

//     //Add window height too top of screen to get bottom of screen
//     let bottom_of_window = $(window).scrollTop() + bottom_of_screen;

//     $(window).scroll(()=>{
        
//         let n = $(window).scrollTop() + bottom_of_screen
//         console.log(location)

//     })

//     const fadeInEffect = (element,locations) =>{
//          $(element).children().css('display','none')
       

//         //Figure out how to get each element to run through function and trigger when bottom of screen get to it
//         $(window).scroll(function(){
   
//             for(let i = 0; i < locations[i].length; i++){
//                 if(locations[i] > bottom_of_window){
//                     $(locations[i]).fadeIn(2000)
//                     $(locations[i]).fadeIn(3000)
//                     $(locations[i]).fadeIn(3000)
//                 }
//             }
            
        
//         })

    

//     }
//     fadeInEffect('#about_section-2 .col-md-6',['h1','h2','p'])

   

//     const fadeUpEffect = (element) =>{
//         $(element).css({'position':'relative','top':'300px','opacity':'0',"overflow":'auto'}).animate({top: '0',opacity:'1'},1200)

//     }

//     fadeUpEffect('#section-7 .col-md-4')

//     fadeUpEffect('#section-5')
//     fadeInEffect('#section-1 h2')


  

// })


console.log("I am a test")