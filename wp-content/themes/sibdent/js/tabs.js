// табы
jQuery(document).ready(function($){
	$('.price-panel-heading').click(function() {
	  $(this).toggleClass('in').next().slideToggle();
	  $('.price-panel-heading').not(this).removeClass('in').next().slideUp();
	})
});
// end аккордеон на странице с ценами 