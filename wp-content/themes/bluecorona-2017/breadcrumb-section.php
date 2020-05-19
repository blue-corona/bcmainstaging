<div class="content-center">

<div class="tool-bar pull-right">
<ul>
  <li>bookmark<a class="bookmarkMeLink" href="#" rel="sidebar" title="bookmark this page"><span class="custom-icon-save"></span></a></li>
   <!--<li>share<a href=""> <span class="custom-icon-share"></span></a></li>
 <li class="demo">commetns<a href="#pop-up-1" id="open-pop-up-1"> <span class="custom-icon-commetns"></span></a></li>
  <div id="pop-up-1" class="pop-up-display-content">
 <?php //comment_form(); ?>
</div> -->
  
  <li class="icon-text-size">text-size <a href="javascript:void(0)"><span class="custom-icon-text-size2"></span></a><a href="javascript:void(0)"><span class="custom-icon-text-size2x"></span></a></li>
  <li >print<a href="#" id="hrefPrint"> <span class="custom-icon-print"></span></a></li>
 
</ul>

</div>
</div>
<!--
<script src="<?php bloginfo('template_directory'); ?>/js/popupwindow.js"></script>
<script>
jQuery(document).ready(function () {
  
    jQuery('#open-pop-up-1').click(function(e) {
        e.preventDefault();
        jQuery('#pop-up-1').popUpWindow({action: "open"});
    });

    

    
});</script>-->
<script type="text/javascript">
   jQuery('.bookmarkMeLink').click(function() {
    if (window.sidebar && window.sidebar.addPanel) { 
        // Mozilla Firefox Bookmark
        window.sidebar.addPanel(document.title,window.location.href,'');
    }
    else if(window.sidebar && jQuery.browser.mozilla){
        //for other version of FF add rel="sidebar" to link like this:
        //<a id="bookmarkme" href="#" rel="sidebar" title="bookmark this page">Bookmark This Page</a>
        jQuery(this).attr('rel', 'sidebar');
    }
    else if(window.external && ('AddFavorite' in window.external)) { 
        // IE Favorite
        window.external.AddFavorite(location.href,document.title); 
    } else if(window.opera && window.print) { 
        // Opera Hotlist
        this.title=document.title;
        return true;
    } else { 
        // webkit - safari/chrome
        alert('Press ' + (navigator.userAgent.toLowerCase().indexOf('mac') != - 1 ? 'Command/Cmd' : 'CTRL') + ' + D to bookmark this page.');

    }
});
chrome.bookmarks.create({'.bookmarkMeLink': bookmarkBar.id,'title': 'Extension bookmarks'},
  function(newFolder) {
    console.log("added folder: " + newFolder.title);
});
</script>
<script>
jQuery(document).ready(function(){
    jQuery(".custom-icon-text-size2x").click(function(){
        jQuery(".sub-inner").addClass("sub-inner-large");
    });
	jQuery(".custom-icon-text-size2").click(function(){
        jQuery(".sub-inner").removeClass("sub-inner-large");
    });
});
</script>