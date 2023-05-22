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

function mobileNav() {
	$('.nav-toggle').on('click', function(){

	  if ($(this).hasClass('active')) {
		  $('#menu-main, .nav-toggle').removeClass('active');
	  }else{
		  $('#menu-main, .nav-toggle').addClass('active');
	  }

  });
}

function mainNav() {
	$('.menu').find('li ul').parent().addClass('has-children');
	$('.menu').find('li ul').addClass('sub-menu');

	// adds "data-drawer" to li to open sub menu
	/*$('#menu-main').find('li > a').each(function(){
		var getText = $(this).text().toLowerCase().replace(/& /g, '').replace(/ /g, '-');
		$(this).attr('data-drawer', getText);
	});*/

	$(window).on('resize',function(){
		//$('#menu-main li a').removeClass('active');
		$('.sub-menu').removeClass('opened');
	});

	if ($(window).width() >= 1000) {
		// desktop main nav jquery

		$('.header__content').on('mouseleave', function(){
			//$('#menu-main li').removeClass('active');
			$('.sub-menu').removeClass('opened');
		});

		$('#menu-main').find('li.has-children > a').on('mouseenter', function(){
			//let subNav = $(this).data('drawer');

			//$('#menu-main li').removeClass('active');
			//$(this).addClass('active');
			$('.sub-menu').removeClass('opened');
			$('#menu-main li.has-children').find('ul').addClass('opened');
		});

		// closed drop down navigation
		$('.sub-menu').on('mouseleave', function(){
			//$('#menu-main li').removeClass('active');
			$('#menu-main li.has-children').find('ul').removeClass('opened');
		});
		
		// end $(window).width >= 1000px

	} else {
		// mobile main nav jquery

		$('.navbar-toggler').on('click', function(){

			if ($(this).attr('aria-expanded') === "true") {
				$(this).attr("aria-expanded","false");
				$('header, .menu-main-container, .main-nav-drawer-holder, .drawer, .sub-menu, #searchform').removeClass('opened');
			}else{
				$(this).attr("aria-expanded","true");
				$('header, .menu-main-container, #searchform').addClass('opened');
			}

		});

		// opens the second tier of navgation on mobile
		$('#menu-main li').find('a').addClass('single');

		   $('#menu-main').find('li > a').click(function(e){
			if($(this).hasClass('single')){
				// do nothing
			}else{
				e.preventDefault();
				let subNav = $(this).data('drawer');

				$('#menu-main li a').removeClass('active');
				$(this).addClass('active');
				$('.main-nav-drawer-holder, .drawer').removeClass('opened');
				$('.main-nav-drawer-holder, .drawer.' + subNav).addClass('opened');
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