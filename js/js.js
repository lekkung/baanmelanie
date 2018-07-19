$(function() {
	$('#carousel-index').carousel({
		interval: 5000,
		pause: ""
	})
	$('#carousel-promotion').carousel({
		interval: 4000,
		pause: ""
	})
});

function active_menu(page) {
	if (page == '') {
		$('.melanie_menu li.home').addClass('active');
	} else {
		$('.melanie_menu li.' + page).addClass('active');
	}
}

/*
var ph = setInterval(promo_hilight, 1000);
function promo_hilight() {
  if ( hexc($('.promo-index .detail label').css("background-color")) == "#610061" ) {
    $('.promo-index .detail label').css("background-color","#eb2352");
  }else{
    $('.promo-index .detail label').css("background-color","#610061");
  }
}

function hexc(colorval) {
    var parts = colorval.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);
    delete(parts[0]);
    for (var i = 1; i <= 3; ++i) {
	   parts[i] = parseInt(parts[i]).toString(16);
	   if (parts[i].length == 1) parts[i] = '0' + parts[i];
    }
    color = '#' + parts.join('');
    return color;
}
*/
