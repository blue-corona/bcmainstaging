<?php

/**

 * Main template file

 *

 * This is the most generic template file in a WordPress theme

 * and one of the two required files for a theme (the other being style.css).

 * It is used to display a page when nothing more specific matches a query.

 * E.g., it puts together the home page when no home.php file exists.

 * Learn more: http://codex.wordpress.org/Template_Hierarchy

 *

 * @package WordPress

 * @subpackage Bluecorona_2015

 */



get_header(); ?>


<div class="right-form-dev">
<div class="free-analysis" id="free-analysis"><a href="#scroll-form" class="scroll-dowm">Free Analysis</a></div>

</div>
<div id="sub-container">

<div class="sub-title-container"><?php if( get_field('header_image') ){ ?>	

  

   <img src=" <?php the_field('header_image'); ?>" alt=""/>

   <?php }else{ ?>	

  <img src="<?php bloginfo( 'template_directory' ); ?>/images/resources-header-image.jpg" alt="case-study"/>

   <?php } ?>



</div>

 

<div class="sub-inner cf free-icon-container">



<div class="content-center">

<div class="sub-inner-content">

<h1>MEDIA &amp; BLOG</h1>


<div class="drop-down show-mobile-trending">
	<div class="drop-down-label"><span class="custom-head-cat">Category Filter</span><span class="dropdown-link" href="#">Down</span></div>
		<ul class="list-categories">

  <?php 

								$args = array(

									'show_option_all'    => '',

									'orderby'            => 'name',

									'order'              => 'ASC',

									'style'              => 'list',

									'show_count'         => 0,

									'hide_empty'         => 1,

									'use_desc_for_title' => 1,

									'child_of'           => 0,

									'feed'               => '',

									'feed_type'          => '',

									'feed_image'         => '',

									'exclude'            => '',

									'exclude_tree'       => '',

									'include'            => '',

									'hierarchical'       => 1,

									'title_li'           => __( '' ),

									'show_option_none'   => __('No categories'),

									'number'             => null,

									'echo'               => 1,

									'depth'              => 0,

									'current_category'   => 0,

									'pad_counts'         => 0,

									'taxonomy'           => 'category',

									'walker'             => null

								);

								

								

								wp_list_categories($args); ?>

</ul>
	</div>
<div class="sort-breadcrumb ">

<ul class="portfolioFilter">

<li><a href="#" data-filter="*" class="current">All</a></li>

	<li><a href="#" data-filter=".seo">SEO</a></li>

	<li><a href="#" data-filter=".analyticstracking">Analytics & Tracking </a></li>

	<li><a href="#" data-filter=".ppc">PPC</a></li>

	<li><a href="#" data-filter=".socialmedia">Social Media </a></li>

	<li><a href="#" data-filter=".webdesign">Web Design </a></li>

	



</ul>

</div>

<div id="portfolio-block">

<div class=" columns-block columns-1">

<div class="portfolioContainer  ">

<div id="sidebar-columns" class="columns-block columns-margin columns-3 stamp hide-mobile-trending">

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

<div class="columns-lnk link  pull-right"><a href="<?php the_sub_field('more_link', $page_for_posts); ?>" class="blog-trending">More</a></div>

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

<a href="<?php the_permalink(); ?>"><img src="<?php echo $custom_size[0]; ?>" alt="feature image"/></a>

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


<?php include('get-in-touch.php')?>




</div>

 </div>

</div>

 
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
	
    var jQuerycontainer = jQuery('.portfolioContainer');

    jQuerycontainer.isotope({

        filter: '*',

		itemSelector: '.columns',

		stamp: '.stamp',

		masonry: {

		columnWidth: 336,

			gutter: 15

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

<style>

.icon-gear:before { 

	content: "\f104";

	-webkit-animation: spin 2s infinite linear;

	-moz-animation: spin 2s infinite linear;

	-o-animation: spin 2s infinite linear;

	animation: spin 2s infinite linear;

}

</style>



<?php get_footer(); ?>