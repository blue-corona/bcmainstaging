<?php

/**

 * Template Name: Test Template

 */



get_header(); ?>

<div id="sub-container" class="testimonial-new">

   <div class="sub-title-container">

      <?php if( get_field('header_image') ){ ?>	

  

   <img src=" <?php the_field('header_image'); ?>" alt=""/>

   <?php }else{ ?>	

  <img src="<?php bloginfo( 'template_directory' ); ?>/images/about-subpage-header-image.jpg" alt="about"/>

   <?php } ?>

     

   </div>

   <div class="breadcrumb-container">

      <?php include('breadcrumb-section.php')?>

   </div>

   <div class="sub-inner free-icon-container">

      <div class="free-stuff-icon wow bounceInDown">

         <div class="arrow-link-in free-stuff-icon-inner">

            <a href="#free-stuff">

               <div class="down-arrow">

                  <span class="left"></span>

                  <span class="center"></span>

                  <span class="right"></span>

               </div>

            </a>

         </div>

      </div>

      <div class="content-center">

         <div class="columns-1" id="content-columns">

            <div class="sub-inner-content">

		

               <h1>Testimonials</h1>

               

               <div class="testimonial">
			   <?php 

                        $args = array('post_type' => 'testimonials', 'posts_per_page' => 2,);

                           $query = new WP_Query( $args );

                           if($query->have_posts()):

                        while($query->have_posts()): $query->the_post();

                        ?>
						<?php if( get_field('testimonial_with_photo') ){ ?>	
						<div class="testiminial-inner">
						<div class="testiminial-img"><img src="<?php the_field('add_client_image'); ?>"></div>
						<?php } elseif( get_field('testimonial_with_video') ){ ?>
						<?php the_field('testimonial_video'); ?>
						<?php } ?>
						
				<div class="testiminial-content"><p>“<?php echo get_the_excerpt(); ?>”</p>

				<div class="logo-section">
				<div class="testi-logo">
				<img src="<?php the_field('company_logo'); ?>">
				</div>

				<div class="testimonal-right">
				<span class="author-name"><?php the_title(); ?>, <span class="Designation"><?php the_field('designation'); ?></span></span><br>
				<span class="comp-name"><?php the_field('company_name'); ?></span>
				</div>
				</div>
				</div>
				</div>
					<?php	endwhile;

                        endif;

                        wp_reset_postdata();

                        ?>
				</div>

               </div>

               

               <?php the_field('sub_content'); ?>
			   <?php include('get-in-touch.php')?>

            </div>

         </div>

      </div>

   </div>

   <!-- S:Free Stuff -->

   <?php// include('free-stuff.php')?>

   <!-- E:Free Stuff -->
   <div class="analysis-sec">
		<div class="content-center">
			<div class="large-title">GET A FREE ANALYSIS</div>
			<div class="mediam-title">Enter  your website url below:</div>
			<div class="gravity-form-website">
			<?php echo do_shortcode('[gravityform id="63" title="false" description="false" ajax="true" tabindex="62"]'); ?>
		</div>
		</div>
</div>

</div>

<?php get_footer(); ?>