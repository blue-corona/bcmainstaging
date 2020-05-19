<?php
/*
Template Name: Home Page
*/ 
get_header();
?>
<div class="home-bxslider bslider">
	<div class="home-page-slider">

		<div class="slider-sec slider-sec-1">
			<?php //$image = get_field('banner_image'); ?>
			
			<?php $ie_image = get_field('ie_banner_image'); ?>
         <!--banner for ie browser-->
         <img src="<?php echo $ie_image['url']; ?>">
			<?php $image = get_field('mobile_banner_image'); ?>
			
			<style>
				@media(max-width:767px){
					.slider-sec.slider-sec-1{background-image:url('<?php echo $image['url']; ?>')}
				}
			</style>
			
			<div class="banner-single">
	

			</div>
			<div class="banner-caption-block">
				<div class="bn-title"><?php the_field('internet_heading');?></div>
				<div class="traffic-block">
					<div class="bdr-line"></div>
					<ul class="mobile-traffic-slide">
						<?php if( have_rows('banner_internet') ):  ?>
							<?php
							$cnt = 1;
							?>	
							<?php  while ( have_rows('banner_internet') ) : the_row(); ?>
								<li>
									<div class="traffic-box">
										<?php $image = get_sub_field('internet_icon'); ?>
										<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
										<?php the_sub_field('internet_title');?></div>
									</li>
									<?php
									$cnt++;
								endwhile; ?>
							<?php endif;?>

						</ul>
					</div>
				</div>


			</div>

		</div>
		<div class="page-curve">
<div class="real-curve"> 

<!-- Generator: Adobe Illustrator 22.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 1952.1 347.3" style="enable-background:new 0 0 1952.1 347.3;" xml:space="preserve">
<style type="text/css">
	.st0{display:none;opacity:1;enable-background:new    ;}
	.st1{fill:#88CCF1;}
</style>
<path class="st0" d="M132.2-111.8c0,0,741,490.5,1919,123.6v24c0,0-948.5,375.9-1918.9,0L132.2-111.8z"/>
<path class="st1" d="M0.1,4.1l-0.4,145.1c0,0,494.6,246,1417.7,138c0,0,312.8-33,535.2-135l0.5-22.5
	C1953.1,129.6,983.8,501.6,0.1,4.1z"/>
</svg>
</div>
<div class="fill-curve">

<!-- Generator: Adobe Illustrator 22.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 1952.1 347.3" style="enable-background:new 0 0 1952.1 347.3;" xml:space="preserve">
<style type="text/css">
	.st2{fill:#FFFFFF;}
	.st3{fill:#FFFFFF;} 
</style>
<path class="st2" d="M1948.9,349.8l3.2-201c0-0.1-969.3,386.2-1953-130.4l-0.4,331.4"/>
<path class="st3" d="M1948.9,349.8l3.2-201c0-0.1-969.3,386.2-1953-130.4l-0.4,331.4"/>
</svg>



</div>
</div>
	</div>
	<!-- S:Services -->
	<div class="multiple-section">
		<div class="gray-section">
			<div class="partner-logo-sec divider-line">
				<div class="content-center">
					<ul>
				<?php if(get_field('add_partner_logo')): ?> 
				<?php while(has_sub_field('add_partner_logo')): ?>  
					<li>
			   <?php if(get_sub_field('script_code')){ ?>
			   <?php the_sub_field('script_code_image'); ?>
			   
			    <?php } else{ ?>
				 <?php if(get_sub_field('logo_link')){ ?>
                  <a href="<?php the_sub_field('logo_link'); ?>"><img src="<?php the_sub_field('logo_image'); ?>"></a>
                  <?php } else{ ?>
                  <img src="<?php the_sub_field('logo_image'); ?>">
                  <?php } ?>
				<?php } ?>
			   
                 
               </li>
				<?php endwhile; ?>  
			<?php endif; ?>	
			
		</ul>
	</div>
</div>
<!-- E:Home Content -->
<div id="home-content">
	<div class="content-center">
		<div class="row-site align-items-center">
			<div class="home-left-content">
				<?php $content_image = get_field('content_image'); ?>
				<?php if($content_image){
					?><img src="<?php echo $content_image['url']; ?>" alt="<?php echo $content_image['alt']; ?>"/><?php
				}else{
					?><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/content-img-1.jpg" alt=""/><?php 
				} ?>
			</div>

			<div class="home-right-content">
				<div class="blue-txt wow fadeIn"> <h1><?php the_field('title'); ?></h1></div>
				<div class="desp">
					<h2><?php the_field('sub_title'); ?></h2>
					<div class="btomsub-head purple-txt"><?php the_field('sub_title_second'); ?></div>
					<?php the_field('show_content'); ?>

					<div class="hide-content-sec"><?php the_field('hide_content'); ?></div>
					<div class="read-more-text">READ MORE +</div>

				</div>
			</div>
		</div>
	</div>
</div>
<!-- E:Home Services -->
<div id="home-services" class="divider-line">
	<div class="content-center">
		<div class="home-services-slider slick-panel"> 
			<?php
			if( have_rows('home_services') ):
				while ( have_rows('home_services') ) : the_row();
					$image = get_sub_field('image');
					$title = get_sub_field('title');
					$content = get_sub_field('content');
					$service_icon_class = get_sub_field('service_icon_class');
					$link = get_sub_field('link');
					?>
					<div class="home-services-panel">


						<div class="home-services-img">
							
							<?php if($image){
								?><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/><?php
							}else{
								?><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/content-img-1.jpg" alt=""/><?php 
							} ?>
							
							<div class="home-services-content <?php echo 'content-'.get_row_index(); ?>">
								<div class="home-services-inner">
									<div class="home-services-icon">
										<i class="<?php echo $service_icon_class; ?>"></i>
									</div>
									<div class="home-services-title"><?php echo $title; ?></div>
									<p>
										<?php echo $content; ?>
									</p>
									<?php 
									if( $link ){
										$link_url = $link['url'];
										$link_title = $link['title'];
										$link_target = $link['target'] ? $link['target'] : '_self';
										?>
									
										<a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>" class="button-default"><?php echo esc_html($link_title); ?></a>
									<?php }else{
										?><a href="#">learn More</a><?php
									}
									?>				  

								</div>
							</div>
						</div>
						<?php 
							if( $link ){
								$link_url = $link['url'];
								$link_title = $link['title'];
								$link_target = $link['target'] ? $link['target'] : '_self';
							?>
							<a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>" class="link-for-mobile"></a>
						<?php } else{
							?><a href="#" class="link-for-mobile"></a><?php
						}
						?>			

					</div>

					<?php
				endwhile;
			else :
			// no rows found
			endif;
			?>

		</div>
	</div>
</div>

<!-- E:Home Services -->
<div id="home-secondary-services" class="divider-line new-secodary-service">
	<div class="content-center">
		<h2>We’ll Also Drive <br> Your Results Through:</h2>
		<div class="secondary-services-slider slick-panel slick-dots-blue">

			<?php
			if( have_rows('secondary_services') ):
				while ( have_rows('secondary_services') ) : the_row();
					$icon_class = get_sub_field('icon_class');
					$title = get_sub_field('title');
					$link = get_sub_field('link');
					?>
					<a  href="<?php echo $link; ?>" class="secondary-services-panel">
						<div class="secondary-services-content">

							<i class="<?php echo $icon_class; ?>"></i>
							<div class="secondary-services-title"><?php echo $title; ?></div>

						</div>	  

					</a>

					<?php
				endwhile;
			else :
			// no rows found
			endif;
			?>

		</div>
	</div>
</div>
</div>
</div>
<!-- I:industries Sec -->
<div class="industries-sec">
	<div class="content-center">
		<div class="row-site align-items-center">
			<div class="col-12-site">
				<div class="industries-title"><?php the_field('industries_heading');?></div>
				<div class="industries-btn"></div>
				<div class="clear"></div>
				<div class="columns-row">
				<ul>

					<?php if( have_rows('industries_list') ):  ?>
						<?php  while ( have_rows('industries_list') ) : the_row(); ?>
							<li>
								<?php $link = get_sub_field('add_links');
								if( $link ): 								
									$link_url = $link['url'] ? $link['url'] : '#';
									$link_title = $link['title'] ? $link['title'] : 'Read More';
									$link_target = $link['target'] ? $link['target'] : '_self';
									?>
									<a  href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
								<?php endif; ?>


							</li>
						<?php  endwhile;?> 
					<?php endif;?>
				</ul>
				</div>
				<?php $image = get_field('right_ipad_image'); ?>
				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="ipad-img"/>
			</div>
		</div>
	</div>
</div>
<!-- I:industries Sec -->




<div class="content-sec-panel-1">
	<div class="content-sec-panel-inner">
		<div class="content-panel divider-line custom-accordion-content-1">
			<div class="wrap wrap-1">
				<div class="collapse-title"><span><?php the_field('digital_marketing_services_title');?></span></div>
				<div class="content-accordion-panel">
					<div class="image_cover" style="background-image:url('<?php the_field('digital_marketing_services_image');?>')"></div>
					<div class="content-center">
						<div class="row-site align-items-center">
							<div class="col-12-site">
								<div class="content-panel-area">
									<div class="accordion-head"><?php the_field('digital_marketing_services_heading');?> </div>
									<div class="accordion-subhead"><h2><?php the_field('digital_marketing_services_subhead');?></h2></div>

									<div class="content-scroller">
										<h2><?php the_field('digital_marketing_services_title');?></h2> 
										<?php the_field('digital_marketing_services_content');?>
									</div>
									<?php $digital_content_link = get_field('digital_marketing_services_link');
									if( $digital_content_link ): 								
										$digital_content_link_url = $digital_content_link['url'] ? $digital_content_link['url'] : '#';
										$digital_content_link_title = $digital_content_link['title'] ? $digital_content_link['title'] : 'Read More';
										$digital_content_link_target = $digital_content_link['target'] ? $digital_content_link['target'] : '_self';
										?>
										<a href="<?php echo esc_url($digital_content_link_url); ?>" target="<?php echo esc_attr($digital_content_link_target); ?>" class="button-default"><?php echo esc_html($digital_content_link_title); ?></a>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="content-sec-panel-2">
	<div class="content-sec-panel-inner">
		<div class="content-panel divider-line custom-accordion-content-2">
			<div class="wrap wrap-2">	

				<div class="collapse-title"><span><?php the_field('seo_ppc_title');?></span></div> 
				<div class="content-accordion-panel">
					<div class="image_cover" style="background-image:url('<?php the_field('seo_ppc_image');?>')"></div>
					<div class="content-center">
						<div class="row-site align-items-center">
							<div class="col-12-site">
								<div class="content-panel-area">
									<div class="accordion-head"><?php the_field('seo_ppc_heading');?></div>
									<div class="accordion-subhead"><?php the_field('seo_ppc_subhead');?></div>

									<div class="content-scroller">
										<h2><?php the_field('seo_ppc_title');?></h2> 
										<?php the_field('seo_ppc_content');?>
									</div>
									<div class="text-left">
										<?php $seo_content_link = get_field('seo_link');
										if( $seo_content_link ): 								
											$seo_content_link_url = $seo_content_link['url'] ? $seo_content_link['url'] : '#';
											$seo_content_link_title = $seo_content_link['title'] ? $seo_content_link['title'] : 'Read More';
											$seo_content_link_target = $seo_content_link['target'] ? $seo_content_link['target'] : '_self';
											?>
											<a href="<?php echo esc_url($seo_content_link_url); ?>" target="<?php echo esc_attr($seo_content_link_target); ?>" class="button-default"><?php echo esc_html($seo_content_link_title); ?></a>
										<?php endif; ?>

										<?php $ppc_content_link = get_field('ppc_link');
										if( $ppc_content_link ): 								
											$ppc_content_link_url = $ppc_content_link['url'] ? $ppc_content_link['url'] : '#';
											$ppc_content_link_title = $ppc_content_link['title'] ? $ppc_content_link['title'] : 'Read More';
											$ppc_content_link_target = $ppc_content_link['target'] ? $ppc_content_link['target'] : '_self';
											?>
											<a href="<?php echo esc_url($ppc_content_link_url); ?>" target="<?php echo esc_attr($ppc_content_link_target); ?>" class="button-default"><?php echo esc_html($ppc_content_link_title); ?></a>
										<?php endif; ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="content-sec-panel-3">
	<div class="content-sec-panel-inner">
		<div class="content-panel divider-line custom-accordion-content-3">
			<div class="wrap wrap-3">	

				<div class="collapse-title"><span><?php the_field('website_design_title');?></span></div> 
				<div class="content-accordion-panel">
					<div class="image_cover" style="background-image:url('<?php the_field('website_design_image');?>')"></div>
					<div class="content-center">
						<div class="row-site align-items-center">
							<div class="col-12-site">
								<div class="content-panel-area">
									<div class="accordion-head"><?php the_field('website_design_heading');?></div>
									<div class="accordion-subhead"><?php the_field('website_design_subhead');?></div>

									<div class="content-scroller">
										<h2><?php the_field('website_design_title');?></h2> 
										<?php the_field('website_design_content');?>
									</div>
									<?php $website_design_content_link = get_field('website_design_link');
										if( $website_design_content_link ): 								
											$website_design_content_link_url = $website_design_content_link['url'] ? $website_design_content_link['url'] : '#';
											$website_design_content_link_title = $website_design_content_link['title'] ? $website_design_content_link['title'] : 'Read More';
											$website_design_content_link_target = $website_design_content_link['target'] ? $website_design_content_link['target'] : '_self';
											?>
											<a href="<?php echo esc_url($website_design_content_link_url); ?>" target="<?php echo esc_attr($website_design_content_link_target); ?>" class="button-default"><?php echo esc_html($website_design_content_link_title); ?></a>
										<?php endif; ?>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/background-graphic-small-swoosh2.png" alt="swoosh-img-3" class="swoosh-img-3"/>
</div>

	<!-- S:About Us -->
	<div id="home-about">
		<div class="content-center">
			<div class="row-site align-items-center">
				<div class="col-6-site p-right">
					<div class="site-head "><?php the_field('about_heading');?></div>
					<div class="site-subhead"><?php the_field('about_subheading');?></div> 
					<p><?php the_field('about_content');?></p>

					<?php $link = get_field('learn_more_link');
					if( $link ): 								
						$link_url = $link['url'] ? $link['url'] : '#';
						$link_title = $link['title'] ? $link['title'] : 'Learn More';
						$link_target = $link['target'] ? $link['target'] : '_self';
						?>
						<a class="button-default" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
					<?php endif; ?>
				</div>

				<div class="col-6-site right-sec-content">
					<?php $image = get_field('about_right_image'); ?>
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
				</div>

			</div>
		</div>
	</div>
	<!-- E:About Us -->
	<div class="home-testimonials">

		<div class="home-testimonials-inner">
			<div class="home-testimonials-panel divider-line">
				<div class="mobile-show-heading">
					<div class="site-head "><span> <?php the_field('top_heading');?></span></div>
					<div class="site-subhead "> <?php the_field('testimonial_sub_title');?></div> 
				</div>
				<div class="new-home-testimonial">
					<ul class="slide-testimonial-home">

						<?php $args =array('post_type'=>'testimonials','posts_per_page'=>4,'order'=>'DESC');?>
						<?php $query =new WP_Query($args);?>
						<?php while ( $query->have_posts() ): $query->the_post();?>
							<li>
								<div class="home-testimonial-slide for-desktop">
									<span><?php the_title();?><?php if(get_field('designation')){ ?>, <?php the_field('designation');?><?php } ?></span>
									<strong> <?php the_field('company_name');?></strong>
										<?php $testi_text = get_the_content() ; ?>	
											<?php $testi_trimmed = wp_trim_words( $testi_text, $num_words = 28, $more = null ); ?>
									<div class="inner-slider-content"><p><?php echo $testi_trimmed ; ?>"</p></div>
									<!--<a class="readmore-link" href="<//?php the_permalink();?>">READ MORE <i class="fa fa-caret-right" aria-hidden="true"></i></a>-->
								</div>
								<div class="home-testimonial-slide for-mobile">
									<span><?php the_title();?><br class="d-mobile"> <?php the_field('designation');?></span>
									<strong> <?php the_field('company_name');?></strong>
									<div class="inner-slider-content"><?php echo the_content(); ?></div>
									<a class="readmore-link" href="<?php the_permalink();?>">READ MORE <i class="fa fa-caret-right" aria-hidden="true"></i></a>
								</div>
							</li>
							</li>

						<?php endwhile;?>
						<?php wp_reset_postdata();?>


					</ul>
					<style>
						@media(min-width:768px){
							.home-testimonial-slide.for-mobile{display:none}
						}
						@media(max-width:767px){
							.home-testimonial-slide.for-desktop{display:none}
						}
					</style>
				</div>

				<div class="home-testimonials-panel-area-outer">
					<div class="home-testimonials-panel-area">
						<div class="desktop-show-heading">
							<div class="site-head "><span> <?php the_field('top_heading');?></span></div>
							<div class="site-subhead "> <?php the_field('testimonial_sub_title');?></div> 
						</div>

						<?php 
						$link = get_field('testimonial_link');
						if( $link ): 
							$link_url = $link['url'];
							$link_title = $link['title'];
							?>
							<a class="button-default" href="<?php echo esc_url($link_url); ?>" ><?php echo esc_html($link_title); ?></a>
						<?php endif; ?>


					</div>
				</div>

			</div>

		</div>
	</div>
	<!-- E:Arrow Link -->
</div>
<!-- E:Case Studies -->
<!-- S:Blog & News -->
<div id="blog-news">
	<div class="content-center">
		<div id="home-blog-block" class="post-blog">
			<div class="site-head text-center"><span>BLOG</span></div>
			<div class="site-subhead text-center">RECENT POSTS</div> 

			<div class="home-blog-post-row divider-line">
				<div class="row-site">
					<?php $args = array('post_type' => 'post', 'posts_per_page' => 2);
					$loop = new WP_Query($args ); 
					while ( $loop->have_posts() ) : $loop->the_post(); ?> 
						<div class="col-6-site">
							<div class="home-blog-post">
								<div class="home-feture-img">
									<?php  $feture_img = wp_get_attachment_image_src(get_field('post_paga_image'), 'feture-img'); ?>
									<?php if($feture_img): ?>
										<a href="<?php the_permalink(); ?>" >
											<img src="<?php echo $feture_img[0]; ?>" alt="feature image"/>
										</a>  
									<?php endif; ?>						   
								</div>
								<div class="home-blog-time"><?php the_time('m.d.y'); ?></div>
								<p><?php echo wp_trim_words(get_the_content(), 17); ?></p>
								<div class="home-blog-link"><a href="<?php the_permalink(); ?>">Read More</a></div>

							</div>
						</div>
					<?php endwhile;
					wp_reset_postdata(); 
					?>
					<a class="button-default visible-xs" href="/blog/">Read All</a>

				</div>
			</div>


		</div>
	</div>
</div>
<!-- E:Blog & News -->

<!-- S:Free Stuff -->

<script>
	jQuery(document).ready(function() {
		if (jQuery(window).width() > 769) {
			jQuery('.slide-testimonial-home').slick({
				dots: false,
				infinite: true,
				speed: 300,
				slidesToShow: 2,
				slidesToScroll: 1,
				responsive: [


				{
					breakpoint: 992,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1,

					}
				}

				]
			});
		};
		jQuery('.read-more-text').click(function (event) {
			event.preventDefault();
			jQuerythis = jQuery(this);
			jQuery('.hide-content-sec').slideToggle(1000);
			jQuerythis.text(jQuerythis.text() == 'READ LESS -' ? 'READ MORE +' : 'READ LESS -');
		});

//Mobile banner slider//
jQuery('.mobile-traffic-slide').slick({
	infinite: true,
	slidesToShow: 3,
	slidesToScroll: 1,
	autoplay: true,
	autoplaySpeed: 2000,
	arrows: false,
	responsive: [
	{
		breakpoint: 1300,
		settings: {
			slidesToShow: 3,
			slidesToScroll: 1,
			infinite: true,
			dots: false
		}
	},
	{
		breakpoint: 1200,
		settings: {
			slidesToShow: 2,
			slidesToScroll: 1,
			infinite: true,
			dots: false
		}
	},
	{
		breakpoint: 992,
		settings: {
			slidesToShow: 1,
			slidesToScroll: 1
		}
	},
	{
		breakpoint: 767,
		settings: {
			slidesToShow: 1,
			slidesToScroll: 1
		}
	}

	]

});

jQuery(".industries-btn").click(function(){
	jQuery(this).toggleClass("open");
	jQuery(".industries-sec .columns-row").slideToggle();
});




//Mobile banner slider// 
});
	
</script>
<script>
	jQuery(document).ready(function() {
		jQuery('.collapse-title').click(function(e) {
			e.preventDefault();

			var jQuerythis = jQuery(this);

			if (jQuerythis.next().hasClass('show')) {
				jQuerythis.next().removeClass('show');
				jQuerythis.next().slideUp(350);

			} else {
        // jQuerythis.parent().parent().find('.content-accordion-panel').removeClass('show');
        // jQuerythis.parent().parent().find('.content-accordion-panel').slideUp(350);
        jQuerythis.next().toggleClass('show');
        jQuerythis.next().slideToggle(350);
    }
});

		jQuery(".collapse-title").click(function(){
			jQuery(this).toggleClass("active");

		});

	});
</script>


<?php get_footer();?>