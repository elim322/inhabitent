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

  $('.site-header .reverse-header .main-navigation .icon-search').on('click', function(event) {
    event.preventDefault();
  
    $('.site-header .reverse-header .main-navigation .search-field').addClass('show');
    $('.site-header .reverse-header .main-navigation .search-field').focus(); 
  });

  $('.site-header .reverse-header .main-navigation .search-field').on('blur', function(){
    $('.site-header .reverse-header .main-navigation .search-field').removeClass('show');
  });

  


  // try on click of the search icon to .focus on the input field and try adding another listener for a .blur event, e.g. when you focus on the input if that input is blurred ( loses focus ) then close the search form
  // .focus
  // .blur

 // $('input-field-class').on('blur', function(){})


})(jQuery);
