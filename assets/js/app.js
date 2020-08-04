$(function () {
	$('[data-toggle="tooltip"]').tooltip();
});

$(document).ready(function () {
	$(".spon-slider").owlCarousel({
		dots: false,
		loop: true,
		autoplay: false,
		autoplayHoverPause: true,
		smartSpeed: 1000,
		lazyLoad: true,
		nav: true,
		margin: 0,
		navText: [
			"<div class='left arrow'></div>",
			"<div class='right arrow'></div>",
		],
		responsive: {
			0: { items: 2 },
			1500: { items: 6 },
			1200: { items: 5 },
			992: { items: 4 },
			700: { items: 3 },
		},
	});

	$(".invest-slider").owlCarousel({
		dots: true,
		loop: true,
		autoplay: false,
		autoplayHoverPause: true,
		smartSpeed: 1000,
		lazyLoad: true,
		nav: false,
		margin: 0,
		navText: ["<", ">"],
		responsive: {
			0: { items: 1 },
			1500: { items: 1 },
			1200: { items: 1 },
			992: { items: 1 },
			700: { items: 1 },
		},
	});
});
