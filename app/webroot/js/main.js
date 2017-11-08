$(document).ready(function() {
 
//==================== Prettyphoto ========================//

$("a[class^='prettyPhoto']").prettyPhoto({theme:'pp_default'});


//==================== Flexslider ========================//

$('#main-slider').flexslider({
	animation: "fade",
	start: function(slider){
	$('body').removeClass('loading');
	}
});


$('#quotes').flexslider({
	animation: "fade",
	controlNav: false,
	start: function(slider){
	$('body').removeClass('loading');
	}
});


//==================== Carousel ========================//

$(window).load(function() {
	$('#sshot').carouFredSel({
	responsive: true,
	width: '100%',
	scroll: 1,
	auto: false,
	prev: '#prev2',
	next: '#next2',
	items: {
		width: 310,
	//	height: 'auto',	//	optionally resize item-height
		visible: {
			min: 1,
			max: 6
		}
	}
});
});

});

