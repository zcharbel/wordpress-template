$( document ).ready(function() {
	
	// mobile nave functionality
	mobileNav();
	
	// activates accordions
	accordion();
	
	
});

function accordion(){
	var acc = document.getElementsByClassName("accordion");
	var i;
	
	for (i = 0; i < acc.length; i++) {
		acc[i].addEventListener("click", function() {
			this.classList.toggle("active");
			var panel = this.nextElementSibling;
			if (panel.style.display === "block") {
				panel.style.display = "none";
			} else {
				panel.style.display = "block";
			}
		});
	}
}

function mobileNav() {
	$('.nav-toggle').on('click', function(){

	  if ($(this).hasClass('active')) {
		  $('#menu-primary-menu, .nav-toggle').removeClass('active');
	  }else{
		  $('#menu-primary-menu, .nav-toggle').addClass('active');
	  }

  });
}