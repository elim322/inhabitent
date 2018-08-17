jQuery(document).ready(function( $ ) {
var trig = 1; 
	
  $('.fa-search').on('click', function() {
    if (trig === 1) {
    $(this).siblings().show().animate({
      width: '+=50'
    }, 400);
    trig ++; 
    }
    $('.search-hide').addClass('hide');
  }) 
  $('.fa-search').focusout(function () {
    $(this).siblings().hide().animate({
      width: '-=50'
    }, 400);
    trig = trig - 1; 
    $('.search-hide').removeClass('hide');
  });
	
});