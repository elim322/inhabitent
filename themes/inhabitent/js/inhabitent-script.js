(function($){
  
	
  $('.main-navigation .icon-search').on('click', function(event) {
    event.preventDefault();
    $('.main-navigation .search-field').addClass('show');
    $('.main-navigation .search-field').focus(); 
  });

  $('.main-navigation .search-field').on('blur', function(){
    $('.main-navigation .search-field').removeClass('show');
  });

  $('.reverse-header .main-navigation .icon-search').on('click', function(event) {
    event.preventDefault();
    console.log('click');
    $('.reverse-header .main-navigation .search-field').addClass('show');
    $('.reverse-header .main-navigation .search-field').focus(); 
  });

  $('.reverse-header .main-navigation .search-field').on('blur', function(){
    $('.reverse-header .main-navigation .search-field').removeClass('show');
  });

  


  // try on click of the search icon to .focus on the input field and try adding another listener for a .blur event, e.g. when you focus on the input if that input is blurred ( loses focus ) then close the search form
  // .focus
  // .blur

 // $('input-field-class').on('blur', function(){})


})(jQuery);
