$(function() {
	
	// Scroll to Explore 

    $('.scrollto, .go_to_div').bind('click',function(event){
		 var $anchor = $(this);
		 $('html, body').stop().animate({
         scrollTop: $($anchor.attr('href')).offset().top
          }, 1500);
     event.preventDefault();
      });
	  
	  
});
        
