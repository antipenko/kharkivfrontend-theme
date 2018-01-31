
// require slick.min.js
//
// Google Map ACF functions
//import "components/map.js" ;
(function($) {

	$(document).ready(function() {
		//var $slider = $('.ba-slider');

		// $slider.slick({
		// 	dots: true,
		// 	infinite: false
		// });

        let $body = $('body')
            , scrollClass = "is-scroll"
            , $menuButton = $('.toggle-menu-button')
            , menuShowClass = 'is-menu-show'
            , menuClass = '.toggle-menu-button';

        $menuButton.on('click', function() {
            $body.toggleClass(menuShowClass);
        });
	});

	$(window).load(function() {
		$('header').addClass('header-cool');
	});

    $(window).on("load", function () {
            new WOW().init();
    });

	$(window).on('resize', function() {

	});

})(jQuery);


















