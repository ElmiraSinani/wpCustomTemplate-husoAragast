
  <?php get_sidebar( 'footer' ); ?>

</div>
<!--// Main Wrapper //-->

   
    
	
    <!-- Don't forget analytics -->
	

    <!-- jQuery (necessary for JavaScript plugins) -->
    <script src="<?php echo bloginfo('template_url'); ?>/js/jquery.min.js"></script>
    <script src="<?php echo bloginfo('template_url'); ?>/js/modernizr.js"></script>
    <script src="<?php echo bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo bloginfo('template_url'); ?>/js/jquery.dlmenu.js"></script>
    <script src="<?php echo bloginfo('template_url'); ?>/js/flexslider-min.js"></script>
    <script src="<?php echo bloginfo('template_url'); ?>/js/jquery.prettyphoto.js"></script>
    <script src="<?php echo bloginfo('template_url'); ?>/js/waypoints-min.js"></script>
    
    <script src="<?php echo bloginfo('template_url'); ?>/js/newsticker.js"></script>
    <script src="<?php echo bloginfo('template_url'); ?>/js/functions.js"></script>
    <script>
      // NewsTicker
      'use strict';
        var options = {
          newsList: "#as-news",
          startDelay: 10,
          placeHolder1: ""
        }
        jQuery().newsTicker(options);
    </script>
  </body>
</html>
