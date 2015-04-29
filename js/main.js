// Nav effects
$(document).ready(function($){

	var headerNav = $('.top-navigation'),
		contentSections = $('.test-section');

	$(window).on('scroll', function() {

		if ($(this).scrollTop() >= 550) {
			$('.top-navigation').addClass('shrink');
		} else {
			$('.top-navigation').removeClass('shrink');
		}

		updateHeaderNav();
	});

	function updateHeaderNav() {
		contentSections.each(function(){
			var actual = $(this),
				actualHeight = actual.height(),
				actualAnchor = headerNav.find('a[href="#'+actual.attr('id')+'"]');

			if ( ( actual.offset().top - headerNav.height() <= $(window).scrollTop() ) && ( actual.offset().top +  actualHeight - headerNav.height() > $(window).scrollTop() ) ) {
				actualAnchor.addClass('active');

			} else {
				actualAnchor.removeClass('active');
			}

		});
	}
	
	headerNav.find('ul a.goto').on('click', function(e){
        e.preventDefault();
        var target= $(this.hash);
        $('body,html').stop().animate({
        	'scrollTop': target.offset().top - headerNav.height() + 1
        	}, 400
        );
    });

});

// Parallax effects
$(window).scroll(function(e){
	scrollBanner();
});

function scrollBanner() {

	scrollPos = $(this).scrollTop();

	$('.page-intro').css({
		'top' : -(scrollPos/10)+"px"
	});

}