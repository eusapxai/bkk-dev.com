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
		navText: ["<", ">"],
		responsive: {
			0: { items: 2 },
			1500: { items: 6 },
			1200: { items: 5 },
			992: { items: 3 },
			700: { items: 2 },
		},
	});
});
