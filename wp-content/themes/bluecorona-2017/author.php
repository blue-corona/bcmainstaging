<?php
/**
 * Template for displaying Author Archive pages
 *
 * @package WordPress
 * @subpackage Bluecorona_2015
 * @since Bluecorona 2015 1.0
 */

get_header(); ?>

<div id="sub-container">
<div class="sub-title-container"><?php if( get_field('header_image') ){ ?>	
  
   <img src=" <?php the_field('header_image'); ?>" alt=""/>
   <?php }else{ ?>	
  <img src="<?php bloginfo( 'template_directory' ); ?>/images/resources-header-image.jpg" alt="case-study"/>
   <?php } ?>

</div>
  <div class="breadcrumb-container blog-page">
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
<?php include('get-in-touch.php')?>
<h1><?php printf( __( 'Author Archives: %s', 'bluecorona2015' ), '<span class="vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( "ID" ) ) ) . '" title="' . esc_attr( get_the_author() ) . '" rel="me">' . get_the_author() . '</a></span>' ); ?></h1>




<div id="portfolio-block">
<div class=" columns-block columns-1">
<div class="portfolioContainer  ">
<div id="sidebar-columns" class="columns-block columns-margin columns-3 stamp">
<div class="cf">
<div class="heading hr-line purple-txt ">TRENDING</div>
</div>
<div class="trending-columns">

 
<?php
$page_for_posts = get_option( 'page_for_posts' );
?>
 <?php
               $cnt = 1;
               ?>
<?php if(get_field('trending', $page_for_posts)): ?>

   <?php while(has_sub_field('trending', $page_for_posts)): ?>

     
	 
	   <div class="columns-1  columns-1  purple-bg sidebar-col-<?php echo $cnt; ?>">
<div class="sub-head white-txt "><?php the_sub_field('title', $page_for_posts); ?></div>
<p><?php the_sub_field('description', $page_for_posts); ?></p>
<div class="columns-lnk link  pull-right"><a href="<?php the_sub_field('more_link', $page_for_posts); ?>">More</a></div>
</div>

   <?php 
   $cnt++;
   endwhile; ?>

   <?php endif; ?>

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


<?php if ( have_posts() ) : ?>
						<?php /* Start the Loop */ ?>
						<?php
						 query_posts($query_string . '&cat=-1' );
						?>
						<?php while ( have_posts() ) : the_post(); ?>
						<div class="columns columns-2 <?php foreach((get_the_category()) as $category) { if ($category->cat_name != 'uncategorized') { echo $category->cat_name . ' '; } }?>">
   
   <div class="columns-feture-img">
					
	<?php  $custom_size = wp_get_attachment_image_src(get_field('post_paga_image'), 'custom-size'); ?>		
						
	<?php if($custom_size): ?>
<img src="<?php echo $custom_size[0]; ?>" alt="feature image"/>
 <?php endif; ?>

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
   <div class="sub-head drk-txt pull-left"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
   <div class="post-link drk-txt pull-right"><?php the_time('F j, Y'); ?></div>
   
   <p><?php echo wp_trim_words(get_the_content(), 19); ?></p>
   <div class="columns-lnk link drk-blue-bg pull-left" ><a href="<?php the_permalink(); ?>">Read Article</a></div>
   <div class="nectar-love-wrap pull-right" >
 <?php echo getPostLikeLink( get_the_ID() ); ?>
 
   </div>
</div>
							
						
						<?php endwhile; 
						?>
						
						<?php else : ?>
							<article id="post-0" class="post no-results not-found">
								<header class="entry-header">
									<h1 class="entry-title"><?php _e( 'Nothing Found', 'bluecorona2015' ); ?></h1>
								</header><!-- .entry-header -->

								<div class="entry-content">
									<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'bluecorona2015' ); ?></p>
									<?php get_search_form(); ?>
								</div><!-- .entry-content -->
							</article><!-- #post-0 -->

						
						<?php endif; ?>

</div>
<div class=" columns-block columns-1">

<?php if(function_exists('wp_page_numbers')) : wp_page_numbers(); endif; ?>
</div>
</div>

</div>



</div>
 </div>
</div>
 <?php// include('free-stuff.php')?>
 <div class="footer-form-section gravity-form">
	<div class="content-center">
	<div class="form-center"> 
		<div class="icon"></div>
	   <div class="form-heading"><span class="form-icon"></span> Get Started Today</div>
	   <?php echo do_shortcode('[gravityform id="58" title="false" description="false" tabindex="234"]'); ?>
	</div>
	</div>
 </div>
</div>


<script type="text/javascript">


jQuery(window).load(function(){
    var jQuerycontainer = jQuery('.portfolioContainer');
    jQuerycontainer.isotope({
        filter: '*',
		itemSelector: '.columns',
		stamp: '.stamp',
		masonry: {
			columnWidth: 336,
			gutter: 10
		},
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