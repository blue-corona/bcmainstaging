<?php

/**

 * Template for displaying all single posts

 *

 * @package WordPress

 * @subpackage Bluecorona_2015

 * @since Bluecorona 2015 1.0

 */



get_header(); ?>

<div id="sub-container">

<div class="sub-title-container hide-mobile">

<?php if( get_field('header_image') ){ ?>	

  

   <img src=" <?php the_field('header_image'); ?>" alt=""/>

   <?php }else{ ?>	

  <img src="<?php bloginfo( 'template_directory' ); ?>/images/resources-header-image.jpg" alt="about"/>

   <?php } ?>



</div>



<div class="pagination-container">

<div class="content-center">


<div class="back-post"><a class="back" href="<?php echo esc_url( home_url( '/' ) ); ?>internet-marketing-webinars/"> Back to Webinars</a></div>

 <h1> <?php the_title(); ?> </h1> 
 
 

</div> 

</div>



<div class="sub-inner cf free-icon-container">


<div class="content-center">


<div class="sub-inner-content post-page">



<div class="post-detail">

<div class="post-date pull-left"><a href="<?php the_permalink(); ?>"><?php// the_time('F j, Y'); ?></a></div>

 <?php while ( have_posts() ) : the_post(); ?>

<!--div class="post-author pull-left">By <?php// echo get_the_author(); ?></div-->

<?php endwhile; // end of the loop. ?>

</div>

<div id="print-doc"> 



<?php  $full_img = wp_get_attachment_image_src(get_field('post_paga_image'), 'full'); ?>

						

						<?php if( get_field('post_paga_image') ){ ?>

<img src="<?php echo $full_img[0]; ?>"/>

<?php }else{ ?>	



<?php } ?>

  





  <?php while ( have_posts() ) : the_post(); ?>



					<?php the_content(); ?>

</div>
					
<div class="form-after-content"><?php the_field('content_after_form'); ?></div>


				<?php endwhile; // end of the loop. ?>

				

 </div>

</div>



</div>





</div>

<!--div class="footer-form-section gravity-form">
	<div class="content-center">
	<div class="form-center"> 
		<div class="icon"></div>
	   <div class="form-heading"><span class="form-icon"></span> Get Started Today</div>
	   <?php //echo do_shortcode('[gravityform id="58" title="false" description="false" tabindex="234"]'); ?>
	</div>
	</div>
 </div-->

</div>



<?php get_footer(); ?>