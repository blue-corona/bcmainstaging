<?php

/**

 * Template Name: Testimonials Template

 *

 * Description: A Page Template that adds a sidebar to pages.

 *

 * @package WordPress

 * @subpackage Bluecorona_2015

 * @since Bluecorona 2015 1.0

 */



get_header(); ?>

<div id="sub-container" class="testimonial-new">

   <div class="sub-title-container">

      <?php if( get_field('header_image') ){ ?>	

  

   <img src=" <?php the_field('header_image'); ?>" alt=""/>

   <?php }else{ ?>	

  <img src="<?php bloginfo( 'template_directory' ); ?>/images/subpage-banner.jpg" alt="about"/>

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

               

               <div id="print-doc">

               <div id="testimonial">

                  <div class="testimonial-block">

                  <div class="testimonial">
				  <?php 
						$args = array('post_type' => 'testimonials', 'posts_per_page' => -1, 'order' => 'ASC',);
						$query = new WP_Query( $args );
						if($query->have_posts()):
						while($query->have_posts()): $query->the_post();
				  ?>
				  <div class="testiminial-inner">
				  <?php if( get_field('add_client_image') ){ ?>
					<div class="testiminial-img">
					<img src="<?php the_field('add_client_image'); ?>"></div>
					<div class="testiminial-content">
					<p>“<?php echo get_the_excerpt(); ?>”</p>

					<div class="logo-section">
					<div class="testi-logo">
					<img src="<?php the_field('company_logo'); ?>">
					</div>

					<div class="testimonal-right">
					<span class="author-name"><?php the_title(); ?><span class="Designation"><?php if(get_field('designation')){ ?>, <?php the_field('designation');?><?php } ?></span></span>
					<br>
					<span class="comp-name"><?php the_field('company_name'); ?></span>
					</div>
					</div>
					</div>
					<?php } elseif( get_field('testimonial_video') ){ ?>
					<div class="testiminial-video">
					<iframe src="<?php the_field('testimonial_video'); ?>" width="560" height="315"></iframe>
					</div>
					<div class="testiminial-content video-test">
					<p>“<?php echo get_the_excerpt(); ?>”</p>
					</div>
					<div class="logo-section vid-p">
					<div class="testi-logo">
					<img src="<?php the_field('company_logo'); ?>">
					</div>

					<div class="testimonal-right">
					<span class="author-name"><?php the_title(); ?><span class="Designation"><?php if(get_field('designation')){ ?>, <?php the_field('designation');?><?php } ?></span></span>
					<br>
					<span class="comp-name"><?php the_field('company_name'); ?></span>
					</div>
					</div>
						<?php } else { ?>
						<div class="full-inner">
						<div class="quote-img"><img src="<?php bloginfo( 'template_directory' ); ?>/images/quote-icon.png"></div>
						<div class="testiminial-content">
					<p>“<?php echo get_the_excerpt(); ?>”</p>

					<div class="logo-section">
					<div class="testi-logo">
					<img src="<?php the_field('company_logo'); ?>">
					</div>

					<div class="testimonal-right">
					<span class="author-name"><?php the_title(); ?><span class="Designation"><?php if(get_field('designation')){ ?>, <?php the_field('designation');?><?php } ?></span></span>
					<br>
					<span class="comp-name"><?php the_field('company_name'); ?></span>
					</div>
					</div>
					</div>
					</div>
						<?php } ?>
					</div>
					
				<?php	endwhile;
						endif;
						wp_reset_postdata();
				?>
                  </div>
				</div>
               </div>

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