<?php
/**
 * Template Name: Marketing Resource
 *
 * Description: A Page Template that adds a sidebar to pages.
 *
 * @package WordPress
 * @subpackage Bluecorona_2015
 * @since Bluecorona 2015 1.0
 */

get_header(); ?>
<?php if(!is_page(array(12827, 12776))){ ?>
<?php if( !get_field('hide_free_analysis_form') ){ ?>	
<div class="right-form-dev">
<div class="free-analysis" id="free-analysis"><a href="#scroll-form" class="scroll-dowm">Free Analysis</a></div>

</div>
<?php } ?>
<?php } ?>

<div id="sub-container bc-resorce">
   <div class="sub-title-container">
      <?php if( get_field('header_image') ){ ?>	
      <img src=" <?php the_field('header_image'); ?>" alt=""/>
      <?php }else{ ?>	
      <img src="<?php bloginfo( 'template_directory' ); ?>/images/internet-marketing.jpg" alt="about"/>
      <?php } ?>
   </div>
  
   <div class="sub-inner free-icon-container">
      
      <div class="content-center">
         <div class="columns-1" id="content-columns">
            <div class="sub-inner-content">
               
               <h1><?php the_title(); ?></h1>
               <?php 
                  if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                  
                  	the_post_thumbnail();
                  
                  } 
                  
                  ?>
              
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
   <div class="internet-marketing-resource">
		 <div class="content-center">
			<h2>Common Internet Marketing Acronyms Defined</h2>
			 </div>
			<div class="market-definition">
				<ul>
				<?php if (have_rows('definition') ) :?>
				<?php while (have_rows('definition')): the_row();?>
				
					<li>
						<div class="center-def-wrap">
						<div class="def-heading"><?php the_sub_field('heading');?></div>
						<div class="marketing-heading"> <?php the_sub_field('content');?></div>
						</div>
					</li>
					<?php endwhile;?>
					<?php endif;?>
				</ul>
			</div>
		
   </div>

   <!--Featured Blogs sec start here-->
	<div class="featured-blogs featured-blogs2">
		<div class="content-center">
			<div class="title-head">Recent Blog Posts</div>
			
				<div class="blog-wrap">
				<div class="blog-title">Blog</div>
				
				<ul>
				<?php 
		$args = array('post_type' => 'post', 'posts_per_page' => 4,'orderby' => 'Date');
		$query = new WP_Query( $args );
		if($query->have_posts()):
			while($query->have_posts()): $query->the_post(); 
			
			?>
					<li><?php $feture_img = wp_get_attachment_image_src(get_field('post_paga_image'), 'feture-img');?>
						<a href="<?php echo the_permalink();?>"><img src="<?php echo $feture_img[0]; ?>" alt="" /></a>
						<span><?php echo get_the_date();?></span>
						<p><a href="<?php echo the_permalink();?>"><strong><?php the_title();?></strong></a></p>
						<p><?php wp_trim_words( get_the_content() , 20 ) ; ?></p>
						<!--<a href="<?php //the_permalink();?>" class="blog-link">Read More</a>-->
					</li>
					<?php	
		endwhile; 
		endif;
		wp_reset_postdata();
		?>
				</ul>
				<div class="center-btn"><a class="seemore-button" href="<?php echo get_site_url(); ?>/blog/" target="_blank">See More</a></div>
				</div>
			
		</div>
		</div>
   <!--Featured Blogs sec end here-->
 
 <div class="register"><div class="content-center"><div class="title-head">Want to learn more?</div> 
<p>Register for one of our monthly webinars.</p>
<div class="sign-up"><a href="<?php echo get_site_url(); ?>/internet-marketing-webinars">sign up</a></div>
</div>  
</div> 
  <!--SEO sec start here-->
   <section class="makes-bluecorona">
<div class="content-center">
<h2 style="text-align: center;">What Makes Blue Corona Different</h2>
<?php while(have_posts() ) :the_post();?>
	<?php the_content();?>
<?php endwhile;?>
<!--<div class="meet-team"><div id="team-slide" class="single-faq-head"><h3> <span>READ MORE</span><br></h3></div></div>-->
</div>
</section>
   <!--SEO sec end here-->

		
   <!-- S:Free Stuff -->
   <?php// include('free-stuff.php')?>
   <!-- E:Free Stuff -->
   <?php if(!is_page(array(12827, 12776))){ ?>
   <?php if( !get_field('hide_free_analysis_form') ){ ?>
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