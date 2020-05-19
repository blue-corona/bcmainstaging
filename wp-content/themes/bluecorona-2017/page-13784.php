<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
   <?php endwhile; // end of the loop. ?>

<script>
jQuery(document).ready(function() {  

	//jQuery('.slide-cont').hover(function(){
		//jQuery(this).addClass('slideup');
	//});

	jQuery(".tabs-menu a").click(function(event) {
        event.preventDefault();
        jQuery(this).parent().addClass("current");
        jQuery(this).parent().siblings().removeClass("current");
        var tab = jQuery(this).attr("href");
        jQuery(".challenge-view").not(tab).css("display", "none");
        jQuery(tab).fadeIn();
    });
	
	
	var t = 1;  
	jQuery(window).scroll(function(){
		if(jQuery(".media-section-four").isOnScreen()){
			countfunc();
			
		}
	});
	
	var p = 1;  
	jQuery(window).scroll(function(){
		if(jQuery(".media-section-seven").isOnScreen() && p){
			countfunc1();
			p = 0;
		}
	});
	
});
jQuery.fn.isOnScreen = function(){

    var win = jQuery(window);

    var viewport = {
        top : win.scrollTop(),
        left : win.scrollLeft()
    };
    viewport.right = viewport.left + win.width();
    viewport.bottom = viewport.top + win.height();

    var bounds = this.offset();
    bounds.right = bounds.left + this.outerWidth();
    bounds.bottom = bounds.top + this.outerHeight();

    return (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));

};
function countfunc(){
	jQuery('#demo-pie-1').pieChart({
                barColor: '#F47B20',
                trackColor: '#2D2E2E',
                lineCap: 'butt',
                lineWidth: 13,
                onStep: function (from, to, percent) {
                    jQuery(this.element).find('.pie-value').text(Math.round(percent) + '%').css('color','#F47B20');
                }
            });

            jQuery('#demo-pie-2').pieChart({
                barColor: '#C6006F',
                trackColor: '#2D2E2E',
                lineCap: 'butt',
                lineWidth: 13,
                onStep: function (from, to, percent) {
                    jQuery(this.element).find('.pie-value').text(Math.round(percent) + '%').css('color','#C6006F');
                }
            });

            jQuery('#demo-pie-3').pieChart({
                barColor: '#8DC63F',
                trackColor: '#2D2E2E',
                lineCap: 'square',
                lineWidth: 13,
                onStep: function (from, to, percent) {
                    jQuery(this.element).find('.pie-value').text(Math.round(percent) + '%').css('color','#8DC63F');
                }
            });

} 
function countfunc1(){
      jQuery('.progress').asProgress({
        'namespace': 'progress'
      });
      jQuery('#button_start').on('click', function() {
        jQuery('.progress').asProgress('start');
      });
	  jQuery('#button_start').trigger('click');
}

jQuery(window).scroll(function() {
if (jQuery(this).scrollTop() > 100){  
    jQuery('.dotted-line').addClass("dotted-line-view");
  }
  else{
    jQuery('.dotted-line').removeClass("dotted-line-view");
  }
});

jQuery(document).ready(function(){
	jQuery('.toggle-link').click(function(){
		jQuery('.toggle-list').slideToggle().toggleClass('toggle-active');
		 jQuery("html, body").animate({ scrollTop: jQuery(document).height() }, "slow");
			
		
		if(jQuery('.toggle-list').hasClass('toggle-active')){
			jQuery('.toggle-link span').text('-');
		}
		else{
			jQuery('.toggle-link span').text('+');
		}
		return false;
		
	});
	

});

	
		

</script>




<?php get_footer(); ?>

