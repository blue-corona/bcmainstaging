jQuery(document).ready( function() {
	jQuery('.butonimg').click(function(){
		jQuery(this).parent().siblings('.msg-body').slideToggle(1000);
			jQuery(this).toggleClass('butonimghover');
	});
	
});


