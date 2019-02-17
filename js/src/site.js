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

});