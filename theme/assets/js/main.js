$( document ).ready(function() {
	
	// mobile nave functionality
	//mobileNav();
	mainNav();
	
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

function mainNav() {

	// adds class to links to build the
	// js structure for the main navigation
	$('.menu').find('li ul').parent().addClass('has-children');
	$('.menu').find('li ul').addClass('sub-menu');
	$('.has-children').find('a:first-child').addClass('parent-link');
	$('#menu-main .sub-menu').find('li > a').removeClass('parent-link');

	$(window).on('resize',function(){
		$('.sub-menu').removeClass('opened');
	});

	if ($(window).width() >= 1000) {
		// desktop main nav

		$('.header__content').on('mouseleave', function(){
			$('.sub-menu').removeClass('opened');
		});
		
		$('#menu-main').find('li > a.parent-link').on('mouseenter', function(){
			$('.sub-menu').removeClass('opened');
		});
		
		$('#menu-main').find('li.has-children > a').on('mouseenter', function(){
			$('.sub-menu').removeClass('opened');
			$('#menu-main li.has-children').find('ul').addClass('opened');
		});

		// closed drop down navigation
		$('.sub-menu').on('mouseleave', function(){
			$('#menu-main li.has-children').find('ul').removeClass('opened');
		});
		
		// end $(window).width >= 1000px

	} else {
		// mobile main nav jquery

		$('.nav-toggle').on('click', function(){			
			if ($(this).hasClass('active')) {
				$('body').removeClass('fixed-position');
				$('.menu-main-container, .nav-toggle').removeClass('active');
			}else{
				$('.menu-main-container, .nav-toggle').addClass('active');
				$('body').addClass('fixed-position');
			}
		});

		// opens the second tier of navgation on mobile

		$('#menu-main').find('li > a').click(function(e){
			
			if($(this).hasClass('parent-link')){
				e.preventDefault();
				
				$('.sub-menu').removeClass('opened');
				$('#menu-main li.has-children').find('ul').addClass('opened');
				
			}

		});

		// opens sub-menu of second tier navigation on mobile
		$('.drawer .menu').find('li > a').click(function(e){

			if($(this).parent().hasClass('has-children')){

				e.preventDefault();

				//$('.drawer .menu li > a').removeClass('active');
				$('.drawer .menu li > a').removeClass('active');
				$(this).addClass('active');
				$('.sub-menu').removeClass('opened');
				$(this).parent().find('.sub-menu').addClass('opened');

			}

		});

		// closes sub-menu drawer on mobile nav
		$('.close-drawer').on('click', function(){
			$('.main-nav-drawer-holder, .drawer, .sub-menu').removeClass('opened');
		});

	} // end window width
} // end mainNav