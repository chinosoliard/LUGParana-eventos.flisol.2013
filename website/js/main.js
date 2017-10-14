$(document).ready(function() {

	$("html").niceScroll();

	$(".scroll").click(function(event){		
		event.preventDefault();
		$('html,body').animate({scrollTop:$('[name="'+this.hash.substring(1)+'"]').offset().top}, 500);
	});
	

});