<?php
/**
 * Template for displaying Search Results pages
 *
 * @package WordPress
 * @subpackage Bluecorona_2015
 * @since Bluecorona 2015 1.0
 */

get_header(); ?>
<?php if(is_singular( 'page' )){ ?>
<div class="right-form-dev">
<div class="contact-new"><a href="#scroll-form" class="scroll-dowm">Free Analysis</a></div>

</div>
<?php } ?>
<div id="sub-container">
   <div class="sub-title-container">
      <?php if( get_field('header_image') ){ ?>	
      <img src=" <?php the_field('header_image'); ?>" alt=""/>
      <?php }else{ ?>	
      <img src="<?php bloginfo( 'template_directory' ); ?>/images/about-subpage-header-image.jpg" alt="about"/>
      <?php } ?>
   </div>
   <!--div class="breadcrumb-container">
      <?php// include('breadcrumb-section.php')?>
   </div-->
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
               
               <?php if ( have_posts() ) : ?>
            <?php /* Start the Loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>
            <div id="post-<?php the_ID(); ?>" class="post_single">
               <?php if ( is_sticky() ) : ?>
               <hgroup>
                  <h2><a href="<?php the_permalink(); ?>"  rel="bookmark"><?php the_title(); ?></a></h2>
                  <h3 class="entry-format"><?php _e( 'Featured', 'bluecorona2015' ); ?></h3>
               </hgroup>
               <?php else : ?>
               <h2><a href="<?php the_permalink(); ?>"  rel="bookmark"><?php the_title(); ?></a></h2>
               <?php endif; ?>
               <?php the_excerpt(); ?>
               <a href="<?php the_permalink(); ?>" class="btn">Read More <i class="fa fa-caret-right"></i></a> 
            </div>
            <!-- #post-<?php the_ID(); ?> -->
            <?php endwhile; ?>
            <?php/*  if(function_exists('wp_page_numbers')) : wp_page_numbers(); endif; */ ?>
			<?php bluecorona2015_search_nav( 'nav-below' ); ?>
            <?php else : ?>
            <article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', 'bluecorona2015' ); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'bluecorona2015' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->
            <!-- #post-0 -->
            <?php endif; ?>
				  <?php if(!is_page(12827)){ ?>
				  <div class="single-content-form single-content-form2 page-content-form"><div class="content-form-outer"><?php echo do_shortcode('[gravityform id="65" title="false" description="false" tabindex="234"]'); ?></div></div>
				  
<div class="form-after-content"><?php the_field('content_after_form'); ?></div>
					<?php } ?>
				  <?php include('get-in-touch.php')?>
               </div>
			   <?php if(!is_page(12827)){ ?>
               <?php the_field('sub_content'); ?>
               <?php if(get_field('add_service_area')){ ?>
               <div class="service-block border-top">
                  <div class="service-inner">
                     <div class="heading lit-blue-txt hr-line wow fadeInDown uppercase animated" >industries we serve</div>
                     <div class="single-faq-wrap  wow fadeInDown">
                        <div class="single-faq-head">
                           <h3>Include but are not limited to:</h3>
                        </div>
                        <div class="single-faq-content">
                           <?php the_field('service_block'); ?>
                        </div>
                     </div>
                  </div>
               </div>
               <?php } ?>
               <?php
                  if ( !wp_is_mobile() ) {
                  	echo do_shortcode('[city_state]');
			   } }
                  ?>
            </div>
         </div>
      </div>
   </div>
   <!-- S:Free Stuff -->
   <?php// include('free-stuff.php')?>
   <!-- E:Free Stuff -->
   <?php if(!is_page(12827)){ ?>
   <div class="analysis-sec subpage-form" id="scroll-form">
		<div class="content-center">
			<div class="large-title">GET A FREE ANALYSIS</div>
			<div class="mediam-title">Enter  your website url below:</div>
			<div class="gravity-form-website">
			<?php echo do_shortcode('[gravityform id="63" title="false" description="false" ajax="true" tabindex="62"]'); ?>
		</div>
		</div>
</div>
   <?php } ?>
</div>

<div class="partner-logo-sec">
	<div class="content-center">
		<ul>
		<?php if(get_field('add_partner_logo', 10)): ?> 
            <?php while(has_sub_field('add_partner_logo', 10)): ?> 
			<li>
			<?php if(get_sub_field('logo_link', 10)){ ?>
			<a href="<?php the_sub_field('logo_link', 10); ?>"><img src="<?php the_sub_field('logo_image', 10); ?>"></a>
			<?php } else{ ?>
			<img src="<?php the_sub_field('logo_image', 10); ?>">
			<?php } ?>
			</li>
			<?php endwhile; ?>  
            <?php endif; ?>
			
		</ul>
	</div>
</div>
<?php get_footer(); ?>