<?php
/**
 * Template Name: About Page Template
 */
get_header();
?>
<div class="as-minheader">
        <span class="full-pattren"></span>
        <div class="as-minheader-wrap">
          <div class="container">
            <div class="row">
              <div class="col-md-9">
                <div class="as-page-title">
                  <h1>Contact Us</h1>
                  <p>Phasellus auctor felis quis risus varius ac posuere massa dapibus.</p>
                </div>
              </div>
              <div class="col-md-3">
                <ul class="as-breadcrumb">
                    <li><a href="<?php echo home_url();?>">Home</a></li>
                  <li><a href="#">Contact</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--// Main Content //-->
      <div class="as-main-content">
        
        <!--// MainSection //-->
        <div class="as-main-section" style=" padding: 0px 0px 0px 0px; ">
          <div class="container">
            <div class="row">
                
              <?php if (!dynamic_sidebar('Contact Us') ) : ?>		
              <?php endif; ?>  
                
              <div class="clearfix"></div>
              <div class="col-md-12">
                <div class="as-strip-title"> <h2>HAVE <span class="as-color">A QUESTIONS?</span></h2> </div>
                <div class="as-form">
                <?php echo do_shortcode('[contact-form-7 id="86" title="About Page Contact Form"]'); ?>
                </div>
              </div>

            </div>
          </div>
        </div>
        <!--// MainSection //-->

        <!--// MainSection //-->
        <div class="as-main-section" style=" padding: 20px 0px 50px 0px; ">
          <div class="container">
            <div class="row">

              <div class="col-md-12">
                <div class="as-strip-title"> <h2>OUR <span class="as-color">SPONSORS</span></h2> </div>
                <div class="as-sponsored">
                  <ul class="row">
                      <?php                
            
                        $language = ICL_LANGUAGE_CODE;
                        $the_query = new WP_Query( 'post_type=sponsors&language=' . $language );
                                      // The Loop
                        if ( $the_query->have_posts() ) {

                        while ( $the_query->have_posts() ) {
                            $the_query->the_post();
                        ?>
                            <li class="col-md-3">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('sponsors'); ?>
                                </a>
                            </li>
                            <!--<li class="col-md-3 as-noborder"><a href="#"><img src="extra-images/partner-5.png" alt=""></a></li>-->
                    
                        <?php  }

                        } else {
                                // no posts found
                        }
                        /* Restore original Post Data */
                        wp_reset_postdata();
                    ?> 
                  </ul>
                </div>
              </div>

            </div>
          </div>
        </div>
        <!--// MainSection //-->

      </div>

      

    </div>
    <!--// Main Wrapper //-->


    

<?php get_footer(); ?>