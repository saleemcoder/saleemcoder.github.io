//PRE-LOADER
$(window).on("load", function() {
	$(".vertical-centered-box").fadeOut("slow");
	$("body").removeClass("hid");
});

// Input Form History Clear
$(document).ready(function(){
	if (window.history.replaceState){
		window.history.replaceState( null, null, window.location.href );
	}
});

$(window).on('load', function() {
	
	/* -----------------------------------
			Isotope Portfolio Setup
	----------------------------------- */
    if( $('.portfolio-items').length ) {
        var $elements = $(".portfolio-items"),
            $filters = $('.portfolio-filter ul li');
        $elements.isotope();

        $filters.on('click', function(){
            $filters.removeClass('active');
            $(this).addClass('active');
            var selector = $(this).data('filter');
            $(".portfolio-items").isotope({
                filter: selector,
                hiddenStyle: {
                    transform: 'scale(.2) skew(30deg)',
                    opacity: 0
                },
                visibleStyle: {
                    transform: 'scale(1) skew(0deg)',
                    opacity: 1,
                },
                transitionDuration: '.5s'
            });
			
			
			setTimeout(function(){
				var portfolioGalleryHeight = $('.portfolio-items').innerHeight() + 244;
			
				$('.panel-body').css('min-height', ''+portfolioGalleryHeight+'px');
			}, 200);
        });
		
    }
	
});

$(document).ready(function() {
    "use strict";
	
	/* -----------------------------------
	      Portfolio Image Link
	----------------------------------- */
	$(".portfolio-items .image-link").magnificPopup({
		type: "image"
	});
	
	/* -----------------------------------
	      Portfolio Video Link
	----------------------------------- */
	$(".portfolio-items .video-link").magnificPopup({
		type: "iframe"
	});

});

// NAV-TABS
$(document).ready(function() {
	
	function getUrlHash(href){
		
		var innerBodyHieght = 0;
		
		window.scrollTo(0,document.body.scrollHeight);

		$('.innerBody').removeClass("move");
		
		targetName = href.replace("#", "");
		
		if(targetName == 'home'){
			$('.panel-body').css('min-height', 'auto');
			$('body').addClass('bodywall')
		}else{
			$('body').removeClass('bodywall')
		}
		
		$('.innerBody[target='+targetName+']').addClass("move");
		setTimeout(function(){
			var innerBodyHieght = $('.innerBody[target='+targetName+']').innerHeight();
			$('.panel-body').css('min-height', ''+innerBodyHieght+'px');
			
			$('[data-toggle="tooltip"]').tooltip("hide");
			
		}, 100);
	}
	
	$('.nav-links').click(function() {
		var pageName = $(this).attr('href');
		getUrlHash(pageName);
	});
	
	var currentPage = location.hash;
	if(currentPage){
		getUrlHash(currentPage);	
	}else{
		getUrlHash('#home');
	}

});

// NAVBAR-TOGGLER
$(document).ready(function(){
	$('.screen-overlay, .sidebarBtn').click(function(){
		$('.panel-navbar').toggleClass('show');
		$('.screen-overlay').toggleClass('show');
		$('.control-side-menu').toggleClass('change');
	});
});

$(document).ready(function(){
	$('.nav-links').click(function(){
		$('.panel-navbar').removeClass('show');
		$('.screen-overlay').removeClass('show');
		$('.control-side-menu').removeClass('change');
	});
});

//NAVBAR-LINKS-TOOL-TIPS
$(function () {
	$('[data-toggle="tooltip"]').tooltip();
});

//SLIDER
$(".testimonial .owl-carousel").owlCarousel({
	loop: true,
	margin: 30,
	autoplay: true,
	smartSpeed: 500,
	responsiveClass: true,
	dots: false,
	nav: true,
	autoplayHoverPause: true,
	responsive: {
		0: {
			items: 1,
		},
		800: {
			items: 1,
		},
		1000: {
			items: 2,
		},
	},
});

function addHighlightedClass(event) {
	var target = event.currentTarget;
	if (window.previewHighlited)
	  window.previewHighlited.classList.remove("text-white");

	target.classList.add("text-white");
	window.previewHighlited = target;
}