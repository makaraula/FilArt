/*ovdje se nalaze funcije za javascript/jquery*/

$(document).ready(function() {


    $("img.lazy").lazy({
    	effect : "fadeIn",
    	effectTime: 800,
    	threshold: 0
    });


	$('.nav-icon').click(function(){
		$(this).toggleClass('open');
    $('body').toggleClass('fix');
		$('.izbornik').toggleClass('active');
	});


	$(window).scroll(function() {
	    if ($(window).width() >= 980) {
	        if ($(document).scrollTop() > 10) {
	            $('.header').addClass('shrink');
	        } else {
	            $('.header').removeClass('shrink');
	        }
	    }
	});


	$('.gallery').each(function() {
	    $(this).magnificPopup({
	      delegate: 'a',
	      type: 'image',
	      tLoading: 'Loading image #%curr%...',
	      mainClass: 'mfp-img-mobile gallery-img',
	      gallery: {
	      enabled: true,
	      navigateByImgClick: true,
	      preload: [0,1] // Will preload 0 - before current, and 1 after the current image
	      }
	    });
	});


});
