(function($) {
	$('#mobile-nav').click(function(){
    $('#nav-menu').slideToggle();
  });

  $(window).on('resize', function(){
    var menu = $('#nav-menu');
    var w = $(window).width();
    if(w >= 680 ) {
        menu.show()
    }else{
        menu.hide();
    }
  })

})( jQuery );