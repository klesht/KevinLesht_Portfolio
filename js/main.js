$(document).scroll(function() {

	if ($(this).scrollTop() >= 545) {
		$(".top-navigation").addClass("shrink");
	} else {
		$(".top-navigation").removeClass("shrink");
	}
	
});
