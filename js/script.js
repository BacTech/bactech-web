$(function() {
	
	// Scroll to Explore 

    $('.scrollto, .go_to_div').bind('click',function(event){
		 var $anchor = $(this);
		 $('html, body').stop().animate({
         scrollTop: $($anchor.attr('href')).offset().top
          }, 1500);
     event.preventDefault();
      });
	  
	  

  // Initiate Exit modal 
  
        var _ouibounce = ouibounce($('#exit-modal')[0], {
        aggressive: true,
        timer: 0,
        callback: function() { // if you need to do something, write here
		}
      });
      $('body').on('click', function() {
        $('#exit-modal').hide();
      });
      $('#exit-modal .modal-footer').on('click', function() {
        $('#exit-modal').hide();
      });
      $('#exit-modal .exit-modal').on('click', function(e) {
        e.stopPropagation();
      });
 
	  
	  
});
        
