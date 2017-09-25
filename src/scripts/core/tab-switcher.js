(function ($) {
	/* $(window).on('load', function() { // makes sure the whole site is loaded 
		$('#loader').fadeOut(); // will first fade out the loading animation 
		$('#preloader').delay(150).fadeOut('slow'); // will fade out the white DIV that covers the website. 
		$('body').delay(150).css({'overflow':'auto'});
	}) */

	// Variables
	var clickedTab = $(".tabs > .active");
	var tabWrapper = $(".tab__content");
	var wavebg = $(".wave-bg");
	var activeTab = tabWrapper.find(".active");
	var activewavebg = wavebg.find(".active");
	var activeTabHeight = activeTab.outerHeight();

	// Show tab on page load
	activeTab.show();

	// Set height of wrapper on page load
	tabWrapper.height(activeTabHeight);

	$(".tabs > li").on("click", function () {
		var el = $(this);
		var clickedtab = parseInt(el.attr("data-id"));
		// Remove class from active tab
		$(".tabs > li").removeClass("active");
		wavebg.removeClass("active");

		// Add class active to clicked tab
		el.addClass("active");
		wavebg.eq(clickedtab).addClass("active");

		// Update clickedTab variable
		clickedTab = $(".tabs .active");

		// fade out active tab
		activeTab.fadeOut(150, function () {

			// Remove active class all tabs
			$(".tab__content > li").removeClass("active");

			// Get index of clicked tab
			var clickedTabIndex = clickedTab.index() + 1;

			// Add class active to corresponding tab
			$(".tab__content > li").eq(clickedTabIndex).addClass("active");

			// update new active tab
			activeTab = $(".tab__content > .active");

			// Update variable
			activeTabHeight = activeTab.outerHeight();

			// Animate height of wrapper to new tab height
			tabWrapper.stop().animate({
				height: activeTabHeight
			}, 300, function () {

				// Fade in active tab
				activeTab.fadeIn(150);

			});
		});
	});

	// TweenLite.to(window, 1, {
	// 	scrollTo: "#item",
	// 	offsetY: 240
	// });
})(jQuery);