



function yellow_resize() {
	var windowH = $(window).height();
	if (windowH > 450) {
		var margin_t = windowH - 450;
		var margin = margin_t / 7;
		var y_padding = margin/2;
		$('.cu_container').css("margin-top", margin + "px");
	}
	$('.cu_container').css("padding", y_padding + "px");
}

$(window).resize(yellow_resize);
$(window).focus(yellow_resize);


$(document).ready(function(){

	yellow_resize();

});

