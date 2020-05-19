<?php

/**

 * Template Name: Video Portfolio Template

 *

 * Description: A Page Template that adds a sidebar to pages.

 *

 * @package WordPress

 * @subpackage Bluecorona_2015

 * @since Bluecorona 2015 1.0

 */



get_header(); ?>



 <?php 

   $taxonomies = 'video_categories';

   $args = array(

      'orderby'       => 'id', 

      'order'         => 'ASC',

      'hide_empty'    => false, 

   

   ); 

   $cats = get_terms( $taxonomies, $args );

   $count = 0;

   foreach($cats as $cat){

   if($count >= 0 ):

   $section1[] = $cat;

   

   

   

   endif;

   $count++;

   

   }

   ?> 

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

         <div class="sub-inner-content">



            <h1>Video portfolio</h1>

    

            

            <div id="portfolio-block">

			

               <div class=" columns-block columns-1">

                  <div class="portfolioContainer-main ">

				 

				    

                     <?php

                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                        

                        query_posts(array(

                        	'post_type'      => 'videoportfolio', // You can add a custom post type if you like

                        	'paged'          => $paged,

							 'orderby '         => 'menu_order',

                        	'posts_per_page' => 12

                        ));

                        

                        if ( have_posts() ) : ?>

                     <?php while ( have_posts() ) : the_post(); ?>

                     

                     <div class="portfolio-columns columns-3 case-portfolio video-portfolio">

                        <div class="columns-feture-img">

                           <img src="<?php the_field('image'); ?>">

                          <div class="portfolio-overlay">

						   <?php if(get_field('vimeo_video_path')){ ?>

                              <a title="" href="http://vimeo.com/<?php the_field('vimeo_video_path'); ?>&amp;width=640&amp;height=480" rel="wp-video-lightbox">

						   <?php } else{ ?>

						   <a title="" href="https://www.youtube.com/watch?v=<?php the_field('video_path'); ?>&amp;width=640&amp;height=480" rel="wp-video-lightbox">

						   <?php } ?>

							  <div class="portfolio-overlay-inner">

                                 <div class="clients_name"><?php the_title(); ?></div>

                                 

                                 

                              </div> 

							  <div class="columns-lnk link play-btn-lnk"><span>Watch Video </span></div>

							  </a>

                           </div>

                        </div>

                        <div class="portfolio-title">

                           <div class="sub-head drk-txt"><?php the_title(); ?></div>

                                            <div class="portfolio-dec-case">

                           <p><?php the_field('description'); ?></p>

                        </div>

                        </div>

                     </div>

                     <?php endwhile; ?>

                     <?php endif; ?>

                  </div>

               </div>

               <div class="my_pagination"><?php my_pagination(); ?></div>

            </div>

			<?php include('get-in-touch.php')?>

         </div>

      </div>

   </div>

   <?php// include('free-stuff.php')?>

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

       var jQuerycontainer = jQuery('.portfolioContainer-main');

       jQuerycontainer.isotope({

	    

           filter: '*',

		    itemSelector: '.case-portfolio',

			masonry: {

			columnWidth: 326,

			gutter: 31

		},

   		 

           animationOptions: {

               duration: 750,

               easing: 'linear',

               queue: false

           }

		   

   		

   		

       });

    

       jQuery('.portfolioFilter-main a').click(function(){

           jQuery('.portfolioFilter-main .current').removeClass('current');

           jQuery(this).addClass('current');

    

           var selector = jQuery(this).attr('data-filter');

           jQuerycontainer.isotope({

               filter: selector,

			    itemSelector: '.case-portfolio',

			masonry: {

			columnWidth: 326,

			gutter: 31

		},

               animationOptions: {

                   duration: 750,

                   easing: 'linear',

                   

                   queue: false

               }

            });

            return false;

       }); 

   });

   

</script>



<?php get_footer(); ?>