$(document).ready(function() { 
    //slider de sponsor
    $("#owl-sponsor").owlCarousel({ 
      autoPlay: 3000, //Set AutoPlay to 3 seconds 
      items : 6,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3],
      pagination : false
 
    });
   //fondo scroll de blog home 
    $(window).scroll(function(){
        var barra = $(window).scrollTop();
        var posicion = barra*0.10;
        $('.latest-blog').css({
            'background-position:': '0 -'+posicion+'px'
        });
    });
    //fondo scroll de blog home 
    $(window).scroll(function(){
        var barra = $(window).scrollTop();
        var posicion = barra*0.10;
        $('.cta-section').css({
            'background-position:': '0 -'+posicion+'px'
        });
    });
     $(window).scroll(function(){
        var barra = $(window).scrollTop();
        var posicion = barra*0.10;
        $('.who').css({
            'background-position:': '0 -'+posicion+'px'
        });
    });

     $(window).scroll(function(){
        var barra = $(window).scrollTop();
        var posicion = barra*1;
       if (barra>50) {
         $('.der').css({
            'top': ''+(50+posicion)+'px'
        });
          $('.izq').css({
            'top': ''+(50+posicion)+'px'
        });
       }else{
        $('.der').css({
            'top': '59px'
        });
        $('.izq').css({
            'top': '59px'
        });
       } 
    });

     $('#publicidad1').click(function(){ 
         $('.der').css({
            'display': 'none' 
        });
     });
     $('#publicidad2').click(function(){ 
         $('.izq').css({
            'display': 'none' 
        });
     });
    
});