$=jQuery.noConflict();

$(document).ready(function() {
  // menu button
  $('.mobile-menu a').on('click', function(){
    $('nav.site-nav').toggle('slow');
  });
//show mobile menu
  var breakpoint = 768;
  $(window).resize(function(){

      if($(document).width()>= breakpoint){
        $('nav.site-nav').show();
      }else {
        $('nav.site-nav').hide();
      }
  });

  jQuery('.columns-5 li figure a').each(function(){
  jQuery(this).attr({'data-fluidbox': ''});
  });
  if(jQuery('[data-fluidbox]').length > 0){
    jQuery('[data-fluidbox]').fluidbox();
  }

});
//fluidbox
