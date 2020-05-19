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
  <img src="<?php bloginfo( 'template_directory' ); ?>/images/resources-header-image.jpg" alt="about"/>
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
	
 <h1><?php the_title(); ?></h1>
	<div id="print-doc">


  <?php while ( have_posts() ) : the_post(); ?>

					<?php the_content(); ?>

					

				<?php endwhile; // end of the loop. ?>
 </div>


<?php the_field('sub_content'); ?>
<?php include('get-in-touch.php')?>
</div> 
  </div>
    </div>
</div>

 <!-- S:Free Stuff -->
  <?php// include('free-stuff.php')?>
    <!-- E:Free Stuff --><div class="analysis-sec">		<div class="content-center">			<div class="large-title">GET A FREE ANALYSIS</div>			<div class="mediam-title">Enter  your website url below:</div>			<div class="gravity-form-website">			<?php echo do_shortcode('[gravityform id="63" title="false" description="false" ajax="true" tabindex="62"]'); ?>		</div>		</div></div>


</div>
<?php get_footer(); ?>