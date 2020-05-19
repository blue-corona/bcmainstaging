<?php
/**
 * Template Name: Sidebar Template
 *
 * Description: A Page Template that adds a sidebar to pages.
 *
 * @package WordPress
 * @subpackage Bluecorona_2015
 * @since Bluecorona 2015 1.0
 */

get_header(); ?>

<div id="sub-container">
<div class="sub-title-container"><img src="<?php bloginfo( 'template_directory' ); ?>/images/resources-img" alt="about"/>
<div class="sub-title">
<div class="content-center"><span>resources</span></div>
</div>
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
<h1>MEDIA &amp; BLOG</h1>
  <div id="subform-group"> <?php echo do_shortcode( '[gravityform id="5" name="Get in touch" title="true" description="false" ajax="true"]' ) ?> </div>
<div class="bubble-icon-conatiner purple-bg">
<div class="bubble-area"><span class="bubble-icon"></span>
<span class="close-form"></span></div>
</div>
<div class="sort-breadcrumb ">
<ul class="portfolioFilter">
<li><a href="#" data-filter="*" class="current">All</a></li>
	<li><a href="#" data-filter=".Industry">Industry</a></li>
	<li><a href="#" data-filter=".Marketing">Marketing</a></li>
	<li><a href="#" data-filter=".SEO">SEO</a></li>
	<li><a href="#" data-filter=".PPC">PPC</a></li>
	<li><a href="#" data-filter=".Design">Design</a></li>
	<li><a href="#" data-filter=".Author">Author</a></li>

</ul>
</div>
<div id="portfolio-block">
<div class=" columns-block columns-4">
<div class="portfolioContainer  ">


<?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        
                        query_posts(array(
                        	'post_type'      => 'post', // You can add a custom post type if you like
                        	'paged'          => $paged,
							 'order'         => 'ASC',
                        	'posts_per_page' => 12
                        ));
                        
                        if ( have_posts() ) : ?>
                     <?php while ( have_posts() ) : the_post(); ?>
                    
						 <div class="columns columns-2 <?php foreach((get_the_category()) as $category) { if ($category->cat_name != 'uncategorized') { echo $category->cat_name . ' '; } }?>">
   <div class="columns-title purple-bg"><?php foreach((get_the_category()) as $category) { if ($category->cat_name != 'uncategorized') { echo $category->cat_name . ' '; } }?></div>
   <div class="columns-feture-img">
					
			
						
	
<img src="<?php bloginfo( 'template_directory' ); ?>/images/case-img-2.jpg" alt="img"/>

						</div>
   <div class="team-area">
      <div class="team-img pull-left">
	 <?php

$author_id = get_the_author_meta('ID');
$author_badge = get_field('image', 'user_'. $author_id );
$author_designation= get_field('designation', 'user_'. $author_id );

?>
    	
		<img src="<?php echo $author_badge['url']; ?>" alt="<?php echo $author_badge['alt']; ?>" />

	  </div>
      <div class="team-name purple-txt pull-left"> <?php echo get_the_author(); ?><span>
	  <?php if(!empty($author_designation)){ ?>
	  
	  <?php echo $author_designation; ?>
	  <?php }else{ ?>
	  Marketing Specialist
	  <?php } ?>
	  
	 </span></div>
   </div>
   <div class="sub-head drk-txt pull-left"><?php the_title(); ?></div>
   <div class="post-link drk-txt pull-right"><?php the_time('F j, Y'); ?></div>
   
   <p><?php echo wp_trim_words(get_the_content(), 19); ?></p>
   <div class="columns-lnk link drk-blue-bg pull-left" ><a href="<?php the_permalink(); ?>">Read Article</a></div>
   <div class="nectar-love-wrap pull-right" >
 <?php echo getPostLikeLink( get_the_ID() ); ?>
 
   </div>
</div>
 <?php endwhile; ?>
                     <?php endif; ?>

</div>
<div class=" columns-block columns-1">

<div class="my_pagination"><?php my_pagination(); ?></div>
</div>

</div>
<div id="sidebar-columns" class="columns-block columns-margin columns-3 ">
<div class="cf">
<div class="heading hr-line purple-txt ">TRENDING</div>
</div>
<div class="trending-columns">

 <?php
               $cnt = 1;
               ?>
<?php
 $args = array('post_type' => 'post', 'posts_per_page' => 4, 'order' => 'ASC');
   $query = new WP_Query( $args );
   if($query->have_posts()):
   while($query->have_posts()): $query->the_post();
   $feat_image = wp_get_attachment_url( get_post_thumbnail_id($query->ID) );
   ?>
   
			   <div class="columns-1  columns-1  purple-bg sidebar-col-<?php echo $cnt; ?>">
<div class="sub-head white-txt "><?php the_title(); ?></div>
<p><?php echo wp_trim_words(get_the_content(), 7); ?></p>
<div class="columns-lnk link  pull-right"><a href="<?php the_permalink(); ?>">More</a></div>
</div>

<?php	
$cnt++;
endwhile;
   endif;
   wp_reset_postdata();
   ?>

</div>
<div class="add-columns">
<div class="columns-1  ">
<img src="<?php bloginfo( 'template_directory' ); ?>/images/ad-space1.jpg"/>
</div>
<div class="columns-1  ">
<img src="<?php bloginfo( 'template_directory' ); ?>/images/ad-space2.jpg"/>
</div>
</div>
</div>
</div>



</div>
 </div>
</div>
 <?php include('free-stuff.php')?>
</div>


<script type="text/javascript">


jQuery(window).load(function(){
    var jQuerycontainer = jQuery('.portfolioContainer');
    jQuerycontainer.isotope({
        filter: '*',
		
        animationOptions: {
            duration: 750,
            easing: 'linear',
            queue: false
        }
		
		
    });
 
    jQuery('.portfolioFilter a').click(function(){
        jQuery('.portfolioFilter .current').removeClass('current');
        jQuery(this).addClass('current');
 
        var selector = jQuery(this).attr('data-filter');
        jQuerycontainer.isotope({
            filter: selector,
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