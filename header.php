<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>
            <?php if ( is_category() ) {
                    echo 'Category Archive for &quot;'; single_cat_title(); echo '&quot; | '; bloginfo( 'name' );
            } elseif ( is_tag() ) {
                    echo 'Tag Archive for &quot;'; single_tag_title(); echo '&quot; | '; bloginfo( 'name' );
            } elseif ( is_archive() ) {
                    wp_title(''); echo ' Archive | '; bloginfo( 'name' );
            } elseif ( is_search() ) {
                    echo 'Search for &quot;'.wp_specialchars($s).'&quot; | '; bloginfo( 'name' );
            } elseif ( is_home() || is_front_page() ) {
                    bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );
            }  elseif ( is_404() ) {
                    echo 'Error 404 Not Found | '; bloginfo( 'name' );
            } elseif (  is_page() ) {
                 bloginfo( 'name' );  echo ' | '; the_title();       
            } elseif ( is_single() ) {
                    wp_title('');
            } else {
                    echo wp_title( ' | ', false, right ); bloginfo( 'name' );
            } ?>
        </title>
	
	 <!-- Css Files -->
         <link href="<?php echo bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo bloginfo('template_url'); ?>/css/font-awesome.css" rel="stylesheet">
        <link href="<?php echo bloginfo('template_url'); ?>/css/style.css" rel="stylesheet">
        <link href="<?php echo bloginfo('template_url'); ?>/css/owl.carousel.css" rel="stylesheet">
        <link href="<?php echo bloginfo('template_url'); ?>/css/color.css" rel="stylesheet">
        <link href="<?php echo bloginfo('template_url'); ?>/css/dl-menu.css" rel="stylesheet">
        <link href="<?php echo bloginfo('template_url'); ?>/css/flexslider.css" rel="stylesheet">
        <link href="<?php echo bloginfo('template_url'); ?>/css/prettyphoto.css" rel="stylesheet">
        <link href="<?php echo bloginfo('template_url'); ?>/css/responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	
</head>

<body <?php body_class(); ?>>
    
    <!--// Main Wrapper //-->
<div class="as-mainwrapper">

      <!--// Header //-->
      <header id="as-header" class="as-absolute">

        <!--// TopStrip //-->
        <div class="container">
          <div class="as-topstrip as-bgcolor">
            <div class="row">
              <div class="col-md-2">
                  <a href="<?php echo home_url(); ?>" class="logo"><img src="<?php echo bloginfo('template_url'); ?>/images/logo.png" alt=""></a>
              </div>
              <div class="col-md-4">
                <ul class="as-stripinfo">
                  <li><i class="fa fa-phone"></i> +374 95 52 52 52 </li>
                  <li><i class="fa fa-envelope-o"></i> <a href="mailto:info@husoaragast.com?Subject=Hello%20again" target="_top">info@husoaragast.com</a></li>
                </ul>
              </div>
              <div class="col-md-6">
                  <?php $langs = icl_get_languages('skip_missing=0&orderby=KEY&order=DIR&link_empty_to=str'); ?>
               
                <div class="as-section-right">
                  <ul class="as-social-media">
                        <li><a href="<?php echo $langs['hy']['url']; ?>" class="lang_link">arm</a></li>
                        <li><a href="<?php echo $langs['en']['url']; ?>" class="lang_link">en</a></li>
                        <li><a href="<?php echo $langs['ru']['url']; ?>" class="lang_link">ru</a></li>
                  </ul>
                  <a href="donation.html" class="as-donate-btn"><i class="fa fa-dollar"></i> Donate Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--// TopStrip //-->

        <div class="container">
          <div class="as-header-bar">
            <div class="row">
              
              <div class="col-md-7 col-md-offset-2 ">

                <div class="as-section-left ">
                  <nav class="main-navigation">
                      <?php
                        wp_nav_menu(array(
                            'theme_location' => 'main-menu',
                            'menu_class' => '',
                            'container' => 'ul'
                        ));
                        ?>
                  </nav>
                  
                </div>
                  

                <!--// Responsive Menu //-->
                <div id="as-menu" class="as-menuwrapper">
                  <button class="as-trigger">Open Menu</button>
                  <ul class="as-menu"><?php
                        wp_nav_menu(array(
                            'theme_location' => 'main-menu',
                            'menu_class' => '',
                            'container' => 'ul'
                        ));
                        ?>
                  </ul>
                </div>
                <!--// Responsive Menu //-->

              </div>
                
            <div class="col-md-3">
            <div class="as-section-right mt20">
              <ul class="as-social-media ">
                <li><a href="#" class="fa fa-facebook"></a></li>
                <li><a href="#" class="fa fa-twitter"></a></li>
                <li><a href="#" class="fa fa-google-plus"></a></li>
                <li><a href="#" class="fa fa-linkedin"></a></li>
                <li><a href="#" class="fa fa-youtube"></a></li>
              </ul>
            </div>
            </div>
            </div>
          </div>
        </div>

      </header>
      <!--// Header //-->
	
	