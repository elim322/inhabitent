jQuery(document).ready(function( $ ) {

	
  $('fas fa-search').on('click', function() {
    $('.form-search .search-input').addClass('show');
    $('.form-search .search-input').focus(); 
  });
  $('.form-search .search-input').on('blur', function(){
    $('.form-search .search-input').removeClass('show');
  });

  


  // try on click of the search icon to .focus on the input field and try adding another listener for a .blur event, e.g. when you focus on the input if that input is blurred ( loses focus ) then close the search form
  // .focus
  // .blur

 // $('input-field-class').on('blur', function(){})

});
