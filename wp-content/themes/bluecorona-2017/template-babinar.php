<?php


/**

 * Template Name: Babinar Template

 *

 * Description: A Page Template that adds a sidebar to pages.

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

  <img src="<?php bloginfo( 'template_directory' ); ?>/images/about-subpage-header-image.jpg" alt="about"/>

   <?php } ?>

   </div>

   <div class="breadcrumb-container">

      <?php include('breadcrumb-section.php')?>

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

         <div class="columns-1" id="content-columns">

            <div class="sub-inner-content">
               <h1><?php the_title(); ?></h1>
			    <div class="featured-webinar-row">

			    
				
	

				<?php $myArray = array(); ?>
							<?php // get the categories for the custom post taxonomy
    $terms = get_terms( 'top_webinars', array(
            'orderby'    => 'id',
            'hide_empty' => 0 // hide categories with no posts
        ) 
    );
 
?>

<?php // now run a query for each category
foreach( $terms as $term ) {

    // Define the query
    $args = array(
        'post_type' => 'featured_webinar', // replace with name of your custom post type
   'posts_per_page' => -1,
        'top_webinars'  => $term->slug // replace with name of your custom taxonomy
    );
 
    $query = new WP_Query( $args );

    // output the category in a heading              
    ?>
       <?php $count =1 ; ?>
     <?php   // Start the post loop
        while ( $query->have_posts() ) : $query->the_post(); ?>
		 <?php $myArray[]=$post->ID;?>
		
		 
				 <div class="inner-babinar">
				  <div class="left-web-txt">
				  <div class="head-ing">
				  <?php if($count==1)
				{
					?> <h2><?php the_field('top_post_heading',15689); ?></h2><?php
				}
				?>
				  </div>
				  
				   		  		   
				   <h3><?php the_title();?></h3>
				   <!--div class="blog-post"><span>When:</span> <?php// the_date('D,F j, Y'); ?> ,<?php// the_time('g:i a'); ?> EST</div-->
				   
				   <p><?php the_excerpt();?></p>
                   
				   <div class="columns-lnk link drk-blue-bg pull-left"><a href="<?php the_permalink(); ?>">save my post</a></div>
				  </div>

				  <div class="right-web-img">
				  <?php if (has_post_thumbnail( $id ) ){ ?> <?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id($id), 'post-size'); ?><img src="<?php echo $image_url[0]; ?>"/><?php } else { ?>
				  		  				  
				  <img src="<?php bloginfo( 'template_directory' ); ?>/images/featured-2-img.jpg">
				  <?php } ?>
				  </div>
				 </div>
				 
				 
				 <?php 
				 $count++;
				 endwhile; 
								wp_reset_postdata();
							?>
<?php } ?>
	</div>	
</div>	
</div>
              <div class="thecontent"> <?php the_content();?>
			  
			  			   <div class="download-section upcoming-sec">
			   <div class="inner-section">
			   <div class="top-txt"><h2><?php the_field('upcoming_webinars_heading')?></h2>
<p><?php the_field('upcoming_webinars_sub_heading')?></p></div>
<?php $args = array('post_type' => 'featured_webinar',
					'posts_per_page' => 2,
					'tax_query' => array(
						array(
							'taxonomy' => 'webinar_categories',
							'field'    => 'slug',
							'terms'    => 'upcoming',
						),
					),
					'post__not_in' => $myArray);
							 $loop = new WP_Query($args );
							   $cnt=1;
							 while ( $loop->have_posts() ) : $loop->the_post(); ?> 
<?php if($cnt%3==1){?><div class="tablediv"><?php } ?>

			   <div class="col-donload">
			    <div class="donload-img">
				 <?php if (has_post_thumbnail( $id ) ){ ?> <?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id($id), 'old-post-size'); ?><img src="<?php echo $image_url[0]; ?>"/><?php } else { ?>
				<img src="<?php bloginfo( 'template_directory' ); ?>/images/block-img-1.jpg">
				 <?php } ?>
				</div>
				<h3><?Php the_title();?></h3>
				<p><?php the_excerpt();?>
</p>
				
				<div class="columns-lnk link drk-blue-bg"><a href="<?php the_permalink(); ?>"> Learn More </a></div>
				
			   </div>
			  <?php if($cnt%3==0){?></div><?php } ?>
			   <?php 
			   $cnt++;
			   endwhile; 
								wp_reset_postdata();
							?>
			   
			   </div>
			   </div>
			  
			  
			  
			  
			  </div>

                  <?php 

if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.

	the_post_thumbnail();

} 

?>

               <?php the_field('sub_content'); ?>
			   
			   
			   
			   <div class="download-section">
			   <div class="inner-section">
			   <div class="top-txt"><h2><?php the_field('download__webinars_heading')?></h2>
<p><?php the_field('download_previous_sub_heading')?></p></div>
<?php $args = array('post_type' => 'featured_webinar', 
'posts_per_page' => -1, 
'tax_query' => array(
    array(
        'taxonomy' => 'webinar_categories',
        'field'    => 'slug',
        'terms'    => 'upcoming',
        'operator' => 'NOT IN'
    )
),
'post__not_in' => $myArray);
							 $loop = new WP_Query($args );
							   $cnt=1;
							 while ( $loop->have_posts() ) : $loop->the_post(); ?> 
<?php if($cnt%3==1){?><div class="tablediv"><?php } ?>

			   <div class="col-donload">
			    <div class="donload-img">
				 <?php if (has_post_thumbnail( $id ) ){ ?> <?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id($id), 'old-post-size'); ?><a href="<?php the_permalink(); ?>"><img src="<?php echo $image_url[0]; ?>"/></a><?php } else { ?>
				<a href="<?php the_permalink(); ?>"><img src="<?php bloginfo( 'template_directory' ); ?>/images/block-img-1.jpg"></a>
				 <?php } ?>
				</div>
				<a href="<?php the_permalink(); ?>"><h3><?Php the_title();?></h3></a>
				<p><?php the_excerpt();?>
</p>
				
				<div class="columns-lnk link drk-blue-bg pull-left"><a href="<?php the_permalink(); ?>"> Watch now </a></div>
				
			   </div>
			  <?php if($cnt%3==0){?></div><?php } ?>
			   <?php 
			   $cnt++;
			   endwhile; 
								wp_reset_postdata();
							?>
			   
			   </div>
			   </div>
			   
			  <div class="bottom-content"><p><?php the_field('bottom_content');?></p></div>
			   
 
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

<div class="partner-logo-sec">
	<div class="content-center">
		
		<ul>
		<?php if(get_field('add_partner_logo',10)): ?> 
            <?php while(has_sub_field('add_partner_logo',10)): ?> 
			<li>
			<?php if(get_sub_field('logo_link',10)){ ?>
			<a href="<?php the_sub_field('logo_link',10); ?>"><img src="<?php the_sub_field('logo_image', 10); ?>"></a>
			<?php } else{ ?>
			<img src="<?php the_sub_field('logo_image',10); ?>">
			<?php } ?>
			</li>
			<?php endwhile; ?>  
            <?php endif; ?>
			
		</ul>
	</div>
</div>


<?php get_footer(); ?>