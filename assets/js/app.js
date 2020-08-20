$(function () {
	$('[data-toggle="tooltip"]').tooltip();
});

function loadCaptcha() {
	console.log("load");
$(document).ready(function () {
	$(window).resize(function () {
		var screenSize = $(window).width();
		if (screenSize > 1500) {
			$("#mainbanner").addClass("container");
			$("#mainbanner").removeClass("container-fluid");
		} else {
			$("#mainbanner").addClass("container-fluid");
			$("#mainbanner").removeClass("container");
		}
	});
	$(".spon-slider").owlCarousel({
		dots: false,
		loop: true,
		autoplay: true,
		autoplayHoverPause: true,
		smartSpeed: 1000,
		lazyLoad: true,
		nav: true,
		margin: 0,
		navText: [
			"<div class='owl-arrow owl-left'></div>",
			"<div class='owl-arrow owl-right'></div>",
		],
		responsive: {
			0: { items: 2 },
			1500: { items: 5 },
			1200: { items: 5 },
			992: { items: 4 },
			700: { items: 3 },
		},
	});

	$(".invest-slider").owlCarousel({
		dots: true,
		loop: true,
		autoplay: true,
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
	$(".banner-slider").owlCarousel({
		dots: true,
		loop: true,
		autoplay: true,
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
