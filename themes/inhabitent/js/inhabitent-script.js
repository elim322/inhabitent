(function($){
  
	
  $('.site-header .main-navigation .icon-search').on('click', function(event) {
    event.preventDefault();
    console.log('click');
    $('.site-header .main-navigation .search-field').addClass('show');
    $('.site-header .main-navigation .search-field').focus(); 
  });

  $('.site-header .main-navigation .search-field').on('blur', function(){
    $('.site-header .main-navigation .search-field').removeClass('show');
  });

  


})(jQuery);
