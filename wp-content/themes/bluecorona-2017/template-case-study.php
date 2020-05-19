<?php
/**
 * Template Name: Case Study Template
 *
 * Description: A Page Template that adds a sidebar to pages.
 *
 * @package WordPress
 * @subpackage Bluecorona_2015
 * @since Bluecorona 2015 1.0
 */

get_header(); ?>
<?php 
   $taxonomies = 'casestudy_categories';
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
   <div class="right-form-dev">
<div class="free-analysis" id="free-analysis"><a href="#scroll-form" class="scroll-dowm">Free Analysis</a></div>

</div>
<div id="sub-container">
   <div class="sub-title-container">
       <?php if( get_field('header_image') ){ ?>	
  
   <img src=" <?php the_field('header_image'); ?>" alt=""/>
   <?php }else{ ?>	
  <img src="<?php bloginfo( 'template_directory' ); ?>/images/case-study-page-header-image.jpg" alt="case-study"/>
   <?php } ?>
     
   </div>
     <div class="breadcrumb-container">
      <?php include('breadcrumb-section.php')?>
   </div>
   <div class="sub-inner cf free-icon-container">
   
      <div class="content-center">
         <div class="sub-inner-content">
		
            <h1>Case Studies</h1>
        
            <div class="sort-breadcrumb ">
			<div class="drop-down filter-main">
	<div class="drop-down-label"><span>Filter</span><span class="dropdown-link" href="#">Down</span></div>
	</div>
               <ul class="portfolioFilter-main">
                   <li><a href="#" data-filter="*" class="current all-child">All</a></li>
                  <?php foreach($section1 as $section){ ?>
                  <li><a href="#" data-filter=".<?php echo $section->slug; ?>" class="<?php echo $section->slug; ?>"> <?php echo $section->name; ?></a></li>
                  <?php } ?>
               </ul>
            
            </div>
			<script>
			jQuery(".filter-main").click(function(){
    jQuery(".portfolioFilter-main").addClass("active");
}); 
			</script>
            <div id="portfolio-block">
               <div class=" columns-block columns-1">
                  <div class="portfolioContainer-main masonry-gutter">
                     <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        
                        query_posts(array(
                        	'post_type'      => 'case-portfolio',
                        	'posts_per_page' => -1,
							'order'            => 'DESC',
                        ));
                        
                        if ( have_posts() ) : ?>
                     <?php while ( have_posts() ) : the_post(); ?>
                     <?php
                        $terms = get_the_terms( $post->ID , 'casestudy_categories' );
                        foreach ( $terms as $term ) {
                          $bb = $term->slug;
                          $cat_name = $term->name;
                          //if(isset($bb)){echo "welcome";} else { echo "bye"; }
                        }
                         ?>
                     <div class="portfolio-columns columns-3 case-portfolio <?php echo $bb; ?>">
					
                        <div class="columns-feture-img">
                           <?php if( get_field('portfolio_image') ){ ?>
<img src="<?php the_field('portfolio_image'); ?>">
<?php }else{ ?>
 <img src="<?php bloginfo( 'template_directory' ); ?>/images/stock-img.png">
<?php } ?>
                           <div class="portfolio-overlay">
                              <div class="portfolio-overlay-inner">
                                 <div class="clients_name">
								 <?php echo $cat_name; ?>
								 
								  
								 </div>
                                 <div class="portfolio-dec"><?php the_title(); ?></div>
                                 <a href="<?php the_permalink(); ?>" class="columns-lnk link ">Read</a>
                              </div>
                           </div>
                        </div>
							
                        <div class="portfolio-title">
                           <div class="sub-head drk-txt"> <a href="<?php the_permalink(); ?>"><?php the_field('portfolio_title'); ?></a></div>
						   <?php
								$givchars = 70; 
								$postgiv = get_field('description'); 
								$modgiv = substr($postgiv, 0, $givchars);
								$result = substr($modgiv, 0, strrpos($modgiv, ' '));
								
								$trim = str_replace($result,'',$postgiv);
							?>
                           
                           
                           <div class="portfolio-dec-case">
                           <p><?php echo $postgiv; ?></p>
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
<div class="analysis-sec subpage-form" id="scroll-form">
		<div class="content-center">
			<div class="large-title">GET A FREE ANALYSIS</div>
			<div class="mediam-title">Enter  your website url below:</div>
			<div class="gravity-form-website">
			<?php echo do_shortcode('[gravityform id="63" title="false" description="false" ajax="true" tabindex="62"]'); ?>
		</div>
		</div>
</div>

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