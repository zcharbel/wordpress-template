$( document ).ready(function() {
	
	mobileNav();
	
});

function mobileNav() {
	$('.nav-toggle').on('click', function(){

	  if ($(this).hasClass('active')) {
		  $('#menu-primary-menu, .nav-toggle').removeClass('active');
	  }else{
		  $('#menu-primary-menu, .nav-toggle').addClass('active');
	  }

  });
}