window.onload = function() {
	jQuery(window).scroll(
		function() {
       jQuery('#socialproof-block').css("visibility","visible");
       jQuery('#socialproof-block').animate({opacity: "1"},2000);
      }

	);
};
