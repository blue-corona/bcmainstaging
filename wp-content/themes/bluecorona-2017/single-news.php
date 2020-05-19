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
   <div class="pagination-container">
      <div class="content-center">
	
         <div class="back-post"><a class="back" href="<?php echo esc_url( home_url( '/' ) ); ?>news/"> Back to News</a></div>
         
      </div>
   </div>
   <div class="sub-inner cf free-icon-container">
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
         <div class="columns-1" id="content-columns" >
            <div class="sub-inner-content post-page">
               <div class="post-detail">
                  <div class="post-date pull-left"><a href="<?php the_permalink(); ?>"><?php the_time('F j, Y'); ?></a></div>
                  <?php while ( have_posts() ) : the_post(); ?>
                  <div class="post-author pull-left">By Blue Corona</div>
                  <?php endwhile; // end of the loop. ?>
               </div>
			    <h1><?php the_title(); ?></h1>
               <div id="print-doc">

                  <?php  $full_img = wp_get_attachment_image_src(get_field('post_paga_image'), 'full'); ?>
                  <?php if( get_field('post_paga_image') ){ ?>
                  <img src="<?php echo $full_img[0]; ?>"/>
                  <?php }else{ ?>	
                  <?php } ?>
                  <?php while ( have_posts() ) : the_post(); ?>
                  <?php the_content(); ?>
                  <?php endwhile; // end of the loop. ?>
               </div><?php include('get-in-touch.php')?>
               
            </div>
         </div>
         
      </div>
   </div>
   <?php// include('free-stuff.php')?><div class="analysis-sec">		<div class="content-center">			<div class="large-title">GET A FREE ANALYSIS</div>			<div class="mediam-title">Enter  your website url below:</div>			<div class="gravity-form-website">			<?php echo do_shortcode('[gravityform id="63" title="false" description="false" ajax="true" tabindex="62"]'); ?>		</div>		</div></div>
</div>

<?php get_footer(); ?>