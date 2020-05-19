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

  <img src="<?php bloginfo( 'template_directory' ); ?>/images/hvac-page-header-image.jpg" alt="hvac"/>

   <?php } ?>


</div>

<div class="breadcrumb-container">

      <?php include('breadcrumb-section.php'); ?>

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

    <div class="sub-inner-content hvac-content">

	<?php $url = wp_get_attachment_url( get_post_thumbnail_id($query->ID) ); ?>

	<?php if($url): ?>

          

<img src="<?php echo $url; ?>">

 <?php endif; ?>

	<h1><?php the_title(); ?></h1>

	<div id="print-doc">

	<?php $url = wp_get_attachment_url( get_post_thumbnail_id($query->ID) ); ?>

	<?php if($url): ?>

          

<img src="<?php echo $url; ?>" class="case-fec-image">

 <?php endif; ?>







  <?php while ( have_posts() ) : the_post(); ?>



					<?php the_content(); ?>



					



				<?php endwhile; // end of the loop. ?>

 </div>











 <?php if(get_field('pdf_file')): ?>

<div class="columns-1 border-top" id="case-study-form">

<div class="heading lit-blue-txt wow fadeInDown hr-line uppercase">download</div>

<div class="sub-head drk-txt wow fadeInDown">get the rest of this case study today.</div>

<div class="case-study-img wow fadeInDown">

<?php if( get_field('pdf_image') ){ ?>

<img src="<?php the_field('pdf_image'); ?>"/>

<?php }else{ ?>	

<img src="<?php bloginfo( 'template_directory' ); ?>/images/case-study-img" alt="case-study"/>

<?php } ?>

</div>

<div class="study-form-area wow fadeInDown ">

<?php echo do_shortcode('[gravityform id="41" name="Download Form" title="false" description="false" tabindex=30 ]');?>

</div>

</div>

<?php endif; ?>

</div> 

  </div>

    </div>
</div>
<?php if(get_field('add_testimonial')){ ?>
<div class="sub-inner-content">
<div class="content-center">
<div class="testimonial-block">
                  <div  class="testimonial">
				  
				  <p>“<?php the_field('testimonial_content'); ?>”</p>
                     <div class="testimonial-bottom">
                        <div class="pull-left testimonial-link link"><a href="<?php echo get_the_permalink(260); ?>">Read More</a></div>
                        <div class="quote-name pull-right"> - <?php the_field('client_name'); ?>  <br><?php the_field('designation'); ?> </div>
                     </div>
				  
                     
				 
                  </div>
               </div>
               </div>
               </div>
			    <?php } ?>
 <?php if ( in_array(get_the_ID(), array(11450, 11449, 11448) ) ) { ?>	
<div class="sub-inner">
	<div class="content-center">
		<div class="columns-1" >
			<div class="sub-inner-content hvac-content">
				<div class="single-content-form single-content-form2">
					<?php echo do_shortcode('[gravityform id="51" name="Free Analysis" title="false" description="false" tabindex=36]');?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php } ?>

 <!-- S:Free Stuff -->
 <?php if ( ! in_array(get_the_ID(), array(11501, 11502,11450, 11449, 11448) ) ) { ?>	

  <?php// include('free-stuff.php') ?>
<div class="analysis-sec">
		<div class="content-center">
			<div class="large-title">GET A FREE ANALYSIS</div>
			<div class="mediam-title">Enter  your website url below:</div>
			<div class="gravity-form-website">
			<?php echo do_shortcode('[gravityform id="63" title="false" description="false" ajax="true" tabindex="62"]'); ?>
		</div>
		</div>
</div>
 <?php } ?>

    <!-- E:Free Stuff -->





</div>

 <script>

        jQuery(document).ready(function(){

            var inptval  = '<?php the_field('pdf_file'); ?>'; 

			var tanklink = '<?php echo esc_url( home_url( '/' ) ); ?>download-thankyou/'

			if( inptval == "")

			{

			jQuery('#input_41_5').val(tanklink);

			}

			else

			{

			jQuery('#input_41_5').val(inptval); 

			}

                          

        });

		jQuery( "#choice_4_1" ).on( "click",function(){

  if(jQuery('#choice_4_1').is(':checked')){

   jQuery( "#choice_4_2" ).attr("checked", false);

  }else{

   jQuery( "#choice_4_2" ).attr("checked", true);

  }

 });

    </script>
<?php get_footer(); ?>