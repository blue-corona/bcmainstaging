



jQuery(function () {
    



    jQuery(".team-img-block").live("click", function () {
        var bio = buildBioObject(this);

        //If a list item with ID biography does not exists then create
        //a list Item with ID biography and insert it after bio.rowIndex (last one in the row)
        if (jQuery(".biography").length == 0) {
            jQuery(".people-list ul li.person:eq(" + (bio.rowIndex) + ")").after(buildBioHTML(bio));
            
            expand(".biography", 400, function () {
                jQuery(".biography").css("height", "auto");
            });

        }

            //If the list Item with ID biography does exist
        else {
            var index = parseInt(jQuery(".biography").data("index"), 10);
            var rowIndex = parseInt(jQuery(".biography").data("rowIndex"), 10);
            if (index == bio.index) {
                colapse(".biography", 400, function () {
                    jQuery(".biography").remove();
                });
            }
            else {
                if (rowIndex == bio.rowIndex) {
                    jQuery(".biography").wrap("<li class='collaspe-container'></li>");
                    
                    colapse(".biography", 400, function () {
                        jQuery(".biography").remove();
                        jQuery(".collaspe-container").append(buildBioHTML(bio));
                        expand(".biography", 400, function () {
                            jQuery(".biography").css("height", "auto");
                            jQuery(".biography").unwrap();
                        });

                    });
                }
                else {
                    colapse(".biography", 400, function () {
                        jQuery(".biography").remove();
                        jQuery(".people-list ul li.person:eq(" + (bio.rowIndex) + ")").after(buildBioHTML(bio));
                        
                        expand(".biography", 400, function () {
                            jQuery(".biography").css("height", "auto");
                        });

                    });


                }
            }
        }

    });
	
});


function expand(selector, time, callback) {
    var settings = {
        showArrows: true
    };
    var pane = jQuery('.people-list').find('.scroll-pane');
    pane.jScrollPane(settings);
    jQuery(selector).animate({
        height: "318"
    }, time, function () {
        callback()
    });
	jQuery(".bio-right-inner").mCustomScrollbar();
}

function colapse(selector, time, callback) {
    jQuery(selector).animate({
        height: "0"
    }, time, function () {
        callback();
    });
}

function close() {
    colapse(".biography", 400, function () {
        jQuery(".biography").remove();
        jQuery('.portfolio-columns').removeClass('team-portfolio-bg');
    });
}
jQuery(".biography .close-button").live("click", close);

function findrow(i,j=2) {
    var insertAfterIndex = (Math.floor(i / j) + 1) * j - 1;
    if (insertAfterIndex > jQuery(".person").length - 1) {
        insertAfterIndex = jQuery(".person").length - 1;
    }
    return insertAfterIndex;
}

function buildBioObject(el) {
    var jQuerythis = jQuery(el).parents(".person");
    var bio = new Object();
    bio.scrollTo = jQuerythis;
    bio.name = jQuerythis.find(".name").text().trim();
    
    bio.biographyText = jQuerythis.find(".biography-text").html();
   

    bio.index = jQuery('.person .name').filter(function () {
        return (jQuery(this).text().trim() === bio.name);
    }).parents('li').index();
    if (jQuery(".biography").index() < bio.index && jQuery(".biography").index() != -1) bio.index--;
	if (jQuery(window).width() < 400) {
		bio.rowIndex = findrow(bio.index,1);
	}
	else
	{
		bio.rowIndex = findrow(bio.index,1); 
	}


  
 
 
    return bio;
}

function buildBioHTML(biography) {

    var jQuerynewBio = jQuery("#bioTemplate div").first().clone();
    jQuerynewBio.first().attr("class", "biography");
    jQuerynewBio.data("index", biography.index);
    jQuerynewBio.data("rowIndex", biography.rowIndex);
    jQuerynewBio.find(".bio-name").text(biography.name);
    
    jQuerynewBio.find(".bio-text").html(biography.biographyText);
   
   
    
   

    return jQuerynewBio;
}


