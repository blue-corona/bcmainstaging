<?php
/*

Template Name: Career Page

*/ 

get_header(); ?>

<div id="sub-container">
   <div class="sub-title-container">
      <?php if( get_field('header_image') ){ ?>	
      <img src=" <?php the_field('header_image'); ?>" alt=""/>
      <?php }else{ ?>	
      <img src="<?php bloginfo( 'template_directory' ); ?>/images/career-banner.jpg" alt="about"/>
      <?php } ?>
   </div>

   <div class="sub-inner">

      <div class="content-center">
         <div class="columns-1" id="content-columns">
            <div class="sub-inner-content">
               <h1><?php the_title(); ?></h1>
<img class="thumbup" src="<?php bloginfo( 'template_directory' ); ?>/images/thumb-up-icon.png"  width="139" height="129"/>
<div class="entry-content">

<?php while ( have_posts() ) : the_post(); ?>
                  <?php the_content(); ?>
                  <?php endwhile; // end of the loop. ?>
</div>
<div class="btn-center">
<a href="javascript:void(0)" class="blue-btn">Apply now!</a>
<span class="down-arrow"><img src="<?php bloginfo( 'template_directory' ); ?>/images/down-arrow.png"/></span>
</div>
			
            </div>
         </div>
      </div>
	  <?php if(get_field('add_team_block')): ?>
	  <div class="career-sec-slider">
	  <div class="content-center"><div class="heading-carrer"><?php the_field('our_team_head'); ?></div></div>
	 <div id="case-studies">
      <div id="case-blocks1" class="center">
	  
	                     
	<?php while(has_sub_field('add_team_block')): ?>
		
		<div class="case-block1">
            <div class="case-block-innner">
               <div class="case-img"><?php the_sub_field('video_path'); ?></div>
				  <div class="case-content">
						<div class="large-title"><?php the_sub_field('title'); ?></div>
						<p><?php the_sub_field('content'); ?></p>
               
            </div>
            </div>
         </div>
	<?php endwhile; ?>  

		 
      </div>
   </div>
   </div>
   <?php endif; ?>
   <div class="content-center like-owner-sec">
		<div class="heading-carrer"><?php the_field('core_values_head'); ?></div>
		 <div class="like-owner-img"><img src="<?php the_field('core_values_image'); ?>"></div>
   </div>
   <?php if(get_field('add_perks_block')): ?> 
   <div class="following-perks-sec">
	<div class="content-center">
		<div class="offer-listing">
		<div class="heading-carrer"><?php the_field('perks_head'); ?></div>
			<ul>
				
				                  
	<?php while(has_sub_field('add_perks_block')): ?>
		
		<li>
					<span class="list-icon"><img src="<?php the_sub_field('perks_image'); ?>"></span>
					<strong><?php the_sub_field('perks_title'); ?></strong>
					<p><?php the_sub_field('perks_content'); ?></p>
				</li>
	<?php endwhile; ?>  


			</ul>
			<div class="btn-center">
<a href="javascript:void(0)" class="blue-btn">Apply now!</a>
<span class="down-arrow"><img src="<?php bloginfo( 'template_directory' ); ?>/images/down-arrow.png"/></span>
</div>
		</div>
	</div>
   </div>
   <?php endif; ?>
   <?php if(get_field('add_process_block')): ?> 
   <div class="our-process-sec">
	<div class="content-center">
		<div class="heading-carrer"><?php the_field('process_head'); ?></div>
		<div class="process-list">
			<ul>
			
<?php $cnt = 1; ?>			
	<?php while(has_sub_field('add_process_block')): ?>
		<li>
					<div class="circle-icon"><img src="<?php the_sub_field('process_image'); ?>"/></div>
					<span><?php echo $cnt; ?></span>
					<strong><?php the_sub_field('process_title'); ?></strong>
					<p><?php the_sub_field('process_content'); ?> </p>
				</li>
	<?php 
	$cnt++;
	endwhile; ?>  

			</ul>
		</div>
	</div>
   </div>
   <?php endif; ?>
   <div class="content-center">
	<div class="apply-now-heading">So, what are you waiting for? Apply now.</div>
<script type="text/javascript" src="//app.jazz.co/widgets/basic/create/bluecorona" charset="utf-8"></script>
   </div>
   <div class="bluecorona-testimonials">
	<div class="content-center">
		<div class="testimonial-head">What Working at Blue Corona Is Really Like</div>
		<ul class="testimonial-slider">
		<?php if(get_field('add_testimonials')): ?>                   
	<?php while(has_sub_field('add_testimonials')): ?>
		
		<li>
				<p><span class="up-side">“</span><?php the_sub_field('testimonial_content'); ?><span>”</span></p>
				<span>- <?php the_sub_field('testimonial_title'); ?> <br> <?php the_sub_field('location'); ?> </span>
			</li>
	<?php endwhile; ?>  
<?php endif; ?>

		
			
		</ul>
		<div class="classdoor-icon"><a href="https://www.glassdoor.com/Reviews/Blue-Corona-Reviews-E732379.htm" target="_blank"><img src="<?php bloginfo( 'template_directory' ); ?>/images/glassdoor-icon.jpg"/></a></div>
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

  
</div>
</div>

<?php get_footer(); ?>
