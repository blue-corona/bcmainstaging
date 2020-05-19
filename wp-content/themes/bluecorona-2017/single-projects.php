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
  <img src="<?php bloginfo( 'template_directory' ); ?>/images/resources-header-image.jpg" alt=""/>
   <?php } ?>
</div>
 <div class="breadcrumb-container">
      <?php include('breadcrumb-section.php')?>
   </div>
		<div class="pagination-container">
<div class="content-center">

<div class="back-post"><a class="back" href="<?php echo esc_url( home_url( '/' ) ); ?>portfolio/">Back to  Portfolio</a>

		<?php
    next_post_link('%link', 'Next Project ');
?>
 </div>
 
</div>
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
    <div class="sub-inner-content">
    <div class="columns-1">
<div id="slider" class="flexslider">
          <ul class="slides">
           
		    <?php if(get_field('portfolio_slider')): ?>

   <?php while(has_sub_field('portfolio_slider')): ?>
   <?php  $full_img = wp_get_attachment_image_src(get_sub_field('image'), 'full'); ?>

     <li><img src="<?php echo $full_img[0]; ?>"/></li>

   <?php endwhile; ?>

   <?php endif; ?>
          </ul>
</div>
<div class="flexslider-inner">
<div id="carousel" class="flexslider">

          <ul class="slides">
            <?php if(get_field('portfolio_slider')): ?>

   <?php 
    $count_img = 0;
   while(has_sub_field('portfolio_slider')): ?>
   <?php  $image1 = wp_get_attachment_image_src(get_sub_field('image'), 'thumbnail'); 

			?>

     <li><img src="<?php echo $image1[0]; ?>"/></li>

   <?php 
    $count_img++;
   endwhile; ?>

   <?php endif; ?>
          </ul>
              </div>
        </div>
     </div>
<div id="print-doc">
<h2><?php the_field('sub_title'); ?></h2>
  <?php while ( have_posts() ) : the_post(); ?>

					<?php the_content(); ?>

					

				<?php endwhile; // end of the loop. ?>
 </div>


<?php include('get-in-touch.php')?>


<div class="my_pagination2 link">
<a class="back" href="<?php echo esc_url( home_url( '/' ) ); ?>portfolio/">Back</a>
</div>
    <div id="other-work" class="columns-1 border-top">
    <div class="heading lit-blue-txt wow fadeInDown hr-line uppercase " >other work</div>
<div class=" columns-block columns-1">
                                <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        
                        query_posts(array(
                        	'post_type'      => 'projects', // You can add a custom post type if you like
                        	'paged'          => $paged,
                        	'posts_per_page' => 3
                        ));
                        
                        if ( have_posts() ) : ?>
                     <?php while ( have_posts() ) : the_post(); ?>
                     <?php
                        $terms = get_the_terms( $post->ID , 'project_categories' );
                        foreach ( $terms as $term ) {
                           $pro = $term->slug;
                          
                        }
                         ?>
                     <div class="portfolio-columns columns-3 case-portfolio <?php echo  $pro; ?>">
                        <div class="columns-feture-img">
                           <img src="<?php the_field('image'); ?>">
                           <div class="portfolio-overlay">
                              <div class="portfolio-overlay-inner">
                                 <div class="clients_name"><?php the_title(); ?></div>
                                 <div class="portfolio-dec"><?php the_field('overlay_description'); ?></div>
                                 <div class="columns-lnk link "><a href="<?php the_permalink(); ?>">Read</a></div>
                              </div>
                           </div>
                        </div>
                                 </div>
                     <?php endwhile; ?>
                     <?php endif; ?>
                 
               </div>



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

 <script type="text/javascript">
   
    jQuery(window).load(function(){
	var count_img = <?php echo $count_img; ?>;
     if(count_img > 1){
		if(jQuery(window).width() <= 768){
 jQuery('#carousel').flexslider({
        animation: "slide",
        animationLoop: false,
        itemWidth: 161,
        itemMargin: 15,
        maxItems: 1,
        move: 1,
		
        controlNav: false,
		asNavFor: '#slider',
        before: function (){
            jQuery('#carousel .slides').removeClass('end');
        },
        end: function () {
            jQuery('#carousel .slides').addClass('end');
        }
    });
	  }else{
	  jQuery('#carousel').flexslider({
        animation: "slide",
        animationLoop: false,
        itemWidth: 161,
        itemMargin: 15,
        maxItems: 4,
        move: 4,
		
        controlNav: false,
		asNavFor: '#slider',
        before: function (){
            jQuery('#carousel .slides').removeClass('end');
        },
        end: function () {
            jQuery('#carousel .slides').addClass('end');
        }
    });
	  }

      jQuery('#slider').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        sync: "#carousel",
        start: function(slider){
          jQuery('body').removeClass('loading');
        }
      });
	 }
	     });
	 
	

	 
  </script>


<?php get_footer(); ?>