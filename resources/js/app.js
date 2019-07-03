window.$ = window.jQuery = require('jquery')
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
require('jquery/dist/jquery');
require('materialize-css/dist/js/materialize.min');

$(document).ready(function(){
	$('.sidenav').sidenav();
	$('.fixed-action-btn').floatingActionButton({
		direction: 'top',
      	hoverEnabled: true
	});

	$('.tooltipped').tooltip();

	$('.activator').mouseenter(function(e){
    	$(this).trigger('click');
	});

	setInterval(function() {
    $('.carousel').carousel('next');
  	}, 12000);

	$('.carousel.carousel-slider').carousel({
    	fullWidth: true,
    	indicators: false
  	});

  	$('.modal').modal({
  		opacity: 0.3
  	});

  	$(".dropdown-trigger").dropdown({
  		coverTrigger: false,
  		alignment: 'right',
  		constrainWidth: false
  	});

  	$('.collapsible').collapsible({
  		accordion: false
  	});

  	$('select').formSelect({
  		dropdownOptions: {
  			coverTrigger: false
  		}
  		
  	});


});



