/*
  * @package Barrier
  * @subpackage arrier HTML
  * 
  * Template Scripts
  * Created by Esrat
  
  1. Fixed header
  2. Site search
  3. Main slideshow
  4. Owl Carousel
      a. Testimonial
      b. Clients
      c. Team
  5. Back to top
  6. Skills
  7. BX slider
      a. Blog Slider
      b. Portfolio item slider
  8. Isotope
  9. Animation (wow)
  10. Flickr
  
*/


jQuery(function($) {
  "use strict";
  
  $.noConflict();
     $('.nav a').on('click', function(){ 
        if($('.navbar-toggle').css('display') !='none'){
            $(".navbar-toggle").trigger( "click" );
        }
    });

    /* ----------------------------------------------------------- */
   /*  Animation
   /* ----------------------------------------------------------- */
        new WOW().init();

    /* ----------------------------------------------------------- */
   /*  Counter
   /* ----------------------------------------------------------- */
    $('.counter').counterUp({
            delay: 100,
            time: 2000
        });

   /* ----------------------------------------------------------- */
   /*  Contact map
   /* ----------------------------------------------------------- */
    var map2;
        map2 = new GMaps({
          div: '#map',
          lat: 13,
          lng: 10,
          scrollwheel: false,
          panControl: false,
          zoomControl: false,
        });

        map2.addMarker({
          lat: 13,
          lng: 10,
        });


    /* ----------------------------------------------------------- */
   /*  Prettyphoto
   /* ----------------------------------------------------------- */
        $("a[data-rel^='prettyPhoto']").prettyPhoto();
  

       
   /* ==============================================
      Menu toggle
    =============================================== */ 
    
      $('a.page-scroll').click(function() {
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
              $('html,body').animate({
                scrollTop: target.offset().top - 40
              }, 900);
              return false;
            }
          }
        });


    /*==================================================
    Show Menu on Book
    ====================================================*/
    
    $(window).bind('scroll', function() {
        var navHeight = $(window).height() - 40;
        if ($(window).scrollTop() > navHeight) {
            $('.navbar-default').addClass('on');
        } else {
            $('.navbar-default').removeClass('on');
        }
    });

    $('body').scrollspy({ 
        target: '.navbar-default',
        offset: 80
    })
   


  // // accordian
  // $('.accordion-toggle').on('click', function(){
  //   $(this).closest('.panel-group').children().each(function(){
  //   $(this).find('>.panel-heading').removeClass('active');
  //    });

  //   $(this).closest('.panel-heading').toggleClass('active');
  // });
  
      //Portfolio item and blog slider
    
/*Smooth Scroll*/
      smoothScroll.init({
          speed: 400,
          easing: 'easeInQuad',
          offset:0,
          updateURL: true,
          callbackBefore: function ( toggle, anchor ) {},
          callbackAfter: function ( toggle, anchor ) {}
        }); 


  /* ----------------------------------------------------------- */
  /*  Main slideshow
  /* ----------------------------------------------------------- */

  $('#slider').Carousel({
    pause: true,
    interval: 100000,
    pagination:true
  });



    
  // Feature -tab

    $('#feature-tab a:last').tab('show')

    // PIE chart

    



});
/*------------------------New functions----------------------------*/
/*search section keyword textbox*/
$('#search-box').focus(function()
{
    /*to make this flexible, I'm storing the current width in an attribute*/
    $(this).attr('data-default', $(this).width());
    $(this).animate({ width: 300 }, 'slow');
}).blur(function()
{
    /* lookup the original width */
    var w = $(this).attr('data-default');
    $(this).animate({ width: 200 }, 'slow');
});
/*search section - hiding/showing elements*/ 
$("#advance").click(function()
{
 $('#locationField').toggle(1000);
});
/*Preferred location textbox*/
$('#autocomplete').focus(function()
{
    /*to make this flexible, I'm storing the current width in an attribute*/
    $(this).attr('data-default', $(this).width());
    $(this).animate({ width: 600 }, 'slow');
});
     
$('#submit').click(function()
 {
  
    var category = $("#category").find('option:selected').val();
    var item = $("#item").val();
    var price = $("#price").val();

    $("#hide-categ").val(category);
    $("#hide-item").val(item);
    $("#hide-price").val(price);
}
);


 
    $("#search-box").autocomplete({
        source: 'data.php'
    });
 

