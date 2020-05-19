<?php
/**
 * Template Name: Showcase Template
 *
 * Description: A Page Template that showcases Sticky Posts, Asides, and Blog Posts.
 *
 * The showcase template in Bluecorona 2015 consists of a featured posts section using sticky posts,
 * another recent posts area (with the latest post shown in full and the rest as a list)
 * and a left sidebar holding aside posts.
 *
 * We are creating two queries to fetch the proper posts and a custom widget for the sidebar.
 *
 * @package WordPress
 * @subpackage Bluecorona_2015
 * @since Bluecorona 2015 1.0
 */

// Enqueue showcase script for the slider
wp_enqueue_script( 'bluecorona2015-showcase', get_template_directory_uri() . '/js/showcase.js', array( 'jquery' ), '2011-04-28' );

get_header(); ?>

		<div id="sub-container">
<div class="sub-title-container"><img src="<?php bloginfo( 'template_directory' ); ?>/images/resources-img" alt="about"/>
<div class="sub-title">
<div class="content-center"><span>resources</span></div>
</div>
</div>
<div class="breadcrumb-container">
<div class="content-center">
<div class="breadcrumb pull-left">
<ul>
<li><a href="">resources </a></li>
<li class="active"><a href="">meet the team</a></li>
</ul>
</div>
<div class="tool-bar pull-right">
<ul>
<li class="icon-save"><a href="">save </a></li>
<li class="icon-share"><a href="">share</a></li>
<li class="icon-commetns"><a href="">commetns</a></li>
<li class="icon-text-size"><a href="">text-size</a></li>
<li class="icon-print"><a href="">print</a></li>
</ul>
</div>
</div>
</div>
<div class="sub-inner cf free-icon-container">
<div class="content-center">
<div class="sub-inner-content">
<h1>PORTFOLIO</h1>
<div id="subform-group"> <?php echo do_shortcode( '[gravityform id="5" name="Get in touch" description="false"]' ) ?> </div>
<div class="bubble-icon-conatiner purple-bg"><span class="bubble-icon"><img src="http://www.bluecorona.com/wp-content/uploads/2015/03/icon-chat@2x.png"/></span>
</div>
<div class="sort-breadcrumb ">
<ul class="portfolioFilter">
<li><a href="#" data-filter="*" class="current">All</a></li>
	<li><a href="#" data-filter=".Home-Services"> Home Services </a></li>
	<li><a href="#" data-filter=".Home-Design"> Home Design </a></li>
	<li><a href="#" data-filter=".Technology">Technology    </a></li>
	<li><a href="#" data-filter=".Other">Other</a></li>

</ul>
</div>
<div id="portfolio-block">
<div class=" columns-block columns-1">
<div class="portfolioContainer -1 ">

<!--<div class="cf Industry">
<div class="heading hr-line drk-blue-txt  ">ALL NEWS</div>
</div>-->

<div class="portfolio-columns columns-3 Technology">
<div class="columns-feture-img"> <img src="<?php bloginfo( 'template_directory' ); ?>/images/placeholder-1.jpg"/>
   <div class="portfolio-overlay">
<div class="columns-lnk link "><a href="#">Read Article</a></div>
        </div>
 </div>
<div class="portfolio-title">
<div class="sub-head drk-txt">Subhead here</div>
<p>Short description goes here</p>
</div>
</div>

<div class="portfolio-columns columns-3 Other">
<div class="columns-feture-img"><img src="<?php bloginfo( 'template_directory' ); ?>/images/placeholder-2.jpg"/>
   <div class="portfolio-overlay">
<div class="columns-lnk link "><a href="#">Read Article</a></div>
        </div>

</div>
<div class="portfolio-title">
<div class="sub-head drk-txt">Subhead here</div>
<p>Short description goes here</p>
</div>
</div>
<div class="portfolio-columns columns-3 Other">
<div class="columns-feture-img"><img src="<?php bloginfo( 'template_directory' ); ?>/images/placeholder-3.jpg"/>
   <div class="portfolio-overlay">
<div class="columns-lnk link "><a href="#">Read Article</a></div>
        </div>
</div>
<div class="portfolio-title">
<div class="sub-head drk-txt">Subhead here</div>
<p>Short description goes here</p>
</div>
</div>
</div>
</div>
</div>
</div>
 </div>
</div>
 <?php include('free-stuff.php')?>
</div>

<?php get_footer(); ?>