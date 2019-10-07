jQuery(document).ready(function() {
  'use strict';
//***************************
// FlexSlider Function
//***************************
jQuery('.flexslider').flexslider({
    animation: "slide",
    prevText: "<em class='fa fa-angle-left'></em>",
    nextText: "<em class='fa fa-angle-right'></em>",
    start: function(slider) {
        jQuery('body').removeClass('loading');
    }
});


//***************************
// PrettyPhoto Function
//***************************
    jQuery("area[data-rel^='prettyPhoto']").prettyPhoto();

    jQuery(".gallery:first a[data-rel^='prettyPhoto']").prettyPhoto({
        animation_speed: 'normal',
        theme: 'light_square',
        slideshow: 3000,
        autoplay_slideshow: true
    });
    jQuery(".gallery:gt(0) a[data-rel^='prettyPhoto']").prettyPhoto({
        animation_speed: 'fast',
        slideshow: 10000,
        hideflash: true
    });

    jQuery("#custom_content a[data-rel^='prettyPhoto']:first").prettyPhoto({
        custom_markup: '<div id="map_canvas" style="width:260px; height:265px"></div>',
        changepicturecallback: function() {
            initialize();
        }
    });

    jQuery("#custom_content a[data-rel^='prettyPhoto']:last").prettyPhoto({
        custom_markup: '<div id="bsap_1259344" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div><div id="bsap_1237859" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6" style="height:260px"></div><div id="bsap_1251710" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div>',
        changepicturecallback: function() {
            _bsap.exec();
        }
    });

//***************************
// Event Toggle Function
//***************************
    jQuery('#btn-one').on("click", function() {
        jQuery("#map-one").slideToggle("slow");
    });

    jQuery('#btn-two').on("click", function() {
        jQuery("#map-two").slideToggle("slow");
    });

    jQuery('#btn-three').on("click", function() {
        jQuery("#map-three").slideToggle("slow");
    });

//***************************
// Click to Top Button
//***************************
  jQuery('.backtop-btn').on("click", function() {
      jQuery('html, body').animate({
          scrollTop: 0
      }, 800);
      return false;
  });

//***************************
// Donation Active Function
//***************************
  jQuery('.as-donation-section ul li').on('click', function() {
      jQuery('li.as-current').removeClass('as-current');
      jQuery(this).addClass('as-current');
  });


//***************************
// WordCounter Function
//***************************
  jQuery(".word-count").counterUp({
      delay: 10,
      time: 1000
  });

//***************************
// Cart Hover Function
//***************************
  jQuery('.as-cart-wrap').hover(function() {
      jQuery('.as-cart-box').stop(true, false).slideDown();
  },

  function() {
      jQuery('.as-cart-box').stop(true, false).slideUp();
  });

//***************************
// Responsive Menu Function
//***************************
  jQuery(function() {
      jQuery('#as-menu').asmenu();
  });

});
