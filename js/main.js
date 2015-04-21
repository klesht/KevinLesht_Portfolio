$(document).scroll(function() {

	if ($(this).scrollTop() >= 550) {
		$(".top-navigation").addClass("shrink");
	} else {
		$(".top-navigation").removeClass("shrink");
	}
	
});