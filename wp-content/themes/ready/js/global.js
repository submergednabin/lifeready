// Can also be used with $(document).ready()
jQuery(document).ready(function($){

	$(window).load(function() {
	  $('.flexslider').flexslider({
	    animation: "slide",
	    controlNav: "thumbnails"
	  });
	});
}(jQuery));