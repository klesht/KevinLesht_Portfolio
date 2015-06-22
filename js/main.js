$(document).ready(function($){

	var headerNav = $('.top-navigation--fixed');

	$(window).on('scroll', function() {

		if ($(this).scrollTop() >= 550) {
			$('.top-navigation--fixed').addClass('shrink');
		} else {
			$('.top-navigation--fixed').removeClass('shrink');
		}

	});
	
	headerNav.find('ul a.goto').on('click', function(e){
		e.preventDefault();

		var target= $(this.hash);
        
        $('body,html').stop().animate({
        	'scrollTop': target.offset().top - headerNav.height() + 1
        }, 400);
    });

	var $modal = $('.modal'),
		$modal_nav = $('.modal-toggle');

	$modal_nav.on('click', function(e) {

		$modal.addClass('is-visible');

	});

	// close modal
	$('.modal').on('click', function(e) {

		if( $(e.target).is($modal) || $(e.target).is('.close-modal') ) {
			$modal.removeClass('is-visible');
		}
	});

	// close modal when clicking the esc keyboard button
	$(document).keyup(function(e) {

		// ascii code for escape
		if(e.which=='27') {
			$modal.removeClass('is-visible');
		}
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