jQuery(document).ready(function($){
// Add your custom jQuery here


            $(document).ready(function () {

                var menuLeft = $('#test-menu-left').slideMenu({
                    position: 'left',
                    submenuLinkAfter: ' >',
                    backLinkBefore: '< '
                });

                var menuRight = $('#test-menu-right').slideMenu({
                    submenuLinkAfter: ' ⇒',
                    backLinkBefore: '⇐ '
                });

                if ($(window).width() > 767) {
                    menuRight.open(false);
                }

            });

              $('.hamburger').click(function()
            {
              $('.hamburger').toggleClass('is-active');

              if ($('.hamburger').hasClass("is-active")) {
          //         $('main').css('margin-right','320px');
          //         $('main').css('margin-left','-320px');
          //         $('.controls').css('margin-right','320px');

              }
              else {
                   $('main').css('margin-right','0px');  
          //         $('main').css('margin-left','0px');
          //         $('.controls').css('margin-right','0px');  
              }

            });


  // Init ScrollMagic
  var controller = new ScrollMagic.Controller();

  var slideParallaxScene = new ScrollMagic.Scene({
    triggerElement: '.bcg-parallax',
    triggerHook: 1,
    duration: '200%'
  })
  .setTween(TweenMax.from('.bcg', 1, {y:'-50%', ease:Power0.easeNone}))
//  .addIndicators()
  .addTo(controller);


   var avellarBadgeScene = new ScrollMagic.Scene({
        triggerElement: '.trigger-badge',
        triggerHook: 0.1,
        revers: true
    })
    .setClassToggle('.logoBadge', 'in-view') // add class to fade-in
//    .addIndicators()
    .addTo(controller);

   var avellarNumberScene = new ScrollMagic.Scene({
        triggerElement: '.trigger-badge',
        triggerHook: 0.1,
        reverse: true
    })
    .setClassToggle('.siteNumberWrapper', 'in-view') // add class to fade-in
    .addIndicators()
    .addTo(controller);



/*
          var serviceImage1 = $('.box1');
          $(serviceImage1).mouseover(function(){
            TweenMax.to(serviceImage1, 1.5, {scale:1.15});

          });
          $(serviceImage1).mouseout(function(){
            TweenMax.to(serviceImage1, 1, {scale: 1});
          });

          var serviceImage2 = $('.box2');
          $(serviceImage2).mouseover(function(){
            TweenMax.to(serviceImage2, 1.5, {scale:1.15});
          });
          $(serviceImage2).mouseout(function(){
            TweenMax.to(serviceImage2, 1, {scale: 1});
          });

          var serviceImage3 = $('.box3');
          $(serviceImage3).mouseover(function(){
            TweenMax.to(serviceImage3, 1.5, {scale:1.15});
          });
          $(serviceImage3).mouseout(function(){
            TweenMax.to(serviceImage3, 1, {scale: 1});
          });
*/



});