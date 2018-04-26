
$ = jQuery.noConflict();

$(document).ready(function(){
	//menu button
	// console.log("it works");
	// to show and hide the menu it will display
	$('.mobile-menu a').on('click',function(){
	$('nav.site-nav').toggle('slow');	
	});

// to show the main menu conditioning. pag nareresize
//show mobile menu
	var breakpoint = 768;
	$(window).resize(function(){
// para kada magreresize yung browser nagaadjust syang size
		boxAdjustment();
		if($(document).width() >= breakpoint){
			$('nav.site-nav').show();
			} else{
				$('nav.site-nav').hide();
			}
		
	});
 boxAdjustment();


	
});


function boxAdjustment(){
	//adapt the height of the images to the div elements
	var images = $('.box-image');
	// kukunin yung height ng image
	// console.log(images);
	//image[0] position ng image na kukunin mo yung size
	if (images.length > 0){
var imageHeight = images[0].height;
	var boxes = $('.content-box');
	// yung element yung boxes gagayahin nya yung height ng image 
	$(boxes).each(function(i, element){
		$(element).css({'height': imageHeight +'px'});
	});	
		
	}
	
}