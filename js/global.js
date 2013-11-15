//Fancybox videos
$(document).ready(function() {
  $('.fancybox').fancybox({
  	padding		: 0,
  	maxWidth	: 560,
		maxHeight	: 315,
		fitToView	: false,
		width		: '75%',
		height		: '75%',
		autoSize	: true,
		closeClick	: true,
		openEffect	: 'none',
		closeEffect	: 'none'
  });

  var $videogallery = $('#videogallery');
  // initialize Masonry after all images have loaded  
  $videogallery.imagesLoaded( function() {
    $videogallery.masonry();
  });

  var $container;
  function triggerMasonry() {
    // don't proceed if $container has not been selected
    if ( !$container ) {
      return;
    }
    // init Masonry
    $container.masonry({
      columnWidth: 0,
      itemSelector: '.calendar'
    });
  }
  // trigger masonry on document ready
  $(function(){
    $container = $('#events');
    triggerMasonry();
  });

});