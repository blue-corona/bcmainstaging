<?php
/**
 * Template Name: Faq Template
 *
 * Description: A Page Template that adds a sidebar to pages.
 *
 * @package WordPress
 * @subpackage Bluecorona_2015
 * @since Bluecorona 2015 1.0
 */

get_header(); ?>

<div class="right-form-dev">
<div class="free-analysis" id="free-analysis"><a href="#scroll-form" class="scroll-dowm">Free Analysis</a></div>

</div>
<div id="sub-container"> 
<div class="sub-title-container"><?php if( get_field('header_image') ){ ?>	
  
   <img src=" <?php the_field('header_image'); ?>" alt=""/>
   <?php }else{ ?>	
  <img src="<?php bloginfo( 'template_directory' ); ?>/images/resources-header-image.jpg" alt="about"/>
   <?php } ?></div>

<div class="sub-inner free-icon-container">
	
  <div class="content-center">
    <div class="columns-1" id="content-columns">
    <div class="sub-inner-content">
    <h1><?php the_title(); ?></h1>
	 
  <div class="page-form">
  <?php
						
					if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
					  the_post_thumbnail(get_the_id(), 'full', array());
					} else{?>
					<img src="<?php bloginfo( 'template_directory' ); ?>/images/faq-content-img.jpg" alt="faq-content-img"/>
						<?php }		?>
  
  
  </div>
<?php 
	$args1 = array(
		'orderby'       => 'id', 
		'order'         => 'ASC',
		'hide_empty'    => true, 
		'exclude'       => array(), 
		'exclude_tree'  => array(), 
		'include'       => array(),
		'number'        => '', 
		'fields'        => 'all',  
		'slug'          => '', 
		'parent'         => '',
		'hierarchical'  => true, 
		'child_of'      => 0, 
		'get'           => '', 
		'name__like'    => '',
		'pad_counts'    => false, 
		'offset'        => '', 
		'search'        => '', 
		'cache_domain'  => 'core'
	); 
	$allterms = get_terms( 'faq' , $args1);
	
	foreach($allterms as $singleterm){ 
		$term = sanitize_term( $singleterm, 'faq' );
		$term_link = get_term_link( $term, 'faq' );
		if ( is_wp_error( $term_link ) ) {
			continue;
		}
	?>
	 <div class="our-team-term-wrp">
<div class="our-team-term  wow fadeInDown"><h2 class="hr-line"><a href="<?php echo esc_url( $term_link ); ?>"><?php echo  $singleterm->name; ?></a></h2></div>
	<div class="clr"></div>
	<?php 
		$args = array('post_type' => 'faq-post', 'posts_per_page' => -1,'order' => 'ASC',
		'tax_query' => array(
				array(
					'taxonomy' => 'faq',
					'field' => 'slug',
					'terms' =>  $singleterm->slug
				)
			)
	);
		$query = new WP_Query( $args );
		if($query->have_posts()):
			while($query->have_posts()):$query->the_post(); 
			$content =  get_the_content();
			?>
				<div class="single-faq-wrap  wow fadeInDown">
					
					<div class="single-faq-head"><h3><?php the_title(); ?></h3></div>
					<div class="single-faq-content"><p><?php echo get_the_excerpt(); ?></p>
					<?php if(!empty($content)){ ?>
					<div class="link link-arrow"><a href="<?php the_permalink(); ?>">Read More</a></div>
					 <?php } ?>
					</div>
				</div>
				
			
		<?php	
		
		endwhile; 
		?>
		</div>
		<?php
		endif;
		wp_reset_postdata();
	}
?> 
<?php include('get-in-touch.php')?>
</div> 
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
<?php get_footer(); ?>