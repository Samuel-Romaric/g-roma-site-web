$(function () {
	
	$('.flash').css({

		'z-index': 999999,
		'font-family': 'Arial sans-serif',
		'padding': '11px 30px',
		'border-radius': '4px',
		'font-weight': 400,
		'position': 'fixed',
		'top': '100px',
		'right': '20px',
		'font-size': '15px',
		'color': '#fffff',
		'font-style': 'italic',

	}).show(6000).delay(5000).animate({
		marginRight: "-100%"
	}, 6000);

});
